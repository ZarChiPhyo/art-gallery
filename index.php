<?php 

include_once 'datas.php';

$all_arts = new Datas('ArtGallery.json');
$arts = $all_arts->arts();

include_once 'header.php';
?>


        <div class="row ">
            <?php 
            foreach($arts as $art)
            {

                echo "<div class='col-md-3'>";
                echo "<img src='./art-gallery/{$art['ArtId']}.jpg' width='100%' height='250px' class='rounded-4'>";
                echo "<h4 class='text-center'>{$art['ArtName']}</h4>";
                echo "<p class='text-truncate'>{$art['ArtDescription']}</p>";
                echo "</div>";

            }
            
            ?>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>