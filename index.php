<?php
session_start();

// Connect to database and fetch user data based on username
$username = $_POST['username'];
// ... Replace with actual DB connection and queries ...

// Verify password using password_verify() after fetching hashed password
if (password_verify($_POST['password'], $hashedPassword)) {
  $_SESSION['user_id'] = $userId; // Store user ID in session
  header('Location: products.php'); // Redirect to products page
} else {
  echo "Invalid username or password!";
}

session_start();

// Check if user logged in based on session variable
if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit;

?>