<?php

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