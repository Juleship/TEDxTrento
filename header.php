<!DOCTYPE html>
<html>
  <head>
  	<?php 
    	if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    	$page_name_big = get_the_title(); 
	    $page_name = strtolower($page_name_big);
	    	if (is_home())
	    		$page_name_big = 'Qualità della vita';
	    endwhile; 
	    endif; 
	?>
    <title>TEDxTrento - <?php echo $page_name_big ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TEDxTrento: Menti brillanti - Progetti innovativi - Idee creative - Tanta passione - 23 novembre 2013 - Teatro Sociale di Trento">
    <meta name="keywords" content="TEDx, TED, Trento, TEDxTrento, Technology, Entratainment, Design, qualità della vita">
    <!-- Facebook tags -->
	<meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/img/tedxtrento-facebook.jpg">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1024">
	<meta property="og:image:height" content="1024">
    <!-- Bootstrap -->
    <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- custom css -->
    <link href="<?php bloginfo( 'template_url' ); ?>/style.css" rel="stylesheet" media="screen">
    <?php 
    	if(!is_home()){
    		echo '<link href="'.get_bloginfo( 'template_url' ).'/css/'.$page_name.'.css" rel="stylesheet" media="screen">';
    		}
    ?>
    <link href="<?php bloginfo( 'template_url' ); ?>/css/header.css" rel="stylesheet" media="screen">
    <!-- G font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500' rel='stylesheet' type='text/css'>
    <!-- fontello -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/fontello.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/fontello-ie7.css"><![endif]-->
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    
    <?php
		wp_head();
	?>
	
  </head>

  <body>
		<div class="top-red"></div>
		<!-- let's get some mobile -->
			<nav class="navbar navbar-default visible-sm visible-xs" role="navigation">
			  <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" href="<?php echo home_url(); ?>"><span class="red-text">TEDx</span>Trento</a>
			  </div>
			
			  <!-- Collect the nav links, forms, and other content for toggling -->
			  <div class="collapse navbar-collapse navbar-ex1-collapse">
			    <ul class="nav navbar-nav">
			      <li id="nav-about"><a href="<?php echo home_url(); ?>/about/">About</a></li>
			      <li id="nav-speakers"><a href="<?php echo home_url(); ?>/speakers/">Speakers</a></li>
			      <li id="nav-gallery"><a href="<?php echo home_url(); ?>/gallery/">Gallery</a></li>
			      <li id="nav-team"><a href="<?php echo home_url(); ?>/team/">Team</a></li>
			      <li id="nav-partners"><a href="<?php echo home_url(); ?>/partners/">Partners</a></li>
			      <li id="nav-contatti"><a href="<?php echo home_url(); ?>/contatti/">Contacts</a></li>
			    </ul>
			  </div><!-- /.navbar-collapse -->
			</nav>
		<!-- !mobile -->
		
		<!-- this is for desktop -->
	  	<div class="header row hidden-sm hidden-xs">
	  		<div class="col-md-10 wide-menu">
			  <ul class="top-navbar">
			  	<li>
			  		<a class="logo" href="<?php echo home_url(); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/tedxtrento-logo.png" width="220" height="50"></a>
			  	</li>
			  	<li class="menu-item about">
			  		<a href="<?php echo home_url(); ?>/about/">About</a>
			  	</li>
			  	<li class="menu-item speakers">
			  		<a href="<?php echo home_url(); ?>/speakers/">Speakers</a>
			  	</li>
			  	<li class="menu-item gallery">
			  		<a href="<?php echo home_url(); ?>/gallery/">Gallery</a>
			  	</li>
			  	<li class="menu-item team">
			  		<a href="<?php echo home_url(); ?>/team/">Team</a>
			  	</li>
			  	<li class="menu-item partners">
			  		<a href="<?php echo home_url(); ?>/partners/">Partners</a>
			  	</li>
			  	<li class="menu-item contatti">
			  		<a href="<?php echo home_url(); ?>/contatti/">Contacts</a>
			  	</li>
			  </ul>	
	  		</div> 
			<div class="col-sm-2 icons navbar-icons">
		        <a href="http://www.facebook.com/TEDxTrento"><i class="icon-facebook-squared"></i></a>
		        <a href="http://www.twitter.com/TEDxTrento"><i class="icon-twitter-squared"></i></a>
		        <a href="http://plus.google.com/+TEDxTrento"><i class="icon-gplus-squared"></i></a>
			</div>
      </div>
	  			<!--
		  
	  		<div class="col-sm-2">
				<div class="fb-like" data-href="http://www.facebook.com/tedxtrento" data-width="450" data-layout="button_count" data-show-faces="false" data-send="false"></div>
				<a href="https://twitter.com/tedxtrento" class="twitter-follow-button" data-show-count="false" data-lang="it">Segui @tedxtrento</a>
	  		</div>-->
	  	</div>
	  	
	  	<div style="clear:both"></div>
	  	
	  <div class="wrapper" id="wrap">