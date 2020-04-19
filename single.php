<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Octopus
 * @since Octopus 2.0
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //The Loop?>

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
		<div class="header-title">
			<div <?php post_class()?>>
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class="content">
						<?php the_tags( '<footer class="entry-meta">&lt;<span class="tag-links">', '&gt;&lt;', '</span>&gt;</footer>' ); ?>		
						<?php the_content()?>

						
					
				</div>

			</div>
		</div>
	</div>

<?php endwhile;endif;?>
<?php
get_footer();
?>