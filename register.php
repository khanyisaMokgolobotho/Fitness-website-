<?php
session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness_app";

// Get form data
$user = $_POST['username'];
$email = $_POST['email'];
$age = $_POST['age'];
$pwd = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert user into database
$sql = "INSERT INTO users (username, email, age, password) VALUES ('$user', '$email', '$age', '$pwd')";
if ($conn->query($sql) === TRUE) {
    $_SESSION['username'] = $user;
    header("Location: dashboard.php"); // Redirect to dashboard
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
