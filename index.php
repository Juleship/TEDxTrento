<?php get_header(); 
	
	$hometitle = 'homepage-paragraph';
	$hometitle = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $hometitle . "'" );
?>


	<div class="row home-row home-background">
		<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 home-intro index-padding tia-padded text-center">
			<h2 class="main-title"><span class="big-tedx">TEDx</span> sbarca a Trento!</h2>
			<p>
				Menti brillanti, progetti innovativi, idee creative e tanta passione renderanno la prima edizione di TEDxTrento un momento davvero unico. Non sarà solo una conferenza, ma una vera e propria fucina di idee.<br />Come puoi mancare?
			</p>
			<hr />
			<h2><strong>23 Novembre 2013<br>• Teatro Sociale di Trento •</strong></h2>
			
			<a href="http://www.boxol.it/PrimiAllaPrima/IT/PrimiAllaPrima-dettaglio-evento.aspx?E=78657"><button class="btn btn-default babbies-button">Acquista i biglietti<img src="<?php bloginfo( 'template_url' ); ?>/img/primi_alla_prima.png" /></button></a>
		</div>
	</div>
	
	<div class="row home-row">			
		<div id="tickets" class="col-sm-10 col-sm-offset-1 text-center index-big-padding">
			<div class="col-md-5 text-left">
					<?php
						query_posts( 'p='.$hometitle );
						while (have_posts()) : the_post();
							the_content();
						endwhile;
						wp_reset_query();
					?>				
				
			</div>
			<div class="col-md-7">
				<img class="youtube" src="<?php bloginfo('template_url'); ?>/img/youtube.jpg" />
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="row home-row bottom-home-background negative-bottom">
		<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 partners-intro index-padding text-center">
			<h2>Mancano ancora</h2>
			<div>
				<ul class="clock">
					<li><input class="knob knob-day" data-fgColor="#FF2B06" data-linecap=round data-min="0" data-max="60" data-thickness=.1 data-width="100%" data-readOnly=true data-displayInput=true value="36">
						GIORNI
					</li>
					<li><input class="knob knob-hour" data-fgColor="#FF2B06" data-min="1" data-max="24" data-linecap=round data-thickness=.1 data-width="100%" data-readOnly=true data-displayInput=true value="2">
						ORE
					</li>
					<li><input class="knob knob-minute" data-fgColor="#FF2B06" data-min="0" data-max="60" data-linecap=round data-thickness=.1 data-width="100%" data-readOnly=true data-displayInput=true value="35">
						MINUTI
					</li>
					<li><input class="knob knob-second" data-fgColor="#FF2B06" data-min="0" data-max="60" data-linecap=round data-thickness=.1 data-width="100%" data-readOnly=true data-displayInput=true value="35">
						SECONDI
					</li>
					<div class="clearfix"></div>
				</ul>
			</div>
			<h2>a TEDxTrento</h2>
		</div>
		<div class="clearfix"></div>
	</div>
		
<?php get_footer(); ?>