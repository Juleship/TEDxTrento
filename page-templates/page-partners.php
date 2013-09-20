<?php 
	/* Template Name: Tedx Partners Page
	*/
	get_header(); 
	$posttitle = 'partners-intro';
	$postid = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $posttitle . "'" );
	$postid;
?>
	<div class="col-sm-12 padded-row">
		<div class="col-sm-8">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
		<div class="col-sm-4 partners-intro">
			<?php
				$getpost= get_post($postid);
				$postcontent= $getpost->post_content;
				echo $postcontent;
			?>
		</div>
		<div style="clear:both;">
		</div>
	</div>
	
<?php get_footer(); ?>