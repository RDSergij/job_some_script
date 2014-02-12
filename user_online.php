<?php

    $link = mysql_connect("localhost", "root", ""); // Конект
    mysql_select_db("test");

	$ip = mysql_real_escape_string($_SERVER['REMOTE_ADDR']); // IP юзера
	
    $query = "INSERT INTO `user_online` VALUES (null, '".$ip."', '".time()."')
				ON DUPLICATE KEY UPDATE online_at='".time()."'"; // Вставляємо або апдейтимо, якщо вже є.
	$result = mysql_query($query);
	
	$query = "SELECT count(`id`) as `cnt` FROM `user_online` WHERE (`online_at` + 5)>'".time()."' "; // Кількість онлайн
	
    $result = mysql_query($query);

    $array = mysql_fetch_array($result, MYSQL_ASSOC);
	
	echo $array['cnt']; // Виводимо

    mysql_close($link);
?>