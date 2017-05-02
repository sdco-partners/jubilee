/**
*
* A is for Airplane
*
*/

$j = jQuery.noConflict();

$j(document).ready(function(){

  $j("#toggle-popup").on('click', function(){
  	console.log('toggle popup');
  	$j('#popup').css({'opacity': '1', 'z-index': '50'});
  });

  $j(".close").on('click', function(){
  	$j('#popup').css({'opacity': '0', 'z-index': '-1'});
  });

  $j('#fsubmit').on('click', function(e){
  	e.preventDefault();
    var data = $j('#main-form').serialize();
    emmaAJAX(data, "#response");
  });

  $j('#psubmit').on('click', function(e){
  	e.preventDefault();
    var data = $j('#popup-form').serialize();
    emmaAJAX(data, "#response-popup");
  });

});