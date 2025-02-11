<?php
session_start();

if (!isset($_SESSION['vender'])) {
    header("Location: VenderLogin.php");
    exit();
}
$vender = $_SESSION['vender'];

// $logo = $_SESSION['logo'];

if (isset($_SESSION['logo']) && !empty($_SESSION['logo'])) {
    echo "Logo found: " . $_SESSION['logo'];
} else {
}


//...................................

include('db.php');

$sql = "SELECT id, club_name FROM club_overviews where email=?";
$query = $conn->prepare($sql);
$query->bind_param("s", $vender['email']);
$query->execute();
$result = $query->get_result();
$clubs = [];
while ($row = $result->fetch_assoc()) {
    $clubs[] = $row;
}

$selected_club = null;
if (isset($_GET['id']) && $_GET['id'] != 'new') {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT * FROM club_overviews WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $selected_club_result = $stmt->get_result();
    $selected_club = $selected_club_result->fetch_assoc();
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $image_url1 = isset($_POST['image_url1']) ? $conn->real_escape_string($_POST['image_url1']) : '';
//     $image_url2 = isset($_POST['image_url2']) ? $conn->real_escape_string($_POST['image_url2']) : '';
//     $image_url3 = isset($_POST['image_url3']) ? $conn->real_escape_string($_POST['image_url3']) : '';

//     $sql = "UPDATE club_overviews SET 
//                 image_url1 = ?, 
//                image_url2 = ?, 
//                 image_url3 = ?


//             WHERE id = ?";
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param("sssi", $image_url1, $image_url2, $image_url3, $id);

//     if ($stmt->execute()) {
//         echo "<script>
//                 document.addEventListener('DOMContentLoaded', function() {
//                     Swal.fire({
//                         title: 'Success!',
//                         text: 'Gallery updated successfully.',
//                         icon: 'success',
//                         confirmButtonText: 'OK'
//                     }).then(() => {
//                         window.location.href = 'update_club.php';
//                     });
//                 });
//               </script>";
//     } else {
//         echo "<script>
//                 document.addEventListener('DOMContentLoaded', function() {
//                     Swal.fire({
//                         title: 'Error!',
//                         text: 'Failed to update Gallery.',
//                         icon: 'error',
//                         confirmButtonText: 'OK'
//                     });
//                 });
//               </script>";
//     }

//     $stmt->close();
// }

$email = $vender['email'];
$targetDir = "uploads/";
$response = "";

if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

$stmt = $conn->prepare("SELECT image_url1, image_url2, image_url3 FROM club_overviews WHERE id = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['upload'])) {

    foreach (['image_url1', 'image_url2', 'image_url3'] as $index => $column) {
        if (!empty($row[$column]) && file_exists($row[$column])) {
            unlink($row[$column]);
        }
    }

    $stmt = $conn->prepare("UPDATE club_overviews SET image_url1 = NULL, image_url2 = NULL, image_url3 = NULL WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $stmt->close();

    $uploadedFiles = [];

    for ($i = 1; $i <= 3; $i++) {
        $fileKey = "image" . $i;
        if (isset($_FILES[$fileKey]) && $_FILES[$fileKey]['error'] == 0) {
            $fileName = basename($_FILES[$fileKey]["name"]);
            $targetFilePath = $targetDir . time() . "_" . $fileName;
            $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
            if (in_array($fileType, $allowedTypes)) {
                if (move_uploaded_file($_FILES[$fileKey]["tmp_name"], $targetFilePath)) {
                    $uploadedFiles[] = $targetFilePath;
                } else {
                    $response = "error";
                }
            } else {
                $response = "error";
            }
        } else {
            $response = "error";
        }
    }

    if (count($uploadedFiles) === 3) {
        $stmt = $conn->prepare("UPDATE club_overviews SET image_url1 = ?, image_url2 = ?, image_url3 = ? WHERE id = ?");
        $stmt->bind_param("ssss", $uploadedFiles[0], $uploadedFiles[1], $uploadedFiles[2], $id);

        if ($stmt->execute()) {
            $response = "success";
        } else {
            $response = "error";
        }
        $stmt->close();
    } else {
        $response = "error";
    }
}



$conn->close();
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
    <nav>
        <h4 id="thenoida">The Noida Clubs</h4>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <!-- <a href="service.php">Services</a> -->
        <!-- <a href="#clubs">Clubs</a>
        <a href="#clubs">Gallery</a> -->
        <a href="contact.php">Contact Us</a>
        <!-- <a href="../Html/buyticket.php">Buy Tickets</a><img src="../image/new.gif" alt=""> -->
        <a href="status.php" id="status">Booking Status</a>
        <a href="VenderProfile.php"><i class="fa-solid fa-left-long"></i> Back To Profile</a>

        <a href="logout.php">Logout</a>
        <!--..................drop down is here-->


    </nav>


    <!-- ...this is profile details..-->



    <!-- <h2 id="h2">Vender Profile</h2> -->
    <div class="profile">
        <div class="profile-left">
            <div class="logo">
                <img src="<?php echo $logo ?>" alt="Club images">
                <!-- <img src="../image/amit.png" alt="image"> -->
            </div>
            <ul>
                <li><a href="VenderProfile.php"><i class="fa-solid fa-left-long"></i> DashBoard</a></li>
                <li><a href="VenderClubList.php">Show Club Details</a></li>
                <li><a href="VenderClubCreate.php">Create New Club</a></li>
                <li><a href="VenderClubUpdate.php">Update Club</a></li>
                <li><a href="VenderClubDelete.php">Delete Club</a></li>
                <li><a href="VenderPriceUpdate.php">Price/Cupon</a></li>
                <li><a href="VenderPasswordUpdate.php">Change Password</a></li>
                <li> <a href="logout.php">Logout</a></li>
            </ul>


        </div>
        <div class="details">
            <h2>Update Club Gallery</h2>

            <form action="" method="get">
                <label for="id">Select Club ID to update:</label>
                <select name="id" id="id" required onchange="handleSelectChange(this)">
                    <option value="">Select Club</option>
                    <?php foreach ($clubs as $club): ?>
                        <option value="<?php echo $club['id']; ?>" <?php echo (isset($id) && $id == $club['id']) ? 'selected' : ''; ?>>
                            (ID: <?php echo $club['id']; ?>) <?php echo $club['club_name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <input type="submit" value="Select Club">
            </form>

            <?php if ($selected_club || isset($_GET['id']) && $_GET['id'] == 'new'): ?>
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="upload-container">
                        <?php if (!empty($row['image_url1']) && file_exists($row['image_url1'])): ?>
                            <img src="<?php echo $row['image_url1']; ?>" class="image-preview" alt="Image 1">
                        <?php else: ?>
                            <span>No image uploaded</span>
                        <?php endif; ?>
                        <input type="file" name="image1" required>
                    </div><br>

                    <div class="upload-container">
                        <?php if (!empty($row['image_url2']) && file_exists($row['image_url2'])): ?>
                            <img src="<?php echo $row['image_url2']; ?>" class="image-preview" alt="Image 2">
                        <?php else: ?>
                            <span>No image uploaded</span>
                        <?php endif; ?>
                        <input type="file" name="image2" required>
                    </div><br>

                    <div class="upload-container">
                        <?php if (!empty($row['image_url3']) && file_exists($row['image_url3'])): ?>
                            <img src="<?php echo $row['image_url3']; ?>" class="image-preview" alt="Image 3">
                        <?php else: ?>
                            <span>No image uploaded</span>
                        <?php endif; ?>
                        <input type="file" name="image3" required>
                    </div><br>

                    <!-- <h3><?php echo htmlspecialchars($email); ?></h3> -->
                    <button type="submit" name="upload">Upload Images</button>
                </form>

            <?php endif; ?>
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
    .details {
        width: 80%;
        /* margin: 20px auto; */
        padding: 20px;
        background-color: #f4f4f4;
        border-radius: 10px;
        justify-content: space-between;

        justify-content: center;
        align-items: center;

        justify-content: space-between;
        margin-bottom: 10px;
        width: 85%;
        justify-content: center;
        align-items: center;


    }

    button[type='submit'] {
        color: white;
        background-color: #45a049;
        border-radius: 5px;
    }

    .details form {
        width: 70%;
        margin-left: 15%;
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
    option,
    select,
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
        margin-bottom: 30px;
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
        height: 129px;
        /* position: absolute; */
        /* margin-top: -70px; */
        /* margin-left: 10px; */
        background-color: black;
        width: 100%;
        justify-content: center;
        padding: 10px;
        box-sizing: border-box;
        display: flex;
    }

    .logo img {
        /* width: 36%; */
        /* border-radius: 100%; */
        /* width: 100%; */
        height: 100%;
        /* margin-left: 12%; */
    }

    .image-preview {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border: 1px solid #ddd;
    }

    .upload-container {
        display: flex;
        align-items: center;
        gap: 10px;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let response = "<?php echo $response; ?>";

        if (response === "success") {
            Swal.fire({
                title: 'Success!',
                text: 'Images updated successfully!',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = "VenderProfile.php";
            });
        } else if (response === "error") {
            Swal.fire({
                title: 'Error!',
                text: 'Images not uploaded. Please try again.',
                icon: 'error'
            });
        }
    });
</script>