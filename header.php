<?php
/**
 * The Header for the Octopus theme.
 *
 * Displays all of the <head> section and everything up till <div id="maincol">
 *
 * @package WordPress
 * @subpackage Octopus
 * @since Octopus 1.0
 */
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?php bloginfo('name'); ?> | <?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?php echo get_template_directory_uri(); ?>/bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,600' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>

  </head>
  <body>

  <nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
	<div class="row">
	<div class="col-xs-12 col-sm-3">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa1 fa-camera"></i>&nbsp;<?php bloginfo('description'); ?></a>
      </div>
	</div>
	<div class="col-xs-12 col-sm-7">

                  <?php wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbar-collapse',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                ); ?>

	</div>
	<div class="xs-hidden col-sm-2"></div>
	</div>
	</div>
  </nav>
