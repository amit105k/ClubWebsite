<?php
include("db.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function fetchClubs($conn) {
    $sql = "SELECT id, club_name FROM club_overviews";
    $result = $conn->query($sql);

    $clubs = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $clubs[] = $row;
        }
    }
    return $clubs;
}

$selected_club = null;
if (isset($_GET['club_name'])) {
    $club_id = intval($_GET['club_name']);
    $sql = "SELECT * FROM club_overviews WHERE id = $club_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $selected_club = $result->fetch_assoc();
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
    $delete_id = intval($_POST['delete_id']);
    $delete_sql = "DELETE FROM club_overviews WHERE id = $delete_id";
    if ($conn->query($delete_sql) === TRUE) {
        echo "<script>
            Swal.fire({
                title: 'Success!',
                text: 'Your club has been deleted successfully!',
                icon: 'success'
            }).then(function() {
                window.location.href = 'http://localhost/amitclub/html/deleteclub.php'; // Redirect to your page after success
            });
        </script>";
    } else {
        echo "<script>
            alert('Error deleting club: " . $conn->error . "');
        </script>";
    }
}

$clubs = fetchClubs($conn);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Club Details</title>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "red",
            cancelButtonColor: "#4CAF50",
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, keep it'
        }).then((result) => {
            if (result.isConfirmed) {
               
                Swal.fire({
                    title: 'Success!',
                    text: 'Your club has been deleted successfully!',
                    icon: 'success',
                    confirmButtonText: 'OK'  
                }).then(function() {
                    
                    document.getElementById('delete-form').submit();
                    window.location.href = 'http://localhost/amitclub/html/deleteclub.php';
                });
            }
        });
    }
</script>
</head>
<body>
<div class="container">
<h2>Delete Club Details</h2>
    <form action="" method="GET">
        <label for="club_name"><b>Select Club:-</b></label>
        <select id="club_name" name="club_name" required onchange="this.form.submit()">
            <option value="">-- Select Club --</option>
            <?php foreach ($clubs as $club): ?>
                <option value="<?= $club['id'] ?>" <?= (isset($_GET['club_name']) && $_GET['club_name'] == $club['id']) ? 'selected' : '' ?>>
                    <?= $club['id'] ?> - <?=($club['club_name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>

    <?php if ($selected_club): ?>
        <div>
            <p><strong>Club Name:</strong><br> <?php echo $selected_club ? $selected_club['club_name'] :'' ?></p>
            <p><strong>Date:</strong><br><?php echo $selected_club ? $selected_club['show_time'] :'' ?></p>
            <p><strong>Image URL:</strong><?php echo $selected_club ? $selected_club['image_url'] :'' ?></p>
            <p><strong>Address:</strong> <br><?php echo $selected_club ? $selected_club['address'].','.$selected_club['city'].','.$selected_club['postal_code']:'' ?></p>
            <p><strong>Booking Link:</strong><br><?php echo $selected_club ? $selected_club['book_tkt'] :'' ?></p>
            <p id="about"><strong>About:</strong><br> <?php echo $selected_club ? $selected_club['about'] :'' ?></p>


            <form action="" method="POST" id="delete-form" style="margin-top: 20px;">
                <input type="hidden" name="delete_id" value="<?= $selected_club['id'] ?>">
                <button type="button" onclick="confirmDelete()" style="padding: 10px 20px; border: none; cursor: pointer;">
                    Delete Club
                </button>
            </form>
        </div>
    <?php endif; ?>
    </div>

</body>
</html>
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
            background-color:white;
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

        button {
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

        button:hover {
            background-color:red;
        }

        #id {
            padding: 10px;
        }
        div{
            color: while;
        }
        #about{
            text-align: justify;
        }
        #club_name{
            padding: 10px;
        }
    </style>
   