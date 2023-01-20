<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imagejpeg()</title>
</head>
<body>
<h1>imagejpeg()</h1>
    <h2>Description</h2>
    <p>La fonction `imagejpeg()` en PHP permet de sauvegarder une image en format JPEG. Elle prend 3 paramètres : l'identifiant de ressource d'image créée avec les fonctions GD, le nom de fichier où l'image sera sauvegardée et la qualité de l'image (0-100). Elle renvoie un booléen indiquant si l'opération de sauvegarde a réussi ou non.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `imagejpeg()` :</p>
    <p>
    
    $image = imagecreatefrompng("image.png");<br>
    imagejpeg($image, "image.jpg", 75);<br>
    imagedestroy($image);<br>
    
    </p>
    <p>Dans cet exemple, on utilise la fonction `imagecreatefrompng()` pour créer une image à partir du fichier "image.png" et on stocke l'identifiant de ressource dans la variable $image. Ensuite on utilise la fonction `imagejpeg()` pour sauvegarder l'image en format JPEG sous le nom "image.jpg" avec une qualité de 75%. Enfin on utilise la fonction `imagedestroy()` pour détruire l'image, libérant la mémoire allouée pour cette ressource. Il est important de noter que cette fonction nécessite que l'extension GD soit installée sur votre serveur PHP pour fonctionner.
    </p>
</body>
</html>