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
