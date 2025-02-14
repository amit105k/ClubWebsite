<?php
session_start();

if (!isset($_SESSION['vender'])) {
    header("Location: VenderLogin.php");
    ?>
    <script>
        alert("Something went worng");
    </script>
    <?php
    exit();
}
$vender = $_SESSION['vender'];
$email = $vender['email'];


include("db.php");
$query = "SELECT image,club_name FROM club_overviews WHERE email=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $vender['email']);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $logo = $row['image'];
        $club = $row['club_name'];
    }
}


// $amit="Hauz Khas";
$old = "SELECT * FROM registrations WHERE club=?";
$stmt = $conn->prepare($old);
$stmt->bind_param("s", $club);
$stmt->execute();
$resultt = $stmt->get_result();

if ($resultt->num_rows > 0) {
    $row = $resultt->fetch_assoc();
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
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
        <a href="logoutCustomer.php">Logout</a>


    </nav> -->


    <!-- ...this is profile details..-->

    <div class="profile">
        <div class="profile-left">
            <div class="logo" onclick="document.getElementById('fileInput').click();">
                <img src="<?php echo htmlspecialchars($logo); ?>" id="profileImage" alt="Profile Image">
            </div>
            <ul>
                <li><a href="VenderProfile.php"><i class="fa-solid fa-left-long"></i> DashBoard</a></li>
                <li><a href="VenderTicketList.php"> Show Bookings</a></li>
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

            <?php
            if ($resultt->num_rows > 0) {
                echo "<table border='1' style='width:100%; border-collapse:collapse; text-align: center;'>
            <tr style='background-color:#cec7c7';>
                <th>ID</th>
                <th>Name</th>
                <th>Date And Time</th>
                <th>Mobile</th>
                <th>No Of Persons</th>
                <th>Amount</th>
                <th>Payment Status</th>
                <th>Payment id</th>
                <th>Token id</th>
                <th>Booking Date</th>
            </tr>";

                while ($row = $resultt->fetch_assoc()) {
                        if ($row["payment_status"] === "Success") {
                            $rowStyle = "background-color: #c9d4c9; color: black;";
                        } elseif ($row["payment_status"] === "Pending") {
                            $rowStyle = "background-color: #cb5c5c; color: black;";
                        } else {
                            $rowStyle = "background-color: white; color: black;";
                        }

                        echo "<tr style='" . $rowStyle . "'>

                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["date"] . "</td>
                <td>" . $row["mobile"] . "</td>
                <td>" . $row["count"] . "</td>
                <td>" . $row["amount"] . "</td>
                <td>" . $row["payment_status"] . "</td>
                <td>" . $row["payment_id"] . "</td>
                <td>" . $row["token_id"] . "</td>
                <td>" . $row["bdate"] . "</td>
            </tr>";
                    }
            
                echo "</table>";
            } else {
                echo "<p>No  bookings found in these details.</p>";
            }

            $conn->close();
            ?>

        </div>


    </div>
    <!--.........................footer is here-->

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

    .edit-icon {
        position: absolute;
        /* top: 10px;
        right: 10px; */
        margin-top: -40px;
        left: 12%;
        background: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 5px;
        border-radius: 50%;
        cursor: pointer;
        display: none;
        font-size: 16px;
    }

    .logo:hover .edit-icon {
        display: block;
    }

    #fileInput {
        display: none;
    }

    body {
        font-family: Arial, sans-serif;

        background-color: #f4f4f9;
        color: #333;
    }

    #thenoida {

        margin-left: -73px;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

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
        padding: 10px;
        width: 85%;
        justify-content: center;
        align-items: center;
    }

    .first,
    .second {
        width: 40%;
        /* Make each section take up half the width */
        display: inline-block;
        /* Display them next to each other */
        /* vertical-align: top;  */
        padding: 10px;
        box-sizing: border-box;
        margin-top: 50px;
    }

    .first {
        margin-left: 16%;

        box-sizing: border-box;
        /* Add some space between the two sections */
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

    th,
    td {
        border-width: thin;
        padding: 2px;
    }
</style>