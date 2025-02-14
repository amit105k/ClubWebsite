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


?>

<?php
$response = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $club_name = htmlspecialchars($_POST['club_name']);
    $show_time = htmlspecialchars($_POST['show_time']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $postal_code = htmlspecialchars($_POST['postal_code']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $about = htmlspecialchars($_POST['about']);

    $image_name = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploads/' . uniqid() . '_' . basename($image_name);

    if (move_uploaded_file($image_tmp_name, $image_folder)) {
        // Insert data into database
        $stmt = $conn->prepare("INSERT INTO club_overviews 
            (club_name, image, show_time, address, city, postal_code, email, mobile, about) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param(
            "sssssssss", 
            $club_name, 
            $image_folder,
            $show_time, 
            $address, 
            $city, 
            $postal_code, 
            $email, 
            $mobile, 
            $about
        );

        if ($stmt->execute()) {
            $response = "success";
        } else {
            $response = "error";
        }
        $stmt->close();
    } else {
        $response = "error";

    }

    $conn->close();
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
            <form action="" method="POST" id="createClubForm" enctype="multipart/form-data">
                <h2>Create New Club</h2>
                <label for="club_name">Club Name:</label>
                <input type="text" id="club_name" name="club_name" required>

                <label for="image">Image:</label>
                <input type="file" id="image" name="image" required>


                <label for="show_time">Openaning And Closing Time:</label>
                <input type="text" id="show_time" name="show_time" required placeholder="12:30 To 11:30 PM">

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>

                <label for="postal_code">Postal Code:</label>
                <input type="text" id="postal_code" name="postal_code" required  minlength="6" maxlength="6" 
                oninput="this.value = this.value.replace(/[^0-9]/g, '');">

                <label for="book_tkt">Email:</label>
                <input type="url" id="book_tkt" name="email" required readonly value="<?php echo(htmlspecialchars($vender['email'])); ?>">

                <label for="book_tkt">Mobile:</label>
                <input type="text" id="mobile" name="mobile" required  minlength="10" maxlength="10" 
                oninput="this.value = this.value.replace(/[^0-9]/g, '');" value="<?php echo htmlspecialchars($vender['contact_no']) ?>">

                <label for="about">About Of Club :-</label>
                <textarea name="about" id=""></textarea>

                <input type="submit" value="Create Club">
            </form>

        </div>


    </div>
    <?php
    // header("Location: VenderLogin.php");
    // exit();
    // session_destroy(); ?>



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
    /** form .container */



    .details {
        width: 80%;
        margin: 20px auto;
        padding: 20px;
        background-color: #f4f4f4;
        border-radius: 10px;
        display: flex;
        justify-content: space-between;
        /* margin-bottom: 10px;  */
      
      justify-content: center;
       align-items: center; 

    }
    .details form{
        width: 70%;
    }

    .details h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .details label {
        display: block;
        margin: 10px 0 5px;
        font-size: 19px;
        font-weight: bold;
    }

    .details input[type="text"],
    .details input[type="url"],
    .details input[type="time"],
    .details input[type="number"],
    .details input[type="datetime-local"] {
        width: 100%;
        padding: 8px;
        margin: 10px 0;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 19px;
        font-weight: normal;
    }

    .details input[type="submit"] {
        padding: 10px 15px;
        /* background-color: #007BFF; */
        background-color: #45a049;
        color: white;
        border: none;
        margin-top: 10px;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }

    textarea {
        width: 100%;
        height: auto;
        font-size: 18px;
    }



    body {
        font-family: Arial, sans-serif;

        background-color: #f4f4f9;
        color: #333;
    }

    #thenoida {

        /* margin-left: -73px; */
        margin-left: 0 !important;
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
        height: 13%;
        /* position: absolute; */
        /* margin-top: -70px; */
        /* margin-left: 10px; */
        background-color: black;
        /* width: 15%; */
        justify-content: center;
        padding: 10px;
        box-sizing: border-box;
        display: flex;
    }

    .logo img {
        /* width: 36%; */
        /* border-radius: 100%; */
        width: 100%;
        height: 100%;
        /* margin-left: 12%; */
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let response = "<?php echo $response; ?>";

        if (response === "success") {
            Swal.fire({
                title: 'Success!',
                text: 'Club Create successfully!',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = "VenderProfile.php";
            });
        } else if (response === "error") {
            Swal.fire({
                title: 'Error!',
                text: 'Club not Created. Please try again.',
                icon: 'error'
            });
        }
    });
</script>