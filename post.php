<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_POST()</title>
</head>
<body>
<h1>$_POST</h1>
    <h2>Description</h2>
    <p>La variable superglobale `$_POST` en PHP permet de récupérer les données envoyées par la méthode HTTP POST d'un formulaire. Elle est sous forme de tableau associatif contenant les données envoyées, avec les noms des champs du formulaire comme clés et les valeurs saisies ou sélectionnées comme valeurs.</p>
    <h2>Exemple</h2>
    <p>Voici un exemple d'utilisation de la variable superglobale `$_POST` :</p>
    <p>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        echo "Name: $name, Age: $age";
    }
    ?>
    <br><br>
    if ($_SERVER["REQUEST_METHOD"] == "POST") { <br>
        $name = $_POST["name"];<br>
        $age = $_POST["age"];<br>
        echo "Name: $name, Age: $age";<br>
    } <br>
    </p>
    <p>Dans cet exemple, on vérifie si la requête est de type POST, puis on utilise la variable superglobale `$_POST` pour récupérer les valeurs du champ "name" et "age" du formulaire. Le résultat sera un message "Name: [valeur saisie], Age: [valeur saisie]"
    </p>
</body>
</html>