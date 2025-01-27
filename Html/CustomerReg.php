<?php
include("db.php");
    if($conn->connect_error){
        die ("Connection error".$conn->connect_error);
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
        if($stmt->execute()){
            echo"Customer Registration successful";
        }
        elseif ($conn->errno === 1062) {
            echo"Email has been already registered :- ".$email;

        }
        else{
            echo"something went wrong contact to admit".$sql."<br>".$conn->error."And".$conn->errno;
        }
        $stmt->close();
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Registration</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/index.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Roboto+Slab:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">


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
        .ftext {
        text-align: center;
        background-color: black;
        color: white;
        padding: 10px;
        box-shadow: 0 0 0px 0px rgba(208, 141, 58, 0.57);
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
                        <a href="./VenderLogin.php">Vendor Login</a>
                        <a href="./CustomeLogin.php">Customer Login</a>
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

    <script>
        document.getElementById('vendorForm').addEventListener('submit', function (event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const passwordError = document.getElementById('passwordError');

            if (password !== confirmPassword) {
                event.preventDefault();
                passwordError.style.display = 'block';
            } else {
                passwordError.style.display = 'none';
            }
        });
    </script>



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
