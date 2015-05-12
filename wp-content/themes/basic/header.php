<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/my.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
	<?php wp_head();?>
</head>
<body>
<div id="#myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="col-xs-6" style="float:left;"><img class="productImage" src="" /></div>
        <div class="col-xs-6" style="float: right;">
        	<div class="col-xs-12 productExcerpt"></div>
        	<div class="col-xs-12 productPrice"></div>
        </div>
      </div>
      <div class="modal-footer" style="text-align: center;">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-top: 50px;">Close</button>
        <button type="button" class="btn btn-primary" onClick="" style="margin-top: 50px;">Add to Cart</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

  <div class="container-fluid">

	<!-- display logo here -->
	<div class="col-xs-6">
		<a href="<?php echo get_option('home'); ?>"><div class="logo"></div></a>
	</div>

  	<!-- display nav bar here -->
	<div class="col-xs-6">
		<div class="nav col-xs-12">
			<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			      $actual_link = rtrim($actual_link, '/');
			?>
			
			<?php if (strcmp($actual_link, get_option('home')) != 0) { ?><div class="searchArea"><form action="<?php bloginfo('url'); ?>/search" method="get"><input type="text" name="query" class="searchField" /><a style="color: white;padding-left:15px" href="#" onclick="this.submit()">Search</a></form></div><?php }?>
			<ul>
				<a href="<?php echo get_option('home'); ?>"><li class="navItem">Home</li></a>
				<a href="<?php echo get_option('home'); ?>/buy-prints"><li class="navItem">Buy Prints</li></a>
				<a href="<?php echo get_option('home'); ?>/about"><li class="navItem">About</li></a>
				<a href="<?php echo get_option('home'); ?>/contact"><li class="navItem">Contact</li></a>
				<a href="<?php echo get_option('home'); ?>/cart"><li class="navItem">Cart</li></a>
			</ul>
  		</div>
	</div>
  	
