<?php
header('Content-Type: application/json');
error_reporting(E_ALL); // Enable error reporting
ini_set('display_errors', 1); // Display errors

// Get the data from the frontend
$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'];
$newPassword = $data['newPassword'];

// Your database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amit"; // Name of the database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Connection failed: ' . $conn->connect_error]);
    exit; // Exit after error response
}

// Update the password in the database
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT); // Hash the password

$sql = "UPDATE vender SET password = '$hashedPassword' WHERE email = '$email'";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to update password.']);
}

$conn->close();
?>
