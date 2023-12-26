<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
  <?php if($_COOKIE['login'] == NULL) :?>
    
    <div class="col-2" style="border:2px solid black">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque natus perferendis quod voluptatibus ducimus quam dolorum numquam dignissimos saepe quis sapiente doloremque nihil ab hic, quas praesentium doloribus officiis nesciunt.</div>
        <div class="col-4" style="border:2px solid black">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione similique ipsa quibusdam deserunt amet illo maiores esse doloremque ducimus voluptatum iusto, quam autem quo nobis sint, obcaecati omnis veritatis id? Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda libero dolore fugiat cupiditate tempore provident consectetur necessitatibus ab vitae numquam dolores inventore, quos veniam illo sunt, dignissimos delectus! Eum, illum!</div>
        <div class="col-4" style="border:2px solid black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate natus illum pariatur libero quas repudiandae ipsam velit delectus harum, vel nulla cumque eligendi quaerat, adipisci sit assumenda perspiciatis voluptas error? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus odit quas reprehenderit fugiat cumque libero nemo rerum dolorum sed provident. Aspernatur voluptas hic laborum nesciunt totam sunt, suscipit aliquam maiores?</div>
        <div class="col-2">
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <button type="button" class="btn btn-warning"><a href="registr.php">Sign up</a></button>
  <button type="button" class="btn btn-danger"><a href="login.php">Log in</a></button>

    <?php else :?>
            <h1>Good morning <?php echo "<br>". $_COOKIE['name']; ?></h1>
            <?php endif;?>
</div>

</div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>