<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: VenderLogin.php");
    exit();
}
$user = $_SESSION['user'];
$email = $user['email'];


include("db.php");

// thsi if 
$query = "SELECT image FROM customerreg WHERE email=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$logo = "default.png"; 

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $logo = $row['image'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['profileImage'])) {
    $targetDir = "logo/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true); 
    }

    if ($logo !== "default.png" && file_exists($logo)) {
        unlink($logo);
    }

    $fileName = time() . "_" . basename($_FILES["profileImage"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFilePath)) {

        
            $updateQuery = "UPDATE customerreg SET image=? WHERE email=?";
            $updateStmt = $conn->prepare($updateQuery);
            $updateStmt->bind_param("ss", $targetFilePath, $email);
            if ($updateStmt->execute()) {
                $_SESSION['user']['image'] = $targetFilePath;
                $_SESSION['success'] = "Profile image uploaded successfully.";
                
                header("Location: customerProfile.php");
                exit();
            } else {
                $_SESSION['error'] = "Failed to update database.";
            }
        } else {
            $_SESSION['error'] = "File upload failed.";
        }
    } else {
        $_SESSION['error'] = "Invalid file format. Only JPG, PNG, or GIF allowed.";
    }
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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
        <a href="CustomerTicketBooking.php">Buy Tickets</a><img src="../image/new.gif" alt="">
        <a href="status.php" id="status">Booking Status</a>
        <a href="logoutCustomer.php">Logout</a>


    </nav>


    <!-- ...this is profile details..-->
    <h2 id="h2">Customer Profile</h2>
    <div class="profile">
    <div class="profile-left">
            <div class="logo" onclick="document.getElementById('fileInput').click();">
                <img src="<?php echo htmlspecialchars($logo); ?>" id="profileImage" alt="Profile Image">
                <span class="edit-icon" onclick="document.getElementById('fileInput').click();">&#9998;</span>
            </div>
            <form id="uploadForm" method="POST" enctype="multipart/form-data">
                <input type="file" name="profileImage" id="fileInput" accept="image/*" onchange="uploadImage()">
            </form>
     

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
            <div class="first">
                <p><strong>ID:</strong> <?php echo htmlspecialchars($user['Sr']); ?></p>
                <p><strong>Name:</strong> <?php echo htmlspecialchars($user['Customer_Name']); ?></p>
                <p><strong>Address:</strong> <?php echo htmlspecialchars($user['Address']); ?></p>
            </div>
            <div class="second">
                <p><strong>Contact No:</strong> <?php echo htmlspecialchars($user['mobile']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            </div>
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
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        width: 85%;
        justify-content: center;
        align-items: center;
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
    .profile-left ul {
        margin-top: 10px;
    }
    .profile-left ul li {
        /* list-style-type: none;
        align-items: center;
        justify-content: center; */
        display: flex;
        margin-top: 5px;
    }


    .profile-left ul li a {
        text-decoration: none;
        height: 100%;
        height: 100%;
        color: white;
        line-height: 40px;
        margin-left: 20%;
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
        overflow: hidden;
        cursor: pointer;

    }

    .logo img {
        width: 50%;
        border-radius: 100%;
        /* width: 100%; */
        height: 100%;
        margin-left: 28%;
        /* width: 100%;
        height: 100%; */
        object-fit: cover;
        border-radius: 50%;
    }

    .edit-icon {
        position: absolute;
        bottom: 10px;
        right: 10px;
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
</style>

<script>
        function uploadImage() {
            document.getElementById('uploadForm').submit();
        }

        <?php if (isset($_SESSION['success'])) { ?>
            Swal.fire({
                title: 'Profile Updated',
                text: '<?php echo $_SESSION['success']; ?>',
                icon: 'success',
                confirmButtonText: 'OK'
            })
            // .then(() => {
            //     window.location.href = 'customerLogin.php';
            // });
        <?php unset($_SESSION['success']); } ?>

        <?php if (isset($_SESSION['error'])) { ?>
            Swal.fire({
                title: 'Error',
                text: '<?php echo $_SESSION['error']; ?>',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        <?php unset($_SESSION['error']); } ?>
    </script>