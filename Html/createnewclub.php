<?php


include("db.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $club_name = $_POST['club_name'];
    $image_url = $_POST['image_url'];
    $show_time = $_POST['show_time'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'];
    $book_tkt = $_POST['book_tkt'];
    $image_url1 = $_POST['image_url1'];
    $image_url2 = $_POST['image_url2'];
    $image_url3 = $_POST['image_url3'];

 
    $stmt = $conn->prepare("INSERT INTO club_overviews (club_name, image_url, show_time, address, city, postal_code, book_tkt,image_url1,image_url2,image_url3) 
                            VALUES (?, ?, ?, ?, ?, ?, ?,?,?,?)");
    $stmt->bind_param("sssssis", $club_name, $image_url, $show_time, $address, $city, $postal_code, $book_tkt,$image_url1, $image_url2, $image_url3);

    
    if ($stmt->execute()) {
       
        echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'Your data is created.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
              </script>";
    } else {
       
        echo "<script>
                Swal.fire({
                    title: 'Error!',
                    text: 'There was an issue with your submission. Please try again.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
              </script>";
    }

    
    $stmt->close();
   
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Club</title>
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.8/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .form-container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 10px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin: 10px 0 5px;
        }
        .form-container input[type="text"],
        .form-container input[type="url"],
        .form-container input[type="time"],
        .form-container input[type="number"] ,
        .form-container input[type="datetime-local"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .form-container input[type="submit"] {
            padding: 10px 15px;
            /* background-color: #007BFF; */
            background-color: #45a049;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        
      
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Create New Club</h2>
        <form action="" method="POST" id="createClubForm">
            <label for="club_name">Club Name:</label>
            <input type="text" id="club_name" name="club_name" required>
            
            <label for="image_url">Image URL:</label>
            <input type="url" id="image_url" name="image_url" required>
            
            <label for="show_time">Show Time:</label>
            <input type="datetime-local" id="show_time" name="show_time" required>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            
            <label for="city">City:</label>
            <input type="text" id="city" name="city" required>
            
            <label for="postal_code">Postal Code:</label>
            <input type="number" id="postal_code" name="postal_code" required>
            
            <label for="book_tkt">Link for Booking:</label>
            <input type="url" id="book_tkt" name="book_tkt" required>

            <label for="image_url1">Image URL 1:</label>
            <input type="url" id="image_url1" name="image_url" >

            <label for="image_url2">Image URL 2:</label>
            <input type="url" id="image_url2" name="image_url">

            <label for="image_url3">Image URL 3:</label>
            <input type="url" id="image_url3" name="image_url" >
            
            <input type="submit" value="Create Club">
        </form>
    </div>
</body>
</html>
