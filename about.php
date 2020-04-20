<!DOCTYPE html>
<html>
<head>
    <?php 
    require_once "functions/functions.php"; 
    $title = "О нас";
    require_once "blocks/head.php" ;
    $target = getAdvert();
    ?>
</head>
<body>
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <div id="about_us"><p>We did it!</p></div>
        </div>
        <?php require_once "blocks/rightCol.php" ?>
    </div>
    <?php require_once "blocks/footer.php" ?>
</body>
</html>