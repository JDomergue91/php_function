<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unlink()</title>
</head>
<body>
    <h1>unlink()</h1>
    <h2>Description</h2>
    <p>La fonction `unlink()` en PHP permet de supprimer un fichier. Elle prend en paramètre le nom du fichier à supprimer. Elle renvoie `TRUE` si la suppression a réussi, `FALSE` sinon.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `unlink()` :</p>
    <p>
    <?php
    $file = "example.txt";
    if (unlink($file)) {
        echo "Le fichier $file a été supprimé";
    } else {
        echo "Echec de la suppression du fichier $file";
    }
    ?>
    </p>
    <p>Dans cet exemple, on utilise la fonction `unlink()` pour supprimer le fichier "example.txt". On vérifie ensuite si la suppression a réussi en utilisant un if-else, puis on affiche un message pour informer de l'état de la suppression.
    </p>
</body>
</html>