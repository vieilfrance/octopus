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
<? 
if (is_front_page()) { 
  ?>
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
<link href='http://fonts.googleapis.com/css?family=Roboto:300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  </body>
</html>