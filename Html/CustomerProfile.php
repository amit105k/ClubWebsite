<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: VenderLogin.php");
    exit();
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <link rel="stylesheet" href="../css/index.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Roboto+Slab:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
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
        <a href="logout.php">Logout</a>
        

    </nav>


            <!-- ...this is profile details..-->
    <h2>Customer Profile</h2>
    <div class="details">
    <p><strong>ID:</strong> <?php echo htmlspecialchars($user['Sr']); ?></p>
    <p><sname>Business Name:</strong> <?php echo htmlspecialchars($user['Customer_Name']); ?></p>
    <p><strong>Contact No:</strong> <?php echo htmlspecialchars($user['Contact_No']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
    <p><strong>Address:</strong> <?php echo htmlspecialchars($user['Address']); ?></p>

    </div>
    <?php
    // header("Location: VenderLogin.php");
    // exit();
    session_destroy(); ?>
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

    h2 {
        text-align: center;
        color: #444;
        font-size: 24px;
        margin-bottom: 20px;
    }

    p {
        font-size: 18px;
        margin: 10px 0;
        line-height: 1.6;
    }

    p strong {
        color: #555;
    }

    /* a {
        display: inline-block;
        text-align: center;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        margin-top: 20px;
        transition: background-color 0.3s;
    }

    a:hover {
        background-color: #0056b3;
    } */

    .logout-container {
        text-align: center;
        margin-top: 30px;
    }
    .details{
        /* background-color: white; */
        text-align: center;
    }
</style>








<!-- <
session_start();

if (!isset($_SESSION['user'])) {
    echo "Please log in first.";
    exit();
}

// Get the user data from the session
$user_data = $_SESSION['user'];

// Display user profile data in a table

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
</head>
<body>
    <h2>Customer Profile</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
        <tr>
            <td><?php echo htmlspecialchars($user_data['id']); ?></td>
            <td><?php echo htmlspecialchars($user_data['name']); ?></td>
            <td><?php echo htmlspecialchars($user_data['mobile']); ?></td>
            <td><?php echo htmlspecialchars($user_data['email']); ?></td>
            <td><?php echo htmlspecialchars($user_data['address']); ?></td>
        </tr>
    </table>
</body>
</html> -->
