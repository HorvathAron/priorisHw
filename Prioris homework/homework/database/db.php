<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'priorishw';

// Create a database connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_errno) {
    die('Failed to connect to MySQL: ' . $mysqli->connect_error);
}else{
    // Connection successful
    echo 'Connected to the database!';
}