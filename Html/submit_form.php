<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $club = $_POST['clubb'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $checkout = isset($_POST['checkout']) ? $_POST['checkout'] : null;
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $count = $_POST['count'];
    $amount = $_POST['amount'];
    $payment_status = 'Pending';
    $payment_id = null;
    $token_id = bin2hex(random_bytes(5)); 

    $query = "INSERT INTO registrations (club, name, gender, date,checkout, mobile, email, count, amount, payment_status, token_id, bdate) 
              VALUES ('$club', '$name', '$gender', '$date', '$checkout','$mobile', '$email', '$count', '$amount', '$payment_status', '$token_id', NOW())";

    if (mysqli_query($conn, $query)) {
        $bookingId = mysqli_insert_id($conn);

        echo json_encode([
            'status' => 'success',
            'message' => 'Registration Successful!',
            'bookingId' => $bookingId
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Failed to register, please try again.'
        ]);
    }
}
?>
