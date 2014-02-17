<?php

class user {
	public function check_auth() {
        if (isset($_SESSION['login'])&&isset($_SESSION['md5pass'])) {
			$login = mysql_real_escape_string($_SESSION['login']);
			$md5pass = mysql_real_escape_string($_SESSION['md5pass']);
			$result = $db->get("SELECT count(`id`) as `cnt` FROM `user` WHERE login='".$login."' AND pass='".$md5pass."' ");
			if ($result[0]['cnt']) return true;
		}		
		return false;
    }
	
	public function auth($login, $pass) {
		$md5pass = md5($pass);
		$result = $db->get("SELECT count(`id`) as `cnt` FROM `user` WHERE login='".$login."' AND pass='".$md5pass."' ");
		if ($result[0]['cnt']) {
			$_SESSION['login'] = $login;
			$_SESSION['md5pass'] = $md5pass;
			return true;
		}			
		return false;
    }
	
	public function relogin() {
		unset($_SESSION['login']);
		unset($_SESSION['md5pass']);
	}
	
	public function registry($login, $pass) {
		return $db->get("INSERT INTO `user` VALUES ( null, '".$login."', '".$md5pass."' ");
	}

}