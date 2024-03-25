<?php
// Start session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your username and password
    $valid_username = "admin";
    $valid_password = "admin";

    // Get user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password are correct
    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful
        // Redirect user to the dashboard or another page
        header("Location: dashboard.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password!";
    }
}
?>

