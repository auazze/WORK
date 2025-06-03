<?php echo "Семантическая разметка" ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Practice</title>
</head>
<body>
<?php include("navbar.php"); ?>
    <header class="site-header">
        <h1>Stankevich Stepan Alexandrovich</h1>
    </header>

    <main>
        <article class="experience">
            <header class="experience-header">
                <h2 class="experience-title">
                    Блок Опыт
                </h2>
                <time datetime="02-06-2025">02-06-2025</time>
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

        <footer>
            <article class="contacts">
                <header class="contacts-header">
                    <ul>
                        <li><a href="#">TG</a></li>
                        <li><a href="#">VK</a></li>
                        <li><a href="#">X</a></li>
                    </ul>
                </header>
            </article>
        </footer>
    </main>
</body>
</html>