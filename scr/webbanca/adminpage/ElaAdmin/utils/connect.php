<?php
include 'config.php';
try {
    $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DB , USER, PW);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}