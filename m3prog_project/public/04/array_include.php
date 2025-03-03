<?php

    $announcements = [
        "a.html",
        "b.html",
        "c.html",
        "d.html",
        "e.html"
    ];
    $reviews = [
        ["demon's soul", 10],
        ["mario wonder",9.5],
        ["mega man 2",8]
    ]

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

        for ($i=0; $i < sizeOf($announcements) ; $i++){
            $announcement = $announcements[$i];
            include "announcements/$announcement";
        }



        for ($i=0; $i < sizeOf($reviews) ; $i++){
            $review = $reviews[$i];

            $title = $review[0];
            $cijfer = $review[1];

            echo "<h1>$title</h1><h3>$cijfer</h3>";

        }

    ?>
</body>
</html>