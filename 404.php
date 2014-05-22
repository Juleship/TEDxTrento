<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage TEDxTrento
 * @since
 */

get_header(); ?>
	<div class="row home-background home-background-red row-404 negative-bottom">
		<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 partners-intro text-center">
			<h2>ERRORE 404</h2>
			<p>Ciao, grazie per la visita.<br/> Sfortunatamente sembra che la pagina che stai cercando non esista!<br/>
			Come sei arrivato qui?</p>
			<p><a href="<?php echo home_url(); ?>/contatti">Contattaci</a> se sei arrivato qui seguendo un collegamento su questo sito.</p>
			<br>
			<p><a href="<?php echo home_url(); ?>">Torna alla home</a></p>
		</div>
	</div>

<?php get_footer(); ?>