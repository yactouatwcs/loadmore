<?php 
require('function.php');
?>

<?php
$image_req = $pdo->prepare('SELECT * FROM `img`');

$image_req->execute();
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Integration de fichier CSS -->
        <link rel="stylesheet" href="style.css" />

        <title>Load more - 1/3</title>
    </head>

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