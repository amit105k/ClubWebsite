<?php
include('db.php'); 

$sql = "SELECT * FROM club_overviews"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="overviews">';
    echo '<h2>Overviews of the Clubs</h2>';
    echo '<div class="image-containerr">';
    while ($row = $result->fetch_assoc()) {
        echo '<a href="club_details.php?id=' . $row['id'] . '" class="fade">'; 
        echo '<div class="fadee">';
        echo '<img src="' . $row['image'] . '" alt="Club Image" class="image">';
        echo '<div class="overlay">';
        echo '<div class="text">';

       
        if ($row['club_name']) {
            echo '<h3>' . $row['club_name'] .  '</h3>';
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
            if ($row['postal_code']) {
                echo '<p>' . $row['postal_code'] . '</p>';
            }
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</a>';
    }

    echo '</div>';
    echo '</div>';
} else {
    echo "No records found!";
}

$conn->close();
?>

<!-- <style>
    *{
        margin: 0;
        padding: 0;
    }
    .overviews{
    margin-top: 47px;
}
.overviews h2 {
    text-align: center;
    padding: 20px;
    background-color: black;
    color: white;
}

.image-containerr {
    padding-bottom: 20px;
    /* font-family: 'Arial', sans-serif; */
    /* font-family: "Playfair Display", serif; */
    flex-wrap: wrap;
    display: flex;
    justify-content: center;
    gap: 20px;
    background-color: black;

}
.text h2{
    color: inherit;
}


.fade {
    position: relative;
    border: 12px solid white;
    width: 27%;
    height: 350px;
}


.image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}


.overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: black;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.fade:hover .overlay {
    opacity: 1;
}


.text {
    color: white;
    font-size: 20px;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.text h4,h5,p{
    /* font-family: "Playfair Display", serif !important; */
}


</style> -->
<style>
    .text a{
    color: inherit;
    text-decoration: none;
    right: 10px;
    font-weight: bold;
    font-size: 30px;
   
}
.fadee{
    
  /* border: 12px solid white; */
  /* width: 27%; */
 height: 100%;
}
</style>