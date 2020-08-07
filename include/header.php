<header class="site-header">
				<div class="container">
					<a id="branding" href="index.php">
						<img src="images/laser-icon.png" alt="Company name" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Laser Studio Esthetic</h1>
							<small class="site-description">

Салон красоты</small>
						</div>
					</a> <!-- #branding -->


					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
                         <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
							<li <?php if ($currentPage == 'index.php') { echo 'class="menu-item current-menu-item"'; } else { echo 'class="menu-item"'; } ?>><a href="index.php" >Главная</a></li>
							<li <?php if ($currentPage == 'about.php') { echo 'class="menu-item current-menu-item"';} else  {echo 'class="menu-item"'; } ?>><a href="about.php" >О нас</a></li>
							<li <?php if ($currentPage == 'service.php') { echo 'class="menu-item current-menu-item"';} else {echo 'class="menu-item"'; } ?>><a href="service.php" >Услуги</a></li>
							<li <?php if ($currentPage == 'gallery.php') { echo 'class="menu-item current-menu-item"';} else {echo 'class="menu-item"'; } ?>><a href="gallery.php" >Галерея</a></li>
							<li <?php if ($currentPage == 'contact.php') { echo 'class="menu-item current-menu-item"'; } else {echo 'class="menu-item"'; }?>><a href="contact.php" >Контакты</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
					
				</div>
	
			</header>