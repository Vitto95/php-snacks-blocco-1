<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack con cicli - Snack 3</title>
</head>
<body>

<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->
  
<?php 

$posts = [
  "10/10/2020" => [
      [
      'title' => 'Post 1',
      'author' => 'Utente1',
      'text' => 'Testo post 1',
    ],
    [
      'title' => 'Post 2',
      'author' => 'Utente2',
      'text' => 'Testo post 2',
    ],
  ],
   "11/10/2020" => [
      [
      'title' => 'Post 3',
      'author' => 'Utente1',
      'text' => 'Testo post 3',
    ],
    [
      'title' => 'Post 4',
      'author' => 'Utente2',
      'text' => 'Testo post 4',
    ],
  ],
];
/* 
var_dump($posts);
foreach($posts as $key => $post){
var_dump($post);
foreach($post as $msg){
  var_dump($msg); 
} 
} */
?>


<ul>

<?php

foreach($posts as $key => $post){
foreach($post as $msg){ 
  ?>

<li> 

<?php echo $key ?> : <?php echo $msg["text"] ?>  



</li>

<?php }}?>

</ul>

</body>
</html>