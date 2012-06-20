/*!
 * selectivizr v1.0.3b - (c) Keith Clark, freely distributable under the terms of the MIT license.
 * selectivizr.com
 */
(function(a){function F(a){return a.replace(q,E).replace(r,function(a,b,c){var d=c.split(",");for(var e=0,f=d.length;e<f;e++){var g=O(d[e])+D;var h=[];d[e]=g.replace(s,function(a,b,c,d,e){if(b){if(h.length>0){i.push({selector:g.substring(0,e),patches:h});h=[]}return b}else{var f=c?H(c):G(d);if(f){h.push(f);return"."+f.className}return a}})}return b+d.join(",")})}function G(a){return!x||x.test(a)?{className:K(a),applyClass:true}:null}function H(b){var d=true;var f=K(b.slice(1));var g=b.substring(0,5)==":not(";var i;var j;if(g){b=b.slice(5,-1)}var k=b.indexOf("(");if(k>-1){b=b.substring(0,k)}if(b.charAt(0)==":"){switch(b.slice(1)){case"root":d=function(a){return g?a!=c:a==c};break;case"target":if(e==8){d=function(b){var c=function(){var a=location.hash;var c=a.slice(1);return g?a==C||b.id!=c:a!=C&&b.id==c};R(a,"hashchange",function(){P(b,f,c())});return c()};break}return false;case"checked":d=function(a){if(w.test(a.type)){R(a,"propertychange",function(){if(event.propertyName=="checked"){P(a,f,a.checked!==g)}})}return a.checked!==g};break;case"disabled":g=!g;case"enabled":d=function(a){if(v.test(a.tagName)){R(a,"propertychange",function(){if(event.propertyName=="$disabled"){P(a,f,a.$disabled===g)}});h.push(a);a.$disabled=a.disabled;return a.disabled===g}return b==":enabled"?g:!g};break;case"focus":i="focus";j="blur";case"hover":if(!i){i="mouseenter";j="mouseleave"}d=function(a){R(a,g?j:i,function(){P(a,f,true)});R(a,g?i:j,function(){P(a,f,false)});return g};break;default:if(!p.test(b)){return false}break}}return{className:f,applyClass:d}}function I(){var a,b,c,d;for(var e=0;e<i.length;e++){b=i[e].selector;c=i[e].patches;d=b.replace(t,C);if(d==C||d.charAt(d.length-1)==D){d+="*"}try{a=g(d)}catch(f){L("Selector '"+b+"' threw exception '"+f+"'")}if(a){for(var h=0,j=a.length;h<j;h++){var k=a[h];var l=k.className;for(var m=0,n=c.length;m<n;m++){var o=c[m];if(!J(k,o)){if(o.applyClass&&(o.applyClass===true||o.applyClass(k)===true)){l=Q(l,o.className,true)}}}k.className=l}}}}function J(a,b){return(new RegExp("(^|\\s)"+b.className+"(\\s|$)")).test(a.className)}function K(a){return l+"-"+(e==6&&k?j++:a.replace(u,function(a){return a.charCodeAt(0)}))}function L(b){if(a.console){a.console.log(b)}}function M(a){return a.replace(B,E)}function N(a){return M(a).replace(A,D)}function O(a){return N(a.replace(y,E).replace(z,E))}function P(a,b,c){var d=a.className;var e=Q(d,b,c);if(e!=d){a.className=e;a.parentNode.className+=C}}function Q(a,b,c){var d=RegExp("(^|\\s)"+b+"(\\s|$)");var e=d.test(a);if(c){return e?a:a+D+b}else{return e?M(a.replace(d,E)):a}}function R(a,b,c){a.attachEvent("on"+b,c)}function S(){if(a.XMLHttpRequest){return new XMLHttpRequest}try{return new ActiveXObject("Microsoft.XMLHTTP")}catch(b){return null}}function T(a){d.open("GET",a,false);d.send();return d.status==200?d.responseText:C}function U(a,b,c){function d(a){return a.substring(0,a.indexOf("//"))}function e(a){return a.substring(0,a.indexOf("/",8))}if(!b){b=Z}if(a.substring(0,2)=="//"){a=d(b)+a}if(/^https?:\/\//i.test(a)){return!c&&e(b)!=e(a)?null:a}if(a.charAt(0)=="/"){return e(b)+a}var f=b.split(/[?#]/)[0];if(a.charAt(0)!="?"&&f.charAt(f.length-1)!="/"){f=f.substring(0,f.lastIndexOf("/")+1)}return f+a}function V(a){if(a){return T(a).replace(m,C).replace(n,function(b,c,d,e,f,g){var h=V(U(d||f,a));return g?"@media "+g+" {"+h+"}":h}).replace(o,function(b,c,d,e){d=d||C;return c?b:" url("+d+U(e,a,true)+d+") "})}return C}function W(){var a,c;for(var d=0;d<b.styleSheets.length;d++){c=b.styleSheets[d];if(c.href!=C){a=U(c.href);if(a){c.cssText=c["rawCssText"]=F(V(a))}}}}function X(){I();if(h.length>0){setInterval(function(){for(var a=0,b=h.length;a<b;a++){var c=h[a];if(c.disabled!==c.$disabled){if(c.disabled){c.disabled=false;c.$disabled=true;c.disabled=true}else{c.$disabled=c.disabled}}}},250)}}function $(a,d){var e=false,f=true,g=function(c){if(c.type=="readystatechange"&&b.readyState!="complete")return;(c.type=="load"?a:b).detachEvent("on"+c.type,g,false);if(!e&&(e=true))d.call(a,c.type||c)},h=function(){try{c.doScroll("left")}catch(a){setTimeout(h,50);return}g("poll")};if(b.readyState=="complete")d.call(a,C);else{if(b.createEventObject&&c.doScroll){try{f=!a.frameElement}catch(i){}if(f)h()}R(b,"readystatechange",g);R(a,"load",g)}}if(true)return;var b=document;var c=b.documentElement;var d=S();var e=/MSIE (\d+)/.exec(navigator.userAgent)[1];if(b.compatMode!="CSS1Compat"||e<6||e>8||!d){return}var f={NW:"*.Dom.select",MooTools:"$$",DOMAssistant:"*.$",Prototype:"$$",YAHOO:"*.util.Selector.query",Sizzle:"*",jQuery:"*",dojo:"*.query"};var g;var h=[];var i=[];var j=0;var k=true;var l="slvzr";var m=/(\/\*[^*]*\*+([^\/][^*]*\*+)*\/)\s*?/g;var n=/@import\s*(?:(?:(?:url\(\s*(['"]?)(.*)\1)\s*\))|(?:(['"])(.*)\3))\s*([^;]*);/g;var o=/(behavior\s*?:\s*)?\burl\(\s*(["']?)(?!data:)([^"')]+)\2\s*\)/g;var p=/^:(empty|(first|last|only|nth(-last)?)-(child|of-type))$/;var q=/:(:first-(?:line|letter))/g;var r=/((?:^|(?:\s*})+)(?:\s*@media[^{]+{)?)\s*([^\{]*?[\[:][^{]+)/g;var s=/([ +~>])|(:[a-z-]+(?:\(.*?\)+)?)|(\[.*?\])/g;var t=/(:not\()?:(hover|enabled|disabled|focus|checked|target|active|visited|first-line|first-letter)\)?/g;var u=/[^\w-]/g;var v=/^(INPUT|SELECT|TEXTAREA|BUTTON)$/;var w=/^(checkbox|radio)$/;var x=e>6?/[\$\^*]=(['"])\1/:null;var y=/([(\[+~])\s+/g;var z=/\s+([)\]+~])/g;var A=/\s+/g;var B=/^\s*((?:[\S\s]*\S)?)\s*$/;var C="";var D=" ";var E="$1";var Y=b.getElementsByTagName("BASE");var Z=Y.length>0?Y[0].href:b.location.href;W();$(a,function(){for(var b in f){var c,d,e=a;if(a[b]){c=f[b].replace("*",b).split(".");while((d=c.shift())&&(e=e[d])){}if(typeof e=="function"){g=e;X();return}}}});})(this)