<?php
session_start();
include('../smtp/PHPMailerAutoload.php');
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    if ($action == 'sendOtp') {
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = $_POST['email'];

            $sql = "SELECT * FROM vender WHERE email = '$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $otp = rand(100000, 999999);
                $_SESSION['otp'] = $otp;
                $_SESSION['email'] = $email;

                $mail = new PHPMailer(true);
                try {
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'amitpss239@gmail.com';
                    $mail->Password = 'houu svmg tlpy hyqx';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;

                    $mail->setFrom('amitpss239@gmail.com', 'Club Admin');
                    $mail->addAddress($email);
                    $mail->isHTML(true);
                    $mail->Subject = "Password Forget";
                    $mail->Body = "
                        <h2>Reset Your Password</h2>
                        <p><strong>Your OTP for Password forget is:</strong><b> $otp</b></p>
                        <p> Please do not share this OTP with anyone. </p>
                        <p> OTP is valid for only 2 minutes in IST. </p>
                        
                        <p>Thank you for choosing us!</p>
                    ";

                    $mail->send();
                    echo json_encode(["status" => "success", "message" => "OTP sent to your email. Please check your inbox."]);
                } catch (Exception $e) {
                    echo json_encode(["status" => "error", "message" => "Email could not be sent: {$e->getMessage()}"]);
                }
            } else {
                echo json_encode(["status" => "error", "message" => "Email is not registered with us."]);
            }
        } else {
            echo json_encode(["status" => "error", "message" => "Email is required."]);
        }
    }

    if ($action == 'updatePassword') {
        if (isset($_POST['email'], $_POST['otp'], $_POST['newPassword'])) {
            $email = $_POST['email'];
            $otp = $_POST['otp'];
            $newPassword = $_POST['newPassword'];

            if ($_SESSION['email'] == $email && $_SESSION['otp'] == $otp) {
                $sql = "UPDATE vender SET password = '$newPassword' WHERE email = '$email'";

                if ($conn->query($sql) === TRUE) {
                    unset($_SESSION['otp']);
                    unset($_SESSION['email']);
                    echo "Password updated successfully";
                } else {
                    echo "Error updating password";
                }
            } else {
                echo "Invalid OTP";
            }
        } else {
            echo "All fields are required.";
        }
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vender Login</title>
    <link rel="stylesheet" href="../css/index.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Roboto+Slab:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
        <a href="#" id="admin">Admin</a>
        <!--..................drop down is here-->
        <div class="dropdown">
            <a href="">REGISTER / LOGIN</a>
            <div class="dropdown-content">
                <div class="sub-dropdown">
                    <a href="#">Register</a>
                    <div class="sub-dropdown-content">
                        <a href="./VenderReg.php">Vendor Register</a>
                        <a href="./CustomerReg.php">Customer Register</a>
                    </div>
                </div>
                <div class="sub-dropdown">
                    <a href="#">Login</a>
                    <div class="sub-dropdown-content">
                        <a href="./VenderLogin.php">Vendor Login</a>
                        <a href="./CustomeLogin.php">Customer Login</a>
                    </div>
                </div>
            </div>
        </div>

    </nav>
    <form id="venderLogin" method="POST" action="">
        <h2>Vendor Password Forget</h2>

        <label for="user">Enter Your Email</label>
        <input type="email" name="user" id="user" required>

        <span id="forget"><a href="javascript:void(0);" id="sendOtpBtn">Send OTP</a></span>

        <label for="otp">Enter OTP</label>
        <input type="text" name="otp" id="otp" required disabled>

        <div id="passwordFields" style="display: none;">
            <label for="newPassword">Enter New Password</label>
            <input type="password" name="newPassword" id="newPassword" required>

            <label for="confirmPassword">Confirm New Password</label>
            <input type="password" name="confirmPassword" id="confirmPassword" required>

            <button type="submit" id="submitBtn" disabled>Submit</button>
        </div>

        <a id="venderreg" href="VenderReg.php">Register</a>
        <a id="venderreg" href="VenderLogin.php">Login</a>
    </form>

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
    #user {
        margin-bottom: 0px;
    }

    #forget {
        /* background-color: #ccc !important; */
    }

    input[type='password'] {
        color: red;
        margin-bottom: 0;
    }

    #forget a {
        color: orange !important;
        cursor: pointer;
        text-align: right;
        display: inline-block;
        width: 95%;
        padding: 10px;
        text-decoration: none;
        /* padding: 10px;
        color: white;
        border: none;
        border-radius: 4px;
        margin-top: 10px;
        display: flow-root;*/
    }

    form {
        /* margin-top: 30px auto auto auto; */
        max-width: 400px;
        margin: 8% auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        text-align: center;
    }

    form h2 {
        margin-bottom: 20px;
    }

    label {
        display: block;
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


    input[type="submit"] {
        width: 100%;
        padding: 10px;
        /* background-color: #4CAF50; */
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        background-color: #45a049;
    }

    .ftext {
        text-align: center;
        background-color: black;
        color: white;
        padding: 10px;
        box-shadow: 0 0 0px 0px rgba(208, 141, 58, 0.57);
    }

    #venderreg {
        width: 95%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: inline-block;
        text-align: center;
        margin-top: 10px;
        text-decoration: none;
    }

    #venderreg:hover {
        background-color: #45a049;
    }
</style>


<script>
    let generatedOtp = null;

    document.getElementById('sendOtpBtn').addEventListener('click', function () {
        let email = document.getElementById('user').value;

        if (!email) {
            Swal.fire('Error', 'Please enter a valid email address.', 'error');
            return;
        }

        fetch('', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'email=' + email + '&action=sendOtp'
        })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    Swal.fire({
                        title: 'OTP Sent',
                        text: 'OTP has been sent successfully to your email. Please enter the OTP.',
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    }).then(() => {
                        document.getElementById('otp').disabled = false;
                        document.getElementById('submitBtn').disabled = false;
                        document.getElementById('passwordFields').style.display = 'block';
                    });
                } else {
                    Swal.fire('Error', data.message, 'error');
                }
            })
            .catch(error => {
                Swal.fire('Error', 'An error occurred. Please try again.', 'error');
            });
    });

    document.getElementById('venderLogin').addEventListener('submit', function (e) {
        e.preventDefault();

        let enteredOtp = document.getElementById('otp').value;
        let newPassword = document.getElementById('newPassword').value;
        let confirmPassword = document.getElementById('confirmPassword').value;

        if (enteredOtp !== generatedOtp) {
            Swal.fire('Error', 'Invalid OTP. Please re-enter the correct OTP.', 'error');
            return;
        }

        if (newPassword !== confirmPassword) {
            Swal.fire('Error', 'New password and confirm password do not match.', 'error');
            return;
        }

        fetch('', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'email=' + document.getElementById('user').value + '&newPassword=' + newPassword + '&action=updatePassword'
        })
            .then(response => response.text())
            .then(data => {
                if (data === "Password updated successfully") {
                    Swal.fire('Success', 'Your password has been updated successfully. You can now log in.', 'success')
                        .then(() => {
                            window.location.href = 'VenderLogin.php';
                        });
                } else {
                    Swal.fire('Error', data, 'error');
                }
            })
            .catch(error => {
                Swal.fire('Error', 'An error occurred while updating the password. Please try again.', 'error');
            });
    });
</script>