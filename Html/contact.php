<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <style>
        * {
            padding: 0;
            margin: 0;

        }

        .container h1,
        .container p {
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }


        /* Navbar Styles */
        nav {
            /* background-color: hsl(202, 75%, 47%); */
            background-color: black;
            padding: 10px;
            text-align: center;
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        nav img {
            margin-top: -15px;
            margin-left: -21px;
        }

        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-transform: uppercase;
        }

        nav a:hover {
            color: orange;
        }

        nav h4 {
            font-size: 28px;
            color: white;
            position: absolute;
            left: 10px;
            font-family: "Dancing Script", cursive;
            font-optical-sizing: auto;
            font-style: normal;
        }

        nav h3 {
            font-size: 22px;
            color: white;
            position: absolute;
            right: 15px;
            font-family: "Dancing Script", cursive;
            font-optical-sizing: auto;
            font-style: normal;
        }


        /* ..............footer..................... */

        .footer {
            background-color: black;
            color: white;
            display: flex;
        }

        .fleft {
            /* background-color: green; */
            width: 30%;
            margin-left: 5%;
            padding: 20px;
        }

        .fleft p {
            padding: 5px;
            text-align: justify;
        }

        .fleft h4 {
            font-size: 22px;
            margin-bottom: 8px;
            font-style: italic;
        }

        .fright {
            display: flex;
            justify-content: space-between;
            text-align: center;
            margin-right: 5%;
            /* background-color: red; */
            width: 60%;
            padding: 20px;
        }

        .fright ul {
            list-style-type: none;
            line-height: 30px;
            text-align: left;
            width: 30%;
        }

        .fright span {
            font-weight: bold;
            font-size: 18px;
        }

        .fa-brands {
            font-size: 22px;
            color: white;
            padding: 10px;
            border: .2px solid white;
            border-radius: 8px;
            /* background-color: black; */
        }

        .fa-brands:hover {
            background-color: #4CAF50;
        }

        .ftext {
            text-align: center;
            background-color: black;
            color: white;
            padding: 10px;
        }

        .hr {
            background-color: white;
            width: 100%;
            height: 1px;
        }

        /* .................................................................. */

        header {
            background-color: black;
            ;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .container {
            margin: auto;
            overflow: hidden;
            background-color: black;
        }

        .contact-form {
            width: 50%;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* background: black; */
            margin-left: 25%;
            margin-bottom: 5%;
        }

        .contact-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input,
        textarea {
            width: 95%;
            padding: 10px;
            margin: 5px 0 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .contact-info {
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
        }

        .contact-info div {
            flex: 1;
            margin-right: 20px;
        }

        .contact-info div:last-child {
            margin-right: 0;
        }

        .map {
            border: 10px solid white;
        }


        /**....social media slider css is header */
        .social {
            width: 150px;
            height: 50px;
            display: flex;
            background: lightblue;
            position: fixed;
            right: -98px;
            cursor: pointer;
            top: 30%;
            transition-duration: 3s;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .social:hover {
            right: 0px;
            transition-duration: 2s;
        }

        .social section {
            display: flex;
        }

        .social i {
            /* width: 40px; */
            /* width: 30%;
            margin-top: 6px;
            margin-left: 8px; */
            font-size: 30px;
            color: blue;
        }

        .social :last-child {
            flex: 3;
        }

        .social a {
            text-decoration: none;
            font-size: 18px;
            display: block;
            margin-top: 15px;
            margin-left: 18px;
        }
    </style>
</head>

<body>
    <nav>
        <h4>The Noida Clubs</h4>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <!-- <a href="#clubs">Clubs</a>
        <a href="#clubs">Gallery</a> -->
        <a href="contact.php">Contact Us</a>
        <a href="../Html/buyticket.php">Buy Tickets</a><img src="../image/new.gif" alt="">
        <a href="status.php" id="status">Booking Status</a>
        <!-- <a href="../Html/admin.php">Admin</a> -->
    </nav>

    <div class="container">
        <h1>Contact Us</h1>
        <p>We're here to help. Get in touch with us today!</p>
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="connect.php" method="POST" id="form">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter your name" required>

                <label for="phone">Your Phone</label>
                <!-- <input type="text" id="phone" name="phone" required placeholder="Enter your Phone" minlength="10"  -->

                <!-- <input type="tel" id="phone" name="phone" required placeholder="Enter your Phone" minlength="10" maxlength="10" pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number"> -->
                <input type="text" id="phone" name="phone" required placeholder="Enter your Phone" minlength="10"
                    maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                    title="Please enter a valid 10-digit phone number">


                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email" required>

                <label for="message">Your Message</label>
                <textarea id="message" name="message" placeholder="Write your message here max 150 word" rows="5"
                    maxlength="150"></textarea>

                <!-- <span id="msg">hh</span> -->
                <button name="submit" type="submit" required value="Send" id="submit">Submit</button>

            </form>
        </div>


    </div>
    <div class="map"><iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7003.981074858048!2d77.36991447770998!3d28.63004570000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceff8864e0cf1%3A0xa20290bf75099ebd!2sBSI%20Business%20Park%20H15!5e0!3m2!1sen!2sin!4v1733815437100!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- small slider for social media-->
    <div class="social">
        <section><i class="fa-brands fa-facebook"></i><a href="www.facebook.com" target="_blank">Facebook</a></section>
    </div>

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


    jQuery('#form').on('submit', function (e) {
        console.log("click");
        jQuery('#msg').html('');
        jQuery('#submit').html('Please wait');
        jQuery('#submit').attr('disabled', true);
        jQuery.ajax({
            url: 'connect.php',
            type: 'post',
            data: jQuery('#form').serialize(),
            success: function (result) {
                jQuery('#msg').html(result);
                jQuery('#submit').html('Message Sent');
                setTimeout(function () {
                    jQuery('#msg').empty();
                    jQuery('#submit').html('Send Message');
                }, 3000);

                jQuery('#submit').attr('disabled', false);
                jQuery('#form')[0].reset();
            }
        });
        e.preventDefault();
    });



</script>