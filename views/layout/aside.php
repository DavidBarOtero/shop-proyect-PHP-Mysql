<aside id="aside">
					<div id="login" class="block_aside">



						<?php if (!isset($_SESSION['identity'])): ?>

							<h4>Welcome</h4>

						<form action="<?=BASE_URL?>user/login" method="POST">
							<label for="email">Email</label>
							<input type="email" name="email" />
							<label for="password">Password</label>
							<input type="password" name="password" />
							<div style="display:flex;flex-direction:row;align-items: baseline;justify-content: space-between;">
								<button type="submit">Enter</button>

								<a href="<?=BASE_URL?>user/register" style="text-decoration:none;">Register</a>
						</div>
						</form>

							<?php else: ?>

								<h4><?=$_SESSION['identity']->name?>   <?=$_SESSION['identity']->last_name?></h4>

							<?php endif;?>

						<ul id="aside_links">

							<?php if (isset($_SESSION['identity'])): ?>
							<?php if ($_SESSION['identity']->role == "user"): ?>

						<li><a href="#">My orders</a></li>

							<?php endif;?>
							<?php if ($_SESSION['identity']->role == "admin"): ?>

							<li><a href="<?=BASE_URL?>/order/index">Manage orders</a></li>
							<li><a href="<?=BASE_URL?>/category/index"">Manage categories</a></li>
							<li><a href="<?=BASE_URL?>/item/manageItems"">Manage items</a></li>

							<?php endif;?>

							<li><a href="<?=BASE_URL?>user/logout">Exit</a></li>

							<?php endif;?>
						</ul>
					</div>
				</aside>

				<!---main-->
				<div id="main">
