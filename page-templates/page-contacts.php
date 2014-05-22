<?php 
	/* Template Name: Tedx Contacts Page
	*/
	get_header(); 
?>
	<div class="contatti-background">
		<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 contatti-intro">
			<?php
				while (have_posts()) : the_post();
					the_content();
				endwhile;
				wp_reset_query();
			?>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-sm-8 col-sm-offset-2 contatti-wrapper">
		<p>Segui TEDxTrento anche sui social network!</p>
			<div class="row">
				<div class="col-sm-6">
					<h2>Facebook</h2>
					<div class="fb-like-box" data-href="https://www.facebook.com/tedxtrento" data-width="100%" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>
				</div>
				<div class="col-sm-6">
					<h2>Twitter</h2>
					<a class="twitter-timeline" href="https://twitter.com/TEDxTrento" data-widget-id="382075717875294208">Tweets di @TEDxTrento</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

				</div>
			</div>
			
			<!-- g+ -->
			
			<!--
<div class="row">
				<div class="col-sm-12">
					<h2>Google+</h2>
						<script type="text/javascript">
						  (function() {
						    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
						    po.src = 'https://apis.google.com/js/plusone.js';
						    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
						  })();
						</script>
						<a style='display: block; height: 0;' href="http://plus.google.com/103590378333728514123" rel="publisher">&nbsp;</a>
					
				</div>
				<div class="clearfix">
				</div>
			</div>
-->
	
	</div>
	
	<div class="clearfix"></div>	
	
<?php get_footer(); ?>