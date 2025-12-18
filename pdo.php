<?php

function pdo_connect() {
    $host = 'localhost';
    $port = 3306;
    $dbname = 'misc'; // Change to your database name
    $username = 'root'; // Change to your MySQL username
    $password = ''; // Change to your MySQL password

    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

$pdo = pdo_connect();

?>