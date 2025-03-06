<?php

$host = 'localhost';
$dbname = 'db_event_planning';
$username = 'root';
$password = 'godisgood'; // password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}


?>
