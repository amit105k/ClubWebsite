<?php
session_start();

if (!isset($_SESSION['vender'])) {
    header("Location: VenderLogin.php");
    exit();
}
$vender = $_SESSION['vender'];


include("db.php");
$query = "SELECT image FROM club_overviews WHERE email=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $vender['email']);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $logo = $row['image'];
    }
}


include("db.php");

$sql = "SELECT * FROM club_overviews where email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $vender['email']);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Club List</title>
    <link rel="stylesheet" href="../css/index.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Roboto+Slab:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <!-- <nav>
        <h4 id="thenoida">The Noida Clubs</h4>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="service.php">Services</a>
        <a href="#clubs">Clubs</a>
        <a href="#clubs">Gallery</a> 
        <a href="contact.php">Contact Us</a>
         <a href="../Html/buyticket.php">Buy Tickets</a><img src="../image/new.gif" alt=""> 
        <a href="status.php" id="status">Booking Status</a>
        <a href="VenderProfile.php"><i class="fa-solid fa-left-long"></i> Back To Profile</a>

        ..................drop down is here


    </nav> -->


    <!-- ...this is profile details..-->



    <div class="profile">
        <div class="profile-left">
            <div class="logo">
                <img src="<?php echo $logo ?>" alt="Club images">
            </div>
            <ul>
                <li><a href="VenderProfile.php"><i class="fa-solid fa-left-long"></i> DashBoard</a></li>
                <li><a href="VenderClubList.php">Show Club Details</a></li>
                <li><a href="VenderClubCreate.php">Create New Club</a></li>
                <li><a href="VenderPriceUpdate.php">Price/Cupon</a></li>
                <li><a href="VenderClubUpdate.php">Update Club</a></li>
                <li><a href="VenderUpdateGallery.php">Gallery</a></li>
                <li><a href="VenderClubDelete.php">Delete Club</a></li>
                <li><a href="VenderPasswordUpdate.php">Change Password</a></li>
                <li> <a href="logout.php">Logout</a></li>
            </ul>
            
        </div>
        <div class="details">
            
            <h2 id="h2">Club List</h2>
            <?php

            if ($result->num_rows > 0) {
                echo "<table border='1' style='border-collapse: collapse;'>
                    <tr>
                        <th>id</th>
                        <th>Club Name</th>
                        <th>Show timing</th>
                        <th>address</th>
                        <th>Price</th>
                    </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['club_name'] . "</td>
                            <td>" . $row['show_time'] . "</td>
                            <td>" . $row['address'] . ", " . $row['city'] . ", " . $row['postal_code'] . "</td>
                            <td>" . $row['price'] . "</td>
                        </tr>";
                            }
                            echo "</table>";
                            } else {
                                echo "no club found kindely reigter ";
                                ?>
                                <a href="VenderClubCreate.php">Register new club</a>
                                <?php
                            }

                            ?>


        </div>


    </div>



    <!---,.............footer is eher-->
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

<style>
    body {
        font-family: Arial, sans-serif;

        background-color: #f4f4f9;
        color: #333;
    }

    th,
    td {
        border-width: thin;
        padding: 2px;
    }

    table {
        width: 95%;
        margin-left: 2%;
        margin-right: 3%;
        margin-bottom: 20px;
        box-sizing: border-box;
        text-align: center;

    }


    #thenoida {

        margin-left: -73px;
    }

    /* .container {
        max-width: 600px;
        margin: 50px auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    } */

    #h2 {
        text-align: center;
        color: #444;
        font-size: 24px;
        padding: 20px;
    }

    .details {
        /* display: flex; */
        justify-content: space-between;
        margin-bottom: 10px;
        width: 85%;
        justify-content: center;
        align-items: center;
        */
    }

    .first,
    .second {
        width: 50%;
        text-align: center;
    }

    .first p,
    .second p {
        margin: 19px 0;
        font-size: 18px;
    }

    .address {
        margin-top: 20px;
        padding-top: 10px;
    }

    .details strong {
        color: #555;
    }

    .logout-container {
        text-align: center;
        margin-top: 30px;
    }



    .ftext {
        text-align: center;
        background-color: black;
        color: white;
        padding: 10px;
        font-size: 15px;
        box-shadow: 0 0 0px 0px rgba(208, 141, 58, 0.57);
    }

    /** profile deatails are here */
    .profile-left {
        background-color: black;
        /* padding: 10px; */
        width: 15%;
    }

    .profile-left ul li {
        /* line-height: 50px; */
        list-style-type: none;
        /* padding: 20px; */
        align-items: center;
        /* justify-content: center; */
        display: flex;
        margin-top: 5px;
        margin-left: 11%;
    }


    .profile-left ul li a {
        /* background-color: pink; */
        text-decoration: none;
        /* padding: 10px; */
        height: 100%;
        height: 100%;
        color: white;
        line-height: 50px;
    }

    .profile-left ul li a:hover {
        color: orange;
    }

    .profile {
        /* background-color: yellow; */
        display: flex;
    }

    .logo {
        /* width: 15%;  */
        padding: 10px;
        /* position: absolute; */
        top: 0;
        left: 0;
        box-sizing: border-box;
        overflow: hidden;
    }

    .logo img {
        width: 100%;
        height: auto;
        object-fit: cover;
        cursor: pointer;
    }
</style>