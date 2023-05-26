<?
$to = "ma-ks2@ya.ru";
$subject = "тестовый заголовок письма";
$message = "тестовый текст сообщения";
$from = "staycreative@requestbitrix.ru";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= "From: <".$from.">\r\n";

if (mail($to,$subject,$message,$headers)) {
    echo "OK";
    }
    else {
	echo "ERROR";
	}?>