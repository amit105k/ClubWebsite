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
    <style>
        /* General Reset */
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: black;
    color: white;
}
    /*

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
} */

header {
    background-color: #333;
    color: white;
    padding: 10px 0;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* max-width: 1200px; */
    margin: 0 auto;
    padding: 0 20px;
}

nav .logo {
    font-size: 24px;
    font-weight: bold;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
}

main {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
    
}

.intro {
    text-align: center;
    margin-bottom: 40px;
}

.intro h1 {
    font-size: 32px;
    color: white;
}

.services {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 30px;
}

.service-item {
    background-color: #3b4954;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.service-item h2 {
    font-size: 24px;
    /* margin-bottom: 10px; */
}

.service-item ul {
    list-style: none;
}

.service-item ul li {
    margin-bottom: 8px;
}

.cta {
    text-align: center;
    margin-top: 40px;
    padding: 40px;
    /* background-color: #333; */
    color: white;
    border-radius: 8px;
}

.cta h2 {
    font-size: 28px;
    margin-bottom: 20px;
}

.cta button {
    background-color: #ff6f61;
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 18px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 15px;
}

.cta button:hover {
    background-color: #ff3f2f;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
}

        * {
            padding: 0;
            margin: 0;
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
    </style>
</head>

<body>
    <nav>
        <h4>The Noida Clubs</h4>
        <a href="../html/index.php">Home</a>
        <a href="../html/about.php">About</a>
        <a href="../html/service.php">Services</a>
        <!-- <a href="#clubs">Clubs</a>
        <a href="#clubs">Gallery</a> -->
        <a href="../html/contact.php">Contact Us</a>
        <a href="../html/buyticket.php">Buy Tickets</a><img src="../image/new.gif" alt="">
        <a href="../Html/admin.php">Admin</a>
    </nav>

    <main>
        <section class="intro">
            <h1>Welcome to The Noida's Club Services Page</h1>
            <p>Explore our exclusive offerings designed to provide unique and enriching experiences for all our members.</p>
        </section>

        <section class="services">
            <div class="service-item">
                <h2>Exclusive Events and Gatherings</h2>
                <ul>
                    <li>Members-Only Parties</li>
                    <li>Networking Events</li>
                    <li>Themed Nights</li>
                    <li>Workshops & Seminars</li>
                </ul>
            </div>

            <div class="service-item">
                <h2>Premium Club Facilities</h2>
                <ul>
                    <li>Lounge & Social Areas</li>
                    <li>Fitness Center</li>
                    <li>Private Meeting Rooms</li>
                    <li>Dining Options</li>
                </ul>
            </div>

            <div class="service-item">
                <h2>Member Discounts & Partnerships</h2>
                <ul>
                    <li>Retail Discounts</li>
                    <li>Travel Benefits</li>
                    <li>Event Access</li>
                    <li>Wellness Programs</li>
                </ul>
            </div>

            <div class="service-item">
                <h2>Concierge & Personal Services</h2>
                <ul>
                    <li>Travel & Vacation Planning</li>
                    <li>Event Planning</li>
                    <li>Personal Shopping</li>
                    <li>24/7 Support</li>
                </ul>
            </div>

            <div class="service-item">
                <h2>Volunteer and Community Involvement</h2>
                <ul>
                    <li>Charity Drives & Events</li>
                    <li>Sustainability Programs</li>
                    <li>Mentorship Programs</li>
                </ul>
            </div>
        </section>

        <section class="cta">
            <h2>Get Started Today!</h2>
            <p>Join The Noida's Club and begin enjoying the full range of our premium services. For membership inquiries, pricing details, or questions about any of our offerings, please contact us!</p>
            <button id="contactBtn">Contact Us</button>
        </section>
    </main>

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
    document.getElementById('contactBtn').addEventListener('click', function() {
    alert('Thank you for your interest! Please contact us at contact@noidasclub.com for more information. OR 7007600000');
});
</script>