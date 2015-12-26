<?php
require_once("user_valid.php");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>欢迎</title>
<link href="../../css/basic.css" rel="stylesheet" type="text/css">

</head>

<body>
	<div class="banner">
		<img src="../../images/banner.png">
	</div>
	
	<div class="delimeter_block" align="center">功能区</div>
	<div class="block_contrainer">
		<div class="thumbnail_box">
			<a href="user_product.php">
				<img class="thumbnail_picture" src="../../images/product.png">
				<p class="thumbnail_desc" align="center">产品管理</p>	
			</a>
		</div>
		<div class="thumbnail_box">
			<a href="#">
				<img class="thumbnail_picture" src="../../images/setting.png">
				<p class="thumbnail_desc" align="center">用户设置</p>	
			</a>
		</div>
		<div class="thumbnail_box">
			<a href="#">
				<img class="thumbnail_picture" src="../../images/user.png">
				<p class="thumbnail_desc" align="center">用户管理</p>	
			</a>
		</div>
		<div class="thumbnail_box">
			<a href="#">
				<img class="thumbnail_picture" src="../../images/group.png">
				<p class="thumbnail_desc" align="center">组管理</p>	
			</a>
		</div>
	</div>
	<div class="delimeter_block" align="center">快速链接区</div>
	<div class="block_contrainer">
		<div class="thumbnail_box">
			<a href="#">
				<img class="thumbnail_picture" src="../../images/product.png">
				<p class="thumbnail_desc" align="center">产品1</p>	
			</a>
		</div>
		<div class="thumbnail_box">
			<a href="#">
				<img class="thumbnail_picture" src="../../images/product.png">
				<p class="thumbnail_desc" align="center">产品2</p>	
			</a>
		</div>
	</div>
	<div class="footer" align="center">
		<p> copyright (C) wangyu </p>
	</div>
</body>
</html>
