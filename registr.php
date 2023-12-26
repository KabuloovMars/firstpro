<?php require 'model.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body background="photo/fon2.jpg">
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"><h3><a href="login.php" style="color:red">Log in </a></h3></div>
            <div class="col-4">
                <form action="" method="post">
                <h2 style="color:red;border:50px solid red">Sign in</h2><br>
                <label for="name" style="color:white">username:</label>
                <input type="text" name="name" placeholder="Name..." id="name"><br><br>
                <label for="email" style="color:white">Email:</label>
                <input type="email" name="email" placeholder="Email..." id="email"><br><br>
                <label for="pass" style="color:white">Password:</label>
                <input type="password" name="pass" placeholder="Password..." id="pass"><br><br>
                <input type="submit" value="OK"><br><br>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
   
    <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    registr($name,$email,$pass);
    $time = 0;
    setcookie('name',$name,$time,"/");

if(file_exists("data.txt")){
    fopen("data.txt","a");
    fwrite(fopen("data.txt","a"),$name."\r\n".$email."\r\n".$pass."\r\n");
    header("Location:login.php");    
}
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>