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
$query = "SELECT image_url FROM club_overviews WHERE email=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $vender['email']);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $logo = $row['image_url'];
    }
}


// logo insert 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['profileImage'])) {
    $targetDir = "uploads/";
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


            $updateQuery = "UPDATE club_overviews SET image_url=? WHERE email=?";
            $updateStmt = $conn->prepare($updateQuery);
            $updateStmt->bind_param("ss", $targetFilePath, $email);
            if ($updateStmt->execute()) {
                $_SESSION['user']['image'] = $targetFilePath;
                $_SESSION['success'] = "Profile image uploaded successfully.";

                header("Location: VenderProfile.php");
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
    <title>Vendor Profile</title>
    <link rel="stylesheet" href="../css/index.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Roboto+Slab:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <!-- <nav>
        <h4 id="thenoida">The Noida Clubs</h4>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact Us</a>
        <a href="status.php" id="status">Booking Status</a>
        <a href="logout.php">Logout</a>
    </nav> -->


    <!-- ...this is profile details..-->



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
                <li><a href="VenderProfile.php"> DashBoard</a></li>
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
        <h2 id="h2">Vender Profile</h2>

            <div class="first">
                <p class="paragraph"><strong>ID:</strong> <?php echo htmlspecialchars($vender['id']); ?></p>
                <p class="paragraph"><strong>Business
                        Name:</strong><?php echo htmlspecialchars($vender['business_name']); ?>
                </p>
                <p class="paragraph"><strong>Name:</strong> <?php echo htmlspecialchars($vender['client_name']); ?></p>
                <p class="paragraph"><strong>Contact No:</strong> <?php echo htmlspecialchars($vender['contact_no']); ?>
                </p>

            </div>
            <div class="second">
                <p class="paragraph"><strong>Email:</strong> <?php echo htmlspecialchars($vender['email']); ?></p>
                <p class="paragraph"><strong>GST details:</strong> <?php echo htmlspecialchars($vender['gst_no']); ?>
                </p>
                <p class="paragraph"><strong>Address:</strong> <?php echo htmlspecialchars($vender['address']); ?></p>

            </div>
        </div>


    </div>
    <?php
    ?>



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