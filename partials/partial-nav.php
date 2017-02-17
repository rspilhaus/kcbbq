<header class="header">
	<div class="container">
		<a href="<?php bloginfo('url'); ?>" class="logo"><?php echo file_get_contents( get_template_directory_uri() . '/build/svg/logo.svg'); ?></a>
		
		<div class="hamburger__container">
			<button class="hamburger hamburger__spin" type="button" aria-label="Menu" aria-controls="navigation">
				<span class="hamburger__box">
			    	<span class="hamburger__inner"></span><!--end .hamburger__inner-->
				</span><!--end .hamburger__box-->
			</button><!--end .hamburger-->
			<label class="hamburger__label">Menu</label>
		</div><!--end .hamburger__container-->


		
		<nav class="header__nav">
			<?php 
			$menuParameters = array(
				'theme_location'  => 'primary-menu',
				'container'       => false,
				'echo'            => false,
				'items_wrap'      => '%3$s',
				'depth'           => 0,
			);
			
			echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );	
				
			?>
		
		</nav>
	</div><!--end .container-->
</header>