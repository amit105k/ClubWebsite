<?php
include("db.php");
include('../smtp/PHPMailerAutoload.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['bookingId']) && isset($data['payment_id']) && isset($data['payment_status'])) {
    $bookingId = $data['bookingId'];
    $paymentId = $data['payment_id'];
    $paymentStatus = $data['payment_status'];

    $stmt = $conn->prepare("UPDATE  	registrations SET payment_id = ?, payment_status = ? WHERE id = ?");
    $stmt->bind_param("ssi", $paymentId, $paymentStatus, $bookingId);

    if ($stmt->execute()) {

        echo json_encode(["success" => true]);

        // send email
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

            } catch (Exception $e) {
                echo json_encode(["status" => "error", "message" => "Email or SMS could not be sent: {$e->getMessage()}"]);
            }

        } else {
            echo json_encode(['status' => 'error', 'message' => 'Booking details not found']);
        }
        //.........................................................

    } else {

        echo json_encode(["success" => false, "message" => "Failed to update payment status."]);
    }

    $stmt->close();
} else {
    echo json_encode(["success" => false, "message" => "Invalid data."]);
}

$conn->close();
?>


<!--

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

include("db.php");
include('../smtp/PHPMailerAutoload.php');

// Check database connection
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Database connection failed"]);
    exit;
}

// Parse JSON input
$data = json_decode(file_get_contents('php://input'), true);

if (!$data || !isset($data['bookingId'], $data['payment_id'], $data['payment_status'])) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid input"]);
    exit;
}

// Escape input values
$bookingId = $conn->real_escape_string($data['bookingId']);
$paymentId = $conn->real_escape_string($data['payment_id']);
$paymentStatus = $conn->real_escape_string($data['payment_status']);

// Update the database
$sql = "UPDATE registrations SET payment_id = '$paymentId', payment_status = '$paymentStatus' WHERE id = '$bookingId'";



$conn->close();

?>

...........................................................................




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

    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => "Email or SMS could not be sent: {$e->getMessage()}"]);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Booking details not found']);
}
-->