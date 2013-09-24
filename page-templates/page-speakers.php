<?php 
	/* Template Name: Tedx Speakers Page
	*/
	get_header();
	
	$speaktitle = 'speakers-intro';
	$speaktitle = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $speaktitle . "'" );
?>
	<div class="col-sm-12">
		<div class="visible-xs mobile">
				<h2><span class="ted-title">Gli speakers:</span></h2>
				<hr />
		</div>
		<div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; 
			
	    wp_reset_query();
		?>
		</div>
		<div style="clear: both;"></div>
		<div class="row padded-row">
			<div class="col-sm-8 col-sm-offset-2 speakers-intro helveticize">
				<hr />
					<?php
					query_posts( 'p='.$speaktitle );
					while (have_posts()) : the_post();
						the_content();
					endwhile;
					wp_reset_query();
				?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>