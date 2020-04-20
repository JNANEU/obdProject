<?php
          session_start();
          include "connect.php";
          connectDB();
          if    (empty($_SESSION['login']) or empty($_SESSION['id'])) 
          {
          
            exit ("Доступ на эту    страницу разрешен только зарегистрированным пользователям с доступом администратора. Если вы    зарегистрированы, то войдите на сайт под своим логином и паролем<br><a    href='../index.php'>Главная    страница</a>");          } else{
     
            if($_SESSION['permissions'] != 1){
            exit ("Доступ на эту страницу разрешен только зарегистрированным пользователям с доступом администратора. Если вы    зарегистрированы, то войдите на сайт под своим логином и паролем<br><a    href='../index.php'>Главная    страница</a>");
            }
          }
          if($_GET['action'] == 'give'){
          $result = $mysqli->query('SELECT * FROM `users` WHERE id='.$_GET['userID'].' ');
          $new1 = $result->fetch_array();
          if($new1['permissions'] == 1){
            echo "Пользователь уже является администратором";
          echo '<a href="../addElement.php?action=userList">Вернутся назад</a>';
          } else{
          $mysqli->query('UPDATE `users` SET permissions= 1 ');
        exit("<html><head><meta    http-equiv=\"Refresh\" content=\"0; URL=../addElement.php?action=userList\"></head></html>");
          }    
          }
          
        else if($_GET['action'] == 'takeAway'){
          $result = $mysqli->query('SELECT * FROM `users` WHERE id='.$_GET['userID'].' ');
          $result2 = $mysqli->query('SELECT * FROM `users` WHERE id='.$_SESSION['id'].' ');
          $new = $result->fetch_array();
          $new2 = $result2->fetch_array();
          if(($_GET['userID'] == $new['id']) and ($_GET['userID'] == $new2['id'])){
          echo "Невозможно забрать права у самого себя<br>";
          echo '<a href="../addElement.php?action=userList">Вернутся назад</a>';
          } else{
          $mysqli->query('UPDATE `users` SET permissions= 0 WHERE id='.$new['id'].'');
          closeDB();
          exit("<html><head><meta    http-equiv=\"Refresh\" content=\"0; URL=../addElement.php?action=userList\"></head></html>");
          }
        
        }
            // отправляем пользователя на главную страницу.
?>