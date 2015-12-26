<?php

require_once("../../app_init.php");

session_start();
if(!isset($_SESSION["language"]))
{
	$_SESSION["language"] = "zh_cn";
}

$lang = $_SESSION["language"];
$lang_file = APP_LANGUAGES."/".$lang . "/message.php";
include_once($lang_file);

?>


<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo LOGIN_TITLE ?></title>

<link href="../../css/basic.css" rel="stylesheet" type="text/css">
</head>

<style type="text/css">

form
{
	font-family: Helvetica, sans-serif;
	color:#00CC33;
	font-size:14px;
}
input[type="submit"]
{
	background-color:#F5F5F5;
	font-size:14px;
	color:#666666;
	width:100px;
	height:30px;
	margin:4px;
	border-style:solid;
	border-width:1;
	box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}
input[type="submit"]:hover
{
	background-color:#F5F5F5;
	font-size:14px;
	color:#666666;
	width:100px;
	height:30px;
	margin:4px;
	border-style:solid;
	border-width:1;
	box-shadow: 2px 2px 2px rgba(0,0,0,0.1);
}
input[type="submit"]:active
{
	background-color:#F5F5F5;
	font-size:14px;
	color:#666666;
	width:100px;
	height:30px;
	margin:4px;
	border-style:solid;
	border-width:1;
	box-shadow: inset 1px 1px 1px rgba(0,0,0,0.05);
}
input[type="text"]
{
	color:#666666;
	font-size:14px;
	width:160px;
	height:30;
	border-style:solid;
	border-width:1;
	border-color:#CCCCCC;
}
input[type="password"]
{
	color:#666666;
	font-size:14px;
	width:160px;
	height:30px;
	border-style:solid;
	border-width:1;
	border-color:#CCCCCC;
	place-holder:"password";
}

.container
{
	display:block;
	float:left;
	background-color:RGBA(0,0,0,0);
	border-color:#666666;
	padding:80 0 80 0;
	width:100%;
	font-family: Helvetica, sans-serif;
}

</style>

<BODY>
	<div class="banner">
		<img src="../../images/banner.png">
	</div>
	
		<div class="container" align="center">
			<form action="user_check.php" name="input" method="post">
				<input name="username" placeholder="input your username here" type="text" />
				<input name="passwd" placeholder="input your password" type="password" />
				<input type="submit" value=<?php echo "\"" . LOGIN_SUBMIT . "\""; ?> />
			</form>
		</div>

	<div class="footer" align="center">
		<p> copyright (C) wangyu </p>
	</div>
</BODY>

</HTML>
