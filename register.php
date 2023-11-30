<?php
// Connect to the database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email=$_POST["email"];

    // You should perform validation and hashing here

    // Example: Insert user into the database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password','$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>

<h2>Đăng ký</h2>
<form action="register.php" method="post">
    <label for="username">Tên đăng nhập:</label>
    <input type="text" name="username" required>
    <br>
    <label for="password">Mật khẩu:</label>
    <input type="password" name="password" required>
    <br>
    <label for="password">Email</label>
    <input type="text" name="email" required>
    <br>
    <input type="submit" value="Đăng ký">
</form>

</body>
</html>
