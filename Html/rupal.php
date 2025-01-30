<?php
include('../smtp/PHPMailerAutoload.php');


if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['message'])) {

    $fname = $_POST['name'];
    $email = $_POST['phone'];
    $mobile = $_POST['email'];
    $Message = $_POST['message'];

    $html = "
            <table>
                <tr><td>Name :</td><td>$fname</td></tr>
                <tr><td>Email :</td><td>$email</td></tr>
                <tr><td>Mobile :</td><td>$mobile</td></tr>
                <tr><td>Message :</td><td>$Message</td></tr>
              
            </table>";


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true;
    $mail->Username = "rupalpss51@gmail.com";
    $mail->Password = "houu svmg tlpy hyqx";
    $mail->SetFrom("rupalpss51@gmail.com");
    $mail->addAddress("rupalpss51@gmail.com");
    $mail->IsHTML(true);
    $mail->Subject = "New Enquiry";
    $mail->Body = $html;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        )
    );

    if ($mail->send()) {
        echo "Your Query is Successful Submitted";
    } else {
        echo "Something Went Wrong";
    }
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
   jQuery(document).ready(function () {
    jQuery('#form').on('submit', function (e) {
        e.preventDefault();  

  
        jQuery('#msg').html('');
        jQuery('#submit').html('Please wait...').attr('disabled', true);

        jQuery.ajax({
            url: 'valenova-park.php', 
            type: 'POST',
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
            },
            error: function (xhr, status, error) {
                jQuery('#msg').html("Something went wrong.");
                jQuery('#submit').html('Send Message').attr('disabled', false);
            }
        });
    });
});

</script>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Hawelia Builders | Valenova Park</title>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <META name="keywords"
        content=" Valencia Square, valencia homes, buy real estate in greater noida, housing construction company in greater noida, residential homes for sale in greater noida, buy houses in greater noida, best real estate developer in ghaziabad, real estate investment in ghaziabad, best real estate in ghaziabad,, buy flats in greater noida, houses for sale in greater noida, luxury real estate in greater noida, premium office space in ghaziabad, shopping malls in ghaziabad, mall space for sale in ghaziabad, township builders in ghaziabad, commercial space in ghaziabad, township in ghaziabad, real estate developers in ghaziabad, residential real estate developers in haziabad, commercial real estate developers in ghaziabad, hawelia group, hawelia valenova park, hawelia group noida, hawelia valencia homes, retail real estate developers in ghaziabad best real estate in greater noida, affordable homes in greater noida, premium homes in greater noida, vacation homes in greater noida, apartments in greater noida, residential apartments in greater noida, high rise apartment in greater noida, flats in greater noida" />

    <meta name="description"
        content="Valenova Park is the Project of Hawelia Group. Our residential townships have all the modern and essential facilities, which includes commercial and Residential properties in a modern city infrastructure " />



    <META name="allow-search" content="yes">
    <META name="revisit-after" content="daily">
    <META name="distribution" content="global">
    <META name="expires" content="never">
    <META name="language" content="english">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="inner-style.css">



    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <style type="text/css">
        #fb-back {
            display: none;
            background: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 99999;
        }

        #fb-exit {
            width: 100%;
            height: 100%;
        }

        .fb-box-inner {
            width: 300px;
            position: relative;
            display: block;
            padding: 20px 0px 0px;
            margin: 0 auto;
            text-align: center;
        }

        #fb-close {
            cursor: pointer;
            position: absolute;
            top: 5px;
            right: 5px;
            font-size: 18px;
            font-weight: 700;
            color: #000;
            z-index: 99999;
            display: inline-block;
            line-height: 18px;
            height: 18px;
            width: 18px;
        }

        #fb-close:hover {
            color: #06c;
        }

        #fb-box {
            min-width: 340px;
            min-height: 360px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -220px 0 0 -170px;
            -webkit-box-shadow: 0px 0px 16px #000;
            -moz-box-shadow: 0px 0px 16px #000;
            box-shadow: 0px 0px 16px #000;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
            background: #fff;
            border-bottom: 40px solid #f0f0f0;
        }

        .fb-box-inner h3 {
            line-height: 1;
            margin: 0 auto;
            text-transform: none;
            letter-spacing: none;
            font-size: 23px !important;
            color: #06c !important;
        }

        .fb-box-inner p {
            line-height: 1;
            margin: 0 auto 20px;
            text-transform: none;
            letter-spacing: none;
            font-size: 13px !important;
            color: #333 !important;
            text-align: center !important;
            padding-right: 25px !important;
        }

        a.fb-link {
            position: relative;
            margin: 0 auto;
            display: block;
            text-align: center;
            color: #333;
            bottom: -30px;
        }

        #fb-box h3,
        #fb-box p,
        a.fb-link {
            max-width: 290px;
            padding: 0;
        }

        .leftPanel {
            /* background-color: red !important; */
            width: 20%;
        }

        #textcon {
            /* background-color: pink; */
            width: 50%;
        }

        .comonright {
            width: 20%;
        }

        .wrapperline {
            /* background-color: black; */
            display: flex;
            max-width: 90%;
            gap: 20px;

        }

        #wrapper {
            /* background-color: black; */
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .leftPanel li {
            list-style: none;
            font-size: 13px;
            line-height: 10px;
        }
    </style>
