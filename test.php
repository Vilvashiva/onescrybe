<?php

require_once "dbpdo.php";

function getClientIp(): string {
    $headers = [
        'HTTP_CF_CONNECTING_IP', // Cloudflare
        'HTTP_X_REAL_IP',
        'HTTP_X_FORWARDED_FOR',   // may contain comma-separated list
        'HTTP_CLIENT_IP',
        'REMOTE_ADDR'
    ];

    foreach ($headers as $h) {
        if (!empty($_SERVER[$h])) {
            $ip = $_SERVER[$h];
            // If X-Forwarded-For, take left-most (original client)
            if ($h === 'HTTP_X_FORWARDED_FOR') {
                $parts = explode(',', $ip);
                $ip = trim($parts[0]);
            }
            // basic validation
            if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                return $ip;
            }
            // allow private/reserved as fallback if needed:
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
            }
        }
    }
    return '0.0.0.0';
}
function geoFromIpApi(string $ip): array {
    $url = "http://ip-api.com/json/{$ip}?fields=status,country,regionName,city,lat,lon,timezone,query";
    $json = @file_get_contents($url);
    if (!$json) return [];
    $data = json_decode($json, true);
    return ($data['status'] === 'success') ? $data : [];
}

  $ip = getClientIp();
  $dar = geoFromIpApi($ip);
  echo $dar;

?>
