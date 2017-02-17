<?php get_header(); ?>

<section class="hero">
	<?php get_template_part( 'partials/partial', 'nav' ); ?>
	
	<div class="container hero__text">
		<h1 class="hero__title">A Love Letter to the World&rsquo;s Greatest Food</h1>
		<p class="hero__subtitle">
			BBQ is the best food in the world and Kansas City does it better than anyone else. Learn what makes it unique, the history behind it, and why it&rsquo;s worth an entire trip just to&nbsp;taste.
		</p>
		<a href="<?php bloginfo('url'); ?>/style" class="hero__cta btn btn-white">Learn Why</a>
	</div><!--end .container-->
</section><!--end .hero-->
<?php get_footer(); ?>