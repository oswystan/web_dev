<?php
require_once("../user/user_valid.php");
require_once("feature_base_tab.php");
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>特性信息</title>
<link href="../../css/basic.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="banner">
		<img src="../../images/banner.png">
	</div>
	
	<div class="delimeter_block" align="center">功能区</div>
	<?php
	$product_id = $_GET['product_id'];
	$version_id = $_GET['version_id'];
	$tab = new feature_base_tab();
	$view = new feature_view();
	$tab->init();
	$ret = $tab->get_feature_record($product_id, $version_id, 0, 10000);
	if($ret)
	{
		while($row = mysql_fetch_array($ret))
		{
			$view->show($row);
		}
	}
	?>
	<div class="footer" align="center">
		<p> copyright (C) wangyu </p>
	</div>
</body>

</html>
