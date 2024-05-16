Flatsome.behavior('ux-countdown', {
    attach: function (context) {
       jQuery('[data-countdown]', context).each(function () {
        var $this = jQuery(this), finalDate = jQuery(this).data('countdown');
   
        var t_hour = jQuery(this).data('text-hour'),
        t_min = jQuery(this).data('text-min'),
        t_week = jQuery(this).data('text-week'),
        t_day = jQuery(this).data('text-day'),
        t_sec = jQuery(this).data('text-sec'),
        t_min_p = jQuery(this).data('text-min-p'),
        t_hour_p = jQuery(this).data('text-hour-p'),
        t_week_p = jQuery(this).data('text-week-p'),
        t_day_p = jQuery(this).data('text-day-p'),
        t_sec_p = jQuery(this).data('text-sec-p'),
        t_plural = jQuery(this).data('text-plural');
   
        var hours_plural = t_hour+t_plural;
        var days_plural = t_day+t_plural;
        var weeks_plural = t_week+t_plural;
        var min_plural = t_min;
        var sec_plural = t_sec;
   
        if(t_hour_p) hours_plural = t_hour_p;
        if(t_min_p) min_plural = t_min_p;
        if(t_week_p) weeks_plural = t_week_p;
        if(t_day_p) days_plural = t_day_p;
        if(t_sec_p) sec_plural = t_sec_p;
   
            $this.countdown(finalDate).on('update.countdown', function (event) {
                 var format = '<span>%-H<strong>%!H:'+t_hour+','+hours_plural+';</strong></span><span>%-M<strong>%!M:'+t_min+','+min_plural+';</strong></span><span>%-S<strong>%!S:'+t_sec+','+sec_plural+';</strong></span>';
   
             if(event.offset.days > 0) { format = '<span>%-d<strong>%!d:'+t_day+','+days_plural+';</strong></span>' + format; }
             if(event.offset.weeks > 0) { format = '<span>%-w<strong>%!w:'+t_week+','+weeks_plural+';</strong></span>' + format; }
   
                 jQuery(this).html(event.strftime(format));
   
            }).on('finish.countdown', function (event) {
           var format = '<span>%-H<strong>%!H:'+t_hour+','+hours_plural+';</strong></span><span>%-M<strong>%!M:'+t_min+','+min_plural+';</strong></span><span>%-S<strong>%!S:'+t_sec+','+sec_plural+';</strong></span>';
           jQuery(this).html(event.strftime(format));
            });
       });
    }
   });
   var flatsomeVars = {
    "theme": {
        "version": "3.18.7"
    },
    "ajaxurl": "https:\/\/euro.gmkb.live\/wp-admin\/admin-ajax.php",
    "rtl": "",
    "sticky_height": "70",
    "stickyHeaderHeight": "0",
    "scrollPaddingTop": "0",
    "assets_url": "https:\/\/euro.gmkb.live\/wp-content\/themes\/flatsome\/assets\/",
    "lightbox": {
        "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
        "close_btn_inside": false
    },
    "user": {
        "can_edit_pages": false
    },
    "i18n": {
        "mainMenu": "Menu ch\u00ednh",
        "toggleButton": "Chuy\u1ec3n \u0111\u1ed5i"
    },
    "options": {
        "cookie_notice_version": "1",
        "swatches_layout": false,
        "swatches_disable_deselect": false,
        "swatches_box_select_event": false,
        "swatches_box_behavior_selected": false,
        "swatches_box_update_urls": "1",
        "swatches_box_reset": false,
        "swatches_box_reset_limited": false,
        "swatches_box_reset_extent": false,
        "swatches_box_reset_time": 300,
        "search_result_latency": "0"
    }
};
/*! This file is auto-generated */
!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery"],e):"object"==typeof module&&module.exports?module.exports=e(require("jquery")):jQuery&&!jQuery.fn.hoverIntent&&e(jQuery)}(function(f){"use strict";function u(e){return"function"==typeof e}var i,r,v={interval:100,sensitivity:6,timeout:0},s=0,a=function(e){i=e.pageX,r=e.pageY},p=function(e,t,n,o){if(Math.sqrt((n.pX-i)*(n.pX-i)+(n.pY-r)*(n.pY-r))<o.sensitivity)return t.off(n.event,a),delete n.timeoutId,n.isActive=!0,e.pageX=i,e.pageY=r,delete n.pX,delete n.pY,o.over.apply(t[0],[e]);n.pX=i,n.pY=r,n.timeoutId=setTimeout(function(){p(e,t,n,o)},o.interval)};f.fn.hoverIntent=function(e,t,n){function o(e){var u=f.extend({},e),r=f(this),v=((t=r.data("hoverIntent"))||r.data("hoverIntent",t={}),t[i]),t=(v||(t[i]=v={id:i}),v.timeoutId&&(v.timeoutId=clearTimeout(v.timeoutId)),v.event="mousemove.hoverIntent.hoverIntent"+i);"mouseenter"===e.type?v.isActive||(v.pX=u.pageX,v.pY=u.pageY,r.off(t,a).on(t,a),v.timeoutId=setTimeout(function(){p(u,r,v,d)},d.interval)):v.isActive&&(r.off(t,a),v.timeoutId=setTimeout(function(){var e,t,n,o,i;e=u,t=r,n=v,o=d.out,(i=t.data("hoverIntent"))&&delete i[n.id],o.apply(t[0],[e])},d.timeout))}var i=s++,d=f.extend({},v);f.isPlainObject(e)?(d=f.extend(d,e),u(d.out)||(d.out=d.over)):d=u(t)?f.extend(d,{over:e,out:t,selector:n}):f.extend(d,{over:e,out:e,selector:t});return this.on({"mouseenter.hoverIntent":o,"mouseleave.hoverIntent":o},d.selector)}});