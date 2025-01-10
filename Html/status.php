<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Website</title>
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
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>


</head>
<style>
    .ss {
        margin-top: 0px !important;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    input[type="text"],
    input[type="password"] {
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        padding: 10px;
        /*   background-color:#4CAF50;*/
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }



    #adminpage {
        background-color: hsl(202, 75%, 47%);
        height: 380px;
        width: 50%;
        margin-left: 25%;
        padding: 10px;
        position: absolute;
        top: 130px;
        z-index: 2;
        border-radius: 10px;
        display: none;

    }

    #statuspage {
        color: white;
        text-align: center;
        background-color: hsl(202, 75%, 47%);
        /* height: 380px; */
        width: 50%;
        margin-left: 25%;
        padding: 10px;
        position: absolute;
        top: 130px;
        z-index: 2;
        border-radius: 10px;
        /* display: none; */
    }

    .search {
        line-height: 25px;
        font-size: 17px;
        margin-top: 20px;

    }

    input[type="submit"] {
        padding: 10px;
        cursor: pointer;
    }

    /* #paynow a {
        color: black;
        background-color: #4CAF50;
        text-decoration: none;
        color: orange;
    }

    #paynow {
        background-color: #4CAF50;
        position: absolute;
        margin-top: -170px;
        right: 20px;
        animation: pay 3s infinite alternate linear;
    }

    @keyframes pay {
        0% {
            margin-top: -170px;
        }

        ;

        100% {
            margin-top: -110px;
        }

        ;
    } */

    #cross {
        width: 6%;
        text-align: center;
        margin-left: 90.7%;
        margin-top: -100px;
        padding: 10px;
        position: absolute;
        top: 100px;
        z-index: 2;
        /* color: red; */
        font-size: 22px;
        background-color: inherit;
        border-radius: 100%;
        cursor: pointer;
    }

    #crosss {
        width: 6%;
        text-align: center;
        margin-left: 90.7%;
        margin-top: -100px;
        padding: 10px;
        position: absolute;
        top: 100px;
        z-index: 2;
        /* color: red; */
        font-size: 22px;
        background-color: inherit;
        border-radius: 100%;
        cursor: pointer;
    }

    #crosss a {
        text-decoration: none;
        color: white;
        /* background-color: red; */
        padding: 9px;
        border-radius: 100%;
    }

    #capta {
        text-align: center;
        width: auto !important;
        color: black;
        padding: 5px;
        display: inline-block !important;
        /* margin-top: 10px; */
        font-weight: bold;
        font-size: 28px;
        background: url(https://www.codeproject.com/KB/scripting/CreateCaptcha/1.JPG);
    }

    #password {
        /* background-color: rgba(0, 0, 0, 0); */
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;

    }
</style>

