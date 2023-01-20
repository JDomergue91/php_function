<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SESSION()</title>
</head>
<body>
    <h1>$_SESSION</h1>
    <h2>Description</h2>
    <p>La variable superglobale `$_SESSION` en PHP permet de stocker des données qui seront disponibles pour toutes les pages du site pendant la durée de la session de l'utilisateur. Elle est sous forme de tableau associatif, contenant les données stockées, avec des clés pour identifier les valeurs stockées. Il est important de noter que la session doit être démarrée avec la fonction session_start() avant d'utiliser $_SESSION</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la variable superglobale `$_SESSION` :</p>
    <p>
    <?php
    session_start();
    $_SESSION["name"] = "John Doe";
    echo "La variable de session 'name' est stockée avec la valeur : " . $_SESSION["name"];
    ?>
    </p>
    <p>Dans cet exemple, on utilise la fonction `session_start()` pour démarrer une nouvelle session, puis on utilise la variable superglobale `$_SESSION` pour stocker la valeur "John Doe" avec la clé "name". On peut ensuite utiliser cette variable dans d'autres pages du site pendant la durée de la session.
    </p>
</body>
</html>