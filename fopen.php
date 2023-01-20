<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fopen</title>
</head>
<body>
<h1>fopen()</h1>
    <h2>Description</h2>
    <p>La fonction `fopen()` en PHP permet d'ouvrir un fichier pour une lecture ou une écriture. Elle prend deux paramètres : le nom du fichier et le mode d'ouverture du fichier. Elle renvoie un pointeur de fichier qui peut être utilisé pour lire ou écrire dans le fichier.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `fopen()` :</p>
    <?php
    $file = fopen("file.txt", "r");
    ?>
    <p>
    $file = fopen("file.txt", "r");
    </p>
    <p>Dans cet exemple, on ouvre le fichier "file.txt" en mode "r" (lecture) avec `fopen()` et on stocke le pointeur de fichier dans la variable $file.</p>
</body>
</html>