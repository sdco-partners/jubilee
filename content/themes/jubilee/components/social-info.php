<?php 

/*
*  Section => Social Info
*/

	// Image Variables
	$pt_one_logo = get_field('pt_one_logo', 2);
	$pt_two_logo = get_field('pt_two_logo', 2);
	$pt_three_logo = get_field('pt_three_logo', 2);
?>

<div class="jubilee-logo">
	<?php echo file_get_contents($GLOBALS['url'].'/assets/jubilee-logo.svg'); ?>
</div>

<div class="social-links">
	<div id="face">
	  <a href="<?php echo get_field('sc_face', 2) ?>" 
	    target="_blank" alt="Garden and Gun Facebook">
	    <?php echo file_get_contents($GLOBALS['url'].'/assets/face.svg'); ?>
	    </a>
	  </div>
	<div id="twit">
	  <a href="<?php echo get_field('sc_twit', 2) ?>" 
	    target="_blank" alt="Garden and Gun Twitter" >
	    <?php echo file_get_contents($GLOBALS['url'].'/assets/twit.svg'); ?>
	  </a>
	</div>
	<div id="insta">
	  <a href="<?php echo get_field('sc_insta', 2) ?>" 
	    target="_blank" alt="Garden and Gun Instagram">
	    <?php echo file_get_contents($GLOBALS['url'].'/assets/insta.svg'); ?>
	  </a>
	</div>
	<h3><?php echo get_field('sc_hash', 2) ?></h3>
</div>

<div class="partners">
  <h3>A Special Thanks To our Partners</h3>
	<div class="founding">
	  <div class="logo">
	    <img src="<?php echo $pt_one_logo['url']; ?>"
	      class="image"  alt="<?php echo $pt_one_logo['alt']; ?>">
	  </div>
		<h3><?php echo get_field('pt_one', 2) ?></h3>
	</div>
	<div class="founding">
	  <div class="logo">
	    <img src="<?php echo $pt_two_logo['url']; ?>" 
	      class="image" alt="<?php echo $pt_two_logo['alt']; ?>">
	  </div>
		<h3><?php echo get_field('pt_two', 2) ?></h3>
	</div>
	<div class="founding">
	  <div class="logo">
	    <img src="<?php echo $pt_three_logo['url']; ?>" 
	    class="image" alt="<?php echo $pt_three_logo['alt']; ?>">
	  </div>
		<h3><?php echo get_field('pt_three', 2) ?></h3>
	</div>
</div>