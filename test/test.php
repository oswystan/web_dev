<?php

/**
* 
*/
class DBConnect
{
	public static $db_connect = 0;
	public static $db_server = "localhost";
	public static $db_user = "root";
	public static $db_passwd = "1";
	public static $db_name = "epmp";

	public function connect()
	{
		$tmp_connect = mysql_connect(DBConnect::$db_server, DBConnect::$db_user, DBConnect::$db_passwd);
		if (!$tmp_connect) 
		{
			return 0;
		}
		$ret = mysql_select_db(DBConnect::$db_name);
		if(!$ret)
		{
			return 0;
		}
		DBConnect::$db_connect = $tmp_connect;
		return 1;
	}
}

/**
* 
*/
class UserAuth
{
	public function checkUsr($usr, $passwd)
	{
		$db = new DBConnect();
		if(!$db->connect())
		{
			return 0;
		};

		$queryStr = "select * from user_base where username='" . $usr . "' and password='" . $passwd . "'";
		echo $queryStr;

		$ret = mysql_query($queryStr);
		if(!ret)
		{
			echo "query failed<br>";
			return 0;
		}
		if(mysql_num_rows($ret) == 0)
		{
			echo "row 0<br>";
			return 0;
		}
		else
		{
			return 1;
		}
	}
}


$auth = new UserAuth;
$ret = $auth->checkUsr($_POST["username"], $_POST["passwd"]);
if($ret == 0)
{
	echo "fail to login <br>";
}
else
{
	echo "login OK <br>";
}

?>

