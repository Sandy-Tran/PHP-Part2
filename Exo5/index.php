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
<h2>Exercice 5 :
Initialisez une variable à 200. Tant que cette variable est supérieure à 0, décrémentez avec un pas de 12.</h2>
</div>
</div>

<div class='text-center mt-5'>

<?php



for($number = 200; $number >= 0; $number -= 12) {
    var_dump($number);
}

 





?>
 </div>   

</body>
</html>


