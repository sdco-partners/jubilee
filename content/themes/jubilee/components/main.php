<?php 

/*
*  Section => Main
*/

?>

<div class="celebration">
  <h2>Celebrating the best of</h2>
  <h2><?php echo file_get_contents($GLOBALS['url'].'/assets/gg-logo.svg'); ?></h2>
  <h2>in one place</h2>
</div>
<p><?php echo get_field('hr_copy', 2) ?></p>
<div class="event-info">
	<?php echo file_get_contents($GLOBALS['url'].'/assets/title.svg'); ?>
</div>
<h2><?php echo get_field('hr_ticket-head', 2) ?></h2>
<button id="toggle-popup"><?php echo get_field('hr_ticket-cta', 2) ?></button>