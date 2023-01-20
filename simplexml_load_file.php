<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simplexml_load_file()</title>
</head>
<body>
<h1>simplexml_load_file()</h1>
    <h2>Description</h2>
    <p>La fonction `simplexml_load_file()` en PHP permet de charger un fichier XML sous forme d'objet SimpleXMLElement. Elle prend en paramètre le chemin ou l'URL du fichier XML. Elle renvoie un objet SimpleXMLElement qui peut être utilisé pour accéder aux données du fichier XML.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `simplexml_load_file()` :</p>
    <p>
    <?php
    $xml = simplexml_load_file("data.xml");
    echo $xml->book[0]->title;
    ?>
    </p>
    <p>Dans cet exemple, on utilise la fonction `simplexml_load_file()` pour charger le fichier "data.xml" en utilisant l'objet SimpleXMLElement $xml. On utilise ensuite l'objet pour accéder au titre du premier livre dans le fichier en utilisant la notation de tableau pour accéder aux éléments du fichier.
    </p>
</body>
</html> 