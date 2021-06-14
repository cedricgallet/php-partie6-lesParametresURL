<?php

if (isset($_GET['startDate']) && isset($_GET['endDate'])){
    echo $_GET['startDate']. $_GET['endDate'];

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
<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016 -->
<a href="ex3.php?startDate=2/05/2016&endDate=27/11/2016"
title="Lien vers une page">clic ici</a>

</body>
</html>