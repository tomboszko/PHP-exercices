<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataHandling</title>
</head>
<body>
    
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


function connectToDatabase() {
    $servername = "localhost";
    $username = "toms";
    $password = "root";
    $dbname = "test";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function insertData($conn, $name, $password, $email) {
    $stmt = $conn->prepare("INSERT INTO newTable (Name, Password, Mail) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $password, $email);
    return $stmt->execute();
}
?>

<form method="post" action="tableHandling.php">
    <label for="Name">Username:</label>
    <input type="text" name="Name" id="Name" required>
    
    <label for="Password">Password:</label>
    <input type="password" name="Password" id="Password" required>
    
    <label for="Mail">Email:</label>
    <input type="email" name="Mail" id="Mail" required>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['Name'];
    $userPassword = password_hash($_POST['Password'], PASSWORD_DEFAULT);
    $email = $_POST['Mail'];

    $conn = connectToDatabase();
    if (insertData($conn, $user, $userPassword, $email)) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>


</body>
</html>