<?php
include("db.php");
    if($conn->connect_error){
        die ("Connection faild".$conn->connect_error);

    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $customerName=$_POST['customerName'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $contactNo=$_POST['contactNo'];
        $address=$_POST['address'];
        

        $sql="INSERT INTO customerreg (Customer_Name,email,Password,Contact_No,Address)VALUES(?,?,?,?,?)";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("sssis",$customerName,$email,$password,$contactNo, $address);
        if($conn->connect_error === 1062){
            echo"User has been already Registered";
        }
        else if($stmt->execute()){
            echo"Customer Registration successful";
        }
        else{
            echo"something went wrong contact to admit".$sql."<br>".$conn->error;
        }
       

//     $stmt->close();
//     $conn->close();
//
//   if (!$stmt->execute() && $conn->errno === 1062) { 
//         echo json_encode(["status" => "email", "message" => "Your email is already registered with us."]);
//     } elseif ($stmt->execute()) {
//         echo json_encode(["status" => "success", "message" => "Customer Registration Success"]);
//     } else {
//         echo json_encode(["status" => "error", "message" => "Something went wrong. Please contact the admin."]);
//     }

    // $stmt->close();
    // $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <style>
        body {
            /* font-family: Arial, sans-serif; */
            /* margin: 20px; */
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

        .error {
            color: red;
            font-size: 0.9em;
            margin-bottom: 15px;
        }
        #vender{
            text-align: center;
            padding: 10px;
        }
        #vendorForm{
            margin-top: 30px;
        }
    </style>
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
                        <a href="http://localhost/amitclub/html/VenderLogin">Vendor Login</a>
                        <a href="http://localhost/amitclub/html/CustomeLogin">Customer Login</a>
                    </div>
                </div>
            </div>
        </div>

    </nav>
    <form id="vendorForm" method="POST" action="">
        <h2 id="vender">Customer Registration</h2>

        <label for="clientName">Customer Name</label>
        <input type="text" id="clientName" name="customerName" required>

        <label for="email">Email ID</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="confirmPassword">Confirm Password</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <label for="contactNo">Contact No</label>
        <input type="text" id="contactNo" name="contactNo" required minlength="10" maxlength="10"
            oninput="this.value = this.value.replace(/[^0-9]/g, '');" title="Please enter a valid Mobile Number">

        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>

        <div id="passwordError" style="color: red; display: none;">Passwords do not match.</div>

        <button type="submit">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('vendorForm').addEventListener('submit', function (event) {
        event.preventDefault(); 

        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        const passwordError = document.getElementById('passwordError');

        if (password !== confirmPassword) {
            passwordError.style.display = 'block';
            return; 
        } else {
            passwordError.style.display = 'none';
        }
    })

    //     const formData = new FormData(this);

    //     fetch('', {
    //         method: 'POST',
    //         body: formData
    //     })
    //     .then(response => response.json())
    //     .then(data => {
    //         if (data.status === 'success') {
    //             Swal.fire({
    //                 icon: 'success',
    //                 title: 'Success',
    //                 text: 'Customer Registrarion success',
    //             }).then(() => {
    //                 location.reload();
    //             });
    //         } else if (data.status === 'email') {
    //             Swal.fire({
    //                 icon: 'error',
    //                 title: 'Error',
    //                 text: 'Email has been already registered with us',
    //             });
    //         }
    //     })
    //     .catch(error => {
    //         console.error('Error:', error);
    //         Swal.fire({
    //             icon: 'error',
    //             title: 'Error',
    //             text: 'An unexpected error occurred. Please try again later.',
    //         });
    //     });
    // });

</script>
</body>
</html>
