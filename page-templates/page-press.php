<?php 
	/* Template Name: Tedx Press Page
	*/
	get_header();
?>
		<div class="col-sm-12">
			<div class="visible-xs mobile">
					<h2><span class="ted-title">Press page:</span></h2>
					<hr />
			</div>
			<div class="row press-background row-press hidden-xs">
				<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 partners-intro text-center">
					<h2 class="main-title">Press page:</h2>
				</div>
			</div>
			<div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 index-padding">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; endif; 
				
		    wp_reset_query();
			?>
			</div>
			<div style="clear: both;"></div>
		</div>
<?php get_footer(); ?>