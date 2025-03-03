<?php

$paginaTitel = "Een php html voorbeeld pagina";
$imgUrl = "https://i.redd.it/show-me-your-funny-cat-pics-v0-mvgpbc4q571c1.jpg?width=3024&format=pjpg&auto=webp&s=f2776513e0089ba321656341bca350cb038b1a30";
$auteur = "Noe-dig";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<section>
                <p>
                    <h1>
                        $paginaTitel
                    </h1>
                </p>
            </section>"
    ?>
    <?php
        echo "<img src='$imgUrl' alt='el gato' width='200px' height='auto'>"
    ?>
    <?php
        echo "<section>
                <p>
                    Auteur: $auteur
                </p>
            </section>"
    ?>
</body>
</html>