<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Registration Payment</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

<h2>Club Registration Payment</h2>
<p>Click below to make a payment for your club registration.</p>
<button onclick="payment()">Proceed for Payment</button>


<script>



function payment(bookingId) {
    console.log("Booking ID:", bookingId);
// fetch(`get_booking_details.php?bookingId=${bookingId}`)

    fetch(`../get_booking_details.php?bookingId=${bookingId}`)
        .then(res => res.json())
        .then(data => {
            if (data.error) {
                alert("Booking not found.");
                return;
            }

            var options = {
                "key": "rzp_test_EJk4TWdqYcZpEb",
                "amount": data.amount * 100,  // Razorpay amount is in paise, so multiply by 100
                "currency": "INR",
                "name": data.club,  // Get name from database
                "description": "Booking for Club Entry",
                "image": "../image/new.gif",
                "handler": function (response) {
                    var paymentDetails = {
                        bookingId: bookingId,  // Add the bookingId to the paymentDetails
                        payment_id: response.razorpay_payment_id,                        
                        payment_status: "Success"
                    };

                    fetch('update_payment_status.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(paymentDetails)
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.status === 'success') {
                            alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
                            window.location.href = "http://localhost/amitclub/Html/index.php";   
                        } else {
                            alert('Payment status update failed.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Something went wrong while updating payment status.');
                    });
                },
                "prefill": {
                    "name": "test",  
                    "email": "guest",
                    "contact": "00000000000"
                },
                "theme": {
                    "color": "red"
                }
            };

            var rzp1 = new Razorpay(options);
            rzp1.open();

        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error fetching booking details.');
        });
}


</script>




<script>











    // jQuery('#form').on('submit', function (e) {
    //     console.log("click");
    //     jQuery('#msg').html('');
    //     jQuery('#submit').html('Please wait');
    //     jQuery('#submit').attr('disabled', true);
    //     jQuery.ajax({
    //         url: 'connect.php',
    //         type: 'post',
    //         data: jQuery('#form').serialize(),
    //         success: function (result) {
    //             jQuery('#msg').html(result);
    //             jQuery('#submit').html('Message Sent');
    //             setTimeout(function () {
    //                 jQuery('#msg').empty();
    //                 jQuery('#submit').html('Send Message');
    //             }, 3000);

    //             jQuery('#submit').attr('disabled', false);
    //             jQuery('#form')[0].reset();
    //         }
    //     });
    //     e.preventDefault();
    // });











    // function payment() {
    //     var options = {
    //         "key": "rzp_test_EJk4TWdqYcZpEb",  
    //         "amount": 5000*100,  
    //         "currency": "INR",  
    //         "name": "Noida's Clubs",
    //         "description": "Booking for Club Entry",
    //         "image": "../image/new.gif", 
    //         "handler": function (response) {
    //             alert("Payment successful! Payment ID: " + response.razorpay_payment_id);            
    //             window.location.href = "http://localhost/amitclub/Html/paymentsucc.php";
    //         },
    //         "prefill": {
    //             "name": "amit",  
    //             "email": "amitpss239@gmail.com", 
    //             "contact": "9876543210" 
    //         },
    //         "theme": {
    //             "color": "red" 
    //         }
    //     };

    //     var rzp1 = new Razorpay(options);
    //     rzp1.open();  
    // }














    // .................................12122024////////////////////////////////////////

//     function payment(bookingId, name, mobile, email) {
//         console.log(name)
//     var options = {
//         "key": "rzp_test_EJk4TWdqYcZpEb",  // Replace with your actual Razorpay key
//         "amount": 5000 * 100,  // Amount in paise (5000 INR)
//         "currency": "INR",
//         "name": name,
//         "description": "Booking for Club Entry",
//         "image": "../image/new.gif",
//         "order_id": bookingId,  // Link the Razorpay order ID with booking ID (you can replace it with the Razorpay order ID if available)
//         "handler": function (response) {
//             alert("Payment successful! Payment ID: " + response.razorpay_payment_id);
            
//             // Send the payment details to your backend for verification and updating the booking status
//             var paymentDetails = {
//                 payment_id: response.razorpay_payment_id,
//                 booking_id: bookingId,
//                 amount: 5000,  // amount paid, ensure this is correct
//                 name: name,
//                 mobile: mobile
//             };
            
//             // Send payment details to your backend for processing
//             fetch("verify_payment.php", {
//                 method: "POST",
//                 headers: {
//                     "Content-Type": "application/json"
//                 },
//                 body: JSON.stringify(paymentDetails)
//             })
//             .then(response => response.json())
//             .then(data => {
//                 if (data.status === "success") {
//                     alert("Payment verified and booking confirmed!");
//                     window.location.href = "success_page.html"; // Redirect to success page
//                 } else {
//                     alert("Payment verification failed. Please try again.");
//                 }
//             })
//             .catch(error => {
//                 console.error("Error:", error);
//                 alert("Something went wrong. Please try again later.");
//             });
//         },
//         "prefill": {
//             "name": name,  
//             "email": email,  // Prefill email from the backend
//             "contact": mobile  // Prefill mobile number from the backend
//         },
//         "theme": {
//             "color": "#F37254"  // Customize the color of the payment gateway
//         }
//     };

//     var rzp1 = new Razorpay(options);
//     rzp1.open();  // Open the Razorpay payment gateway modal
// }
</script>


</body>
</html>
