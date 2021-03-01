<!DOCTYPE html>
<html lang="en" xmlns>
	<head>
		<meta charset="utf-8" />
		<title>T-shirt shop</title>
		<link rel="stylesheet" href="<?=BASE_URL?>assets/css/styles.css" />
	</head>

	<body>
		<div id="web-container">
			<!---header-->
			<header id="header">
				<div id="logo">
					<img src="<?=BASE_URL?>assets/img/logo.jpg" alt="t-shirt logo" />
					<a href="index.php">T-shirt Shop</a>
				</div>
			</header>

			<!---menu-->
			<?php require_once'helpers/Utils.php'?>
			<?php $categories=Utils::showCategories();?>

			<nav id="menu">
				<ul>
					<li>
						<a href="#">Home </a>
					</li>
					<?php while($cat=$categories->fetch_object()):?>
						
						<li>
							<a href="#"><?=$cat->name?> </a>
						</li>
					
						<?php endwhile?>
				
				</ul>
			</nav>
			<div id="content">