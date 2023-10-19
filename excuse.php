<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Excuses Notes Generator</title>
</head>
<body>

<form method="get" action="generate.php">

        <label for="name">Name of the child:</label>
        <input type="text" name="ChildName" required>
        <br>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="M" required> Male
        <input type="radio" name="gender" value="F" required> Female
        <br>

        <label for="name">Teacher:</label>
        <input type="text" name="TeacherName" required>
        <br>
        <label for="date"> Absence Date:</label>
        <input type="date" name="date" required>
        <br>
        
        <label for="gender">Reason</label>
        <br>
        <input type="radio" name="reason" value="illness" required> illness
        <br>
        <input type="radio" name="reason" value="death of the pet (or a family member)" required> death of the pet (or a family member)
        <br>
        <input type="radio" name="reason" value="significant extra-curricular activity" required> significant extra-curricular activity
        <br>
        <input type="radio" name="reason" value="Won at lottery" required> Won at lottery
        <br>
        <input type="submit" name="submit" value="Generate">
        <br>
    </form>
    
</body>
</html>