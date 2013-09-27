<?php 
	/* Template Name: Tedx Partners Page
	*/
	get_header(); 
	$partnersintro = 'partners-intro';
	$partnersintro = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $partnersintro . "'" );
?>
	
	<div class="col-sm-12">
		<div class="visible-xs mobile">
				<h2><span class="ted-title">I nostri partners:</span></h2>
			<hr />
		</div>
		<div class="row partners-background">
			<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 partners-intro tia-padded raleway">
				<?php
					query_posts( 'p='.$partnersintro);
					while (have_posts()) : the_post();
						the_content();
					endwhile;
					wp_reset_query();
				?>
			</div>
		</div>
		<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; endif; 
				wp_reset_query();
			?>
		</div>
		<div style="clear:both;">
		</div>
		<div class="row">
			<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 partners-outro helveticize">
				<?php
					$partnersoutro = 'partners-outro';
					$partnersoutro = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $partnersoutro . "'" );
					query_posts( 'p='.'113');
					while (have_posts()) : the_post();
						the_content();
					endwhile;
					wp_reset_query();
				?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>