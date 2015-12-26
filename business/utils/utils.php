<?php

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

?>