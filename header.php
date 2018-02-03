<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package eli
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php if ( is_singular() && pings_open() ) { ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php } ?>

   <?php  wp_head(); ?>
  </head>

 <body <?php body_class(); ?>>

<!-- Navigation -->
<?php 
  if( !is_page() ){
    get_template_part( 'template-parts/navigation/navigation', 'top' );
  }else{
  //assume single page and get content
  $hide_navbar = get_post_meta( $post->ID, 'eli_hide_page_navbar', true );

  if( '1' != $hide_navbar ) {
    get_template_part( 'template-parts/navigation/navigation', 'top' );
  }
}