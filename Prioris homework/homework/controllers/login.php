<?php

require dirname(__DIR__)."/database/db.php";

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute the database query
$query = "SELECT password FROM users WHERE username = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $storedHashedPassword = $row['password'];

    // Verify the entered password against the stored hashed password
    if (password_verify($password, $storedHashedPassword)) {
        // Passwords match, user is authenticated
        $_SESSION['authenticated'] = true;
        $_SESSION['username'] = $username;

        // Redirect to the home page or any other authenticated page
        header("Location: ../index.php");
        exit();
    } else {
        // Invalid password
        header("Location: ../views/login.view.php");
    }
} else {
    // User not found
    echo "User not found!";
}

// Close the statement and database connection
$stmt->close();
$mysqli->close();
