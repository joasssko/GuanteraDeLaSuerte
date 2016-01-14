jQuery(function(){
    jQuery('.topbar').data('size','big');
});

jQuery(window).scroll(function(){
    if(jQuery(document).scrollTop() > 300)
    {
        if(jQuery('.topbar').data('size') == 'big')
        {
            jQuery('.topbar').data('size','small');
			jQuery('.topbar').addClass('smalled');
            
        }
    }
    else
    {
        if(jQuery('.topbar').data('size') == 'small')
        {
            jQuery('.topbar').data('size','big');
			jQuery('.topbar').removeClass('smalled');
            
        }  
    }
});

function basicPopup(url) {
	popupWindow = window.open(url,'popUpWindow','height=500,width=650,left=300,top=300,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');
}

jQuery(document).ready(function($) {
	jQuery(".down").click(function() {
		jQuery('html, body').animate({
			scrollTop: jQuery(".down").offset().top
		}, 700 );
	});
});

//cookie
(function (factory) {
	if (typeof define === 'function' && define.amd) {
		define(factory);
	} else if (typeof exports === 'object') {
		module.exports = factory();
	} else {
		var _OldCookies = window.Cookies;
		var api = window.Cookies = factory();
		api.noConflict = function () {
			window.Cookies = _OldCookies;
			return api;
		};
	}
}(function () {
	function extend () {
		var i = 0;
		var result = {};
		for (; i < arguments.length; i++) {
			var attributes = arguments[ i ];
			for (var key in attributes) {
				result[key] = attributes[key];
			}
		}
		return result;
	}

	function init (converter) {
		function api (key, value, attributes) {
			var result;

			// Write

			if (arguments.length > 1) {
				attributes = extend({
					path: '/'
				}, api.defaults, attributes);

				if (typeof attributes.expires === 'number') {
					var expires = new Date();
					expires.setMilliseconds(expires.getMilliseconds() + attributes.expires * 864e+5);
					attributes.expires = expires;
				}

				try {
					result = JSON.stringify(value);
					if (/^[\{\[]/.test(result)) {
						value = result;
					}
				} catch (e) {}

				if (!converter.write) {
					value = encodeURIComponent(String(value))
						.replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent);
				} else {
					value = converter.write(value, key);
				}

				key = encodeURIComponent(String(key));
				key = key.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent);
				key = key.replace(/[\(\)]/g, escape);

				return (document.cookie = [
					key, '=', value,
					attributes.expires && '; expires=' + attributes.expires.toUTCString(), // use expires attribute, max-age is not supported by IE
					attributes.path    && '; path=' + attributes.path,
					attributes.domain  && '; domain=' + attributes.domain,
					attributes.secure ? '; secure' : ''
				].join(''));
			}

			// Read

			if (!key) {
				result = {};
			}

			// To prevent the for loop in the first place assign an empty array
			// in case there are no cookies at all. Also prevents odd result when
			// calling "get()"
			var cookies = document.cookie ? document.cookie.split('; ') : [];
			var rdecode = /(%[0-9A-Z]{2})+/g;
			var i = 0;

			for (; i < cookies.length; i++) {
				var parts = cookies[i].split('=');
				var name = parts[0].replace(rdecode, decodeURIComponent);
				var cookie = parts.slice(1).join('=');

				if (cookie.charAt(0) === '"') {
					cookie = cookie.slice(1, -1);
				}

				try {
					cookie = converter.read ?
						converter.read(cookie, name) : converter(cookie, name) ||
						cookie.replace(rdecode, decodeURIComponent);

					if (this.json) {
						try {
							cookie = JSON.parse(cookie);
						} catch (e) {}
					}

					if (key === name) {
						result = cookie;
						break;
					}

					if (!key) {
						result[name] = cookie;
					}
				} catch (e) {}
			}

			return result;
		}

		api.get = api.set = api;
		api.getJSON = function () {
			return api.apply({
				json: true
			}, [].slice.call(arguments));
		};
		api.defaults = {};

		api.remove = function (key, attributes) {
			api(key, '', extend(attributes, {
				expires: -1
			}));
		};

		api.withConverter = init;

		return api;
	}

	return init(function () {});
}));

