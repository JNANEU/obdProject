<?php
          session_start();
          if    (empty($_SESSION['login']) or empty($_SESSION['id'])) 
          {
          exit ("Доступ на эту    страницу разрешен только зарегистрированным пользователям. Если вы    зарегистрированы, то войдите на сайт под своим логином и паролем<br><a    href='../index.php'>Главная    страница</a>");
          }
//Закрываем сессию          
unset($_SESSION['password']);
            unset($_SESSION['login']); 
            unset($_SESSION['id']);
            unset($_SESSION['permissions']);
        exit("<html><head><meta    http-equiv=\"Refresh\" content=\"0; URL=../index.php\"></head></html>");
            
?>