<body>

    <nav>
        <h4>The Noida Clubs</h4>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="service.php">Services</a>
        <!-- <a href="#clubs">Clubs</a>
        <a href="#clubs">Gallery</a> -->
        <a href="contact.php">Contact Us</a>
        <a href="../Html/buyticket.php">Buy Tickets</a><img src="../image/new.gif" alt="">
        <a href="#" id="admin">Admin</a>
        <!-- <a href="#" id="status">Booking Status</a> -->
        <!-- <h3>+91 70076000000</h3> -->

    </nav>

    <!-- Video Section -->
    <section>
        <video id="slider" autoplay muted loop>
            <source src="../image/7722221-uhd_3840_2160_25fps.mp4" type="video/mp4">
        </video>
        <div class="image-container">
            <ul class="left-side">
                <li onclick="videoselector('../image/video4.mp4')">
                    <img src="https://zonecleveland.com/wp-content/uploads/2019/04/ZONE_ENTERTAINMENT-CLUB-LIGHTING-001.jpg"
                        height="100px" width="150px">
                </li>
                <li onclick="videoselector('../image/video3.mp4')">
                    <img src="https://res.cloudinary.com/electronic-beats/c_fit,q_auto,f_auto,w_1920/stage/uploads/2020/03/SKALAR-Christopher-Bauder-Kangding-Ray-by-Ralph-Larmann-04.jpg"
                        height="100px" width="150px">
                </li>
                <li onclick="videoselector('../image/video2.mp4')">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3Ecl02TQx4lTJtQqGnqrUph-tNAs3M3y6Xg&s"
                        height="100px" width="150px">
                </li>
                <li onclick="videoselector('../image/video1.mp4')">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTU6s4fFiFo0TO0WDV8mx1Vp4jgngqDHmIng&s"
                        height="100px" width="150px">
                </li>
            </ul>
            <ul class="right-side">
                <li onclick="videoselector('../image/video1.mp4')">
                    <img src="https://res.cloudinary.com/electronic-beats/c_fit,q_auto,f_auto,w_606/stage/uploads/2020/02/traumabarundkino_84502241_546662359532113_5913643950639171790_n-1.jpg"
                        height="100px" width="150px">
                </li>
                <li onclick="videoselector('../image/video2.mp4')">
                    <img src="https://st.depositphotos.com/1004739/1570/i/450/depositphotos_15700515-stock-photo-stage-lights.jpg"
                        height="100px" width="150px">
                </li>
                <li onclick="videoselector('../image/video3.mp4')">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6vzdgFP0Z0k-ff_X79IIvxpSmOY8LGuTWRA&s"
                        height="100px" width="150px">
                </li>
                <li onclick="videoselector('../image/video4.mp4')">
                    <img src="https://static.vecteezy.com/system/resources/previews/029/197/075/non_2x/interior-of-a-night-club-with-neon-lights-3d-rendering-colorful-interior-of-bright-and-beautiful-night-club-with-dark-seats-and-glowing-lights-ai-generated-free-photo.jpg"
                        height="100px" width="150px">
                </li>
            </ul>
        </div>
    </section>

    <script type="text/javascript">
        function videoselector(videoLink) {
            document.getElementById('slider').src = videoLink;
        }
    </script>
    </div>
    </section>





    <!--..................................admin login ...............................-->




    <div id="adminpage">
        <div class="login-container">
            <h2 style="text-align: center;">Admin Login</h2>
            <form action="" id="loginForm">
                UserId :<input type="text" placeholder="Enter your User id" id="userId">
                Password :<input type="password" placeholder="Enter your password" id="password">
                <span id="capta"></span><button type="button" id="refreshCaptcha"
                    style="background: none; border: none; cursor: pointer;">
                    <i class="fas fa-sync-alt" style="color: black; position: absolute; margin-bottom:2px ;"></i>
                </button>
                <input type="text" id="captcha" placeholder="Enter Capta Code">
                <button type="submit">Login</button>
            </form>

            <div id="cross">X</div>
        </div>
    </div>




    <!-- booking status is here...................................................-->
    <div id="statuspage">
        <div class="login-container">
            <h2>Booking Status</h2>
            <form action="" method="post">
                <label for="searchInput">Enter Booking ID / Mobile Number</label>
                <input type="text" name="searchInput" id="searchInput" required>
                <!-- <input type="submit" value="Search"> -->
                <button>Search</button>
            </form>
            <div class="search">
                <?php
                include("db.php");

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $searchInput = $_POST['searchInput'];

                    $stmt = $conn->prepare("SELECT count,amount,id,club,name,payment_id,payment_status,date FROM registrations WHERE id = ? OR mobile = ?");
                    $stmt->bind_param("ss", $searchInput, $searchInput);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row['payment_status'] == "Success") {
                                echo "<strong>Club Name:</strong> " . $row['club'] . "<br>";
                                echo "<strong>Booking Id:</strong> " . $row['id'] . "<br>";
                                echo "<strong>Name:</strong> " . $row['name'] . "<br>";
                                echo "<strong>Payment ID:</strong> " . $row['payment_id'] . "<br>";
                                echo "<strong>Payment Status:</strong> " . $row['payment_status'] . "<br>";
                                echo "<strong>Booking Date:</strong> " . $row['date'] . "<br>";
                                echo "<strong>Total Persons:</strong> " . $row['count'] . "<br>";
                                echo "<strong>Amount:</strong> " . $row['amount'] . "<br><br>";

                                ?>
                                <script>
                                    Swal.fire({
                                        title: "Booking Confirm ",
                                        text: "Your Booking I'd is <?php echo $row['id']; ?>",
                                        icon: "success"
                                    });
                                </script>
                                <?php
                            } else if ($row['payment_status'] == "Pending") {
                                echo "<strong>Club Name:</strong> " . $row['club'] . "<br>";
                                echo "<strong>Booking Id:</strong> " . $row['id'] . "<br>";
                                echo "<strong>Name:</strong> " . $row['name'] . "<br>";
                                echo "<strong>Payment ID:</strong> " . $row['payment_id'] . "<br>";
                                echo "<strong>Payment Status:</strong> " . $row['payment_status'] . "<br>";
                                echo "<strong>Booking Date:</strong> " . $row['date'] . "<br>";
                                echo "<strong>Total Persons:</strong> " . $row['count'] . "<br>";
                                echo "<strong>Amount:</strong> " . $row['amount'] . "<br><br>";
                                // echo "<button type='submit'>Pay Now</button>";
                                ?>
                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                    <script>
                                        Swal.fire({
                                            title: "Your Booking is not confirmed",
                                            text: "Pay your Registration Fee",
                                            icon: "error",
                                            showCancelButton: true, 
                                            confirmButtonText: "Pay Now", 
                                            cancelButtonText: "Cancel", 
                                        }).then((result) => {
                                            if (result.isConfirmed) {

                                                window.location.href = "paynow.php?bookingId=<?php echo $row['id']; ?>";
                                            }
                                        });
                                    </script>
                                <?php

                            }
                        }
                    } else {

                        ?>
                        <script>
                            Swal.fire({
                                title: "Sorry We Cannot Find Any Booking!",
                                text: "Please Enter Correct Mobile/Booking I'd!",
                                icon: "error"
                            });
                        </script>
                        <?php
                    }

                    $stmt->close();
                    $conn->close();
                }
                ?>
            </div>

            <div id="crosss"> <a href="index.php">X</a></div>
        </div>
    </div>

    <!--.............admin login js......................................-->



    <script>
        document.getElementById('admin').addEventListener('click', function () {
            const adminpage = document.getElementById('adminpage');
            if (adminpage.style.display === 'none' || adminpage.style.display === '') {
                adminpage.style.display = 'block';
            } else {
                adminpage.style.display = 'none';
            }
        });

        document.getElementById('cross').addEventListener('click', function () {
            const adminpage = document.getElementById('adminpage');
            adminpage.style.display = 'none';
        });

        // Function to generate captcha
        function generateCaptcha() {
            const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            const randomLetters = letters.charAt(Math.floor(Math.random() * letters.length)) +
                letters.charAt(Math.floor(Math.random() * letters.length));
            const randomLower = Math.random().toString(36).substring(2, 5);
            const randomNumber = Math.floor(Math.random() * 90) + 10;

            return randomLetters + randomLower + randomNumber;
        }

        document.getElementById('capta').innerText = generateCaptcha();

        document.getElementById('refreshCaptcha').addEventListener('click', function () {
            document.getElementById('capta').innerText = generateCaptcha();
        });

        document.getElementById('loginForm').addEventListener('submit', function (event) {
            event.preventDefault();

            const userId = document.getElementById('userId').value;
            const password = document.getElementById('password').value;
            const captchaInput = document.getElementById('captcha').value;
            const captchaText = document.getElementById('capta').innerText;

            if (userId === 'admin' && password === 'admin123' && captchaInput === captchaText) {
                window.location.href = "http://localhost/amitclub/Html/admin.php";
            } else if (captchaInput !== captchaText) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Enter correct captcha code'
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'User and password are incorrect, please try again'
                });
            }
        });

    </script>

    <!-- ..................................booking status........ -->



