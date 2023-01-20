<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imagecreatefrompng()</title>
</head>
<body>
<h1>imagecreatefrompng()</h1>
    <h2>Description</h2>
    <p>La fonction `imagecreatefrompng()` en PHP permet de créer une image à partir d'un fichier PNG. Elle prend un paramètre : le nom du fichier PNG. Elle renvoie un identifiant de ressource d'image qui peut être utilisé pour les fonctions de manipulation d'images GD.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `imagecreatefrompng()` :</p>
    
    <?php
    $image = imagecreatefrompng("image.png");
    ?>
    <p>
    
    $image = imagecreatefrompng("image.png");<br>
    
    </p>
    <p>Dans cet exemple, on utilise la fonction `imagecreatefrompng()` pour créer une image à partir du fichier "image.png" et on stocke l'identifiant de ressource dans la variable $image. Il est important de noter que cette fonction nécessite que l'extension GD soit installée sur votre serveur PHP pour fonctionner.
    </p>
</body>
</html>