<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    try {
        // Insert new user into the database
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        $stmt->execute(['name' => $name, 'email' => $email, 'password' => $password]);

        echo "Signup successful. You can now <a href='LoginSignup.html'>login</a>.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
