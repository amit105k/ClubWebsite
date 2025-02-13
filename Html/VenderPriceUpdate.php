<?php
session_start();

if (!isset($_SESSION['vender'])) {
    header("Location: VenderLogin.php");
    exit();
}
$vender = $_SESSION['vender'];

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


// ...................................

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $price = $conn->real_escape_string($_POST['price']);
    $promocode = $conn->real_escape_string($_POST['promocode']);
    $promodis = $conn->real_escape_string($_POST['promodis']);
    $extraperson = $conn->real_escape_string($_POST['extraperson']);

    $sql = "UPDATE club_overviews SET 
                price = ?, 
                promocode = ?, 
                promodis = ?, 
                extraperson = ? 
            WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isiii", $price, $promocode, $promodis, $extraperson, $id);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Club details have been updated successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to update the club details.']);
    }

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price/Promo Cre/Upd</title>
    <link rel="stylesheet" href="../css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                <li><a href="VenderPriceUpdate.php">Price/Cupon</a></li>
                <li><a href="VenderClubUpdate.php">Update Club</a></li>
                <li><a href="VenderUpdateGallery.php">Gallery</a></li>
                <li><a href="VenderClubDelete.php">Delete Club</a></li>
                <li><a href="VenderPasswordUpdate.php">Change Password</a></li>
                <li> <a href="logout.php">Logout</a></li>
            </ul>

        </div>
        <div class="details">
            <h2>Update Club Details</h2>

            <form action="" method="get">
                <label for="id">Select Club ID to Edit:</label>
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
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $selected_club ? $selected_club['id'] : ''; ?>">

                    <label for="image_url">Price:</label>
                    <input type="text" id="image_url" name="price"
                        value="<?php echo $selected_club ? $selected_club['price'] : ''; ?>" required><br><br>

                    <label for="club_name">Promocode:</label>
                    <input type="text" id="club_name" name="promocode"
                        value="<?php echo $selected_club ? $selected_club['promocode'] : ''; ?>" ><br><br>

                    <label for="show_time">promodis:</label>
                    <input type="text" id="show_time" name="promodis"
                        value="<?php echo $selected_club ? $selected_club['promodis'] : ''; ?>"><br><br>

                    <label for="address">extraperson:</label>
                    <input type="text" id="address" name="extraperson"
                        value="<?php echo $selected_club ? $selected_club['extraperson'] : ''; ?>"><br><br>


                        <input type="submit" name="submit" value="Update Club">
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
</style>

      <script>
        document.getElementById('updateForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);
            fetch('', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    Swal.fire({
                        title: 'Success!',
                        text: data.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href = 'VenderProfile.php';  
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: data.message,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    title: 'Error!',
                    text: 'Something went wrong!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        });
</script>