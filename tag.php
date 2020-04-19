<?php
/**
 * The template for displaying Tag pages
 *
 * @package WordPress
 * @subpackage Octopus
 * @since Twenty Octopus 2.0
 */

get_header(); ?>

<?php if ( have_posts() ) : 
	single_tag_title( '', false );
	tag_description();

	$post_count=0;
?>

<?php while(have_posts()) : 
	the_post(); 
	$post_count++;
	if ($post_count==1) :
?>
	<div class="row row-second-post">
<?php
	endif;
	switch($post_count) {
		case 1:
?>
<div class="col-md-4 col-space-1-third"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small',array('class' => 'img-responsive')); ?></a><div class="other_title_capslock"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></div>
<?php
break;
		case 2:
?>
<div class="col-md-4 col-space-2-third"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small',array('class' => 'img-responsive')); ?></a><div class="other_title_capslock"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></div>
<?php
break;
		default:
?>
<div class="col-md-4 col-space-3-third"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small',array('class' => 'img-responsive')); ?></a><div class="other_title_capslock"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></div></div>
<?php
$post_count=0;
break;	
}
 endwhile; 

if ($post_count<3) :
?>
</div>

<?php 
endif;

 else : ?>
<div id="pagecontent">
<h1><?php _e('No posts found','octopus')?></h1>
<p><?php _e('There are no posts to display here.','octopus')?></p>
</div>
		<?php endif; ?>



<?php get_footer(); ?>