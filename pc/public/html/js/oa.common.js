$(function(){
	var height = $('.contentRight').height();
	if(height > 818){
		$('.contentLeftNav').css('height',height+119)
	}
	$('.retrievalsInputNav').mCustomScrollbar({
		axis: "y",
		theme: "dark",
		scrollInertia: 0,
	});
	$('.retrievalsInputNav li').click(function() {
		if($(this).attr('data-type') != 0){
			$(this).parents('.retrievalsInput').find('input').val($(this).text()).attr('data-type', '1')
		}else{
			$(this).parents('.retrievalsInput').find('input').val($(this).text()).attr('data-type', '0')
		}
		$('.retrievalsInputNavBox').hide()
	})
	for (var i = 0; i < $('.retrievalsInputNav li').length; i++) {
		$('.retrievalsInputNav li').eq(i).attr('title',$('.retrievalsInputNav li').eq(i).text())
	}
	
	$('.contentNavList').click(function(){
		if($(this).hasClass('on')){
			$(this).removeClass('on');
		}else{
			$('.contentNavList').removeClass('on');
			$(this).addClass('on');
		}
	})
	
	for (var i = 0; i < $('input').length; i++) {
		if($('input').eq(i).attr('autocomplete') == undefined){
			$('input').eq(i).attr('autocomplete','off');
		}
	}
	
	$('.headerMore').hover(function(){
		$('.headerHandName').addClass('on')
	})
	$('.headerSet,.headerHandName').mouseleave(function(){
		$('.headerHandName').removeClass('on')
	})
	$('.treeNavContentBoxPartImage').click(function(){
		if($(this).hasClass('on')){
			$(this).removeClass('on').parent().removeClass('on');
		}else{
			$('.treeNavContentBoxPartImage,.treeNavContentBoxPart').removeClass('on');
			$(this).addClass('on').parent().addClass('on');;
		}
	})
	

    $(".formSelectList").mCustomScrollbar({
		axis: "y",
		theme: "dark",
		scrollInertia: 0,
    });
    
    $('.formBtnCancel').click(function(){
        location.reload();
    })
	$('.headerhoner').dotdotdot();
	$('input').placeholder();
	
	//xhxhxh
	$('.inputPlaceholder').placeholder();
	$('.quitApplyMeaasge1').eq(0).find('.rowQuit').eq($('.quitApplyMeaasge1').eq(0).find('.rowQuit').length-1).addClass('margin-bottom-0');
	//xhxhxhEnd

		
	// 表单页 -- select选择框
	$('.staffInfoForm').delegate('.formSelect','click',function(e){
		if($(this).hasClass('on')){
			$(this).parents('.form').find('.formSelectList').hide();
			$(this).removeClass('on');
		}else{
			$('.formSelectList').hide();
			$('.formSelect').removeClass('on'); 
			$(this).parents('.form').find('.formSelectList').show();
			$(this).addClass('on');
		}
		stopBubble(e);
	})

	// 表单页 -- select 选择
	$('.staffInfoForm').delegate('.formSelectList li','click',function(){
		var txt = $(this).text();
		if($(this).hasClass('default')){
			$(this).parents('.form').find('.formSelect').removeClass('on').text(txt).css('color','#aaa');
			$(this).parents('.form').find('input[type="hidden"]').val(txt);
			$(this).parents('.formSelectList').hide();
			return false;
		}
		$(this).parents('.form').find('.formSelect').removeClass('on').text(txt).css('color','#222');
		$(this).parents('.form').find('input[type="hidden"]').val(txt);
		$(this).parents('.formSelectList').hide();
	})

	// 表单页 -- check 选择
	$('.staffInfoForm').delegate('.checkBtn','click',function(){
		if(!$(this).hasClass('on')) {
			$(this).parent().find('.checkBtn').removeClass('on'); 
			$(this).addClass('on');
			$(this).parent().next('.formInput').val($(this).text());
		}
	})
	$('input').placeholder();

	$(".formSelectList").mCustomScrollbar({
		axis: "y",
		theme: "dark",
		scrollInertia: 0,
	});

	$('.formBtnCancel').click(function(){
		location.reload();
	})
})




//删除提示
function tic(a,b,c,d){
var html = $('<div class="popTic"><div class="popTicBox"><div class="popTicTitle">'+a+'<img src="../../public/html/images/close.png" alt="" /></div><div class="popTicContent">'+b+'</div><div class="popTicButtonBox clearfix"><div class="popTicButton popTicButtonL pull-left">'+c+'</div><div class="popTicButton popTicButtonR pull-right"><a>'+d+'</a></div></div></div><div class="popTicMask"></div></div>')
$('body').append(html);
$('input,textarea').placeholder();
}


// 表单提交错误弹框
var t;
function popAlert(txt) {
$('.popAlert').remove();
clearTimeout(t);
var html = '<div class = "popAlert"><img src="../../public/html/images/popAlertIcon.png" alt="" class = "popAlertIcon" /><p class = "popAlertText">'+txt+'</p></div>';
$('body').append(html);
$('.popAlert').show(); 
t = setTimeout(function(){
	$('.popAlert').hide(); 
},2000);
}

