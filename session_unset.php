<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session_unset()</title>
</head>
<body>
<h1>session_unset()</h1>
    <h2>Description</h2>
    <p>La fonction `session_unset()` en PHP permet de supprimer toutes les variables de session enregistrées. Elle ne prend pas de paramètre. Il est important de noter que cela ne détruit pas la session elle-même, seulement les variables de session enregistrées. Il est important de noter que la session doit être démarrée avec la fonction session_start() avant d'utiliser session_unset()</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `session_unset()` :</p>
    <p>
    <?php
    session_start();
    $_SESSION["name"] = "John Doe";
    session_unset();
    echo "Toutes les variables de session ont été supprimées.";
    ?>
    </p>
    <p>Dans cet exemple, on utilise la fonction `session_start()` pour démarrer une nouvelle session, puis on utilise la variable superglobale `$_SESSION` pour stocker la valeur "John Doe" avec la clé "name". On utilise ensuite la fonction `session_unset()` pour supprimer toutes les variables de session enregistrées.
    </p>
</body>
</html>