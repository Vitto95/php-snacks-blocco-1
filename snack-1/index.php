<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack con cicli - Snack 1 </title>
</head>
<body>

<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

/* array bidimensionale con risultati delle partite di basket */
$matches = [
[
  "team1" => "Olimpia Milano",
  "team2" => "Cantù",
  "points1" => "55",
  "points2" => "60"
],
[
  "team1" => "Sassari",
  "team2" => "Venezia",
  "points1" => "44",
  "points2" => "72"
],
[
  "team1" => "Varese",
  "team2" => "Brindisi",
  "points1" => "68",
  "points2" => "84"
],

];

/* var_dump($matches) */;
/* foreach($matches as $match){
  var_dump($match);
}
 */
?>

<h1>Snack blocco 1</h1>



<ul >

<?php

foreach($matches as $match){?>

<li> 

<?php echo $match["team1"] ?> - <?php echo $match["team2"] ?> : <?php echo $match["points1"] ?> - <?php echo $match["points2"] ?> 



</li>

<?php }?>

</ul>

  
</body>
</html>