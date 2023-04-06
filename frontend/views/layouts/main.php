<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <? $this->head(); ?>
</head>
<body>
    <? $this->beginBody(); ?>
    <div class="container">


        <!-- Navbar -->
        <header class="header">
            <a href="/" class="logo">
                <h1>Firdavs</h1>
                <!-- <img src="image-programma/if.png" alt=""> -->
            </a>

            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#skills">skills</a>
                <a href="#services">services</a>
                <a href="#work">work</a>
                <a href="#contact">contact</a>
            </nav>

            <div class="icons">
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>
        </header>

        
        <?= $content; ?>



        <section class="footer">

            <div class="share">
                <!-- <a href="https://www.facebook.com/profile.php?id=100053310756427" target="_blank" class="fab fa-facebook-f"></a>
                <a href="https://t.me/firdavs_tatu" target="_blank" class="fab fa-telegram"></a>
                <a href="https://www.instagram.com/firdavs_ibn_ali/" target="_blank" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a> -->
            </div>

            <div class="links">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#skills">skills</a>
                <a href="#services">services</a>
                <a href="#work">work</a>
                <a href="#contact">contact</a>
            </div>

            <div class="credit">all rights reserved</div>
        </section>

    </div>
    <? $this->endBody(); ?>    
</body>
</html>
<? $this->endPage(); ?>