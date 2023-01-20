<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_column()</title>
</head>
<body>
    <h1>array_column()</h1>
    <h2>Description</h2>
    <p>Retourne les valeurs d'une colonne d'un tableau d'entrée</p>
    <h2>$records = array(<br>
        array(<br>
            'id' => 2135,<br>
            'first_name' => 'John',<br>
            'last_name' => 'Doe',<br>
        ),<br>
        array(<br>
            'id' => 3245,<br>
            'first_name' => 'Sally',<br>
            'last_name' => 'Smith',<br>
        ),<br>
        array(<br>
            'id' => 5342,<br>
            'first_name' => 'Jane',<br>
            'last_name' => 'Jones',<br>
        ),<br>
        array(<br>
            'id' => 5623,<br>
            'first_name' => 'Peter',<br>
            'last_name' => 'Doe',<br>
        )<br>
        );<br>
        <br>
        $first_names = array_column($records, 'first_name');<br>
        print_r($first_names);<br><br>
        Array<br>
        (<br>
            [0] => John<br>
            [1] => Sally<br>
            [2] => Jane<br>
            [3] => Peter<br>
        )<br>
    </h2>
</body>
</html>