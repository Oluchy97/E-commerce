<?php
if(isset($_POST["Username"])){
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];

    $Username = $_POST["Username"];
    $Password = $_POST["Password"];

    $conn = new mysqli("localhost", "root","", "login");
    if($conn->connect_error){
        exit("Error Connecting to DB");
    }

            
    $Username = $conn->escape_string($Username);
    
    $query = "SELECT * FROM `user_data` WHERE `username` = '$Username'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if ($count>0) {
        echo "Login Successful";
    } else {
        echo "Login Not Successful";
    }
    

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1> Login </h1>

    <form action="" method="post">
        <label for="Username/Email">Username/Email</label>
        <input type="text" name="Username" id="Username"> <br>

        <label for="Password">Password</label>
        <input type="text" name="Password" id="Password">

        <button>Submit</button>
    </form>

</body>
</html>