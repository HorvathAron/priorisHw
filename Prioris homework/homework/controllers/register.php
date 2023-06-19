<?php

require dirname(__DIR__)."/database/db.php";


$username = $_POST['username'];
$password = $_POST['password'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Create and execute the database query
$query = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ss",  $username, $hashedPassword);

if ($stmt->execute()) {
    // Registration successful
    header("Location: ../index.php");
} else {
    // Registration failed
    echo "Registration failed: " . $stmt->error;
}

$stmt->close();
$mysqli->close();