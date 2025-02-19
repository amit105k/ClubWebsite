<?php
include("db.php");
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: CustomerLogin.php");
    exit();
}
$user = $_SESSION['user'];
if ($conn->connect_error) {
    die("connection error" . $conn->connect_error);
}
$sql = "SELECT * FROM registrations where email=?";
$stmt=$conn->prepare($sql);
$stmt->bind_param("s",$user['email']);
$stmt->execute();
$result = $stmt->get_result();



// loho find

$old = "SELECT * FROM customerreg WHERE email=?";
$stmt = $conn->prepare($old);
$stmt->bind_param("s", $user['email']);
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
        <a href="logoutCustomer.php">Logout</a>


    </nav>


    <!-- ...this is profile details..-->
    <h2 id="h2">Booking History</h2>
    <div class="profile">
        <div class="profile-left">
            <div class="logo">
            <img src="<?php echo $row['image'] ?>" alt="image">
            </div>
            <ul>
                <li><a href="CustomerProfile.php">Dashboard</a></li>
                <li><a href="CustomerTicketBooking.php">Booking Ticket</a></li>
                <li><a href="CustomerBookingHistory.php">Booking History</a></li>
                <li><a href="CustomerProfileUpdate.php">Update Profile</a></li>
                <li><a href="CustomerPasswordUpdate.php">Change Password</a></li>
                <li><a href="logoutCustomer.php">Logout</a></li>

            </ul>

        </div>
        <div class="details">

            <?php
            if ($result->num_rows > 0) {
                echo "<table border='1' style='width:100%; border-collapse:collapse'>
            <tr>
                <th>ID</th>
                <th>Club Name</th>
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

                while ($row = $result->fetch_assoc()) {
                 
                echo "<tr'>
                <td>" . $row["id"] . "</td>
                <td>" . $row["club"] . "</td>
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
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
        color: #333;
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
        /* justify-content: space-between; */
        margin-bottom: 10px;
        width: 85%;
        justify-content: center;
        align-items: center;
        padding-left: 10px;
        box-sizing: border-box;
    }
    th,td{
        border-width: thin;
        padding: 2px;
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

    .profile-left ul{
        margin-top: 10px !important;
    }
    .profile-left ul li {
       
        display: flex !important;
        margin-top: 5px !important;
    }


    .profile-left ul li a{
        text-decoration: none;
        height: 100%;
        height: 100%;
        color: white;
        line-height: 40px !important;
        margin-left: 20% !important;
    }

    .profile-left ul li a:hover {
        color: orange;
    }



    .profile {
        /* background-color: yellow; */
        display: flex;
    }

    .logo {
        height: 13%;
        position: absolute;
        margin-top: -70px;
        /* margin-left: 10px; */
        background-color: black;
        width: 15%;
    }

    .logo img {
        width: 36%;
        border-radius: 100%;
        /* width: 100%; */
        height: 90%;
        margin-left: 28%;
    }
</style>