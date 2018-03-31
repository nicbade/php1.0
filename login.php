<?php

// if the username and password are submitted, echo them
if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    

    // variable for the mysql connection
    // params ('server', 'username', 'password', 'database')
$connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');

    if($connection) {

        echo "We are connected";

    } else {

        // exits the current script and prints a message 
        die("Database connection failed");

    }

    // if($username && $password) {

    //     echo $username . ' ' . $password;

    // } else {

    //     echo "this field cannot be blank";
    // }


    // echo $username . ' ' . $password;

}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    
<div class="container">

    <div class="col-xs-6">
    
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    </form>
    </div>

</div>


</body>
</html>