<?php

include("db.php");
session_start();

if (!isset($_SESSION['vender'])) {
    echo "<script>alert('Please log in first');</script>";
    header("Location: VenderLogin.php");
    exit();
}

$vender = $_SESSION['vender'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $image1 = $_FILES['image1'];
    $image2 = $_FILES['image2'];
    $image3 = $_FILES['image3'];
    $image4 = $_FILES['amit'];

    if ($image1['error'] !== UPLOAD_ERR_OK || $image2['error'] !== UPLOAD_ERR_OK || $image3['error'] !== UPLOAD_ERR_OK || $image4['error'] !== UPLOAD_ERR_OK) {
        echo json_encode(['success' => false, 'message' => 'One or more images failed to upload.']);
        exit();
    }

    $image1Data = file_get_contents($image1['tmp_name']);
    $image2Data = file_get_contents($image2['tmp_name']);
    $image3Data = file_get_contents($image3['tmp_name']);
    $image4Data = file_get_contents($image3['tmp_name']);

    try {
        $stmt = $pdo->prepare("UPDATE club_overviews SET image_url1 = ?, image_url2 = ?, image_url3 ,amit= ? WHERE email = ?");
        $stmt->execute([$image1Data, $image2Data, $image3Data,$image4Data, $vender['email']]);

        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Images</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <h2>Update Your Club Overview Images</h2>
    
    <form id="imageForm" enctype="multipart/form-data" method="POST" action="">

        <label for="image1">Image 1:</label>
        <input type="file" id="image1" name="image1" accept="image/*" required><br><br>

        <label for="image2">Image 2:</label>
        <input type="file" id="image2" name="image2" accept="image/*" required><br><br>

        <label for="image3">Image 3:</label>
        <input type="file" id="image3" name="image3" accept="image/*" required><br><br>


        <label for="image3">Amit:</label>
        <input type="file" id="image3" name="amit" accept="image/*" required><br><br>

        <label for="">Club name is</label>
        <h3><?php echo htmlspecialchars($vender['email']); ?></h3>
        <p class="paragraph"><strong>ID:</strong> <?php echo htmlspecialchars($vender['id']); ?></p>
        <p class="paragraph"><strong>Email:</strong> <?php echo htmlspecialchars($vender['email']); ?></p>

        <button type="submit">Update</button>
    </form>

    <script>
        document.getElementById('imageForm').addEventListener('submit', function(e) {
            e.preventDefault(); 

            const formData = new FormData();
            formData.append('image1', document.getElementById('image1').files[0]);
            formData.append('image2', document.getElementById('image2').files[0]);
            formData.append('image3', document.getElementById('image3').files[0]);

            fetch('', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Images uploaded successfully!',
                        icon: 'success',
                        confirmButtonText: 'Okay'
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: data.message || 'Something went wrong. Please try again.',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    title: 'Error!',
                    text: 'Something went wrong. Please try again.',
                    icon: 'error',
                    confirmButtonText: 'Okay'
                });
            });
        });
    </script>

</body>
</html>
