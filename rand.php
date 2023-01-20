<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rand()</title>
</head>
<body>
<h1>rand()</h1>
    <h2>Description</h2>
    <p>La fonction `rand()` en PHP permet de générer un nombre aléatoire. Elle prend deux paramètres optionnels: un nombre minimal et un nombre maximal. Elle renvoie un nombre aléatoire entre ceux-ci. Si aucun paramètre n'est donné, elle génère un nombre aléatoire entre 0 et getrandmax() (généralement 2147483647).</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `rand()` :</p>
    <p>
    <?php
    $random = rand(1, 100);
    echo "Numéro aléatoire : $random";
    ?>
    <br> <br>
    $random = rand(1, 100);<br>
    echo "Numéro aléatoire : $random";<br>
    </p>
    <p>Dans cet exemple, on utilise la fonction `rand()` pour générer un nombre aléatoire entre 1 et 100, puis on stock le résultat dans la variable $random et on affiche ce résultat.
    </p>



</body>
</html>