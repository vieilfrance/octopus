<?php
/**
 * The template for displaying Category pages
 *
 * @package WordPress
 * @subpackage Octopus
 * @since Twenty Octopus 1.0
 */

get_header(); ?>

	<div class="row">
			<?php if ( have_posts() ) :?>
			<?php
			$img_id=0; 
			$img=array();	
			while (have_posts()) : the_post(); 
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); 
			$img[$img_id]=$image[0];
			echo "<meta name='twitter:image".$img_id."' content='".$image[0]."'>";
			?>
		<div class="col-lg-6">
			<div>
			<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail("medium",array('class' => 'img-responsive img-center')); ?>
			<div class="hover-pic hidden-xs"><h2 class="paragraph-center"><?php the_title_attribute(); ?></h2></div>
			</a>
			</div>
			<div class="paragraph-under">
				<div class="visible-xs"><?php the_title_attribute(); ?></div>
			</div>
		</div>
		<?php $img_id++;
		endwhile; ?>
	</div>
<?php else : ?>
<div id="pagecontent">
<h1><?php _e('No posts found','octopus')?></h1>
<p><?php _e('There are no posts to display here.','octopus')?></p>
</div>
<?php endif; ?>


<?php get_footer(); ?>
	