//rut
(function($){jQuery.fn.Rut=function(options){var defaults={digito_verificador:null,on_error:function(){},on_success:function(){},validation:true,format:true,format_on:'change'};var opts=$.extend(defaults,options);return this.each(function(){if(defaults.format){jQuery(this).bind(defaults.format_on,function(){jQuery(this).val(jQuery.Rut.formatear(jQuery(this).val(),defaults.digito_verificador==null));});}if(defaults.validation){if(defaults.digito_verificador==null){jQuery(this).bind('blur',function(){var rut=jQuery(this).val();if(jQuery(this).val()!=""&&!jQuery.Rut.validar(rut)){defaults.on_error();}else if(jQuery(this).val()!=""){defaults.on_success();}});}else
{var id=jQuery(this).attr("id");jQuery(defaults.digito_verificador).bind('blur',function(){var rut=jQuery("#"+id).val()+"-"+jQuery(this).val();if(jQuery(this).val()!=""&&!jQuery.Rut.validar(rut)){defaults.on_error();}else if(jQuery(this).val()!=""){defaults.on_success();}});}}});}})(jQuery);jQuery.Rut={formatear:function(Rut,digitoVerificador){var sRut=new String(Rut);var sRutFormateado='';sRut=jQuery.Rut.quitarFormato(sRut);if(digitoVerificador){var sDV=sRut.charAt(sRut.length-1);sRut=sRut.substring(0,sRut.length-1);}while(sRut.length>3){sRutFormateado="."+sRut.substr(sRut.length-3)+sRutFormateado;sRut=sRut.substring(0,sRut.length-3);}sRutFormateado=sRut+sRutFormateado;if(sRutFormateado!=""&&digitoVerificador){sRutFormateado+="-"+sDV;}else if(digitoVerificador){sRutFormateado+=sDV;}return sRutFormateado;},quitarFormato:function(rut){var strRut=new String(rut);while(strRut.indexOf(".")!=-1){strRut=strRut.replace(".","");}while(strRut.indexOf("-")!=-1){strRut=strRut.replace("-","");}return strRut;},digitoValido:function(dv){if(dv!='0'&&dv!='1'&&dv!='2'&&dv!='3'&&dv!='4'&&dv!='5'&&dv!='6'&&dv!='7'&&dv!='8'&&dv!='9'&&dv!='k'&&dv!='K'){return false;}return true;},digitoCorrecto:function(crut){largo=crut.length;if(largo<2){return false;}if(largo>2){rut=crut.substring(0,largo-1);}else
{rut=crut.charAt(0);}dv=crut.charAt(largo-1);jQuery.Rut.digitoValido(dv);if(rut==null||dv==null){return 0;}dvr=jQuery.Rut.getDigito(rut);if(dvr!=dv.toLowerCase()){return false;}return true;},getDigito:function(rut){var dvr='0';suma=0;mul=2;for(i=rut.length-1;i>=0;i--){suma=suma+rut.charAt(i)*mul;if(mul==7){mul=2;}else
{mul++;}}res=suma%11;if(res==1){return'k';}else if(res==0){return'0';}else
{return 11-res;}},validar:function(texto){texto=jQuery.Rut.quitarFormato(texto);largo=texto.length;if(largo<2){return false;}for(i=0;i<largo;i++){if(!jQuery.Rut.digitoValido(texto.charAt(i))){return false;}}var invertido="";for(i=(largo-1),j=0;i>=0;i--,j++){invertido=invertido+texto.charAt(i);}var dtexto="";dtexto=dtexto+invertido.charAt(0);dtexto=dtexto+'-';cnt=0;for(i=1,j=2;i<largo;i++,j++){if(cnt==3){dtexto=dtexto+'.';j++;dtexto=dtexto+invertido.charAt(i);cnt=1;}else
{dtexto=dtexto+invertido.charAt(i);cnt++;}}invertido="";for(i=(dtexto.length-1),j=0;i>=0;i--,j++){invertido=invertido+dtexto.charAt(i);}if(jQuery.Rut.digitoCorrecto(texto)){return true;}return false;}};

