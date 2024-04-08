<?php

$interet = " à";

$maRequete = "insert into Matable values(";

$maRequete = $maRequete . "'" . $_POST['nom'] . "'," . $_POST['age'] . ",'" . $_POST['marit'] . "',";

if (isset($_POST['internet'])) {
    $maRequete .= "1,";
    $interet .= " Internet,";
} else {
    $maRequete .= "0,";
}
if (isset($_POST['micro'])) {
    $maRequete .= "1,";
    $interet .= " la micro informatique,";
} else {
    $maRequete .= "0,";
}
if (isset($_POST['jeux'])) {
    $maRequete .= "1)";
    echo mb_substr($interet, -1);
    $interet .= (substr($interet, -1) == "à") ? " aux jeux vidéo" : $interet . " aux jeux vidéo";
} else {
    $maRequete .= "0)";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Un petit formulaire</title>
</head>



<body>
    <?php
    echo "<p>$interet</p>";
    echo "<p>$maRequete</p>";
    ?>
</body>

</html>