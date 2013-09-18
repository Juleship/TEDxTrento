<!--
	html includes etc etc (stylesheets etc etc)
	navbar
-->

<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
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
  	<nav>
	  <ul class="top-navbar">
	  	<li>
	  		<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png"></a>
	  	</li>
	  	<li>
	  		<a href="#">About</a>
	  	</li>
	  	<li>
	  		<a href="#">Speakers</a>
	  	</li>
	  	<li>
	  		<a href="#">Programma</a>
	  	</li>
	  	<li>
	  		<a href="#">Team</a>
	  	</li>
	  	<li>
	  		<a href="#">Partners</a>
	  	</li>
	  	<li>
	  		<a href="#">Contatti</a>
	  	</li>
	  </ul>
  	</nav>
<!-- navbar -->