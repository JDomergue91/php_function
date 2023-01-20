<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_EOL()</title>
</head>
<body>
    <h1>PHP_EOL()</h1>
    <h2>Description</h2>
    <p>La constante PHP_EOL en PHP est une constante prédéfinie qui contient un caractère de fin de ligne (new line) pour le système d'exploitation en cours d'utilisation. Il peut être utilisé pour ajouter des retours à la ligne dans les chaînes de caractères lors de l'affichage ou de l'écriture de fichiers. Il permet de s'assurer que les retours à la ligne sont corrects quel que soit le système d'exploitation utilisé.</p>
    <h2>Exemple</h2>
    <p>$string = "Hello World!";<br>
echo $string . PHP_EOL;
</p>
    <?php
$string = "Hello World!";
echo $string . PHP_EOL;

    ?>
</body>
</html>