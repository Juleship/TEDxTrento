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
		<div class="row">
			<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 team-intro">
				<?php
					$getpost= get_post($postid);
					$postcontent= $getpost->post_content;
					echo $postcontent;
				?>
			</div>
		</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
		<div style="clear: both;"></div>
		
	</div>
	
<?php get_footer(); ?>