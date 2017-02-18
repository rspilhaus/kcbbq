<?php get_header(); ?>

<section class="page-title">
	<?php get_template_part( 'partials/partial', 'nav' ); ?>
	<div class="container page-title__title-container">
		<h1 class="page-title__header">Page Not Found</h1>
	</div><!--end .container-->
</section><!--end .page-title-->


<section class="page-content">
	<div class="container">
		<h3>All outta BBQ</h3>
		<p>Somehow you&rsquo;ve wound up in the wrong place. Don&rsquo;t worry, it happens to the best of us. Seeing as how there&rsquo;s around 5 pages on this site, it shouldn&rsquo;t be too hard for you to find what you are looking for. Just pick one of the pages below and be on your way!</p>
		<ul>
			<li><a href="<?php bloginfo('url'); ?>">Home</a> - The home page</li>
			<li><a href="<?php bloginfo('url'); ?>/kc-bbq-style">Style</a> - What makes KC BBQ unique</li>
			<li><a href="<?php bloginfo('url'); ?>/kc-bbq-history">History</a> - Where KC BBQ came from</li>
			<li><a href="<?php bloginfo('url'); ?>/kc-bbq-restaurant-guide">Restaurant Guide</a> - A list of all the restaurants</li>
			<li><a href="<?php bloginfo('url'); ?>/credits">Credits &amp; References</a> - Credits for the site</li>
		</ul>	
	</div><!--end .container-->
</section><!--end .page-content-->
	        
<?php get_footer(); ?>