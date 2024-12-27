<?php
include("db.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$bookingId = $_POST['bookingId'];
$paymentStatus = $_POST['paymentStatus'];
$paymentId = $_POST['paymentId'];
$name = $_POST['name'];
$date = $_POST['date'];


$sql = "INSERT INTO registrations (booking_id, payment_status, payment_id,bdate) 
        VALUES ('$bookingId', '$paymentStatus', '$paymentId', '$date')";

if ($conn->query($sql) === TRUE) {
   
    echo json_encode(["razorpay_payment_id" => $paymentId]);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>