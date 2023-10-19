<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Excuses Notes Generator</title>
</head>
<body>

<form method="get" action="generate.php">
    <h2>Fake Excuses Notes Generator</h2>
    
        <label for="name">Name of the child:</label>
        <input type="text" name="ChildName" required>
        
        <label for="gender"></label>
        <input type="radio" name="gender" value="boy" required> Boy
        <input type="radio" name="gender" value="girl" required> Girl
        <br>

        <label for="name">Teacher:</label>
        <br>
        <input type="text" name="TeacherName" required>
        <br>
        <label for="date"> Absence Date:</label>
        <input type="date" name="date" required>
        <br>
        
        <label for="gender">Choose a reason:</label>
        <br>
        <input type="radio" name="reason" value="illness" required> illness
        <br>
        <input type="radio" name="reason" value="death of the pet (or a family member)" required> death of the pet (or a family member)
        <br>
        <input type="radio" name="reason" value="significant extra-curricular activity" required> significant extra-curricular activity
        <br>
        <input type="radio" name="reason" value="Too dumb" required> Too dumb

        <div id="buttonContainer">
        <input type="submit" id="submit" name="submit" value="Generate">
        </div>
        
    </form>

    <div id="GeneratedExcuse">


    </div>

    <style>
        body {
            background-color: #333;
            font-family: Arial, Helvetica, sans-serif;
            color: #333;
        }

        form {
            width: 350px;
            margin-top: 2rem;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #ccc;
        }

        h2 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }

        label {
            font-weight: 900;
        }

        input {
            
            margin: 5px;
            padding: 2px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #submit {
            text-align: center;
            background-color: #333;
            color:#fff;
            width: 76px;
            height:26px;
            
           
        }

        #submit:hover {
    background-color: black;
    
}

        #buttonContainer {
            text-align: center;
        }
    </style>

<?php
    // Array of excuses for each reason
    $excuses = array(
        "illness" => array(
            "I'm sorry, but my child is feeling under the weather and won't be able to attend school today.",
            "Unfortunately, my child has come down with an illness, and it's best for them to stay home.",
            "Due to a sudden illness, my child won't be able to make it to school today."
        ),
        "death of the pet (or a family member)" => array(
            "My child is going through a difficult time due to the loss of a family pet.",
            "We've had a family tragedy with the loss of a pet, and my child needs some time to cope.",
            "There's been a sad incident in our family with the passing of a pet."
        ),
        "significant extra-curricular activity" => array(
            "My child has an important extracurricular event that they can't miss today.",
            "There's a significant extracurricular activity that my child must attend.",
            "My child has a special event for their extracurricular activity today."
        ),
        "Too dumb" => array(
            "My child is feeling overwhelmed by the schoolwork, and we need to address this issue.",
            "We've noticed some difficulties in my child's understanding, and we're taking steps to address it.",
            "Due to academic struggles, my child needs a break to catch up on their studies."
        )
    );

    // Get the form inputs
    $childName = $_GET['ChildName'];
    $gender = $_GET['gender'];
    $teacherName = $_GET['TeacherName'];
    $date = $_GET['date'];
    $reason = $_GET['reason'];

    // Select a random apology for the chosen reason
    $selectedApology = $excuses[$reason][array_rand($excuses[$reason])];

    // Generate the apology letter
    $apologyLetter = "Dear $teacherName,\n\n";
    $apologyLetter .= "I am writing to inform you that my $gender, $childName, will not be able to attend school on $date.\n\n";
    $apologyLetter .= "The reason for their absence is: $reason.\n\n";
    $apologyLetter .= "Apology: $selectedApology\n\n";
    $apologyLetter .= "Sincerely,\nParent";

    // Display the apology letter
    echo "<h2>Generated Excuse</h2>";
    echo nl2br($apologyLetter);
    ?>
    
</body>
</html>