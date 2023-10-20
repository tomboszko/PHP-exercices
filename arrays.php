<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
<h1>Arrays</h1>


<?php

// $family = array('papa', 'maman', 'ptite soeur', 'grand frère','tonton','papy','mamy');
// print_r($family);

// $fav_recipes = array('crepes','frites','raclette','choucroute');
// print_r($fav_recipes);

// $fav_movies = ['fear and loathing in vegas','la soupe aux choux','the grand budapest hotel'];
// echo $fav_movies[0];

// echo '<pre>';
// print_r($family);
// echo '</pre>';

// var_dump($family);

// array_push($family,'pti frère');

// echo '<pre>';
// print_r($family);
// echo '</pre>';


$me = array (
    'age' => '41',
    'fav movies' => array ('fear and loathing in vegas','la soupe aux choux','the grand budapest hotel'),
    'like soccer' => 'false',
);

echo '<pre>';
print_r($me);
echo '</pre>';


$me['hobbies'] = array ('nature','mushrooms','theatre');

echo '<pre>';
print_r($me);
echo '</pre>';

$mother = array (
    'age' => '65',
    'fav movies' => array ('chepas','beuh','menfou'),
    'like soccer' => 'false',
);

$mother['hobbies'] = array ('sleep','breaklesboules','petervoye');

echo '<pre>';
print_r($mother);
echo '</pre>';

$count = count($mother);
echo $count;


$me['hobbies'][]='Taxidermy';

echo '<pre>';
print_r($me);
echo '</pre>';


?>
</body>
</html>