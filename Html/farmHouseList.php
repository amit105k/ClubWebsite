<?php
include("db.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM farmhouse";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Clubs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.8/dist/sweetalert2.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: white;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 3px solid #ddd;
        }
        th, td {
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
            max-width: 1200px;
            margin: 0 auto;
        }
        table tr th :last-child{
            background-color: blue;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2 style="text-align:center">All FarmHouse List</h2>

        <?php
        // Check if there are any records to display
        if ($result->num_rows > 0) {
            // Start the table
            echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image URL</th>
                        <th>Show Time</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Pin Code</th>
                        <th>Price</th>
                        <th>PromoCode</th>
                        <th>Promo Discount</th>
                        <th>Per Person Charg</th>
                        <th>About</th>
                        
                    </tr>";
            
            // Output each row of data
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["image_url"] . "</td>
                        <td>" . $row["show_time"] . "</td>
                        <td>" . $row["address"] . "</td>
                        <td>" . $row["city"] . "</td>
                        <td>" . $row["pincode"] . "</td>
                        <td>" . $row["price"] . "</td>
                        <td>" . $row["promocode"] . "</td>
                        <td>" . $row["promodis"] . "</td>
                        <td>" . $row["extraperson"] . "</td>
                        <td> <textarea>" . $row["about"] . "</textarea></td>
                       
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No clubs found in the database.</p>";
        }

        // Close the connection
        $conn->close();
        ?>

    </div>

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.8/dist/sweetalert2.all.min.js"></script>
</body>
</html>