function stopBubble(e) { 
//如果提供了事件对象，则这是一个非IE浏览器 
if ( e && e.stopPropagation ){ 
	//因此它支持W3C的stopPropagation()方法 
	e.stopPropagation(); 
}else{ 
	//否则，我们需要使用IE的方式来取消事件冒泡 
	window.event.cancelBubble = true; 
}
}
//错误提示end


/*
 *	jQuery dotdotdot 1.8.3
 *
 *	Copyright (c) Fred Heusschen
 *	www.frebsite.nl
 *
 *	Plugin website:
 *	dotdotdot.frebsite.nl
 *
 *	Licensed under the MIT license.
 *	http://en.wikipedia.org/wiki/MIT_License
 */
!function(t,e){function n(t,e,n){var r=t.children(),o=!1;t.empty();for(var i=0,d=r.length;d>i;i++){var l=r.eq(i);if(t.append(l),n&&t.append(n),a(t,e)){l.remove(),o=!0;break}n&&n.detach()}return o}function r(e,n,i,d,l){var s=!1,c="a, table, thead, tbody, tfoot, tr, col, colgroup, object, embed, param, ol, ul, dl, blockquote, select, optgroup, option, textarea, script, style",u="script, .dotdotdot-keep";return e.contents().detach().each(function(){var h=this,f=t(h);if("undefined"==typeof h)return!0;if(f.is(u))e.append(f);else{if(s)return!0;e.append(f),!l||f.is(d.after)||f.find(d.after).length||e[e.is(c)?"after":"append"](l),a(i,d)&&(s=3==h.nodeType?o(f,n,i,d,l):r(f,n,i,d,l)),s||l&&l.detach()}}),n.addClass("is-truncated"),s}function o(e,n,r,o,d){var c=e[0];if(!c)return!1;var h=s(c),f=-1!==h.indexOf(" ")?" ":"　",p="letter"==o.wrap?"":f,g=h.split(p),v=-1,w=-1,b=0,m=g.length-1;for(o.fallbackToLetter&&0==b&&0==m&&(p="",g=h.split(p),m=g.length-1);m>=b&&(0!=b||0!=m);){var y=Math.floor((b+m)/2);if(y==w)break;w=y,l(c,g.slice(0,w+1).join(p)+o.ellipsis),r.children().each(function(){t(this).toggle().toggle()}),a(r,o)?(m=w,o.fallbackToLetter&&0==b&&0==m&&(p="",g=g[0].split(p),v=-1,w=-1,b=0,m=g.length-1)):(v=w,b=w)}if(-1==v||1==g.length&&0==g[0].length){var x=e.parent();e.detach();var C=d&&d.closest(x).length?d.length:0;if(x.contents().length>C?c=u(x.contents().eq(-1-C),n):(c=u(x,n,!0),C||x.detach()),c&&(h=i(s(c),o),l(c,h),C&&d)){var T=d.parent();t(c).parent().append(d),t.trim(T.html())||T.remove()}}else h=i(g.slice(0,v+1).join(p),o),l(c,h);return!0}function a(t,e){return t.innerHeight()>e.maxHeight}function i(e,n){for(;t.inArray(e.slice(-1),n.lastCharacter.remove)>-1;)e=e.slice(0,-1);return t.inArray(e.slice(-1),n.lastCharacter.noEllipsis)<0&&(e+=n.ellipsis),e}function d(t){return{width:t.innerWidth(),height:t.innerHeight()}}function l(t,e){t.innerText?t.innerText=e:t.nodeValue?t.nodeValue=e:t.textContent&&(t.textContent=e)}function s(t){return t.innerText?t.innerText:t.nodeValue?t.nodeValue:t.textContent?t.textContent:""}function c(t){do t=t.previousSibling;while(t&&1!==t.nodeType&&3!==t.nodeType);return t}function u(e,n,r){var o,a=e&&e[0];if(a){if(!r){if(3===a.nodeType)return a;if(t.trim(e.text()))return u(e.contents().last(),n)}for(o=c(a);!o;){if(e=e.parent(),e.is(n)||!e.length)return!1;o=c(e[0])}if(o)return u(t(o),n)}return!1}function h(e,n){return e?"string"==typeof e?(e=t(e,n),e.length?e:!1):e.jquery?e:!1:!1}function f(t){for(var e=t.innerHeight(),n=["paddingTop","paddingBottom"],r=0,o=n.length;o>r;r++){var a=parseInt(t.css(n[r]),10);isNaN(a)&&(a=0),e-=a}return e}if(!t.fn.dotdotdot){t.fn.dotdotdot=function(e){if(0==this.length)return t.fn.dotdotdot.debug('No element found for "'+this.selector+'".'),this;if(this.length>1)return this.each(function(){t(this).dotdotdot(e)});var o=this,i=o.contents();o.data("dotdotdot")&&o.trigger("destroy.dot"),o.data("dotdotdot-style",o.attr("style")||""),o.css("word-wrap","break-word"),"nowrap"===o.css("white-space")&&o.css("white-space","normal"),o.bind_events=function(){return o.bind("update.dot",function(e,d){switch(o.removeClass("is-truncated"),e.preventDefault(),e.stopPropagation(),typeof l.height){case"number":l.maxHeight=l.height;break;case"function":l.maxHeight=l.height.call(o[0]);break;default:l.maxHeight=f(o)}l.maxHeight+=l.tolerance,"undefined"!=typeof d&&(("string"==typeof d||"nodeType"in d&&1===d.nodeType)&&(d=t("<div />").append(d).contents()),d instanceof t&&(i=d)),g=o.wrapInner('<div class="dotdotdot" />').children(),g.contents().detach().end().append(i.clone(!0)).find("br").replaceWith("  <br />  ").end().css({height:"auto",width:"auto",border:"none",padding:0,margin:0});var c=!1,u=!1;return s.afterElement&&(c=s.afterElement.clone(!0),c.show(),s.afterElement.detach()),a(g,l)&&(u="children"==l.wrap?n(g,l,c):r(g,o,g,l,c)),g.replaceWith(g.contents()),g=null,t.isFunction(l.callback)&&l.callback.call(o[0],u,i),s.isTruncated=u,u}).bind("isTruncated.dot",function(t,e){return t.preventDefault(),t.stopPropagation(),"function"==typeof e&&e.call(o[0],s.isTruncated),s.isTruncated}).bind("originalContent.dot",function(t,e){return t.preventDefault(),t.stopPropagation(),"function"==typeof e&&e.call(o[0],i),i}).bind("destroy.dot",function(t){t.preventDefault(),t.stopPropagation(),o.unwatch().unbind_events().contents().detach().end().append(i).attr("style",o.data("dotdotdot-style")||"").removeClass("is-truncated").data("dotdotdot",!1)}),o},o.unbind_events=function(){return o.unbind(".dot"),o},o.watch=function(){if(o.unwatch(),"window"==l.watch){var e=t(window),n=e.width(),r=e.height();e.bind("resize.dot"+s.dotId,function(){n==e.width()&&r==e.height()&&l.windowResizeFix||(n=e.width(),r=e.height(),u&&clearInterval(u),u=setTimeout(function(){o.trigger("update.dot")},100))})}else c=d(o),u=setInterval(function(){if(o.is(":visible")){var t=d(o);c.width==t.width&&c.height==t.height||(o.trigger("update.dot"),c=t)}},500);return o},o.unwatch=function(){return t(window).unbind("resize.dot"+s.dotId),u&&clearInterval(u),o};var l=t.extend(!0,{},t.fn.dotdotdot.defaults,e),s={},c={},u=null,g=null;return l.lastCharacter.remove instanceof Array||(l.lastCharacter.remove=t.fn.dotdotdot.defaultArrays.lastCharacter.remove),l.lastCharacter.noEllipsis instanceof Array||(l.lastCharacter.noEllipsis=t.fn.dotdotdot.defaultArrays.lastCharacter.noEllipsis),s.afterElement=h(l.after,o),s.isTruncated=!1,s.dotId=p++,o.data("dotdotdot",!0).bind_events().trigger("update.dot"),l.watch&&o.watch(),o},t.fn.dotdotdot.defaults={ellipsis:"... ",wrap:"word",fallbackToLetter:!0,lastCharacter:{},tolerance:0,callback:null,after:null,height:null,watch:!1,windowResizeFix:!0},t.fn.dotdotdot.defaultArrays={lastCharacter:{remove:[" ","　",",",";",".","!","?"],noEllipsis:[]}},t.fn.dotdotdot.debug=function(t){};var p=1,g=t.fn.html;t.fn.html=function(n){return n!=e&&!t.isFunction(n)&&this.data("dotdotdot")?this.trigger("update",[n]):g.apply(this,arguments)};var v=t.fn.text;t.fn.text=function(n){return n!=e&&!t.isFunction(n)&&this.data("dotdotdot")?(n=t("<div />").text(n).html(),this.trigger("update",[n])):v.apply(this,arguments)}}}(jQuery),jQuery(document).ready(function(t){t(".dot-ellipsis").each(function(){var e=t(this).hasClass("dot-resize-update"),n=t(this).hasClass("dot-timer-update"),r=0,o=t(this).attr("class").split(/\s+/);t.each(o,function(t,e){var n=e.match(/^dot-height-(\d+)$/);null!==n&&(r=Number(n[1]))});var a=new Object;n&&(a.watch=!0),e&&(a.watch="window"),r>0&&(a.height=r),t(this).dotdotdot(a)})}),jQuery(window).on("load",function(){jQuery(".dot-ellipsis.dot-load-update").trigger("update.dot")});