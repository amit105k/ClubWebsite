<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);?>
<?php
if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])&& isset($_POST['message']) ) {
    
    $fname = $_POST['name'];
    $email = $_POST['phone'];
    $mobile = $_POST['email'];
    $Message = $_POST['message'];

    $html = "
        <table>
            <tr><td>Name :</td><td>$fname</td></tr>
            <tr><td>Email :</td><td>$email</td></tr>
            <tr><td>Mobile :</td><td>$mobile</td></tr>
            <tr><td>Message :</td><td>$Message</td></tr>
          
        </table>";


    include('../smtp/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true;
    $mail->Username="amitpss239@gmail.com";
    $mail->Password="houu svmg tlpy hyqx";
    $mail->SetFrom("amitpss239@gmail.com");
    $mail->addAddress("amitpss239@gmail.com");
    $mail->IsHTML(true);
    $mail->Subject = "New Enquiry";
    $mail->Body = $html;
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    
    if($mail->send()){
        echo "Your Query is Successful Submitted";
    }else{
        echo"Something Went Wrong";
    }

}

// .......form goes to database ......................................

include("db.php");
$fname = $_POST['name'];
$email = $_POST['phone'];
$mobile = $_POST['email'];
$Message = $_POST['message'];


if($conn->connect_error){
    die('Connection failed :'.$conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into msg(Name,  Mobile,Email, Query) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fname, $email, $mobile, $Message);

    if ($stmt->execute()) {
        echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'Your message has been sent successfully.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(function() {
                    window.location.href = 'http://localhost/amitclub/html/contact.php'; 
                });
              </script>";
    } else {
        echo "<script>
                Swal.fire({
                    title: 'Error!',
                    text: 'There was an issue saving your message.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
