<?php
session_start();
require_once 'db.php';  // Your DB connection

// Collect form data
$firstname = $_POST['firstname'] ?? '';
$lastname  = $_POST['lastname'] ?? '';
$username  = $_POST['username'] ?? '';
$email     = $_POST['email'] ?? '';
$password  = $_POST['password'] ?? '';

// Basic validation
if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password)) {
    echo "<script>alert('❌ All fields are required.'); window.history.back();</script>";
    exit;
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if username or email already exists
$stmt = $conn->prepare("SELECT email FROM user WHERE username = ? OR email = ?");
$stmt->bind_param("ss", $username, $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "<script>alert('❌ Username or email already exists.'); window.history.back();</script>";
    exit;
}

// Insert user into the database
$stmt = $conn->prepare("INSERT INTO user (firstname, lastname, username, email, password) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $firstname, $lastname, $username, $email, $hashed_password);

if ($stmt->execute()) {
    $_SESSION['username'] = $username;
    header("Location: " . $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . "/shop/admin/dashboard.php");
    exit;
} else {
    echo "<script>alert('❌ Error: " . $stmt->error . "'); window.history.back();</script>";
}
?>
