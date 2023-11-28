<nav id="navigation">
	<!-- container -->
	<div class="container">
		<!-- responsive-nav -->
		<div id="responsive-nav">
			<!-- NAV -->
			<ul class="main-nav nav navbar-nav">
				<?php
				if (isset($_SESSION['name_page'])) {
					$name_page = $_SESSION['name_page'];
				}
				?>
				<li><a href="#">Home</a></li>
				<li <?= $name_page == 'trang_chu' ? 'active' : '' ?>><a href="<?= $uri ?>/components/store.php">Hot Deals</a></li>
				<li><a href="<?= $view . '/components/store.php' ?>">Categories</a></li>
				<li><a href="#">Laptops</a></li>
				<li><a href="#">Smartphones</a></li>
				<li><a href="#">Cameras</a></li>
				<li><a href="#">Accessories</a></li>
			</ul>
			<!-- /NAV -->
		</div>
		<!-- /responsive-nav -->
	</div>
	<!-- /container -->
</nav>