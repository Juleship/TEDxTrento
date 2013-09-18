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
	  <nav id="head">
	  	<div class="col-md-12">
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
	  </nav>
	  <div class="wrapper" id="wrap">