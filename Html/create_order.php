<?php
include('db.php');
require('vendor/autoload.php'); // Include Razorpay PHP SDK

// Razorpay test key
$razorpayKey = 'rzp_test_EJk4TWdqYcZpEb'; // Your Razorpay test key ID

// Initialize Razorpay API (using only the Key ID)
$api = new Razorpay\Api\Api($razorpayKey, '');  // No Key Secret is provided here for test mode

// Get the order details from the POST request
$bookingId = $_POST['bookingId'];  // Booking ID from the form
$amount = $_POST['amount'] * 100;  // Amount in paise (Razorpay expects amount in paise)

// Create Razorpay Order
$orderData = [
    'receipt'         => $bookingId,  // Your booking ID or any unique reference
    'amount'          => $amount,      // Amount in paise
    'currency'        => 'INR',        // Currency code (INR for India)
    'payment_capture' => 1             // 1 for automatic capture
];

try {
    // Create an order with Razorpay
    $order = $api->order->create($orderData);
    $orderId = $order['id'];  // Razorpay order ID

    // Return order ID to the frontend
    echo json_encode([
        'status' => 'success',
        'order_id' => $orderId
    ]);
} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Error creating Razorpay order: ' . $e->getMessage()
    ]);
}
?>
