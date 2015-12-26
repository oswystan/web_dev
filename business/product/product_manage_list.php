<?php
require_once("../user/user_valid.php");
require_once("product_base_tab.php");
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>我负责的产品</title>
<link href="../../css/basic.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="banner">
		<img src="../../images/banner.png">
	</div>
	
	<div class="delimeter_block" align="center">功能区</div>
	<?php
	$tab = new product_base_tab();
	$view = new product_view();
	$tab->init();
	$ret = $tab->get_manage_record($_SESSION["userid"], 0, 10000);
	while($row = mysql_fetch_array($ret))
	{
		$view->show($row);
	}
	?>
	<div class="footer" align="center">
		<p> copyright (C) wangyu </p>
	</div>
</body>

</html>
