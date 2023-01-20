<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unset()</title>
</head>
<body>
<h1>unset()</h1>
    <h2>Description</h2>
    <p>La fonction `unset()` en PHP permet de détruire une variable ou une partie d'un tableau. Elle prend un ou plusieurs paramètres, qui peuvent être des noms de variables ou des indices de tableaux.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `unset()` :</p>
    <?php
    $name = "John";
    $age = 25;
    unset($name); 
    unset($age);
    ?>
    <p>
    $name = "John";<br>
    $age = 25;<br>
    unset($name); <br>
    unset($age);<br>
    </p>
    <p>Dans cet exemple, on utilise la fonction `unset()` pour détruire les variables $name et $age.
    </p>
</body>
</html>