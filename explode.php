<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>explode()</title>
</head>
<body>
    <h1>explode()</h1>
    <h2>Description</h2>
    <p>La fonction explode() en PHP permet de découper une chaîne de caractères en un tableau en utilisant un séparateur spécifié. Elle prend deux paramètres : le premier est le séparateur utilisé pour découper la chaîne, et le second est la chaîne à découper. Elle renvoie un tableau contenant les morceaux de la chaîne découpée.</p>
    <h2>Exemple</h2>
    <p>$string = "apple,banana,orange,lemon";<br>
$fruits = explode(",", $string);<br>
print_r($fruits);<br>
</p>
    <?php
       $string = "apple,banana,orange,lemon";
       $fruits = explode(",", $string);
       print_r($fruits);
       
        
    ?>
</body>
</html>