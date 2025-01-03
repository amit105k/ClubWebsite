<?php
include("db.php");
include('../smtp/PHPMailerAutoload.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['bookingId']) && isset($data['payment_id']) && isset($data['payment_status'])) {
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

$conn->close();
}
?>

<!--






include('../smtp/PHPMailerAutoload.php');
include("db.php");

$data = json_decode(file_get_contents('php://input'), true);
$bookingId = $data['bookingId'] ?? null;

if (!$bookingId) {
    echo json_encode(["status" => "error", "message" => "Booking ID is required"]);
    exit;
}

$query = "SELECT email, club, name,date,amount, count,token_id,payment_status,payment_id, mobile 
             FROM registrations 
             WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $bookingId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode(["status" => "error", "message" => "No booking found for the given ID"]);
    exit;
}

$row = $result->fetch_assoc();

$email = $row['email'];
$clubName = $row['club'];
$name = $row['name'];
$tokenId = $row['token_id'];
$bookingDate = $row['date'];
$amount = $row['amount'];
$persons = $row['count'];
$payment_status = $row['payment_status'];
$payment_id = $row['payment_id'];
$mobile = $row['mobile'];

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
        <p><strong>Mobile:</strong> $mobile</p>
        <p>Thank you for booking with us!</p>
    ";

    $mail->send();
    echo json_encode(["status" => "success", "message" => "Email sent successfully"]);
} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => "Email could not be sent: " . $mail->ErrorInfo]);
}

$stmt->close();
$conn->close();
?> 
-->