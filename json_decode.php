<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json_decode()</title>
</head>
<body>
<h1>json_decode()</h1>
    <h2>Description</h2>
    <p>La fonction `json_decode()` en PHP permet de décoder une chaîne JSON en un tableau ou un objet PHP. Elle prend 2 paramètres : la chaîne JSON à décoder et un booléen pour spécifier s'il faut renvoyer un tableau ou un objet PHP. Elle renvoie le tableau ou l'objet PHP créé à partir de la chaîne JSON.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la fonction `json_decode()` :</p>
    <p>
    <?php
    $json = '{"name":"John", "age":30, "city":"New York"}';
    $data = json_decode($json, true);
    print_r($data);
    ?>
    <br><br>
    $json = '{"name":"John", "age":30, "city":"New York"}';<br>
    $data = json_decode($json, true);<br>
    print_r($data);<br>
    </p>
    <p>Dans cet exemple, on définit une chaîne JSON $json contenant un objet avec les propriétés "name", "age" et "city". On utilise la fonction `json_decode()` pour décoder cette chaîne en un tableau $data. Le résultat sera un tableau contenant les valeurs décodées sous forme de clé => valeur :  Array ( [name] => John [age] => 30 [city] => New York ) 
    </p>
</body>
</html>