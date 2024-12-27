<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queries</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Roboto+Slab:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Roboto+Slab:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto+Slab:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        /* Navbar Styles */
        nav {
            /* background-color: hsl(202, 75%, 47%); */
            background-color: black;
            padding: 10px;
            text-align: center;
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        nav img {
            margin-top: -15px;
            margin-left: -21px;
        }

        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-transform: uppercase;
        }

        nav a:hover {
            color: orange;
        }

        nav h4 {
            font-size: 28px;
            color: white;
            position: absolute;
            left: 10px;
            font-family: "Dancing Script", cursive;
            font-optical-sizing: auto;
            font-style: normal;
        }

        nav h3 {
            font-size: 22px;
            color: white;
            position: absolute;
            right: 15px;
            font-family: "Dancing Script", cursive;
            font-optical-sizing: auto;
            font-style: normal;
        }


        /* ..............footer..................... */

        .footer {
            background-color: black;
            color: white;
            display: flex;
        }

        .fleft {
            /* background-color: green; */
            width: 30%;
            margin-left: 5%;
            padding: 20px;
        }

        .fleft p {
            padding: 5px;
            text-align: justify;
        }

        .fleft h4 {
            font-size: 22px;
            margin-bottom: 8px;
            font-style: italic;
        }

        .fright {
            display: flex;
            justify-content: space-between;
            text-align: center;
            margin-right: 5%;
            /* background-color: red; */
            width: 60%;
            padding: 20px;
        }

        .fright ul {
            list-style-type: none;
            line-height: 30px;
            text-align: left;
            width: 30%;
        }

        .fright span {
            font-weight: bold;
            font-size: 18px;
        }

        .fa-brands {
            font-size: 22px;
            color: white;
            padding: 10px;
            border: .2px solid white;
            border-radius: 8px;
            /* background-color: black; */
        }

        .fa-brands:hover {
            background-color: #4CAF50;
        }

        .ftext {
            text-align: center;
            background-color: black;
            color: white;
            padding: 10px;
        }

        .hr {
            background-color: white;
            width: 100%;
            height: 1px;
        }


        .close{
            background-color: red;
            display:inline-block;
            padding: 10px;
            cursor: pointer;
            right: 0;
            position: absolute;
            color: white;
            border-radius: 5px;
            margin-top: 5px;        
        }
        .close a{
            color: white;
            text-decoration: none;
            font-size: 22px;
        }
        /* .....................................table is here.............................. */


     

    table {
        width: 95%;
        border-collapse: collapse;
        margin-top: 20px;
        margin-bottom: 20px;
        /* overflow: scroll; */
        margin-left: 2.5%;
    }

    table,
    th,
    td {
        border: 3px solid #ddd;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .container {
        width: 100%;
        /* max-width: 1200px; */
        margin: 0 auto;
        /* overflow-x: scroll; */
    }
    .container h2{
        margin-top: 20px;
    }

    table tr th :last-child {
        background-color: blue;
    }
    </style>
</head>

<body>
    <nav>
        <h4>The Noida Clubs</h4>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="service.php">Services</a>
        <!-- <a href="#clubs">Clubs</a>
        <a href="#clubs">Gallery</a> -->
        <a href="contact.php">Contact Us</a>
        <a href="../Html/buyticket.html">Buy Tickets</a><img src="../image/new.gif" alt="">
        <a href="../Html/admin.php">Admin</a>
    </nav>
    <div class="close"><a href="http://localhost/amitclub/Html/admin.php">close</a></div>
    <!-- content is here......................................... -->


    <?php
    include("db.php");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM msg";
    $result = $conn->query($sql);

    ?>



    <div class="container">
        <h2 style="text-align:center">All Queries</h2>

        <?php
        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Sr</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th> Query</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["Sr"] . "</td>
                        <td>" . $row["Name"] . "</td>
                        <td>" . $row["Mobile"] . "</td>
                        <td>" . $row["Email"] . "</td>
                        <td>" . $row["Query"] . "</td>
                        
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No club Queries found in the database.</p>";
        }

        $conn->close();
        ?>

    </div>





    <!-- .........................footer is here.............................. -->


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
