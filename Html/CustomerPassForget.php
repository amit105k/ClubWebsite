<?php
session_start();
include("db.php");
include('../smtp/PHPMailerAutoload.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    if ($action === 'sendOtp') {
        $email = $_POST['email'];
        $checkEmail = "SELECT email FROM customerreg WHERE email = ?";
        $stmt = $conn->prepare($checkEmail);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

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
                echo json_encode(['status' => 'success', 'message' => 'OTP has been sent to your email']);
            } catch (Exception $e) {
                echo json_encode(['status' => 'error', 'message' => 'OTP email failed to send']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'User is not registered with us']);
        }
    } elseif ($action === 'verifyOtp') {
        $userOtp = $_POST['otp'];
        if ($_SESSION['otp'] == $userOtp) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid OTP']);
        }
    } elseif ($action === 'updatePassword') {
        $newPassword =$_POST['newPassword'];
        $email = $_SESSION['email'];

        $updateQuery = "UPDATE customerreg SET password = ? WHERE email = ?";
        $stmt = $conn->prepare($updateQuery);
        $stmt->bind_param("ss", $newPassword, $email);

        if ($stmt->execute()) {
            unset($_SESSION['otp']);
            unset($_SESSION['email']);
            echo json_encode(['status' => 'success', 'message' => 'Password updated successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update password']);
        }
    }
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vender Login</title>
    <link rel="stylesheet" href="../css/index.css">
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Password Reset</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
    <form id="venderLogin">
    <h2>Customer Password Forget</h2>

    <label for="user">Enter Your Email</label>
    <input type="email" name="user" id="user" required>
    
    <span id="forget"><a href="javascript:void(0);" id="sendOtpBtn">Send OTP</a></span> <br>
    
    
    <!-- <label for="user">Enter OTP</label> -->
    <input type="text" name="otp" id="otp" required disabled placeholder="Enter 6 digit OTP">

    <div id="passwordFields" style="display: none;">
        <label for="newPassword">Enter New Password</label>
        <input type="password" name="newPassword" id="newPassword" required>

        <label for="confirmPassword">Confirm New Password</label>
        <input type="password" name="confirmPassword" id="confirmPassword" required>

        <button type="submit" id="submitBtn" disabled>Submit</button>
    </div>

    <a  id="venderreg" href="CustomerReg.php">Register</a>
    <a  id="venderreg" href="CustomeLogin.php">Login</a>
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
/* General Styles */
body {
    font-family: Arial, sans-serif;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}


form {
    max-width: 400px;
    margin: 8% auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color:background-color: #f9f9f9;
    text-align: center;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

form h2 {
    color: #333;
    margin-bottom: 20px;
}


label {
    display: block;
    font-weight: bold;
    margin: 10px 0 5px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    display: block;
}

#user {
    margin-bottom: 0px;
}

input[type='password'] {
    color: red;
    margin-bottom: 0;
}


#otp[disabled] {
    background-color: #e9ecef;
    cursor: not-allowed;
}


#forget {
    float: right;
}

#forget a {
    color: orange !important;
    cursor: pointer;
    text-align: right;
    display: inline-block;
    padding: 10px;
    text-decoration: none;
}

#forget a:hover {
    text-decoration: underline;
}

button, input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background 0.3s;
}

button:hover, input[type="submit"]:hover {
    background-color: #45a049;
}

#submitBtn:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

/* Password Fields */
#passwordFields {
    margin-top: 20px;
    display: none;
}

/* Footer Text */
.ftext {
    text-align: center;
    background-color: black;
    color: white;
    padding: 10px;
    box-shadow: 0 0 0px 0px rgba(208, 141, 58, 0.57);
}

/* Register & Login Buttons */
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
$(document).ready(function () {
    let generatedOtp = null;

    $("#sendOtpBtn").click(function () {
        let email = $("#user").val();
        if (!email) {
            Swal.fire('Error', 'Please enter a valid email address.', 'error');
            return;
        }

        $.post("", { email: email, action: 'sendOtp' }, function (response) {
            if (response.status === "success") {
                Swal.fire('Success', response.message, 'success');
                $("#otp").prop("disabled", false);
            } else {
                Swal.fire('Error', response.message, 'error');
            }
        }, "json");
    });

    $("#otp").on("input", function () {
        let otp = $(this).val();
        if (otp.length === 6) {
            $.post("", { otp: otp, action: 'verifyOtp' }, function (response) {
                if (response.status === "success") {
                    Swal.fire('Success', 'OTP verified. Enter new password.', 'success');
                    $("#passwordFields").show();
                    $("#submitBtn").prop("disabled", false);
                } else {
                    Swal.fire('Error', response.message, 'error');
                }
            }, "json");
        }
    });

    $("#venderLogin").submit(function (event) {
        event.preventDefault();

        let newPassword = $("#newPassword").val();
        let confirmPassword = $("#confirmPassword").val();

        if (newPassword !== confirmPassword) {
            Swal.fire('Error', 'Passwords do not match.', 'error');
            return;
        }

        $.post("", { newPassword: newPassword, action: 'updatePassword' }, function (response) {
            if (response.status === "success") {
                Swal.fire({
                    title: 'Success',
                    text: response.message,
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = "VenderLogin.php";
                });
            } else {
                Swal.fire('Error', response.message, 'error');
            }
        }, "json");
    });
});
</script>