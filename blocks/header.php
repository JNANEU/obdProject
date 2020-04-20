<?php
require_once("functions/connect.php");
connectDB();
if    (!empty($_SESSION['login']) and !empty($_SESSION['id']))
        {    
            $login = $_SESSION['login'];
            $result = $mysqli->query("SELECT id, avatar FROM users WHERE login='$login'"); 
            $myrow = $result->fetch_array();
            }
            ?>

<header>

        <div id = "logo">
            <a href="/" title="Перейти на главную"><span>Г</span>лавная</a>
        </div>
        <?php
        if(empty($_SESSION['login']) or empty($_SESSION['id']) or ($_SESSION['permissions'] != 1)){
        echo '<div id = "menuHead">
            <a href="/about.php">
                <div style="margin-right:5%;">О нас</div>
            </a>
            <a href="/feedback.php">
                <div>Обратная связь</div>
            </a>
        </div>';
        } else {
            echo '<div id = "menuHead">
            <a href="/about.php">
                <div style="margin-right:5%;">О нас</div>
            </a>
            <a href="/feedback.php">
                <div style="margin-right:5%;">Обратная связь</div>
            </a>
            <a href = "/admin_panel.php">
                <div>Админ панель</div>
            </a>
        </div>';
        }
        ?>
        <div id = "regAuth">
        <?php
                if(empty($_SESSION['login']) or empty($_SESSION['id'])){
                    echo '<a href="reg.php">Регистрация</a> | <a href="auth.php">Авторизация</a>';
                }
                else{
                echo "<div id=\"avatar\"><p>Приветствуем вас, ".$_SESSION['login']." </p> |
                <p><a href = \"functions/exit.php\">Выход</a></p>
                <img src=".$myrow['avatar']." name=\"new\" alt = \"new\" width=\"50\" height=\"50\">
                </div>";
                }
?>
            
        </div>
</header>