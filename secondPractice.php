<!doctype html>
<html lang="en">
<head>
<!--    <link rel="preload" href="fonts/webfonts/JetBrainsMono-Regular.woff2" as="font" type="font/woff2" crossorigin>-->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Second Practice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("navbar.php"); ?>

<button id="themeToggle">Переключить тему</button>

<header class="site-header">
    <h1>Stankevich Stepan</h1>
</header>

<main>
    <article class="experience">
        <header class="experience-header">
            <time datetime="02-06-2025">First working day</time>
            <h2 class="experience-title">
                Блок Опыт
            </h2>
        </header>
    </article>

    <article class="skills">
        <header class="skills-header">
            <ul>
                <li>Первый навык</li>
                <li>Второй навык</li>
                <li>Третий навык</li>
            </ul>
        </header>
    </article>

    <article class="contacts">
        <footer>
            <header class="contacts-header">
                <ul>
                    <li><a href="#">TG</a></li>
                    <li><a href="#">VK</a></li>
                    <li><a href="#">X</a></li>
                </ul>
            </header>
        </footer>
    </article>

    <div class="product-card">
        <img src="product.png" alt="Product">
        <h3>Product Name</h3>
        <p>Description</p>
        <button>Buy</button>
    </div>

<!--    do this just for big size text-->
    <p style="font-size: 3em; font-weight: bold">СКАНДАЛ! Кошка уснула на морозильнике с бройлерами в супермаркете...</p>
<!--    not this-->
    <h1>СКАНДАЛ! Кошка уснула на морозильнике с бройлерами в супермаркете...</h1>
</main>
</body>
</html>
<script>
    document.getElementById('themeToggle').addEventListener('click', function() {
        const currentTheme = document.body.className;
        if (currentTheme === 'light-theme') {
            document.body.className = 'dark-theme';
        } else {
            document.body.className = 'light-theme';
        }
    });
</script>