</head>

<body>
        <div class="navigation clearfix">
            <div class="container">
                <div class="row">

                    <div class="logo"><a href="index.html"><img src="images/logo.png" /></a></div>

                    <nav>

                        <div class="main-nav">

                            <ul class="main-navigation">

                                <li><a href="index.html">Home</a></li>

                                <li><a href="about-us.html">About The Group</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html#introAbout">Overview</a></li>
                                        <li><a href="about-us.html#pillarsAbout">Mission & Vision </a></li>
                                        <li><a href="about-us.html#management">Management Team</a></li>
                                        <li><a href="about-us.html#group">Our Value</a></li>
                                        <li><a href="about-us.html#logo">Our Logo</a></li>
                                    </ul>

                                </li>

                                <li class="active"><a href="#">Projects</a>

                                    <ul class="sub-menu">
                                        <li><a href="residential-projects.html">Residential</a>
                                            <ul class="sub-menu">
                                                <li><a href="valenova-park.html">Hawelia Valenova Park</a></li>
                                                <li><a href="valencia-homes.html">Hawelia Valencia Homes</a></li>
                                            </ul>

                                        </li>
                                        <li><a href="commercial-projects.html">Commercial</a>
                                            <ul class="sub-menu">
                                                <li><a href="valenova-park-street.html">Valenova Park Street</a></li>
                                                <li><a href="valencia-square.html">Valencia Square</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="completed-projects.html">Completed</a></li>

                                    </ul>

                                </li>
                                <li><a href="#">Media Room</a>
                                    <ul class="sub-menu">
                                        <li><a href="press-update.html">Press Update</a></li>
                                        <li><a href="events.html">Events</a></li>
                                    </ul>
                                </li>

                                <li><a href="careers.html">Careers</a></li>
                                <li><a href="#">FAQ</a>
                                    <ul class="sub-menu">
                                        <li><a href="nri-faq.html">NRI FAQ</a></li>
                                        <li><a href="general-faq.html">General FAQ</a></li>

                                    </ul>
                                </li>
                                <li><a href="http://haweliahumanity.org/">Group's CSR</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                            </ul>

                        </div>

                    </nav>

                </div>
            </div>
        </div>






    <section>
        <div class="bannercontainer">
            <div style="width:100%;   text-align:center">
                <img src="images/valenova-ban.png" />

            </div>
        </div>
    </section>
    <section id="introAbout" style="margin-top:5px; ">

    </section>

    <div id="wrapper">
        <div class="wrapperline">
            <div class="leftPanel">
                <h1>Project Details</h1>
                <div class="menusublinks">Menu</div>
                <div class="clear"></div>
                <ul>
                    <li><a href="valenova-park.html"><span>Overview</span></a></li>
                    <li><a href="valenova-park-highlights.html">Highlights</a></li>
                    <li><a href="valenova-park-floor-plans.html">Floor Plans </a></li>
                    <li><a href="valenova-park-site-layout.html">Site Layout</a></li>
                    <li><a href="valenova-park-location-map.html">Location Map </a></li>
                    <li><a href="valenova-park-specifications.html">Specifications</a></li>
                    <li><a href="valenova-park-price-payment.html">Price &amp; Payment</a></li>
                    <li><a href="valenova-park-constructions.html">Actual Photograph</a></li>
                    <li><a href="#" style="color:#CC0000">Downloads</a></li>
                    <ul class="ullk">
                        <li><a href="images/residential/valenova-park/hawelia-valenova-park-brochure.pdf"><img
                                    src="images/side-h7.png" alt="bullet" border="1" /> Project Brochure</a></li>
                        <li><a href="#"><img src="images/side-h7.png" alt="bullet" /> Booking Request Form
                            </a></li>

                        <li><a href="#"><img src="images/side-h7.png" alt="bullet" border="1" /> Feedback Form</a></li>
                    </ul>
                </ul>
                <div class="clear"></div>
            </div>
            <div id="textcon">
                <h1><img src="images/valenova-park-inner-logo.png"></h1>
                <div class="clear"></div>
                <h2>Homes laced with absolute luxury</h2>

                <div class="clear"></div>



                <p>
                    Elegant architecture, superior construction, and meticulously planned layouts are just a few
                    features that make Hawelia Valenova Park stand out. These 2/3 BHK apartments are a perfect blend of
                    aesthetic appeal and sophistication, offering a premium and comfortable lifestyle. Equipped with
                    modern amenities, abundant natural light, and lush greenery, these homes are designed to impress
                    even the most discerning buyers.

                    <br>
                    <br>
                    Adding to its charm is the prime location of Hawelia Valenova Park. Ideally located in the heart of
                    Greater Noida West (commonly known as Noida Extension), the project is surrounded by greenery and an
                    array of conveniences like shopping complexes, malls, hotels, hospitals, schools, metro stations,
                    fuel stations, and more. Greater Noida West provides seamless connectivity to Delhi and the NCR,
                    making it a highly desirable choice for those seeking a contemporary lifestyle in a fully developed
                    socio-economic environment.
                </p>

                <p><img src="images/brand.jpg"></p>
                <br>
                <h2 align="center">Actual Photograph</h2>
                <div class="coverage"><img src="images/13.jpg" width="300" height="225" border="1"
                        class="dg-picture-zoom"></div>

                <div class="coverage"><img src="images/23.jpg" width="300" height="225" border="1"
                        class="dg-picture-zoom"></div>



                <div class="coverage"><img src="images/25.jpg" width="300" height="225" border="1"
                        class="dg-picture-zoom"></div>
                <div class="coverage"><img src="images/6.jpg" width="300" height="225" border="1"
                        class="dg-picture-zoom"></div>

                <div class="coverage"><img src="images/8.jpg" width="300" height="225" border="1"
                        class="dg-picture-zoom"></div>



                <div class="coverage"><img src="images/3.jpg" width="300" height="225" border="1"
                        class="dg-picture-zoom"></div>

                <br>
                <div class="blog-read-more" align="center" style="margin:22%">
                    <h2 align="center"><a href="valenova-park-constructions.html" style="color:#C5161D; font-size:16px">
                            &nbsp;Click to View More Actual Photograph&nbsp; </a>
                    </h2>

                </div>



                <br>


                <p><br>
                    <br>
                    <img src="images/approved.png">
                </p>











            </div>
            <div class="comonright">
                <div class="right-form">
                    <div>
                        <!-- <form action="" method='post' name="frmhaweliagroup" class="box" id="form">
                            <h2 style="font-size:21px;">Enquiry Form:</h2>
                            <p>
                                Name*<br />
                                <input name="name" style="outline: #000; border: 1px solid black; width: 150%;"
                                    id="sname" size="40" type="text" class="crinp">
                            </p>
                            <div class="clear"></div>
                            <p>
                                Contact No.*<br /> <input style="outline: #000; border: 1px solid black; width: 150%;"
                                    name="phone" id="smobile" size="40" type="text" class="crinp">
                            </p>

                            <div class="clear"></div>
                            <p>
                                Email ID*<br /> <input style="outline: #000; border: 1px solid black;  width: 150%;"
                                    name="email" id="semail" size="40" type="text" class="crinp">
                            </p>
                            <div class="clear"></div>
                            <p>
                                Comments*<br />
                                <textarea rows="5" name="message" id="scomment" cols="45" class="crinp"></textarea>
                            </p>
                            <div class="clear"></div>
                            <div>    <button type="submit" id="submit">Send Message</button>
                            </div>
                            <div><input style="background-color: red; outline: #000; width: 70%;" class="apply-btn"
                                    id="sub" type="submit" value="Submit" name="submit"></div> 

                        </form> -->

                        <form action="rupalconnect.php" method="POST" id="form">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter your name" required style="outline: #000; border: 1px solid black; width: 150%;"
                id="sname" size="40" type="text" class="crinp">

                <label for="phone">Your Phone</label>
                <input type="text" id="phone" name="phone" required placeholder="Enter your Phone" minlength="10"
                    maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                    title="Please enter a valid 10-digit phone number" style="outline: #000; border: 1px solid black; width: 150%;" size="40" type="text" class="crinp">


                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email" required style="outline: #000; border: 1px solid black;  width: 150%;">

                <label for="message">Your Message</label>
                <textarea id="message" name="message" placeholder="Write your message here max 150 word" rows="5"
                    maxlength="150" cols="45" class="crinp"></textarea>

                <!-- <span id="msg">hh</span> -->
                <button name="submit" type="submit" required value="Send" id="submit">Submit</button>

            </form>
                    </div>
                </div>


            </div>
            <div class="clear"></div>
        </div>
    </div>


    <div class="followCopy">
        <div id="wrapper">
            <div class="followus">


            </div>
            <div style="text-align: center;" class="copy">
                Copyright 2021 <strong>All Rights Reserved with Hawelia Group</strong>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="to-top">
        <a href="#">
            <img src="images/scrollUp-arrow.png" alt="">
        </a>
    </div>

    <script type="text/javascript" src="libs/jquery/1.10.2/jquery.min.js"> </script>
    <script type="text/javascript" src="libs/jqueryui/1.10.3/jquery-ui.min.js"> </script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/jquery.mapmarker.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>



    <script src="js/jquery-1.11.0.min.js"></script>


    <link rel="stylesheet" href="js/treeview/jquery.treeview.css" />
    <script src="js/treeview/jquery.treeview.js" type="text/javascript"></script>



    <script type="text/javascript" src="js/banner/jquery.ad-gallery.js"></script>


    <link rel="stylesheet" type="text/css" href="js/banner/jquery.ad-gallery-inner.css">


    <script type="text/javascript">
        $(function () {
            var galleries = $('.ad-gallery').adGallery();
        });
    </script>




    <script>


        outerwidth = 965;


        function resizeImage() {
            screenWidth = $(window).width();
            screenHeight = $(window).height();

            screenWidthdiv1 = $(".ourProjects").width();
            screenWidthdiv2 = $(".corporateav").width();

            screenWidthdiv1tot = screenWidthdiv1 + screenWidthdiv2;



            if (screenWidth > 1180) {
                $("#wrapperFoot").css('width', 1180);

            } else {
                $("#wrapperFoot").css('width', screenWidth);

            }



            if (screenWidth < 478) {
                $('.ad-image-wrapper').css({ 'margin-left': (screenWidth - 478) / 2 });
            } else {
                $('.ad-image-wrapper').css({ 'margin-left': 0 })
            }


            imageWidth = 2000;
            imageHeight = 920;
            navWidth = jQuery(window).width();
            navHeight = jQuery(window).height() - 75;
            navRatio = navWidth / navHeight;
            imageRatio = imageWidth / imageHeight;
            if (navRatio > imageRatio) {
                newHeight = (navWidth / imageWidth) * imageHeight;
                newWidth = navWidth;
            } else {
                newHeight = navHeight;
                newWidth = (navHeight / imageHeight) * imageWidth;
            }
            newTop = 0 - ((newHeight - navHeight) / 2);

            newLeft = navWidth - newWidth;

            if (screenWidth < outerwidth) {
                $('.ad-image-wrapper').css({ 'height': screenWidth / 2 })
                $('.bannerContainer ').css({ 'position': 'static', 'height': 'auto', 'width': 'auto' });
                jQuery('.bannerContainer .ad-image img').css({ 'height': 'auto', 'width': '100%', 'marginTop': 0, 'marginLeft': 0 });
            } else {
                $('.bannerContainer ').css({ 'width': '100%', 'height': screenHeight })
                $('.ad-image-wrapper').css({ 'width': '100%', 'height': screenHeight })
                jQuery('.bannerContainer').css({ 'position': 'absolute', 'height': navHeight, 'width': navWidth, 'overflow': 'hidden' });
                jQuery('.bannerContainer .ad-image img').css({ height: newHeight, width: newWidth, marginTop: newTop, marginLeft: newLeft });
            }


        }

        jQuery(document).ready(function ($) {


            $('.btnmenu').click(function () {
                $('#mobilemenu, .mobilemenuBG').fadeIn(500);
            });

            $('.mobilemenuclose').click(function () {
                $('#mobilemenu, .mobilemenuBG').fadeOut(500);
            });

            $('.menuwrapper li').mouseover(function () {

                var left = $(this).position().left + $(this).width() - 160;
                $('#marker').stop().animate({ marginLeft: left }, 300);
            });
            $('.menuwrapper li').mouseleave(function () {
                $('#marker').stop().animate({ marginLeft: -43 }, 300);
            });

            function showMenu(prmBut, prmMenu) {
                $(prmBut).hover(function () {
                    $(prmMenu).stop(true).delay(200).fadeIn(500);
                }, function () {
                    $(prmMenu).stop(true).delay(100).fadeOut();
                });
                $(prmMenu).hover(function () {
                    $(this).stop(true).show();
                }, function () {
                    $(this).hide();
                });
            }
            showMenu(".but1", "#memu1");
            showMenu(".but2", "#memu2");
            showMenu(".but4", "#memu4");


            $(".menusublinks").click(function () {
                $(".leftPanel ul").stop(true, true).slideToggle();
                $(".ullk").stop(true, true).slideToggle();
            });


            $(".slideverticalsbtn").click(function () {
                $(".slideverticals").stop(true, true).slideToggle();
            });





            $(window).load(function (e) {
                resizeImage();
            });
            $(window).resize(function (e) {
                resizeImage();
            });
            resizeImage();

        });

    </script>


