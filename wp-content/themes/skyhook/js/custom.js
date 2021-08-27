$(document).ready(function(){

	// Tabs active code
	$('.nav-tabs .tabs li ').click(function(){
		$('.nav-tabs .tabs li ').removeClass('active');
		$(this).addClass('active');
	});

	$('.covid .text img ').click(function(){
		$('.covid').hide();
	});
});