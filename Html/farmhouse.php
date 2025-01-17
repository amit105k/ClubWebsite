<?php
include('db.php'); 

$sql = "SELECT * FROM farmhouse"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // echo '<div class="overviews"';
    echo '<h2>FarmHouse Party</h2>';
    echo '<div class="image-containerr">';
    while ($row = $result->fetch_assoc()) {
        echo '<a href="farmhouseDetails.php?id='.$row['id'].'"
         class="fade">';
        echo '<div class="fadee">';
        echo '<img src="' . $row['image_url'] . '" alt="Club Image" class="image">';
        echo '<div class="overlay">';
        echo '<div class="text">';

       
        if ($row['name']) {
            echo '<h3>' .$row['name'] .'</h3>';
        }

       
        if ($row['show_time']) {
            echo '<h5>' . $row['show_time'] . '</h5>';
        }

       
        if ($row['address']) {
            echo '<h2>Address</h2>';
            echo '<h4>' . $row['address'] . '</h4>';
            if ($row['city']) {
                echo '<h5>' . $row['city'] . '</h5>';
            }
            if ($row['pincode']) {
                echo '<p>' . $row['pincode'] . '</p>';
            }
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</a>';
    }

    echo '</div>';
    // echo '</div>';
} else {
    echo "No records found!";
}

$conn->close();
?>


<style>
    .text a{
    color: inherit;
    text-decoration: none;
    right: 10px;
    font-weight: bold;
    font-size: 30px;
   
}
</style>