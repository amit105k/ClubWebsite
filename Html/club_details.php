<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Details</title>
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
</head>

<body>
    <?php
    include('db.php');


    if (isset($_GET['id'])) {
        $club_id = $_GET['id'];

        $sql = "SELECT * FROM club_overviews WHERE id = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("SQL preparation failed: " . $conn->error);
        }

        $stmt->bind_param("i", $club_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>

            <nav>
                <h4>The Noida Club</h4>
                <!-- <h4><?php echo $row['club_name']; ?></h4> -->
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="service.php">Services</a>
                <a href="contact.php">Contact Us</a>
                <a href="../Html/buyticket.php">Buy Tickets</a><img src="../image/new.gif" alt="">

            </nav>






            <div class="overviews">
                <h2><span>Welcome To</span> <?php echo $row['club_name']; ?></h2>
                <div class="image-containerr">

                    <div class="fade">
                        <img src="<?php echo $row['image_url']; ?>" alt="Club Image" class="image">
                    </div>
                    <div class="paragraphh">
                        <h2>Description Of Our Club</h2></br>
                        <p><?php echo $row['about']; ?></p>
                        <div class="text">
                            <h3 id="hhhh">Opening and Closing Time:-</br>
                                <pi id="hhh"><?php echo $row['show_time']; ?>
                            </h3>
                            <h id="hhh">Address:- </br>
                                <pi id="hhh"><?php echo $row['city']; ?></p>
                                    <pi id="hhh"><?php echo $row['address']; ?></pi><br>

                                    <!-- <a href="<?php echo $row['book_tkt']; ?>" class="btn">Buy Tickets</a> -->
                                    <a href="registration_form.php?club_name=<?php echo urlencode($row['club_name']); ?>"
                                        class="btn">Buy
                                        Tickets</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="new">
                <h2>Gallery</h2>
                <div class="image3">
                    <section>
                        <img src="<?php echo $row['image_url1']; ?>" alt="No Image Found " class="image">
                    </section>
                    <section>
                        <img src="<?php echo $row['image_url2']; ?>" alt="No Image Found " class="image">
                    </section>
                    <section>
                        <img src="<?php echo $row['image_url3']; ?>" alt="No Image Found " class="image">
                    </section>
                </div>
            </div>

            <?php
        } else {
            echo "No details found for this club.";
        }
        $stmt->close();
    } else {
        echo "No club ID provided.";
    }
    $conn->close();
    ?>

    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <img src="https://i0.wp.com/pixahive.com/wp-content/uploads/2021/02/An-Indian-boy-375075-pixahive.jpg?fit=1702%2C2560&ssl=1"
                    alt="Customer 1">
                <p>"Great service and amazing quality!" - Customer 1</p>
            </div>
            <div class="slide">
                <img src="https://i.pinimg.com/236x/12/8d/12/128d126fb0632643ca1aa0938f7bcc66.jpg" alt="Customer 2">
                <p>"Absolutely love this!" - Customer 2</p>
            </div>
            <div class="slide">
                <img src="https://static.toiimg.com/thumb/imgsize-23456,msid-105800390,width-600,resizemode-4/105800390.jpg"
                    alt="Customer 3">
                <p>"Exceptional experience every time." - Customer 3</p>
            </div>
            <div class="slide">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d2/Ranbir_Kapoor_promoting_Brahmastra.jpg"
                    alt="Customer 4">
                <p>"Highly recommend this product." - Customer 4</p>
            </div>
            <div class="slide">
                <img src="https://m.media-amazon.com/images/M/MV5BOGJkMzRiYmQtOTVjNy00MWU3LTg5YjctNjcwMmZlNGIwMjhmXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"
                    alt="Customer 5">
                <p>"Five stars! Will buy again." - Customer 5</p>
            </div>
        </div>
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
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;
    let direction = 1; // 1 for right, -1 for left

    function slideShow() {
        currentIndex += direction;

        if (currentIndex >= slides.length || currentIndex < 0) {
            direction *= -1; // Reverse direction
            currentIndex += direction;
        }

        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    setInterval(slideShow, 3000); // Change slide every 3 seconds
</script>

<style>


/*...................................................slider................................................... */


    .slider-container {
        width: 100%;
        overflow: hidden;
        position: relative;
        background: black;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* border-radius: 8px; */
        display: flex;
    }

    .slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
        /* width: 80%; */

    }

    .slide {

        /* background: red !important; */
        min-width: 100%;
        text-align: center;
    }

    .slide img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 10px;
        margin-top: 16px;
    }

    .slide p {
        font-size: 16px;
        color:white;
        margin-bottom: 50px;
        
    }

    .slider-container .buttons {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .buttons button {
        background: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 4px;
    }

    .buttons button:hover {
        background: rgba(0, 0, 0, 0.8);
    }


    .new h2 {
        font-size: 30px;
        padding: 0;
        color: #66b8cb;
    }

    .paragraphh {
        width: 38%;
        /* background-color: red; */
        /* border: 2px solid #66b8cb; */
        color: white;
    }

    .paragraphh :first-child {
        font-size: 30px;
        padding: 0;
        color: #66b8cb;
    }

    .paragraphh p {
        padding: 9px;
        font-size: 18px;
        text-align: justify;
    }

    .text {
        /* background: pink; */
        /* width: 28%; */
        color: white;
        /* border: 2px solid #66b8cb; */
        text-align: center;

    }

    #hhh {
        margin-top: 6% !important;
        font-size: 21px;
        color: white;
    }

    #hhhh {
        margin-top: 3%;
        font-size: 25px;
    }

    .text p {
        font-size: 22px;
    }

    .image3 {
        /* background-color: red !important;         */
        /* padding-bottom: 20px; */
        flex-wrap: wrap;
        display: flex;
        justify-content: center;
        gap: 20px;
        background-color: black;
        padding: 20px;


    }

    .image3 section {
        width: 28%;
        height: 350px;
        border: 12px solid white;

    }

    .new {
        background: black;
        color: white;

    }

    .new h2 {
        text-align: center;
    }

    /* .new p {
        width: 87%;
        margin-left: 6%;
        text-align: justify;
        font-size: 18px;
    } */

    .overviews {
        /* margin-top: 47px; */
    }

    .overviews h2 {
        text-align: center;
        padding: 20px;
        background-color: black;
        color: white;
        font-size: 32px;
    }

    .overviews span {
        color: #66b8cb;
    }


    .image-containerr {
        padding-bottom: 20px;
        flex-wrap: wrap;
        display: flex;

        justify-content: center;
        gap: 20px;
        background-color: black;
    }


    .fade {
        position: relative;
        border: 2px solid #66b8cb;
        width: 50%;
        height: 400px;
    }

    .image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .overlay {
        background-color: red;

    }



    /* .overlay { */
    /* position: absolute; */
    /* top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: red;
        opacity: 0; */
    /* transition: opacity 0.3s ease; */


    /* .fade:hover .overlay {
        opacity: 1;
    } */


    /* .text {
        color: white;
        font-size: 20px;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        /* transform: translate(-50%, -50%); */
    /* width: 100%;
    */


    .text h4,
    .text h5,
    .text p {
        padding: 3px;
    }

    .text h2 {
        padding: 5px;
        margin-top: 10px;
    }


    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #00aaff;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px;
    }

    .btn:hover {
        background-color: #0077cc;
    }


    * {
        padding: 0;
        margin: 0;
    }

    nav {

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
        border-top:1px solid rgba(58, 138, 208, 0.57);
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