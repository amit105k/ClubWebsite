<?php
require('vendor/autoload.php');  // Include Razorpay PHP SDK

// Razorpay test key and secret
$razorpayKey = 'rzp_test_EJk4TWdqYcZpEb';  // Your Razorpay test key

// Initialize Razorpay API (using Key ID)
$api = new Razorpay\Api\Api($razorpayKey, '');  // No Secret Key needed for testing

// Get the amount and other details from the form submission
$amount = $_POST['amount'] * 100;  // Amount in paise (Razorpay expects amount in paise)

// Create a payment request directly with Razorpay (no order ID)
$paymentData = [
    'amount'   => $amount,  // Amount in paise
    'currency' => 'INR',    // Currency code (INR for India)
    'payment_capture' => 1  // Automatic capture of payment
];

try {
    // Create a Razorpay payment request
    $payment = $api->payment->create($paymentData);
    $paymentId = $payment->id;  // Razorpay payment ID

    // Return payment ID and other details to the frontend
    echo json_encode([
        'status'    => 'success',
        'payment_id' => $paymentId, // Razorpay payment ID
        'amount'    => $amount,
        'message'   => 'Payment request created successfully'
    ]);
} catch (Exception $e) {
    // Catch any errors from Razorpay API
    echo json_encode([
        'status'  => 'error',
        'message' => 'Error creating Razorpay payment: ' . $e->getMessage()
    ]);
}
?>