</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>


    jQuery('#form').on('submit', function (e) {
        console.log("click");
        jQuery('#msg').html('');
        jQuery('#submit').html('Please wait');
        jQuery('#submit').attr('disabled', true);
        jQuery.ajax({
            url: 'rupalconnect.php',
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



<!DOCTYPE html>
<html lang="en">

<head>

    <title>Hawelia Builders | Valenova Park</title>
    <script src="jquery-3.7.1.min.js"></script>

    <META name="keywords"
        content=" Valencia Square, valencia homes, buy real estate in greater noida, housing construction company in greater noida, residential homes for sale in greater noida, buy houses in greater noida, best real estate developer in ghaziabad, real estate investment in ghaziabad, best real estate in ghaziabad,, buy flats in greater noida, houses for sale in greater noida, luxury real estate in greater noida, premium office space in ghaziabad, shopping malls in ghaziabad, mall space for sale in ghaziabad, township builders in ghaziabad, commercial space in ghaziabad, township in ghaziabad, real estate developers in ghaziabad, residential real estate developers in haziabad, commercial real estate developers in ghaziabad, hawelia group, hawelia valenova park, hawelia group noida, hawelia valencia homes, retail real estate developers in ghaziabad best real estate in greater noida, affordable homes in greater noida, premium homes in greater noida, vacation homes in greater noida, apartments in greater noida, residential apartments in greater noida, high rise apartment in greater noida, flats in greater noida" />

    <meta name="description"
        content="Valenova Park is the Project of Hawelia Group. Our residential townships have all the modern and essential facilities, which includes commercial and Residential properties in a modern city infrastructure " />



    <META name="allow-search" content="yes">
    <META name="revisit-after" content="daily">
    <META name="distribution" content="global">
    <META name="expires" content="never">
    <META name="language" content="english">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="inner-style.css">



    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <style type="text/css">
        #fb-back {
            display: none;
            background: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 99999;
        }

        #fb-exit {
            width: 100%;
            height: 100%;
        }

        .fb-box-inner {
            width: 300px;
            position: relative;
            display: block;
            padding: 20px 0px 0px;
            margin: 0 auto;
            text-align: center;
        }

        #fb-close {
            cursor: pointer;
            position: absolute;
            top: 5px;
            right: 5px;
            font-size: 18px;
            font-weight: 700;
            color: #000;
            z-index: 99999;
            display: inline-block;
            line-height: 18px;
            height: 18px;
            width: 18px;
        }

        #fb-close:hover {
            color: #06c;
        }

        #fb-box {
            min-width: 340px;
            min-height: 360px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -220px 0 0 -170px;
            -webkit-box-shadow: 0px 0px 16px #000;
            -moz-box-shadow: 0px 0px 16px #000;
            box-shadow: 0px 0px 16px #000;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
            background: #fff;
            border-bottom: 40px solid #f0f0f0;
        }

        .fb-box-inner h3 {
            line-height: 1;
            margin: 0 auto;
            text-transform: none;
            letter-spacing: none;
            font-size: 23px !important;
            color: #06c !important;
        }

        .fb-box-inner p {
            line-height: 1;
            margin: 0 auto 20px;
            text-transform: none;
            letter-spacing: none;
            font-size: 13px !important;
            color: #333 !important;
            text-align: center !important;
            padding-right: 25px !important;
        }

        a.fb-link {
            position: relative;
            margin: 0 auto;
            display: block;
            text-align: center;
            color: #333;
            bottom: -30px;
        }

        #fb-box h3,
        #fb-box p,
        a.fb-link {
            max-width: 290px;
            padding: 0;
        }

        .leftPanel {
            /* background-color: red !important; */
            width: 20%;
        }

        #textcon {
            /* background-color: pink; */
            width: 50%;
        }

        .comonright {
            width: 20%;
        }

        .wrapperline {
            /* background-color: black; */
            display: flex;
            max-width: 90%;
            gap: 20px;

        }

        #wrapper {
            /* background-color: black; */
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .leftPanel li {
            list-style: none;
            font-size: 13px;
            line-height: 10px;
        }
    </style>
