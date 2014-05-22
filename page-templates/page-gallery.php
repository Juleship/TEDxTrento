<?php 
	/* Template Name: Tedx Gallery Page
	*/
	get_header(); 
?>
	
	<div class="row">
		<div class="gallery">
			<?php
				while (have_posts()) : the_post();
					the_content();
				endwhile;
				wp_reset_query();
			?>
		</div>
		<div class="clearfix"></div>
		<div class="text-center">
			<p>guarda tutte le fotografie su <a href="http://www.flickr.com/photos/tedxtrento"><img class="flickr-logo" src="<?php bloginfo( 'template_url' ); ?>/img/flickr-logo.png" /></a></p>
		</div>
	</div>
<?php get_footer(); ?>