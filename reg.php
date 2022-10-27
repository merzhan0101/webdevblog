<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Регистрация</title>
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
            <h1>Регистрация</h1>
            <form class="formar" action="validation-form/reg.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите ваше имя"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit">Зарегистрироваться</button>
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

