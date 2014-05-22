<?php 
	/* Template Name: Tedx Programma Page
	*/
	get_header(); 
?>
	
	<div class="row">
		<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 programma">
			<?php
				while (have_posts()) : the_post();
					the_content();
				endwhile;
				wp_reset_query();
			?>
		</div>
		<div class="clearfix"></div>
	</div>
<?php get_footer(); ?>