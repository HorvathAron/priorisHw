<?php

// Check if the user is authenticated
function authenticate() {
    if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
        // User is not authenticated, redirect to login page or show an error message
        header("Location: ../index.php");
        exit();
    }
}