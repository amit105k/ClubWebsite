<?php
header('Content-Type: application/json');
include('db.php'); // Include your database connection file

// Sanitize and validate the bookingId from the query string
if (!isset($_GET['bookingId']) || !is_numeric($_GET['bookingId'])) {
    echo json_encode(["error" => "Invalid or missing bookingId"]);
    exit();
}

$bookingId = (int) $_GET['bookingId']; // Ensure the bookingId is an integer

$query = "SELECT id, amount, club, name, mobile,email,count,amount,payment_status,payment_id,token_id,date FROM registrations WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $bookingId);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if ($data) {
    echo json_encode($data); // Return the booking details (amount, name, etc.)
} else {
    echo json_encode(["error" => "Booking not found"]);
}

$stmt->close();
$conn->close();
?>
