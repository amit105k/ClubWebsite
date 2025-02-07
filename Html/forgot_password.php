<?php
session_start();
include('../smtp/PHPMailerAutoload.php');
include("db.php");

$generatedOtp = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    // Send OTP to email
    if ($action == 'sendOtp') {
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = $_POST['email'];
    
            // Check if the email exists in the database
            $sql = "SELECT * FROM vender WHERE email = '$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Email found, proceed with sending OTP
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
                    echo json_encode(["status" => "success", "otp" => $otp]);
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

    // Update password after OTP verification
    if ($action == 'updatePassword') {
        if (isset($_POST['email'], $_POST['otp'], $_POST['newPassword'])) {
            $email = $_POST['email'];
            $otp = $_POST['otp'];
            $newPassword = $_POST['newPassword'];

            // Check if the email and OTP in the session match
            if ($_SESSION['email'] == $email && $_SESSION['otp'] == $otp) {
                // If OTP matches, update the password
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 400px;
            margin: 100px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Password Reset</h2>
    <div id="otpForm">
        <div class="form-group">
            <input type="email" id="user" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <button id="sendOtpBtn">Send OTP</button>
        </div>
        <div id="message" class="error"></div>
    </div>

    <div id="passwordForm" class="hidden">
        <div class="form-group">
            <input type="text" id="otp" placeholder="Enter OTP" required>
        </div>
        <div class="form-group">
            <input type="password" id="newPassword" placeholder="Enter new password" required>
        </div>
        <div class="form-group">
            <input type="password" id="confirmPassword" placeholder="Confirm new password" required>
        </div>
        <div class="form-group">
            <button id="submitBtn">Reset Password</button>
        </div>
        <div id="passwordMessage" class="error"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                title: 'Success',
                text: 'OTP sent to your email.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                generatedOtp = data.otp;
                document.getElementById('otp').disabled = false;
                document.getElementById('submitBtn').disabled = false;
                document.getElementById('passwordForm').classList.remove('hidden');
            });
        } else {
            document.getElementById('message').innerText = data.message;
        }
    })
    .catch(error => {
        Swal.fire('Error', 'There was an error, please try again.', 'error');
    });
});

document.getElementById('submitBtn').addEventListener('click', function () {
    let enteredOtp = document.getElementById('otp').value;
    let newPassword = document.getElementById('newPassword').value;
    let confirmPassword = document.getElementById('confirmPassword').value;

    if (enteredOtp === generatedOtp) {
        if (newPassword === confirmPassword) {
            fetch('', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'email=' + document.getElementById('user').value + '&newPassword=' + newPassword + '&action=updatePassword'
            })
            .then(response => response.text())
            .then(data => {
                if (data === "Password updated successfully") {
                    Swal.fire('Success', 'Your password has been updated. Kindly login.', 'success')
                        .then(() => {
                            window.location.href = 'VendorLogin.php';
                        });
                } else {
                    document.getElementById('passwordMessage').innerText = data;
                }
            });
        } else {
            document.getElementById('passwordMessage').innerText = 'New password and confirm password do not match.';
        }
    } else {
        document.getElementById('passwordMessage').innerText = 'Invalid OTP. Please re-enter.';
    }
});
</script>

</body>
</html>
