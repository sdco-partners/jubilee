<?php
/**
 * Footer
 *
 * Contans footer assets.
 *
 * @link Jubliee
 *
 * @package Jubliee
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

?>


</body><!-- end -->
</html>

<?php wp_footer(); ?>

<!-- ==== Section: Footer -->
<footer>
  <div class="links">
  	<h3>
  	  <a href="<?php echo get_field('ft_inquiries', 2); ?>">Press Inquiries</a>
  	</h3>
  	<h3>
  	  <a href="<?php echo get_field('ft_contact', 2); ?>">Contact us</a>
  	</h3>
  	<h3>
  	  <a href="<?php echo get_field('ft_gg', 2); ?>" target="_blank">Garden &amp; Gun</a>
  	</h3>
  </div>
	<div class="twentyseventeen">
		<?php echo file_get_contents($GLOBALS['url'].'/assets/2017-logo.svg'); ?>
	</div>
	<div class="copyright">
		<h3>Copyright Garden &amp; Gun</h3>
		<h3>Site By <a href="https://sdcopartners.com" target="_blank">SDCO Partners</a></h3>
	</div>
</footer>