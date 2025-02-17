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

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $customer_name = $_POST['customer_name'];
            $review_text = $_POST['review_text'];
            $rating = $_POST['rating'];

            $image = null;

            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $image = "uploads/" . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $image);
            } elseif (isset($_POST['image_url']) && !empty($_POST['image_url'])) {
                $image = $_POST['image_url'];
            }

            $stmt = $conn->prepare("INSERT INTO customer_reviews (id,customer_name, review_text, rating, image) VALUES (?, ?, ?, ?,?)");
            $stmt->bind_param("issis", $club_id, $customer_name, $review_text, $rating, $image);

            if ($stmt->execute()) {
                $response = "success";
            } else {
                $response = "error";

            }
        }

        ?>
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
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css" rel="stylesheet">
        </head>

        <body>
            <nav>
                <h4>The Noida Club</h4>
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="service.php">Services</a>
                <a href="contact.php">Contact Us</a>
                <a href="../Html/buyticket.php">Buy Tickets</a><img src="../image/new.gif" alt="">
                <a href="status.php" id="status">Booking Status</a>
            </nav>
            <div class="overviews">
                <h2><span>Welcome To</span> <?php echo $row['club_name']; ?></h2>
                <div class="image-containerr">
                    <div class="fade">
                        <img src="<?php echo $row['image']; ?>" alt="Club Image" class="image">
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
                                    <a href="registration_form.php?id=<?php echo urlencode($row['id']); ?>" class="btn">Buy
                                        Tickets</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="menu">
                <h1>MENU BAR</h1>
                <div class="menu-sections">
                    <!-- Section 1 -->

                    <div class="section menu-hover">
                        <h4>Red Wine</h4>
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
                        <h4>Magic Moment</h4>
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
                    <div class="section">
                        <h4>Whiskey</h4>
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
                        <h4>RUM</h4>
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
                        <h4>Russian Standard</h4>
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
                        <h4>Absolut Vodka</h4>
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
                <h1>Hookas flavors</h1>
                <div class="menu-sections">
                    <!-- Section 1 -->

                    <div class="section  menu-hover">
                        <h4>Puff Smart</h4>
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
                        <h4>SCORIA</h4>
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
                        <h4>WEARKNOTS</h4>
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
                        <h4>Lovme</h4>
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
                        <h4>Cocosmok</h4>
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
                        <h4>Habibis Hukkaups </h4>
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
            <div class="menu rule">
                <h1>Club Rules</h1>
                <div class="menu-sections rule-section">
                    <div class="section fac rule hover">
                        <h4><span><i class="fa-solid fa-ticket"></i> </span> Cancellation/ prepayment</h4>
                        <ul>
                            <li>Cancellation and prepayment policies vary according to accommodation type. Enter your stay dates
                                and check the conditions of your selected option.</li>
                        </ul>
                    </div>

                    <div class="section fac rule hover">
                        <h4><span><i class="fas fa-ban"></i> </span>Age Policy</h4>
                        <ul>
                            <li>Must be grater than 18+ years are allow to enter this club any other children are not allowed as
                                per government policies</li>
                        </ul>

                    </div>
                    <div class="section fac rule hover">
                        <h4><span><i class="fa-solid fa-bed"></i></span> Without Ticket</h4>
                        <ul>
                            <li>Only couples are avail free entery on some days</li>
                            <li>Any person which found without ticket than get strict action against it</li>

                        </ul>

                    </div>
                    <div class="section fac rule hover">
                        <h4><span><i class="fa-solid fa-cloud-sun"></i></span> Smoking</h4>
                        <ul>
                            <li>Smoking is allowed.</li>
                        </ul>
                    </div>

                    <div class="section fac rule hover">
                        <h4><span><i class="fa-solid fa-wifi"></i></span> Internet</h4>
                        <ul>
                            <li>Internet are available in the club</li>
                            <li>club WI-FI are available for all customers</li>
                            <li>LAN are also available for PC/Laptop and mobile</li>
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
} else {
    echo "No club ID provided.";
}
?>

    <!-- .....................customer reviews..................................................... -->
    <div class="c-customer-reviews">
        <h2>Customer Reviews</h2>
        <span id="custrev">Create New Reviews</span>
        <!-- Slider Container -->
        <div class="c-slider-container">
            <div class="c-slider">
                <?php
                $sql = "SELECT * FROM customer_reviews where id=$club_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='c-slide'>";
                        echo "<img src='" . $row['image'] . "' alt='Customer'>";
                        echo "<div class='c-content'>";
                        echo "<h4>" . $row['customer_name'] . "</h4>";
                        echo "<p>" . $row['review_text'] . "</p>";
                        echo "<div class='c-star-rating'>";
                        for ($i = 0; $i < $row['rating']; $i++) {
                            echo "<span class='c-star filled'>★</span>";
                        }
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<h2>No reviews found</h2>";
                }
                ?>
            </div>
        </div>
    </div>
    <!--- customer review form is here -->
    <div id="reviewModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="customerrevForm">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="customer_name">Enter Your Name</label>
                    <input type="text" name="customer_name" placeholder="Your Name" required><br><br>

                    <label for="review_text">Enter Your Reviews</label>
                    <textarea name="review_text" placeholder="Your Review" required></textarea><br><br>

                    <label for="rating">Select Your Rating</label>
                    <input type="number" name="rating" min="1" max="5" required><br><br>

                    <label for="image_upload">Upload Your Image</label><br><br>
                    <input type="file" name="image" id="image_upload" onchange="toggleImageFields()" required><br><br>

                    <label for="image_url">OR Image URL</label><br><br>
                    <input type="text" name="image_url" id="image_url" placeholder="Your Image URL"
                        onchange="toggleImageFields()" required><br><br>

                    <button type="submit">Submit Review</button>
                </form>
            </div>
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

            <!-- check the customer revirew is less than or greater than property -->
