<?php
// fghjkjhgfghjxc

// $name = 'oluchy arinze';
// print("Welcome ".$name." rtyui". "srdtfyhg");
// $arr = [
//     'name'=>'oluchy'
// ];
// print($arr['name']);

// $fruits = [
//     'mango', 'apple', 'orange'
// ];
// print_r($fruits);

// $age = 20;
// if ($age < 10){
//     pri nt('way to go');
// }elseif($age < 18){
//     print('no way');
// }else{
//     print('Perfector');
// }

// SWITCH STATEMENT ON PHP is used to select on of the many blocks of code to be executed,m 

// $Fav_Fruit = "apple";

// switch ($Fav_Fruit) {
//     case "orange": 
//         echo "fav fruit is orange";
//     break; 
//     case "banana":
//         echo 'fave fruit is banana';
//     break;   
//     case 'apple':
//         echo 'fave fruit is apple';
//     break;

// }


// FUNCTIONS

// function add($orange, $apple){
//     return $orange+$apple;
// }
// $res = add(10,15);
// print($res);

// OBJECT ORIENTED PROGRAMMING
 
    // var_dump($_GET);

//     $username ='root';
//     $password ='';
//     $database = 'login';
//     $host = 'localhost';

//     $conn = new mysqli($host, $username, $password, $database);
//     $conn  ->query("INSERT INTO `user_data`
//     (`id`, `name`, `username`, `email`, `password`)
//      VALUES 
//      (null,'Arinze','Arinzey1','arinze@gmail.com','9876543g2h1jsh')");

//      $conn ->query("INSERT INTO `user_data`
//      (`id`, `name`, `username`, `email`, `password`) 
//      VALUES 
//      (null,'johnbosco','jbnze1','jbnze@gmail.com','081lynda1997')");
    if (!isset($_POST ["Username"])){
        exit;
    }

    

    // echo "Welcome ";
    // echo $_POST ["Username"];
    // echo "<br>";
    // echo $_POST ["Password"];
    // TO GO TO YOUR DATABASE YOU TYPE LOCAL HOST/PHPMYADMIN
    
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post">

        <label for="Username/Email">Username/Email</label>
        <input type="text" name="Username" id="Username"><br>
        <label for="Password">Password</label>
        <input type="text" name="Password" id="Email"><br>

        <button>Submit</button>

    </form>

    
</body>
</html>