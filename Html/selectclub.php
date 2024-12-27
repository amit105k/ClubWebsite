<?php
echo '<div class="overviews">';
echo '<h2>Over Views Of the Clubs</h2>';
echo '<div class="image-containerr">';

while ($row = $result->fetch_assoc()) {
    echo '<div class="fade">';
    echo '<a href="javascript:void(0);" onclick="openFormAndSelectClub(\'' . $row['club_name'] . '\')">';
    echo '<img src="' . $row['image_url'] . '" alt="' . $row['club_name'] . '" class="image">';
    echo '</a>';
    echo '<div class="overlay">';
    echo '<div class="text">';
    
    if ($row['club_name']) {
        echo '<h2>' . $row['club_name'] . '</h2>';
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
        if ($row['postal_code']) {
            echo '<a href="'.$row['book_tkt'].'"> Buy Tickets </a>';
        }
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

echo '</div>';
echo '</div>';
?>
<script>
function openFormAndSelectClub(clubName) {
    document.getElementById('club').value = clubName;
    
    document.getElementById('club').disabled = true;

    document.querySelector('.form-container').style.display = 'block';
}
</script>
<style>
    .form-container {
    display: none; 
}

</style>