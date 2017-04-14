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
  	<h3>Press Inquiries</h3>
  	<h3>Contact us</h3>
  	<h3>Garden &amp; Gun</h3>
  </div>
	<div class="2017-logo">
		<?php echo file_get_contents($GLOBALS['url'].'/assets/2017-logo.svg'); ?>
	</div>
	<div class="copyright">
		<h3>Copyright Garden &amp; Gun</h3>
		<h3>Site By SDCO Partners</h3>
	</div>
</footer>