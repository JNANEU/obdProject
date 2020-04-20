<!DOCTYPE html>
<html>
<head>
    <?php
    require_once "functions/functions.php";
    $news = getNews(3);
    $target = getAdvert();
    $title = "Статьи обо всём";
    require_once "blocks/head.php";   
    if    (empty($_SESSION['login']) and empty($_SESSION['id'])) {
exit ("Доступ на эту    страницу разрешен только зарегистрированным пользователям с доступом администратора. Если вы    зарегистрированы, то войдите на сайт под своим логином и паролем<br><a    href='../index.php'>Главная    страница</a>");          } 
else if($_SESSION['permissions'] != 1){  
    exit ("Доступ на эту    страницу разрешен только зарегистрированным пользователям с доступом администратора. Если вы    зарегистрированы, то войдите на сайт под своим логином и паролем<br><a    href='../index.php'>Главная    страница</a>");
} 
    ?>
    
</head>
<body>
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <a href="addElement.php?action=addArticle"><div class="more">Добавить статью</div></a>
            <a href="addElement.php?action=addAdvert"><div class="more">Добавить рекламу</div></a>
            <a href="addElement.php?action=userList"><div class="more">Управление поользователями</div></a>
        </div>
        <?php require_once "blocks/rightCol.php" ?>
    </div>
    <?php require_once "blocks/footer.php" ?>
</body>
</html>