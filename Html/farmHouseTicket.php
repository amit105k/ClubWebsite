<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Registration Form</title>
    <link rel="stylesheet" href="../css/buytickets.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</head>

<body>
    <nav>
        <h4>The Noida Clubs</h4>
        <a href="../html/index.php">Home</a>
        <a href="../html/about.php">About</a>
        <a href="../html/service.php">Services</a>
        <!-- <a href="#clubs">Clubs</a>
        <a href="#clubs">Gallery</a> -->
        <a href="../Html/contact.php">Contact Us</a>
        <a href="../Html/buyticket.php">Buy Tickets</a><img src="../image/new.gif" alt="">
        <h3>+91 70076000000</h3>
    </nav>



    <?php
    include('db.php');


    if (isset($_GET['id'])) {
        $club_id = $_GET['id'];

        $sql = "SELECT name, price ,promocode,promodis,extraperson FROM farmhouse WHERE id =?";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("SQL preparation failed: " . $conn->error);
        }

        $stmt->bind_param("i", $club_id);
        $stmt->execute();
        $stmt->bind_result($name, $price, $promocode, $promodis, $extraperson);

        if ($stmt->fetch()) {
            // coreect
    
        } else {
            echo "Some thing went worng contact to administrator";
        }
        $stmt->close();
    } else {
        echo "No club ID provided.";
        $name = $price = '';
    }
    $conn->close();
    ?>

    <div class="form-container">
        <h1>Club Registration Form</h1>
        <form id="registrationForm" action="submit_form.php" method="POST">
            <h2 id="club" name="club"><?php echo htmlspecialchars($name); ?></h2>

            <br><br>
            <input type="text" id="club" name="club" value="<?php echo htmlspecialchars($name); ?>" hidden>


            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="" selected>Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br><br>

            <label for="date">Date & Time:</label>
            <input type="datetime-local" id="date" name="date" required><br><br>


            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile" required maxlength="10" minlength="10"><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="promocode">PROMOCODE/CUPON CODE:</label>
            <input type="text" id="promocode" name="promocode" required> <span id="promo" onclick="apply()">Apply
            </span><br><br>

            <label for="Persons">Persons:</label>
            <input type="number" name="count" id="person" required value="10"><br>

            <span style="color:red" id="duscoun">Book More than 10 Persons than you will paid <span>&#x20B9;
                    <?php echo htmlspecialchars($extraperson); ?></span> per Person</span>
            <label for="singleEntry">Amount</label>
            <h3 id="amount" name="amount"></h3>
            <input type="text" name="amount" id="inputamount" value="<?php echo htmlspecialchars($price); ?>" hidden>

            <button type="submit" onclick="validateForm(event)">Submit</button>
        </form>
    </div>


    

    
    <!-- .............................................new script.............................. -->
    <script>
    const dbdis = <?php echo json_encode($promodis); ?>;
    const dbpromo = <?php echo json_encode($promocode); ?>; 

    const initialPersons = 10;
    const extraChargePerPerson = <?php echo htmlspecialchars($extraperson); ?>;
    const basePrice = <?php echo htmlspecialchars($price); ?>;
    
    const personInput = document.getElementById('person');
    const amountDisplay = document.getElementById('amount');
    const inputAmount = document.getElementById('inputamount');

    let isPromoApplied = false; 

    personInput.addEventListener('input', calculatePrice);

    function calculatePrice() {
        const currentPersons = parseInt(personInput.value, 10);
        const extraPersons = Math.max(currentPersons - initialPersons, 0); 
        let totalAmount = basePrice + (extraPersons * extraChargePerPerson);

        if (isPromoApplied) {
            const discount = (totalAmount * dbdis) / 100; 
            totalAmount -= discount;
        }

        amountDisplay.textContent = totalAmount; 
        inputAmount.value = totalAmount; 
    }

    function apply() {
        const userPromoCode = document.getElementById("promocode").value;
        const promoUpper = userPromoCode.toUpperCase();

        if (promoUpper === dbpromo) {
            isPromoApplied = true;
            alert("Promo applied! You get " + dbdis + "% off.");
        } else {
            isPromoApplied = false;
            alert("Invalid promo code!");
        }

        calculatePrice(); 
    }

    calculatePrice(); 
