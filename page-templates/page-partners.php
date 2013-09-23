<?php 
	/* Template Name: Tedx Partners Page
	*/
	get_header(); 
	$posttitle = 'partners-intro';
	$postid = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $posttitle . "'" );
	$outrotitle = 'partners-outro';
	$outroid = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $outrotitle . "'" );
?>
	
	<div class="col-sm-12">
		<div class="visible-xs mobile">
				<h2><span class="ted-title">I nostri partners:</span></h2>
			<hr />
		</div>
		<div class="row partners-background">
			<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 partners-intro">
				<?php
					$getpost= get_post($postid);
					$postcontent= $getpost->post_content;
					echo $postcontent;
				?>
			</div>
		</div>
		<div class="padded-row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
		<div style="clear:both;">
		</div>
		<div class="row partners-background">
			<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 partners-intro">
				<?php
					$getpost= get_post($outroid);
					$postcontent= $getpost->post_content;
					echo $postcontent;
				?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>