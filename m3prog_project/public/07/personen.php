<?php

$persoon = ['voornaam' => 'Thor', 'achternaam' => 'Odinson', 'leeftijd' => 1000, 'favoriete drank' => 'mede', 'minst favoriete drank' => 'waarschijnlijk water', 'woonplaats' => 'Asgaard'];

// foreach($persoon as $key => $value)
// {
//     echo $key." = ".$value."<br>";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>key</th>
            <th>value</th>
        </tr>
            <?php

                foreach($persoon as $key => $value)
                {
                    echo "<tr><td>$key</td><td>$value</td></tr>";
                }

            ?>
    </table>
</body>
</html>