<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>diff()</title>
</head>
<body>
    <h1>diff()</h1>
    <h2>Description</h2>
    <p>La méthode diff() de la classe DateTime en PHP permet de calculer la différence entre deux objets de type DateTime. Elle prend un paramètre, qui est un autre objet DateTime avec lequel la différence est calculée. Elle renvoie un objet de type DateInterval qui contient les informations sur la différence entre les deux dates, comme le nombre d'années, de mois, de jours, etc.</p>
    <h2>Exemple</h2>

    <p>
    $date1 = new DateTime("2022-09-24 14:40:32");<br>
    $date2 = new DateTime();<br>
    $interval = $date1->diff($date2);<br>
    echo $interval->format("%y années, %m mois, %d jours, %h heures, %i minutes, %s secondes");<br>
    </p>

    <?php 
        $date1 = new DateTime("2022-09-24 14:40:32");
        $date2 = new DateTime();
        $interval = $date1->diff($date2);
        echo $interval->format("%y années, %m mois, %d jours, %h heures, %i minutes, %s secondes");
        
    ?>
</body>
</html>