</head>

<body>

    <header>

        <div class="navigation clearfix">
            <div class="container">
                <div class="row">

                    <div class="logo"><a href="index.html"><img src="images/logo.png" /></a></div>

                    <nav>

                        <div class="main-nav">

                            <ul class="main-navigation">

                                <li><a href="index.html">Home</a></li>

                                <li><a href="about-us.html">About The Group</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html#introAbout">Overview</a></li>
                                        <li><a href="about-us.html#pillarsAbout">Mission & Vision </a></li>
                                        <li><a href="about-us.html#management">Management Team</a></li>
                                        <li><a href="about-us.html#group">Our Value</a></li>
                                        <li><a href="about-us.html#logo">Our Logo</a></li>
                                    </ul>

                                </li>

                                <li class="active"><a href="#">Projects</a>

                                    <ul class="sub-menu">
                                        <li><a href="residential-projects.html">Residential</a>
                                            <ul class="sub-menu">
                                                <li><a href="valenova-park.html">Hawelia Valenova Park</a></li>
                                                <li><a href="valencia-homes.html">Hawelia Valencia Homes</a></li>
                                            </ul>

                                        </li>
                                        <li><a href="commercial-projects.html">Commercial</a>
                                            <ul class="sub-menu">
                                                <li><a href="valenova-park-street.html">Valenova Park Street</a></li>
                                                <li><a href="valencia-square.html">Valencia Square</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="completed-projects.html">Completed</a></li>

                                    </ul>

                                </li>
                                <li><a href="#">Media Room</a>
                                    <ul class="sub-menu">
                                        <li><a href="press-update.html">Press Update</a></li>
                                        <li><a href="events.html">Events</a></li>
                                    </ul>
                                </li>

                                <li><a href="careers.html">Careers</a></li>
                                <li><a href="#">FAQ</a>
                                    <ul class="sub-menu">
                                        <li><a href="nri-faq.html">NRI FAQ</a></li>
                                        <li><a href="general-faq.html">General FAQ</a></li>

                                    </ul>
                                </li>
                                <li><a href="http://haweliahumanity.org/">Group's CSR</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                            </ul>

                        </div>

                    </nav>

                </div>
            </div>
        </div>

    </header>




    <section>
        <div class="bannercontainer">
            <div style="width:100%;   text-align:center">
                <img src="images/valenova-ban.png" />

            </div>
        </div>
    </section>
    <section id="introAbout" style="margin-top:5px; ">

    </section>

    <div id="wrapper">
        <div class="wrapperline">
            <div class="leftPanel">
                <h1>Project Details</h1>
                <div class="menusublinks">Menu</div>
                <div class="clear"></div>
                <ul>
                    <li><a href="valenova-park.html"><span>Overview</span></a></li>
                    <li><a href="valenova-park-highlights.html">Highlights</a></li>
                    <li><a href="valenova-park-floor-plans.html">Floor Plans </a></li>
                    <li><a href="valenova-park-site-layout.html">Site Layout</a></li>
                    <li><a href="valenova-park-location-map.html">Location Map </a></li>
                    <li><a href="valenova-park-specifications.html">Specifications</a></li>
                    <li><a href="valenova-park-price-payment.html">Price &amp; Payment</a></li>
                    <li><a href="valenova-park-constructions.html">Actual Photograph</a></li>
                    <li><a href="#" style="color:#CC0000">Downloads</a></li>
                    <ul class="ullk">
                        <li><a href="images/residential/valenova-park/hawelia-valenova-park-brochure.pdf"><img
                                    src="images/side-h7.png" alt="bullet" border="1" /> Project Brochure</a></li>
                        <li><a href="#"><img src="images/side-h7.png" alt="bullet" /> Booking Request Form
                            </a></li>

                        <li><a href="#"><img src="images/side-h7.png" alt="bullet" border="1" /> Feedback Form</a></li>
                    </ul>
                </ul>
                <div class="clear"></div>
            </div>
            <div id="textcon">
                <h1><img src="images/valenova-park-inner-logo.png"></h1>
                <div class="clear"></div>
                <h2>Homes laced with absolute luxury</h2>

                <div class="clear"></div>



                <p>
                    Elegant architecture, superior construction, and meticulously planned layouts are just a few
                    features that make Hawelia Valenova Park stand out. These 2/3 BHK apartments are a perfect blend of
                    aesthetic appeal and sophistication, offering a premium and comfortable lifestyle. Equipped with
                    modern amenities, abundant natural light, and lush greenery, these homes are designed to impress
                    even the most discerning buyers.

                    <br>
                    <br>
                    Adding to its charm is the prime location of Hawelia Valenova Park. Ideally located in the heart of
                    Greater Noida West (commonly known as Noida Extension), the project is surrounded by greenery and an
                    array of conveniences like shopping complexes, malls, hotels, hospitals, schools, metro stations,
                    fuel stations, and more. Greater Noida West provides seamless connectivity to Delhi and the NCR,
                    making it a highly desirable choice for those seeking a contemporary lifestyle in a fully developed
                    socio-economic environment.
                </p>

                <p><img src="images/brand.jpg"></p>
                <br>
                <h2 align="center">Actual Photograph</h2>
                <div class="coverage"><img src="images/13.jpg" width="300" height="225" border="1"
                        class="dg-picture-zoom"></div>

                <div class="coverage"><img src="images/23.jpg" width="300" height="225" border="1"
                        class="dg-picture-zoom"></div>



                <div class="coverage"><img src="images/25.jpg" width="300" height="225" border="1"
                        class="dg-picture-zoom"></div>
                <div class="coverage"><img src="images/6.jpg" width="300" height="225" border="1"
                        class="dg-picture-zoom"></div>

                <div class="coverage"><img src="images/8.jpg" width="300" height="225" border="1"
                        class="dg-picture-zoom"></div>



                <div class="coverage"><img src="images/3.jpg" width="300" height="225" border="1"
                        class="dg-picture-zoom"></div>

                <br>
                <div class="blog-read-more" align="center" style="margin:22%">
                    <h2 align="center"><a href="valenova-park-constructions.html" style="color:#C5161D; font-size:16px">
                            &nbsp;Click to View More Actual Photograph&nbsp; </a>
                    </h2>

                </div>



                <br>


                <p><br>
                    <br>
                    <img src="images/approved.png">
                </p>











            </div>
            <div class="comonright">
                <div class="right-form">
                    <div>
                        <form action="" method='post' name="frmhaweliagroup" class="box" id="form">
                            <h2 style="font-size:21px;">Enquiry Form:</h2>
                            <p>
                                Name*<br />
                                <input name="name" style="outline: #000; border: 1px solid black; width: 150%;"
                                    id="sname" size="40" type="text" class="crinp">
                            </p>
                            <div class="clear"></div>
                            <p>
                                Contact No.*<br /> <input style="outline: #000; border: 1px solid black; width: 150%;"
                                    name="phone" id="smobile" size="40" type="text" class="crinp">
                            </p>

                            <div class="clear"></div>
                            <p>
                                Email ID*<br /> <input style="outline: #000; border: 1px solid black;  width: 150%;"
                                    name="email" id="semail" size="40" type="text" class="crinp">
                            </p>
                            <div class="clear"></div>
                            <p>
                                Comments*<br />
                                <textarea rows="5" name="message" id="scomment" cols="45" class="crinp"></textarea>
                            </p>
                            <div class="clear"></div>
                            <div><input style="background-color: red; outline: #000; width: 70%;" class="apply-btn"
                                    id="sub" type="submit" value="Submit" name="submit"></div>

                        </form>
                    </div>
                </div>


            </div>
            <div class="clear"></div>
        </div>
    </div>


    <div class="followCopy">
        <div id="wrapper">
            <div class="followus">


            </div>
            <div style="text-align: center;" class="copy">
                Copyright 2021 <strong>All Rights Reserved with Hawelia Group</strong>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="to-top">
        <a href="#">
            <img src="images/scrollUp-arrow.png" alt="">
        </a>
    </div>

    <script type="text/javascript" src="libs/jquery/1.10.2/jquery.min.js"> </script>
    <script type="text/javascript" src="libs/jqueryui/1.10.3/jquery-ui.min.js"> </script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/jquery.mapmarker.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>



    <script src="js/jquery-1.11.0.min.js"></script>


    <link rel="stylesheet" href="js/treeview/jquery.treeview.css" />
    <script src="js/treeview/jquery.treeview.js" type="text/javascript"></script>



    <script type="text/javascript" src="js/banner/jquery.ad-gallery.js"></script>


    <link rel="stylesheet" type="text/css" href="js/banner/jquery.ad-gallery-inner.css">


    <script type="text/javascript">
        $(function () {
            var galleries = $('.ad-gallery').adGallery();
        });
    </script>




    <script>


        outerwidth = 965;


        function resizeImage() {
            screenWidth = $(window).width();
            screenHeight = $(window).height();

            screenWidthdiv1 = $(".ourProjects").width();
            screenWidthdiv2 = $(".corporateav").width();

            screenWidthdiv1tot = screenWidthdiv1 + screenWidthdiv2;



            if (screenWidth > 1180) {
                $("#wrapperFoot").css('width', 1180);

            } else {
                $("#wrapperFoot").css('width', screenWidth);

            }



            if (screenWidth < 478) {
                $('.ad-image-wrapper').css({ 'margin-left': (screenWidth - 478) / 2 });
            } else {
                $('.ad-image-wrapper').css({ 'margin-left': 0 })
            }


            imageWidth = 2000;
            imageHeight = 920;
            navWidth = jQuery(window).width();
            navHeight = jQuery(window).height() - 75;
            navRatio = navWidth / navHeight;
            imageRatio = imageWidth / imageHeight;
            if (navRatio > imageRatio) {
                newHeight = (navWidth / imageWidth) * imageHeight;
                newWidth = navWidth;
            } else {
                newHeight = navHeight;
                newWidth = (navHeight / imageHeight) * imageWidth;
            }
            newTop = 0 - ((newHeight - navHeight) / 2);

            newLeft = navWidth - newWidth;

            if (screenWidth < outerwidth) {
                $('.ad-image-wrapper').css({ 'height': screenWidth / 2 })
                $('.bannerContainer ').css({ 'position': 'static', 'height': 'auto', 'width': 'auto' });
                jQuery('.bannerContainer .ad-image img').css({ 'height': 'auto', 'width': '100%', 'marginTop': 0, 'marginLeft': 0 });
            } else {
                $('.bannerContainer ').css({ 'width': '100%', 'height': screenHeight })
                $('.ad-image-wrapper').css({ 'width': '100%', 'height': screenHeight })
                jQuery('.bannerContainer').css({ 'position': 'absolute', 'height': navHeight, 'width': navWidth, 'overflow': 'hidden' });
                jQuery('.bannerContainer .ad-image img').css({ height: newHeight, width: newWidth, marginTop: newTop, marginLeft: newLeft });
            }


        }

        jQuery(document).ready(function ($) {


            $('.btnmenu').click(function () {
                $('#mobilemenu, .mobilemenuBG').fadeIn(500);
            });

            $('.mobilemenuclose').click(function () {
                $('#mobilemenu, .mobilemenuBG').fadeOut(500);
            });

            $('.menuwrapper li').mouseover(function () {

                var left = $(this).position().left + $(this).width() - 160;
                $('#marker').stop().animate({ marginLeft: left }, 300);
            });
            $('.menuwrapper li').mouseleave(function () {
                $('#marker').stop().animate({ marginLeft: -43 }, 300);
            });

            function showMenu(prmBut, prmMenu) {
                $(prmBut).hover(function () {
                    $(prmMenu).stop(true).delay(200).fadeIn(500);
                }, function () {
                    $(prmMenu).stop(true).delay(100).fadeOut();
                });
                $(prmMenu).hover(function () {
                    $(this).stop(true).show();
                }, function () {
                    $(this).hide();
                });
            }
            showMenu(".but1", "#memu1");
            showMenu(".but2", "#memu2");
            showMenu(".but4", "#memu4");


            $(".menusublinks").click(function () {
                $(".leftPanel ul").stop(true, true).slideToggle();
                $(".ullk").stop(true, true).slideToggle();
            });


            $(".slideverticalsbtn").click(function () {
                $(".slideverticals").stop(true, true).slideToggle();
            });





            $(window).load(function (e) {
                resizeImage();
            });
            $(window).resize(function (e) {
                resizeImage();
            });
            resizeImage();

        });

    </script>


</body>

</html>