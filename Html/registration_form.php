<!DOCTYPE html>
<html  lang="en">

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
    // $club_name = isset($_GET['club_name']) ? $_GET['club_name'] : '';
    
    include('db.php');


    if (isset($_GET['id'])) {
        $club_id = $_GET['id'];

        $sql = "SELECT club_name, price ,promocode,promodis,extraperson FROM club_overviews WHERE id =?";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("SQL preparation failed: " . $conn->error);
        }

        $stmt->bind_param("i", $club_id);
        $stmt->execute();
        $stmt->bind_result($club_name, $price, $promocode, $promodis, $extraperson);

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
        <h2 id="club" name="clubb"><?php echo htmlspecialchars($club_name); ?></h2>

        <br><br>
        <input type="text" id="club" name="clubb" value="<?php echo htmlspecialchars($club_name); ?>" hidden>


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
            <input type="text" id="promocode" name="promocode"> <span id="promo" onclick="apply()">Apply
            </span><br><br>

            <label for="Persons">Persons:</label>
            <input type="number" name="count" id="person" required value="1"><br>

            <span style="color:red" id="duscoun">Book More than 10 Persons than you will get Flat <span>&#x20B9;
                10%    <!-- ($extraperson);  -->
                </span> Discount</span>
            <label for="singleEntry">Amount</label>
            <h3 id="amount" name="amount"></h3>
            <input type="text" name="amount" id="inputamount" value="<?php echo htmlspecialchars($price); ?>" hidden>

            <button type="submit" onclick="validateForm(event)">Submit</button>
        </form>
    </div>


    <script>
        // function person() {
        //     var per = document.getElementById("person").value;
        //     document.getElementById("amount").innerText = per * 500;
        //     // var inpu=document.getElementById("inputamount");
        //     document.getElementById("inputamount").value = per * 500;
        // }


//         let priceCalculated = false; 


// function calculatePrice() {
//     const personCount = document.getElementById('person').value;
//     console.log(personCount);
//     if (personCount === "" || personCount <= 0) {
//         alert("Please enter a valid number of persons.");
//         return;
//     }
//     else if(personCount==1){
//         const calculatedAmount = personCount * 500; 
//     document.getElementById('amount').innerText = calculatedAmount;
//     document.getElementById('inputamount').value = calculatedAmount;
// }
// else if(personCount<5){
//         document.getElementById("duscoun").innerHTML="you will get Rs.50 per Ticket Discount ";
//         discount=personCount*5000/100;
//         const calculatedAmount = personCount * 500; 
//         document.getElementById('amount').innerText = calculatedAmount-discount;
//         document.getElementById('inputamount').value = calculatedAmount-discount;
//     }
//     else{
//         discount=personCount*10000/100;
//         const calculatedAmount = personCount * 500; 
//         document.getElementById('amount').innerText = calculatedAmount-discount;
//         document.getElementById('inputamount').value = calculatedAmount-discount;
//         document.getElementById("duscoun").innerHTML="You will get Rs.100 per Ticket Discount ";
//     }
    
    

