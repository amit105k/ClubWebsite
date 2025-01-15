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
            <style>
               
            </style>

            <div class="carousel">
                <div class="carousel-content">
                    <div class="carousel-item">
                        <div class="card card-body text-center">
                            <a href="lawnticketbook.php?club_name=lawn&price=5000&extraperson=150">
                                <img class="img-fluid" src="https://evafarms.in/img/carousel-head/FarmHouse.png" loading="lazy">
                                <h6 class="text-center">Lawn </h6>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body text-center">
                            <a href="lawnticketbook.php?club_name=Family Suite&price=5000&extraperson=250">
                                <img class="img-fluid" src="https://evafarms.in/img/carousel-head/Lawn.png" loading="lazy">
                                <h6 class="text-center">Family Suite </h6>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body text-center">
                            <a href="lawnticketbook.php?club_name=Engagement&price=50000&extraperson=600">
                                <img class="img-fluid" src="https://evafarms.in/img/carousel-head/Engagement.png"
                                    loading="lazy">
                                <h6 class="text-center">Engagement </h6>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body text-center">
                            <a href="lawnticketbook.php?club_name=Pool Party&price=2500&extraperson=300">
                                <img class="img-fluid" src="https://evafarms.in/img/carousel-head/PoolParty.png" loading="lazy">
                                <h6 class="text-center">Pool Party </h6>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body text-center">
                            <a href="lawnticketbook.php?club_name=BYOB&price=5000&extraperson=300">
                                <img class="img-fluid" src="https://evafarms.in/img/carousel-head/BYOB.png" loading="lazy">
                                <h6 class="text-center">BYOB </h6>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body">
                            <a href="lawnticketbook.php?club_name=Corporate&price=35000&extraperson=300">
                                <img class="img-fluid" src="https://evafarms.in/img/carousel-head/Corporate.png" loading="lazy">
                                <h6 class="text-center">Corporate </h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <style>
               
            </style>
            <div class="menu">
                <h1>MENU BAR</h1>
                <div class="menu-sections">
                    <!-- Section 1 -->

                    <div class="section  menu-hover">
                        <h4>SPECIAL</h4>
                        <ul>
                            <li>
                                <span class="product-name">Dish Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">50</span>
                            </li>
                            <li>
                                <span class="product-name">Dish Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">100</span>
                            </li>
                            <li>
                                <span class="product-name">Dish Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">75</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Section 2 -->
                    <div class="section menu-hover">
                        <h4>BEVERAGES</h4>
                        <ul>
                            <li>
                                <span class="product-name">Drink Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">150</span>
                            </li>
                            <li>
                                <span class="product-name">Drink Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">200</span>
                            </li>
                            <li>
                                <span class="product-name">Drink Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">120</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Section 3 -->
                    <div class="section menu-hover">
                        <h4>DESSERTS</h4>
                        <ul>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">80</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">120</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">90</span>
                            </li>
                        </ul>
                    </div>
                    <div class="section menu-hover">
                        <h4>DESSERTS</h4>
                        <ul>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">80</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">120</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">90</span>
                            </li>
                        </ul>
                    </div>
                    <div class="section menu-hover">
                        <h4>DESSERTS</h4>
                        <ul>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">80</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">120</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">90</span>
                            </li>
                        </ul>
                    </div>
                    <div class="section menu-hover">
                        <h4>DESSERTS</h4>
                        <ul>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">80</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">120</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">90</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="menu">
                <h1>Selection of HUKKA</h1>
                <div class="menu-sections">
                    <!-- Section 1 -->

                    <div class="section menu-hover">
                        <h4>SPECIAL</h4>
                        <ul>
                            <li>
                                <span class="product-name">Dish Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">50</span>
                            </li>
                            <li>
                                <span class="product-name">Dish Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">100</span>
                            </li>
                            <li>
                                <span class="product-name">Dish Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">75</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Section 2 -->
                    <div class="section menu-hover">
                        <h4>BEVERAGES</h4>
                        <ul>
                            <li>
                                <span class="product-name">Drink Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">150</span>
                            </li>
                            <li>
                                <span class="product-name">Drink Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">200</span>
                            </li>
                            <li>
                                <span class="product-name">Drink Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">120</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Section 3 -->
                    <div class="section menu-hover">
                        <h4>DESSERTS</h4>
                        <ul>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">80</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">120</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">90</span>
                            </li>
                        </ul>
                    </div>
                    <div class="section menu-hover">
                        <h4>DESSERTS</h4>
                        <ul>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">80</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">120</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">90</span>
                            </li>
                        </ul>
                    </div>
                    <div class="section menu-hover">
                        <h4>DESSERTS</h4>
                        <ul>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">80</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">120</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">90</span>
                            </li>
                        </ul>
                    </div>
                    <div class="section menu-hover">
                        <h4>DESSERTS</h4>
                        <ul>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">80</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">120</span>
                            </li>
                            <li>
                                <span class="product-name">Dessert Name</span> -
                                <span class="size">Half</span> /
                                <span class="size">Full</span> -
                                <span class="price">90</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
           
            <!-- <div class="seats">
                this div contain total seats available in the clubs
            </div>
            <hr>
            <div class="music">
                this div contain music whcich has been in club
            </div> -->
            <!-- <hr> -->
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

            <!-- ............................................................... -->
            <div class="menu rule">
                <h1>Rules of FarmHouse</h1>
                <div class="menu-sections rule-section">
                    <div class="section  fac rule hover">
                        <h4><span><i class="fa-solid fa-bath"></i> </span>Check-in</h4>
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
                            <li>Smoking is not allowed.</li>
                        </ul>
                    </div>

                </div>
            </div>

          
            <!-- ............................................... -->

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



            <!-- ............................................... -->

            
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
                    background-color: black;
                    overflow: hidden;
                    display: flex;
                    align-items: center;
                    position: relative;
                    /* padding: 10px; */
                    justify-content: center;
                }

                .carousel-content {
                    display: flex;
                    gap: 73px;
                    width: 80%;
                    overflow: hidden;
                    /* background-color: yellow; */
                }

                .carousel-item {
                    animation: slide 5s linear alternate infinite;
                    border-radius: 10%;

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
                    color: #000;
                    text-decoration: none;
                    /* background-color: pink; */
                }

                .text-center a {
                    text-decoration: none;
                }

                @keyframes slide {
                    0% {
                        transform: translateX(100%);
                    }

                    100% {
                        transform: translateX(-100%);
                    }
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
                .section:hover{
                    /* color: orange; */
                }
                .menu-hover:hover{
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
                .fac:hover{
                    /* background-color: red; */
                    transform: skewX(-4deg);
                }

                .rule-section {
                    display: block;
                }

                .rule {
                    width: auto;
                }
                .hover:hover{
                    transform: translateX(1%);
                }

                .area-section:hover{
                   /* background-color: red; */
                   transform:translate(3%);

                }

                .area-section ul li {
                  
                    line-height: 33px;

                }
                .area-section ul li span {
                  
                    float: right;

                }

</style>