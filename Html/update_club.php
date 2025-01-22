<?php
include('db.php');

$sql = "SELECT id, club_name FROM club_overviews";
$result = $conn->query($sql);
$clubs = [];
while ($row = $result->fetch_assoc()) {
    $clubs[] = $row;
}

$selected_club = null;
if (isset($_GET['id']) && $_GET['id'] != 'new') {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT * FROM club_overviews WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $selected_club_result = $stmt->get_result();
    $selected_club = $selected_club_result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $image_url = $conn->real_escape_string($_POST['image_url']);
    $club_name = $conn->real_escape_string($_POST['club_name']);
    $show_time = $conn->real_escape_string($_POST['show_time']);
    $address = $conn->real_escape_string($_POST['address']);
    $city = $conn->real_escape_string($_POST['city']);
    $postal_code = $conn->real_escape_string($_POST['postal_code']);
    $about = $conn->real_escape_string($_POST['about']);

    $sql = "UPDATE club_overviews SET 
                image_url = ?, 
                club_name = ?, 
                show_time = ?, 
                address = ?, 
                city = ?, 
                postal_code = ?, 
                about = ?
                 
            WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssi", $image_url, $club_name, $show_time, $address, $city, $postal_code, $about, $id);

    if ($stmt->execute()) {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Club details have been updated successfully.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href = 'update_club.php';
                    });
                });
              </script>";
    } else {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Failed to update the club details.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
              </script>";
    }
    
    $stmt->close();
}


// $sql = "SELECT id, club_name FROM club_overviews";
// $result = $conn->query($sql);
// $clubs = [];
// while ($row = $result->fetch_assoc()) {
//     $clubs[] = $row;
// }

// $selected_club = null;
// if (isset($_GET['id']) && $_GET['id'] != 'new') {
//     $id = $_GET['id'];
//     $sql = "SELECT * FROM club_overviews WHERE id = $id";
//     $selected_club_result = $conn->query($sql);
//     $selected_club = $selected_club_result->fetch_assoc();
// }

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Club Details</title>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input[type="text"],
        input[type="datetime-local"] {
            padding: 10px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }
        textarea{
            padding: 0;
            width: 99%;
            height: auto;
            margin: 0;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        #id {
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Update Club Details</h2>

        <form action="update_club.php" method="get">
            <label for="id">Select Club ID to Edit:</label>
            <select name="id" id="id" required onchange="handleSelectChange(this)">
                <option value="">Select Club</option>
                <?php foreach ($clubs as $club): ?>
                    <option value="<?php echo $club['id']; ?>" <?php echo (isset($id) && $id == $club['id']) ? 'selected' : ''; ?>>
                        (ID: <?php echo $club['id']; ?>) <?php echo $club['club_name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Select Club">
        </form>

        <?php if ($selected_club || isset($_GET['id']) && $_GET['id'] == 'new'): ?>
            <form action="update_club.php" method="post">
                <input type="hidden" name="id" value="<?php echo $selected_club ? $selected_club['id'] : ''; ?>">

                <label for="image_url">Image URL:</label>
                <input type="text" id="image_url" name="image_url"
                    value="<?php echo $selected_club ? $selected_club['image_url'] : ''; ?>" required><br><br>

                <label for="club_name">Club Name:</label>
                <input type="text" id="club_name" name="club_name"
                    value="<?php echo $selected_club ? $selected_club['club_name'] : ''; ?>" required><br><br>

                <label for="show_time">Show Time:</label>
                <input type="text" id="show_time" name="show_time"
                    value="<?php echo $selected_club ? $selected_club['show_time'] : ''; ?>"><br><br>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address"
                    value="<?php echo $selected_club ? $selected_club['address'] : ''; ?>"><br><br>

                <label for="city">City:</label>
                <input type="text" id="city" name="city"
                    value="<?php echo $selected_club ? $selected_club['city'] : ''; ?>"><br><br>

                <label for="postal_code">Postal Code:</label>
                <input type="text" id="postal_code" name="postal_code"
                    value="<?php echo $selected_club ? $selected_club['postal_code'] : ''; ?>"><br><br>

                <label for="about">About of Clubs :-</label>
                <textarea type="text" id="book_tkt" name="about"
                    value=""><?php echo $selected_club ? $selected_club['about'] : ''; ?>
                </textarea><br><br>

                <!-- <label for="book_tkt">Link for Booking:</label>
                <input type="text" id="book_tkt" name="book_tkt"
                    value="<?php echo $selected_club ? $selected_club['book_tkt'] : ''; ?>"><br><br> -->

                <input type="submit" name="submit" value="Update Club">
            </form>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.js"></script>
</body>

</html>