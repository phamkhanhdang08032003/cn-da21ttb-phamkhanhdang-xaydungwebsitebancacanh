<?php
include 'config.php';
// $pdo = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PW);
// $pdo->query('set names utf8');
try {
    $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DB , USER, PW);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}