<?php get_header();
/*
Template Name: About Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container-fluid">
	  	<h2 class="aboutTitle"><?php the_title(); ?></h2>

	  	<div class="aboutContent">
 			<?php the_content(); ?>
 		</div>


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>
<?php get_footer(); ?>
</div>



