<?php

    $link = mysql_connect("localhost", "root", "");
    mysql_select_db("test");

	$ip = mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
	
    $query = "INSERT INTO `user_online` VALUES (null, '".$ip."', '".time()."')
				ON DUPLICATE KEY UPDATE online_at='".time()."'";
	$result = mysql_query($query);
	
			$query = "SELECT count(`id`) as `cnt` FROM `user_online` WHERE (`online_at` + 5)>'".time()."' ";
    $result = mysql_query($query);

    $array = mysql_fetch_array($result, MYSQL_ASSOC);
	
	echo $array['cnt'];

    mysql_close($link);
?>