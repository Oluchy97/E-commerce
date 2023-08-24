<?php
// Check that the form was submitted
$issubmitted =isset($_POST["username"]);
if($issubmitted){
    // validate input
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    // validate

    // input to database
    $conn = new mysqli("localhost", "root","", "login");
    if($conn->connect_error){
        exit("Error Connecting To DB");
    }

    // escape for hacks
    $surname = $conn->escape_string($name);
    $surname = $conn->escape_string($username);
    $email = $conn->escape_string($email);
    $password = password_hash($password, PASSWORD_DEFAULT);

    // RUN QUERY
    $query = "INSERT INTO `user_data` (`name`, `username`, `email`, `password`) VALUES 
    ('$name', '$username', '$email', '$password')";
    $conn->query($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
   
    <title>My first register php </title>

</head>
<body>
    
    <form method="post" name="FormReg">
        <input type="text" name="name" id="name" placeholder="name">
        <input type="text" name="username" id="username" placeholder="username">
        <input type="email" name="email" id="email" placeholder="email">
        <input type="password" name="password" id="password" placeholder="password">
        <button>submit</button>
    </form>
    <script src="js/validate.js"></script>
</body>
</html>