</script>



    <div class="footer">
        <div class="fleft">
            <h4>The Noida Clubs</h4>
            <p>Noida hosts a number of premium, exclusive clubs that attract professionals and those looking for a
                high-end experience. Clubs like The Club at Jaypee Greens and The Grand Venice offer </p>
            <p>For younger crowds and those seeking nightlife, Noida's Sector 18 area, known for its malls and
                commercial spots, has some good options. Clubs like The Vault Café, Sky Bar, and The Noida </p>
        </div>
        <div class="fright">
            <ul>
                <span>Links</span>
                <li>Home</li>
                <li>About Us</li>
                <li>Clubs</li>
                <li>Pricing</li>
                <li>Contact</li>
            </ul>
            <ul>
                <span>Contact US</span>
                <li><b>Address</b> - Noida Sector 58 </li>
                <li>Delhi - Noida Expressway </li>
                <li><b>Phone :</b> +91,700760000</li>
                <li><b>Email I'd :-</b>amitpss239@gmail.com</li>
            </ul>
            <ul>
                <span>Social Links</span>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero asperiores es</li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="hr"></div>
    <div class="ftext">
        <p>© 2024 Transportio. All Rights Reserved by PSS Tech noida </p>
    </div>

</body>

</html>




<script>





    // ......................data are goes to databse.................................





    document.getElementById("registrationForm").onsubmit = function (event) {
        event.preventDefault();

        let formData = new FormData(this);

        fetch("submit_form.php", {
            method: "POST",
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    Swal.fire({
                        title: 'Booking Confirmed!',
                        text: 'Booking ID is: ' + data.bookingId,
                        // text: 'Booking ID is: ' + ,
                        icon: 'success',
                        showCancelButton: true,
                        cancelButtonText: 'Proceed for Payment',
                        confirmButtonText: 'Return to Home',
                        // footer: `<button onclick="window.location.href='http://127.0.0.1:5500/amitclub/Html/index.html'">Go to Home Page</button>`,
                        showDenyButton: true,
                        denyButtonText: 'Create New',
                    }).then(result => {
                        if (result.isConfirmed) {
                            // Redirect to Home page
                            window.location.href = 'http://localhost/amitclub/Html/index.php';
                        } else if (result.isDenied) {
                            window.location.href = 'http://localhost/amitclub/Html/buyticket.php';
                        } else {
                            // window.location.href = 'http://localhost/amitclub/Html/razorpay_order.php';
                            // window.location.href = 'http://localhost/amitclub/Html/razorpay_order.php';
                            payment(data.bookingId);
                            console.log("this is ticket payment is" + data.bookingId);
                        }
                    });
                } else {
                    Swal.fire('Error', data.message, 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire('Error', 'SomeThing Went Wrong Please Try after some time', 'error');
            });
    };




    // ..............................payment is here...................................
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
                    "amount": data.amount * 100,  // Razorpay amount is in paise
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

                        // Update payment status in the database
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
                                // console.error('Error updating payment status:', error);
                                // alert('Something went wrong while updating payment status.');
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

    // Function to display the modal
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

        // Append modal to the body
        document.body.insertAdjacentHTML('beforeend', modalHTML);

        // Close modal when backdrop is clicked
        document.getElementById('modalBackdrop').onclick = () => closeModal();
    }

    // Function to close the modal
    function closeModal() {
        document.getElementById('paymentModal').remove();
        document.getElementById('modalBackdrop').remove();
    }



</script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>



<!-- ......................paymrnt................................. -->

<style>
    #paragraph {
        margin-top: 10px;
        margin-left: 10%;
    }

    #registrationForm h2 {
        text-align: center;
        color: #3a4cab;
        font-family: "Playwrite HR Lijeva", cursive;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        margin-top: 16px;
    }

    #paragraph {
        margin-top: 10px;
        margin-left: 10%;
    }

    #promocode {
        width: 40%;
    }

    #promo {
        color: red;
        cursor: pointer;
    }

    #duscoun span {
        color: black;
    }
</style>