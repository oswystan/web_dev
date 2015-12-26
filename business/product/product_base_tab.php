<?php
require_once("../utils/utils.php");

class product_base_tab
{
	public function init()
	{
		$db = new DBConnect();
		$db->connect();
	}
	
	public function get_manage_record($usr_id, $from, $to)
	{
		$sql  = "select * from product_base where $usr_id = 1 or ";
		$sql .= " manage_group_id in (select group_id from group_user where user_id = $usr_id)";
		$sql .= " limit $from, $to";
		$ret = mysql_query($sql);
		return $ret;
	}
	public function get_develop_record($usr_id, $from, $to)
	{
		$sql  = "select * from product_base where ";
		$sql .= " develop_group_id in (select group_id from group_user where user_id = $usr_id)";
		$sql .= " limit $from, $to";
		$ret = mysql_query($sql);
		return $ret;
	}
	public function get_public_record($from, $to)
	{
		$sql = "select * from product_base where flags = 1 ";
		$sql = $sql . "limit {$from}, {$to}";
		$ret = mysql_query($sql);
		return $ret;
	}

	public function get_product_by_name($name)
	{
		$sql = "select * from product_base where product_name='{$name}'";
		$ret = mysql_query($sql);
		return $ret;
	}
	
	public function get_product_by_id($id)
	{
		$sql = "select * from product_base where id= $id";
		$ret = mysql_query($sql);
		return $ret;
	}
	
}

class product_view
{
	public function show($row)
	{
		echo "
		<div class=\"thumbnail_box\">
			<a href=\"../version/version_list.php?product_id={$row['id']}\">
				<img class=\"thumbnail_picture\" src=\"../../images/product.png\">
				<p class=\"thumbnail_desc\" align=\"center\">{$row['product_name']}</p>
			</a>
		</div>
		";
	}
}

?>