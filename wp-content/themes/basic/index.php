<?php get_header(); ?>

<div class="homepageText">Your one stop destination to unravel, explore and purchase<br />high quality stock photos uploaded to our database each day.<br>Start exploring now!</div>
<div class="homeSearchArea">
	<form method="get" action="<?php bloginfo('url'); ?>/search"><input type="text" name="query" class="homeSearchField" /><a style="color: white;" href="#" onclick="this.submit()">Search</a></form>
</div>
<div class="col-xs-12" style="margin-top: 40px;background-color:white;">
<ul class="products" style="list-style:none;">
        <?php
                $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 9
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

</div>

<?php if(have_posts()): while (have_posts()) : the_post(); ?>

      <h2>
      	<a href="<?php the_permalink() ?>">
      		<?php the_title(); ?>
      	</a>
      </h2>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
