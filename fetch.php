<?php
// login.php

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query the database for user credentials
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    // Check if a matching user was found
    if ($result->num_rows == 1) {
        // Successful login
        echo "Login successful!";
    } else {
        // Invalid username or password
        echo "Invalid username or password";
    }
}

// Close the database connection
$conn->close();
?>
