<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shuffle()</title>
</head>
<body>
<h1>shuffle()</h1>
    <h2>Description</h2>
    <p>La fonction `shuffle()` en PHP permet de mélanger les éléments d'un tableau de manière aléatoire. Elle prend en paramètre le tableau à mélanger. Elle modifie directement le tableau passé en paramètre.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `shuffle()` :</p>
    <p>
    <?php
    $cards = array("coeur","carreau","trefle","pique");
    shuffle($cards);
    print_r($cards);
    ?>
    </p>
    <p>Dans cet exemple, on utilise la fonction `shuffle()` pour mélanger les éléments du tableau $cards qui contient les 4 familles de cartes. On utilise ensuite la fonction `print_r()` pour afficher le tableau mélangé.
    </p>
</body>
</html>