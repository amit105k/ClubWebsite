<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Now</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Roboto+Slab:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Roboto+Slab:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto+Slab:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<button onclick="payment(bookingId)">Pay on Razorpay</button>

<body>
    <?php
    $bookingId = $_GET['id'];
    ?>
    <script>

        var bookingId = "<?php echo $bookingId; ?>";

        function payment(bookingId) {
            console.log("Booking ID:", bookingId);

            fetch(`http://localhost/amitclub/Html/get_booking_details.php?bookingId=${bookingId}`)
                .then(res => res.json())
                .then(data => {
                    if (data.error) {
                        alert("Booking not found.");
                        return;
                    }

                    var options = {
                        "key": "rzp_test_EJk4TWdqYcZpEb",
                        "amount": data.amount * 100,
                        "currency": "INR",
                        "name": data.club,
                        "description": "Booking for Club Entry",
                        "image": "../image/new.gif",
                        "handler": function (response) {
                            var paymentDetails = {
                                bookingId: bookingId,
                                payment_id: response.razorpay_payment_id,
                                payment_status: "Success"
                            };

                            fetch('http://localhost/amitclub/Html/update_payment_status.php', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify(paymentDetails)
                            })
                                .then(res => res.json())
                                .then(result => {
                                    if (result.payment_status === 'success') {

                                        fetch(`http://localhost/amitclub/Html/fetch_booking_details.php?bookingId=${bookingId}`)
                                            .then(res => res.json())
                                            .then(bookingData => {
                                                showModal({
                                                    clubName: bookingData.club,
                                                    bookingId: bookingData.id,
                                                    payment_id: bookingData.payment_id,
                                                    tokenId: bookingData.token_id,
                                                    paymentStatus: "Success",
                                                    bookingDate: bookingData.date,
                                                    amount: bookingData.amount,
                                                    person: bookingData.count,
                                                    email: bookingData.email
                                                });
                                            })
                                            .catch(error => {
                                                console.error('Error fetching updated booking details:', error);
                                            });
                                    } else {
                                        alert('this is error in buy ticket.php');

                                    }
                                })
                                .catch(error => {

                                    fetch(`http://localhost/amitclub/Html/fetch_booking_details.php?bookingId=${bookingId}`)
                                        .then(res => res.json())
                                        .then(bookingData => {
                                            showModal({
                                                clubName: bookingData.club,
                                                bookingId: bookingData.id,
                                                payment_id: bookingData.payment_id,
                                                tokenId: bookingData.token_id,
                                                paymentStatus: "Success",
                                                bookingDate: bookingData.date,
                                                amount: bookingData.amount,
                                                person: bookingData.count,
                                                email: bookingData.email
                                            });
                                        })
                                        .catch(error => {
                                            console.error('Error fetching updated booking details:', error);
                                        });
                                });
                        },
                        "prefill": {
                            "name": data.name,
                            "email": data.email,
                            "contact": data.mobile
                        },
                        "theme": {
                            "color": "red"
                        }
                    };

                    var rzp1 = new Razorpay(options);
                    rzp1.open();
                })
                .catch(error => {
                    console.error('Error fetching booking details:', error);
                    alert('Error fetching booking details.');
                });
        }

        function showModal(details) {
            const modalHTML = `
        <div id="paymentModal" style="
            position: fixed; 
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%);
            background: #fff; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
            width: 400px;
            padding: 20px;
            z-index: 1000;
        ">
            <h2 style="text-align:center">Payment Confirmation</h2>
            <p id="paragraph"><strong>Club Name:</strong> ${details.clubName}</p>
            <p id="paragraph"><strong>Booking ID:</strong> ${details.bookingId}</p>
            <p id="paragraph"><strong>Token ID:</strong> ${details.tokenId}</p>
            <p id="paragraph"><strong>Payment ID:</strong> ${details.payment_id}</p>
            <p id="paragraph"><strong>Payment Status:</strong> ${details.paymentStatus}</p>
            <p id="paragraph"><strong>Booking Date:</strong> ${details.bookingDate}</p>
            <p id="paragraph"><strong>Amount:</strong> ₹${details.amount}</p>
            <p id="paragraph"><strong>Persons:</strong> ${details.person}</p>
            <p id="paragraph">Confirmation details are send to your registered Email I'd:<b>${details.email}</b></p>

            <div style="margin-top: 20px;">
                <button onclick="window.location.href='http://localhost/amitclub/Html/index.php'"
                    style="padding: 10px 20px; background: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; width: 45%;">
                    Go to Home Page
                </button>
                <button onclick="window.location.href='http://localhost/amitclub/Html/buyticket.php'"
                    style="padding: 10px 20px; background: #008CBA; color: white; border: none; border-radius: 5px; cursor: pointer; margin-left: 10px; width: 45%;">
                    Book Another Ticket
                </button>
            </div>
        </div>
        <div id="modalBackdrop" style="
            position: fixed; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        "></div>
    `;

            document.body.insertAdjacentHTML('beforeend', modalHTML);

            document.getElementById('modalBackdrop').onclick = () => closeModal();
        }

        function closeModal() {
            document.getElementById('paymentModal').remove();
            document.getElementById('modalBackdrop').remove();
        }
    </script>
</body>

</html>