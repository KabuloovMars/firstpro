<?php 
require 'model.php';    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body background="photo/fon.jpg">
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="" method="post">
                <h2 style="color: white;border:50px solid black">Log in</h2><br>
                <label for="login" style="color:white">Login:</label>
                <input type="text" name="login" placeholder="Login..." id="login"><br><br>
                <label for="pass"style="color:white">Password:</label>
                <input type="password" name="pass" placeholder="Password..." id="pass"><br><br>
                <input type="submit" value="OK"><br><br>
                </form>

                <h5><a href="index.php" style="color:white">Sign in</a></h5>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <?php 

    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        login($login,$pass);
        if(file_exists('data.txt')){
            $data = 'data.txt';
            $fayl = file('data.txt');
           
    
    if($login = $fayl[1] and $pass = $fayl[2]){
        $time = time()+10;
        setcookie('login',$login,$time,"/");
        setcookie('parol',$pass,$time,"/");
        header("Location:index.php");
    }else{
        echo "Qate";
    }
    }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>