<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>count()</title>
</head>
<body>
    <h1>count()</h1>
    <h2>Description</h2>
    <p>La fonction count en PHP permet de compter le nombre d'éléments d'un tableau ou d'objets qui ont une méthode count. Elle renvoie un entier qui représente le nombre d'éléments.</p>
    <h2>Exemple</h2>
    <p>$numbers = array(1, 2, 3, 4, 5);<br>
        $count = count($numbers);<br>
        echo $count;<br>
    </p>
    <?php
        $numbers = array(1, 2, 3, 4, 5);
        $count = count($numbers);
        echo $count;        
    ?>


</body>
</html>