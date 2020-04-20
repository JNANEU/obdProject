<!DOCTYPE html>
<html>
<head>
    <?php
    require_once "functions/functions.php"; 
    $target = getAdvert();
    $userArr = getUserList();
    $title = "Статьи обо всём";
    require_once "blocks/head.php";   
    if    (empty($_SESSION['login']) and empty($_SESSION['id'])) 
          {
          
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
          <?php
            if($_GET['action'] == 'addArticle'){
                echo '<div id="addArticleForm">
            <form action="functions/save_article.php" method="post" enctype="multipart/form-data">
            <p>
            <label>Название статьи:<br></label>
            <input name="artName" type="text" size="30" maxlength="30">
            </p>
            <p>
            <label>Короткое содержание<br></label>
            <textarea name="artShort"></textarea>
            </p>
            <p>
            <label>Статья<br></label>
            <textarea name="artFull"></textarea>
            </p>
            <p>
              <label>Выберите картинку для статьи:<br></label>
              <input type="FILE" name="fupload">
            </p>
            <p>
            <br>
            <input type="submit" name="submit" value="Добавить статью">
            </p>
            </form>
            </div>';
            } else if($_GET['action'] == 'addAdvert'){
                echo '<div id="addArticleForm">
            <form action="functions/save_advert.php" method="post" enctype="multipart/form-data">
            <p>
            <label>Название Рекламы:<br></label>
            <input name="advName" type="text" size="30" maxlength="30">
            </p>
            <p>
              <label>Выберите картинку для рекламы:<br></label>
              <input type="FILE" name="fupload">
            </p>
            <p>
            <br>
            <input type="submit" name="submit" value="Добавить рекламу">
            </p>
            </form>
            </div>';
            } else if($_GET['action'] == 'userList'){
                $userCnt = $mysqli->query('SELECT * FROM users');  
                $iterator = count($userArr);
                for($i = 0; $i < $iterator; $i++){
                    if($userArr[$i]['permissions'] == 1){
                      echo '
                      <div id="userRow">
                      <p>'.$userArr[$i]['login'].',  является администратором</p>
                      <a href = "functions/makeAdmin.php?userID='.$userArr[$i]['id'].'&action=give">
                      <div class="more">Сделать администратором</div>
                      </a>
                      <a href = "functions/makeAdmin.php?userID='.$userArr[$i]['id'].'&action=takeAway">
                      <div class="more">Убрать права администратора</div>
                      </a>
                      </div>
                      ';
                    } else {
                        
                        echo '
                        <div id="userRow">
                        <p>'.$userArr[$i]['login'].',  не является администратором</p>
                        <a href = "functions/makeAdmin.php?userID='.$userArr[$i]['id'].'&action=give">
                        <div class="more">Сделать администратором</div>
                        </a>
                        <div class="more">Убрать права администратора</div>
                        </div>
                        ';
                    }
                }
            }
          ?>
        </div>
        <?php require_once "blocks/rightCol.php" ?>
    </div>
    <?php require_once "blocks/footer.php" ?>
</body>
</html>