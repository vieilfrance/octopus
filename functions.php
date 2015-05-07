<?php
require_once('wp_bootstrap_navwalker.php');

    if ( function_exists( 'add_theme_support' ) ) 
      add_theme_support( 'post-thumbnails' );
	  
	add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
	function baw_hack_wp_title_for_home( $title )
	{
	  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
	    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
	  }
	  return $title;
	}

	register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'kidsrus' ),
	) );
?>