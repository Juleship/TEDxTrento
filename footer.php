	</div>
	<div class="top-red"></div>
	
	<div class="footer-wrap" id="foot">
		<div class="col-md-10 col-sm-12 col-md-offset-1 footer-grey footer">
			
			<div class="text-center" style="padding-top: 20px;"><p><a href="press">| Press |</a></p></div>
			<img src="<?php bloginfo( 'template_url' );?>/img/tedxtrento-small-logo-100x23.png" class="footer-logo" width="100" height="23"/>
				
			<div class="hidden-sm hidden-xs">
				<small>
					<p>What is <a href="http://www.ted.com/tedx">TEDx</a>?</p> 
					<p>In the spirit of ideas worth spreading, TED has created a program called TEDx. TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. Our event is called TEDxTrento, where x = independently organized TED event. At our TEDxTrento event, TEDTalks video and live speakers will combine to spark deep discussion and connection in a small group. The TED Conference provides general guidance for the TEDx program, but individual TEDx events, including ours, are self-organized.</p>
				</small>
			</div>
			
			<small>
				<p>© TEDxTrento. This independent TEDx event is operated under license from <a href="http://www.ted.com" target="_blank">TED</a>. </p>
				<p>Designed and developed with love by <a href="http://www.facebook.com/babbiesproduction" target="_blank">Babbies Production</a> - <a href="http://www.giuliomichelon.com" target="_blank">Giulio Michelon</a> and <a href="http://www.linkedin.com/in/leonardolanzinger" target="_blank">Leonardo Lanzinger</a>.
				</p>
			</small>
		</div>
		<div style="clear: both;"></div>
	</div>


	<?php
		wp_footer();
    	if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    	$page_name = get_the_title(); 
	    $page_name = strtolower($page_name);
	    endwhile; endif; 
	?>
	
<!--
	foobar, credits, contacts
	scripts
-->
	<!-- Facebook like plug-in -->
	<div id="fb-root"></div>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>	
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=446677658730360";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.min.js"></script>
    <!-- <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-9-min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
    <!-- tab.js not needed, it's already inside bootstrap -->
    <!-- <script src="<?php bloginfo( 'template_url' ); ?>/js/tab.js"></script>-->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/about.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/countdown.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.knob.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/functions.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/plugins/CircleHoverEffects/js/modernizr.custom.79639.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/js/freewall.js"></script>
	<script>
		var wall = new freewall(".youtube-gallery");
		wall.reset({
    		gutterY: 0,
    		gutterX: 0
		});
    </script>
    
    <script>
		$(function() {
		    $(".knob").knob();
		});
	</script>
	<script>
		$(window).ready(function(){
			$('.clock').find('div').css('display','inline-block');
		});
	</script>
    
    
    <?php 
    	echo "<script>$('#nav-".$page_name."').addClass('active');
    	$('.top-navbar').find('.".$page_name."').addClass('active-bignav');</script>";
    ?>
	
	<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-39366577-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
	</script>
  
  </body>
</html>