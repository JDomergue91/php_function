<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset()</title>
</head>
<body>
<h1>isset()</h1>
    <h2>Description</h2>
    <p>La fonction `isset()` en PHP permet de vérifier si une variable existe et a une valeur non nulle. Elle prend un ou plusieurs paramètres : les variables à vérifier. Elle renvoie un booléen (vrai ou faux) indiquant si les variables existent et ont une valeur non nulle.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `isset()` :</p>
    <?php
    $x = "hello";
    $y;
    if (isset($x, $y)) {
        echo "Les variables x et y existent et ont une valeur non nulle.";
    } else {
        echo "Au moins une des variables x ou y n'existe pas ou a une valeur nulle.";
    }
    ?>
    
    <p>
    
    $x = "hello";<br>
    $y;<br>
    if (isset($x, $y)) {<br>
        echo "Les variables x et y existent et ont une valeur non nulle.";<br>
    } else {<br>
        echo "Au moins une des variables x ou y n'existe pas ou a une valeur nulle.";<br>
    }<br>
    
    </p>
    <p>Dans cet exemple, on définit la variable $x avec la valeur "hello" et la variable $y sans valeur. On utilise la fonction `isset()` pour vérifier si les deux variables existent et ont une valeur non nulle. Le résultat sera "Au moins une des variables x ou y n'existe pas ou a une valeur nulle."
    </p>
</body>
</html>