<?php
require_once("user_valid.php");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>产品区</title>
<link href="../../css/basic.css" rel="stylesheet" type="text/css">

</head>

<body>
	<div class="banner">
		<img src="../../images/banner.png">
	</div>
	
	<div class="delimeter_block" align="center">系统菜单</div>
	<div class="block_contrainer">
		<div class="thumbnail_box">
			<a href="../product/product_manage_list.php">
				<img class="thumbnail_picture" src="../../images/product.png">
				<p class="thumbnail_desc" align="center">我负责的产品</p>	
			</a>
		</div>
		<div class="thumbnail_box">
			<a href="../product/product_develop_list.php">
				<img class="thumbnail_picture" src="../../images/product.png">
				<p class="thumbnail_desc" align="center">我开发的产品</p>	
			</a>
		</div>
		<div class="thumbnail_box">
			<a href="../product/product_public_list.php">
				<img class="thumbnail_picture" src="../../images/product.png">
				<p class="thumbnail_desc" align="center">公共产品</p>
			</a>
		</div>
	</div>
	
	<div class="footer" align="center">
		<p> copyright (C) wangyu </p>
	</div>
</body>
</html>
