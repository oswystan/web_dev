<?php

session_start();
if($_SESSION["auth"] != 1)
{
	$url = "http://" . $_SERVER['SERVER_NAME'] . "/epmp/business/user/user_login.php";
	header("Location:" . $url);
}

?>