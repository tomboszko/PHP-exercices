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


// $me = array (
//     'age' => '41',
//     'fav movies' => array ('fear and loathing in vegas','la soupe aux choux','the grand budapest hotel'),
//     'like soccer' => 'false',
// );

// echo '<pre>';
// print_r($me);
// echo '</pre>';


// $me['hobbies'] = array ('nature','mushrooms','theatre');

// echo '<pre>';
// print_r($me);
// echo '</pre>';

// $mother = array (
//     'age' => '65',
//     'fav movies' => array ('chepas','beuh','menfou'),
//     'like soccer' => 'true',
// );

// $mother['hobbies'] = array ('sleep','breaklesboules','petervoye');

// echo '<pre>';
// print_r($mother);
// echo '</pre>';

// $count = count($mother);
// echo $count;


// $me['hobbies'][]='Taxidermy';

// echo '<pre>';
// print_r($me);
// echo '</pre>';

// $soulmate = array (
//     'age' => '36',
//     'fav movies' => array ('christmas movie','love, live, etc...','beetlejuice'),
//     'like soccer' => 'false',
// );

// echo '<pre>';
// print_r($soulmate);
// echo '</pre>';

// $soulmate['hobbies'] = array ('walking','cinema','books');

// echo '<pre>';
// print_r($soulmate);
// echo '</pre>';



// $me = array(
//     'age' => '41',
//     'fav movies' => array('fear and loathing in vegas', 'la soupe aux choux', 'the grand budapest hotel'),
//     'like soccer' => 'false',
//     'hobbies' => array('nature', 'mushrooms', 'theatre')
// );


// $soulmate = array(
//     'age' => '36',
//     'fav movies' => array('christmas movie', 'love, live, etc...', 'beetlejuice'),
//     'like soccer' => 'false',
//     'hobbies' => array('walking', 'cinema', 'books','theatre'),
// );

// // intersection (find commons hobbies)
// $commonHobbies = array_intersect($me['hobbies'], $soulmate['hobbies']);

// // fusion (find all hobbies of both)
// $allHobbies = array_merge($me['hobbies'], $soulmate['hobbies']);

// // results
// echo "Common Hobbies:\n";
// echo '<pre>';
// print_r($commonHobbies);
// echo '</pre>';

// echo "All Hobbies:\n";
// echo '<pre>';
// print_r($allHobbies);
// echo '</pre>';


$web_development = array(
    'frontend' => array(),
    'backend' => array(),
);

$web_development['frontend'][] = 'xhtml';
$web_development['backend'][] = 'Ruby on Rails';
$web_development['frontend'][] = 'CSS';
$web_development['frontend'][] = 'Flash';
$web_development['frontend'][] = 'Javascript';


  echo '<pre>';
 print_r($web_development);
  echo '</pre>';

$web_development['frontend'][0] = 'html';

echo '<pre>';
 print_r($web_development);
  echo '</pre>';

  unset($web_development['frontend'][2]);

  echo '<pre>';
  print_r($web_development);
   echo '</pre>';

?>
</body>
</html>