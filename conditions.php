
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>
<body>
<h1>Conditions</h1>

<?php

/**
 * Series of exercises on PHP conditional structures.
 * Becode -->
 * https://github.com/becodeorg/CRL-KELLER-6/blob/main/1.TRAIL/2.The-Hill/2.PHP/1.PHP-Fundamentals/4-php-drill.md
  
*/


//  1.1 Clean your room Exercise 
// 1.1. Read, then fix this code

//         $room_is_filthy = true;

//         if( $room_is_filthy == false ){
//             echo "Yuk, Room is dirty : let's clean it up !";
//             cleanup_room();
//             echo "<br>Room is now clean!";
//             $room_is_filthy = false;
//         } else {
//             echo "<br>Nothing to do, room is neat.";
//         }

//         ?>



<?php

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
// Expected result: when changing the value of $room_filthiness 
// to any of the possible room states, the relevant message should be displayed.

// $possible_states = ['health hazard', 'filthy', 'dirty', 'clean', 'immaculate'];

// // When testing, change the index value to navigate to the possible array values
// $room_filthiness = $possible_states[4]; 

// if( $room_filthiness == $possible_states[0] || $room_filthiness == $possible_states[1] ){
//     echo "Yuk, Room is Disgusting! Let's burn it up !";
// } else if( $room_filthiness == $possible_states[2] ){
//     echo "Yuk, Room is dirty : let's clean it up !";
// // ...
// } else {
//     echo "<br>Nothing to do, room is neat.";
// }

// ?>


<!-- 2. Display a different greeting message depending on the time of the day.
You know what's worse than a stupid robot? A stupid impolite robot. Let's fix that.

Write a script that implements these specifications :

If the time is between 05h00 and 09h00, display "Good morning !".
If the time is between 09h01 and 12h00, display "Good day !".
If the time is between 12h01 and 16h00, display "Good afternoon !".
If the time is between 16h01 and 21h00, display "Good evening !".
If the time is between 21h01 and 04h59, display "Good night !".
Tip: you can combine multiple conditions (using AND / OR). -->

<?php

// 2. "Different greetings according to time" Exercise

// $Timezone = date_default_timezone_get();
// $now =date('H:i:s') ;// How to get the current time in PHP ? Google is your friend ;-)

// echo "<h1>$now</h1>";

// Test the value of $now and display the right message according to the specifications.


// if($now >= '05:00:00' and $now <= '09:00:00'){
//     echo "Good morning !";
// } else if($now >= '09:01:00' and $now <= '12:00:00'){
//     echo "Good day !";
// } else if($now >= '12:01:00' and $now <= '16:00:00'){
//     echo "Good afternoon !";
// } else if($now >= '16:01:00' and $now <= '21:00:00'){
//     echo "Good evening !";
// } else if($now >= '21:01:00' and $now <= '04:59:00'){
//     echo "Good night !";
// }

?>

<!-- 3. Display a different greeting according to the user's age.
Let's continue to make our robot a little more civil and greet humans properly, taking into account their age.

Here is the user experience we aim for :
First, users see a form asking for their age :

Please type your age : __

When they submit the form, the page displays the right message:

if age is less than 12 years old, display "Hello kiddo!"
if age is between 12 and 18 years old, display "Hello Teenager !"
if age is between 18 and 115 years old, display Hello Adult !"
if age is beyond 115 years old, display "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?"
Have both the form and the processing script in the same file. Use the GET method. -->


// 3. "Different greetings according to age" Exercise

if (isset($_GET['age']){
	// Form processing

}
// Form (incomplete)
?>
<form method="get" action="">
	<label for="age">...</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>





</body>
</html>



