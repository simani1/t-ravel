<?php
/**
 * Change the Shop archive page title.
 * @param  string $title
 * @return string
 */
function wc_custom_shop_archive_title( $title ) {
    if ( is_shop() ) {
        return str_replace( __( 'Products', 'woocommerce' ), 'Buy Prints', $title );
    }

    return $title;
}
add_filter( 'wp_title', 'wc_custom_shop_archive_title' );

//NUMBER OF PRODICTS TO DISPLAY ON SHOP PAGE
add_filter('loop_shop_per_page', create_function('$cols', 'return 6;'));

add_action ('init', 'change_columns');
function change_columns() {
    add_filter( 'loop_shop_columns', 'custom_loop_columns' );
    
    function custom_loop_columns() {
        return 3;
    }
}


/* Show pagination on the top of shop page */
//add_action( 'woocommerce_before_shop_loop', 'woocommerce_pagination', 10 );

/* Remove pagination on the bottom of shop page */
//remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );

// Alter produt loop individual products 
 
add_action( 'woocommerce_before_shop_loop_item_title', 'new_product_defaults_wrap_open' , 20 ); //opener
add_action( 'woocommerce_after_shop_loop_item_title', 'new_product_defaults_wrap_close', 40); //closer
 
function new_product_defaults_wrap_open() {
  echo '<div class="product-details">';
}
function new_product_defaults_wrap_close() {
	echo '</div><!--/.product-details-->';
}


add_action( 'woocommerce_after_shop_loop_item_title', 'lk_woocommerce_product_excerpt', 35, 2);
if (!function_exists('lk_woocommerce_product_excerpt'))
{
function lk_woocommerce_product_excerpt()
{
$content_length = 500;
global $post;
$content = $post->post_excerpt;
$wordarray = explode(' ', $content, $content_length + 1);
if(count($wordarray) > $content_length) :
array_pop($wordarray);
array_push($wordarray, '...');
$content = implode(' ', $wordarray);
$content = force_balance_tags($content);
endif;
echo "<span class='excerpt'><p>$content</p></span>";
}
}
