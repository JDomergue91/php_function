<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imagedestroy()</title>
</head>
<body>
<h1>imagedestroy()</h1>
    <h2>Description</h2>
    <p>La fonction `imagedestroy()` en PHP permet de détruire une image créée avec les fonctions GD. Elle prend un paramètre : l'identifiant de ressource d'image créée avec les fonctions GD. Elle ne renvoie aucune valeur.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `imagedestroy()` :</p>
    
    <p>
    $image = imagecreatefrompng("image.png");<br>
    imagedestroy($image);<br>
    </p>
    <p>Dans cet exemple, on utilise la fonction `imagecreatefrompng()` pour créer une image à partir du fichier "image.png" et on stocke l'identifiant de ressource dans la variable $image. Ensuite on utilise la fonction `imagedestroy()` pour détruire l'image, libérant la mémoire allouée pour cette ressource. Il est important de noter que cette fonction est nécessaire pour libérer la mémoire allouée pour une image lorsque vous avez fini de travailler avec elle.
    </p>
</body>
</html>