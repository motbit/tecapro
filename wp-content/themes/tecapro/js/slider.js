(function(g,j,c,f,e,k,i){/*! Jssor */
new(function(){});var d={ed:function(a){return-c.cos(a*c.PI)/2+.5},l:function(a){return a},Ye:function(a){return-a*(a-2)},n:function(a){return a*a*a},Wc:function(a){return(a-=1)*a*a+1}};var b=new function(){var h=this,zb=/\S+/g,H=1,bb=2,eb=3,db=4,hb=5,I,s=0,l=0,t=0,Z=0,B=0,K=navigator,mb=K.appName,o=K.userAgent,p=parseFloat;function Ib(){if(!I){I={jf:"ontouchstart"in g||"createTouch"in j};var a;if(K.pointerEnabled||(a=K.msPointerEnabled))I.Rd=a?"msTouchAction":"touchAction"}return I}function w(h){if(!s){s=-1;if(mb=="Microsoft Internet Explorer"&&!!g.attachEvent&&!!g.ActiveXObject){var e=o.indexOf("MSIE");s=H;t=p(o.substring(e+5,o.indexOf(";",e)));/*@cc_on Z=@_jscript_version@*/;l=j.documentMode||t}else if(mb=="Netscape"&&!!g.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),f=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){s=bb;l=p(o.substring(d+8))}else if(b>=0){var i=o.substring(0,b).lastIndexOf("/");s=f>=0?db:eb;l=p(o.substring(i+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){s=H;l=t=p(a[1])}}if(c>=0)B=p(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){s=hb;l=p(a[2])}}}return h==s}function q(){return w(H)}function xb(){return q()&&(l<6||j.compatMode=="BackCompat")}function cb(){return w(eb)}function gb(){return w(hb)}function tb(){return cb()&&B>534&&B<535}function L(){w();return B>537||l>42||s==H&&l>=11}function vb(){return q()&&l<9}function ub(a){var b,c;return function(f){if(!b){b=e;var d=a.substr(0,1).toUpperCase()+a.substr(1);n([a].concat(["WebKit","ms","Moz","O","webkit"]),function(g,e){var b=a;if(e)b=g+d;if(f.style[b]!=i)return c=b})}return c}}function sb(b){var a;return function(c){a=a||ub(b)(c)||b;return a}}var M=sb("transform");function lb(a){return{}.toString.call(a)}var ib={};n(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){ib["[object "+a+"]"]=a.toLowerCase()});function n(b,d){var a,c;if(lb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function E(a){return a==f?String(a):ib[lb(a)]||"object"}function jb(a){for(var b in a)return e}function C(a){try{return E(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function v(a,b){return{x:a,y:b}}function pb(b,a){setTimeout(b,a||0)}function J(b,d,c){var a=!b||b=="inherit"?"":b;n(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a=c+(!a.indexOf(" ")?"":" ")+a;return a}function rb(b,a){if(l<9)b.style.filter=a}function Hb(a,b){if(a===i)a=b;return a}h.kf=Ib;h.md=q;h.yf=xb;h.Nf=cb;h.Lf=L;ub("transform");h.Bd=function(){return l};h.Ad=function(){return t||l};h.Kf=function(){w();return B};h.bb=pb;h.Jf=function(a,b){b.call(a);return D({},a)};function W(a){a.constructor===W.caller&&a.ec&&a.ec.apply(a,W.caller.arguments)}h.ec=W;h.Jb=function(a){if(h.If(a))a=j.getElementById(a);return a};function u(a){return a||g.event}h.ud=u;h.Gc=function(b){b=u(b);var a=b.target||b.srcElement||j;if(a.nodeType==3)a=h.Ic(a);return a};h.rd=function(a){a=u(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function x(c,d,a){if(a!==i)c.style[d]=a==i?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&g.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,f);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function Y(b,c,a,d){if(a===i){a=p(x(b,c));isNaN(a)&&(a=f);return a}if(a==f)a="";else d&&(a+="px");x(b,c,a)}function m(c,a){var d=a?Y:x,b;if(a&4)b=sb(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Cb(b){if(q()&&t<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?p(a[1])/100:1}else return p(b.style.opacity||"1")}function Eb(b,a,f){if(q()&&t<9){var h=b.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=c.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=J(h,[i],d);rb(b,g)}else b.style.opacity=a==1?"":c.round(a*100)/100}var N={N:["rotate"],hb:["rotateX"],gb:["rotateY"],Qb:["skewX"],Rb:["skewY"]};if(!L())N=D(N,{J:["scaleX",2],K:["scaleY",2],db:["translateZ",1]});function O(d,a){var c="";if(a){if(q()&&l&&l<10){delete a.hb;delete a.gb;delete a.db}b.j(a,function(d,b){var a=N[b];if(a){var e=a[1]||0;if(P[b]!=d)c+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(L()){if(a.xb||a.yb||a.db!=i)c+=" translate3d("+(a.xb||0)+"px,"+(a.yb||0)+"px,"+(a.db||0)+"px)";if(a.J==i)a.J=1;if(a.K==i)a.K=1;if(a.J!=1||a.K!=1)c+=" scale3d("+a.J+", "+a.K+", 1)"}}d.style[M(d)]=c}h.Ef=m("transformOrigin",4);h.uf=m("backfaceVisibility",4);h.nf=m("transformStyle",4);h.of=m("perspective",6);h.mf=m("perspectiveOrigin",4);h.pf=function(a,b){if(q()&&t<9||t<10&&xb())a.style.zoom=b==1?"":b;else{var c=M(a),f="scale("+b+")",e=a.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=J(e,[g],f);a.style[c]=d}};h.i=function(a,d,b,c){a=h.Jb(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};h.U=function(a,c,d,b){a=h.Jb(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};h.Ub=function(a){a=u(a);a.preventDefault&&a.preventDefault();a.cancel=e;a.returnValue=k};h.rf=function(a){a=u(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=e};h.ab=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};h.sf=function(a,b){if(b==i)return a.textContent||a.innerText;var c=j.createTextNode(b);h.wc(a);a.appendChild(c)};h.Xb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function kb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(U(a,b)==c)return a;if(!e){var d=kb(a,c,e,b);if(d)return d}}}h.Cb=kb;function T(a,d,g,b){b=b||"u";var c=[];for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){U(a,b)==d&&c.push(a);if(!g){var e=T(a,d,g,b);if(e.length)c=c.concat(e)}}return c}h.wf=T;function fb(a,c,d){for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=fb(a,c,d);if(b)return b}}}h.xf=fb;h.zf=function(b,a){return b.getElementsByTagName(a)};h.Fb=function(a,f,d){d=d||"u";var e;do{if(a.nodeType==1){var c=b.u(a,d);if(c&&c==Hb(f,c)){e=a;break}}a=b.Ic(a)}while(a&&a!=j.body);return e};function D(){var e=arguments,d,c,b,a,g=1&e[0],f=1+g;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==i){a=c[b];var h=d[b];d[b]=g&&(C(h)||C(a))?D(g,{},h,a):a}}return d}h.I=D;function X(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(C(a)&&C(b)){a=X(a,b);e=!jb(a)}!e&&(d[c]=a)}}return d}h.Mc=function(a){return E(a)=="function"};h.If=function(a){return E(a)=="string"};h.Vc=function(a){return!isNaN(p(a))&&isFinite(a)};h.j=n;h.Ve=C;function R(a){return j.createElement(a)}h.wb=function(){return R("DIV")};h.Sc=function(){};function y(b,c,a){if(a==i)return b.getAttribute(c);b.setAttribute(c,a)}function U(a,b){return y(a,b)||y(a,"data-"+b)}h.Q=y;h.u=U;h.ac=function(d,b,c){var a=h.Yc(y(d,b));if(isNaN(a))a=c;return a};function z(b,a){return y(b,"class",a)||""}function ob(b){var a={};n(b,function(b){if(b!=i)a[b]=b});return a}function qb(b,a){return b.match(a||zb)}function Q(b,a){return ob(qb(b||"",a))}h.Bf=ob;h.Cf=qb;function ab(b,c){var a="";n(c,function(c){a&&(a+=b);a+=c});return a}function F(a,c,b){z(a,ab(" ",D(X(Q(z(a)),Q(c)),Q(b))))}h.Ic=function(a){return a.parentNode};h.X=function(a){h.tb(a,"none")};h.L=function(a,b){h.tb(a,b?"none":"")};h.Df=function(b,a){b.removeAttribute(a)};h.Of=function(){return q()&&l<10};h.Pf=function(d,a){if(a)d.style.clip="rect("+c.round(a.f||a.D||0)+"px "+c.round(a.q)+"px "+c.round(a.s)+"px "+c.round(a.c||a.G||0)+"px)";else if(a!==i){var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=J(g,f,"");b.yc(d,e)}};h.lb=function(){return+new Date};h.M=function(b,a){b.appendChild(a)};h.Db=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};h.Ec=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};h.Ff=function(a,b){n(a,function(a){h.Ec(a,b)})};h.wc=function(a){h.Ff(h.Xb(a,e),a)};h.ad=function(a,b){var c=h.Ic(a);b&1&&h.R(a,(h.z(c)-h.z(a))/2);b&2&&h.S(a,(h.A(c)-h.A(a))/2)};var S={f:f,q:f,s:f,c:f,E:f,F:f};h.we=function(a){var b=h.wb();r(b,{Ge:"block",qb:h.T(a),f:0,c:0,E:0,F:0});var d=h.Pc(a,S);h.Db(b,a);h.M(b,a);var e=h.Pc(a,S),c={};n(d,function(b,a){if(b==e[a])c[a]=b});r(b,S);r(b,c);r(a,{f:0,c:0});return c};h.Yc=p;function V(d,c,b){var a=d.cloneNode(!c);!b&&h.Df(a,"id");return a}h.ib=V;h.Gb=function(d,f){var a=new Image;function b(e,d){h.U(a,"load",b);h.U(a,"abort",c);h.U(a,"error",c);f&&f(a,d)}function c(a){b(a,e)}if(gb()&&l<11.6||!d)b(!d);else{h.i(a,"load",b);h.i(a,"abort",c);h.i(a,"error",c);a.src=d}};h.Zd=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}n(d,function(a){h.Gb(a.src,b)});b()};h.Td=function(a,g,i,h){if(h)a=V(a);var c=T(a,g);if(!c.length)c=b.zf(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=V(i);z(e,z(d));b.yc(e,d.style.cssText);b.Db(e,d);b.Ec(d)}return a};function Fb(a){var l=this,p="",r=["av","pv","ds","dn"],d=[],q,k=0,f=0,e=0;function g(){F(a,q,(d[e||f&2||f]||"")+" "+(d[k]||""));b.sb(a,"pointer-events",e?"none":"")}function c(){k=0;g();h.U(j,"mouseup",c);h.U(j,"touchend",c);h.U(j,"touchcancel",c)}function o(a){if(e)h.Ub(a);else{k=4;g();h.i(j,"mouseup",c);h.i(j,"touchend",c);h.i(j,"touchcancel",c)}}l.le=function(a){if(a===i)return f;f=a&2||a&1;g()};l.bc=function(a){if(a===i)return!e;e=a?0:3;g()};l.Z=a=h.Jb(a);y(a,"data-jssor-button","1");var m=b.Cf(z(a));if(m)p=m.shift();n(r,function(a){d.push(p+a)});q=ab(" ",d);d.unshift("");h.i(a,"mousedown",o);h.i(a,"touchstart",o)}h.oc=function(a){return new Fb(a)};h.sb=x;h.Ib=m("overflow");h.S=m("top",2);h.se=m("right",2);h.ne=m("bottom",2);h.R=m("left",2);h.z=m("width",2);h.A=m("height",2);h.Sd=m("marginLeft",2);h.Ud=m("marginTop",2);h.T=m("position");h.tb=m("display");h.P=m("zIndex",1);h.zc=function(b,a,c){if(a!=i)Eb(b,a,c);else return Cb(b)};h.yc=function(a,b){if(b!=i)a.style.cssText=b;else return a.style.cssText};h.me=function(b,a){if(a===i){a=x(b,"backgroundImage")||"";var c=/\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a)||[];return c[1]}x(b,"backgroundImage",a?"url('"+a+"')":"")};var G;h.Xd=G={a:h.zc,f:h.S,q:h.se,s:h.ne,c:h.R,E:h.z,F:h.A,qb:h.T,Ge:h.tb,V:h.P};h.Pc=function(c,b){var a={};n(b,function(d,b){if(G[b])a[b]=G[b](c)});return a};function r(g,l){var e=vb(),b=L(),d=tb(),j=M(g);function k(b,d,a){var e=b.vb(v(-d/2,-a/2)),f=b.vb(v(d/2,-a/2)),g=b.vb(v(d/2,a/2)),h=b.vb(v(-d/2,a/2));b.vb(v(300,300));return v(c.min(e.x,f.x,g.x,h.x)+d/2,c.min(e.y,f.y,g.y,h.y)+a/2)}function a(d,a){a=a||{};var n=a.db||0,p=(a.hb||0)%360,q=(a.gb||0)%360,u=(a.N||0)%360,l=a.J,m=a.K,f=a.Xf;if(l==i)l=1;if(m==i)m=1;if(f==i)f=1;if(e){n=0;p=0;q=0;f=0}var c=new Bb(a.xb,a.yb,n);c.hb(p);c.gb(q);c.je(u);c.ve(a.Qb,a.Rb);c.Bb(l,m,f);if(b){c.Ab(a.G,a.D);d.style[j]=c.oe()}else if(!Z||Z<9){var o="",g={x:0,y:0};if(a.eb)g=k(c,a.eb,a.zb);h.Ud(d,g.y);h.Sd(d,g.x);o=c.fe();var s=d.style.filter,t=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),r=J(s,[t],o);rb(d,r)}}r=function(e,c){c=c||{};var j=c.G,k=c.D,g;n(G,function(a,b){g=c[b];g!==i&&a(e,g)});h.Pf(e,c.g);if(!b){j!=i&&h.R(e,(c.vd||0)+j);k!=i&&h.S(e,(c.yd||0)+k)}if(c.Yd)if(d)pb(h.ab(f,O,e,c));else a(e,c)};h.gc=O;if(d)h.gc=r;if(e)h.gc=a;else if(!b)a=O;h.O=r;r(g,l)}h.gc=r;h.O=r;function Bb(j,k,o){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,j||0,k||0,o||0,1],i=c.sin,h=c.cos,l=c.tan;function g(a){return a*c.PI/180}function n(a,b){return{x:a,y:b}}function m(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return m.apply(f,(a||b).concat(c))}d.Bb=function(a,c,d){if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.Ab=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.hb=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([1,0,0,0,0,d,f,0,0,-f,d,0,0,0,0,1])}};d.gb=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,0,-f,0,0,1,0,0,f,0,d,0,0,0,0,1])}};d.je=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,f,0,0,-f,d,0,0,0,0,1,0,0,0,0,1])}};d.ve=function(a,c){if(a||c){j=g(a);k=g(c);b=e([1,l(k),0,0,l(j),1,0,0,0,0,1,0,0,0,0,1])}};d.vb=function(c){var a=e(b,[1,0,0,0,0,1,0,0,0,0,1,0,c.x,c.y,0,1]);return n(a[12],a[13])};d.oe=function(){return"matrix3d("+b.join(",")+")"};d.fe=function(){return"progid:DXImageTransform.Microsoft.Matrix(M11="+b[0]+", M12="+b[4]+", M21="+b[1]+", M22="+b[5]+", SizingMethod='auto expand')"}}new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.J=function(b,c){return a.nd(b,c,0)};a.K=function(b,c){return a.nd(b,0,c)};a.nd=function(a,c,d){return b(a,[[c,0],[0,d]])};a.vb=function(d,c){var a=b(d,[[c.x],[c.y]]);return v(a[0][0],a[1][0])}};var P={vd:0,yd:0,G:0,D:0,cb:1,J:1,K:1,N:0,hb:0,gb:0,xb:0,yb:0,db:0,Qb:0,Rb:0};h.Jd=function(c,d){var a=c||{};if(c)if(b.Mc(c))a={ob:a};else if(b.Mc(c.g))a.g={ob:c.g};a.ob=a.ob||d;if(a.g)a.g.ob=a.g.ob||d;return a};h.Qc=function(n,j,s,t,B,C,o){var a=j;if(n){a={};for(var h in j){var D=C[h]||1,z=B[h]||[0,1],g=(s-z[0])/z[1];g=c.min(c.max(g,0),1);g=g*D;var x=c.floor(g);if(g!=x)g-=x;var k=t.ob||d.l,m,E=n[h],p=j[h];if(b.Vc(p)){k=t[h]||k;var A=k(g);m=E+p*A}else{m=b.I({hc:{}},n[h]);var y=t[h]||{};b.j(p.hc||p,function(d,a){k=y[a]||y.ob||k;var c=k(g),b=d*c;m.hc[a]=b;m[a]+=b})}a[h]=m}var w=b.j(j,function(b,a){return P[a]!=i});w&&b.j(P,function(c,b){if(a[b]==i&&n[b]!==i)a[b]=n[b]});if(w){if(a.cb)a.J=a.K=a.cb;a.eb=o.eb;a.zb=o.zb;if(q()&&l>=11&&(j.G||j.D)&&s!=0&&s!=1)a.N=a.N||1e-8;a.Yd=e}}if(j.g&&o.Ab){var r=a.g.hc,v=(r.f||0)+(r.s||0),u=(r.c||0)+(r.q||0);a.c=(a.c||0)+u;a.f=(a.f||0)+v;a.g.c-=u;a.g.q-=u;a.g.f-=v;a.g.s-=v}if(a.g&&b.Of()&&!a.g.f&&!a.g.c&&!a.g.D&&!a.g.G&&a.g.q==o.eb&&a.g.s==o.zb)a.g=f;return a}};function o(){var a=this,d=[];function i(a,b){d.push({mc:a,Kc:b})}function h(a,c){b.j(d,function(b,e){b.mc==a&&b.Kc===c&&d.splice(e,1)})}a.Ob=a.addEventListener=i;a.removeEventListener=h;a.o=function(a){var c=[].slice.call(arguments,1);b.j(d,function(b){b.mc==a&&b.Kc.apply(g,c)})}}var l=function(A,E,h,J,M,L){A=A||0;var a=this,p,m,n,s,C=0,G,H,F,D,z=0,i=0,l=0,y,j,d,f,o,x,u=[],w;function O(a){d+=a;f+=a;j+=a;i+=a;l+=a;z+=a}function r(p){var g=p;if(o)if(!x&&(g>=f||g<d)||x&&g>=d)g=((g-d)%o+o)%o+d;if(!y||s||i!=g){var k=c.min(g,f);k=c.max(k,d);if(!y||s||k!=l){if(L){var m=(k-j)/(E||1);if(h.pd)m=1-m;var n=b.Qc(M,L,m,G,F,H,h);if(w)b.j(n,function(b,a){w[a]&&w[a](J,b)});else b.O(J,n)}a.xc(l-j,k-j);var r=l,q=l=k;b.j(u,function(b,c){var a=!y&&x||g<=i?u[u.length-c-1]:b;a.Y(l-z)});i=g;y=e;a.Sb(r,q)}}}function B(a,b,e){b&&a.Tb(f);if(!e){d=c.min(d,a.kd()+z);f=c.max(f,a.pc()+z)}u.push(a)}var v=g.requestAnimationFrame||g.webkitRequestAnimationFrame||g.mozRequestAnimationFrame||g.msRequestAnimationFrame;if(b.Nf()&&b.Bd()<7||!v)v=function(a){b.bb(a,h.fb)};function I(){if(p){var d=b.lb(),e=c.min(d-C,h.Dd),a=i+e*n;C=d;if(a*n>=m*n)a=m;r(a);if(!s&&a*n>=m*n)K(D);else v(I)}}function q(g,h,j){if(!p){p=e;s=j;D=h;g=c.max(g,d);g=c.min(g,f);m=g;n=m<i?-1:1;a.Md();C=b.lb();v(I)}}function K(b){if(p){s=p=D=k;a.Od();b&&b()}}a.Nd=function(a,b,c){q(a?i+a:f,b,c)};a.Pd=q;a.pb=K;a.be=function(a){q(a)};a.nb=function(){return i};a.id=function(){return m};a.Nb=function(){return l};a.Y=r;a.Ab=function(a){r(i+a)};a.Zc=function(){return p};a.qe=function(a){o=a};a.Tb=O;a.cd=function(a,b){B(a,0,b)};a.nc=function(a){B(a,1)};a.kd=function(){return d};a.pc=function(){return f};a.Sb=a.Md=a.Od=a.xc=b.Sc;a.lc=b.lb();h=b.I({fb:16,Dd:50},h);o=h.kc;x=h.ie;w=h.he;d=j=A;f=A+E;H=h.fd||{};F=h.C||{};G=b.Jd(h.k)};var m={cc:"data-scale",Ac:"data-scale-ratio",Lb:"data-autocenter"},n=new function(){var a=this;a.rb=function(c,a,e,d){(d||!b.Q(c,a))&&b.Q(c,a,e)};a.Hc=function(a){var c=b.ac(a,m.Lb);b.ad(a,c)}},q=new function(){var h=this;function g(b,a,c){c.push(a);b[a]=b[a]||[];b[a].push(c)}h.ae=function(d){for(var e=[],a,b=0;b<d.H;b++)for(a=0;a<d.p;a++)g(e,c.ceil(1e5*c.random())%13,[b,a]);return e}},t=function(m,s,p,u,z,A){var g=this,v,h,a,y=0,x=u.ke,r,i=8;function t(a){if(a.f)a.D=a.f;if(a.c)a.G=a.c;b.j(a,function(a){b.Ve(a)&&t(a)})}function j(g,f){var a={fb:f,m:1,bb:0,p:1,H:1,a:0,cb:0,g:0,Ab:k,v:k,pd:k,re:q.ae,B:{jb:0,mb:0},k:d.ed,fd:{},Yb:[],C:{}};b.I(a,g);t(a);a.k=b.Jd(a.k,d.ed);a.ue=c.ceil(a.m/a.fb);a.ce=function(c,b){c/=a.p;b/=a.H;var f=c+"x"+b;if(!a.Yb[f]){a.Yb[f]={E:c,F:b};for(var d=0;d<a.p;d++)for(var e=0;e<a.H;e++)a.Yb[f][e+","+d]={f:e*b,q:d*c+c,s:e*b+b,c:d*c}}return a.Yb[f]};if(a.Bc){a.Bc=j(a.Bc,f);a.v=e}return a}function n(z,i,a,v,n,l){var y=this,t,u={},h={},m=[],f,d,r,p=a.B.jb||0,q=a.B.mb||0,g=a.ce(n,l),o=B(a),C=o.length-1,s=a.m+a.bb*C,w=v+s,j=a.v,x;w+=50;function B(a){var b=a.re(a);return a.pd?b.reverse():b}y.qd=w;y.ic=function(d){d-=v;var e=d<s;if(e||x){x=e;if(!j)d=s-d;var f=c.ceil(d/a.fb);b.j(h,function(a,e){var d=c.max(f,a.te);d=c.min(d,a.length-1);if(a.Tc!=d){if(!a.Tc&&!j)b.L(m[e]);else d==a.Wd&&j&&b.X(m[e]);a.Tc=d;b.O(m[e],a[d])}})}};i=b.ib(i);A(i,0,0);b.j(o,function(i,m){b.j(i,function(G){var I=G[0],H=G[1],v=I+","+H,o=k,s=k,x=k;if(p&&H%2){if(p&3)o=!o;if(p&12)s=!s;if(p&16)x=!x}if(q&&I%2){if(q&3)o=!o;if(q&12)s=!s;if(q&16)x=!x}a.f=a.f||a.g&4;a.s=a.s||a.g&8;a.c=a.c||a.g&1;a.q=a.q||a.g&2;var E=s?a.s:a.f,B=s?a.f:a.s,D=o?a.q:a.c,C=o?a.c:a.q;a.g=E||B||D||C;r={};d={D:0,G:0,a:1,E:n,F:l};f=b.I({},d);t=b.I({},g[v]);if(a.a)d.a=2-a.a;if(a.V){d.V=a.V;f.V=0}var K=a.p*a.H>1||a.g;if(a.cb||a.N){var J=e;if(J){d.cb=a.cb?a.cb-1:1;f.cb=1;var N=a.N||0;d.N=N*360*(x?-1:1);f.N=0}}if(K){var i=t.hc={};if(a.g){var w=a.Tf||1;if(E&&B){i.f=g.F/2*w;i.s=-i.f}else if(E)i.s=-g.F*w;else if(B)i.f=g.F*w;if(D&&C){i.c=g.E/2*w;i.q=-i.c}else if(D)i.q=-g.E*w;else if(C)i.c=g.E*w}r.g=t;f.g=g[v]}var L=o?1:-1,M=s?1:-1;if(a.x)d.G+=n*a.x*L;if(a.y)d.D+=l*a.y*M;b.j(d,function(a,c){if(b.Vc(a))if(a!=f[c])r[c]=a-f[c]});u[v]=j?f:d;var F=a.ue,A=c.round(m*a.bb/a.fb);h[v]=new Array(A);h[v].te=A;h[v].Wd=A+F-1;for(var z=0;z<=F;z++){var y=b.Qc(f,r,z/F,a.k,a.C,a.fd,{Ab:a.Ab,eb:n,zb:l});y.V=y.V||1;h[v].push(y)}})});o.reverse();b.j(o,function(a){b.j(a,function(c){var f=c[0],e=c[1],d=f+","+e,a=i;if(e||f)a=b.ib(i);b.O(a,u[d]);b.Ib(a,"hidden");b.T(a,"absolute");z.Vd(a);m[d]=a;b.L(a,!j)})})}function w(){var b=this,c=0;l.call(b,0,v);b.Sb=function(d,b){if(b-c>i){c=b;a&&a.ic(b);h&&h.ic(b)}};b.od=r}g.ge=function(){var a=0,b=u.uc,d=b.length;if(x)a=y++%d;else a=c.floor(c.random()*d);b[a]&&(b[a].ub=a);return b[a]};g.pe=function(w,x,k,l,b){r=b;b=j(b,i);var f=l.bd,e=k.bd;f["no-image"]=!l.dc;e["no-image"]=!k.dc;var o=f,q=e,u=b,d=b.Bc||j({},i);if(!b.v){o=e;q=f}var t=d.Tb||0;h=new n(m,q,d,c.max(t-d.fb,0),s,p);a=new n(m,o,u,c.max(d.fb-t,0),s,p);h.ic(0);a.ic(0);v=c.max(h.qd,a.qd);g.ub=w};g.Eb=function(){m.Eb();h=f;a=f};g.Mf=function(){var b=f;if(a)b=new w;return b};if(z&&b.Kf()<537)i=16;o.call(g);l.call(g,-1e7,1e7)},p={Lc:1};var u=function(a,d,i){var c=this;o.call(c);var t,g,h,j;b.z(a);b.A(a);var r,q;function l(a){c.o(p.Lc,a,e)}function v(c){b.L(a,c);b.L(d,c)}function u(){r.bc(i.Wb||g>0);q.bc(i.Wb||g<t-i.p)}c.qc=function(b,a,c){if(c)g=a;else{g=b;u()}};c.rc=v;var s;c.sc=function(c){t=c;g=0;if(!s){b.i(a,"click",b.ab(f,l,-j));b.i(d,"click",b.ab(f,l,j));r=b.oc(a);q=b.oc(d);s=e}};c.Zb=h=b.I({Af:1},i);j=h.Af;if(h.Bb==k){n.rb(a,m.cc,1);n.rb(d,m.cc,1)}if(h.kb){n.rb(a,m.Lb,h.kb);n.rb(d,m.Lb,h.kb)}n.Hc(a);n.Hc(d)},r=function(i,D){var j=this,B,s,a,x=[],z,y,d,t,u,w,v,r,l,g,q;o.call(j);i=b.Jb(i);function C(o,g){var h=this,c,n,m;function r(){n.le(s==g)}function i(f){if(f||!l.vf()){var a=d-g%d,b=l.Fd((g+a)/d-1),c=b*d+d-a;j.o(p.Lc,c,k,e)}}h.ub=g;h.Hd=r;m=o.tf||o.dc||b.wb();h.Vb=c=b.Td(q,"thumbnailtemplate",m,e);n=b.oc(c);a.tc&1&&b.i(c,"click",b.ab(f,i,0));a.tc&2&&b.i(c,"mouseenter",b.ab(f,i,1))}j.qc=function(b,e,f){var a=s;s=b;a!=-1&&x[a].Hd();x[b].Hd();!f&&l.qf(l.Fd(c.floor(e/d)))};j.rc=function(a){b.L(i,a)};var A;j.sc=function(F,D){if(!A){B=F;c.ceil(B/d);s=-1;r=c.min(r,D.length);var f=a.Kb&1,o=w+(w+t)*(d-1)*(1-f),n=v+(v+u)*(d-1)*f,q=o+(o+t)*(r-1)*f,p=n+(n+u)*(r-1)*(1-f);b.T(g,"absolute");b.Ib(g,"hidden");b.R(g,(z-q)/2);b.S(g,(y-p)/2);b.z(g,q);b.A(g,p);var m=[];b.j(D,function(k,h){var i=new C(k,h),e=i.Vb,a=c.floor(h/d),j=h%d;b.R(e,(w+t)*j*(1-f));b.S(e,(v+u)*j*f);if(!m[a]){m[a]=b.wb();b.M(g,m[a])}b.M(m[a],e);x.push(i)});var E=b.I({Hb:0,Ed:k,Gf:o,Hf:n,sd:t*f+u*(1-f),td:12,Cd:200,hd:1,xd:a.Kb,wd:a.Uf||a.Sf?0:a.Kb},a);l=new h(i,E);j.Me=l.Me;A=e}};j.Zb=a=b.I({Oc:0,Nc:0,p:1,Kb:1,tc:1},D);z=b.z(i);y=b.A(i);g=b.Cb(i,"slides",e);q=b.Cb(g,"prototype");w=b.z(q);v=b.A(q);b.Ec(q,g);d=a.H||1;t=a.Oc;u=a.Nc;r=a.p;a.Bb==k&&n.rb(i,m.cc,1);a.kb&=a.Kb;a.kb&&n.rb(i,m.Lb,a.kb);n.Hc(i)};function s(e,d,c){var a=this;l.call(a,0,c);a.Ld=b.Sc;a.Id=0;a.Uc=c}var h=function(){var a=this;b.Jf(a,o);var Sb="data-jssor-slider",Yb="data-jssor-thumb",u,n,U,eb,V,ob,db,hb,R,P,Ob,nc=1,ic=1,Zb=1,ac={},hc,z,T,Rb,xb,wb,pb,Qb,Pb,cb,r=-1,K,Cb,q,I,H,Lb,lb,mb,nb,t,Q,x,N,Nb,Y=[],ec,fc,bc,oc,Ec,v,fb,F,dc,kb,Ab,Db,jb,Eb,J,gb,O,G=1,S,D,X,Fb=0,Gb=0,M,qb,ib,sb,y,ab,A,tb,Z=[],ub=b.kf(),Jb=ub.jf,B=[],C,L,E,zb,Xb,W;function tc(d,n,o){var k=this,h={f:2,q:1,s:2,c:1},l={f:"top",q:"right",s:"bottom",c:"left"},g,a,f,i,j={};k.Z=d;k.fc=function(q,k){var p,s=q,r=k;if(!f){f=b.we(d);g=d.parentNode;i={Bb:b.ac(d,m.cc,1),kb:b.ac(d,m.Lb)};b.j(l,function(c,a){j[a]=b.ac(d,"data-scale-"+c,1)});a=d;if(n){a=b.ib(g,e);b.O(a,{f:0,c:0});b.M(a,d);b.M(g,a)}}if(o)p=q>k?q:k;else s=r=p=c.pow(R<P?k:q,i.Bb);b.pf(a,p);b.Q(a,m.Ac,p);b.z(g,f.E*s);b.A(g,f.F*r);var t=b.md()&&b.Ad()<9||b.Ad()<10&&b.yf()?p:1,u=(s-t)*f.E/2,v=(r-t)*f.F/2;b.R(a,u);b.S(a,v);b.j(f,function(d,a){if(h[a]&&d){var e=(h[a]&1)*c.pow(q,j[a])*d+(h[a]&2)*c.pow(k,j[a])*d/2;b.Xd[a](g,e)}});b.ad(g,i.kb)}}function Dc(){var b=this;l.call(b,-1e8,2e8);b.Le=function(){var a=b.Nb(),d=c.floor(a),f=w(d),e=a-c.floor(a);return{ub:f,Ke:d,qb:e}};b.Sb=function(d,b){var f=c.floor(b);if(f!=b&&b>d)f++;gc(f,e);a.o(h.Je,w(b),w(d),b,d)}}function Cc(){var a=this;l.call(a,0,0,{kc:q});b.j(B,function(b){J&1&&b.qe(q);a.nc(b);b.Tb(jb/nb)})}function Bc(){var a=this,b=tb.Z;l.call(a,-1,2,{k:d.l,he:{qb:mc},kc:q},b,{qb:1},{qb:-2});a.Vb=b}function uc(o,m){var b=this,d,g,i,j,c;l.call(b,-1e8,2e8,{Dd:100});b.Md=function(){S=e;X=f;a.o(h.Ie,w(y.nb()),y.nb())};b.Od=function(){S=k;j=k;var b=y.Le();a.o(h.He,w(y.nb()),y.nb());!b.qb&&Fc(b.Ke,r)};b.Sb=function(f,e){var a;if(j)a=c;else{a=g;if(i){var b=e/i;a=n.zd(b)*(g-d)+d}}y.Y(a)};b.Pb=function(a,e,c,f){d=a;g=e;i=c;y.Y(a);b.Y(0);b.Pd(c,f)};b.lf=function(a){j=e;c=a;b.Nd(a,f,e)};b.Ne=function(a){c=a};y=new Dc;y.cd(o);y.cd(m)}function vc(){var c=this,a=kc();b.P(a,0);b.sb(a,"pointerEvents","none");c.Z=a;c.Vd=function(c){b.M(a,c);b.L(a)};c.Eb=function(){b.X(a);b.wc(a)}}function Ac(m,g){var d=this,s,M,u,j,z=[],y,D,S,J,Q,F,K,i,x,p;l.call(d,-t,t+1,{});function E(a){s&&s.Ld();R(m,a,0);F=e;s=new V.W(m,V,b.Yc(b.u(m,"idle"))||dc,!v);s.Y(0)}function Y(){s.lc<V.lc&&E()}function N(p,r,o){if(!J){J=e;if(j&&o){var f=o.width,c=o.height,m=f,l=c;if(f&&c&&n.Mb){if(n.Mb&3&&(!(n.Mb&4)||f>I||c>H)){var i=k,q=I/H*c/f;if(n.Mb&1)i=q>1;else if(n.Mb&2)i=q<1;m=i?f*H/c:I;l=i?H:c*I/f}b.z(j,m);b.A(j,l);b.S(j,(H-l)/2);b.R(j,(I-m)/2)}b.T(j,"absolute");a.o(h.Fe,g)}}b.X(r);p&&p(d)}function W(f,b,c,e){if(e==X&&r==g&&v)if(!Ec){var a=w(f);C.pe(a,g,b,d,c);b.De();ab.Tb(a-ab.kd()-1);ab.Y(a);A.Pb(a,a,0)}}function bb(b){if(b==X&&r==g){if(!i){var a=f;if(C)if(C.ub==g)a=C.Mf();else C.Eb();Y();i=new zc(m,g,a,s);i.jd(p)}!i.Zc()&&i.jc()}}function G(a,e,k){if(a==g){if(a!=e)B[e]&&B[e].ld();else!k&&i&&i.Ce();p&&p.bc();var l=X=b.lb();d.Gb(b.ab(f,bb,l))}else{var j=c.min(g,a),h=c.max(g,a),o=c.min(h-j,j+q-h),m=t+n.Be-1;(!Q||o<=m)&&d.Gb()}}function db(){if(r==g&&i){i.pb();p&&p.Ae();p&&p.ze();i.Kd()}}function eb(){r==g&&i&&i.pb()}function Z(b){!O&&a.o(h.ye,g,b)}function P(){p=x.pInstance;i&&i.jd(p)}d.Gb=function(d,c){c=c||u;if(z.length&&!J){b.L(c);if(!S){S=e;a.o(h.xe,g);b.j(z,function(a){if(!b.Q(a,"src")){a.src=b.u(a,"src2")||"";b.tb(a,a["display-origin"])}})}b.Zd(z,j,b.ab(f,N,d,c))}else N(d,c)};d.Ee=function(){if(q==1){d.ld();G(g,g)}else if(C){var a=C.ge(q);if(a){var h=X=b.lb(),c=g+fb,e=B[w(c)];return e.Gb(b.ab(f,W,c,e,a,h),u)}}else Mb(fb)};d.vc=function(){G(g,g,e)};d.ld=function(){p&&p.Ae();p&&p.ze();d.Qd();i&&i.Oe();i=f;E()};d.De=function(){b.X(m)};d.Qd=function(){b.L(m)};d.Pe=function(){p&&p.bc()};function R(a,f,c,h){if(b.Q(a,Sb))return;if(!F){if(a.tagName=="IMG"){z.push(a);if(!b.Q(a,"src")){Q=e;a["display-origin"]=b.tb(a);b.X(a)}}var d=b.me(a);if(d){var g=new Image;b.u(g,"src2",d);z.push(g)}c&&b.P(a,(b.P(a)||0)+1)}var i=b.Xb(a);b.j(i,function(a){var d=a.tagName,g=b.u(a,"u");if(g=="player"&&!x){x=a;if(x.pInstance)P();else b.i(x,"dataavailable",P)}if(g=="caption"){if(f){b.Ef(a,b.u(a,"to"));b.uf(a,b.u(a,"bf"));K&&b.u(a,"3d")&&b.nf(a,"preserve-3d")}}else if(!F&&!c&&!j){if(d=="A"){if(b.u(a,"u")=="image")j=b.xf(a,"IMG");else j=b.Cb(a,"image",e);if(j){y=a;b.tb(y,"block");b.O(y,cb);D=b.ib(y,e);b.T(y,"relative");b.zc(D,0);b.sb(D,"backgroundColor","#000")}}else if(d=="IMG"&&b.u(a,"u")=="image")j=a;if(j){j.border=0;b.O(j,cb)}}R(a,f,c+1,h)})}d.xc=function(c,b){var a=t-b;mc(M,a)};d.ub=g;o.call(d);K=b.u(m,"p");b.of(m,K);b.mf(m,b.u(m,"po"));var L=b.Cb(m,"thumb",e);if(L){d.tf=b.ib(L);b.X(L)}b.L(m);u=b.ib(T);b.P(u,1e3);b.i(m,"click",Z);E(e);d.dc=j;d.dd=D;d.bd=m;d.Vb=M=m;b.M(M,u);a.Ob(203,G);a.Ob(28,eb);a.Ob(24,db)}function zc(z,g,p,q){var c=this,n=0,u=0,i,j,f,d,m,t,s,o=B[g];l.call(c,0,0);function w(){b.wc(L);oc&&m&&o.dd&&b.M(L,o.dd);b.L(L,!m&&o.dc)}function x(){c.jc()}function y(a){s=a;c.pb();c.jc()}c.jc=function(){var b=c.Nb();if(!D&&!S&&!s&&r==g){if(!b){if(i&&!m){m=e;c.Kd(e);a.o(h.Qe,g,n,u,i,d)}w()}var k,p=h.Rc;if(b!=d)if(b==f)k=d;else if(b==j)k=f;else if(!b)k=j;else k=c.id();a.o(p,g,b,n,j,f,d);var l=v&&(!F||G);if(b==d)(f!=d&&!(F&12)||l)&&o.Ee();else(l||b!=f)&&c.Pd(k,x)}};c.Ce=function(){f==d&&f==c.Nb()&&c.Y(j)};c.Oe=function(){C&&C.ub==g&&C.Eb();var b=c.Nb();b<d&&a.o(h.Rc,g,-b-1,n,j,f,d)};c.Kd=function(a){p&&b.Ib(Q,a&&p.od.Vf?"":"hidden")};c.xc=function(c,b){if(m&&b>=i){m=k;w();o.Qd();C.Eb();a.o(h.hf,g,n,u,i,d)}a.o(h.gf,g,b,n,j,f,d)};c.jd=function(a){if(a&&!t){t=a;a.Ob($JssorPlayer$.ee,y)}};p&&c.nc(p);i=c.pc();c.nc(q);j=i+q.Id;d=c.pc();f=v?i+q.Uc:d}function Bb(a,c,d){b.R(a,c);b.S(a,d)}function mc(c,b){var a=x>0?x:U,d=lb*b*(a&1),e=mb*b*(a>>1&1);Bb(c,d,e)}function cc(){zb=S;Xb=A.id();E=y.nb()}function Ub(){cc();if(D||!G&&F&12){A.pb();a.o(h.ff)}}function Tb(f){if(!D&&(G||!(F&12))&&!A.Zc()){var b=y.nb(),a=c.ceil(E);if(f&&c.abs(M)>=n.td){a=c.ceil(b);a+=ib}if(!(J&1))a=c.min(q-t,c.max(a,0));var e=c.abs(a-b);if(e<1&&n.zd!=d.l)e=1-c.pow(1-e,5);if(!O&&zb)A.be(Xb);else if(b==a){Cb.Pe();Cb.vc()}else A.Pb(b,a,e*kb)}}function Wb(a){!b.Fb(b.Gc(a),"nodrag")&&b.Ub(a)}function xc(a){lc(a,1)}function lc(c,g){c=b.ud(c);var d=b.Gc(c);Nb=k;var l=b.Fb(d,"1",Yb);if((!l||l===u)&&!N&&(!g||c.touches.length==1)&&!b.Fb(d,"nodrag")&&yc()){var n=b.Fb(d,i,m.Ac);if(n)Zb=b.Q(n,m.Ac);if(g){var p=c.touches[0];Fb=p.clientX;Gb=p.clientY}else{var o=b.rd(c);Fb=o.x;Gb=o.y}D=e;X=f;b.i(j,g?"touchmove":"mousemove",rb);b.lb();O=0;Ub();if(!zb)x=0;M=0;qb=0;ib=0;a.o(h.ef,w(E),E,c)}}function rb(a){if(D){a=b.ud(a);var d;if(a.type!="mousemove")if(a.touches.length==1){var m=a.touches[0];d={x:m.clientX,y:m.clientY}}else bb();else d=b.rd(a);if(d){var f=d.x-Fb,g=d.y-Gb;if(x||c.abs(f)>1.5||c.abs(g)>1.5){if(c.floor(E)!=E)x=x||U&N;if((f||g)&&!x)if(N==3)if(c.abs(g)>c.abs(f))x=2;else x=1;else{x=N;var n=[0,c.abs(f),c.abs(g)],p=n[x],o=n[~x&3];if(o>p)Nb=e}if(x&&!Nb){var l=g,h=mb;if(x==1){l=f;h=lb}if(M-qb<-1.5)ib=0;else if(M-qb>1.5)ib=-1;qb=M;M=l;W=E-M/h/Zb;if(!(J&1)){var j=0,i=[-E,0,E-q+t];b.j(i,function(b,d){if(b>0){var a=c.pow(b,1/1.6);a=c.tan(a*c.PI/2);j=(a-b)*(d-1)}});var k=j+W;i=[-k,0,k-q+t];b.j(i,function(a,b){if(a>0){a=c.min(a,h);a=c.atan(a)*2/c.PI;a=c.pow(a,1.6);W=a*(b-1);if(b)W+=q-t}})}b.Ub(a);if(!S)A.lf(W);else A.Ne(W)}}}}}function bb(){wc();if(D){D=k;O=M;b.lb();b.U(j,"mousemove",rb);b.U(j,"touchmove",rb);O&&v&8&&(v=0);A.pb();var c=y.nb();a.o(h.df,w(c),c,w(E),E);F&12&&cc();Tb(e)}}function sc(c){var a=b.Gc(c),d=b.Fb(a,"1",Sb);if(u===d)if(O){b.rf(c);while(a&&u!==a){(a.tagName=="A"||b.Q(a,"data-jssor-button"))&&b.Ub(c);a=a.parentNode}}else v&4&&(v=0)}function Vb(a){B[r];r=w(a);Cb=B[r];y.Y(r);gc(r);return r}function Fc(b,c){x=0;Vb(b);if(v&2&&(fb>0&&r==q-1||fb<0&&!r))v=0;a.o(h.cf,r,c)}function gc(a,c){K=a;b.j(Y,function(b){b.qc(w(a),a,c)})}function yc(){var b=h.gd||0,a=gb;if(Jb)a&1&&(a&=1);h.gd|=a;return N=a&~b}function wc(){if(N){h.gd&=~gb;N=0}}function kc(){var a=b.wb();b.O(a,cb);b.T(a,"absolute");return a}function w(b,a){a=a||q||1;return(b%a+a)%a}function yb(c,a,b){v&8&&(v=0);vb(c,kb,a,b)}function Ib(){b.j(Y,function(a){a.rc(a.Zb.Wf<=G)})}function qc(){if(!G){G=1;Ib();if(!D){F&12&&Tb();F&3&&B[r]&&B[r].vc()}}a.o(h.bf)}function pc(){if(G){G=0;Ib();D||!(F&12)||Ub()}a.o(h.af)}function rc(){b.j(Z,function(a){b.O(a,cb);b.T(a,"absolute");b.Ib(a,"hidden");b.X(a)});b.O(T,cb)}function Mb(b,a){vb(b,a,e)}function vb(g,f,m,o){if(Eb&&(!D&&(G||!(F&12))||n.Ed)){S=e;D=k;A.pb();if(f==i)f=kb;var d=sb.Nb(),b=g;if(m){b=K+g;if(g>0)b=c.ceil(b);else b=c.floor(b)}var a=b;if(!(J&1))if(o)a=w(a);else if(J&2&&(a<0&&!K||a>q-t&&K>=q-t))a=a<0?q-t:0;else a=c.max(0,c.min(a,q-t));var l=(a-d)%q;a=d+l;var h=d==a?0:f*c.abs(l),j=1;if(t>1)j=(U&1?Qb:Pb)/nb;h=c.min(h,f*j*1.5);A.Pb(d,a,h||1)}}a.Hb=function(a){if(a==i)return a;if(a!=v){v=a;v&&B[r]&&B[r].vc()}};a.vf=function(){return O};function Kb(){return b.z(hc||u)}function Hb(){return b.A(hc||u)}a.eb=Kb;a.zb=Hb;a.Ze=function(b){if(b==i)return Ob||R;a.fc(b,b/R*P)};a.fc=function(c,a){b.z(u,c);b.A(u,a);nc=c/R;ic=a/P;b.j(ac,function(a){a.fc(nc,ic)});if(!Ob){b.Db(Q,z);b.S(Q,0);b.R(Q,0)}Ob=c};a.qf=vb;a.Nd=function(){a.Hb(v||1)};a.Fd=function(a){var d=c.ceil(w(jb/nb)),b=w(a-K+d);if(b>t){if(a-K>q/2)a-=q;else if(a-K<=-q/2)a+=q}else a=K+b-d;if(!(J&1))a=w(a);return a};a.ec=function(o,l){a.Z=u=b.Jb(o);R=b.z(u);P=b.A(u);n=b.I({Mb:0,Be:1,Jc:1,Dc:0,Hb:0,Wb:1,Cc:e,Ed:e,We:1,Xc:3e3,hd:1,Cd:500,zd:d.Ye,td:20,sd:0,p:1,Fc:0,Ue:1,xd:1,wd:1},l);n.Cc=n.Cc&&b.Lf();if(n.Te!=i)n.Xc=n.Te;if(n.Se!=i)n.Fc=n.Se;U=n.xd&3;eb=n.Xe;V=b.I({W:s},n.Rf);ob=n.Qf;db=n.Re;hb=n.de;!n.Ue;var r=b.Xb(u);b.j(r,function(a,d){var c=b.u(a,"u");if(c=="loading")T=a;else{if(c=="slides")z=a;if(c=="navigator")Rb=a;if(c=="arrowleft")xb=a;if(c=="arrowright")wb=a;if(c=="thumbnavigator")pb=a;if(a.tagName=="DIV"||a.tagName=="SPAN")ac[c||d]=new tc(a,c=="slides",b.Bf(["slides","thumbnavigator"])[c])}});T=T||b.wb(j);Qb=b.z(z);Pb=b.A(z);I=n.Gf||Qb;H=n.Hf||Pb;cb={E:I,F:H,f:0,c:0};Lb=n.sd;lb=I+Lb;mb=H+Lb;nb=U&1?lb:mb;fb=n.We;F=n.hd;dc=n.Xc;kb=n.Cd;tb=new vc;if(n.Cc)Bb=function(a,c,d){b.gc(a,{xb:c,yb:d})};v=n.Hb&63;a.Zb=l;b.Q(u,Sb,"1");b.P(z,b.P(z)||0);b.T(z,"absolute");Q=b.ib(z,e);b.Db(Q,z);ab=new Bc;b.M(Q,ab.Vb);b.Ib(z,"hidden");F&=Jb?10:5;var x=b.Xb(z);b.j(x,function(a){a.tagName=="DIV"&&!b.u(a,"u")&&Z.push(a);b.P(a,(b.P(a)||0)+1)});L=kc();b.sb(L,"backgroundColor","#000");b.zc(L,0);b.P(L,0);b.Db(L,z.firstChild,z);q=Z.length;t=c.min(n.p,q);Eb=t<q;J=Eb?n.Wb:0;if(q){rc();if(eb){oc=eb.Yf;Ab=eb.W;Db=t==1&&q>1&&Ab&&(!b.md()||b.Bd()>=9)}jb=Db||t>=q||!(J&1)?0:n.Fc;gb=(t>1||jb?U:-1)&n.wd;ub.Rd&&b.sb(z,ub.Rd,([f,"pan-y","pan-x","none"])[gb]||"");if(Db)C=new Ab(tb,I,H,eb,Jb,Bb);for(var k=0;k<Z.length;k++){var y=Z[k],m=new Ac(y,k);B.push(m)}b.X(T);sb=new Cc;A=new uc(sb,ab);b.i(u,"click",sc,e);b.i(u,"mouseleave",qc);b.i(u,"mouseenter",pc);if(gb){b.i(u,"mousedown",lc);b.i(u,"touchstart",xc);b.i(u,"dragstart",Wb);b.i(u,"selectstart",Wb);b.i(g,"mouseup",bb);b.i(j,"mouseup",bb);b.i(j,"touchend",bb);b.i(j,"touchcancel",bb);b.i(g,"blur",bb)}if(Rb&&ob){ec=new ob.W(Rb,ob,Kb(),Hb());Y.push(ec)}if(db&&xb&&wb){db.Wb=J;db.p=t;fc=new db.W(xb,wb,db,Kb(),Hb());Y.push(fc)}if(pb&&hb){hb.Dc=n.Dc;bc=new hb.W(pb,hb);b.Q(pb,Yb,"1");Y.push(bc)}b.j(Y,function(a){a.sc(q,B,T);a.Ob(p.Lc,yb)});b.sb(u,"visibility","visible");a.fc(R,P);Ib();n.Jc&&b.i(j,"keydown",function(a){if(a.keyCode==37)yb(-n.Jc,e);else a.keyCode==39&&yb(n.Jc,e)});var h=n.Dc;h=w(h);A.Pb(h,h,0)}};b.ec(a)};h.ye=21;h.ef=22;h.df=23;h.Ie=24;h.He=25;h.xe=26;h.Fe=27;h.ff=28;h.af=31;h.bf=32;h.Je=202;h.cf=203;h.Qe=206;h.hf=207;h.gf=208;h.Rc=209;jssor_10_slider_init=function(){var i=[{m:1200,x:.3,C:{c:[.3,.7]},k:{c:d.n,a:d.l},a:2},{m:1200,x:-.3,v:e,k:{c:d.n,a:d.l},a:2},{m:1200,x:-.3,C:{c:[.3,.7]},k:{c:d.n,a:d.l},a:2},{m:1200,x:.3,v:e,k:{c:d.n,a:d.l},a:2},{m:1200,y:.3,C:{f:[.3,.7]},k:{f:d.n,a:d.l},a:2},{m:1200,y:-.3,v:e,k:{f:d.n,a:d.l},a:2},{m:1200,y:-.3,C:{f:[.3,.7]},k:{f:d.n,a:d.l},a:2},{m:1200,y:.3,v:e,k:{f:d.n,a:d.l},a:2},{m:1200,x:.3,p:2,C:{c:[.3,.7]},B:{jb:3},k:{c:d.n,a:d.l},a:2},{m:1200,x:.3,p:2,v:e,B:{jb:3},k:{c:d.n,a:d.l},a:2},{m:1200,y:.3,H:2,C:{f:[.3,.7]},B:{mb:12},k:{f:d.n,a:d.l},a:2},{m:1200,y:.3,H:2,v:e,B:{mb:12},k:{f:d.n,a:d.l},a:2},{m:1200,y:.3,p:2,C:{f:[.3,.7]},B:{jb:12},k:{f:d.n,a:d.l},a:2},{m:1200,y:-.3,p:2,v:e,B:{jb:12},k:{f:d.n,a:d.l},a:2},{m:1200,x:.3,H:2,C:{c:[.3,.7]},B:{mb:3},k:{c:d.n,a:d.l},a:2},{m:1200,x:-.3,H:2,v:e,B:{mb:3},k:{c:d.n,a:d.l},a:2},{m:1200,x:.3,y:.3,p:2,H:2,C:{c:[.3,.7],f:[.3,.7]},B:{jb:3,mb:12},k:{c:d.n,f:d.n,a:d.l},a:2},{m:1200,x:.3,y:.3,p:2,H:2,C:{c:[.3,.7],f:[.3,.7]},v:e,B:{jb:3,mb:12},k:{c:d.n,f:d.n,a:d.l},a:2},{m:1200,bb:20,g:3,k:{g:d.n,a:d.l},a:2},{m:1200,bb:20,g:3,v:e,k:{g:d.Wc,a:d.l},a:2},{m:1200,bb:20,g:12,k:{g:d.n,a:d.l},a:2},{m:1200,bb:20,g:12,v:e,k:{g:d.Wc,a:d.l},a:2}],j={Hb:1,Xe:{W:t,uc:i,ke:1},Re:{W:u},de:{W:r,p:5,Fc:400}},f=new h("jssor_10",j);function k(){var d=b.wf(f.Z,"slides");if(d){var c=d[1];if(c){var a=b.Cb(c,"add");if(!a){a=b.wb();b.M(c,a)}}}}k();function a(){var b=f.Z.parentNode.clientWidth;if(b){b=c.min(b,980);f.Ze(b)}else g.setTimeout(a,30)}a();b.i(g,"load",a);b.i(g,"resize",a);b.i(g,"orientationchange",a)}})(window,document,Math,null,true,false)