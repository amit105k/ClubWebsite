<?php
session_start();
include("db.php");
include('../smtp/PHPMailerAutoload.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    if ($action === 'sendOtp') {
        $email = $_POST['email'];
        $checkEmail = "SELECT email FROM vender WHERE email = ?";
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

        $updateQuery = "UPDATE vender SET password = ? WHERE email = ?";
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
    <title>Vendor Password Reset</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<form id="venderLogin">
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

    <a href="VenderReg.php">Register</a>
    <a href="VenderLogin.php">Login</a>
</form>

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

</body>
</html>
<style>
    /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Form Container */
#venderLogin {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    width: 350px;
    text-align: center;
}

/* Heading */
#venderLogin h2 {
    color: #333;
    margin-bottom: 20px;
}

/* Input Fields */
#venderLogin label {
    display: block;
    text-align: left;
    font-weight: bold;
    margin: 10px 0 5px;
}

#venderLogin input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Disabled Input */
#otp[disabled] {
    background-color: #e9ecef;
    cursor: not-allowed;
}

/* OTP Button */
#forget a {
    display: inline-block;
    color: #007bff;
    font-size: 14px;
    text-decoration: none;
    margin-bottom: 10px;
    cursor: pointer;
}

#forget a:hover {
    text-decoration: underline;
}

/* Submit Button */
#submitBtn {
    width: 100%;
    background-color: #28a745;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s;
}

#submitBtn:hover {
    background-color: #218838;
}

#submitBtn:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

/* Links */
a#venderreg {
    display: inline-block;
    margin-top: 10px;
    text-decoration: none;
    font-size: 14px;
    color: #007bff;
}

a#venderreg:hover {
    text-decoration: underline;
}

/* Password Fields */
#passwordFields {
    margin-top: 20px;
}

</style>