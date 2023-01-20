<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list()</title>
</head>
<body>
<h1>list()</h1>
    <h2>Description</h2>
    <p>La fonction `list()` en PHP permet d'affecter des valeurs à des variables en utilisant une liste de variables sur la gauche et une liste de valeurs sur la droite. Elle prend une liste de variables suivie d'une liste de valeurs. Elle renvoie un rien.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `list()` :</p>
    <p>
    <?php
    $data = array("John", "New York", 30);
    list($name, $city, $age) = $data;
    echo "Name: $name, City: $city, Age: $age";
    ?>
    <br><br>
    $data = array("John", "New York", 30);<br>
    list($name, $city, $age) = $data;<br>
    echo "Name: $name, City: $city, Age: $age";<br>
    </p>
    <p>Dans cet exemple, on définit un tableau $data contenant les valeurs "John", "New York" et 30. On utilise la fonction `list()` pour affecter ces valeurs aux variables $name, $city et $age respectivement. Le résultat sera un message "Name: John, City: New York, Age: 30"
    </p>
</body>
</html>