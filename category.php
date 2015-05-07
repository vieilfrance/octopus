<?php
/**
 * The template for displaying Category pages
 *
 * @package WordPress
 * @subpackage Octopus
 * @since Twenty Octopus 1.0
 */

get_header(); ?>

<!--  <div class="container">
		
		<div class="row">
 			<div class="hidden-xs col-sm-2"></div>
 			<div class="header-title col-xs-12 col-sm-8">
			<div class="entry-meta">
				<span class="cat-links"></span>
			</div>
				<div <?php post_class()?>>
					<h1 class="entry-title"><?php single_cat_title(''); ?></h1>
					<div class="content">
						<?php echo category_description( ); ?>
					</div>
				</div>
			</div>
 			<div class="hidden-xs col-sm-2"></div>
		</div>
	</div>
 -->	
	<div class="row">
			<?php if ( have_posts() ) :?>
			<?php while (have_posts()) : the_post(); ?>
				
		<div class="col-lg-6">
			<div>
			<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail("medium",array('class' => 'img-responsive img-center')); ?>
			<div class="hover-pic"><h2 class="paragraph-center"><?php the_title_attribute(); ?></h2></div>
			</a>
			</div>
			<div class="paragraph-under">
				<?php the_title_attribute(); ?>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
<?php else : ?>
<div id="pagecontent">
<h1><?php _e('No posts found','octopus')?></h1>
<p><?php _e('There are no posts to display here.','octopus')?></p>
</div>
<?php endif; ?>

<?php get_footer(); ?>
	