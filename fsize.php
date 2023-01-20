<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filesize()</title>
</head>
<body>
<h1>filesize()</h1>
    <h2>Description</h2>
    <p>La fonction `filesize()` en PHP permet de récupérer la taille d'un fichier en octets. Elle prend un paramètre : le nom du fichier. Elle renvoie la taille du fichier en octets.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `filesize()` :</p>
    
    <?php
    $size = filesize("file.txt");
    echo "La taille du fichier file.txt est de " . $size . " octets.";
    ?>
    <p>
    $size = filesize("file.txt"); <br>
    echo "La taille du fichier file.txt est de " . $size . " octets.";<br>
    </p>
    <p>Dans cet exemple, on utilise la fonction `filesize()` pour récupérer la taille du fichier "file.txt" en octets, puis on affiche cette taille en utilisant un message concatené.
    </p>
</body>
</html>