<!DOCTYPE html>
<html>
<head>
    <?php 
    $title = "Новосты обо всём";
    require_once "blocks/head.php" 
    ?>
</head>
<body>
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <div id="bigArticle">
                <img src="/img/article_1.jpg" alt="Статья 1" title="Статья 1">
                <h2>Статья 1</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the industry's 
                    standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type 
                    specimen book. It has survived not only five centuries, 
                    but also the leap into electronic typesetting, remaining 
                    essentially unchanged. It was popularised in the 1960s with 
                    the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus
                     PageMaker including versions of Lorem Ipsum.</p>
                <a href="/article.php"><div class="more">Далее</div></a>
            </div>
            <div id="clear"><br></div>
            <div class="article">
            <img src="/img/article_1.jpg" alt="Статья 1" title="Статья 1">
                <h2>Статья 1</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the industry's 
                    standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type 
                    specimen book. It has survived not only five centuries, 
                    but also the leap into electronic typesetting, remaining 
                    essentially unchanged.</p>
                <a href="/article.php"><div class="more">Далее</div></a>
            </div>
            <div class="article">
            <img src="/img/article_1.jpg" alt="Статья 1" title="Статья 1">
                <h2>Статья 1</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the industry's 
                    standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type 
                    specimen book. It has survived not only five centuries, 
                    but also the leap into electronic typesetting, remaining 
                    essentially unchanged. </p>
                <a href="/article.php"><div class="more">Далее</div></a>
            </div>
            <div class="article">
            <img src="/img/article_1.jpg" alt="Статья 1" title="Статья 1">
                <h2>Статья 1</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the industry's 
                    standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type 
                    specimen book. It has survived not only five centuries, 
                    but also the leap into electronic typesetting, remaining 
                    essentially unchanged. </p>
                <a href="/article.php"><div class="more">Далее</div></a>
            </div>
        </div>
        <?php require_once "blocks/rightCol.php" ?>
    </div>
    <?php require_once "blocks/footer.php" ?>
</body>
</html>