<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>server_request_uri()</title>
</head>
<body>
<h1>$_SERVER['REQUEST_URI']</h1>
    <h2>Description</h2>
    <p>La variable superglobale `$_SERVER['REQUEST_URI']` en PHP contient l'URI (Uniform Resource Identifier) de la requête actuelle. Cela comprend toutes les informations de la requête, y compris les paramètres GET et les informations d'en-tête.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la variable superglobale `$_SERVER['REQUEST_URI']` :</p>
    <p>
    <?php
    echo $_SERVER['REQUEST_URI'];
    ?>
    <br> <br>
    echo $_SERVER['REQUEST_URI'];
    </p>
    <p>Dans cet exemple, on utilise la variable superglobale `$_SERVER['REQUEST_URI']` pour récupérer l'URI de la requête actuelle et on l'affiche.
    </p>
</body>
</html>