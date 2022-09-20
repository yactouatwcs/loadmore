<?php 
// Connexion à la BDD
require('function.php');
?>

<?php
$image_req = $pdo->prepare('SELECT * FROM `img`');

$image_req->execute();
?>

<!DOCTYPE html>
<html lang="fr">

    <?php
    require('head.php');
    ?>
    
    <body>
        <section>
            <div id="gallery">
                <?php
                while($all_image = $image_req->fetch()){
                ?>
                <div>
                    <a href=""><img src="<?= $all_image['image_root']; ?>" title="Inna's photo" alt="image" /></a>
                </div>
                <?php
                }
                ?>

            </div>
        </section>
    </body>

</html>