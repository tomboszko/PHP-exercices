
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

//2. "Different greetings according to time" Exercise

// $Timezone = date_default_timezone_get();
// $now =date('H:i:s') ;// How to get the current time in PHP ? Google is your friend ;-)

// echo "<h1>$now</h1>";

// //Test the value of $now and display the right message according to the specifications.


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

// ?>

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

  <?php

// if (isset($_GET['age'])) {
//     $age = $_GET['age'];
//     if ($age < 12) {
//         echo "Hello kiddo!";
//     } elseif ($age >= 12 && $age <= 18) {
//         echo "Hello Teenager !";
//     } elseif ($age > 18 && $age <= 115) {
//         echo "Hello Adult !";
//     } else {
//         echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
//     }
// }
?> 

<!--<form method="get" action="">
    <label for="age">Please type your age :</label>
    <input type="number" name="age">
    <input type="submit" name="submit" value="Greet me now">
</form> -->

<!-- 4. Display a different greeting according to the user's age and gender.
Improve the previous form to add another question: "Man or Woman?". Use an input of type radio to capture the data.
If gender is "Woman", the displayed message should be adapted accordingly.
For example, if the user age is between 12 and 18 and the gender is female, display "Hello Miss Teen!" otherwise, display "Hello mister Teen!".
Do the same for all the other age ranges.
Tip: You can nest conditional structures inside others. -->


<?php

// if (isset($_GET['age']) && isset($_GET['gender'])) {

//     $age = $_GET['age'];
//     $gender = $_GET['gender'];

//     if ($age < 12) {
//         if ($gender == "Woman") {
//             echo "Hello little girl!";
//         } else {
//             echo "Hello little boy!";
//         }
//     } elseif ($age >= 12 && $age <= 18) {
//         if ($gender == "Woman") {
//             echo "Hello Miss Teen!";
//         } else {
//             echo "Hello mister Teen!";
//         }
//     } elseif ($age > 18 && $age <= 115) {
//         if ($gender == "Woman") {
//             echo "Hello Madam!";
//         } else {
//             echo "Hello Sir!";
//         }
//     } else {
//         echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
//     }
// }
// ?>

<!--  <form method="get" action="">
    <label for="age">Please type your age :</label>
     <input type="number" name="age">
     <br>
    <label for="gender">Man or Woman?</label>
     <input type="radio" name="gender" value="Man">Man
     <input type="radio" name="gender" value="Woman">Woman
     <br>
     <input type="submit" name="submit" value="Greet me now">
 </form> -->

 <!-- 5. Display a different greeting according to the user's age, gender and mothertongue.
Improve the previous form to add yet another question: "Do you speak English ? ". 
Use an input of type radio to capture the data. Possible answers: "yes" or "no".
Then modify your form processing script to implement this :

If age is below 12 and the user replies "yes", display : "Hello boy!" or "Hello Girl!" according to the gender indicated.
If the answer is "no", display "Aloha boy" or "Aloha Girl"
Adapt all the other answers accordingly, using "Aloha" instead of "Hello". -->

<?php

// if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english'])) {

//     $age = $_GET['age'];
//     $gender = $_GET['gender'];
//     $english = $_GET['english'];

//     if ($age < 12) {

//         if ($english == "yes") {

//             if ($gender == "Woman") {
//                 echo "Hello Girl!";
//             } else {
//                 echo "Hello boy!";
//             }
//         } else {
//             if ($gender == "Woman") {
//                 echo "Aloha Girl!";
//             } else {
//                 echo "Aloha boy!";
//             }
//         }
//     } elseif ($age >= 12 && $age <= 18) {

//         if ($english == "yes") {

//             if ($gender == "Woman") {
//                 echo "Hello Miss Teen!";
//             } else {
//                 echo "Hello mister Teen!";
//             }
//         } else {
//             if ($gender == "Woman") {
//                 echo "Aloha Miss Teen!";
//             } else {
//                 echo "Aloha mister Teen!";
//             }
//         }
//     } elseif ($age > 18 && $age <= 115) {

//         if ($english == "yes") {

