<?php 
	/* Template Name: Tedx About Page
	*/
	get_header(); 
	
	$aboutted = 'about-ted';
	$aboutted = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $aboutted . "'" );
	$abouttedx = 'about-tedx';
	$abouttedx = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $abouttedx . "'" );
	$abouttedxtrento = 'about-tedxtrento';
	$abouttedxtrento = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $abouttedxtrento . "'" );

?>
	<!-- let's talk about mobile -->
			<div class="visible-xs mobile">
					<h2><span class="ted-title">Che cos'è?</span></h2>
					<hr />
			</div>
			
			<div class="visible-xs mobile-about mobile">
			<h2><span class="black"></span><span class="ted-title">TED</span></h2>
			
			<hr/>
				<img src="<?php bloginfo( 'template_url' ); ?>/img/about_ted.jpg" style="width: 100%;">
			<?php
					query_posts( 'p='.$aboutted );
					while (have_posts()) : the_post();
						the_content();
					endwhile;
					wp_reset_query();
				?>
				<hr />
				<h2><span class="ted-title">TEDx</span></h2>
					<img src="<?php bloginfo( 'template_url' ); ?>/img/about_tedx.jpg" style="width: 100%;">
				  <?php
					query_posts( 'p='.$abouttedx );
					while (have_posts()) : the_post();
						the_content();
					endwhile;
					wp_reset_query();
				?>
				 <hr />
				 <h2><span class="ted-title">TEDx</span><span class="trento black">Trento</span></h2>
				 <img src="<?php bloginfo( 'template_url' ); ?>/img/about_tedxtrento.jpg" style="width: 100%;">
				  <?php
					query_posts( 'p='.$abouttedxtrento );
					while (have_posts()) : the_post();
						the_content();
					endwhile;
					wp_reset_query();
				?>
		</div>
	<!-- !end mobile -->
	
	
	<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 hidden-xs" id="big-tabs">
		<ul class="nav nav-tabs" id="about-tab">
		  <li class="active" id="first">
		  	<a href="#ted" data-toggle="tab">
		  		<p>Che cos'è</p>
		  		<span class="ted-logo">TED</span>
		  	</a>
		  </li>
		  <li>
		  	<a href="#tedx" data-toggle="tab">
			  	<p>Che cos'è</p>
			  	<span class="ted-logo">TEDx</span>
			</a>
		  </li>
		  <li>
		  	<a href="#tedxtrento" data-toggle="tab">
		  		<p>Che cos'è</p>
		  		<span class="ted-logo">TEDx<span class="local-logo">Trento</span></span>
		  	</a>
		  </li>
		</ul>
		<div class="about-logo-container">
			<span class="big-ted">TED</span><span class="big-tedx">x</span><span class="big-tedxtrento">Trento</span>
		</div>
		<div class="tab-content">
		  <div class="tab-pane active start fade" id="ted">
		  	<img src="<?php bloginfo( 'template_url' ); ?>/img/about_ted.jpg">
		  	<?php
					query_posts( 'p='.$aboutted );
					while (have_posts()) : the_post();
						the_content();
					endwhile;
				?>
				</div>
		  <div class="tab-pane fade" id="tedx">
			  <img src="<?php bloginfo( 'template_url' ); ?>/img/about_tedx.jpg">
			  <?php
					query_posts( 'p='.$abouttedx );
					while (have_posts()) : the_post();
						the_content();
					endwhile;
					wp_reset_query();
				?>
		  </div>
		  <div class="tab-pane fade" id="tedxtrento">
		  	<img src="<?php bloginfo( 'template_url' ); ?>/img/about_tedxtrento.jpg">
			  <?php
					query_posts( 'p='.$abouttedxtrento );
					while (have_posts()) : the_post();
						the_content();
					endwhile;
					wp_reset_query();
				?>
		  </div>
		</div>
	
			
	</div>
	<div style="clear:both;">
	</div>
	
<?php get_footer(); ?>