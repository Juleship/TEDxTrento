<?php 
	/* Template Name: Tedx Speakers Page
	*/
	get_header(); 
?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>
	
>>>>>>> 51597c002766258d83ca176abf2fb60a42708356
<?php get_footer(); ?>