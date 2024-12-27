<?php
include("db.php");
include('../smtp/PHPMailerAutoload.php');
require_once 'vendor/autoload.php'; // Twilio SDK

use Twilio\Rest\Client;

// Check connection
if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Database connection failed']));
}

// Get the JSON input
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['bookingId']) && isset($data['payment_id']) && isset($data['payment_status'])) {
    $bookingId = $conn->real_escape_string($data['bookingId']);
    $payment_id = $conn->real_escape_string($data['payment_id']);
    $payment_status = $conn->real_escape_string($data['payment_status']);

    // Update the registrations table
    $sql = "UPDATE registrations SET payment_id = '$payment_id', payment_status = '$payment_status' WHERE id = '$bookingId'";
    if ($conn->query($sql) === TRUE) {
        
        // Fetch booking details
        $fetchSql = "SELECT email, club, name, token_id, date, amount, count, payment_status, payment_id,mobile FROM registrations WHERE id = '$bookingId'";
        $result = $conn->query($fetchSql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $email = $row['email'];
            $tokenId = $row['token_id'];
            $clubName = $row['club'];
            $name = $row['name'];
            $bookingDate = $row['date'];
            $amount = $row['amount'];
            $persons = $row['count'];
            $payment_status = $row['payment_status'];
            $payment_id = $row['payment_id'];
            $phone = $row['mobile']; 

            
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'amitpss239@gmail.com';
                $mail->Password = 'houu svmg tlpy hyqx';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setFrom('amitpss239@gmail.com', 'Club Admin');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = "Booking Confirmation - $clubName";
                $mail->Body = "
                <h2>Booking Confirmation</h2>
                <p><strong>Club Name:</strong> $clubName</p>
                <p><strong>Booking ID:</strong> $bookingId</p>
                <p><strong>Token ID:</strong> $tokenId</p>
                <p><strong>Payment Status:</strong> $payment_status</p>
                <p><strong>Payment ID:</strong> $payment_id</p>
                <p><strong>Booking Date:</strong> $bookingDate</p>
                <p><strong>Amount:</strong> ₹$amount</p>
                <p><strong>Persons:</strong> $persons</p>
                <p><strong>Name:</strong> $name</p>
                <p>Thank you for booking with us!</p>
                ";

                $mail->send();
                echo json_encode(["status" => "success", "message" => "Email sent successfully."]);


                $sid = 'AC542f8122752d057acfccb65bf396d28b';
                $authToken = '4bfdd90a4a3a9e302c10730c96a3cdc4';
                $twilioNumber = '+1234567890';
                
                $twilio = new Client($sid, $authToken);
                $message = "
                Booking Confirmation:
                Club: $clubName
                Booking ID: $bookingId
                Token ID: $tokenId
                Payment Status: $payment_status
                Amount: ₹$amount
                Persons: $persons
                Name: $name
                Date: $bookingDate
                ";
                
                $twilio->messages->create(
                    $phone, 
                    [
                        'from' => $twilioNumber,
                        'body' => $message
                    ]
                );
                echo json_encode(["status" => "success", "message" => "SMS sent successfully."]);
            } catch (Exception $e) {
                echo json_encode(["status" => "error", "message" => "Email or SMS could not be sent: {$e->getMessage()}"]);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Booking details not found']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => $conn->error]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid input']);
}

$conn->close();
?>
