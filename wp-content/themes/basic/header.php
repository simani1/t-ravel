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
				<li class="navItem">Cart</li>
			</ul>
  		</div>
	</div>
  	