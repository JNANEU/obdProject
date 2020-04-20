<?php
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    require_once "functions/functions.php"; 
    $title = "Аутентификация";
    $target = getAdvert();
    require_once "blocks/head.php";    
    ?>
</head>
<body>
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="regAuthForm">
            <form action="functions/testreg.php" method="post">
            <p>
                <label>Введите ваш логин:<br></label>
                <input name="login" type="text" size="15" maxlength="15">
            </p>
            <p>
                <label>Введите ваш пароль:<br></label>
                <input name="password" type="password" size="15" maxlength="15">
            </p>
            <p>
                <input type="submit" name ="submit" value="Войти"><br>
            </p> 
            <div id="propose">
                <br><br><br><br>
                <p>Желаете пройти регистрацию?</p>
                <a href = "reg.php">Зарегистрироваться</a>
            </div>
            </form>
            <br>
            <?php
                if(empty($_SESSION['login']) or empty($_SESSION['id'])){
                    echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
                }
                else{                   
                echo "Вы вошли на сайт, как ".$_SESSION['login']."<br><a  href='../index.php'>Эта ссылка доступна только  зарегистрированным пользователям</a>";
                }
            ?>
        </div>
        <?php require_once "blocks/rightCol.php" ?>
    </div>
    <?php require_once "blocks/footer.php" ?>
</body>
</html>