<?php
require_once("../utils/utils.php");

class user_base_tab
{
	public function init()
	{
		$db = new DBConnect();
		$db->connect();
	}
	
	public function get_users($from, $to)
	{
		$sql  = "select * from user_base limit {$from}, {$to}";
		$ret = mysql_query($sql);
		return $ret;
	}
	
	public function get_user_by_id($usr_id)
	{
		$sql  = "select * from user_base where user_id = {$usr_id}";
		$ret = mysql_query($sql);
		return $ret;
	}
	public function get_user_by_name($usr_name)
	{
		$sql  = "select * from user_base where username = '{$usr_name}'";
		$ret = mysql_query($sql);
		return $ret;
	}
}



?>