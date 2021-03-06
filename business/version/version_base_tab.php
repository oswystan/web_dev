<?php
require_once("../utils/utils.php");

class version_base_tab
{
	public function init()
	{
		$db = new DBConnect();
		$db->connect();
	}
	
	public function check_user_permission($user_id, $product_id)
	{
		$sql  = "select manage_group_id, develop_group_id, flags from product_base ";
		$sql .= "where id = {$product_id}";
		$ret = mysql_query($sql);
		if(!$ret)
		{
			return 0;
		}
		$row = mysql_fetch_array($ret);
		if(!$row)
		{
			return 0;
		}
		
		//public product
		if($row['flags'] == 1)
		{
			return 1;
		}
		
		$sql  = "select * from group_user where user_id = {$user_id} and ";
		$sql .= "(group_id = {$row['manage_group_id']} or group_id = {$row['develop_group_id']})";
		$ret = mysql_query($sql);
		if(!$ret)
		{
			return 0;
		}
		
		$row = mysql_fetch_array($ret);
		if(!$row)
		{
			return 0;
		}
		else
		{
			return 1;
		}
	}
	
	public function get_version_record($product_id, $from, $to)
	{
		if($this->check_user_permission($_SESSION["userid"], $product_id) == 0)
		{
			return FALSE;
		}
		$sql  = "select * from version_base where product_id = {$product_id}";
		$sql .= " limit $from, $to";
		$ret = mysql_query($sql);
		return $ret;
	}
	
	public function get_version_by_id($id)
	{
		$sql = "select * from version_base where id={$id}";
		$ret = mysql_query($sql);
		return $ret;
	}
}

class version_view
{
	public function show($row)
	{
		echo "
		<div class=\"thumbnail_box\">
			<a href=\"../feature/feature_list.php?product_id={$row['product_id']}&version_id={$row['id']}\">
				<img class=\"thumbnail_picture\" src=\"../../images/version.png\">
				<p class=\"thumbnail_desc\" align=\"center\">{$row['version_no']}</p>
			</a>
		</div>
		";
	}
}

?>