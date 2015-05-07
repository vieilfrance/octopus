<?php 
/**
 * Template for displaying the home page.
 *
 * @package WordPress
 * @subpackage Octopus
 * @since Octopus 1.0
 */
get_header(); ?>

<?php  
$query = new WP_Query(array('category_name'=>'caroussel','order' => 'DESC')); 
if($query->have_posts()) :
?>

		<div id="home-caroussel" class="owl-carousel owl-theme">
		<?php while($query->have_posts()) : $query->the_post(); ?>
			<div><?php the_post_thumbnail('large',array('class' => 'img-responsive')); ?></div>
		<?php endwhile; ?>

		<?php endif; 

		// Reset Query
		wp_reset_query();
		?>

		</div>
				
<?php get_footer(); ?>