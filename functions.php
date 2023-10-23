<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP functions</title>
</head>
<body> 

<h1>PHP functions</h1>

<?php

// function capitalize($str) {
//     return mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1);
// }

// $names = array('émile', 'michel', 'jean', 'emmanuel', 'françois');

// $capitalizedNames = array_map('capitalize', $names);

// foreach ($capitalizedNames as $name) {
//     echo $name . '<br>';
// }

// function dateFr($date) {
//     $timestamp = strtotime($date);
//     return date('Y', $timestamp);
// }

// echo dateFr('2023-10-19') . '<br>';
// echo dateFr('$date') .'<br>';


// function sum($a, $b) {
//     return $a + $b;
// }

// echo sum(2, 3) . '<br>';
// echo sum(5, 5) . '<br>';
// echo sum(10, 10) . '<br>';


// function sumBis($a, $b) {

//     if (!is_numeric($a) || !is_numeric($b)) {
//         return 'Error: argument is not a number.';
//     }
//     return $a + $b;
// }


// $a = 5;
// $b = 'not a number';
// $result = sumBis($a, $b);
// echo $result . '<br>' ; // Output: Error: argument is not a number.

// $a = 5;
// $b = 10;
// $result = sumBis($a, $b);
// echo $result ; // Output: 15

// function acronym($str) {
//     $words = explode(' ', $str);
//     $acronym = '';
//     foreach ($words as $word) {
//         $acronym .= mb_substr($word, 0, 1);
//     }
//     return mb_strtoupper($acronym);
// }

// echo acronym('read the fucking doc') . '<br>'; 


// function replaceAandEWithAE($str) {
    
//     $str = str_replace('ae', 'æ', $str);

//     $str = str_replace('Ae', 'Æ', $str);

//     $str = str_replace(['A', 'a'], 'æ', $str);

//     return $str;
// }


// echo replaceAandEWithAE("caecotrophie") . "<br>";
// echo replaceAandEWithAE("chaenichthys") . "<br>";
// echo replaceAandEWithAE("microsphaera") . "<br>";
// echo replaceAandEWithAE("sphaerotheca") . "<br>";


// function replaceAEWithAandE($str) {
    
//     $str = str_replace('æ', 'ae', $str);

//     $str = str_replace('Æ', 'Ae', $str);

//     return $str;
// }

// echo replaceAEWithAandE("cæcotrophie") . "<br>";
// echo replaceAEWithAandE("chænichthys") . "<br>";
// echo replaceAEWithAandE("microsphæra") . "<br>";
// echo replaceAEWithAandE("sphærotheca") . "<br>";

// function feedback($message, $cssClass = 'info') {
//     $classes = array('info', 'error', 'warning');

    
//     if (in_array($cssClass, $classes)) {
        
//         $escapedMessage = htmlspecialchars($message);

        
//         return "<div class=\"$cssClass\">" . ucfirst($cssClass) . ": $escapedMessage.</div>";
//     } else {
//         return "Invalid CSS class.";
//     }
// }

// // Example usage with the default class
// echo feedback("This is an informational message");
// echo feedback("This is an error message", "error");
// echo feedback("This is a warning message", "warning");

// function generateWord($minLength, $maxLength) {
//     $length = rand($minLength, $maxLength);
//     $characters = 'abcdefghijklmnopqrstuvwxyz';
//     $word = '';
//     for ($i = 0; $i < $length; $i++) {
//         $index = rand(0, strlen($characters) - 1);
//         $word .= $characters[$index];
//     }
//     return $word;
// }

// if (isset($_POST['generate'])) {
//     $word1 = generateWord(1, 5);
//     $word2 = generateWord(7, 15);
// } else {
//     $word1 = '';
//     $word2 = '';
// }

// 
?>

 <!-- <h1>Generate a new word</h1>
     <p>  <?php echo $word1; ?></p>
     <p> <?php echo $word2; ?></p>
     <form method="post">
         <button type="submit" name="generate">Generate</button>
     </form> -->

<?php

//     $str = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
// $str = strtolower($str);
// echo $str; 


?>

<?php
// Volume of a cone which ray is 5 and height is 2 
$volume = 5 * 5 * 3.14 * 2 * (1/3);  
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
// Volume of a cone which ray is 3 and height is 4  
$volume = 3 * 3 * 3.14 * 4 * (1/3);  
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />'; 


function calculate_cone_volume($radius, $height) {
    return $radius * $radius * 3.14 * $height * (1/3);
}

$volume1 = calculate_cone_volume(5, 2);
echo 'The volume of a cone with a radius of 5 and height of 2 = ' . $volume1 . ' cm<sup>3</sup><br />';

$volume2 = calculate_cone_volume(3, 4);
echo 'The volume of a cone with a radius of 3 and height of 4 = ' . $volume2 . ' cm<sup>3</sup><br />';



?>


</body>
</html>





