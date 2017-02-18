<?php 
	/*
		Template Name: Grid
	*/
	
	get_header(); 
?>

<section class="page-title">
	<?php get_template_part( 'partials/partial', 'nav' ); ?>
	<div class="container page-title__title-container">
		<h1 class="page-title__header"><?php the_title(); ?></h1>
	</div><!--end .container-->
</section><!--end .page-title-->

<section class="page-intro">
	<div class="container">
		<p class="page-intro__subtitle">Presented alphabetically without ranking or judgement. Think we&rsquo;re missing one? Submit it to us!</p>
		<p><a href="#submit" class="btn btn-red smooth-scroll">Submit a Listing</a></p>
	</div><!--end .container-->
</section><!--end .page-intro-->

<section class="grid-container">

	<div class="grid-list">	
		<?php
			$args = array('post_type' => 'restaurant', 'posts_per_page' => -1, 'orderby' => 'name', 'order' => 'ASC');
			$wp_query = new WP_Query($args);
				if($wp_query->have_posts()) : 
				while($wp_query->have_posts()) : 
				$wp_query->the_post();
		?>	
		
			<div class="grid-item">
				<div class="grid-item__inner">
					<h4 class="grid-item__title"><?php the_title(); ?></h4>
					<p class="grid-item__address"><?php the_field('address'); ?></p>
					<?php if(get_field('url')) : ?>
						<a href="<?php the_field('url'); ?>" rel="nofollow" class="grid-item__url" target="_blank">Visit Website &rsaquo;</a>
					<?php endif; ?>
				</div><!--end .grid-item__inner-->
			</div><!--end .grid-item-->
				
		<?php endwhile; else: ?>
		<?php endif; wp_reset_query(); ?>
	</div><!--end .grid-list-->
</section><!--end .grid-container-->

<section class="submit" id="submit">
	<div class="container">
		<h2 class="submit__title">Submit a Listing</h2>
		<p class="submit__subtitle">We&rsquo;re trying to make this the most complete listing of BBQ restaurants in Kansas&nbsp;City. Fill out the information below and we&rsquo;ll review your submission within a day or two and get it added to the&nbsp;list!</p>
		<?php gravity_form( 1, false, false, false, '', true );?>
	</div><!--end .container-->
</section><!--end .submit-form-->

<?php get_footer(); ?>