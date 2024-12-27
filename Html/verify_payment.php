<?php
require('vendor/autoload.php'); // Include Razorpay PHP SDK

// Razorpay API credentials
$razorpayKey = 'rzp_test_EJk4TWdqYcZpEb';
$razorpaySecret = 'your_razorpay_secret';

$api = new Razorpay\Api\Api($razorpayKey, $razorpaySecret);

// Get the payment details from the frontend
$paymentId = $_POST['payment_id'];
$orderId = $_POST['order_id'];
$signature = $_POST['signature'];

try {
    // Create a payment verification object
    $attributes = [
        'razorpay_order_id' => $orderId,
        'razorpay_payment_id' => $paymentId,
        'razorpay_signature' => $signature
    ];

    // Verify the payment signature
    $api->utility->verifyPaymentSignature($attributes);

    // Update the payment status in the database (optional)
    // You can update the payment status as 'Success' here
    echo json_encode([
        'status' => 'success',
        'message' => 'Payment successfully verified.'
    ]);
} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Payment verification failed: ' . $e->getMessage()
    ]);
}
?>
