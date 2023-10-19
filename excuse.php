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
    
</body>
</html>