<?php
include('db.php');

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Get values from the form
//     $id = $_POST['id'];
//     $image_url = $_POST['image_url'];
//     $club_name = $_POST['club_name'];
//     $show_time = $_POST['show_time'];
//     $address = $_POST['address'];
//     $city = $_POST['city'];
//     $postal_code = $_POST['postal_code'];
//     $book_tkt = $_POST['book_tkt'];

    // Check if "Delete Club" button was clicked
    if (isset($_POST['delete'])) {
        $sql = "DELETE FROM club_overviews WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    swal({
                        title: 'Success!',
                        text: 'Your club has been deleted successfully.',
                        icon: 'success',
                    }).then(() => {
                        window.location.href = 'deleteclub.php';
                    });
                  </script>";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } 


$sql = "SELECT id, club_name FROM club_overviews";
$result = $conn->query($sql);
$clubs = [];
while ($row = $result->fetch_assoc()) {
    $clubs[] = $row;
}

$selected_club = null;
if (isset($_GET['id']) && $_GET['id'] != 'new') {
    $id = $_GET['id'];
    $sql = "SELECT * FROM club_overviews WHERE id = $id";
    $selected_club_result = $conn->query($sql);
    $selected_club = $selected_club_result->fetch_assoc();
}


if (isset($_GET['create_success']) && $_GET['create_success'] == 'true') {
    echo "<script>
            swal({
                title: 'Success!',
                text: 'New club has been created.',
                icon: 'success',
            });
          </script>";
} elseif (isset($_GET['update_success']) && $_GET['update_success'] == 'true') {
    echo "<script>
            swal({
                title: 'Success!',
                text: 'Your club has been updated.',
                icon: 'success',
            });
          </script>";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Club Details</title>
    <link rel="stylesheet" href="../css/index.css">
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

</head>

<body>


    <!-- ................nav bar....................................... -->

    <!-- <nav>
        <h4>The Noida Clubs</h4>
        <a href="../Html/index.php">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#clubs">Clubs</a>
        <a href="#clubs">Gallery</a>
        <a href="#contact">Contact Us</a>
        <a href="../Html/buyticket.html">Buy Tickets</a><img src="../image/new.gif" alt="">
        <h3>+91 70076000000</h3>
    </nav> -->


    <!-- ..........................update is here........................................... -->


    <div class="container">
        <h2>Delete Club Details</h2>

        <form action="deleteclub.php" method="get">
            <label for="id">Select Club ID For Delete:</label>
            <select name="id" id="id" required onchange="handleSelectChange(this)">
                <option value="">Select Club</option>
               
                <?php foreach ($clubs as $club): ?>
                    <option value="<?php echo $club['id']; ?>" <?php echo (isset($id) && $id == $club['id']) ? 'selected' : ''; ?>>
                        (ID: <?php echo $club['id']; ?>)<?php echo $club['club_name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Select Club">
        </form>

        <?php if ($selected_club || isset($_GET['id']) && $_GET['id'] == 'new'): ?>
            <form action="deleteclub.php" method="post">
                <input type="hidden" name="id" value="<?php echo $selected_club ? $selected_club['id'] : ''; ?>">

                <label for="image_url">Image URL:</label><br>
                <input type="text" id="image_url" name="image_url"
                    value="<?php echo $selected_club ? $selected_club['image_url'] : ''; ?>" required><br><br>

                <label for="club_name">Club Name:</label><br>
                <input type="text" id="club_name" name="club_name"
                    value="<?php echo $selected_club ? $selected_club['club_name'] : ''; ?>" required><br><br>

                <label for="show_time">Show Time:</label><br>
                <input type="datetime-local" id="show_time" name="show_time"
                    value="<?php echo $selected_club ? $selected_club['show_time'] : ''; ?>"><br><br>

                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address"
                    value="<?php echo $selected_club ? $selected_club['address'] : ''; ?>"><br><br>

                <label for="city">City:</label><br>
                <input type="text" id="city" name="city"
                    value="<?php echo $selected_club ? $selected_club['city'] : ''; ?>"><br><br>

                <label for="postal_code">Postal Code:</label><br>
                <input type="text" id="postal_code" name="postal_code"
                    value="<?php echo $selected_club ? $selected_club['postal_code'] : ''; ?>"><br><br>

                <label for="book_tkt">Link for Booking:</label><br>
                <input type="text" id="book_tkt" name="book_tkt"
                    value="<?php echo $selected_club ? $selected_club['book_tkt'] : ''; ?>"><br><br>

                    <label for="image_url">Image URL 1:</label>
                    <input type="text" id="image_url" name="image_url1"
                    value="<?php echo $selected_club ? $selected_club['image_url1'] : ''; ?>" ><br><br>

                    <label for="image_url">Image URL 2:</label>
                    <input type="text" id="image_url" name="image_url2"
                    value="<?php echo $selected_club ? $selected_club['image_url2'] : ''; ?>" ><br><br>

                    <label for="image_url">Image URL 3:</label>
                    <input type="text" id="image_url" name="image_url3"
                    value="<?php echo $selected_club ? $selected_club['image_url3'] : ''; ?>" ><br><br>


                <div class="form-button">
                    <!-- Create or Update Button -->
                    <!-- <input type="submit" name="submit"
                        value="
                        <?php
                        //  echo $selected_club ? 'Update Club' : 'Create Club';
                          ?>
                        "> -->

                    <!-- Delete Button, visible only when a club is selected -->
                    <?php if ($selected_club): ?>
                        <input type="submit" name="delete" value="Delete Club" class="delete-button">
                    <?php endif; ?>
                </div>
            </form>
        <?php endif; ?>
    </div>


    <?php if ($selected_club): ?>
        <script>
            Swal.fire({
                icon: '<?php echo "this is sweet1"; ?>',
                title: '<?php echo "this is sweet"; ?>',
                showConfirmButton: true,
            });
        </script>
    <?php endif; ?>
    <!-- ............................footer is here.................................... -->

   
<!-- new script for create club -->


<script>
    function handleSelectChange(selectElement) {
        const id = selectElement.value;
        if (id === 'new') {
            // Clear all input fields and change the form to "Create Club"
            document.getElementById('image_url').value = '';
            document.getElementById('club_name').value = '';
            document.getElementById('show_time').value = '';
            document.getElementById('address').value = '';
            document.getElementById('city').value = '';
            document.getElementById('postal_code').value = '';
            document.getElementById('book_tkt').value = '';
        }
    }
</script>
<!-- .............delete the element,,,,,,,,,,,,,,,,,,,,,,,+, -->






<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        /* background-color: black; */
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 10px double rgb(97, 70, 70);
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
    input[name="delete"],
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

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    #id {
        /* border-radius: 4px; */
        /* font-size: 16px; */
        padding: 10px;
    }

    .form-buttons {
        /* display: flex;
        justify-content: space-between; */
        /* Space out the buttons */
        /* margin-top: 20px; */
    }

    /* Style for the delete button */
    .delete-button {
        background-color: red;
        color: white;
        margin-left: 10px;
        cursor: pointer;
    }

    .delete-button:hover {
        background-color: darkred;
    }

    
    form input[type="submit"]:hover {
        background-color: #4CAF50;
        /* Green for submit button */
        color: white;
    }
    form input[name="delete"]:hover {
        background-color: red;
        
        color: white;
    }

    /* ......................nav bar is here............................. */
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

    /* ............................................footer................................ */
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
</style>