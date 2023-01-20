<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DateTime()</title>
</head>
<body>
    <h1>DateTime()</h1>
    <h2>Description</h2>
        <p>La classe DateTime en PHP permet de manipuler des dates et des heures. Elle fournit des méthodes pour créer, formater, comparer et manipuler des objets de type date. Elle est similaire à la fonction date() mais permet des opérations plus avancées grâce à ses méthodes.</p>
        <p>Il est possible de manipuler les dates en utilisant les méthodes disponibles telles que :<br>
        <br>
        add() : pour ajouter une durée à la date <br>
        sub() : pour soustraire une durée à la date<br>
        diff() : pour calculer la différence entre deux dates<br>
        setDate() : pour changer les valeurs de date<br>
        setTime() : pour changer les valeurs d'heure</p>
    <h2>Exemple</h2>

    <p>$date = new DateTime();<br>
echo $date->format("Y/m/d H:i:s");
</p>

<?php
    $date = new DateTime();
    echo $date->format("Y/m/d H:i:s");
    
?>


</body>
</html>