<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fclose()</title>
</head>
<body>
    <h1>fclose()</h1>
    <h2>Description</h2>
    <p>La fonction fclose() en PHP permet de fermer un fichier ouvert avec fopen(). Elle prend un paramètre : un pointeur de fichier obtenu avec fopen() et renvoie true si la fermeture a réussi, sinon false.</p>
    <h2>Exemple</h2>
    <p>$file = fopen("file.txt", "r");<br>
// ...traitement sur le fichier...<br>
fclose($file);<br>
</p>
    <?php
        $file = fopen("file.txt", "r");
        // ...traitement sur le fichier...
        fclose($file);
        
    ?>
</body>
</html>