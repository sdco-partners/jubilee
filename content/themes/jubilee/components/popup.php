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

<form>
	<input class="popup" id="pfname" name="firstname" type="text" placeholder="First name">
	<input class="popup" id="plname" name="firstname" type="text" placeholder="Last name">
	<input class="popup" id="pemail" type="email" placeholder="Email">
	<input class="popup" id="ptel" type="number" placeholder="Telephone">
	<input id="psubmit" type="submit" value="submit">
</form>

<div class="jubilee-logo">
	<?php echo file_get_contents($GLOBALS['url'].'/assets/jubilee-logo.svg'); ?>
</div>

