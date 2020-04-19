<?php 
/**
 * Template for displaying the home page.
 *
 * @package WordPress
 * @subpackage Octopus
 * @since Octopus 2.0
 */
get_header(); ?>

<?php  
$query = new WP_Query(array('category_name'=>'home','order' => 'DESC')); 
if($query->have_posts()) :
	$post_count=0;
?>

<?php $query->the_post(); $post_count++; ?>
	<div class="row row-first-post"><div class="col"><div class="first_title_capslock"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large',array('class' => 'img-responsive')); ?></a></div></div>
	<div class="row row-second-post">
<?php while($query->have_posts()) : 
	$query->the_post(); 
	$post_count++;
	switch($post_count) {
		case 2:
?>
<div class="col-md-4 col-space-1-third"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small',array('class' => 'img-responsive')); ?></a><div class="other_title_capslock"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></div>
<?php
break;
		case 3:
?>
<div class="col-md-4 col-space-2-third"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small',array('class' => 'img-responsive')); ?></a><div class="other_title_capslock"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></div>
<?php
break;
		default:
?>
<div class="col-md-4 col-space-3-third"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small',array('class' => 'img-responsive')); ?></a><div class="other_title_capslock"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></div>
<?php	
}
 endwhile; ?>
	</div>
<?php endif; 

// Reset Query
wp_reset_query();
?>


<?php get_footer(); ?>