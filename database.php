<?php

declare(strict_types=1);
// database.php — $link and $pdo (MySQL PDO)

$host_name = 'db5017844430.hosting-data.io';
$database = 'dbs14226239';
$user_name = 'dbu5127393';
$password = 'OMNAMAsiva11$';
  
$link = new mysqli($host_name, $user_name, $password, $database);
  
if ($link->connect_error) {
   die('Connection failed: ' . $conn->connect_error);
} 

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

$pdo = new PDO($dsn, $DB_USER, $DB_PASS, $options);

echo "Have link and pdo now ";
?>
