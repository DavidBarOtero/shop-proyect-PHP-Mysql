<!DOCTYPE html>
<html lang="en" xmlns>
	<head>
		<meta charset="utf-8" />
		<title>T-shirt shop</title>
		<link rel="stylesheet" href="assets/css/styles.css" />
	</head>

	<body>
		<div id="web-container">
			<!---header-->
			<header id="header">
				<div id="logo">
					<img src="./assets/img/logo.jpg" alt="t-shirt logo" />
					<a href="index.php">T-shirt Shop</a>
				</div>
			</header>

			<!---menu-->
			<nav id="menu">
				<ul>
					<li>
						<a href="#">Home </a>
					</li>
					<li>
						<a href="#">1 </a>
					</li>
					<li>
						<a href="#"> 2</a>
					</li>
					<li>
						<a href="#">3 </a>
					</li>
					<li>
						<a href="#">4 </a>
					</li>
					<li>
						<a href="#">5 </a>
					</li>
				</ul>
			</nav>
			<div id="content">
				<!---aside-->
				<aside id="aside">
					<div id="login" class="block_aside">
						<h4>Enter to the shop</h4>
						<form action="#" method="POST">
							<label for="email">Email</label>
							<input type="email" name="email" />
							<label for="password">Password</label>
							<input type="password" name="password" />
							<button type="submit">Enter</button>
						</form>
						<ul id="aside_links">
							<li><a href="#">My orders</a></li>
							<li><a href="#">My orders</a></li>
							<li><a href="#">My orders</a></li>
						</ul>
					</div>
				</aside>

				<!---main-->
				<div id="main">
					<h1>Featured Products</h1>
					<div class="product_container">
						<div class="product">
							<img src="assets/img/logo.jpg" />
							<h2>Blue T-shirt</h2>
                            <p>Prize:30$</p>
							<a href="#" class="button_product">Buy</a>
						</div>
                        <div class="product">
							<img src="assets/img/logo.jpg" />
							<h2>Blue T-shirt</h2>
                            <p>Prize:30$</p>
							<a href="#" class="button_product">Buy</a>
						</div>
                        <div class="product">
							<img src="assets/img/logo.jpg" />
							<h2>Blue T-shirt</h2>
                            <p>Prize:30$</p>
							<a href="#" class="button_product">Buy</a>
						</div>
                        <div class="product">
							<img src="assets/img/logo.jpg" />
							<h2>Blue T-shirt</h2>
                            <p>Prize:30$</p>
							<a href="#" class="button_product">Buy</a>
						</div>
                        <div class="product">
							<img src="assets/img/logo.jpg" />
							<h2>Blue T-shirt</h2>
                            <p>Prize:30$</p>
							<a href="#" class="button_product">Buy</a>
						</div>
                        <div class="product">
							<img src="assets/img/logo.jpg" />
							<h2>Blue T-shirt</h2>
                            <p>Prize:30$</p>
							<a href="#" class="button_product">Buy</a>
						</div>
                        <div class="product">
							<img src="assets/img/logo.jpg" />
							<h2>Blue T-shirt</h2>
							<p>Prize:30$</p>
							<a href="#" class="button_product">Buy</a>
						</div>
                        <div class="product">
							<img src="assets/img/logo.jpg" />
							<h2>Blue T-shirt</h2>
							<p>Prize:30$</p>
							<a href="#" class="button_product">Buy</a>
						</div>
                        <div class="product">
							<img src="assets/img/logo.jpg" />
							<h2>Blue T-shirt</h2>
							<p>Prize:30$</p>
							<a href="#" class="button_product">Buy</a>
						</div>
					
					</div>
				</div>
			</div>
			<!---footer-->
		</div>
		<footer id="footer">
			<p>
				Developed by David Barbeira Otero &copy
				<?=date('Y')?>
			</p>
		</footer>
	</body>
</html>
