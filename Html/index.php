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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css" rel="stylesheet">

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
        background-color: hsl(202, 75%, 47%);
        height: 380px;
        width: 50%;
        margin-left: 25%;
        padding: 10px;
        position: absolute;
        top: 130px;
        z-index: 2;
        border-radius: 10px;
        /* overflow-x: scroll; */
        display: none;
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

    #paynow a {
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
    }

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
        <h4 id="thenoida">The Noida Clubs</h4>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <!-- <a href="service.php">Services</a> -->
        <!-- <a href="#clubs">Clubs</a>
        <a href="#clubs">Gallery</a> -->
        <a href="contact.php">Contact Us</a>
        <a href="../Html/buyticket.php">Buy Tickets</a><img src="../image/new.gif" alt="">
        <a href="status.php" id="status">Booking Status</a>
        <a href="#" id="admin">Admin</a>
        <!--..................drop down is here-->
        <div class="dropdown">
            <a href="">REGISTER / LOGIN</a>
            <div class="dropdown-content">
                <div class="sub-dropdown">
                    <a href="#">Register</a>
                    <div class="sub-dropdown-content">
                        <a href="./VenderReg.php">Vendor Register</a>
                        <a href="./CustomerReg.php">Customer Register</a>
                    </div>
                </div>
                <div class="sub-dropdown">
                    <a href="#">Login</a>
                    <div class="sub-dropdown-content">
                        <a href="./VenderLogin.php">Vendor Login</a>
                        <a href="./CustomeLogin.php">Customer Login</a>
                    </div>
                </div>
            </div>
        </div>

    </nav>

    <!-- Video Section -->
    <section>
        <video id="slider" autoplay muted loop>
            <source src="../image/video9.mp4" type="video/mp4">
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
                <li onclick="videoselector('../image/video5.mp4')">
                    <img src="https://res.cloudinary.com/electronic-beats/c_fit,q_auto,f_auto,w_606/stage/uploads/2020/02/traumabarundkino_84502241_546662359532113_5913643950639171790_n-1.jpg"
                        height="100px" width="150px">
                </li>
                <li onclick="videoselector('../image/video6.mp4')">
                    <img src="https://st.depositphotos.com/1004739/1570/i/450/depositphotos_15700515-stock-photo-stage-lights.jpg"
                        height="100px" width="150px">
                </li>
                <li onclick="videoselector('../image/video7.mp4')">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6vzdgFP0Z0k-ff_X79IIvxpSmOY8LGuTWRA&s"
                        height="100px" width="150px">
                </li>
                <li onclick="videoselector('../image/video8.mp4')">
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
    <!-- .........................Over Views Of the Clubs.......................... -->

    <div class="overviews">
        <?php include('club_overviews.php'); ?>
    </div>



    <!-- .........................Farm house overviews Of the Clubs.......................... -->

    <div class="overviews  ss">
        <?php include('farmhouse.php'); ?>
    </div>

    <script>
        if (window.location.pathname.includes('/index.php')) {
            showModalOnHomepage();
        }
    </script>

    <!-- ............................slider are here............................................ -->

    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <a href="http://localhost/amitclub/html/registration_form.php?id=5">
                    <img src="../image/slider1.jpg" alt="Slide first image">
                </a>
            </div>
            <div class="slide">
                <a href="http://localhost/amitclub/html/registration_form.php?id=6">
                    <img src="../image/slider2.jpg" alt="Image 2">
                </a>
            </div>
            <div class="slide">
                <a href="http://localhost/amitclub/html/registration_form.php?id=1">
                    <img src="../image/slider3.jpg" alt="Image 3">
                </a>
            </div>
            <div class="slide">
                <a href="http://localhost/amitclub/html/registration_form.php?id=4">
                    <img src="../image/slider4.jpg" alt="Image 4">
                </a>
            </div>
            <div class="slide">
                <a href="http://localhost/amitclub/html/registration_form.php?id=4">
                    <img src="../image/slider5.jpg" alt="Image 5">
                </a>
            </div>
        </div>
        <div class="slider-controls">
            <button id="prev"><i class="fa-solid fa-arrow-left"></i></button>
            <button id="next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>

    <!-- ...................offers that you get more discount,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, -->

    <div class="dicount">
        <h2>Plans That You Efforts</h2>
        <div class="dicount1">
            <section class="dleft">
                <h3>Prime User <span>$ 99</span></h3>
                <p>Excluding Other Items</p>
                <ul>
                    <li>Platform for Potential customers</li>
                    <li>high-quality sound</li>
                    <li>digital experience</li>
                    <li>standard content</li>
                </ul>
                <a href="buyticket.php">Buy Ticket <i class="fa-solid fa-arrow-right"></i></a>
                <div class="clip">
                    <p>Save Up to 30%</p>
                </div>
            </section>
            <section class="dright">
                <h3>Standard User <span>$ 129</span></h3>
                <p>Excluding Other Items</p>
                <ul>
                    <li>Platform for Potential customers</li>
                    <li>high-quality sound</li>
                    <li>digital experience</li>
                    <li>standard content</li>
                </ul>
                <a href="buyticket.php">Buy Ticket <i class="fa-solid fa-arrow-right"></i></a>
                <div class="clip rclip">
                    <p>Save Up to 30%</p>
                </div>

            </section>
        </div>
    </div>


    <!-- ............................event schedule............................................... -->

    <section class="schedule-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="text-white mb-4">Shows Timings</h1>

                        <div class="table-responsive">
                            <table class="schedule-table table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>

                                        <th scope="col">Wednesday</th>

                                        <th scope="col">Thursday</th>

                                        <th scope="col">Friday</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row">Day 1</th>

                                        <td class="table-background-image-wrap pop-background-image">
                                            <h3>Arjit Singh</h3>

                                            <p class="mb-2">5:00 - 7:00 PM</p>

                                            <p>Hauz Khass</p>

                                            <div class="section-overlay"></div>
                                        </td>

                                        <td style="background-color: black">
                                            <h3>Comming Soon </h3>

                                            <p class="mb-2">00:00 - 00:00 MM</p>

                                            <p>Notified Soon</p>

                                            <div class="section-overlay"></div>
                                        </td>

                                        <td class="table-background-image-wrap rock-background-image">
                                            <h3>B Praak </h3>

                                            <p class="mb-2">7:00 - 11:00 PM</p>

                                            <p>Delhi Club</p>

                                            <div class="section-overlay"></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Day 2</th>

                                        <td style="background-color: black">
                                            <h3>Comming Soon </h3>

                                            <p class="mb-2">00:00 - 00:00 MM</p>

                                            <p>Notified Soon</p>

                                            <div class="section-overlay"></div>
                                        </td>


                                        <td class="table-background-image-wrap djnight-background-image">
                                            <h3>DJ Night</h3>

                                            <p class="mb-2">6:30 - 9:30 PM</p>

                                            <p>By Rihana</p>
                                        </td>

                                        <td style="background-color: black">
                                            <h3>Comming Soon </h3>

                                            <p class="mb-2">00:00 - 00:00 MM</p>

                                            <p>Notified Soon</p>

                                            <div class="section-overlay"></div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <th scope="row">Day 3</th>

                                        <td class="table-background-image-wrap country-background-image">
                                            <h3>Sonu Nigam</h3>

                                            <p class="mb-2">4:30 - 7:30 PM</p>

                                            <p>Noidas Club</p>

                                            <div class="section-overlay"></div>
                                        </td>

                                        <td style="background-color: black">
                                            <h3>Comming Soon </h3>

                                            <p class="mb-2">00:00 - 00:00 MM</p>

                                            <p>Notified Soon</p>

                                            <div class="section-overlay"></div>
                                        </td>


                                        <td class="table-background-image-wrap free-background-image">
                                            <h3>Bhupinder Babbal</h3>

                                            <p class="mb-2">6:00 - 10:00 PM</p>

                                            <p>White Club</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </section>


    <!-- .....................customer reviews..................................................... -->
    <?php
    include("db.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $customer_name = $_POST['customer_name'];
        $review_text = $_POST['review_text'];
        $rating = $_POST['rating'];

        $image = null;
        $zero = 0;
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $image = "uploads/" . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $image);
        } elseif (isset($_POST['image_url']) && !empty($_POST['image_url'])) {
            $image = $_POST['image_url'];
        }

        $stmt = $conn->prepare("INSERT INTO customer_reviews (id,customer_name, review_text, rating, image) VALUES (?, ?, ?, ?,?)");
        $stmt->bind_param("issis", $zero, $customer_name, $review_text, $rating, $image);

        if ($stmt->execute()) {
            $response = "success";
        } else {
            $response = "error";

        }
    }

