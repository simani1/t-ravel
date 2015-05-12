<?php get_header();
/*
Template Name: Cart Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container-fluid">
	  	<h2 class="cartTitle"><?php the_title(); ?></h2>

	  	<div class="cartContent">
 			<?php the_content(); ?>
 		</div>


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>
</div>

<?php get_footer();?>
