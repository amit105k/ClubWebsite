<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$data = json_decode(file_get_contents('http://localhost/amitclub/Html/buyticket.php'), true);

$clubName = $data['clubName'];
$bookingId = $data['bookingId'];
$tokenId = $data['tokenId'];
$paymentStatus = $data['paymentStatus'];
$bookingDate = $data['bookingDate'];
$amount = $data['amount'];
$person = $data['person'];
$email = $data['email'];

$mail = new PHPMailer(true);
include('../smtp/PHPMailerAutoload.php');

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'amitpss239@gmail.com';
    $mail->Password = 'houu svmg tlpy hyqx';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Email Details
    $mail->setFrom('amitpss239@gmail.com', 'Club Admin');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = "Booking Confirmation - $clubName";
    $mail->Body = "
        <h2>Booking Confirmation</h2>
        <p><strong>Club Name:</strong> $clubName</p>
        <p><strong>Booking ID:</strong> $bookingId</p>
        <p><strong>Token ID:</strong> $tokenId</p>
        <p><strong>Payment Status:</strong> $paymentStatus</p>
        <p><strong>Booking Date:</strong> $bookingDate</p>
        <p><strong>Amount:</strong> ₹$amount</p>
        <p><strong>Persons:</strong> $person</p>
        <p>Thank you for booking with us!</p>
    ";

    $mail->send();
    echo json_encode(["status" => "success", "message" => "Email sent successfully."]);

?>
