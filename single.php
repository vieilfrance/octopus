<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Octopus
 * @since Octopus 1.0
 */

get_header(); ?>

<!--   <div class="container">
 -->		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //The Loop?>

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@vieilfrance">
<meta name="twitter:creator" content="@vieilfrance">
<meta name="twitter:title" content="<?php wp_title(''); ?>">
<meta name="twitter:description" content="Photographe">
<meta name="twitter:image:src" content="<?php $post_thumbnail_id = get_post_thumbnail_id(); $img_thmb=wp_get_attachment_image_src( $post_thumbnail_id,'large', true); echo $img_thmb[0]; ?>">

<meta property="og:title" content="<?php wp_title(''); ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:image" content="<?php $post_thumbnail_id = get_post_thumbnail_id(); $img_thmb=wp_get_attachment_image_src( $post_thumbnail_id,'large', true); echo $img_thmb[0]; ?>" />
<meta property="og:article:author" content="@vieilfrance"/>

<?php
		if (has_post_thumbnail()) {
		// Include the featured content template.
		//get_template_part( 'featured-content' );
		}
?>

	<div class="row">
	<div class="hidden-xs col-sm-2"></div>
	<div class="header-title col-xs-12 col-sm-8 <?php /*if (has_post_thumbnail()) {echo "featured-header";} */ ?>">

<!-- 	<div class="entry-meta">
			<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.' ) ); ?></span>
		</div>
 -->		<div <?php post_class()?>>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<div class="content">
		
			
			<?php the_content()?>
			<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
			
		
	</div>

	</div>
	</div>
	<div class="hidden-xs col-sm-2"></div>
	</div>

<?php endwhile;endif;?>
<!-- 	</div>
 -->
<?php
get_footer();
?>