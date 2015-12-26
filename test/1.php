<?php
session_start();
if(!isset($_SESSION["language"]))
{
	$_SESSION["language"] = "zh_cn";
}
$lang = $_SESSION["language"];
$lang_file = "../languages/" . $lang . "/message.php";
include_once($lang_file);
?>


<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>test</title>
</head>

	<STYLE type="text/css">
	BODY { background-color:#F8F8F8; }
	.container
	{
		background-color:#FEFEFE;
		border-style:solid;
		border-width:thin;
		border-color:#F0F0F0;
		width:400px;
		height:200px;
		margin-left:auto;
		margin-right:auto;
		margin-top:100px;

	}
	</STYLE>
	<BODY>
		<DIV class="container">
			<form action="test.php" name="input" method="post">
				<?php echo LOGIN_USERNAME ?><input name="username" type="text" /> <br>
				<?php echo LOGIN_PASSWD ?><input name="passwd" type="password" /> <br>
				<input type="submit" value=<?php echo "\"" . LOGIN_SUBMIT . "\""; ?> /> <br>
			</form>
		</DIV>
	</BODY>

</HTML>