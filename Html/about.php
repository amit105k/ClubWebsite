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
            box-shadow: 0 0 6px 5px rgba(58, 138, 208, 0.57);
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


        /* ...................contenty are start......................... */

        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background-color: #121212;
    color: white;
}

.hero {
    background: url('https://media.istockphoto.com/id/535403859/photo/dancing-at-disco.jpg?s=612x612&w=0&k=20&c=mVZX9qAsgnOv8C0t9gR81ofJ0JG20Orc4Io9r4AKNQQ=') no-repeat center center/cover;
    height: 60vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.hero-content h1 {
    font-size: 3em;
    color: #fff;
    margin-bottom: 20px;
}

.hero-content p {
    font-size: 1.5em;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 30px;
}

.cta-button {
    background-color: #ff6f61;
    color: white;
    padding: 15px 30px;
    text-decoration: none;
    border-radius: 25px;
    font-size: 1.2em;
}

.cta-button:hover {
    background-color: #e04b42;
}

.services {
    padding: 50px 0;
    text-align: center;
}

.services h2 {
    font-size: 2.5em;
    margin-bottom: 40px;
    color: #ff6f61;
}

.service-cards {
    display: flex;
    justify-content: center;
    gap: 30px;
}

.service-card {
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 15px;
    width: 250px;
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease;
}

.service-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 20px;
}

.service-card h3 {
    font-size: 1.6em;
    color: #ff6f61;
}

.service-card p {
    font-size: 1.2em;
    color: white;
    margin-bottom: 20px;
}

.service-card:hover {
    transform: translateY(-10px);
}

.events {
    padding: 50px 0;
    background-color: #1a1a1a;
    text-align: center;
}

.events h2 {
    font-size: 2.5em;
    color: #ff6f61;
    margin-bottom: 40px;
}

.event-list {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
}

.event-item {
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 15px;
    padding: 20px;
    width: 250px;
    text-align: center;
    transition: transform 0.3s ease;
}
.event-item img{
    width: 210px;
    height: 210px;
}
.event-item h3 {
    font-size: 1.6em;
    color: #ff6f61;
    margin-bottom: 15px;
}

.event-item p {
    color: white;
    margin-bottom: 20px;
}

.event-item:hover {
    transform: translateY(-10px);
}

.testimonials {
    padding: 50px 0;
    background-color: #121212;
    text-align: center;
}

.testimonials h2 {
    font-size: 2.5em;
    color: #ff6f61;
    margin-bottom: 40px;
}

.testimonial-list {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
}

.testimonial-item {
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 15px;
    padding: 20px;
    width: 250px;
    color: white;
}
.testimonial-item img{
    height: 70px;
    width: 70px;
    border-radius: 100%;
}




/* .....footer is start here............................................ */



footer {
    background-color: rgba(0, 0, 0, 0.8);
    text-align: center;
    padding: 20px;
    color: white;
    
}

footer p {
    font-size: 1em;
}

    </style>
</head>
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
        <a href="status.php" id="status">Booking Status</a>
        <a href="../Html/admin.php">Admin</a>
    </nav>


        <!-- ..............................content are here................................ -->


    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to ClubBar</h1>
            <p>Where the best drinks and unforgettable vibes meet!</p>
            <a href="#services" class="cta-button">Explore Our Services</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <h2>Our Exclusive Services</h2>
        <div class="service-cards">
            <div class="service-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOOX--y1QYlVqGw-n3mNXggPykvyw_umc0bw&s" alt="Cocktails">
                <h3>Cocktail Masterclass</h3>
                <p>Learn how to craft world-class cocktails with our expert bartenders. Whether you're a beginner or a seasoned mixologist, our interactive classes are designed to boost your skills while having a good time.</p>
                <a href="#contact" class="cta-button">Book Now</a>
            </div>
            <div class="service-card">
                <img src="https://5.imimg.com/data5/QH/FD/QY/SELLER-63618412/dj-nights.jpg" alt="DJ Night">
                <h3>DJ Nights</h3>
                <p>Dance the night away to the hottest tracks played by our talented DJs. From hip-hop to EDM, our DJ nights promise an electrifying experience that keeps you on your feet all night long.</p>
                <a href="#contact" class="cta-button">Get Tickets</a>
            </div>
            <div class="service-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaaI9nZIQhnTDila9LpdR0tDcwcryy49MBgw&s" alt="VIP Lounge">
                <h3>VIP Lounge</h3>
                <p>Experience luxury and privacy in our exclusive VIP Lounge. Enjoy personalized service, premium bottle service, and the best seats in the house for an unforgettable night out.</p>
                <a href="#contact" class="cta-button">Reserve Spot</a>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="events">
        <h2>Upcoming Events</h2>
        <div class="event-list">
            <div class="event-item" >
                <img src="https://img.freepik.com/premium-vector/happy-new-year-2025-celebration-concept_1020331-42791.jpg" alt="">
                <h3>New Year's Eve Bash</h3>
                <p>Celebrate the start of a new year in style! Join us for our biggest party of the year with live music, free-flowing drinks, and a countdown to remember!</p>
                <p><strong>Date:</strong> January 01, 2025</p>
                <a href="buyticket.html" class="cta-button">Get Your Tickets</a>
            </div>
            <div class="event-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFrtH2I30boIJ0vkO3a5ImhFoWeZwTqvS6Eg&s" alt="">
                <h3>Ladies Night</h3>
                <p>Every Friday, it's all about the ladies! Enjoy free entry, happy hour specials, and dance the night away to our live DJ sets.</p>
                <p><strong>Date:</strong> Every Friday</p>
                <a href="buyticket.html" class="cta-button">Join the Party</a>
            </div>
            <div class="event-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbG0yRHNruZfo2mihZkDgTVxQIkyNWRnGl3g&s" alt="">
                <h3>Live Music Saturdays</h3>
                <p>Enjoy an evening of soulful live music by local bands. Enjoy delicious cocktails and relax with friends while grooving to the beat.</p>
                <p><strong>Date:</strong> Every Saturday</p>
                <a href="buyticket.html" class="cta-button">RSVP Now</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <h2>What Our Guests Are Saying</h2>
        <div class="testimonial-list">
            <div class="testimonial-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFrtH2I30boIJ0vkO3a5ImhFoWeZwTqvS6Eg&s" alt="">
                <p>"ClubBar is hands down the best place for a night out! The atmosphere is amazing, the drinks are top-notch, and the DJ was on fire. We danced till dawn!"</p>
                <p><strong>- Jessica L.</strong></p>
            </div>
            <div class="testimonial-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsoUC-q0_jukuh4zIx4SpOe-T1yPzKe-ckJg&s" alt="">
                <p>"I took the cocktail masterclass and had an incredible time. The bartender was so knowledgeable and made learning fun. Highly recommend it!"</p>
                <p><strong>- Mark T.</strong></p>
            </div>
            <div class="testimonial-item">
                <img src="https://i.pinimg.com/236x/46/0b/dd/460bdd0bb441959368e363f132be0db9.jpg" alt="">
                <p>"VIP treatment all the way. The staff was fantastic, and the private lounge area made our night feel so special. Definitely booking again!"</p>
                <p><strong>- Sarah W.</strong></p>
            </div>
        </div>
    </section>





<!-- .....................footer is here........................................................... -->

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