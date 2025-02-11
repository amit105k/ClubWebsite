<?php
session_start();
include("db.php");

if (!isset($_SESSION['vender'])) {
    die("You need to log in first.");
}

$emaill = $_SESSION['vender']; 
$email = $emaill['email'];
$targetDir = "uploads/";
$response = "";

if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Fetch existing images from the database
$stmt = $conn->prepare("SELECT image_url1, image_url2, image_url3 FROM club_overviews WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();

// Handle image upload
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['upload'])) {

    // **Delete old images from server if they exist**
    foreach (['image_url1', 'image_url2', 'image_url3'] as $index => $column) {
        if (!empty($row[$column]) && file_exists($row[$column])) {
            unlink($row[$column]); // Remove old image file
        }
    }

    // **Remove old image paths from the database**
    $stmt = $conn->prepare("UPDATE club_overviews SET image_url1 = NULL, image_url2 = NULL, image_url3 = NULL WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->close();

    // **Upload new images**
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

    // **Update database with new images**
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .image-preview {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border: 1px solid #ddd;
        }
        .upload-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
    </style>
</head>
<body>

<h2>Upload / Update 3 Images</h2>
<form action="" method="post" enctype="multipart/form-data">

    <div class="upload-container">
        <?php if (!empty($row['image_url1']) && file_exists($row['image_url1'])): ?>
            <img src="<?php echo $row['image_url1']; ?>" class="image-preview" alt="Image 1">
        <?php else: ?>
            <span>No image uploaded</span>
        <?php endif; ?>
        <input type="file" name="image1" required>
    </div><br>

    <div class="upload-container">
        <?php if (!empty($row['image_url2']) && file_exists($row['image_url2'])): ?>
            <img src="<?php echo $row['image_url2']; ?>" class="image-preview" alt="Image 2">
        <?php else: ?>
            <span>No image uploaded</span>
        <?php endif; ?>
        <input type="file" name="image2" required>
    </div><br>

    <div class="upload-container">
        <?php if (!empty($row['image_url3']) && file_exists($row['image_url3'])): ?>
            <img src="<?php echo $row['image_url3']; ?>" class="image-preview" alt="Image 3">
        <?php else: ?>
            <span>No image uploaded</span>
        <?php endif; ?>
        <input type="file" name="image3" required>
    </div><br>

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
