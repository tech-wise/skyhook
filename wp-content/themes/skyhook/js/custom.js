$(document).ready(function(){
    
    
    //For FAQ Show Hide
	$('.panel-collapse').on('show.bs.collapse', function () {
	    $(this).siblings('.panel-heading').addClass('active');
	});

	$('.panel-collapse').on('hide.bs.collapse', function () {
	    $(this).siblings('.panel-heading').removeClass('active');
	});
	$('#accordion , #accordion-1 , #accordion-2 , #accordion-3 ').on('show.bs.collapse', function () {
	    $('#accordion .in , #accordion-1 .in , #accordion-2 .in , #accordion-3 .in').collapse('hide');
	});

	// Tabs active code
	$('.nav-tabs .tabs li ').click(function(){
		$('.nav-tabs .tabs li ').removeClass('active');
		$(this).addClass('active');
	});

	$('.covid .text img ').click(function(){
		$('.covid').hide();
	});
	
	
    // $('.pricing-table .card-div').mouseenter(function() {
    //     $('.pricing-table .card-div').removeClass('active');
    //     $(this).addClass('active');
    // });
    // $('.pricing-table .card-div').mouseleave(function() {
    //     $('.pricing-table .card-div').removeClass('active');
    //     $('.premium').addClass('active');
    // });
    

    $('.price-tab ul li').click(function() {
        $('.price-tab ul li').removeClass('active');
        $(this).addClass('active');
    });


    
    // Input range code
    
   
    


$('.panel-collapse').on('hide.bs.collapse', function () {
	    $(this).siblings('.panel-heading').removeClass('active');
});

$(".price-gbp-tab").click(function(){
    var id = $(this).attr('id');
    // price jquer
    $( ".premium-price.active" ).removeClass('active');
    $( ".business-price.active" ).removeClass('active');
    $('#slider-'+id).addClass('active');
    $('#subheading-'+id).addClass('active');
    $('#price-'+id).addClass('active');
    
    
    //   emply jquery
    $( ".business-employ.active" ).removeClass('active');

     $('#employ-value-'+id).addClass('active');
     $('#employ-prise-subheading-'+id).addClass('active');
});

});
