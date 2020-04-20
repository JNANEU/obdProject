<!DOCTYPE html>
<html>
<head>
    <?php
    require_once "functions/functions.php"; 
    $title = "Регистрация";
    $target = getAdvert();
    require_once "blocks/head.php";    
    ?>
</head>
<body>
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <?php
        if(empty($_SESSION['login']) or empty($_SESSION['id'])){
        echo '<div id="regAuthForm">
            <form action="functions/save_user.php" method="post" enctype="multipart/form-data">
            <p>
            <label>Логин:<br></label>
            <input name="login" type="text" size="15" maxlength="15">
            </p>
            <p>
            <label>Пароль:<br></label>
            <input name="password" type="password" size="15" maxlength="15">
            </p>
            <p>
              <label>Выберите ваш аватар:<br></label>
              <input type="FILE" name="fupload">
            </p>
            <p>
            <br>
            <input type="submit" name="submit" value="Зарегистрироваться">
            </p>
            </form>
        </div>';
        } else{
            echo '<div id="logged"><p>Вы уже зашли под вашим ником!</p></div>';
        }
        ?>
        <?php require_once "blocks/rightCol.php" ?>
    </div>
    <?php require_once "blocks/footer.php" ?>
</body>
</html>