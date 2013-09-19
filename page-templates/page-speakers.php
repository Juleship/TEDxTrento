<?php 
	/* Template Name: Tedx Speakers Page
	*/
	get_header(); 
?>
	<div class="col-sm-12">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
		<div style="clear: both;"></div>
	</div>
<?php get_footer(); ?>