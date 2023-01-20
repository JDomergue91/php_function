<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_search()</title>
</head>
<body>
    <h1>array_search()</h1>
    <h2>Description</h2>
    <p>Recherche dans un tableau la première clé associée à la valeur</p>
    <h2>
        $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');<br>
        <br>
        $key = array_search('green', $array); // $key = 2;<br>
        $key = array_search('red', $array);   // $key = 1;<br>
    </h2>
</body>
</html>