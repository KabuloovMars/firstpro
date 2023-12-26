<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php 
       $_COOKIE['name'] = $_POST['name'];
    ?>
    <?php 
    require 'model.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
            <?php if($_COOKIE['login'] == NULL) :?>
            <h1><a href="index.php">Авторизация</a></h1>
            <?php else :?>
            <h1>Good morning <?php echo "<br>". $_COOKIE['name']; ?></h1>
            <?php endif;?>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>