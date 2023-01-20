<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimpleXMLElement::children()</title>
</head>
<body>
    <h1>SimpleXMLElement::children()</h1>
    <h2>Description</h2>
    <p>La fonction SimpleXMLElement::children est une méthode de l'objet SimpleXMLElement qui permet de récupérer tous les enfants d'un élément XML. Elle renvoie un objet SimpleXMLElement qui contient tous les enfants de l'élément courant.</p>
    <h2>Exemple</h2>

    <p>  $xml = new SimpleXMLElement('<root><child1>value1</child1><child2>value2</child2></root>');<br>
    $children = $xml->children();<br>
    foreach ($children as $child) {<br>
        echo $child->getName() . ': ' . $child . PHP_EOL . "<br>";
    }</p>
    <?php  
    $xml = new SimpleXMLElement('<root><child1>value1</child1><child2>value2</child2></root>');
    $children = $xml->children();
    foreach ($children as $child) {
        echo $child->getName() . ': ' . $child . PHP_EOL . "<br>";
    }
?>
</body>
</html>