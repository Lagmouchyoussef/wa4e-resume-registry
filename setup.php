<?php

$host = 'localhost';
$port = 3306;
$dbname = 'misc';
$username = 'root';
$password = '';

try {
    // Connect without database to create it
    $pdo_temp = new PDO("mysql:host=$host;port=$port", $username, $password);
    $pdo_temp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo_temp->exec("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8 COLLATE utf8_general_ci");
    echo("<p>Database 'misc' created or already exists</p>\n");
} catch (PDOException $e) {
    die("Database creation failed: " . $e->getMessage());
}

require_once "pdo.php";

$pdo->query("CREATE TABLE IF NOT EXISTS users (
    user_id INTEGER NOT NULL AUTO_INCREMENT,
    name VARCHAR(128),
    email VARCHAR(128),
    password VARCHAR(255),
    PRIMARY KEY(user_id),
    INDEX(email)
) ENGINE=InnoDB CHARSET=utf8");

$pdo->query("CREATE TABLE IF NOT EXISTS Profile (
    profile_id INTEGER NOT NULL AUTO_INCREMENT,
    user_id INTEGER NOT NULL,
    first_name TEXT,
    last_name TEXT,
    email TEXT,
    headline TEXT,
    summary TEXT,
    PRIMARY KEY(profile_id),
    CONSTRAINT profile_ibfk_1
        FOREIGN KEY (user_id)
        REFERENCES users (user_id)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB CHARSET=utf8");

$pdo->query("INSERT IGNORE INTO users (user_id, name, email, password) VALUES (1, 'Demo User', 'demo@example.com', '1a52e17fa899cf40fb04cfc42e6352f1')");

echo("<p>Tables created successfully</p>\n");
echo("<p>Default user inserted (email: demo@example.com, password: php123)</p>\n");
?>