//     priceCalculated = true; 
// }
// ........................................................................................
    

        const dbdis = <?php echo json_encode($promodis); ?>;
        const dbpromo = <?php echo json_encode($promocode); ?>;

        const initialPersons = 1;
        const extraChargePerPerson = <?php echo htmlspecialchars($price); ?>;
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
                Swal.fire({
                    title: "Congratulations ",
                    text: "Promo applied! You get "+dbdis+"% off.",
                    icon: "success"
                });
                document.getElementById("promocode").disabled = true;
                document.getElementById("promo").disabled = true;
            } else {
                isPromoApplied = false;
                Swal.fire({
                    title: "Sorry We Cannot Find Any Coupon/Promocode !",
                    text: "Please Enter Correct Coupon/Promocode I'd!",
                    icon: "error"
                });
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
                        icon: 'success',
                        showCancelButton: true,
                        cancelButtonText: 'Proceed for Payment',
                        confirmButtonText: 'Return to Home',
                        showDenyButton: true,
                        denyButtonText: 'Create New',
                    }).then(result => {
                        if (result.isConfirmed) {
                            window.location.href = 'http://localhost/amitclub/Html/index.php';
                        } else if (result.isDenied) {
                            window.location.href = 'http://localhost/amitclub/Html/buyticket.php';
                        } else {
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



//..............................payment metod with modol .....................................
// function payment(bookingId) {
//     console.log("Booking ID:", bookingId);
//     fetch(`http://localhost/amitclub/Html/get_booking_details.php?bookingId=${bookingId}`)
//         .then(res => res.json())
//         .then(data => {
//             if (data.error) {
//                 alert("Booking not found.");
//                 return;
//             }

//             var options = {
//                 "key": "rzp_test_EJk4TWdqYcZpEb",
//                 "amount": data.amount * 100,  // Razorpay amount is in paise, so multiply by 100
//                 "currency": "INR",
//                 "name": data.club,  // Get name from database
//                 "description": "Booking for Club Entry",
//                 "image": "../image/new.gif",
//                 "handler": function (response) {
//                     var paymentDetails = {
//                         bookingId: bookingId,
//                         payment_id: response.razorpay_payment_id,
//                         payment_status: "Success"
//                     };

//                     fetch('http://localhost/amitclub/Html/update_payment_status.php', {
//                         method: 'POST',
//                         headers: {
//                             'Content-Type': 'application/json'
//                         },
//                         body: JSON.stringify(paymentDetails)
//                     })
//                         .then(res => res.json())
//                         .then(data => {
//                             if (data.payment_status === 'success') {
                            
//                                 showModal({
//                                     clubName: data.club,
//                                     customerName: data.name,
//                                     bookingId:data.id,
//                                     bookingId:data.payment_id ,
//                                     tokenId: data.token_id,
//                                     date: data.date,
//                                     mobile: data.mobile,
//                                     email: data.email
//                                 });
//                             } else {
//                                 alert('Failed to update payment status in the database.');
//                             }
//                         })
//                         .catch(error => {
//                             console.error('Error:', error);
//                             alert('Something went wrong while updating payment status.');
//                         });
//                 },
//                 "prefill": {
//                     "name": data.name,
//                     "email": data.email,
//                     "contact": data.mobile
//                 },
//                 "theme": {
//                     "color": "red"
//                 }
//             };

//             var rzp1 = new Razorpay(options);
//             rzp1.open();
//         })
//         .catch(error => {
//             console.error('Error:', error);
//             alert('Error fetching booking details.');
//         });
// }



// function showModal(details) {
//     console.log(details)
//     const modalContent = `
//         <div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); 
//                     background: #fff; padding: 20px; border-radius: 8px; width: 400px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
//             <h2>Booking Confirmation</h2>
//             <p><strong>Club Name:</strong> ${details.club}</p>
//             <p><strong>Customer Name:</strong> ${details.name}</p>
//             <p><strong>Booking ID:</strong> ${details.id}</p>
//             <p><strong>Token ID:</strong> ${details.token_id}</p>
//             <p><strong>Date:</strong> ${details.date}</p>
//             <p><strong>Mobile Number:</strong> ${details.mobile}</p>
//             <p><strong>Email:</strong> ${details.email}</p>
//             <div style="margin-top: 20px;">
//                 <button onclick="window.location.href='http://localhost/amitclub/Html/index.php'" 
//                         style="padding: 10px 20px; background: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
//                     Go to Home Page
//                 </button>
//                 <button onclick="window.location.href='http://localhost/amitclub/Html/buyticket.php'" 
//                         style="padding: 10px 20px; background: #008CBA; color: white; border: none; border-radius: 5px; cursor: pointer; margin-left: 10px;">
//                     Book Another Ticket
//                 </button>
//             </div>
//         </div>
//         <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);"></div>
//     `;

//     // Append the modal to the body
//     const modalWrapper = document.createElement('div');
//     modalWrapper.id = 'paymentConfirmationModal';
//     modalWrapper.innerHTML = modalContent;
//     document.body.appendChild(modalWrapper);

//     // Close modal on clicking outside
//     modalWrapper.querySelector('div:last-child').onclick = () => {
//         modalWrapper.remove();
//     };
// }




//................................modol on index page.............................................
// function payment(bookingId) {
//     console.log("Booking ID:", bookingId);
//     fetch(`http://localhost/amitclub/Html/get_booking_details.php?bookingId=${bookingId}`)
//         .then(res => res.json())
//         .then(data => {
//             if (data.error) {
//                 alert("Booking not found.");
//                 return;
//             }

//             var options = {
//                 "key": "rzp_test_EJk4TWdqYcZpEb",
//                 "amount": data.amount * 100,  // Razorpay amount is in paise, so multiply by 100
//                 "currency": "INR",
//                 "name": data.club,  // Get name from database
//                 "description": "Booking for Club Entry",
//                 "image": "../image/new.gif",
//                 "handler": function (response) {
//                     var paymentDetails = {
//                         bookingId: bookingId,
//                         payment_id: response.razorpay_payment_id,
//                         payment_status: "Success"
//                     };

//                     fetch('http://localhost/amitclub/Html/update_payment_status.php', {
//                         method: 'POST',
//                         headers: {
//                             'Content-Type': 'application/json'
//                         },
//                         body: JSON.stringify(paymentDetails)
//                     })
//                         .then(res => res.json())
//                         .then(dbResponse => {
//                             if (dbResponse.payment_status === 'success') {
//                                 // Redirect to the homepage
//                                 window.location.href = `http://localhost/amitclub/Html/index.php?club=${encodeURIComponent(data.club)}&name=${encodeURIComponent(data.name)}&bookingId=${bookingId}&tokenId=${response.razorpay_payment_id}&date=${encodeURIComponent(new Date().toLocaleString())}&mobile=${data.mobile}&email=${encodeURIComponent(data.email)}`;
//                             } else {
//                                 alert('Failed to update payment status in the database.');
//                             }
//                         })
//                         .catch(error => {
//                             console.error('Error:', error);
//                             alert('Something went wrong while updating payment status.');
//                         });
//                 },
//                 "prefill": {
//                     "name": data.name,
//                     "email": data.email,
//                     "contact": data.mobile
//                 },
//                 "theme": {
//                     "color": "red"
//                 }
//             };

//             var rzp1 = new Razorpay(options);
//             rzp1.open();
//         })
//         .catch(error => {
//             console.error('Error:', error);
//             alert('Error fetching booking details.');
//         });
// }

// // Function to display modal on the homepage
// function showModalOnHomepage() {
//     const urlParams = new URLSearchParams(window.location.search);
//     if (urlParams.has('club') && urlParams.has('name') && urlParams.has('bookingId') && urlParams.has('tokenId')) {
//         const details = {
//             clubName: urlParams.get('club'),
//             customerName: urlParams.get('name'),
//             bookingId: urlParams.get('bookingId'),
//             tokenId: urlParams.get('tokenId'),
//             date: urlParams.get('date'),
//             mobile: urlParams.get('mobile'),
//             email: urlParams.get('email')
//         };

//         const modalContent = `
//             <div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); 
//                         background: #fff; padding: 20px; border-radius: 8px; width: 400px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
//                 <h2>Booking Confirmation</h2>
//                 <p><strong>Club Name:</strong> ${details.clubName}</p>
//                 <p><strong>Customer Name:</strong> ${details.customerName}</p>
//                 <p><strong>Booking ID:</strong> ${details.bookingId}</p>
//                 <p><strong>Token ID:</strong> ${details.tokenId}</p>
//                 <p><strong>Date:</strong> ${details.date}</p>
//                 <p><strong>Mobile Number:</strong> ${details.mobile}</p>
//                 <p><strong>Email:</strong> ${details.email}</p>
//                 <div style="margin-top: 20px;">
//                     <button onclick="window.location.href='http://localhost/amitclub/Html/index.php'" 
//                             style="padding: 10px 20px; background: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
//                         Go to Home Page
//                     </button>
//                     <button onclick="window.location.href='http://localhost/amitclub/Html/buyticket.php'" 
//                             style="padding: 10px 20px; background: #008CBA; color: white; border: none; border-radius: 5px; cursor: pointer; margin-left: 10px;">
//                         Book Another Ticket
//                     </button>
//                 </div>
//             </div>
//             <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);"></div>
//         `;

//         // Append the modal to the body
//         const modalWrapper = document.createElement('div');
//         modalWrapper.id = 'paymentConfirmationModal';
//         modalWrapper.innerHTML = modalContent;
//         document.body.appendChild(modalWrapper);

//         // Close modal on clicking outside
//         modalWrapper.querySelector('div:last-child').onclick = () => {
//             modalWrapper.remove();
//         };
//     }
// }

// // Call this function on the homepage
// if (window.location.pathname.includes('/index.php')) {
//     showModalOnHomepage();
// }



//.............................url can contain only booking id 
// function payment(bookingId) {
//     console.log("Booking ID:", bookingId);
//     fetch(`http://localhost/amitclub/Html/get_booking_details.php?bookingId=${bookingId}`)
//         .then(res => res.json())
//         .then(data => {
//             if (data.error) {
//                 alert("Booking not found.");
//                 return;
//             }

//             var options = {
//                 "key": "rzp_test_EJk4TWdqYcZpEb",
//                 "amount": data.amount * 100,  // Razorpay amount is in paise, so multiply by 100
//                 "currency": "INR",
//                 "name": data.club,  // Get name from database
//                 "description": "Booking for Club Entry",
//                 "image": "../image/new.gif",
//                 "handler": function (response) {
//                     var paymentDetails = {
//                         bookingId: bookingId,
//                         payment_id: response.razorpay_payment_id,
//                         payment_status: "Success"
//                     };

//                     fetch('http://localhost/amitclub/Html/update_payment_status.php', {
//                         method: 'POST',
//                         headers: {
//                             'Content-Type': 'application/json'
//                         },
//                         body: JSON.stringify(paymentDetails)
//                     })
//                         .then(res => res.json())
//                         .then(dbResponse => {
//                             if (dbResponse.payment_status === 'success') {
//                                 // Redirect to homepage with only the bookingId in the URL
//                                 window.location.href = `http://localhost/amitclub/Html/index.php?bookingId=${bookingId}`;
//                             } else {
//                                 alert('Failed to update payment status in the database.');
//                             }
//                         })
//                         .catch(error => {
//                             console.error('Error:', error);
//                             alert('Something went wrong while updating payment status.');
//                         });
//                 },
//                 "prefill": {
//                     "name": data.name,
//                     "email": data.email,
//                     "contact": data.mobile
//                 },
//                 "theme": {
//                     "color": "red"
//                 }
//             };

//             var rzp1 = new Razorpay(options);
//             rzp1.open();
//         })
//         .catch(error => {
//             console.error('Error:', error);
//             alert('Error fetching booking details.');
//         });
// }







// Function to display modal by fetching data from the database



// function showModalOnHomepage() {
//     const urlParams = new URLSearchParams(window.location.search);
//     const bookingId = urlParams.get('bookingId');

//     if (bookingId) {
//         fetch(`http://localhost/amitclub/Html/fetch_booking_details.php?bookingId=${bookingId}`)
//             .then(res => res.json())
//             .then(data => {
//                 if (data.error) {
//                     alert('Failed to fetch booking details.');
//                     return;
//                 }

//                 const modalContent = `
//                     <div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); 
//                                 background: #fff; padding: 20px; border-radius: 8px; width: 400px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
//                         <h2>Booking Confirmation</h2>
//                         <p><strong>Club Name:</strong> ${data.club}</p>
//                         <p><strong>Customer Name:</strong> ${data.name}</p>
//                         <p><strong>Booking ID:</strong> ${data.bookingId}</p>
//                         <p><strong>Token ID:</strong> ${data.tokenId}</p>
//                         <p><strong>Date:</strong> ${data.date}</p>
//                         <p><strong>Mobile Number:</strong> ${data.mobile}</p>
//                         <p><strong>Email:</strong> ${data.email}</p>
//                         <div style="margin-top: 20px;">
//                             <button onclick="window.location.href='http://localhost/amitclub/Html/index.php'" 
//                                     style="padding: 10px 20px; background: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
//                                 Go to Home Page
//                             </button>
//                             <button onclick="window.location.href='http://localhost/amitclub/Html/buyticket.php'" 
//                                     style="padding: 10px 20px; background: #008CBA; color: white; border: none; border-radius: 5px; cursor: pointer; margin-left: 10px;">
//                                 Book Another Ticket
//                             </button>
//                         </div>
//                     </div>
//                     <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);"></div>
//                 `;

//                 // Append the modal to the body
//                 const modalWrapper = document.createElement('div');
//                 modalWrapper.id = 'paymentConfirmationModal';
//                 modalWrapper.innerHTML = modalContent;
//                 document.body.appendChild(modalWrapper);

//                 // Close modal on clicking outside
//                 modalWrapper.querySelector('div:last-child').onclick = () => {
//                     modalWrapper.remove();
//                 };
//             })
//             .catch(error => {
//                 console.error('Error fetching booking details:', error);
//                 alert('Something went wrong while fetching booking details.');
//             });
//     }
// }

// // Call this function on the homepage
// if (window.location.pathname.includes('http://localhost/amitclub/Html/index.php')) {
//     showModalOnHomepage();
// }

</script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>



<!-- ......................paymrnt................................. -->

<style>
    #paragraph{
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
    #paragraph{
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