//scrollto
;(function(l){'use strict';l(['jquery'],function($){var k=$.scrollTo=function(a,b,c){return $(window).scrollTo(a,b,c)};k.defaults={axis:'xy',duration:0,limit:true};function isWin(a){return!a.nodeName||$.inArray(a.nodeName.toLowerCase(),['iframe','#document','html','body'])!==-1}$.fn.scrollTo=function(f,g,h){if(typeof g==='object'){h=g;g=0}if(typeof h==='function'){h={onAfter:h}}if(f==='max'){f=9e9}h=$.extend({},k.defaults,h);g=g||h.duration;var j=h.queue&&h.axis.length>1;if(j){g/=2}h.offset=both(h.offset);h.over=both(h.over);return this.each(function(){if(f===null)return;var d=isWin(this),elem=d?this.contentWindow||window:this,$elem=$(elem),targ=f,attr={},toff;switch(typeof targ){case'number':case'string':if(/^([+-]=?)?\d+(\.\d+)?(px|%)?$/.test(targ)){targ=both(targ);break}targ=d?$(targ):$(targ,elem);if(!targ.length)return;case'object':if(targ.is||targ.style){toff=(targ=$(targ)).offset()}}var e=$.isFunction(h.offset)&&h.offset(elem,targ)||h.offset;$.each(h.axis.split(''),function(i,a){var b=a==='x'?'Left':'Top',pos=b.toLowerCase(),key='scroll'+b,prev=$elem[key](),max=k.max(elem,a);if(toff){attr[key]=toff[pos]+(d?0:prev-$elem.offset()[pos]);if(h.margin){attr[key]-=parseInt(targ.css('margin'+b),10)||0;attr[key]-=parseInt(targ.css('border'+b+'Width'),10)||0}attr[key]+=e[pos]||0;if(h.over[pos]){attr[key]+=targ[a==='x'?'width':'height']()*h.over[pos]}}else{var c=targ[pos];attr[key]=c.slice&&c.slice(-1)==='%'?parseFloat(c)/100*max:c}if(h.limit&&/^\d+$/.test(attr[key])){attr[key]=attr[key]<=0?0:Math.min(attr[key],max)}if(!i&&h.axis.length>1){if(prev===attr[key]){attr={}}else if(j){animate(h.onAfterFirst);attr={}}}});animate(h.onAfter);function animate(a){var b=$.extend({},h,{queue:true,duration:g,complete:a&&function(){a.call(elem,targ,h)}});$elem.animate(attr,b)}})};k.max=function(a,b){var c=b==='x'?'Width':'Height',scroll='scroll'+c;if(!isWin(a))return a[scroll]-$(a)[c.toLowerCase()]();var d='client'+c,doc=a.ownerDocument||a.document,html=doc.documentElement,body=doc.body;return Math.max(html[scroll],body[scroll])-Math.min(html[d],body[d])};function both(a){return $.isFunction(a)||$.isPlainObject(a)?a:{top:a,left:a}}$.Tween.propHooks.scrollLeft=$.Tween.propHooks.scrollTop={get:function(t){return $(t.elem)[t.prop]()},set:function(t){var a=this.get(t);if(t.options.interrupt&&t._last&&t._last!==a){return $(t.elem).stop()}var b=Math.round(t.now);if(a!==b){$(t.elem)[t.prop](b);t._last=this.get(t)}}};return k})}(typeof define==='function'&&define.amd?define:function(a,b){'use strict';if(typeof module!=='undefined'&&module.exports){module.exports=b(require('jquery'))}else{b(jQuery)}}));