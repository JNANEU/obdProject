<!DOCTYPE html>
<html>
<head>
    <?php
    require_once "functions/functions.php"; 
    $news = getNews(3);
    $target = getAdvert();
    $title = "Статьи обо всём";
    require_once "blocks/head.php";    
    ?>
</head>
<body>
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
        <?php
            for($i = 0; $i < count($news); $i++){
                if($i == 0)
                    echo "<div id=\"bigArticle\">";
                else   
                    echo "<div class=\"article\">";
                echo '<img src="/img/article_'.$news[$i]["id"].'.jpg" alt="Статья '.$news[$i]["id"].'" title="Статья '.$news[$i]["id"].'">
                <h2>'.$news[$i]["title"].'</h2>
                <p>'.$news[$i]["short_text"].'</p>
                <a href="/article.php?id='.$news[$i]["id"].'"><div class="more">Далее</div></a>
            </div>';
            if($i == 0)
                echo "<div id=\"clear\"><br></div>";
            }
        ?>
        </div>
        <?php require_once "blocks/rightCol.php" ?>
    </div>
    <?php require_once "blocks/footer.php" ?>
</body>
</html>