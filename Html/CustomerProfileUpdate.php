<?php
include("db.php");
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: VenderLogin.php");
    exit();
}
$user = $_SESSION['user'];
if ($conn->connect_error) {
    die("connection error" . $conn->connect_error);
}
$sql = "SELECT * FROM customerreg where email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user['email']);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $userDetails = $result->fetch_assoc();
} else {
    echo "Some thing went wrong";
}



// update data are here 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $sql = "UPDATE customerreg SET Customer_Name = ?, email = ?, mobile = ?, Address = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiss", $name, $email, $mobile, $address, $email);
    // if ($stmt->execute()) {
    //     echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.4.26/dist/sweetalert2.min.js'></script>
    //         Swal.fire({
    //             title: 'Update Success',
    //             text: 'Your details have been updated! Kindely re-login',
    //             icon: 'success',
    //             confirmButtonText: 'OK'
    //         }).then(function() {
    //             window.location.href = 'CustomeLogin.php'; 
    //         });
    //       </script>";

    // } else {
    //     echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.4.26/dist/sweetalert2.min.js'></script>
    //     Swal.fire({
    //         title: 'Something Went Wrong!',
    //         text: 'Unable to update your details.',
    //         icon: 'error',
    //         confirmButtonText: 'Try Again'
    //     });
    //   </script>";
    // }

    if ($stmt->execute()) {
        $_SESSION['update_status'] = 'success';
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $_SESSION['update_status'] = 'error';
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
    $stmt->close();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.26/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.26/dist/sweetalert2.min.js"></script>

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
        <a href="logout.php">Logout</a>


    </nav>


    <!-- ...this is profile details..-->
    <h2 id="h2">Customer Profile Update</h2>
    <div class="profile">
        <div class="profile-left">
            <div class="logo">
                <img src="../image/amit.png" alt="image">
            </div>
            <ul>
                <li><a href="CustomerProfile.php"><i class="fa-solid fa-left-long"></i> Back To Profile</a></li>
                <li><a href="CustomerBookingHistory.php">Booking Ticket</a></li>
                <li><a href="CustomerProfileUpdate.php">Update Profile</a></li>
                <li><a href="CustomerPasswordUpdate.php">Update Passw</a></li>
            </ul>

        </div>
        <div class="details">
            <form action="" method="POST">
                <label for="">Name</label>
                <input type="text" name="name" value="<?php echo htmlspecialchars($userDetails['Customer_Name']); ?>">

                <h3> </h3>
                <label for="">Email</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($userDetails['email']); ?>">

                <label for="">Mobile Number</label>
                <!-- <input type="text" name="mobile" value="<?php echo htmlspecialchars($userDetails['mobile']); ?>"> -->
                <input type="text" id="mobile" name="mobile" required placeholder="Enter your Phone" minlength="10"
                    maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');" value="<?php echo htmlspecialchars($userDetails['mobile']); ?>">

                <label for="">Address</label>
                <input type="text" name="address" value="<?php echo htmlspecialchars($userDetails['Address']); ?>">

                <input type="submit" Value="Update Details">
            </form>
        </div>
        <?php
        if (isset($_SESSION['update_status'])) {
            if ($_SESSION['update_status'] == 'success') {
                echo "<script type='text/javascript'>
                Swal.fire({
                    title: 'Update Success',
                    text: 'Your details have been updated! Kindly re-login.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(function() {
                    window.location.href = 'CustomeLogin.php'; 
                });
              </script>";
            } elseif ($_SESSION['update_status'] == 'error') {
                echo "<script type='text/javascript'>
                Swal.fire({
                    title: 'Something Went Wrong!',
                    text: 'Unable to update your details.',
                    icon: 'error',
                    confirmButtonText: 'Try Again'
                });
              </script>";
            }
            unset($_SESSION['update_status']);
        }
        ?>


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
        display: flex;
        /* justify-content: space-between; */
        margin-bottom: 10px;
        width: 85%;
        justify-content: center;
        align-items: center;
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
        justify-content: center;
        display: flex;
        margin-top: 5px;
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

    /**profile sow and updatae here .container
     */
    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 80%;
        /* align-items: center; */
        /* justify-content: center; */
    }

    input[type="text"],
    input[type="email"] {
        padding: 10px;
        font-size: 16px;
        width: 100%;
        box-sizing: border-box;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
        border-radius: 4px;
        font-size: 16px;
    }

    textarea {
        padding: 0;
        width: 99%;
        height: auto;
        margin: 0;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>