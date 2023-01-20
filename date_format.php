<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date_format()</title>
</head>
<body>
    <h1>date_format()</h1>
    <h2>Description</h2>
    <p>La fonction date_format en PHP permet de formater une date en utilisant un format spécifié. Elle prend deux paramètres : la première est la date à formater (sous forme de timestamp ou de chaîne de caractères) et la seconde est le format de sortie souhaité. Elle renvoie une chaîne de caractères qui contient la date formatée.</p>
    <h2>Exemple</h2>
    <p>$date = new DateTime();<br>
    echo date_format($date, "Y/m/d H:i:s");
    </p>

    <?php
    $date = new DateTime();
    echo date_format($date, "Y/m/d H:i:s");
    ?>
</body>
</html>