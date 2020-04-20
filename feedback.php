<!DOCTYPE html>
<html>
<head>
    <?php 
    require_once "functions/functions.php"; 
    $title = "Обратная связь";
    $target = getAdvert();
    require_once "blocks/head.php" 
    ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">

    </script>
    <script>
        $(document).ready (function (){
            $("#done").click (function(){
                var name = $("#name").val();
                var email = $("#email").val();
                var subject = $("#subject").val();
                var message = $("#message").val();
                if(name.length < 3) fail ="Имя не меньше трёх символов";
                else if(email.split ('@').length - 1 == 0 || email.split('.').length - 1 == 0)
                    fail = "Некорректный адрес";
                else if(subject.length < 5)
                    fail ="Nothing in subj";
                else if(message.length < 5)
                    fail ="Nothing in message";
                if(fail != ""){
                    $('#messageShow').html (fail + "<div class = 'clear'><br></div>");
                    $('#messageShow').show ();
                    return false;
                }
            });
        });
    </script>
</head>
<body>
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <input type="text" placeholder="Имя" id="name" name="name"><br />
            <input type="text" placeholder="Email" id="email" name="email"><br />
            <input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br />
            <textarea name="message" id="message" placeholder="input your message here"></textarea><br />
            <input type="button"  name="done" id="done" value="Отправить">
            <div id="messageShow>"></div>
        </div> 
        <?php require_once "blocks/rightCol.php" ?>
    </div>
    <?php require_once "blocks/footer.php" ?>
</body>
</html>