<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET()</title>
</head>
<body>
    <h1>$_GET()</h1>
    <h2>Description</h2>
    <p>La variable superglobale $_GET en PHP est un tableau associatif qui contient les données d'une requête HTTP GET envoyée par le client au serveur. Il contient les paramètres de la requête dans les variables passées dans l'url, après le symbole "?".</p>
    <h2>Exemple</h2>
    <p>// URL : http://www.example.com/index.php?name=John&age=30 <br>
    <br>
$name = $_GET['name'];<br>
$age = $_GET['age'];<br>
<br>
echo "Your name is " . $name . " and you are " . $age . " years old.";
</p>
    <?php
        // URL : http://www.example.com/index.php?name=John&age=30

        $name = $_GET['name'];
        $age = $_GET['age'];

        echo "Your name is " . $name . " and you are " . $age . " years old.";

    ?>
</body>
</html>