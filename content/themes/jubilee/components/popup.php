<?php 

/*
*  Section => Popup
*/

?>
<div class="close">
	<?php echo file_get_contents($GLOBALS['url'].'/assets/close.svg'); ?>
</div>
<h2>Get on the list</h2>
<h3>Be the first to know when tickets go on sale.</h3>

<form id="popup-form">
	<input class="popup" id="pfname" name="jub17_firstname" type="text" placeholder="First name">
	<input class="popup" id="plname" name="jub17_lastname" type="text" placeholder="Last name">
	<input class="popup" id="pemail" name="jub17_email" type="email" placeholder="Email">
	<input class="popup" id="ptel" name="jub17_tel" type="tel" placeholder="Phone Number">
	<input id="psubmit" type="submit" value="submit">
</form>

<div id="response-popup"></div>

<div class="jubilee-logo">
	<?php echo file_get_contents($GLOBALS['url'].'/assets/jubilee-logo.svg'); ?>
</div>


