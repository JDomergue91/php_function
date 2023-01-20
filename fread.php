<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fread()</title>
</head>
<body>
<h1>fread()</h1>
    <h2>Description</h2>
    <p>La fonction `fread()` en PHP permet de lire des données d'un fichier ouvert avec `fopen()`. Elle prend deux paramètres : un pointeur de fichier obtenu avec `fopen()` et la taille de données à lire en octets. Elle renvoie les données lues dans le fichier sous forme de chaîne.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `fread()` :</p>
    <?php
    $file = fopen("file.txt", "r");
    $data = fread($file, filesize("file.txt"));
    fclose($file);
    echo $data;
    ?>
    <p>
    $file = fopen("file.txt", "r");<br>
    $data = fread($file, filesize("file.txt"));<br>
    fclose($file);<br>
    echo $data;<br>
    </p>
    <p>Dans cet exemple, on ouvre le fichier "file.txt" en mode "r" (lecture) avec `fopen()` et on stocke le pointeur de fichier dans la variable $file. On utilise ensuite la fonction `fread()` pour lire les données du fichier en spécifiant la taille du fichier avec `filesize()`. On stocke les données lues dans la variable $data et on ferme le fichier avec `fclose()` puis on affiche les données lues.</p>
</body>
</html>