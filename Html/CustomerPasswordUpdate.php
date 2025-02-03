<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: VenderLogin.php");
    exit();
}
$user = $_SESSION['user'];

include("db.php");
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

$old = "SELECT Password FROM customerreg WHERE email=?";
$stmt = $conn->prepare($old);
$stmt->bind_param("s", $user['email']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $password = $row['Password'];
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];

    // Check if old password matches
    if ($password !== $oldpass) {
        echo json_encode(['success' => false, 'message' => 'Old password is incorrect']);
    } else {
        // Update password in the database
        $sql = "UPDATE customerreg SET Password=? WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $newpass, $user['email']);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Password updated successfully. Please login again.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error: ' . $stmt->error]);
        }
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
    <h2 id="h2">Customer Password Update</h2>
    <div class="profile">
        <div class="profile-left">
            <div class="logo">
                <img src="../image/amit.png" alt="image">
            </div>
            <ul>
                <li><a href="CustomerTicketBooking.php">Booking Ticket</a></li>
                <li><a href="CustomerBookingHistory.php">Booking History</a></li>
                <li><a href="CustomerProfileUpdate.php">Update Profile</a></li>
                <li><a href="CustomerPasswordUpdate.php">Update Passw</a></li>

            </ul>

        </div>
        <div class="details">
            <form action="" method="POST" id="passupdate">

                <label for="">Enter your Old Password</label>
                <input type="password" required name="oldpass">

                <label for="">Enter your New Password</label>
                <input type="password" required name="newpass" id="password">

                <label for="">Enter Confirm Password</label>
                <input type="password" required id="confirmPassword">
                <h3>your old password is: <?php echo htmlspecialchars($row['Password']) ?></h3>
                <p id="passwordError" style="display: none; color: red;"></p>

                <button type="submit">Update</button>
            </form>
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
        margin-left: 15%;
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


    form {
        max-width: 400px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    label {
        /* display: block; */
        margin-bottom: 8px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    .error {
        color: red;
        font-size: 0.9em;
        margin-bottom: 15px;
    }

    #vender {
        text-align: center;
        padding: 10px;
    }

    #vendorForm {
        margin-top: 30px;
    }

    .ftext {
        text-align: center;
        background-color: black;
        color: white;
        padding: 10px;
        box-shadow: 0 0 0px 0px rgba(208, 141, 58, 0.57);
    }
</style>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Function to validate the password and confirm password
    function validatePassword() {
        var oldPass = document.getElementById("oldpass").value;
        var newPass = document.getElementById("newpass").value;
        var confirmPass = document.getElementById("confirmpass").value;

        if (newPass !== confirmPass) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'New password and confirm password do not match!',
            });
            return false; // Prevent form submission
        }

        // Proceed with sending the form if passwords match
        updatePassword(oldPass, newPass);
        return false; // Prevent form submission
    }

    // Function to send AJAX request to PHP script
    function updatePassword(oldPass, newPass) {
        var formData = new FormData();
        formData.append('oldpass', oldPass);
        formData.append('newpass', newPass);

        fetch('your_php_script.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Show success message
                Swal.fire({
                    icon: 'success',
                    title: data.message,
                    showConfirmButton: true,
                }).then(() => {
                    window.location.href = "Logout.php"; 
                });
            } else {
                // Show error message
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data.message,
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    document.getElementById("submitBtn").addEventListener("click", validatePassword);
</script>


<!-- <script>
    document.getElementById("passupdate").addEventListener("submit", function (e) {
    e.preventDefault();

    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const passwordError = document.getElementById('passwordError');

    if (password !== confirmPassword) {
        passwordError.style.display = 'block';  
        passwordError.textContent = 'New Password and Confirm Password do not match';  
        return; 
    } else {
        passwordError.style.display = 'none'; 
    }

    const formData = new FormData(this);

    fetch('', { 
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                icon: 'success',
                title: 'Password Update Success',
                text: data.message,
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "http://localhost/amitclub/html/CustomeLogin.php";
                }
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'password not match',
                text: data.message,
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "CustomerProfile.php";
                }
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'There was an error while submitting the form.',
            confirmButtonText: 'OK'
        });
    });
});

</script> -->

<!-- <script>
document.getElementById("passupdate").addEventListener("submit", function (e) {
    e.preventDefault();

    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const passwordError = document.getElementById('passwordError');

    if (password !== confirmPassword) {
        passwordError.style.display = 'block';  
        passwordError.textContent = 'Passwords do not match';  
    } else {
        passwordError.style.display = 'none'; 
    }

    const formData = new FormData(this);

    fetch('', { 
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                icon: 'success',
                title: 'Registration Success',
                text: data.message,
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "http://localhost/amitclub/html/CustomeLogin.php";
                }
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Kindly Login',
                text: data.message,
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "http://localhost/amitclub/html/CustomeLogin.php";
                }
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'There was an error while submitting the form.',
            confirmButtonText: 'OK'
        });
    });
});
</script> -->