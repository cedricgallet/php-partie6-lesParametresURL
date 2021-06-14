

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>
<body>

<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher : index.php?lastname=Nemare&firstname=Jean <br> -->
<?php
if (isset($_GET['lastname']) && isset($_GET['firstname'])){
        $test =  $_GET['lastname']. $_GET['firstname'];
}elseif (isset($_GET['lastname']) || isset($_GET['firstname'])){
        echo 'Une variable est manquante';
}else{
        echo 'Aucune variables existe'; 
};
?>


<a href="ex1.php?lastname=Nemare&firstname=Jean"
title="Lien vers une page">clic ici</a>


</body>
</html>