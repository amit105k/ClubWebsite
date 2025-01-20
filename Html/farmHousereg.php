<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $club = $_POST['clubb'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $count = $_POST['count'];
    $amount = $_POST['amount'];
    $payment_status = 'Pending';
    $payment_id = null;
    $token_id = bin2hex(random_bytes(5)); 

    // Insert the registration data into the database
    $query = "INSERT INTO registrations (club, name, gender, date, mobile, email, count, amount, payment_status, token_id, bdate) 
              VALUES ('$club', '$name', '$gender', '$date', '$mobile', '$email', '$count', '$amount', '$payment_status', '$token_id', NOW())";

    if (mysqli_query($conn, $query)) {
        $bookingId = mysqli_insert_id($conn);

        // Return success with the booking ID
        echo json_encode([
            'status' => 'success',
            'message' => 'Registration Successful!',
            'bookingId' => $bookingId
        ]);
    } else {
        // Return failure message if registration fails
        echo json_encode([
            'status' => 'error',
            'message' => 'Failed to register, please try again.'
        ]);
    }
}
?>
