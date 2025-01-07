<?php
include('db.php'); // Ensure this file connects to your database

// Fetch farmhouse data
$sql = "SELECT id, name FROM farmhouse";
$result = $conn->query($sql);
$clubs = [];
while ($row = $result->fetch_assoc()) {
    $clubs[] = $row;
}

// Handle delete request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']); // Sanitize the ID
    $stmt = $conn->prepare("DELETE FROM farmhouse WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Deleted!',
                    text: 'Your data has been deleted successfully.',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    confirmButtonColor: 'green'
                }).then(() => {
                    window.location.href = 'http://localhost/amitclub/html/farmDelete.php';
                });
            });
        </script>";
    } else {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Error!',
                    text: 'Failed to delete the farmhouse details.',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    confirmButtonColor: 'red'
                });
            });
        </script>";
    }
    $stmt->close();
    $conn->close();
    exit; // Prevent further processing
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Farmhouse</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            background-color: white;
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

        label {
            font-weight: bold;
        }

        select, input[type="submit"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Delete Farmhouse Details</h2>

    <!-- Delete Form -->
    <form action="" method="post" onsubmit="return confirmDelete(event);">
        <label for="id">Select Farmhouse to delete:</label>
        <select name="id" id="id" required>
            <option value="">Select Farmhouse</option>
            <?php foreach ($clubs as $club): ?>
                <option value="<?php echo $club['id']; ?>">
                    (ID: <?php echo $club['id']; ?>) <?php echo $club['name']; ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <input type="submit" value="Delete Club">
    </form>
</div>

<script>
function confirmDelete(event) {
    event.preventDefault(); // Prevent form submission
    const form = event.target;

    Swal.fire({
        title: 'Are you sure?',
        text: 'Do you really want to delete this farmhouse?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        confirmButtonColor: 'red',
        cancelButtonText: 'No, cancel!',
        cancelButtonColor: '#3085d6'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit(); 
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: 'Cancelled',
                text: 'Your data is safe :)',
                icon: 'info',
                confirmButtonText: 'OK'
            });
        }
    });

    return false; 
}
</script>
</body>
</html>
