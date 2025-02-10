<?php
session_start();

if (!isset($_SESSION['vender'])) {
    header("Location: VenderLogin.php");
    exit();
}
$vender = $_SESSION['vender'];

$logo = $_SESSION['logo'];

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

if (isset($_POST['delete_club'])) {
    $query = "DELETE FROM club_overviews WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $vender['email']);
    $stmt->execute($sql);


    if ($stmt->execute()) {
        echo "<script>
        Swal.fire({
            title: 'Success!',
            text: 'Your club has been deleted successfully!',
            icon: 'success'
        }).then(function() {
            window.location.href = 'VenderProfile.php'; 
        });
    </script>";
} else {
    echo "<script>
        alert('Error deleting club: " . $conn->error . "');
        </script>";
        }
    $stmt->close();

}
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "red",
            cancelButtonColor: "#4CAF50",
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, keep it'
        }).then((result) => {
            if (result.isConfirmed) {
               
                Swal.fire({
                    title: 'Success!',
                    text: 'Your club has been deleted successfully!',
                    icon: 'success',
                    confirmButtonText: 'OK'  
                }).then(function() {
                    
                    document.getElementById('delete-form').submit();
                    window.location.href = 'http://localhost/amitclub/html/deleteclub.php';
                });
            }
        });
    }
</script>
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



    <h2 id="h2"> Select Club to Delete </h2>
    <div class="profile">
        <div class="profile-left">
            <div class="logo">
                <img src="<?php echo $logo ?>" alt="Club images">
            </div>
            <ul>
                <li><a href="VenderClubList.php">Show Club Details</a></li>
                <li><a href="VenderClubCreate.php">Create New Club</a></li>
                <li><a href="VenderPriceUpdate.php">Price/Promo Cre</a></li>
                <li><a href="VenderClubUpdate.php">Update Club</a></li>
                <li><a href="VenderClubDelete.php">Delete Club</a></li>
                <li><a href="VenderUpdateGallery.php">Update Gallery</a></li>
                <li><a href="VenderPasswordUpdate.php">Change Password</a></li>
                <li> <a href="logout.php">Logout</a></li>
            </ul>


        </div>
        <div class="details container">
            <!-- <h2>Select Club to  Delete</h2> -->

            <form action="" method="get">
                <!-- <label for="id">Select Club ID to Edit:</label> -->
                <select name="id" id="id" required onchange="handleSelectChange(this)">
                    <option value="">Select Club</option>
                    <?php foreach ($clubs as $club): ?>
                        <option value="<?php echo $club['id']; ?>" <?php echo (isset($id) && $id == $club['id']) ? 'selected' : ''; ?>>
                            (ID: <?php echo $club['id']; ?>) <?php echo $club['club_name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <button type="submit">Select Club</button>
            </form>

            <?php if ($selected_club || isset($_GET['id']) && $_GET['id'] == 'new'): ?>
                <form action="" method="post" id="">

                    <br>
                    <label for="club_name">Club Name:</label>
                    <p><?php echo $selected_club ? $selected_club['club_name'] : ''; ?></p></br>

                    <label for="image_url">Image URL:</label></br>
                    <p><?php echo $selected_club ? $selected_club['image_url'] : ''; ?></p></br>

                    <label for="show_time">Show Time:</label></br>

                    <p><?php echo $selected_club ? $selected_club['show_time'] : ''; ?></p></br>

                    <label for="address">Address:</label></br>

                    <p><?php echo $selected_club ? $selected_club['address'] : ''; ?></p></br>

                    <label for="city">City:</label></br>

                    <p><?php echo $selected_club ? $selected_club['city'] : ''; ?></p></br>

                    <label for="postal_code">Postal Code:</label></br>

                    <p><?php echo $selected_club ? $selected_club['postal_code'] : ''; ?></p></br>

                    <label for="about">About of Clubs :-</label></br>
                    <p><?php echo $selected_club ? $selected_club['about'] : ''; ?></p> <br><br>

                    <button type="submit" name="delete_club" id="delete" onclick="confirmDelete()">Delete Club</button>
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
    .container {
        max-width: 600px;
        margin: 5px auto;
        padding: 20px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* h2 {
        text-align: center;
        margin-bottom: 30px;
    } */

    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    select{
        padding: 5px;
        font-size: 18px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
        border-radius: 4px;
        font-size: 16px;
    }

    button:hover {
        background-color: #4CAF50;

    }


    #delete:hover {
        background-color: red;
    }


    /** */
    body {
        font-family: Arial, sans-serif;

        background-color: #f4f4f9;
        color: #333;
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

    .profile-left {
        background-color: black;
        width: 15%;
    }

    .profile-left ul li {
        list-style-type: none;
        align-items: center;
        display: flex;
        margin-top: 5px;
        margin-left: 11%;
    }


    .profile-left ul li a {
        text-decoration: none;
        height: 100%;
        height: 100%;
        color: white;
        line-height: 50px;
    }

    .profile-left ul li a:hover {
        color: orange;
    }

    .profile {
        display: flex;
    }

    .logo {
        height: 15%;
        position: absolute;
        margin-top: -70px;
        background-color: black;
        width: 15%;
        padding: 10px;
        box-sizing: border-box;
    }

    .logo img {

        height: 100%;
        width: 100%;

    }

    form label {
        font-weight: bold;
    }
    form p{
        overflow: clip;

    }
</style>