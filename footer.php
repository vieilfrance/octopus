<?php
/**
 * The template for displaying the footer of each page.
 *
 * Contains footer content and the closing of
 * various div elements.
 *
 * @package WordPress
 * @subpackage Octopus
 * @since Octopus 1.0
 */
?>
	<footer class="grey-footer">
	  <div class="container">
	  <div class="row footer-center">
	  <div class="footer-social">
	  <a href="http://www.facebook.com/davidbeckphotos" title="facebook"><i class="fa fa-2x fa-facebook-square"></i></a>
	  <a href="http://www.twitter.com/vieilfrance" title="twitter"><i class="fa fa-2x fa-twitter-square"></i></a>
	  <a href="http://www.flickr.com/photos/vieilfrance" title="flickr"><i class="fa fa-2x fa-flickr"></i></a>
	  <a href="http://www.instagram.com/vieilfrance" title="instagram"><i class="fa fa-2x fa-instagram"></i></a>
	  </div>
		<div>	(c) David Beck / @vieilfrance </div>
		
		</div>
	</div>
	</footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

	<? 
if (is_front_page()) { 
  ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl.carousel.2.0.0-beta.2.4/assets/owl.theme.default.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/owl.carousel.2.0.0-beta.2.4/owl.carousel.min.js"></script>


	<script>
	$(document).ready(function() {
		$("#home-caroussel").owlCarousel({
		 center : false,
		 autoplay: true,
		 items: 1,
		 dots: false,
		 loop: true,
		 lazyLoad: true,
		 navigation : false,
		 animateOut : true,
		 animateIn : true
		});

	});

	</script>
<? 
}
?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.3.0/css/font-awesome.min.css" >
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap-3.3.4/js/bootstrap.min.js" ></script>

<?php
if (is_front_page()) { 
  ?>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@vieilfrance" />
    <meta name="twitter:creator" content="@vieilfrance" />
    <meta name="twitter:title" content="David Beck Photographies" />
    <meta name="twitter:description" content="Portfolio et expériences photographiques" />
    <meta name="twitter:image" content="http://davidbeck.fr/dev/davidbeckfr/wordpress/wp-content/uploads/2014/06/P1070135-4000x2048-800x416.jpg" />
    <meta name="twitter:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />

    <meta name="og:title" content="David Beck Photographies"/>
    <meta name="og:type" content="website"/>
    <meta name="og:description" content="Portfolio et expériences photographiques"/>
    <meta name="og:image" content="http://davidbeck.fr/dev/davidbeckfr/wordpress/wp-content/uploads/2014/06/P1070135-4000x2048-800x416.jpg" />
    <meta name="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />
	<meta name="og:site_name" content="David Beck Photographies" />

<? 
}
?>

<?php
if (is_category()) { 
	$cat=get_the_category();
  ?>
	<meta name="twitter:card" content="gallery" />
	<meta name="twitter:site" content="@vieilfrance" />
	<meta name="twitter:creator" content="@vieilfrance" />
	<meta name="twitter:title" content="David Beck Photographies - <?php echo($cat[0]->name); ?>">
	<meta name="twitter:description" content="Portfolio et expériences photographiques">
	<meta name="twitter:url" content="<?php echo(get_category_link($cat[0]->cat_ID)); ?> " />
<? 
}
?>

  </body>
</html>