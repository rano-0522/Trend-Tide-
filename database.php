<?php
// Database configuration
$host = 'sql100.infinityfree.com';
$dbname = 'if0_38719586_miniproject';
$username = 'if0_38719586';
$password = 'pHAFceupijTqTs';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection error
    die("Database connection failed: " . $e->getMessage());
}
?>
