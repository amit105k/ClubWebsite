<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmHouse Details</title>
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

        $sql = "SELECT * FROM farmhouse WHERE id = ?";
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
                <!-- <h4><?php echo $row['name']; ?></h4> -->
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="service.php">Services</a>
                <a href="contact.php">Contact Us</a>
                <a href="../Html/buyticket.php">Buy Tickets</a><img src="../image/new.gif" alt="">
                <a href="status.php" id="status">Booking Status</a>

            </nav>

            <div class="overviews">
                <h2><span>Welcome To</span> <?php echo $row['name']; ?></h2>
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
                                    <a href="farmHouseTicket.php?id=<?php echo urlencode($row['id']); ?>" class="btn">Buy
                                        Tickets</a>
                        </div>

                    </div>
                </div>
            </div>


            <!--...................................lawn are here ......................-->
            <div class="c-customer-reviews lawn">
                <h2>Customer Reviews</h2>
                <div class="c-slider-container lawn1">
                    <div class="c-slider lawn2">
                        <div class="c-slide lawn3">
                            <div class="card card-body text-center lawn4">
                                <a href="lawnticketbook.php?club_name=lawn&price=5000&extraperson=150">
                                    <img class="img-fluid" src="https://evafarms.in/img/carousel-head/FarmHouse.png"
                                        loading="lazy">
                                    <h6 class="text-center">Lawn </h6>
                                </a>
                            </div>
                        </div>
                        <div class="c-slide lawn3">
                            <div class="card card-body text-center">
                                <a href="lawnticketbook.php?club_name=Family Suite&price=5000&extraperson=250">
                                    <img class="img-fluid" src="https://evafarms.in/img/carousel-head/Lawn.png" loading="lazy">
                                    <h6 class="text-center">Family Suite </h6>
                                </a>
                            </div>
                        </div>
                        <div class="c-slide lawn3">
                            <div class="card card-body text-center">
                                <a href="lawnticketbook.php?club_name=Engagement&price=35000&extraperson=600">
                                    <img class="img-fluid" src="https://evafarms.in/img/carousel-head/Engagement.png"
                                        loading="lazy">
                                    <h6 class="text-center">Engagement </h6>
                                </a>
                            </div>
                        </div>
                        <div class="c-slide lawn3">
                            <div class="card card-body text-center">
                                <a href="lawnticketbook.php?club_name=Pool Party&price=2500&extraperson=300">
                                    <img class="img-fluid" src="https://evafarms.in/img/carousel-head/PoolParty.png"
                                        loading="lazy">
                                    <h6 class="text-center">Pool Party </h6>
                                </a>
                            </div>
                        </div>
                        <div class="c-slide lawn3">
                            <div class="card card-body text-center">
                                <a href="lawnticketbook.php?club_name=BYOB&price=5000&extraperson=300">
                                    <img class="img-fluid" src="https://evafarms.in/img/carousel-head/BYOB.png" loading="lazy">
                                    <h6 class="text-center">BYOB </h6>
                                </a>
                            </div>
                        </div>
                        <div class="c-slide lawn3">
                            <div class="card card-body text-center">
                                <a href="lawnticketbook.php?club_name=Corporate&price=35000&extraperson=300">
                                    <img class="img-fluid" src="https://evafarms.in/img/carousel-head/Corporate.png"
                                        loading="lazy">
                                    <h6 class="text-center">Corporate </h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--................menu bar is here....................-->
            <div class="menu">
                <h1>Facilities of FarmHouse</h1>
                <div class="menu-sections">
                    <div class="section  fac">
                        <h4><span><i class="fa-solid fa-bath"></i> </span>Bathroom</h4>
                        <ul>
                            <li>Toilet paper</li>
                            <li>Towels</li>
                            <li>Private bathroom </li>
                            <li>Toilet </li>
                            <li>Bathtub </li>
                            <li>Shower </li>
                        </ul>
                    </div>

                    <!-- Section 2 -->
                    <div class="section fac">
                        <h4><span><i class="fa-solid fa-dungeon"></i></span> Outdoors</h4>
                        <ul>
                            <li>Terrace</li>
                            <li>Balcony</li>

                        </ul>
                        <h4><span><i class="fa-solid fa-g"></i></span> General</h4>
                        <ul>
                            <li>Smoke-free property </li>
                            <li>Heating</li>
                            <li>Air conditioning </li>

                        </ul>
                    </div>

                    <!-- Section 3 -->
                    <div class="section fac">
                        <h4><span><i class="fa-solid fa-wifi"></i> </span>Internet</h4>
                        <ul>
                            <li>internet access available.</li>
                            <li>Brand Bend are available</li>
                            <li>LAN cabel are available</li>

                        </ul>
                        <h4> <span><i class="fa-solid fa-square-parking"></i></span> Parking</h4>
                        <ul>
                            <li>Free private parking is available on site (reservation is not needed).</li>
                        </ul>
                    </div>
                    <div class="section fac">
                        <h4><span><i class="fa-solid fa-bed"></i></span> Bedroom</h4>
                        <ul>
                            <li>Linens</li>
                            <li>Wardrobe or closet </li>

                        </ul>
                        <h4><span><i class="fa-solid fa-cloud-sun"></i></span> View</h4>
                        <ul>
                            <li>Garden view </li>
                            <li>View </li>
                            <li>Sun rise </li>

                        </ul>
                    </div>
                    <div class="section fac">
                        <h4><span><i class="fa-solid fa-kitchen-set"></i></span> Kitchen</h4>
                        <ul>
                            <li>Dining table </li>
                            <li>Refrigerator</li>

                        </ul>
                        <h4><span><i class="fa-solid fa-paw"></i></span> Pets</h4>
                        <ul>
                            <li>Pets are allowed. No extra charges. </li>
                            <li>Cabs are also available for pets</li>

                        </ul>
                    </div>
                    <div class="section fac">
                        <h4><span><i class="fa-solid fa-couch"></i></span> Living Area</h4>
                        <ul>
                            <li>Dining area </li>

                        </ul>
                        <h4><span><i class="fa-solid fa-tv"></i></span> Media & Technology</h4>
                        <ul>
                            <li>Flat-screen TV </li>

                        </ul>
                        <h4><span><i class="fa-solid fa-language"></i></span> Languages Spoken</h4>
                        <ul>
                            <li>English </li>
                            <li>Hindi </li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- ..........................FarmHouse Rules and Regulation.......................... -->
            <div class="menu rule">
                <h1>Rules of FarmHouse</h1>
                <div class="menu-sections rule-section">
                    <div class="section  fac rule hover">
                        <h4><span><i class="fa-solid fa-check"></i> </span>Check-in</h4>
                        <ul>
                            <li>From 3:00 PM to 6:00 PM</li>
                        </ul>
                    </div>

                    <div class="section fac rule hover">
                        <h4><span><i class="fa-solid fa-dungeon"></i></span> Check-out</h4>
                        <ul>
                            <li>From 8:00 AM to 11:00 AM </li>
                        </ul>
                    </div>
                    <div class="section fac rule hover">
                        <h4><span><i class="fa-solid fa-g"></i></span> Cancellation/ prepayment</h4>
                        <ul>
                            <li>Cancellation and prepayment policies vary according to accommodation type. Enter your stay dates
                                and check the conditions of your selected option.</li>
                        </ul>
                    </div>

                    <div class="section fac rule hover">
                        <h4><span><i class="fa-solid fa-wifi"></i> </span>Children & Beds</h4>
                        <ul>
                            <li>Child policies Children of all ages are welcome. To see correct prices and occupancy info, add
                                the number and ages of children in your group to your search.</li>
                        </ul>

                    </div>
                    <div class="section fac rule hover">
                        <h4><span><i class="fa-solid fa-wifi"></i> </span>Crib and extra bed policies</h4>
                        <ul>
                            <li>Cribs and extra beds aren't available at this property.</li>
                        </ul>
                    </div>
                    <div class="section fac rule hover">
                        <h4><span><i class="fa-solid fa-bed"></i></span> Pets</h4>
                        <ul>
                            <li>Free!Pets are allowed. No extra charges.</li>

                        </ul>

                    </div>
                    <div class="section fac rule hover">
                        <h4><span><i class="fa-solid fa-cloud-sun"></i></span> Smoking</h4>
                        <ul>
                            <li>Smoking is allowed.</li>
                        </ul>
                    </div>

                </div>
            </div>


            <!-- .....................areda info are here.......................... -->

            <div class="menu">
                <h1>Area info</h1>
                <div class="menu-sections area">
                    <div class="section  fac area-section">
                        <h4><span><i class="fa-solid fa-person-walking"></i></span> What's nearby</h4>
                        <ul>
                            <li>Aravali Garden -<span>2.2 km</span></li>
                            <li>Aravali Meadows-Sohna - <span>3.4 km</span></li>
                            <li>Krishna Mangalam Vatika <span>4.3 km</span> </li>
                            <li>Central Park - <span>7 km</span> </li>
                            <li>Crescent Park - <span>8 km</span> </li>
                            <li>Mondrian Park - <span>9 km</span> </li>
                            <li>Jagran Park - <span>10 km</span> </li>
                            <li>Neha Nursery - <span>10 km</span> </li>
                            <li>Arora Park - <span>11 km</span> </li>
                            <li>Obstacle Park - <span>11 km</span> </li>

                        </ul>
                    </div>

                    <!-- Section 2 -->
                    <div class="section fac area-section">
                        <h4><span><i class="fa-solid fa-utensils"></i></span> Restaurants & cafes</h4>
                        <ul>
                            <li>Apna Dhaba - <span>1 km</span> </li>
                            <li>China Town - <span>5 km</span> </li>
                            <li>Mahola - <span>5.1 km</span> </li>
                            <li>Hotel Amit - <span>7.1 km</span> </li>

                        </ul>
                        <h4><span><i class="fa-solid fa-train"></i></span> Public transit</h4>
                        <ul>
                            <li>M.G Road metro station - <span>7 km</span> </li>
                            <li>Iffco chowk metro station - <span>9 km</span> </li>
                            <li>Sector 55 & 56 - <span>14 km</span> </li>
                            <li>Sector 54 Chowk - <span>19 km</span> </li>
                            <li>Huda City Centre - <span>17 km</span> </li>


                        </ul>
                    </div>

                    <!-- Section 3 -->
                    <div class="section fac area-section">
                        <h4><span><i class="fa-solid fa-plane-departure"></i> </span>Closest Airports</h4>
                        <ul>
                            <li>Delhi International Airport - <span>25 km</span> </li>
                            <li>Hindon Airport - <span>60 km</span> </li>
                        </ul>
                    </div>

                </div>
            </div>



            <!-- ......................farmHouse image has been deployed......................... -->


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



    <!-- .....................customer reviews..................................................... -->
    <div class="c-customer-reviews">
        <h2>Customer Reviews</h2>

        <!-- Slider Container -->
        <div class="c-slider-container">
            <div class="c-slider">
                <!-- Slide 1 -->
                <div class="c-slide">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR61xwV7YcxzGy_rDKq67YVijcDaYEoZyF7uQ&s"
                        alt="Customer 1">
                    <div class="c-content">
                        <h4>Rashmika Mandanna</h4>
                        <p>This product is amazing! It exceeded my expectations.</p>
                        <div class="c-star-rating">
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="c-slide">
                    <img src="https://cdn.pixabay.com/photo/2022/12/13/08/42/free-smart-boy-handsome-images-7652808_1280.jpg"
                        alt="Customer 2">
                    <div class="c-content">
                        <h4>Jane Smith</h4>
                        <p>Great value for the price. Would buy again. from noida club</p>
                        <div class="c-star-rating">
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="c-slide">
                    <img src="https://media.licdn.com/dms/image/v2/D5635AQH2ggyUOJLbSg/profile-framedphoto-shrink_800_800/profile-framedphoto-shrink_800_800/0/1730032881426?e=1737792000&v=beta&t=cvkKOIS26kHcvJOdUaKr1YR73Ka98ZxgfFwxTQ0Kyqw"
                        alt="Customer 3">
                    <div class="c-content">
                        <h4>Rupal Singh</h4>
                        <p>Very satisfied with my purchase. Highly recommended!</p>
                        <div class="c-star-rating">
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="c-slide">
                    <img src="https://i.pinimg.com/564x/a6/91/38/a69138a0e0de3cd51b980fe3d21a11da.jpg" alt="Customer 4">
                    <div class="c-content">
                        <h4>Michael Brown</h4>
                        <p>The quality is great, but shipping took a bit long.</p>
                        <div class="c-star-rating">
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                        </div>
                    </div>
                </div>
                <!-- Slide 5 -->
                <div class="c-slide">
                    <img src="https://i.pinimg.com/originals/1d/27/bd/1d27bdd5618fd06c26e7eab218a44711.jpg"
                        alt="Customer 5">
                    <div class="c-content">
                        <h4>Amy Adams</h4>
                        <p>Good product, but could be improved in certain areas.</p>
                        <div class="c-star-rating">
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                        </div>
                    </div>
                </div>
                <!-- Slide 6 -->
                <div class="c-slide">
                    <img src="https://i.pinimg.com/564x/25/a7/f6/25a7f6e52f7d373e7db6d63c4bdb38d1.jpg" alt="Customer 6">
                    <div class="c-content">
                        <h4>Daniel Harris</h4>
                        <p>Exactly what I was looking for. Excellent experience!</p>
                        <div class="c-star-rating">
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                        </div>
                    </div>
                </div>
                <!-- Slide 7 -->
                <div class="c-slide">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqh7HjgdrRxRFY0-ectwdBuWLJhntXGnU0Jg&s"
                        alt="Customer 7">
                    <div class="c-content">
                        <h4>Sarah Miller</h4>
                        <p>Fantastic! I’m very happy with this product. white club delhi </p>
                        <div class="c-star-rating">
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                        </div>
                    </div>
                </div>
                <!-- Slide 8 -->
                <div class="c-slide">
                    <img src="https://i.pinimg.com/736x/b2/c1/14/b2c114970d1473b26ae3e9433fd656e2.jpg" alt="Customer 8">
                    <div class="c-content">
                        <h4>Chris Wilson</h4>
                        <p>Good quality, but a little more affordable options would be great.</p>
                        <div class="c-star-rating">
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                        </div>
                    </div>
                </div>
                <!-- Slide 9 -->
                <div class="c-slide">
                    <img src="https://www.dpzone.in/wp-content/uploads/1/55861489.jpg" alt="Customer 9">
                    <div class="c-content">
                        <h4>Kelly Davis</h4>
                        <p>Not bad, but I had some issues with the product.</p>
                        <div class="c-star-rating">
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                            <span class="c-star filled">★</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ..............................footer is here................................. -->


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
    // const slider = document.querySelector('.slider');
    // const slides = document.querySelectorAll('.slide');
    // let currentIndex = 0;
    // let direction = 1; // 1 for right, -1 for left

    // function slideShow() {
    //     currentIndex += direction;

    //     if (currentIndex >= slides.length || currentIndex < 0) {
    //         direction *= -1; // Reverse direction
    //         currentIndex += direction;
    //     }

    //     slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    // }

    // setInterval(slideShow, 3000); 
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
        color: white;
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

    /* /*...................customer revirw stylels............................... */


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
        width: 90%;
        margin-left: 5%;
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
        /* transition: transform 0.5s ease-in-out; */
        animation: amit 32s linear infinite alternate;
        width: 100%;
    }

    @keyframes amit {
        0% {
            margin-left: 0%;
        }

        100% {
            margin-left: -100%;
        }

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


    /* ..............footer..................... */

    .footer {
        background-color: black;
        color: white;
        display: flex;
        border-top: 1px solid rgba(58, 138, 208, 0.57);
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

    /* .........................................*/
    .carousel {
        width: 100%;
        background-color: red;
        overflow: hidden;
        /* display: flex;
                    align-items: center;
                    position: relative;
                    /* padding: 10px;
                    justify-content: center; */
    }

    .carousel-content {
        position: relative;
        display: flex;
        gap: 22px;
    }

    .carousel-item {
        border-radius: 10%;
        width: 13%;

    }

    @keyframes slide {
        0% {
            background-color: ;
            margin-left: 20%;
        }

        100% {
            background-color: ;
            margin-left: 80%;
        }
    }


    .carousel-item:hover {
        background-color: red;

    }

    .carousel .carousel-item {
        flex: 0 0 auto;
        background-color: white;
        /* width: 80%; */
        /* gap: 40px; */
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
    }

    .card img {
        max-width: 60%;
        height: auto;
        /* display: block; */

    }

    .text-center {
        margin: 5px 0;
        font-size: 1rem;
        text-align: center;
        /* color: #000; */
        text-decoration: none;
        /* background-color: pink; */
    }

    .text-center a {
        text-decoration: none;
        background: #f9f9f9;
    }



    /*.......................................................*/
    .menu {
        font-family: Arial, sans-serif;
        /* text-align: center; */
        /* margin: 20px; */
        background-color: black;
    }

    .menu h1 {
        font-size: 36px;
        padding-top: 20px;
        margin-bottom: 20px;
        text-align: center;
        color: white;
    }

    .menu-sections {
        display: flex;
        justify-content: space-around;
        gap: 40px;
        width: 90%;
        margin-left: 5%;
        flex-wrap: wrap;
        flex-direction: row;
        padding-bottom: 26px;
    }

    .section {
        border: 1px solid #ccc;
        padding: 10px;
        width: 28%;
        background-color: #f9f9f9;
        border-radius: 5px;
    }

    .section:hover {
        /* color: orange; */
    }

    .menu-hover:hover {
        /* background-color: red; */
        transform: translateY(4%);
    }

    .section h4 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .section ul {
        list-style: none;
        padding: 0;
    }

    .section ul li {
        margin-bottom: 10px;
    }

    .product-name {
        font-weight: bold;
    }

    .price {
        color: green;
        font-weight: bold;
    }

    /* ..................facilities are available in ............. */
    .fac ul li {
        list-style-type: circle;
        list-style-position: inside;
        margin-left: 30px;

    }

    .fac:hover {
        /* background-color: red; */
        transform: skewX(-4deg);
    }

    .rule-section {
        display: block;
    }

    .rule {
        width: auto;
    }

    .hover:hover {
        transform: translateX(1%);
    }

    .area-section:hover {
        /* background-color: red; */
        transform: translate(3%);

    }

    .area-section ul li {

        line-height: 33px;

    }

    .area-section ul li span {

        float: right;

    }


    /**..................lawn syle is here  */

    .lawn1 {
        border-top-right-radius: 0px;
        border-top-left-radius: 0px;
    }

    .lawn3 {
        min-width: 16.33%;
    }

    .lawn2 {
        display: flex;
        transition: transform 0.5s ease-in-out;
        animation: amitt 2s linear infinite alternate;
        /* width: 100%; */
        /* background: red */
    }

    @keyframes amitt {
        0% {
            margin-left: -1.8%;
        }

        /* 50%{margin-left: -5%;} */

        100% {
            margin-left: 3.8%;
        }

    }

    .card img {
            width: 39%;
            border-radius: 8px;
            /* height: 95px; */
            /* border-radius: 100%; */
            border: none;
    }
    .card a{
        border: 2px dotted black;
        border-radius: 5px;
    }
    .card a:hover{
        background: black;
        color: white;
    }

</style>
<!-- .....................this is custmer review................................ -->


<script>
    //let currentSlideIndexx = 0;
    //let directionn = 1;
    //const slidess = document.querySelectorAll('.c-slide');
    //const totalSlidess = slidess.length - 2;
    //const sliderr = document.querySelector('.c-slider');


    // function moveToNextSlide() {
    //     currentSlideIndexx += directionn;

    //     if (currentSlideIndexx >= totalSlidess || currentSlideIndexx < 0) {
    //         direction *= -1;
    //         currentSlideIndexx += directionn;
    //     }

    //     const offset = -(currentSlideIndexx * 33.33);
    //     sliderr.style.transform = `translateX(${offset}%)`;
    // }


    // setInterval(moveToNextSlide, 3000);


    document.querySelectorAll('.c-star-rating').forEach(starRating => {
        starRating.addEventListener('click', function (e) {
            let stars = Array.from(starRating.children);
            let index = stars.indexOf(e.target);
            if (index !== -1) {

                stars.forEach((star, i) => {
                    if (i <= index) {
                        star.classList.add('filled');
                        star.classList.remove('empty');
                    } else {
                        star.classList.remove('filled');
                        star.classList.add('empty');
                    }
                });
                starRating.setAttribute('data-rating', index + 1);
            }
        });
    });
</script>