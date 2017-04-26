<?php
/** 
 * Index
 *
 * The main template file
 *
 * @link Jubliee
 *
 * @package Jubliee
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */  
  
  

  get_header(); ?>

<!-- ==== Section: Main ==== -->
<section id="main">
  <?php get_template_part('components/main'); ?>
</section>

<!-- ==== Section: Image Block 1 ====  -->
<section class="image-block">
  <?php get_template_part('components/image-block'); ?>
</section>


<!-- ==== Section: Newsletter ==== -->
<section id="newsletter">
  <?php get_template_part('components/newsletter'); ?>
</section>

<!-- ==== Section: Social Info ==== -->
<section id="social-info">
  <?php get_template_part('components/social-info'); ?>
</section>

<!-- ==== Section: Newsletter ==== -->
<section id="popup">
  <?php get_template_part('components/popup'); ?>
</section>

<?php get_footer();