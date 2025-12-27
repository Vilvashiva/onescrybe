<?php

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// iploc.php — IP→Geo via ip-api.com and DB logging (PDO)

$host_name = 'db5017844430.hosting-data.io';
$database = 'dbs14226239';
$user_name = 'dbu5127393';
$password = 'OMNAMAsiva11$';

$DB_HOST = $host_name;
$DB_NAME = $database;
$DB_USER = $user_name;
$DB_PASS = $password;
$DB_CHARSET = 'utf8mb4';

$dsn = "mysql:host={$DB_HOST};dbname={$DB_NAME};charset={$DB_CHARSET}";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $DB_USER, $DB_PASS, $options);
    //echo "✓ Database connected<br>";
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

function get_client_ip(array $trustedProxies = []): string {
    if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        $ip = trim($_SERVER['HTTP_CF_CONNECTING_IP']);
        if (filter_var($ip, FILTER_VALIDATE_IP)) return $ip;
    }

    $remote = $_SERVER['REMOTE_ADDR'] ?? '';
    $isTrusted = $remote && in_array($remote, $trustedProxies, true);

    if ($isTrusted && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $parts = array_map('trim', explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
        foreach ($parts as $candidate) {
            if (filter_var($candidate, FILTER_VALIDATE_IP)) return $candidate;
        }
    }

    foreach (['HTTP_X_REAL_IP', 'HTTP_CLIENT_IP'] as $h) {
        if (!empty($_SERVER[$h]) && filter_var($_SERVER[$h], FILTER_VALIDATE_IP)) {
            return $_SERVER[$h];
        }
    }

    return $remote ?: '0.0.0.0';
}

function geo_lookup_ip_api(string $ip, int $timeoutMs = 1200): array {
    //echo "→ Looking up IP: {$ip}<br>";

    if (!filter_var($ip, FILTER_VALIDATE_IP)) {
        //echo "✗ Invalid IP format<br>";
        return [];
    }

    $fields = implode(',',
        ['status','message','continent','continentCode','country','countryCode',
         'regionName','city','lat','lon','timezone','isp','org','as','query',
         'mobile','proxy','hosting']
    );
    $url = "http://ip-api.com/json/{$ip}?fields=" . urlencode($fields);

    //echo "→ API URL: {$url}<br>";

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CONNECTTIMEOUT_MS => $timeoutMs,
        CURLOPT_TIMEOUT_MS => $timeoutMs,
        CURLOPT_USERAGENT => 'iploc/1.0',
    ]);

    $resp = curl_exec($ch);
    $err  = curl_error($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($err) {
        //echo "✗ CURL Error: {$err}<br>";
        return [];
    }

    if (!$resp) {
        //echo "✗ Empty response from API<br>";
        return [];
    }

    //echo "✓ API responded (HTTP {$httpCode})<br>";
    //echo "→ Response: " . htmlspecialchars(substr($resp, 0, 200)) . "...<br>";

    $data = json_decode($resp, true);

    if (!is_array($data)) {
        //echo "✗ Invalid JSON response<br>";
        return [];
    }

    if (($data['status'] ?? 'fail') !== 'success') {
        //echo "✗ API returned status: " . ($data['status'] ?? 'unknown') . "<br>";
        //echo "→ Message: " . ($data['message'] ?? 'none') . "<br>";
        return [];
    }

    //echo "✓ Geo data retrieved successfully<br>";
    return $data;
}

function save_visit(PDO $pdo, array $geo, array $meta): void {
    //echo "→ Saving to database...<br>";

    $sql = "INSERT INTO visitor_locations
            (visit_time, ip, country, country_iso, region, city, lat, lon,
             page, referrer, user_agent, source)
            VALUES (NOW(),
                INET6_ATON(:ip), :country, :country_iso, :region, :city, :lat, :lon,
                :page, :ref, :ua, :source)";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':ip'         => $geo['query']        ?? null,
            ':country'    => $geo['country']      ?? null,
            ':country_iso'=> $geo['countryCode']  ?? null,
            ':region'     => $geo['regionName']   ?? null,
            ':city'       => $geo['city']         ?? null,
            ':lat'        => $geo['lat']          ?? null,
            ':lon'        => $geo['lon']          ?? null,
            ':page'       => $meta['page']        ?? null,
            ':ref'        => $meta['referrer']    ?? null,
            ':ua'         => $meta['user_agent']  ?? null,
            ':source'     => $meta['source']      ?? 'ip-api'
        ]);
        //echo "✓ Data saved to database<br>";
    } catch (PDOException $e) {
        echo "✗ Database error: " . $e->getMessage() . "<br>";
    }
}

function record_visit(PDO $pdo, array $opts = []): array {
    $ip = get_client_ip($opts['trustedProxies'] ?? []);
    //echo "→ Client IP detected: {$ip}<br>";

    $geo = geo_lookup_ip_api($ip);

    $meta = [
        'page'       => $_SERVER['REQUEST_URI']        ?? null,
        'referrer'   => $_SERVER['HTTP_REFERER']       ?? null,
        'user_agent' => $_SERVER['HTTP_USER_AGENT']    ?? null,
        'source'     => 'ip-api',
    ];

    if (!empty($geo)) {
        save_visit($pdo, $geo, $meta);
    }

    return $geo;
}

/*echo "✓ Functions loaded<br><br>";
echo "<strong>Starting visitor tracking...</strong><br><br>";

// Record the visit
$geo = record_visit($pdo);

echo "<br><strong>Results:</strong><br>";

// Display results
if (!empty($geo)) {
    echo "<h3>✓ Visitor Location Data:</h3>";
    echo "<pre>" . print_r($geo, true) . "</pre>";

    if (($geo['countryCode'] ?? '') === 'IN') {
        echo '<div class="notice">Namaste! 🇮🇳</div>';
    }
} else {
    echo "<p>✗ Could not retrieve geo data</p>";
}

echo "<br><strong>Debug complete</strong>";
 */
?>