</body>

</html>


<!-- customer review csss -->
<style>
    .c-customer-reviews {
        width: 100%;
        background-color: black;
        text-align: center;
        color: white;
        /* padding-bottom: 30px; */
    }

    .c-customer-reviews h2 {
        font-size: 24px;
        margin-bottom: 20px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .c-slider-container {
        position: relative;
        overflow: hidden;
        /* overflow-x: scroll; */
        width: 80%;
        margin-left: 10%;
        background-color: white;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
        /* animation: amit 3s infinite alternate linear; */

    }

    /* @keyframes amit{
        0%{margin-left: 0px;}
        10%{margin-left: 50px;}
        20%{margin-left: 100px;}
        30%{margin-left: 150px;}
        40%{margin-left: 200px;}
        50%{margin-left: 250px;}
        60%{margin-left: 300px;}
        70%{margin-left: 350px;}
        80%{margin-left: 400px;}
        90%{margin-left: 450px;}
        100%{margin-left: 500px;}
    } */

    .c-slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .c-slide {
        min-width: 33.33%;
        box-sizing: border-box;
        padding: 10px;
    }

    .c-slide img {
        width: 34%;
        /* border-radius: 8px; */
        height: 95px;
        border-radius: 100%;
        border: 5px solid black;
    }


    .c-slide .c-content {
        text-align: left;
        padding: 10px;
        background-color: rgb(44, 41, 41);
        z-index: 2;
        position: relative;
        height: 113px;
        text-align: center;
    }

    .c-content {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .c-slide .c-content p {
        margin: 10px 0;
    }

    .c-star-rating {
        /* display: flex; */
        justify-content: flex-start;
        overflow-x: auto;
        padding-bottom: 10px;
    }

    .c-star-rating .c-star {
        font-size: 20px;
        color: gold;
        margin-right: 5px;
    }

    .c-star-rating::-webkit-scrollbar {

        cursor: move;
    }

    .c-star-rating::-webkit-scrollbar-thumb {

        background: #888;
        border-radius: 3px;
    }

    .c-star-rating::-webkit-scrollbar-thumb:hover {

        background: #555;
    }

    .c-star-rating {
        /* display: flex; */
        justify-content: flex-start;
        padding-bottom: 10px;
        cursor: pointer;
    }

    .c-star-rating .c-star {
        font-size: 20px;
        margin-right: 5px;
        color: lightgray;
        /* Default color for unfilled stars */
    }

    .c-star-rating .filled {
        color: gold;
        /* Filled stars color */
    }
</style>





<!-- <section class="club-chart" id="clubs">
    <button onclick="showClubDetails('hauzKhas')">Hauz Khas</button>
    <button onclick="showClubDetails('delhiClub')">Delhi Club</button>
    <button onclick="showClubDetails('noidaClub')">Night Club Noida </button>
    <button onclick="showClubDetails('ghaziabadClub')">The Rock Club Ghaziabad</button>
    <button onclick="showClubDetails('whiteClub')">White Club</button>
</section>

<section class="club-details" id="clubDetails">
    <h2>Club Details</h2>
    <div id="hauzKhas" class="club-info">
        <h2>Hauz Khas</h2>
        <img src="https://yometro.com/images/places/Hauz-Khas-Social.jpg" alt="">
        <p>Hauz Khas is known for its vibrant nightlife and artistic crowd.</p>
    </div>
    <div id="delhiClub" class="club-info" style="display: none;">
        <h2>Delhi Club</h2>
        <img src="https://images.venuepool.com/venue_images/805/delhi-club-house1.jpg" alt="">
        <p>Delhi Club offers a classy ambiance with international DJs and an amazing bar.</p>
    </div>
    <div id="noidaClub" class="club-info" style="display: none;">
        <h2>Night Club Noida</h2>
        <img src="https://i.ytimg.com/vi/dfVb5OVohC8/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDU2HEfKomH7TSd0lyPhDDZIZFr1g"
            alt="">
        <p>Noida Club is famous for its large dance floor and themed parties.</p>
    </div>
    <div id="ghaziabadClub" class="club-info" style="display: none;">
        <h2>The Rock Club Ghaziabad</h2>
        <img src="https://content3.jdmagicbox.com/v2/comp/delhi/h2/011pxx11.xx11.190213195620.y6h2/catalogue/the-rock-club-indirapuram-delhi-pubs-g33soprvtg.jpg"
            alt="">
        <p>Ghaziabad Club is a popular destination for live music and cultural events.</p>
    </div>
    <div id="whiteClub" class="club-info" style="display: none;">
        <h2>White Club</h2>
        <img src="https://offloadmedia.feverup.com/secretnewdelhi.com/wp-content/uploads/2024/05/10203557/antoine-j-r3XvSBEQQLo-unsplash-1-1024x683.jpg"
            alt="">
        <p>White Club is a premium club with elegant interiors and an exclusive crowd.</p>
    </div>
</section> -->