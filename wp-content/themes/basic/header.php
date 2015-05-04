<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
	<?php wp_head();?>
</head>
<body>
  <div class="container">

	<!-- display logo here -->
	<div class="col-xs-6">
		<div class="logo"></div>
	</div>

  	<!-- display nav bar here -->
	<div class="col-xs-6">
		<div class="nav">
			<ul>
				<li class="navItem">Home</li>
				<li class="navItem">Buy Prints</li>
				<li class="navItem">About</li>
				<li class="navItem">Contact</li>
				<li class="navItem">Cart: 0</li>
			</ul>
  		</div>
	</div>

  	