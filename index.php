<?php get_header(); 
	
	$hometitle = 'homepage-paragraph';
	$hometitle = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $hometitle . "'" );
?>


	<div class="row home-row home-background">
		<div class="youtube-gallery">
			<!-- gallery goes here -->
			<?php $cont = json_decode(file_get_contents('http://gdata.youtube.com/feeds/api/playlists/PLsRNoUx8w3rNJkr1e9E9KKZxmbK0mKYmv/?v=2&alt=json&feature=plcp')); ?>
			<?php $feed = $cont->feed->entry; ?>
			<?php if(count($feed)): foreach($feed as $item): // youtube start ?>
			    <?php $thumb = $item->{'media$group'}->{'media$thumbnail'}; ?>
			    <div class="video"><img src="<?php echo $thumb[2]->url ?>" /></div>
			<?php endforeach; endif; ?>
		</div>
	</div>
	
	<div class="row home-row">			
		<div id="tickets" class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center index-padding">
			<div class="row">
				<div class="col-xs-12">
					<!-- <p><span class="text-tedxtrento hidden-xs"><span class="ted-title">TEDx</span>Trento</span></p> -->
					

					<p>
						Rimanete in contatto con noi tramite i nostri social network!
						<div class="">
							<a href="http://www.facebook.com/tedxtrento"><i class="icon-facebook-squared"></i></a>
							<a href="http://www.twitter.com/tedxtrento"><i class="icon-twitter-squared"></i></a>
							<a href="http://www.google.com/+TEDxTrento"><i class="icon-gplus-squared"></i></a>
							<a href="http://www.flickr.com/photos/tedxtrento"><i class="icon-flickr"></i></a>
						</div>
					</p>
					<a class="twitter-timeline" href="https://twitter.com/TEDxTrento" data-widget-id="382075717875294208"></a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
				</div>
				<!--
<div class="col-md-3 col-sm-5 col-xs-12">
					<a href="http://www.youtube.com/watch?v=PM2lpvKYKqo" target="_blank">
						<div class="video-container">
						</div>
					</a>	
				</div>
-->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="row home-row bottom-home-background negative-bottom bottom-row">
					

	</div>
		
<?php get_footer(); ?>