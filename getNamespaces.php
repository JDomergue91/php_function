<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimpleXMLElement::getNamespaces()</title>
</head>
<body>
<h1>SimpleXMLElement::getNamespaces()</h1>
    <h2>Description</h2>
    <p>La méthode `SimpleXMLElement::getNamespaces()` en PHP permet de récupérer les espaces de noms associés à un élément SimpleXML. Elle ne prend pas de paramètres. Elle renvoie un tableau associatif avec les espaces de noms et les URIs correspondantes.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la méthode `SimpleXMLElement::getNamespaces()` :</p>
    
    <?php
    $xml = new SimpleXMLElement('<root xmlns:foo="http://example.com/foo" xmlns:bar="http://example.com/bar"><foo:child>content</foo:child></root>');
    $ns = $xml->getNamespaces(true);
    print_r($ns);
    ?>
    <p>
    $xml = new SimpleXMLElement('<root xmlns:foo="http://example.com/foo" xmlns:bar="http://example.com/bar"><foo:child>content</foo:child></root>');<br>
    $ns = $xml->getNamespaces(true);<br>
    print_r($ns);<br>
    </p>
    <p>Dans cet exemple, on crée un objet `SimpleXMLElement` avec un exemple de XML contenant des espaces de noms déclarés. On utilise ensuite la méthode `getNamespaces()` pour récupérer un tableau associatif des espaces de noms et on l'affiche avec `print_r()`.
    </p>
    
</body>
</html>