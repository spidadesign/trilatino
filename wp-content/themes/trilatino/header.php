<!DOCTYPE html>
<html lang="">
	<head>
		<title><?php echo get_bloginfo('name');  wp_title(); ?></title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico" type="image/x-icon">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/stylesheets/applications.css">
	</head>
	<body <?php body_class($class); ?>>
	<div class="top-bar"></div>
	<nav class="navbar" role="navigation">
			<div class="container"><!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="logo" href="<?php echo site_url();?>">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png">
						<h1 class="branding">Trilatino Triathlon Club</h1>
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="<?php echo site_url();?>">Home</a></li>
						<li><a href="<?php echo site_url();?>/about">About Us</a></li>
						<li class="dropdown">
							<a href="<?php echo site_url();?>/training" class="dropdown-toggle" data-toggle="dropdown">Training</a>
						</li>
						<li><a href="<?php echo site_url();?>/coaching">Coaching</a></li>
						<li><a href="<?php echo site_url();?>/support-us">Support Us</a></li>
						<li><a href="<?php echo site_url();?>">Shop</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<div class="container">
			