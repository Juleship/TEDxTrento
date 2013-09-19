<!--
	html includes etc etc (stylesheets etc etc)
	navbar
-->

<!DOCTYPE html>
<html>
  <head>
    <title>TEDx Trento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo( 'template_url' ); ?>/style.css" rel="stylesheet" media="screen">
    <!-- G font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,500' rel='stylesheet' type='text/css'>

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
  	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=446677658730360";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	  <nav id="head">
	  	<div class="col-md-12">
			<div class="col-md-10">	 
			  <ul class="top-navbar">
			  	<li>
			  		<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png"></a>
			  	</li>
			  	<li>
			  		<a href="?page_id=2">About</a>
			  	</li>
			  	<li>
			  		<a href="?page_id=8">Speakers</a>
			  	</li>
			  	<li>
			  		<a href="?page_id=10">Programma</a>
			  	</li>
			  	<li>
			  		<a href="?page_id=6">Team</a>
			  	</li>
			  	<li>
			  		<a href="?page_id=12">Partners</a>
			  	</li>
			  	<li>
			  		<a href="?page_id=15">Contatti</a>
			  	</li>
			  </ul>
			</div>
			<div class="col-md-2">
				<div class="fb-like" data-href="http://www.facebook.com/tedxtrento" data-width="450" data-layout="button_count" data-show-faces="false" data-send="false"></div>
			</div>
	  	</div>
	  </nav>
	  <div class="wrapper" id="wrap">