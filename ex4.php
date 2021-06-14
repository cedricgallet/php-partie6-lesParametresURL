<?php

if (isset($_GET['language']) && isset($_GET['server'])){
    echo $_GET['language']. $_GET['server'];

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
<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?language=PHP&server=LAMP -->
<a href="ex4.php?language=PHP&server=LAMP"
title="Lien vers une page">clic ici</a>

</body>
</html>