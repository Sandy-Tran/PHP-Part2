<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PHP</title>
</head>
<body>

<div class='container'>
<div class='text-center'>
<h1>PHP Partie 2</h1>
<h2>Exercice 2 :
Créez deux variables. L'une initialisée à 0 et l'autre avec un nombre aléatoire de 1 à 100. Tant que la variable n'a pas atteint 20, multiplier la première variable par la deuxième est afficher le résultat.</h2>
</div>
</div>

<div class='text-center mt-5'>
<?php


$number = 0;
$random = rand(1, 100);


while ($number++ <= 20) {
    $number = $number * $random;  
   var_dump($number);
   
}

?>

 </div>   

</body>
</html>


