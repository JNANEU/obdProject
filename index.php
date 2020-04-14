<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Проект по ОБД</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div id = "logo">
            <a href="/" title="Перейти на главную"><span>Г</span>лавная</a>
        </div>
        <div id = "menuHead">
            <a href="/about.php">
                <div style="margin-right:5%;">О нас</div>
            </a>
            <a href="/feedback.php">
                <div>Обратная связь</div>
            </a>
        </div>
        <div id = "regAuth">
            <a href="reg.php">Регистрация</a> | <a href="auth.php">Авторизация</a>
        </div>
    </header>

   
    <div id="wrapper">
        /*we try to make web site*/
        <div id="leftCol">
            <div id="bigArticle">
            </div>
            <div id="clear"></div>
            <div class="article">
                
            </div>
        </div>
        <div id="rightCol">
            <div class="banner">
                <img src="/img/banner_1.jpg" alt="Баннер 1" title="Баннер 1">
            </div>
            <div class="banner">
                <img src="/img/banner_2.jpg" alt="Баннер 2" title="Баннер 2">
            </div>
        </div>
    </div>
    <footer>
        <div id="social">

        </div>
        <div id="rights">
            Проект студентов группы КИ-182 Луцького Д.О. и Коробки А.Г. &copy; <?=date('Y')?>
        </div>
    </footer>
</body>
</html>