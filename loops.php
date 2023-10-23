<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP loops</title>
</head>
<body>
<h1>PHP loops</h1>  

<?php

// $names= array('John', 'jeanne', 'Joan', 'émile');
// foreach ($names as $name){
// 	echo ucfirst($name);
// }

// echo '<pre>';
//  print_r($names);
//   echo '</pre>';

//   echo '<pre>';
//  print_r($name);
//   echo '</pre>';

//   $names= array('John', 'jeanne', 'Joan', 'émile');
//   var_dump($names);
  
//   foreach ($names as $key => $value){
//       $names[$key] = ucfirst($value);
//   }
//   echo '<pre>';
//   var_dump($names);
//   echo '</pre>';


// $pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

// foreach ($pronouns as $pronoun) {
//     // Check if the pronoun is "He/She"
//     $verb = ($pronoun == 'He/She') ? 'codes' : 'code';

//     // Display the conjugated verb and pronoun
//     echo "$pronoun $verb<br>";
// }

// $amount_of_lines = 1;

// while ($amount_of_lines <= 100)
// {
//     echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
//     // shorthand writing for 
//     // $amount_of_lines = $amount_of_lines +1;
//     $amount_of_lines ++; 

// }

// for ($amount_of_lines = 1; $amount_of_lines <= 100; $amount_of_lines ++)
// {
//     echo $amount_of_lines . '. I shall not watch flies fly when I m learning PHP.<br />';
// }


// while ($numbers <= 120)
// {
//     echo $numbers . '<br />';
//     $numbers ++;
// }

// for ($numbers = 1; $numbers <= 120; $numbers ++)
// {
//     echo $numbers . '<br />';
// }


// $names= array('tim', 'alex', 'pierre', 'antoine','jean','paul','pie','pau','pauline');


// foreach ($names as $name)
// {
//     echo $name . '<br />';
// }

// $countries = array('belgium', 'italy', 'france', 'pakistan', 'india', 'china', 'japan', 'russia', 'usa', 'canada');

// echo '<select>';
// foreach ($countries as $country) {
//     echo '<option value="' . $country . '">' . ucfirst($country) . '</option>';
// }
// echo '</select>';

$countries = array(
    'BE' => 'Belgium',
    'IT' => 'Italy',
    'FR' => 'France',
    'PK' => 'Pakistan',
    'IN' => 'India',
    'CN' => 'China',
    'JP' => 'Japan',
    'RU' => 'Russia',
    'US' => 'USA',
    'CA' => 'Canada'
);

echo '<select id="country-select">';
foreach ($countries as $code => $name) {
    echo '<option value="' . $name . '">' . $name . '</option>';
}
echo '</select>';

echo '<p id="country-code"></p>';

echo '<script>';
echo 'var select = document.getElementById("country-select");';
echo 'var code = document.getElementById("country-code");';
echo 'select.addEventListener("change", function() {';
echo '    code.textContent = Object.keys(' . json_encode($countries) . ')[this.selectedIndex];';
echo '});';
echo '</script>';
?>





</body>
</html>