<script>
    window.onload = function () {
        const slider = document.querySelector('.c-slider');
        const slides = document.querySelectorAll('.c-slide');
        // const noReviewsText = document.querySelector('.c-customer-reviews h2');
        const noReviewsText = document.querySelector('.c-slider-container');

        if (slides.length < 1) {
            slider.remove();
            noReviewsText.textContent = "No customer reviews were found";
            noReviewsText.style='height:50px';
            noReviewsText.style='align-item:center;height:50px;color:black;border-bottom-right-radius:10px;border-bottom-left-radius: 10px; justify-content: center;align-items: center;display:flex';
        } else if (slides.length < 4) {
            slider.style.animation = 'none'; 
        }
    }
</script>

<script>
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

<!---customer form review script----->

<script>
    var modal = document.getElementById("reviewModal");

    var btn = document.getElementById("custrev");

    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
        modal.style.display = "block";
    }

    span.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>
<style>
                .menu {
                    font-family: Arial, sans-serif;
                }

                .menu h1 {
                    font-size: 36px;
                    margin-bottom: 20px;
                }

                .menu-sections {
                    display: flex;
                    justify-content: space-around;
                    gap: 40px;
                    width: 90%;
                    margin-left: 5%;
                    flex-wrap: wrap;
                    flex-direction: row;
                }

                .section {
                    border: 1px solid #ccc;
                    padding: 10px;
                    width: 28%;
                    background-color: #f9f9f9;
                    border-radius: 5px;
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

                .menu {
                    font-family: Arial, sans-serif;
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
                    background: #f4eeee;
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
</style>
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 5;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }
    .modal-content {
        background-color: #fff;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .close {
        color: red;
        font-size: 28px;
        font-weight: bold;
        float: right;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }


    .customerrevForm input[type="text"],
    .customerrevForm input[type="number"],
    .customerrevForm textarea {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .customerrevForm label {
        color: black;
        float: left;
    }

   

    .customerrevForm button {
        background-color: #4CAF50;
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .customerrevForm button:hover {
        background-color: #45a049;
    }


   
    /*...................................................slider................................................... */

    #custrev {
        color: black;
        cursor: pointer;
        position: absolute;
        right: 10px;
        z-index: 2;
        background-color: #96a5b5;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        text-align: center;
        display: inline-block;
        font-weight: bold;
    }
    
    #custrev:hover {
        background-color: #afcbe9;
    }


    .slider-container {
        width: 100%;
        overflow: hidden;
        position: relative;
        background: black;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
    }

    .slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .slide {
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
        color: white;
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
<style>
    
    /* /*...................customer revirw stylels............................... */


    .c-customer-reviews {
        width: 100%;
        background-color: black;
        text-align: center;
        color: white;
    }

    .c-customer-reviews h2 {
        font-size: 24px;
        margin-bottom: 20px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .c-slider-container {
        position: relative;
        overflow: hidden;
        width: 90%;
        margin-left: 5%;
        background-color: white;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;

    }


    .c-slider {
        display: flex;
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
        justify-content: flex-start;
        padding-bottom: 10px;
        cursor: pointer;
    }

    .c-star-rating .c-star {
        font-size: 20px;
        margin-right: 5px;
        color: lightgray;
    }

    .c-star-rating .filled {
        color: gold;
    }


    /* ..............footer..................... */

    .footer {
        background-color: black;
        color: white;
        display: flex;
        border-top: 1px solid rgba(58, 138, 208, 0.57);
    }

    .fleft {
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
    }

    @keyframes amitt {
        0% {
            margin-left: -1.8%;
        }
        100% {
            margin-left: 3.8%;
        }

    }

    .card img {
        width: 39%;
        border-radius: 8px;
        border: none;
    }

    .card a {
        border: 2px dotted black;
        border-radius: 5px;
    }

    .card a:hover {
        background: black;
        color: white;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let response = "<?php echo $response; ?>";
        let href = "<?php echo $club_id; ?>";

        if (response === "success") {
            Swal.fire({
                title: 'Success!',
                text: 'Customer Review Submitted successfully!',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = "CustomerReviews.php?id=" + href;
            });
        } else if (response === "error") {
            Swal.fire({
                title: 'Error!',
                text: 'Customer Review not updated. Please try again.',
                icon: 'error'
            });
        }
    });

</script>

<!-- image upllaod-->
<script>
    function toggleImageFields() {
        var imageFileInput = document.getElementById("image_upload");
        var imageUrlInput = document.getElementById("image_url");

        if (imageFileInput.value) {
            imageUrlInput.disabled = true;
        } else {
            imageUrlInput.disabled = false;
        }

        if (imageUrlInput.value) {
            imageFileInput.disabled = true;
        } else {
            imageFileInput.disabled = false;
        }
    }
</script>