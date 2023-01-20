<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_map()</title>
</head>
<body>
    <h1>array_map()</h1>
    <h2>Description</h2>
    <p>Applique une fonction sur les éléments d'un tableau</p>
    <h2>
        function cube($n) <br>
        {<br>
            return ($n * $n * $n);<br>
        }<br>
        <br>
        $a = [1, 2, 3, 4, 5];<br>
        $b = array_map('cube', $a);<br>
        print_r($b);<br>
        <br>
        Array <br>
        ( <br>
            [0] => 1 <br>
            [1] => 8 <br>
            [2] => 27 <br>
            [3] => 64 <br>
            [4] => 125 <br>
        ) <br>
    </h2>
</body>
</html>