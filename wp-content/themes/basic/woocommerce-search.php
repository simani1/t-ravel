<?php get_header(); 
/*
Template Name: Woo Search Theme
*/
error_reporting(E_ALL & ~E_NOTICE);
?>
<div class="wooTitle col-xs-12">Search</div>
<div class="col-xs-12 buy_prints_container">
	<ul class="products">
	<?php
		if($_GET['query'] != "")
                	$the_query = $_GET['query'];
        	else
                	$the_query=false;
		$args = array(
			's' => $the_query,
			'post_type' => 'product',
			'posts_per_page' => 100
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
	</ul><!--/.products-->
<?php get_footer(); ?>
</div>
	

