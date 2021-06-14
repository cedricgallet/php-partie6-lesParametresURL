<?php

if (isset($_GET['building']) && (isset($_GET['room'])){
    echo $_GET['building'] . echo $_GET['room'];

};
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?building=12&room=101 -->
<a href="ex6.php?building=12&room=101"
title="Lien vers une page">clic ici</a>

</body>
</html>