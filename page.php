<?php get_header(); ?>

<section class="page-title">
	<?php get_template_part( 'partials/partial', 'nav' ); ?>
	<div class="container">
		<h1 class="page-title__header"><?php the_title(); ?></h1>
	</div><!--end .container-->
</section><!--end .page-title-->

<?php
	//ACF Flexible Content Block
	if( have_rows('content_block') ):
	
	    while ( have_rows('content_block') ) : the_row();
	
	        if( get_row_layout() == 'content_block_text' ): ?>
				
				<section class="page-content">
					<div class="container">
						<?php the_sub_field('content_block_text_field'); ?>
					</div><!--end .container-->
				</section><!--end .page-content-->
	        
	        <?php elseif( get_row_layout() == 'content_block_image' ): ?>
	
				<aside class="photo-aside" style="background-image:url('<?php the_sub_field("content_block_image_file"); ?>')">
					<?php if(get_sub_field('content_block_image_text')) : ?>
						<div class="container">
							<h3 class="photo-aside__quote"><?php the_sub_field('content_block_image_text'); ?></h3>
						</div><!--end .container-->
					<?php endif; ?>
				</aside><!--end .photo-aside-->
	
	        <?php endif;
	
	    endwhile;
	
	else :
	
	    // no layouts found
	
	endif;

?>

<?php get_footer(); ?>