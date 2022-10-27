<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qazaq Republic</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="shortcut icon" href="assets/img/qr.jpg" type="image/x-icon" />
</head>
<body>
    <!-- Шапка -->
    <?php require_once "blocks/navbar.php" ?>
    <header class="header">
        <div class="header-container">
            <div>
                <h1 class="header-title">qr</h1>
                <p class="header-subtitle">Qazaq Republic</p>
                <p class="header-description">FW22 — жаңа топтама. біз жасаған ең ауқымды дроп. жаңа дизайн, жаңа принттер. бұл тек бастамасы, біз сені күтеміз</p>
                <div class="buy-wrapper">
                    <a href="about.php" class="buy-link">О нас</a>
                    <div class="price">История</div>
                </div>
            </div>
            <div class="header-img-wrapper">
            <video controls="controls" style="width: 500px">
                <source src="assets/img/qr05.mp4">
            </video>
            </div>
    </div>
    </header>
    <!-- Основа -->
    <main>
        <p class="popular-title">popular</p>
        <p class="models-title">Models</p>
        <div class="item-wrapper">
            <div class="item-img-wrapper">
                <img src="assets/img/qr01.jpg" alt="Model son22">
            </div>
            <h2 class="item-title">Son22</h2>
            <p class="item-description">The watch also features a tough and durable sapphire crystal glass and comes with a Swiss SW200-1 automatic winding movement that has a power reserve.</p>
        </div>
        <div class="item-wrapper">
            <div class="item-img-wrapper">
                <img 
                srcset="assets/img/qr02.jpg"
                src="/assets/img/qr02.jpg" 
                alt="Model sw12">
            </div>
            <h2 class="item-title">Sw12</h2>
            <p class="item-description">The watch also features a tough and durable sapphire crystal glass and comes with a Sw12-1 automatic winding</p>
        </div>
        <!-- Низ сайта -->
        <div class="product-description-wrapper">
            <p class="product-description-title">Product description</p>
            <hr class="line">
            <p class="product-description">Inspired by the WWI trench watch, this timepiece has a contemporary design with an urban style and a vintage soul. The 22 Design Studio Concrete Sector Watch reinterprets the old timepiece with a concrete dial. Handmade in Taiwan, the dial is cast in one piece using the béton technique <a class="product-description-link" href="https://qazaqrepublic.taplink.ws/">more detailed</a></p>
        </div>
    </main>
<?php require_once "blocks/footer.php" ?>
</body>
</html>