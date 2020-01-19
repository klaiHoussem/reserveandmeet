$(function() {
	'use strict';

	$(window).scroll(function(){
		if ($('.navbar').offset().top > 50){
			$('.fixed-top').addClass('top-nav');
		} else {
			$('.fixed-top').removeClass('top-nav');
		}
	});


}) ;

$('#myModal').modal({
  keyboard: false
});

$('#myModal').modal('toggle');
$('#myModal').modal('show');
$('#myModal').modal('hide');
$('#myModal').modal('handleUpdate');

$('#myModal').on('hidden.bs.modal', function () {
  // do something...
 
});