?>
    <div class="c-customer-reviews">
        <h2>Customer Reviews</h2>
        <span id="custrev">Create New Reviews</span>
        <!-- Slider Container -->
        <div class="c-slider-container">
            <div class="c-slider">
                <?php
                $zero=0;
                $sql = "SELECT * FROM customer_reviews where id=$zero";
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





    <!-- .......................footer is here............................................. -->

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




    <!-- ..............................slider......................... -->

    <script>
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const slider = document.querySelector('.slider');
        let currentIndex = 0;

        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        let autoSlideInterval;

        function updateSliderPosition() {
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }
        function goToNextSlide() {
            currentIndex = (currentIndex === totalSlides - 1) ? 0 : currentIndex + 1;
            updateSliderPosition();
            resetAutoSlide();
        }
        function goToPrevSlide() {
            currentIndex = (currentIndex === 0) ? totalSlides - 1 : currentIndex - 1;
            updateSliderPosition();
            resetAutoSlide();
        }
        function startAutoSlide() {
            autoSlideInterval = setInterval(goToNextSlide, 5000);
        }
        function resetAutoSlide() {
            clearInterval(autoSlideInterval);
            startAutoSlide();
        }
        startAutoSlide();
        prevButton.addEventListener('click', goToPrevSlide);
        nextButton.addEventListener('click', goToNextSlide);

    </script>


    <!-- .....................this is custmer review................................ -->


    <!--.........sweet alert for customer revirew-->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let response = "<?php echo $response; ?>";
            let href = "<?php echo $zero; ?>";

            if (response === "success") {
                Swal.fire({
                    title: 'Success!',
                    text: 'Customer Review Submitted successfully!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = "index.php";
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

    <!---show modol for customer review written-->
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

    <!-- check the customer revirew is less than or greater than property -->
    <script>
        window.onload = function () {
            const slider = document.querySelector('.c-slider');
            const slides = document.querySelectorAll('.c-slide');
            const noReviewsText = document.querySelector('.c-slider-container');

            if (slides.length < 1) {
                slider.remove();
                noReviewsText.textContent = "No customer reviews were found";
                noReviewsText.classList.add("c-slide_remove");
                noReviewsText.classList.add("c-slide_remove");
            } else if (slides.length < 4) {
                slider.style.animation = 'none';
            }
        }
    </script>


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