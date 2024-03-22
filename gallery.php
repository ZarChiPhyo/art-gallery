<?php 

include_once 'datas.php';

$gallery = new Datas('ArtGallery.json');
$all_photos = $gallery->gallery();
include_once 'header.php';
?>


    <div class="container">

    <!-- <div class="row">
        <h3 class="text-warning text-center my-5 fs-2">Galley</h3>
    </div> -->
    <div class="row align-center ">
        <?php 
        foreach($all_photos as $photo)
        {
            echo "<div class='col-md-3 my-4'>";
            echo "<img src='./art-gallery/{$photo['GalleryId']}.jpg' width='90%' height='250px' class='rounded-4'>";
            echo "</div>";
        }
        ?>
    </div>

    </div>
    </body>
</html>