<?php
session_start();
include("db.php");

if (!isset($_SESSION['vender'])) {
    die("You need to log in first.");
}

$emaill = $_SESSION['vender']; 
$email=$emaill['email'];
$targetDir = "uploads/";
$response = ""; // To track the success or failure of the process

if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true); // Create directory if it does not exist
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['upload'])) {
    $uploadedFiles = [];

    for ($i = 1; $i <= 3; $i++) {
        $fileKey = "image" . $i;
        if (isset($_FILES[$fileKey]) && $_FILES[$fileKey]['error'] == 0) {
            $fileName = basename($_FILES[$fileKey]["name"]);
            $targetFilePath = $targetDir . time() . "_" . $fileName;
            $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

            // Allowed file types
            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
            if (in_array($fileType, $allowedTypes)) {
                if (move_uploaded_file($_FILES[$fileKey]["tmp_name"], $targetFilePath)) {
                    $uploadedFiles[] = $targetFilePath;
                } else {
                    $response = "error";
                }
            } else {
                $response = "error";
            }
        } else {
            $response = "error";
        }
    }

    // If all 3 images are uploaded successfully, update the database
    if (count($uploadedFiles) === 3) {
        $stmt = $conn->prepare("UPDATE club_overviews SET image_url1 = ?, image_url2 = ?, image_url3 = ? WHERE email = ?");
        $stmt->bind_param("ssss", $uploadedFiles[0], $uploadedFiles[1], $uploadedFiles[2], $email);

        if ($stmt->execute()) {
            $response = "success";
        } else {
            $response = "error";
        }
        $stmt->close();
    } else {
        $response = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Include SweetAlert -->
</head>
<body>

<h2>Upload 3 Images</h2>
<form action="" method="post" enctype="multipart/form-data">
    <label>Image 1:</label>
    <input type="file" name="image1" required><br><br>

    <label>Image 2:</label>
    <input type="file" name="image2" required><br><br>

    <label>Image 3:</label>
    <input type="file" name="image3" required><br><br>

    <h3><?php echo htmlspecialchars($email); ?></h3>

    <button type="submit" name="upload">Upload Images</button>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let response = "<?php echo $response; ?>";

        if (response === "success") {
            Swal.fire({
                title: 'Success!',
                text: 'Images updated successfully!',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = "VenderProfile.php"; 
            });
        } else if (response === "error") {
            Swal.fire({
                title: 'Error!',
                text: 'Images not uploaded. Please try again.',
                icon: 'error'
            });
        }
    });
</script>


</body>
</html>
