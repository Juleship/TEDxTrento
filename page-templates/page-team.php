<?php 
	/* Template Name: Tedx Team Page
	*/
	get_header(); 
	$posttitle = 'team-intro'; //to be added!
	$postid = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $posttitle . "'" );
	$postid;
?>
	<div class="col-sm-12">
		<div class="visible-xs mobile">
				<h2><span class="ted-title">Il nostro team:</span></h2>
				<hr />
		</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
		<div style="clear: both;"></div>
		<div class="row padded-row">
			<div class="col-sm-8 col-sm-offset-2 speakers-intro">
				<hr />
				<?php
				/*
$getpost= get_post($postid);
				$postcontent= $getpost->post_content;
				echo $postcontent;
*/
				?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>