//             if ($gender == "Woman") {
//                 echo "Hello Madam!";
//             } else {
//                 echo "Hello Sir!";
//             }
//         } else {
//             if ($gender == "Woman") {
//                 echo "Aloha Madam!";
//             } else {
//                 echo "Aloha Sir!";
//             }
//         }
//     } else {
//         echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
//     }
// }
// ?>

 <!-- <form method="get" action="">
     <label for="age">Please type your age :</label>
    <input type="number" name="age">
     <br>
    <label for="gender">Man or Woman?</label>
    <input type="radio" name="gender" value="Man">Man
     <input type="radio" name="gender" value="Woman">Woman
     <br>
     <label for="english">Do you speak English?</label>
    <input type="radio" name="english" value="yes">Yes
     <input type="radio" name="english" value="no">No
    <br>
     <input type="submit" name="submit" value="Greet me now">
 </form> -->


 <!-- 6. The Girl Soccer team
You want to create a soccer team for girls between 21 and 40 years old.

Create a form asking for the age, gender and name of the person. 
Use the $age and $gender variables in an if/else to display
 a "welcome to the team !" or "Sorry you don't fit the criteria" message. -->


<!-- <form method="get" action="">
     <label for="age">Please type your age :</label>
    <input type="number" name="age">
     <br>
    <label for="gender">Man or Woman?</label>
    <input type="radio" name="gender" value="Man">Man
     <input type="radio" name="gender" value="Woman">Woman
     <br>
     <label for="Name">Enter your name:</label>
    <input type="text" name="name">
     <br>
     
     <input type="submit" name="submit" value="Submit">
 </form> -->

 <?php
// if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['name'])) {

//     $gender = $_GET['gender'];
//     $age = $_GET['age'];
//     $name = $_GET['name'];

//     if ($gender == "Woman" && $age >= 21 && $age <= 40) {
//         echo "Welcome to the team, $name!";
//     } else {
//         echo "Sorry, $name, you don't fit the criteria !";
//     }
// }
?>
<?php

// 7. Achieve the same, without the ELSE.
// A key aspect of coding conditions is to keep them as simple as possible. 
// Improve the previous exercise by using only an if statement (without the else), 
// and a default value that changes only if the condition is true.

// if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['name'])) {

//     $gender = $_GET['gender'];
//     $age = $_GET['age'];
//     $name = $_GET['name'];

//     $message = "Sorry, you don't fit the criteria.";

//     if ($gender == "Woman" && $age >= 21 && $age <= 40) {
//         $message = "Welcome to the team, $name!";
//     }

//     echo $message;
// }
?>

<!-- <form method="get" action="">
     <label for="age">Please type your age :</label>
    <input type="number" name="age">
     <br>
    <label for="gender">Man or Woman?</label>
    <input type="radio" name="gender" value="Man">Man
     <input type="radio" name="gender" value="Woman">Woman
     <br>
     <label for="Name">Enter your name:</label>
    <input type="text" name="name">
     <br>
     
     <input type="submit" name="submit" value="Submit">
 </form> -->

 <!-- 8. "School sucks!" Exercise
Start a new form that would allow a (nasty) teacher to grade a student.

It would display a different message according to the number annotated :

note below 4 : "This work is really bad. What a dumb kid! "
note between 5 and 9 : "This is not sufficient. More studying is required."
note equals 10 : "barely enough!"
note is 11, 12, 13 or 14 : "Not bad!"
note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
note is 19 or 20 : "Too good to be true : confront the cheater!" -->


 <!-- <form method="get" action="">
     <label for="note">Note:</label>
     <select name="note">
         <?php for ($i = 1; $i <= 20; $i++) { ?>
             <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
         <?php } ?>
     </select>
     <input type="submit" name="submit" value="Submit">
 </form> -->

 <?php 

// if (isset($_GET['note'])) {

//     $note = $_GET['note'];

//     if ($note < 4) {
//         echo "This work is really bad. What a dumb kid!";
//     } elseif ($note >= 5 && $note <= 9) {
//         echo "This is not sufficient. More studying is required.";
//     } elseif ($note == 10) {
//         echo "Barely enough!";
//     } elseif ($note >= 11 && $note <= 14) {
//         echo "Not bad!";
//     } elseif ($note >= 15 && $note <= 18) {
//         echo "Bravo, bravissimo!";
//     } elseif ($note >= 19 && $note <= 20) {
//         echo "Too good to be true : confront the cheater!";
//     }
// }

?>







 </body>
 </html>



