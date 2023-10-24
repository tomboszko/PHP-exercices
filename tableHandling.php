<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataHandling</title>
</head>
<body>
    
<?php
$servername = "localhost";
$username = "toms";
$password = "root";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
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

    $stmt = $conn->prepare("INSERT INTO newTable (Name, Password, Mail) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user, $userPassword, $email);

    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

</body>
</html>

form {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 0 auto;
  width: 250px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

label {
  margin-bottom: 10px;
}

input[type="text"],
input[type="password"],
input[type="email"] {
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 100%;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

input[type="submit"]:hover {
  background-color: #45a049;
}
</style>

</body>
</html>