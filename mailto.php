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


if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
	$result = mail($to,$subject,$message,$headers);
	if ($result){
        echo '<center><p class="success">Спасибо за отправку вашего сообщения!</p></center>';
    }
	else {
		echo '<center><p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p></center>';
	}
}


?>