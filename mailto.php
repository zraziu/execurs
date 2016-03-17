<?php
$email = $_POST['email'];
$tel = $_POST['tel'];
$date = $_POST['date'];
$name = $_POST['name'];
$text = $_POST['text'];
$url = $_POST['url'];
$range = $_POST['range'];


$to = "rom-kor@mail.ru";
$subject = "Сообщение с сайта ParusVlg";
$message = "Имя пославшего письмо: $name .<br>
			Электронный адрес: $email<br>
			Телефон: $tel<br>
			Дата тура: $date<br>
			Количество человек: $range<br>
			Сообщение: $text .<br>
			Сообщение со страницы: $url<br>
			IP-адрес: $_SERVER[REMOTE_ADDR]";
$headers  = "Content-type: text/html; charset=utf-8\r\n"; 
$headers .= "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n"; 


$result = mail($to,$subject,$message,$headers) or print "Не могу отправить письмо !!!";
// echo "<center><b>Спасибо за отправку Вашего сообщения. <br><br> Для меня это очень важно! <br><br> В ближайшее время Вы обязательно получите ответ.";
// exit;

if ($result){
        echo "Cообщение успешно отправленно.";
    }

// if (text == "success") {
            //скрыть форму обратной связи
//            $('#messageForm').hide();
            //удалить у элемент, имеющего id msgSubmit, класс hidden
 //           $('#msgSubmit').removeClass('hidden');
 //         }
?>