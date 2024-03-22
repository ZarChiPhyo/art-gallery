<?php 

include_once 'datas.php';

$artists = new Datas('ArtGallery.json');
$all_artists = $artists->artists();

include_once 'header.php';
?>


    <div class="container">
        <!-- <div class="row">
            <h3 class='fs-2 text-warning text-center'>Profiles</h3>
        </div> -->
        <div class="row">
            <?php 
            foreach($all_artists as $artist)
            {
                echo "<div class='col-md-12 d-flex justify-content-center my-2'>";
                echo "<img src='./art-gallery/{$artist['ArtistId']}.jpg' width='300px' height='250px' class='rounded-4'>";
                echo "<h3 class='text-dark px-3 align-self-center'>{$artist['ArtistName']}";
                
                // foreach($artist['Social'] as $social)
                // {
                //     echo "<a href='{$social['Link']}'>{$social['Name']}</p>";
                // }
                echo "</div>";
            }
            ?>
            
        </div>
    </div>
</body>
</html>