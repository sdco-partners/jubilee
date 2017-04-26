<?php
/**
 * Header
 *
 * Contains header assets.
 *
 * @link Jubliee
 *
 * @package Jubliee
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

  $img = get_field('hr_image', 2);

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<script type="text/javascript">
	document.documentElement.setAttribute("data-browser", navigator.userAgent);
</script>

<script src="//localhost:35729/livereload.js"></script>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- ==== Section: Header ==== -->
<header style="background-image: url('<?php echo $img['url']; ?>')">
  <div class="corners">
  	<h1>G&amp;G Jubilee</h2>
  	<h2>Charleston, SC</h2>
  </div>
  <div class='save-the-date'>
    <h3><?php echo file_get_contents($GLOBALS['url'].'/assets/save-the-date.svg'); ?></h3>
  	<h2><?php echo get_field('hr_date', 2) ?></h2>
  </div> 
</header>