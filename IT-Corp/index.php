<?php
session_start(); 
include "model/db.php";
$db = new db("localhost","root","");
$db->selectDB("test");

include "controller/user.php";
$user = new user();

if (isset($_GET['view'])) $view = $_GET['view'];
	else $view = "index";
if (file_exists("view/".$view.".php")) $view_path = "view/".$view.".php";
	else  $view_path = "view/index.php";

include $view_path;