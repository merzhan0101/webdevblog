<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Авторизация</title>
    <?php require_once "blocks/header.php" ?>
</head>
<body>
    <?php require_once "blocks/navbar.php" ?>    
<div class="container mt-4">
    <?php 
        if($_COOKIE['user'] == ''):
    ?>
    <div class="row">
        <div class="col">
            <h1>Авторизация</h1>
            <form class="formar" action="validation-form/auth.php" method="post">
                <input type="text" class="form-control" name="login" placeholder="Введите ваш логин"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите ваш пароль"><br>
                <button class="btn btn-success" type="submit">Авторизация</button>
            </form>
        </div>
        <?php else: ?>
            <p>Salem<?=$_COOKIE['user']?>.Чтобы выйти нажмите <a href="validation-form/exit.php">сюда</a></p>
        <?php endif; ?>    
    </div>    
</div>


    <!-- ?php require_once "blocks/footer.php" ?> -->


</body>
</html>