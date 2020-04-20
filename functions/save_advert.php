<?php
    if (isset($_POST['advName'])) { $advName = $_POST['advName']; if ($advName == '') { unset($advName);} } 
 if (empty($advName)) 
    {
    exit ("Проверь поля, где-то косяк!");
    }
    if(isset($_POST['fupload'])){
            echo "non empty";
    }

    $advName = trim($advName);      
    if(!empty($_FILES['fupload'])){ 
    $fupload=$_FILES['fupload'];    
        if ($fupload =='' or empty($fupload)) {
        unset($fupload);
        }
    }          
if    (!isset($fupload) or empty($fupload) or $fupload =='')
        {
        echo "false";
        
        $avatar    = "img/targetAdv/no-image.jpg"; 
        }          
else 
        {

        
        $path_to_90_directory    = '../img/targetAdv/';          
     
        if(preg_match('/[.](JPG)|(jpg)|(gif)|(GIF)|(png)|(PNG)$/',$_FILES['fupload']['name']))
                  {                 
                           $filename =    $_FILES['fupload']['name'];
                           $source =    $_FILES['fupload']['tmp_name']; 
                           $target =    $path_to_90_directory . $filename;
                           move_uploaded_file($source,    $target);         
     if(preg_match('/[.](GIF)|(gif)$/',    $filename)) {
                 $im    = imagecreatefromgif($path_to_90_directory.$filename) ; 
                 }
                 if(preg_match('/[.](PNG)|(png)$/',    $filename)) {
                 $im =    imagecreatefrompng($path_to_90_directory.$filename) ;
                 }
                 
                 if(preg_match('/[.](JPG)|(jpg)|(jpeg)|(JPEG)$/',    $filename)) {
                           $im =    imagecreatefromjpeg($path_to_90_directory.$filename); 
                 }           
   
$w    = 100;  //    квадратная 90x90. Можно поставить и другой размер.          

        $w_src    = imagesx($im); 
        $h_src    = imagesy($im); 
                 $dest = imagecreatetruecolor($w,$w);           
     //    вырезаем квадратную серединку по x, если фото горизонтальное 
                 if    ($w_src>$h_src) 
                 imagecopyresampled($dest, $im, 0, 0,
                                     round((max($w_src,$h_src)-min($w_src,$h_src))/2),
                                  0, $w, $w,    min($w_src,$h_src), min($w_src,$h_src));           
     // вырезаем    квадратную верхушку по y, 
                 // если фото    вертикальное (хотя можно тоже серединку) 
                 if    ($w_src<$h_src) 
                 imagecopyresampled($dest, $im, 0, 0,    0, 0, $w, $w,
                                  min($w_src,$h_src),    min($w_src,$h_src));           
     // квадратная картинка    масштабируется без вырезок 
                 if ($w_src==$h_src) 
                 imagecopyresampled($dest,    $im, 0, 0, 0, 0, $w, $w, $w_src, $w_src);           
$date=time();    //вычисляем время в настоящий момент.
        imagejpeg($dest,    $path_to_90_directory.$date.".jpg");//сохраняем    изображение формата jpg в нужную папку, именем будет текущее время. Сделано,    чтобы у аватаров не было одинаковых имен.          
//почему именно jpg? Он занимает очень мало места + уничтожается    анимирование gif изображения, которое отвлекает пользователя. Не очень    приятно читать его комментарий, когда краем глаза замечаешь какое-то    движение.          
$avatar    = $path_to_90_directory.$date.".jpg";//заносим в переменную путь до аватара. 

$delfull    = $path_to_90_directory.$filename; 
        unlink    ($delfull);//удаляем оригинал загруженного    изображения, он нам больше не нужен. Задачей было - получить миниатюру.
        }
        else 
                 {
                            //в случае    несоответствия формата, выдаем соответствующее сообщение
                 exit ("Картинка должна быть в    формате <strong>JPG,GIF или PNG</strong>");
                         }
        //конец процесса загрузки и присвоения переменной $avatar адреса    загруженной авы
        }          

    include ("connect.php");
    connectDB();
    $query = "SELECT id FROM adverts WHERE title='$advName'";
    $result = $mysqli->query($query);
    $myrow = $result->fetch_array();
    if (!empty($myrow['id'])) {
    exit ("Извините, такая статья уже существует");
    }
 // если такого нет, то сохраняем данные
    $query2 = "INSERT INTO adverts (pic, title) VALUES('$avatar', '$advName')";
    $result2 = $mysqli->query($query2);
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Статья успешно добавлена! Теперь вы можете зайти на сайт. <a href='../index.php'>Главная страница</a>";
    }
 else {
    echo "Произошла ошибка! Дабавление статьи невозможно.";
    }
    ?>