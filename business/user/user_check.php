<?php

require_once("user_base_tab.php");

/**
* 
*/
class UserAuth
{
	public function checkUsr($usr, $passwd)
	{
		$tab = new user_base_tab;
		$tab->init();
		$ret = $tab->get_user_by_name($usr);
		if($ret)
		{
			$row = mysql_fetch_array($ret);
			if(strcmp($row["password"], $passwd) == 0)
			{
				return $row["id"];
			}
		}
		return 0;
	}
}



session_start();
$_SESSION["auth"] = 0;


$auth = new UserAuth;
$ret = $auth->checkUsr($_POST["username"], $_POST["passwd"]);
if($ret == 0)
{
	header("Location:user_login.php");
}
else
{
	$_SESSION["auth"] = 1;
	$_SESSION["user"] = $_POST["username"];
	$_SESSION["userid"] = $ret;
	header("Location:user_root.php");
}

?>

