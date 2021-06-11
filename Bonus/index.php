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
<h2>Exercice Bonus :
Créez un tableau contenant les 12 mois de l'année. Afficher ces mois dans un "select".</h2>
</div>
</div>

<div class='text-center mt-5'>

<form method="post" action="traitement.php">
   <p>  
       <select name="mois" id="mois">
        <?php
$mois = array('JANVIER','FEVRIER','MARS','AVRIL','MAI','JUIN','JUILLET','AOUT','SEPTEMBRE','OCTOBRE','NOVEMBRE','DECEMBRE');
for($i = 0; $i <= 11; $i++)
{
echo("<option value=\"$mois[$i]\"");
echo(">$mois[$i]</option>");
}
        ?>  
       </select>
   </p>
</form>


<!-- CORRECTION -->

<!-- avec boucle FOR -->
<select>
<?php
$tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
$tablength = count($tab);
for($i = 0; $i < $tablength; $i++){
  ?>
  <!-- <option>Choisir un mois</option> -->
  <option><?= $tab[$i] ?></option>
  <?php
}
?>
</select>


<!-- avec boucle FOREACH -->
<?php
$mois = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
?>
<select>
<?php
foreach ($mois as $value) {
?>

<option><?= $value ?></option>

<?php
}
?>
</select>

<!-- FIN CORRECTION -->

 </div>   

</body>
</html>


