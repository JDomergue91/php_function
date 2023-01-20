<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file_put_contents()</title>
</head>
<body>
<h1>file_put_contents()</h1>
    <h2>Description</h2>
    <p>La fonction `file_put_contents()` en PHP permet d'écrire des données dans un fichier. Elle prend deux paramètres : le nom du fichier et les données à écrire dans le fichier. Elle renvoie le nombre d'octets écrits dans le fichier.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `file_put_contents()` :</p>
    <?php
    $data = "Hello World!";
    file_put_contents("file.txt", $data);
    ?>
    <p>
    $data = "Hello World!";<br>
    file_put_contents("file.txt", $data);<br>
    </p>
    <p>Dans cet exemple, on crée une variable $data contenant "Hello World!", puis on l'écrit dans le fichier "file.txt" avec la fonction `file_put_contents()`.</p>
</body>
</html>