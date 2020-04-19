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
		
	<div class="row">
		<div class="header-title>">

			<div <?php post_class()?>>
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="content">
					<?php the_content()?>
				</div>


			</div>
		</div>
	</div>

<?php endwhile;endif;?>


<?php
get_footer();
?>