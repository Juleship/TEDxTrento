<?php 
	/* Template Name: Tedx Team Page
	*/
	get_header(); 
	$teamintro = 'team-intro';
	$teamintro = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $teamintro . "'" );
?>
	<div class="col-sm-12">
		<div class="visible-xs mobile">
				<h2><span class="ted-title">Il nostro team:</span></h2>
				<hr />
		</div>
		<div class="row team-background">
			<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 team-intro">
				<?php
					query_posts( 'p='.$teamintro );
					while (have_posts()) : the_post();
						the_content();
					endwhile;
					wp_reset_query();
				?>
			</div>
		</div>
		<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
		<div style="clear: both; height: 80px;"></div>
		
	</div>
	
<?php get_footer(); ?>