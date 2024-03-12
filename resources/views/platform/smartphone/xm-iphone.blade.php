
<!DOCTYPE html>
<html lang="id">
<head>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript">(window.NREUM||(NREUM={})).init={privacy:{cookies_enabled:true},ajax:{deny_list:["bam.eu01.nr-data.net"]},distributed_tracing:{enabled:true,allowed_origins:[],cors_use_newrelic_header:false,cors_use_tracecontext_headers:false}};(window.NREUM||(NREUM={})).loader_config={agentID:"99021217",accountID:"2868847",trustKey:"2868847",xpid:"Vg4BWV5XDxAJXVFQBgAAVw==",licenseKey:"NRBR-1d4ceb8e146a994d175",applicationID:"99021171"};;/*! For license information please see nr-loader-spa-1.252.1.min.js.LICENSE.txt */
(()=>{var e,t,r={234:(e,t,r)=>{"use strict";r.d(t,{P_:()=>m,Mt:()=>b,C5:()=>s,DL:()=>w,OP:()=>D,lF:()=>O,Yu:()=>E,Dg:()=>v,CX:()=>c,GE:()=>x,sU:()=>N});var n=r(8632),i=r(9567);const o={beacon:n.ce.beacon,errorBeacon:n.ce.errorBeacon,licenseKey:void 0,applicationID:void 0,sa:void 0,queueTime:void 0,applicationTime:void 0,ttGuid:void 0,user:void 0,account:void 0,product:void 0,extra:void 0,jsAttributes:{},userAttributes:void 0,atts:void 0,transactionName:void 0,tNamePlain:void 0},a={};function s(e){if(!e)throw new Error("All info objects require an agent identifier!");if(!a[e])throw new Error("Info for ".concat(e," was never set"));return a[e]}function c(e,t){if(!e)throw new Error("All info objects require an agent identifier!");a[e]=(0,i.D)(t,o);const r=(0,n.ek)(e);r&&(r.info=a[e])}const u=e=>{if(!e||"string"!=typeof e)return!1;try{document.createDocumentFragment().querySelector(e)}catch{return!1}return!0};var d=r(7056),l=r(50);const f="[data-nr-mask]",h=()=>{const e={mask_selector:"*",block_selector:"[data-nr-block]",mask_input_options:{color:!1,date:!1,"datetime-local":!1,email:!1,month:!1,number:!1,range:!1,search:!1,tel:!1,text:!1,time:!1,url:!1,week:!1,textarea:!1,select:!1,password:!0}};return{feature_flags:[],proxy:{assets:void 0,beacon:void 0},privacy:{cookies_enabled:!0},ajax:{deny_list:void 0,block_internal:!0,enabled:!0,harvestTimeSeconds:10,autoStart:!0},distributed_tracing:{enabled:void 0,exclude_newrelic_header:void 0,cors_use_newrelic_header:void 0,cors_use_tracecontext_headers:void 0,allowed_origins:void 0},session:{domain:void 0,expiresMs:d.oD,inactiveMs:d.Hb},ssl:void 0,obfuscate:void 0,jserrors:{enabled:!0,harvestTimeSeconds:10,autoStart:!0},metrics:{enabled:!0,autoStart:!0},page_action:{enabled:!0,harvestTimeSeconds:30,autoStart:!0},page_view_event:{enabled:!0,autoStart:!0},page_view_timing:{enabled:!0,harvestTimeSeconds:30,long_task:!1,autoStart:!0},session_trace:{enabled:!0,harvestTimeSeconds:10,autoStart:!0},harvest:{tooManyRequestsDelay:60},session_replay:{autoStart:!0,enabled:!1,harvestTimeSeconds:60,sampling_rate:10,error_sampling_rate:100,collect_fonts:!1,inline_images:!1,inline_stylesheet:!0,mask_all_inputs:!0,get mask_text_selector(){return e.mask_selector},set mask_text_selector(t){u(t)?e.mask_selector="".concat(t,",").concat(f):""===t||null===t?e.mask_selector=f:(0,l.Z)("An invalid session_replay.mask_selector was provided. '*' will be used.",t)},get block_class(){return"nr-block"},get ignore_class(){return"nr-ignore"},get mask_text_class(){return"nr-mask"},get block_selector(){return e.block_selector},set block_selector(t){u(t)?e.block_selector+=",".concat(t):""!==t&&(0,l.Z)("An invalid session_replay.block_selector was provided and will not be used",t)},get mask_input_options(){return e.mask_input_options},set mask_input_options(t){t&&"object"==typeof t?e.mask_input_options={...t,password:!0}:(0,l.Z)("An invalid session_replay.mask_input_option was provided and will not be used",t)}},spa:{enabled:!0,harvestTimeSeconds:10,autoStart:!0}}},p={},g="All configuration objects require an agent identifier!";function m(e){if(!e)throw new Error(g);if(!p[e])throw new Error("Configuration for ".concat(e," was never set"));return p[e]}function v(e,t){if(!e)throw new Error(g);p[e]=(0,i.D)(t,h());const r=(0,n.ek)(e);r&&(r.init=p[e])}function b(e,t){if(!e)throw new Error(g);var r=m(e);if(r){for(var n=t.split("."),i=0;i<n.length-1;i++)if("object"!=typeof(r=r[n[i]]))return;r=r[n[n.length-1]]}return r}const y={accountID:void 0,trustKey:void 0,agentID:void 0,licenseKey:void 0,applicationID:void 0,xpid:void 0},A={};function w(e){if(!e)throw new Error("All loader-config objects require an agent identifier!");if(!A[e])throw new Error("LoaderConfig for ".concat(e," was never set"));return A[e]}function x(e,t){if(!e)throw new Error("All loader-config objects require an agent identifier!");A[e]=(0,i.D)(t,y);const r=(0,n.ek)(e);r&&(r.loader_config=A[e])}const E=(0,n.mF)().o;var _=r(385),T=r(6818);const S={buildEnv:T.Re,customTransaction:void 0,disabled:!1,distMethod:T.gF,isolatedBacklog:!1,loaderType:void 0,maxBytes:3e4,offset:Math.floor(_._A?.performance?.timeOrigin||_._A?.performance?.timing?.navigationStart||Date.now()),onerror:void 0,origin:""+_._A.location,ptid:void 0,releaseIds:{},session:void 0,xhrWrappable:"function"==typeof _._A.XMLHttpRequest?.prototype?.addEventListener,version:T.q4,denyList:void 0},R={};function D(e){if(!e)throw new Error("All runtime objects require an agent identifier!");if(!R[e])throw new Error("Runtime for ".concat(e," was never set"));return R[e]}function N(e,t){if(!e)throw new Error("All runtime objects require an agent identifier!");R[e]=(0,i.D)(t,S);const r=(0,n.ek)(e);r&&(r.runtime=R[e])}function O(e){return function(e){try{const t=s(e);return!!t.licenseKey&&!!t.errorBeacon&&!!t.applicationID}catch(e){return!1}}(e)}},9567:(e,t,r)=>{"use strict";r.d(t,{D:()=>i});var n=r(50);function i(e,t){try{if(!e||"object"!=typeof e)return(0,n.Z)("Setting a Configurable requires an object as input");if(!t||"object"!=typeof t)return(0,n.Z)("Setting a Configurable requires a model to set its initial properties");const r=Object.create(Object.getPrototypeOf(t),Object.getOwnPropertyDescriptors(t)),o=0===Object.keys(r).length?e:r;for(let a in o)if(void 0!==e[a])try{Array.isArray(e[a])&&Array.isArray(t[a])?r[a]=Array.from(new Set([...e[a],...t[a]])):"object"==typeof e[a]&&"object"==typeof t[a]?r[a]=i(e[a],t[a]):r[a]=e[a]}catch(e){(0,n.Z)("An error occurred while setting a property of a Configurable",e)}return r}catch(e){(0,n.Z)("An error occured while setting a Configurable",e)}}},6818:(e,t,r)=>{"use strict";r.d(t,{Re:()=>i,gF:()=>o,lF:()=>a,q4:()=>n});const n="1.252.1",i="PROD",o="CDN",a="2.0.0-alpha.11"},385:(e,t,r)=>{"use strict";r.d(t,{FN:()=>c,IF:()=>l,LW:()=>a,Nk:()=>h,Tt:()=>u,_A:()=>o,cv:()=>p,iS:()=>s,il:()=>n,ux:()=>d,v6:()=>i,w1:()=>f});const n="undefined"!=typeof window&&!!window.document,i="undefined"!=typeof WorkerGlobalScope&&("undefined"!=typeof self&&self instanceof WorkerGlobalScope&&self.navigator instanceof WorkerNavigator||"undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope&&globalThis.navigator instanceof WorkerNavigator),o=n?window:"undefined"!=typeof WorkerGlobalScope&&("undefined"!=typeof self&&self instanceof WorkerGlobalScope&&self||"undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope&&globalThis),a="complete"===o?.document?.readyState,s=Boolean("hidden"===o?.document?.visibilityState),c=""+o?.location,u=/iPad|iPhone|iPod/.test(o.navigator?.userAgent),d=u&&"undefined"==typeof SharedWorker,l=(()=>{const e=o.navigator?.userAgent?.match(/Firefox[/\s](\d+\.\d+)/);return Array.isArray(e)&&e.length>=2?+e[1]:0})(),f=Boolean(n&&window.document.documentMode),h=!!o.navigator?.sendBeacon,p=Math.floor(o?.performance?.timeOrigin||o?.performance?.timing?.navigationStart||Date.now())},1117:(e,t,r)=>{"use strict";r.d(t,{w:()=>o});var n=r(50);const i={agentIdentifier:"",ee:void 0};class o{constructor(e){try{if("object"!=typeof e)return(0,n.Z)("shared context requires an object as input");this.sharedContext={},Object.assign(this.sharedContext,i),Object.entries(e).forEach((e=>{let[t,r]=e;Object.keys(i).includes(t)&&(this.sharedContext[t]=r)}))}catch(e){(0,n.Z)("An error occured while setting SharedContext",e)}}}},8e3:(e,t,r)=>{"use strict";r.d(t,{L:()=>d,R:()=>c});var n=r(8325),i=r(1284),o=r(4322),a=r(3325);const s={};function c(e,t){const r={staged:!1,priority:a.p[t]||0};u(e),s[e].get(t)||s[e].set(t,r)}function u(e){e&&(s[e]||(s[e]=new Map))}function d(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"feature",r=arguments.length>2&&void 0!==arguments[2]&&arguments[2];if(u(e),!e||!s[e].get(t)||r)return c(t);s[e].get(t).staged=!0;const a=[...s[e]];function c(t){const r=e?n.ee.get(e):n.ee,a=o.X.handlers;if(r.backlog&&a){var s=r.backlog[t],c=a[t];if(c){for(var u=0;s&&u<s.length;++u)l(s[u],c);(0,i.D)(c,(function(e,t){(0,i.D)(t,(function(t,r){r[0].on(e,r[1])}))}))}delete a[t],r.backlog[t]=null,r.emit("drain-"+t,[])}}a.every((e=>{let[t,r]=e;return r.staged}))&&(a.sort(((e,t)=>e[1].priority-t[1].priority)),a.forEach((t=>{let[r]=t;s[e].delete(r),c(r)})))}function l(e,t){var r=e[1];(0,i.D)(t[r],(function(t,r){var n=e[0];if(r[0]===n){var i=r[1],o=e[3],a=e[2];i.apply(o,a)}}))}},8325:(e,t,r)=>{"use strict";r.d(t,{A:()=>c,ee:()=>u});var n=r(8632),i=r(2210),o=r(234);class a{constructor(e){this.contextId=e}}var s=r(3117);const c="nr@context:".concat(s.a),u=function e(t,r){var n={},s={},d={},f=!1;try{f=16===r.length&&(0,o.OP)(r).isolatedBacklog}catch(e){}var h={on:g,addEventListener:g,removeEventListener:function(e,t){var r=n[e];if(!r)return;for(var i=0;i<r.length;i++)r[i]===t&&r.splice(i,1)},emit:function(e,r,n,i,o){!1!==o&&(o=!0);if(u.aborted&&!i)return;t&&o&&t.emit(e,r,n);for(var a=p(n),c=m(e),d=c.length,l=0;l<d;l++)c[l].apply(a,r);var f=b()[s[e]];f&&f.push([h,e,r,a]);return a},get:v,listeners:m,context:p,buffer:function(e,t){const r=b();if(t=t||"feature",h.aborted)return;Object.entries(e||{}).forEach((e=>{let[n,i]=e;s[i]=t,t in r||(r[t]=[])}))},abort:l,aborted:!1,isBuffering:function(e){return!!b()[s[e]]},debugId:r,backlog:f?{}:t&&"object"==typeof t.backlog?t.backlog:{}};return h;function p(e){return e&&e instanceof a?e:e?(0,i.X)(e,c,(()=>new a(c))):new a(c)}function g(e,t){n[e]=m(e).concat(t)}function m(e){return n[e]||[]}function v(t){return d[t]=d[t]||e(h,t)}function b(){return h.backlog}}(void 0,"globalEE"),d=(0,n.fP)();function l(){u.aborted=!0,Object.keys(u.backlog).forEach((e=>{delete u.backlog[e]}))}d.ee||(d.ee=u)},5546:(e,t,r)=>{"use strict";r.d(t,{E:()=>n,p:()=>i});var n=r(8325).ee.get("handle");function i(e,t,r,i,o){o?(o.buffer([e],i),o.emit(e,t,r)):(n.buffer([e],i),n.emit(e,t,r))}},4322:(e,t,r)=>{"use strict";r.d(t,{X:()=>o});var n=r(5546);o.on=a;var i=o.handlers={};function o(e,t,r,o){a(o||n.E,i,e,t,r)}function a(e,t,r,i,o){o||(o="feature"),e||(e=n.E);var a=t[o]=t[o]||{};(a[r]=a[r]||[]).push([e,i])}},3239:(e,t,r)=>{"use strict";r.d(t,{bP:()=>s,iz:()=>c,m$:()=>a});var n=r(385);let i=!1,o=!1;try{const e={get passive(){return i=!0,!1},get signal(){return o=!0,!1}};n._A.addEventListener("test",null,e),n._A.removeEventListener("test",null,e)}catch(e){}function a(e,t){return i||o?{capture:!!e,passive:i,signal:t}:!!e}function s(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2],n=arguments.length>3?arguments[3]:void 0;window.addEventListener(e,t,a(r,n))}function c(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2],n=arguments.length>3?arguments[3]:void 0;document.addEventListener(e,t,a(r,n))}},3117:(e,t,r)=>{"use strict";r.d(t,{a:()=>n});const n=(0,r(4402).Rl)()},4402:(e,t,r)=>{"use strict";r.d(t,{Ht:()=>u,M:()=>c,Rl:()=>a,ky:()=>s});var n=r(385);const i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx";function o(e,t){return e?15&e[t]:16*Math.random()|0}function a(){const e=n._A?.crypto||n._A?.msCrypto;let t,r=0;return e&&e.getRandomValues&&(t=e.getRandomValues(new Uint8Array(30))),i.split("").map((e=>"x"===e?o(t,r++).toString(16):"y"===e?(3&o()|8).toString(16):e)).join("")}function s(e){const t=n._A?.crypto||n._A?.msCrypto;let r,i=0;t&&t.getRandomValues&&(r=t.getRandomValues(new Uint8Array(e)));const a=[];for(var s=0;s<e;s++)a.push(o(r,i++).toString(16));return a.join("")}function c(){return s(16)}function u(){return s(32)}},7056:(e,t,r)=>{"use strict";r.d(t,{Bq:()=>n,Hb:()=>o,IK:()=>c,oD:()=>i,uT:()=>s,wO:()=>a});const n="NRBA",i=144e5,o=18e5,a={PAUSE:"session-pause",RESET:"session-reset",RESUME:"session-resume",UPDATE:"session-update"},s={SAME_TAB:"same-tab",CROSS_TAB:"cross-tab"},c={OFF:0,FULL:1,ERROR:2}},7894:(e,t,r)=>{"use strict";function n(){return Math.round(performance.now())}r.d(t,{z:()=>n})},7243:(e,t,r)=>{"use strict";r.d(t,{e:()=>i});var n=r(385);function i(e){if(0===(e||"").indexOf("data:"))return{protocol:"data"};try{const t=new URL(e,location.href),r={port:t.port,hostname:t.hostname,pathname:t.pathname,search:t.search,protocol:t.protocol.slice(0,t.protocol.indexOf(":")),sameOrigin:t.protocol===n._A?.location?.protocol&&t.host===n._A?.location?.host};return r.port&&""!==r.port||("http:"===t.protocol&&(r.port="80"),"https:"===t.protocol&&(r.port="443")),r.pathname&&""!==r.pathname?r.pathname.startsWith("/")||(r.pathname="/".concat(r.pathname)):r.pathname="/",r}catch(e){return{}}}},50:(e,t,r)=>{"use strict";function n(e,t){"function"==typeof console.warn&&(console.warn("New Relic: ".concat(e)),t&&console.warn(t))}r.d(t,{Z:()=>n})},2825:(e,t,r)=>{"use strict";r.d(t,{N:()=>d,T:()=>l});var n=r(8325),i=r(5546),o=r(3325),a=r(385);const s="newrelic";const c={stn:[o.D.sessionTrace],err:[o.D.jserrors,o.D.metrics],ins:[o.D.pageAction],spa:[o.D.spa],sr:[o.D.sessionReplay,o.D.sessionTrace]},u=new Set;function d(e,t){const r=n.ee.get(t);e&&"object"==typeof e&&(u.has(t)||(Object.entries(e).forEach((e=>{let[t,n]=e;c[t]?c[t].forEach((e=>{n?(0,i.p)("feat-"+t,[],void 0,e,r):(0,i.p)("block-"+t,[],void 0,e,r),(0,i.p)("rumresp-"+t,[Boolean(n)],void 0,e,r)})):n&&(0,i.p)("feat-"+t,[],void 0,void 0,r),l[t]=Boolean(n)})),Object.keys(c).forEach((e=>{void 0===l[e]&&(c[e]?.forEach((t=>(0,i.p)("rumresp-"+e,[!1],void 0,t,r))),l[e]=!1)})),u.add(t),function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};try{a._A.dispatchEvent(new CustomEvent(s,{detail:e}))}catch(e){}}({loaded:!0})))}const l={}},2210:(e,t,r)=>{"use strict";r.d(t,{X:()=>i});var n=Object.prototype.hasOwnProperty;function i(e,t,r){if(n.call(e,t))return e[t];var i=r();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:i,writable:!0,enumerable:!1}),i}catch(e){}return e[t]=i,i}},1284:(e,t,r)=>{"use strict";r.d(t,{D:()=>n});const n=(e,t)=>Object.entries(e||{}).map((e=>{let[r,n]=e;return t(r,n)}))},4351:(e,t,r)=>{"use strict";r.d(t,{P:()=>o});var n=r(8325);const i=()=>{const e=new WeakSet;return(t,r)=>{if("object"==typeof r&&null!==r){if(e.has(r))return;e.add(r)}return r}};function o(e){try{return JSON.stringify(e,i())}catch(e){try{n.ee.emit("internal-error",[e])}catch(e){}}}},3960:(e,t,r)=>{"use strict";r.d(t,{KB:()=>a,b2:()=>o});var n=r(3239);function i(){return"undefined"==typeof document||"complete"===document.readyState}function o(e,t){if(i())return e();(0,n.bP)("load",e,t)}function a(e){if(i())return e();(0,n.iz)("DOMContentLoaded",e)}},8632:(e,t,r)=>{"use strict";r.d(t,{EZ:()=>d,ce:()=>o,ek:()=>u,fP:()=>a,gG:()=>l,h5:()=>c,mF:()=>s});var n=r(7894),i=r(385);const o={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net"};function a(){return i._A.NREUM||(i._A.NREUM={}),void 0===i._A.newrelic&&(i._A.newrelic=i._A.NREUM),i._A.NREUM}function s(){let e=a();return e.o||(e.o={ST:i._A.setTimeout,SI:i._A.setImmediate,CT:i._A.clearTimeout,XHR:i._A.XMLHttpRequest,REQ:i._A.Request,EV:i._A.Event,PR:i._A.Promise,MO:i._A.MutationObserver,FETCH:i._A.fetch}),e}function c(e,t){let r=a();r.initializedAgents??={},t.initializedAt={ms:(0,n.z)(),date:new Date},r.initializedAgents[e]=t}function u(e){let t=a();return t.initializedAgents?.[e]}function d(e,t){a()[e]=t}function l(){return function(){let e=a();const t=e.info||{};e.info={beacon:o.beacon,errorBeacon:o.errorBeacon,...t}}(),function(){let e=a();const t=e.init||{};e.init={...t}}(),s(),function(){let e=a();const t=e.loader_config||{};e.loader_config={...t}}(),a()}},7956:(e,t,r)=>{"use strict";r.d(t,{N:()=>i});var n=r(3239);function i(e){let t=arguments.length>1&&void 0!==arguments[1]&&arguments[1],r=arguments.length>2?arguments[2]:void 0,i=arguments.length>3?arguments[3]:void 0;(0,n.iz)("visibilitychange",(function(){if(t)return void("hidden"===document.visibilityState&&e());e(document.visibilityState)}),r,i)}},1214:(e,t,r)=>{"use strict";r.d(t,{em:()=>b,u5:()=>R,QU:()=>O,_L:()=>P,Gm:()=>M,Lg:()=>L,BV:()=>Z,Kf:()=>Y});var n=r(8325),i=r(3117);const o="nr@original:".concat(i.a);var a=Object.prototype.hasOwnProperty,s=!1;function c(e,t){return e||(e=n.ee),r.inPlace=function(e,t,n,i,o){n||(n="");const a="-"===n.charAt(0);for(let s=0;s<t.length;s++){const c=t[s],u=e[c];d(u)||(e[c]=r(u,a?c+n:n,i,c,o))}},r.flag=o,r;function r(t,r,n,s,c){return d(t)?t:(r||(r=""),nrWrapper[o]=t,function(e,t,r){if(Object.defineProperty&&Object.keys)try{return Object.keys(e).forEach((function(r){Object.defineProperty(t,r,{get:function(){return e[r]},set:function(t){return e[r]=t,t}})})),t}catch(e){u([e],r)}for(var n in e)a.call(e,n)&&(t[n]=e[n])}(t,nrWrapper,e),nrWrapper);function nrWrapper(){var o,a,d,l;try{a=this,o=[...arguments],d="function"==typeof n?n(o,a):n||{}}catch(t){u([t,"",[o,a,s],d],e)}i(r+"start",[o,a,s],d,c);try{return l=t.apply(a,o)}catch(e){throw i(r+"err",[o,a,e],d,c),e}finally{i(r+"end",[o,a,l],d,c)}}}function i(r,n,i,o){if(!s||t){var a=s;s=!0;try{e.emit(r,n,i,t,o)}catch(t){u([t,r,n,i],e)}s=a}}}function u(e,t){t||(t=n.ee);try{t.emit("internal-error",e)}catch(e){}}function d(e){return!(e&&"function"==typeof e&&e.apply&&!e[o])}var l=r(2210),f=r(385);const h={},p=f._A.XMLHttpRequest,g="addEventListener",m="removeEventListener",v="nr@wrapped:".concat(n.A);function b(e){var t=function(e){return(e||n.ee).get("events")}(e);if(h[t.debugId]++)return t;h[t.debugId]=1;var r=c(t,!0);function i(e){r.inPlace(e,[g,m],"-",o)}function o(e,t){return e[1]}return"getPrototypeOf"in Object&&(f.il&&y(document,i),y(f._A,i),y(p.prototype,i)),t.on(g+"-start",(function(e,t){var n=e[1];if(null!==n&&("function"==typeof n||"object"==typeof n)){var i=(0,l.X)(n,v,(function(){var e={object:function(){if("function"!=typeof n.handleEvent)return;return n.handleEvent.apply(n,arguments)},function:n}[typeof n];return e?r(e,"fn-",null,e.name||"anonymous"):n}));this.wrapped=e[1]=i}})),t.on(m+"-start",(function(e){e[1]=this.wrapped||e[1]})),t}function y(e,t){let r=e;for(;"object"==typeof r&&!Object.prototype.hasOwnProperty.call(r,g);)r=Object.getPrototypeOf(r);for(var n=arguments.length,i=new Array(n>2?n-2:0),o=2;o<n;o++)i[o-2]=arguments[o];r&&t(r,...i)}var A="fetch-",w=A+"body-",x=["arrayBuffer","blob","json","text","formData"],E=f._A.Request,_=f._A.Response,T="prototype";const S={};function R(e){const t=function(e){return(e||n.ee).get("fetch")}(e);if(!(E&&_&&f._A.fetch))return t;if(S[t.debugId]++)return t;function r(e,r,i){var o=e[r];"function"==typeof o&&(e[r]=function(){var e,r=[...arguments],a={};t.emit(i+"before-start",[r],a),a[n.A]&&a[n.A].dt&&(e=a[n.A].dt);var s=o.apply(this,r);return t.emit(i+"start",[r,e],s),s.then((function(e){return t.emit(i+"end",[null,e],s),e}),(function(e){throw t.emit(i+"end",[e],s),e}))})}return S[t.debugId]=1,x.forEach((e=>{r(E[T],e,w),r(_[T],e,w)})),r(f._A,"fetch",A),t.on(A+"end",(function(e,r){var n=this;if(r){var i=r.headers.get("content-length");null!==i&&(n.rxSize=i),t.emit(A+"done",[null,r],n)}else t.emit(A+"done",[e],n)})),t}const D={},N=["pushState","replaceState"];function O(e){const t=function(e){return(e||n.ee).get("history")}(e);return!f.il||D[t.debugId]++||(D[t.debugId]=1,c(t).inPlace(window.history,N,"-")),t}var I=r(3239);const j={},C=["appendChild","insertBefore","replaceChild"];function P(e){const t=function(e){return(e||n.ee).get("jsonp")}(e);if(!f.il||j[t.debugId])return t;j[t.debugId]=!0;var r=c(t),i=/[?&](?:callback|cb)=([^&#]+)/,o=/(.*)\.([^.]+)/,a=/^(\w+)(\.|$)(.*)$/;function s(e,t){if(!e)return t;const r=e.match(a),n=r[1];return s(r[3],t[n])}return r.inPlace(Node.prototype,C,"dom-"),t.on("dom-start",(function(e){!function(e){if(!e||"string"!=typeof e.nodeName||"script"!==e.nodeName.toLowerCase())return;if("function"!=typeof e.addEventListener)return;var n=(a=e.src,c=a.match(i),c?c[1]:null);var a,c;if(!n)return;var u=function(e){var t=e.match(o);if(t&&t.length>=3)return{key:t[2],parent:s(t[1],window)};return{key:e,parent:window}}(n);if("function"!=typeof u.parent[u.key])return;var d={};function l(){t.emit("jsonp-end",[],d),e.removeEventListener("load",l,(0,I.m$)(!1)),e.removeEventListener("error",f,(0,I.m$)(!1))}function f(){t.emit("jsonp-error",[],d),t.emit("jsonp-end",[],d),e.removeEventListener("load",l,(0,I.m$)(!1)),e.removeEventListener("error",f,(0,I.m$)(!1))}r.inPlace(u.parent,[u.key],"cb-",d),e.addEventListener("load",l,(0,I.m$)(!1)),e.addEventListener("error",f,(0,I.m$)(!1)),t.emit("new-jsonp",[e.src],d)}(e[0])})),t}const k={};function M(e){const t=function(e){return(e||n.ee).get("mutation")}(e);if(!f.il||k[t.debugId])return t;k[t.debugId]=!0;var r=c(t),i=f._A.MutationObserver;return i&&(window.MutationObserver=function(e){return this instanceof i?new i(r(e,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype),t}const H={};function L(e){const t=function(e){return(e||n.ee).get("promise")}(e);if(H[t.debugId])return t;H[t.debugId]=!0;var r=t.context,i=c(t),a=f._A.Promise;return a&&function(){function e(r){var n=t.context(),o=i(r,"executor-",n,null,!1);const s=Reflect.construct(a,[o],e);return t.context(s).getCtx=function(){return n},s}f._A.Promise=e,Object.defineProperty(e,"name",{value:"Promise"}),e.toString=function(){return a.toString()},Object.setPrototypeOf(e,a),["all","race"].forEach((function(r){const n=a[r];e[r]=function(e){let i=!1;[...e||[]].forEach((e=>{this.resolve(e).then(a("all"===r),a(!1))}));const o=n.apply(this,arguments);return o;function a(e){return function(){t.emit("propagate",[null,!i],o,!1,!1),i=i||!e}}}})),["resolve","reject"].forEach((function(r){const n=a[r];e[r]=function(e){const r=n.apply(this,arguments);return e!==r&&t.emit("propagate",[e,!0],r,!1,!1),r}})),e.prototype=a.prototype;const n=a.prototype.then;a.prototype.then=function(){var e=this,o=r(e);o.promise=e;for(var a=arguments.length,s=new Array(a),c=0;c<a;c++)s[c]=arguments[c];s[0]=i(s[0],"cb-",o,null,!1),s[1]=i(s[1],"cb-",o,null,!1);const u=n.apply(this,s);return o.nextPromise=u,t.emit("propagate",[e,!0],u,!1,!1),u},a.prototype.then[o]=n,t.on("executor-start",(function(e){e[0]=i(e[0],"resolve-",this,null,!1),e[1]=i(e[1],"resolve-",this,null,!1)})),t.on("executor-err",(function(e,t,r){e[1](r)})),t.on("cb-end",(function(e,r,n){t.emit("propagate",[n,!0],this.nextPromise,!1,!1)})),t.on("propagate",(function(e,r,n){this.getCtx&&!r||(this.getCtx=function(){if(e instanceof Promise)var r=t.context(e);return r&&r.getCtx?r.getCtx():this})}))}(),t}const z={},F="setTimeout",B="setInterval",U="clearTimeout",V="-start",q="-",G=[F,"setImmediate",B,U,"clearImmediate"];function Z(e){const t=function(e){return(e||n.ee).get("timer")}(e);if(z[t.debugId]++)return t;z[t.debugId]=1;var r=c(t);return r.inPlace(f._A,G.slice(0,2),F+q),r.inPlace(f._A,G.slice(2,3),B+q),r.inPlace(f._A,G.slice(3),U+q),t.on(B+V,(function(e,t,n){e[0]=r(e[0],"fn-",null,n)})),t.on(F+V,(function(e,t,n){this.method=n,this.timerDuration=isNaN(e[1])?0:+e[1],e[0]=r(e[0],"fn-",this,n)})),t}var W=r(50);const X={},K=["open","send"];function Y(e){var t=e||n.ee;const r=function(e){return(e||n.ee).get("xhr")}(t);if(X[r.debugId]++)return r;X[r.debugId]=1,b(t);var i=c(r),o=f._A.XMLHttpRequest,a=f._A.MutationObserver,s=f._A.Promise,u=f._A.setInterval,d="readystatechange",l=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],h=[],p=f._A.XMLHttpRequest=function(e){const t=new o(e),n=r.context(t);try{r.emit("new-xhr",[t],n),t.addEventListener(d,(a=n,function(){var e=this;e.readyState>3&&!a.resolved&&(a.resolved=!0,r.emit("xhr-resolved",[],e)),i.inPlace(e,l,"fn-",w)}),(0,I.m$)(!1))}catch(e){(0,W.Z)("An error occurred while intercepting XHR",e);try{r.emit("internal-error",[e])}catch(e){}}var a;return t};function g(e,t){i.inPlace(t,["onreadystatechange"],"fn-",w)}if(function(e,t){for(var r in e)t[r]=e[r]}(o,p),p.prototype=o.prototype,i.inPlace(p.prototype,K,"-xhr-",w),r.on("send-xhr-start",(function(e,t){g(e,t),function(e){h.push(e),a&&(m?m.then(A):u?u(A):(v=-v,y.data=v))}(t)})),r.on("open-xhr-start",g),a){var m=s&&s.resolve();if(!u&&!s){var v=1,y=document.createTextNode(v);new a(A).observe(y,{characterData:!0})}}else t.on("fn-end",(function(e){e[0]&&e[0].type===d||A()}));function A(){for(var e=0;e<h.length;e++)g(0,h[e]);h.length&&(h=[])}function w(e,t){return t}return r}},7825:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(3325).D.ajax},6660:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(3325).D.jserrors},3081:(e,t,r)=>{"use strict";r.d(t,{gF:()=>o,mY:()=>i,t9:()=>n,vz:()=>s,xS:()=>a});const n=r(3325).D.metrics,i="sm",o="cm",a="storeSupportabilityMetrics",s="storeEventMetrics"},4649:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(3325).D.pageAction},7633:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(3325).D.pageViewEvent},9251:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(3325).D.pageViewTiming},7144:(e,t,r)=>{"use strict";r.d(t,{J0:()=>l,Mi:()=>d,Vb:()=>o,Ye:()=>s,fm:()=>c,i9:()=>a,t9:()=>i,u0:()=>u});var n=r(7056);const i=r(3325).D.sessionReplay,o=.12,a={DomContentLoaded:0,Load:1,FullSnapshot:2,IncrementalSnapshot:3,Meta:4,Custom:5},s=1e6,c=64e3,u={[n.IK.ERROR]:15e3,[n.IK.FULL]:3e5,[n.IK.OFF]:0},d={RESET:{message:"Session was reset",sm:"Reset"},IMPORT:{message:"Recorder failed to import",sm:"Import"},TOO_MANY:{message:"429: Too Many Requests",sm:"Too-Many"},TOO_BIG:{message:"Payload was too large",sm:"Too-Big"},CROSS_TAB:{message:"Session Entity was set to OFF on another tab",sm:"Cross-Tab"},ENTITLEMENTS:{message:"Session Replay is not allowed and will not be started",sm:"Entitlement"}},l=5e3},3614:(e,t,r)=>{"use strict";r.d(t,{BST_RESOURCE:()=>i,END:()=>s,FEATURE_NAME:()=>n,FN_END:()=>u,FN_START:()=>c,PUSH_STATE:()=>d,RESOURCE:()=>o,START:()=>a});const n=r(3325).D.sessionTrace,i="bstResource",o="resource",a="-start",s="-end",c="fn"+a,u="fn"+s,d="pushState"},7836:(e,t,r)=>{"use strict";r.d(t,{BODY:()=>x,CB_END:()=>E,CB_START:()=>u,END:()=>w,FEATURE_NAME:()=>i,FETCH:()=>T,FETCH_BODY:()=>v,FETCH_DONE:()=>m,FETCH_START:()=>g,FN_END:()=>c,FN_START:()=>s,INTERACTION:()=>f,INTERACTION_API:()=>d,INTERACTION_EVENTS:()=>o,JSONP_END:()=>b,JSONP_NODE:()=>p,JS_TIME:()=>_,MAX_TIMER_BUDGET:()=>a,REMAINING:()=>l,SPA_NODE:()=>h,START:()=>A,originalSetTimeout:()=>y});var n=r(234);const i=r(3325).D.spa,o=["click","submit","keypress","keydown","keyup","change"],a=999,s="fn-start",c="fn-end",u="cb-start",d="api-ixn-",l="remaining",f="interaction",h="spaNode",p="jsonpNode",g="fetch-start",m="fetch-done",v="fetch-body-",b="jsonp-end",y=n.Yu.ST,A="-start",w="-end",x="-body",E="cb"+w,_="jsTime",T="fetch"},5938:(e,t,r)=>{"use strict";r.d(t,{W:()=>i});var n=r(8325);class i{constructor(e,t,r){this.agentIdentifier=e,this.aggregator=t,this.ee=n.ee.get(e),this.featureName=r,this.blocked=!1}}},8862:(e,t,r)=>{"use strict";r.d(t,{j:()=>A});var n=r(3325),i=r(234),o=r(5546),a=r(8325),s=r(7894),c=r(8e3),u=r(3960),d=r(385),l=r(50),f=r(3081),h=r(8632);const p=["setErrorHandler","finished","addToTrace","addRelease","addPageAction","setCurrentRouteName","setPageViewName","setCustomAttribute","interaction","noticeError","setUserId","setApplicationVersion","start","recordReplay","pauseReplay"],g=["setErrorHandler","finished","addToTrace","addRelease"];function m(){const e=(0,h.gG)();p.forEach((t=>{e[t]=function(){for(var r=arguments.length,n=new Array(r),i=0;i<r;i++)n[i]=arguments[i];return function(t){for(var r=arguments.length,n=new Array(r>1?r-1:0),i=1;i<r;i++)n[i-1]=arguments[i];let o=[];return Object.values(e.initializedAgents).forEach((e=>{e.exposed&&e.api[t]&&o.push(e.api[t](...n))})),o.length>1?o:o[0]}(t,...n)}}))}var v=r(2825);const b=e=>{const t=e.startsWith("http");e+="/",r.p=t?e:"https://"+e};let y=!1;function A(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},p=arguments.length>2?arguments[2]:void 0,A=arguments.length>3?arguments[3]:void 0,{init:w,info:x,loader_config:E,runtime:_={loaderType:p},exposed:T=!0}=t;const S=(0,h.gG)();x||(w=S.init,x=S.info,E=S.loader_config),(0,i.Dg)(e.agentIdentifier,w||{}),(0,i.GE)(e.agentIdentifier,E||{}),x.jsAttributes??={},d.v6&&(x.jsAttributes.isWorker=!0),(0,i.CX)(e.agentIdentifier,x);const R=(0,i.P_)(e.agentIdentifier),D=[x.beacon,x.errorBeacon];y||(R.proxy.assets&&(b(R.proxy.assets),D.push(R.proxy.assets)),R.proxy.beacon&&D.push(R.proxy.beacon),m(),(0,h.EZ)("activatedFeatures",v.T)),_.denyList=[...R.ajax.deny_list||[],...R.ajax.block_internal?D:[]],(0,i.sU)(e.agentIdentifier,_),void 0===e.api&&(e.api=function(e,t){t||(0,c.R)(e,"api");const h={};var p=a.ee.get(e),m=p.get("tracer"),v="api-",b=v+"ixn-";function y(t,r,n,o){const a=(0,i.C5)(e);return null===r?delete a.jsAttributes[t]:(0,i.CX)(e,{...a,jsAttributes:{...a.jsAttributes,[t]:r}}),x(v,n,!0,o||null===r?"session":void 0)(t,r)}function A(){}g.forEach((e=>{h[e]=x(v,e,!0,"api")})),h.addPageAction=x(v,"addPageAction",!0,n.D.pageAction),h.setCurrentRouteName=x(v,"routeName",!0,n.D.spa),h.setPageViewName=function(t,r){if("string"==typeof t)return"/"!==t.charAt(0)&&(t="/"+t),(0,i.OP)(e).customTransaction=(r||"http://custom.transaction")+t,x(v,"setPageViewName",!0)()},h.setCustomAttribute=function(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2];if("string"==typeof e){if(["string","number","boolean"].includes(typeof t)||null===t)return y(e,t,"setCustomAttribute",r);(0,l.Z)("Failed to execute setCustomAttribute.\nNon-null value must be a string, number or boolean type, but a type of <".concat(typeof t,"> was provided."))}else(0,l.Z)("Failed to execute setCustomAttribute.\nName must be a string type, but a type of <".concat(typeof e,"> was provided."))},h.setUserId=function(e){if("string"==typeof e||null===e)return y("enduser.id",e,"setUserId",!0);(0,l.Z)("Failed to execute setUserId.\nNon-null value must be a string type, but a type of <".concat(typeof e,"> was provided."))},h.setApplicationVersion=function(e){if("string"==typeof e||null===e)return y("application.version",e,"setApplicationVersion",!1);(0,l.Z)("Failed to execute setApplicationVersion. Expected <String | null>, but got <".concat(typeof e,">."))},h.start=e=>{try{const t=e?"defined":"undefined";(0,o.p)(f.xS,["API/start/".concat(t,"/called")],void 0,n.D.metrics,p);const r=Object.values(n.D);if(void 0===e)e=r;else{if((e=Array.isArray(e)&&e.length?e:[e]).some((e=>!r.includes(e))))return(0,l.Z)("Invalid feature name supplied. Acceptable feature names are: ".concat(r));e.includes(n.D.pageViewEvent)||e.push(n.D.pageViewEvent)}e.forEach((e=>{p.emit("".concat(e,"-opt-in"))}))}catch(e){(0,l.Z)("An unexpected issue occurred",e)}},h.recordReplay=function(){(0,o.p)(f.xS,["API/recordReplay/called"],void 0,n.D.metrics,p),(0,o.p)("recordReplay",[],void 0,n.D.sessionReplay,p)},h.pauseReplay=function(){(0,o.p)(f.xS,["API/pauseReplay/called"],void 0,n.D.metrics,p),(0,o.p)("pauseReplay",[],void 0,n.D.sessionReplay,p)},h.interaction=function(){return(new A).get()};var w=A.prototype={createTracer:function(e,t){var r={},i=this,a="function"==typeof t;return(0,o.p)(f.xS,["API/createTracer/called"],void 0,n.D.metrics,p),(0,o.p)(b+"tracer",[(0,s.z)(),e,r],i,n.D.spa,p),function(){if(m.emit((a?"":"no-")+"fn-start",[(0,s.z)(),i,a],r),a)try{return t.apply(this,arguments)}catch(e){throw m.emit("fn-err",[arguments,this,e],r),e}finally{m.emit("fn-end",[(0,s.z)()],r)}}}};function x(e,t,r,i){return function(){return(0,o.p)(f.xS,["API/"+t+"/called"],void 0,n.D.metrics,p),i&&(0,o.p)(e+t,[(0,s.z)(),...arguments],r?null:this,i,p),r?void 0:this}}function E(){r.e(111).then(r.bind(r,7438)).then((t=>{let{setAPI:r}=t;r(e),(0,c.L)(e,"api")})).catch((()=>{(0,l.Z)("Downloading runtime APIs failed..."),(0,c.L)(e,"api",!0)}))}return["actionText","setName","setAttribute","save","ignore","onEnd","getContext","end","get"].forEach((e=>{w[e]=x(b,e,void 0,n.D.spa)})),h.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),(0,o.p)(f.xS,["API/noticeError/called"],void 0,n.D.metrics,p),(0,o.p)("err",[e,(0,s.z)(),!1,t],void 0,n.D.jserrors,p)},d.il?(0,u.b2)((()=>E()),!0):E(),h}(e.agentIdentifier,A)),void 0===e.exposed&&(e.exposed=T),y=!0}},1926:(e,t,r)=>{r.nc=(()=>{try{return document?.currentScript?.nonce}catch(e){}return""})()},3325:(e,t,r)=>{"use strict";r.d(t,{D:()=>n,p:()=>i});const n={ajax:"ajax",jserrors:"jserrors",metrics:"metrics",pageAction:"page_action",pageViewEvent:"page_view_event",pageViewTiming:"page_view_timing",sessionReplay:"session_replay",sessionTrace:"session_trace",spa:"spa"},i={[n.pageViewEvent]:1,[n.pageViewTiming]:2,[n.metrics]:3,[n.jserrors]:4,[n.ajax]:5,[n.sessionTrace]:6,[n.pageAction]:7,[n.spa]:8,[n.sessionReplay]:9}}},n={};function i(e){var t=n[e];if(void 0!==t)return t.exports;var o=n[e]={exports:{}};return r[e](o,o.exports,i),o.exports}i.m=r,i.d=(e,t)=>{for(var r in t)i.o(t,r)&&!i.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},i.f={},i.e=e=>Promise.all(Object.keys(i.f).reduce(((t,r)=>(i.f[r](e,t),t)),[])),i.u=e=>({111:"nr-spa",164:"nr-spa-compressor",433:"nr-spa-recorder"}[e]+"-1.252.1.min.js"),i.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),e={},t="NRBA-1.252.1.PROD:",i.l=(r,n,o,a)=>{if(e[r])e[r].push(n);else{var s,c;if(void 0!==o)for(var u=document.getElementsByTagName("script"),d=0;d<u.length;d++){var l=u[d];if(l.getAttribute("src")==r||l.getAttribute("data-webpack")==t+o){s=l;break}}if(!s){c=!0;var f={111:"sha512-yqKktm3jjy7vH57ymJxJxF1Z6jKArrgcXebUMwF0elgpFkLMiY9/6juO9vuYcQ3VLbGCuFTO0QlvCZc8xgPFaA==",433:"sha512-xCugVfV9zLov1hjT2nBv+ZvSWVPV2dTRP6ZOb5BWXDkjLxZfeMBu5Yb1JACb/dMdGYlFRYh6/5+evlY/nf7URw==",164:"sha512-9mCt3EsEBu4UoI4ZDKBWyuf3gjOy9vMrbuPNIGxVj+hCDXuCy2yhAiQXr+3Xyg4vMnD349BCtUd0vc2Cys6CFQ=="};(s=document.createElement("script")).charset="utf-8",s.timeout=120,i.nc&&s.setAttribute("nonce",i.nc),s.setAttribute("data-webpack",t+o),s.src=r,0!==s.src.indexOf(window.location.origin+"/")&&(s.crossOrigin="anonymous"),f[a]&&(s.integrity=f[a])}e[r]=[n];var h=(t,n)=>{s.onerror=s.onload=null,clearTimeout(p);var i=e[r];if(delete e[r],s.parentNode&&s.parentNode.removeChild(s),i&&i.forEach((e=>e(n))),t)return t(n)},p=setTimeout(h.bind(null,void 0,{type:"timeout",target:s}),12e4);s.onerror=h.bind(null,s.onerror),s.onload=h.bind(null,s.onload),c&&document.head.appendChild(s)}},i.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.p="https://js-agent.newrelic.com/",(()=>{var e={801:0,92:0};i.f.j=(t,r)=>{var n=i.o(e,t)?e[t]:void 0;if(0!==n)if(n)r.push(n[2]);else{var o=new Promise(((r,i)=>n=e[t]=[r,i]));r.push(n[2]=o);var a=i.p+i.u(t),s=new Error;i.l(a,(r=>{if(i.o(e,t)&&(0!==(n=e[t])&&(e[t]=void 0),n)){var o=r&&("load"===r.type?"missing":r.type),a=r&&r.target&&r.target.src;s.message="Loading chunk "+t+" failed.\n("+o+": "+a+")",s.name="ChunkLoadError",s.type=o,s.request=a,n[1](s)}}),"chunk-"+t,t)}};var t=(t,r)=>{var n,o,[a,s,c]=r,u=0;if(a.some((t=>0!==e[t]))){for(n in s)i.o(s,n)&&(i.m[n]=s[n]);if(c)c(i)}for(t&&t(r);u<a.length;u++)o=a[u],i.o(e,o)&&e[o]&&e[o][0](),e[o]=0},r=self["webpackChunk:NRBA-1.252.1.PROD"]=self["webpackChunk:NRBA-1.252.1.PROD"]||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})(),(()=>{"use strict";i(1926);var e=i(50);class t{#e(t){for(var r=arguments.length,n=new Array(r>1?r-1:0),i=1;i<r;i++)n[i-1]=arguments[i];if("function"==typeof this.api?.[t])return this.api[t](...n);(0,e.Z)("Call to agent api ".concat(t," failed. The API is not currently initialized."))}addPageAction(e,t){return this.#e("addPageAction",e,t)}setPageViewName(e,t){return this.#e("setPageViewName",e,t)}setCustomAttribute(e,t,r){return this.#e("setCustomAttribute",e,t,r)}noticeError(e,t){return this.#e("noticeError",e,t)}setUserId(e){return this.#e("setUserId",e)}setApplicationVersion(e){return this.#e("setApplicationVersion",e)}setErrorHandler(e){return this.#e("setErrorHandler",e)}finished(e){return this.#e("finished",e)}addRelease(e,t){return this.#e("addRelease",e,t)}start(e){return this.#e("start",e)}recordReplay(){return this.#e("recordReplay")}pauseReplay(){return this.#e("pauseReplay")}addToTrace(e){return this.#e("addToTrace",e)}setCurrentRouteName(e){return this.#e("setCurrentRouteName",e)}interaction(){return this.#e("interaction")}}var r=i(3325),n=i(234);const o=Object.values(r.D);function a(e){const t={};return o.forEach((r=>{t[r]=function(e,t){return!1!==(0,n.Mt)(t,"".concat(e,".enabled"))}(r,e)})),t}var s=i(8862);var c=i(8e3),u=i(5938),d=i(3960),l=i(385);class f extends u.W{constructor(e,t,r){let i=!(arguments.length>3&&void 0!==arguments[3])||arguments[3];super(e,t,r),this.auto=i,this.abortHandler=void 0,this.featAggregate=void 0,this.onAggregateImported=void 0,!1===(0,n.Mt)(this.agentIdentifier,"".concat(this.featureName,".autoStart"))&&(this.auto=!1),this.auto&&(0,c.R)(e,r)}importAggregator(){let t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};if(this.featAggregate)return;if(!this.auto)return void this.ee.on("".concat(this.featureName,"-opt-in"),(()=>{(0,c.R)(this.agentIdentifier,this.featureName),this.auto=!0,this.importAggregator()}));const r=l.il&&!0===(0,n.Mt)(this.agentIdentifier,"privacy.cookies_enabled");let o;this.onAggregateImported=new Promise((e=>{o=e}));const a=async()=>{let n;try{if(r){const{setupAgentSession:e}=await i.e(111).then(i.bind(i,1656));n=e(this.agentIdentifier)}}catch(t){(0,e.Z)("A problem occurred when starting up session manager. This page will not start or extend any session.",t)}try{if(!this.shouldImportAgg(this.featureName,n))return(0,c.L)(this.agentIdentifier,this.featureName),void o(!1);const{lazyFeatureLoader:e}=await i.e(111).then(i.bind(i,8582)),{Aggregate:r}=await e(this.featureName,"aggregate");this.featAggregate=new r(this.agentIdentifier,this.aggregator,t),o(!0)}catch(t){(0,e.Z)("Downloading and initializing ".concat(this.featureName," failed..."),t),this.abortHandler?.(),(0,c.L)(this.agentIdentifier,this.featureName,!0),o(!1)}};l.il?(0,d.b2)((()=>a()),!0):a()}shouldImportAgg(e,t){return e!==r.D.sessionReplay||!!n.Yu.MO&&(!1!==(0,n.Mt)(this.agentIdentifier,"session_trace.enabled")&&(!!t?.isNew||!!t?.state.sessionReplayMode))}}var h=i(7633);class p extends f{static featureName=h.t;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,h.t,r),this.importAggregator()}}var g=i(1117),m=i(1284);class v extends g.w{constructor(e){super(e),this.aggregatedData={}}store(e,t,r,n,i){var o=this.getBucket(e,t,r,i);return o.metrics=function(e,t){t||(t={count:0});return t.count+=1,(0,m.D)(e,(function(e,r){t[e]=b(r,t[e])})),t}(n,o.metrics),o}merge(e,t,r,n,i){var o=this.getBucket(e,t,n,i);if(o.metrics){var a=o.metrics;a.count+=r.count,(0,m.D)(r,(function(e,t){if("count"!==e){var n=a[e],i=r[e];i&&!i.c?a[e]=b(i.t,n):a[e]=function(e,t){if(!t)return e;t.c||(t=y(t.t));return t.min=Math.min(e.min,t.min),t.max=Math.max(e.max,t.max),t.t+=e.t,t.sos+=e.sos,t.c+=e.c,t}(i,a[e])}}))}else o.metrics=r}storeMetric(e,t,r,n){var i=this.getBucket(e,t,r);return i.stats=b(n,i.stats),i}getBucket(e,t,r,n){this.aggregatedData[e]||(this.aggregatedData[e]={});var i=this.aggregatedData[e][t];return i||(i=this.aggregatedData[e][t]={params:r||{}},n&&(i.custom=n)),i}get(e,t){return t?this.aggregatedData[e]&&this.aggregatedData[e][t]:this.aggregatedData[e]}take(e){for(var t={},r="",n=!1,i=0;i<e.length;i++)t[r=e[i]]=A(this.aggregatedData[r]),t[r].length&&(n=!0),delete this.aggregatedData[r];return n?t:null}}function b(e,t){return null==e?function(e){e?e.c++:e={c:1};return e}(t):t?(t.c||(t=y(t.t)),t.c+=1,t.t+=e,t.sos+=e*e,e>t.max&&(t.max=e),e<t.min&&(t.min=e),t):{t:e}}function y(e){return{t:e,min:e,max:e,sos:e*e,c:1}}function A(e){return"object"!=typeof e?[]:(0,m.D)(e,w)}function w(e,t){return t}var x=i(8632),E=i(4402),_=i(4351);var T=i(5546),S=i(7956),R=i(3239),D=i(7894),N=i(9251);class O extends f{static featureName=N.t;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,N.t,r),l.il&&((0,S.N)((()=>(0,T.p)("docHidden",[(0,D.z)()],void 0,N.t,this.ee)),!0),(0,R.bP)("pagehide",(()=>(0,T.p)("winPagehide",[(0,D.z)()],void 0,N.t,this.ee))),this.importAggregator())}}var I=i(3081);class j extends f{static featureName=I.t9;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,I.t9,r),this.importAggregator()}}var C=i(6660);class P{constructor(e,t,r,n){this.name="UncaughtError",this.message=e,this.sourceURL=t,this.line=r,this.column=n}}class k extends f{static featureName=C.t;#t=new Set;constructor(e,t){let n=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,C.t,n);try{this.removeOnAbort=new AbortController}catch(e){}this.ee.on("fn-err",((e,t,n)=>{this.abortHandler&&!this.#t.has(n)&&(this.#t.add(n),(0,T.p)("err",[this.#r(n),(0,D.z)()],void 0,r.D.jserrors,this.ee))})),this.ee.on("internal-error",(e=>{this.abortHandler&&(0,T.p)("ierr",[this.#r(e),(0,D.z)(),!0],void 0,r.D.jserrors,this.ee)})),l._A.addEventListener("unhandledrejection",(e=>{this.abortHandler&&(0,T.p)("err",[this.#n(e),(0,D.z)(),!1,{unhandledPromiseRejection:1}],void 0,r.D.jserrors,this.ee)}),(0,R.m$)(!1,this.removeOnAbort?.signal)),l._A.addEventListener("error",(e=>{this.abortHandler&&(this.#t.has(e.error)?this.#t.delete(e.error):(0,T.p)("err",[this.#i(e),(0,D.z)()],void 0,r.D.jserrors,this.ee))}),(0,R.m$)(!1,this.removeOnAbort?.signal)),this.abortHandler=this.#o,this.importAggregator()}#o(){this.removeOnAbort?.abort(),this.#t.clear(),this.abortHandler=void 0}#r(e){return e instanceof Error?e:void 0!==e?.message?new P(e.message,e.filename||e.sourceURL,e.lineno||e.line,e.colno||e.col):new P("string"==typeof e?e:(0,_.P)(e))}#n(e){let t="Unhandled Promise Rejection: ";if(e?.reason instanceof Error)try{return e.reason.message=t+e.reason.message,e.reason}catch(t){return e.reason}if(void 0===e.reason)return new P(t);const r=this.#r(e.reason);return r.message=t+r.message,r}#i(e){if(e.error instanceof SyntaxError&&!/:\d+$/.test(e.error.stack?.trim())){const t=new P(e.message,e.filename,e.lineno,e.colno);return t.name=SyntaxError.name,t}return e.error instanceof Error?e.error:new P(e.message,e.filename,e.lineno,e.colno)}}var M=i(2210);let H=1;const L="nr@id";function z(e){const t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===l._A?0:(0,M.X)(e,L,(function(){return H++}))}function F(e){if("string"==typeof e&&e.length)return e.length;if("object"==typeof e){if("undefined"!=typeof ArrayBuffer&&e instanceof ArrayBuffer&&e.byteLength)return e.byteLength;if("undefined"!=typeof Blob&&e instanceof Blob&&e.size)return e.size;if(!("undefined"!=typeof FormData&&e instanceof FormData))try{return(0,_.P)(e).length}catch(e){return}}}var B=i(1214),U=i(7243);class V{constructor(e){this.agentIdentifier=e}generateTracePayload(e){if(!this.shouldGenerateTrace(e))return null;var t=(0,n.DL)(this.agentIdentifier);if(!t)return null;var r=(t.accountID||"").toString()||null,i=(t.agentID||"").toString()||null,o=(t.trustKey||"").toString()||null;if(!r||!i)return null;var a=(0,E.M)(),s=(0,E.Ht)(),c=Date.now(),u={spanId:a,traceId:s,timestamp:c};return(e.sameOrigin||this.isAllowedOrigin(e)&&this.useTraceContextHeadersForCors())&&(u.traceContextParentHeader=this.generateTraceContextParentHeader(a,s),u.traceContextStateHeader=this.generateTraceContextStateHeader(a,c,r,i,o)),(e.sameOrigin&&!this.excludeNewrelicHeader()||!e.sameOrigin&&this.isAllowedOrigin(e)&&this.useNewrelicHeaderForCors())&&(u.newrelicHeader=this.generateTraceHeader(a,s,c,r,i,o)),u}generateTraceContextParentHeader(e,t){return"00-"+t+"-"+e+"-01"}generateTraceContextStateHeader(e,t,r,n,i){return i+"@nr=0-1-"+r+"-"+n+"-"+e+"----"+t}generateTraceHeader(e,t,r,n,i,o){if(!("function"==typeof l._A?.btoa))return null;var a={v:[0,1],d:{ty:"Browser",ac:n,ap:i,id:e,tr:t,ti:r}};return o&&n!==o&&(a.d.tk=o),btoa((0,_.P)(a))}shouldGenerateTrace(e){return this.isDtEnabled()&&this.isAllowedOrigin(e)}isAllowedOrigin(e){var t=!1,r={};if((0,n.Mt)(this.agentIdentifier,"distributed_tracing")&&(r=(0,n.P_)(this.agentIdentifier).distributed_tracing),e.sameOrigin)t=!0;else if(r.allowed_origins instanceof Array)for(var i=0;i<r.allowed_origins.length;i++){var o=(0,U.e)(r.allowed_origins[i]);if(e.hostname===o.hostname&&e.protocol===o.protocol&&e.port===o.port){t=!0;break}}return t}isDtEnabled(){var e=(0,n.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.enabled}excludeNewrelicHeader(){var e=(0,n.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.exclude_newrelic_header}useNewrelicHeaderForCors(){var e=(0,n.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!1!==e.cors_use_newrelic_header}useTraceContextHeadersForCors(){var e=(0,n.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.cors_use_tracecontext_headers}}var q=i(7825),G=["load","error","abort","timeout"],Z=G.length,W=n.Yu.REQ,X=n.Yu.XHR;class K extends f{static featureName=q.t;constructor(e,t){let i=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];if(super(e,t,q.t,i),(0,n.OP)(e).xhrWrappable){this.dt=new V(e),this.handler=(e,t,r,n)=>(0,T.p)(e,t,r,n,this.ee);try{const e={xmlhttprequest:"xhr",fetch:"fetch",beacon:"beacon"};l._A?.performance?.getEntriesByType("resource").forEach((t=>{if(t.initiatorType in e&&0!==t.responseStatus){const n={status:t.responseStatus},i={rxSize:t.transferSize,duration:Math.floor(t.duration),cbTime:0};Y(n,t.name),this.handler("xhr",[n,i,t.startTime,t.responseEnd,e[t.initiatorType]],void 0,r.D.ajax)}}))}catch(e){}(0,B.u5)(this.ee),(0,B.Kf)(this.ee),function(e,t,i,o){function a(e){var t=this;t.totalCbs=0,t.called=0,t.cbTime=0,t.end=x,t.ended=!1,t.xhrGuids={},t.lastSize=null,t.loadCaptureCalled=!1,t.params=this.params||{},t.metrics=this.metrics||{},e.addEventListener("load",(function(r){E(t,e)}),(0,R.m$)(!1)),l.IF||e.addEventListener("progress",(function(e){t.lastSize=e.loaded}),(0,R.m$)(!1))}function s(e){this.params={method:e[0]},Y(this,e[1]),this.metrics={}}function c(t,r){var i=(0,n.DL)(e);i.xpid&&this.sameOrigin&&r.setRequestHeader("X-NewRelic-ID",i.xpid);var a=o.generateTracePayload(this.parsedOrigin);if(a){var s=!1;a.newrelicHeader&&(r.setRequestHeader("newrelic",a.newrelicHeader),s=!0),a.traceContextParentHeader&&(r.setRequestHeader("traceparent",a.traceContextParentHeader),a.traceContextStateHeader&&r.setRequestHeader("tracestate",a.traceContextStateHeader),s=!0),s&&(this.dt=a)}}function u(e,r){var n=this.metrics,i=e[0],o=this;if(n&&i){var a=F(i);a&&(n.txSize=a)}this.startTime=(0,D.z)(),this.body=i,this.listener=function(e){try{"abort"!==e.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==e.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof r.onload)&&"function"==typeof o.end)&&o.end(r)}catch(e){try{t.emit("internal-error",[e])}catch(e){}}};for(var s=0;s<Z;s++)r.addEventListener(G[s],this.listener,(0,R.m$)(!1))}function d(e,t,r){this.cbTime+=e,t?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof r.onload||"function"!=typeof this.end||this.end(r)}function f(e,t){var r=""+z(e)+!!t;this.xhrGuids&&!this.xhrGuids[r]&&(this.xhrGuids[r]=!0,this.totalCbs+=1)}function h(e,t){var r=""+z(e)+!!t;this.xhrGuids&&this.xhrGuids[r]&&(delete this.xhrGuids[r],this.totalCbs-=1)}function p(){this.endTime=(0,D.z)()}function g(e,r){r instanceof X&&"load"===e[0]&&t.emit("xhr-load-added",[e[1],e[2]],r)}function m(e,r){r instanceof X&&"load"===e[0]&&t.emit("xhr-load-removed",[e[1],e[2]],r)}function v(e,t,r){t instanceof X&&("onload"===r&&(this.onload=!0),("load"===(e[0]&&e[0].type)||this.onload)&&(this.xhrCbStart=(0,D.z)()))}function b(e,r){this.xhrCbStart&&t.emit("xhr-cb-time",[(0,D.z)()-this.xhrCbStart,this.onload,r],r)}function y(e){var t,r=e[1]||{};if("string"==typeof e[0]?0===(t=e[0]).length&&l.il&&(t=""+l._A.location.href):e[0]&&e[0].url?t=e[0].url:l._A?.URL&&e[0]&&e[0]instanceof URL?t=e[0].href:"function"==typeof e[0].toString&&(t=e[0].toString()),"string"==typeof t&&0!==t.length){t&&(this.parsedOrigin=(0,U.e)(t),this.sameOrigin=this.parsedOrigin.sameOrigin);var n=o.generateTracePayload(this.parsedOrigin);if(n&&(n.newrelicHeader||n.traceContextParentHeader))if(e[0]&&e[0].headers)s(e[0].headers,n)&&(this.dt=n);else{var i={};for(var a in r)i[a]=r[a];i.headers=new Headers(r.headers||{}),s(i.headers,n)&&(this.dt=n),e.length>1?e[1]=i:e.push(i)}}function s(e,t){var r=!1;return t.newrelicHeader&&(e.set("newrelic",t.newrelicHeader),r=!0),t.traceContextParentHeader&&(e.set("traceparent",t.traceContextParentHeader),t.traceContextStateHeader&&e.set("tracestate",t.traceContextStateHeader),r=!0),r}}function A(e,t){this.params={},this.metrics={},this.startTime=(0,D.z)(),this.dt=t,e.length>=1&&(this.target=e[0]),e.length>=2&&(this.opts=e[1]);var r,n=this.opts||{},i=this.target;"string"==typeof i?r=i:"object"==typeof i&&i instanceof W?r=i.url:l._A?.URL&&"object"==typeof i&&i instanceof URL&&(r=i.href),Y(this,r);var o=(""+(i&&i instanceof W&&i.method||n.method||"GET")).toUpperCase();this.params.method=o,this.body=n.body,this.txSize=F(n.body)||0}function w(e,t){var n;this.endTime=(0,D.z)(),this.params||(this.params={}),this.params.status=t?t.status:0,"string"==typeof this.rxSize&&this.rxSize.length>0&&(n=+this.rxSize);var o={txSize:this.txSize,rxSize:n,duration:(0,D.z)()-this.startTime};i("xhr",[this.params,o,this.startTime,this.endTime,"fetch"],this,r.D.ajax)}function x(e){var t=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var o=0;o<Z;o++)e.removeEventListener(G[o],this.listener,!1);t.aborted||(n.duration=(0,D.z)()-this.startTime,this.loadCaptureCalled||4!==e.readyState?null==t.status&&(t.status=0):E(this,e),n.cbTime=this.cbTime,i("xhr",[t,n,this.startTime,this.endTime,"xhr"],this,r.D.ajax))}}function E(e,n){e.params.status=n.status;var i=function(e,t){var r=e.responseType;return"json"===r&&null!==t?t:"arraybuffer"===r||"blob"===r||"json"===r?F(e.response):"text"===r||""===r||void 0===r?F(e.responseText):void 0}(n,e.lastSize);if(i&&(e.metrics.rxSize=i),e.sameOrigin){var o=n.getResponseHeader("X-NewRelic-App-Data");o&&((0,T.p)(I.mY,["Ajax/CrossApplicationTracing/Header/Seen"],void 0,r.D.metrics,t),e.params.cat=o.split(", ").pop())}e.loadCaptureCalled=!0}t.on("new-xhr",a),t.on("open-xhr-start",s),t.on("open-xhr-end",c),t.on("send-xhr-start",u),t.on("xhr-cb-time",d),t.on("xhr-load-added",f),t.on("xhr-load-removed",h),t.on("xhr-resolved",p),t.on("addEventListener-end",g),t.on("removeEventListener-end",m),t.on("fn-end",b),t.on("fetch-before-start",y),t.on("fetch-start",A),t.on("fn-start",v),t.on("fetch-done",w)}(e,this.ee,this.handler,this.dt),this.importAggregator()}}}function Y(e,t){var r=(0,U.e)(t),n=e.params||e;n.hostname=r.hostname,n.port=r.port,n.protocol=r.protocol,n.host=r.hostname+":"+r.port,n.pathname=r.pathname,e.parsedOrigin=r,e.sameOrigin=r.sameOrigin}var J=i(3614);const{BST_RESOURCE:Q,RESOURCE:ee,START:te,END:re,FEATURE_NAME:ne,FN_END:ie,FN_START:oe,PUSH_STATE:ae}=J;var se=i(7056),ce=i(7144);class ue extends f{static featureName=ce.t9;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,ce.t9,r);try{const e=JSON.parse(localStorage.getItem("NRBA_SESSION"));e.sessionReplayMode!==se.IK.OFF?this.#a(e.sessionReplayMode):this.importAggregator({})}catch(e){this.importAggregator({})}}async#a(e){const{Recorder:t}=await Promise.all([i.e(111),i.e(433)]).then(i.bind(i,4136));this.recorder=new t({mode:e,agentIdentifier:this.agentIdentifier}),this.recorder.startRecording(),this.importAggregator({recorder:this.recorder})}}var de=i(7836);const{FEATURE_NAME:le,START:fe,END:he,BODY:pe,CB_END:ge,JS_TIME:me,FETCH:ve,FN_START:be,CB_START:ye,FN_END:Ae}=de;var we=i(4649);class xe extends f{static featureName=we.t;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,we.t,r),this.importAggregator()}}new class extends t{constructor(t){let r=arguments.length>1&&void 0!==arguments[1]?arguments[1]:(0,E.ky)(16);super(),l._A?(this.agentIdentifier=r,this.sharedAggregator=new v({agentIdentifier:this.agentIdentifier}),this.features={},(0,x.h5)(r,this),this.desiredFeatures=new Set(t.features||[]),this.desiredFeatures.add(p),(0,s.j)(this,t,t.loaderType||"agent"),this.run()):(0,e.Z)("Failed to initial the agent. Could not determine the runtime environment.")}get config(){return{info:(0,n.C5)(this.agentIdentifier),init:(0,n.P_)(this.agentIdentifier),loader_config:(0,n.DL)(this.agentIdentifier),runtime:(0,n.OP)(this.agentIdentifier)}}run(){try{const t=a(this.agentIdentifier),n=[...this.desiredFeatures];n.sort(((e,t)=>r.p[e.featureName]-r.p[t.featureName])),n.forEach((n=>{if(t[n.featureName]||n.featureName===r.D.pageViewEvent){const i=function(e){switch(e){case r.D.ajax:return[r.D.jserrors];case r.D.sessionTrace:return[r.D.ajax,r.D.pageViewEvent];case r.D.sessionReplay:return[r.D.sessionTrace];case r.D.pageViewTiming:return[r.D.pageViewEvent];default:return[]}}(n.featureName);i.every((e=>t[e]))||(0,e.Z)("".concat(n.featureName," is enabled but one or more dependent features has been disabled (").concat((0,_.P)(i),"). This may cause unintended consequences or missing data...")),this.features[n.featureName]=new n(this.agentIdentifier,this.sharedAggregator)}}))}catch(t){(0,e.Z)("Failed to initialize all enabled instrument classes (agent aborted) -",t);for(const e in this.features)this.features[e].abortHandler?.();const r=(0,x.fP)();return delete r.initializedAgents[this.agentIdentifier]?.api,delete r.initializedAgents[this.agentIdentifier]?.features,delete this.sharedAggregator,r.ee?.abort(),delete r.ee?.get(this.agentIdentifier),!1}}}({features:[K,p,O,class extends f{static featureName=ne;constructor(e,t){if(super(e,t,ne,!(arguments.length>2&&void 0!==arguments[2])||arguments[2]),!l.il)return;const n=this.ee;let i;(0,B.QU)(n),this.eventsEE=(0,B.em)(n),this.eventsEE.on(oe,(function(e,t){this.bstStart=(0,D.z)()})),this.eventsEE.on(ie,(function(e,t){(0,T.p)("bst",[e[0],t,this.bstStart,(0,D.z)()],void 0,r.D.sessionTrace,n)})),n.on(ae+te,(function(e){this.time=(0,D.z)(),this.startPath=location.pathname+location.hash})),n.on(ae+re,(function(e){(0,T.p)("bstHist",[location.pathname+location.hash,this.startPath,this.time],void 0,r.D.sessionTrace,n)}));try{i=new PerformanceObserver((e=>{const t=e.getEntries();(0,T.p)(Q,[t],void 0,r.D.sessionTrace,n)})),i.observe({type:ee,buffered:!0})}catch(e){}this.importAggregator({resourceObserver:i})}},ue,j,xe,k,class extends f{static featureName=le;constructor(e,t){if(super(e,t,le,!(arguments.length>2&&void 0!==arguments[2])||arguments[2]),!l.il)return;if(!(0,n.OP)(e).xhrWrappable)return;try{this.removeOnAbort=new AbortController}catch(e){}let r,i=0;const o=this.ee.get("tracer"),a=(0,B._L)(this.ee),s=(0,B.Lg)(this.ee),c=(0,B.BV)(this.ee),u=(0,B.Kf)(this.ee),d=this.ee.get("events"),f=(0,B.u5)(this.ee),h=(0,B.QU)(this.ee),p=(0,B.Gm)(this.ee);function g(e,t){h.emit("newURL",[""+window.location,t])}function m(){i++,r=window.location.hash,this[be]=(0,D.z)()}function v(){i--,window.location.hash!==r&&g(0,!0);var e=(0,D.z)();this[me]=~~this[me]+e-this[be],this[Ae]=e}function b(e,t){e.on(t,(function(){this[t]=(0,D.z)()}))}this.ee.on(be,m),s.on(ye,m),a.on(ye,m),this.ee.on(Ae,v),s.on(ge,v),a.on(ge,v),this.ee.buffer([be,Ae,"xhr-resolved"],this.featureName),d.buffer([be],this.featureName),c.buffer(["setTimeout"+he,"clearTimeout"+fe,be],this.featureName),u.buffer([be,"new-xhr","send-xhr"+fe],this.featureName),f.buffer([ve+fe,ve+"-done",ve+pe+fe,ve+pe+he],this.featureName),h.buffer(["newURL"],this.featureName),p.buffer([be],this.featureName),s.buffer(["propagate",ye,ge,"executor-err","resolve"+fe],this.featureName),o.buffer([be,"no-"+be],this.featureName),a.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"],this.featureName),b(f,ve+fe),b(f,ve+"-done"),b(a,"new-jsonp"),b(a,"jsonp-end"),b(a,"cb-start"),h.on("pushState-end",g),h.on("replaceState-end",g),window.addEventListener("hashchange",g,(0,R.m$)(!0,this.removeOnAbort?.signal)),window.addEventListener("load",g,(0,R.m$)(!0,this.removeOnAbort?.signal)),window.addEventListener("popstate",(function(){g(0,i>1)}),(0,R.m$)(!0,this.removeOnAbort?.signal)),this.abortHandler=this.#o,this.importAggregator()}#o(){this.removeOnAbort?.abort(),this.abortHandler=void 0}}],loaderType:"spa"})})()})();</script>
<meta name="viewport" content="width=device-width, initial-scale=1">

    

<meta property="og:image" content="https://cloud.xm-cdn.com/static/xm/common/logos/XM-logo.jpg">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KPSPFZ');</script>
<!-- End Google Tag Manager -->

<link rel="shortcut icon" type="image/x-icon" href="https://cloud.xm-cdn.com/static/common/icons/touch/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="https://cloud.xm-cdn.com/static/common/icons/touch/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://cloud.xm-cdn.com/static/common/icons/touch/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://cloud.xm-cdn.com/static/common/icons/touch/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon-precomposed" sizes="180x180" href="https://cloud.xm-cdn.com/static/common/icons/touch/apple-touch-icon-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://cloud.xm-cdn.com/static/common/icons/touch/apple-touch-icon-152x152-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://cloud.xm-cdn.com/static/common/icons/touch/apple-touch-icon-120x120-precomposed.png">
<style type="text/css">/*!
 * Generated using the Bootstrap Customizer (https://getbootstrap.com/docs/3.4/customize/)
 *//*!
 * Bootstrap v3.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:0;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{*,*:before,*:after{color:#000 !important;text-shadow:none !important;background:transparent !important;-webkit-box-shadow:none !important;box-shadow:none !important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}abbr[title]:after{content:" (" attr(title) ")"}a[href^="#"]:after,a[href^="javascript:"]:after{content:""}pre,blockquote{border:1px solid #999;page-break-inside:avoid}thead{display:table-header-group}tr,img{page-break-inside:avoid}img{max-width:100% !important}p,h2,h3{orphans:3;widows:3}h2,h3{page-break-after:avoid}.navbar{display:none}.btn>.caret,.dropup>.btn>.caret{border-top-color:#000 !important}.label{border:1px solid #000}.table{border-collapse:collapse !important}.table td,.table th{background-color:#fff !important}.table-bordered th,.table-bordered td{border:1px solid #ddd !important}}@font-face{font-family:"Glyphicons Halflings";src:url("https://cloud.xm-cdn.com/assets/fonts/bootstrap/glyphicons-halflings-regular.eot");src:url("https://cloud.xm-cdn.com/assets/fonts/bootstrap/glyphicons-halflings-regular.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/assets/fonts/bootstrap/glyphicons-halflings-regular.woff2") format("woff2"),url("https://cloud.xm-cdn.com/assets/fonts/bootstrap/glyphicons-halflings-regular.woff") format("woff"),url("https://cloud.xm-cdn.com/assets/fonts/bootstrap/glyphicons-halflings-regular.ttf") format("truetype"),url("https://cloud.xm-cdn.com/assets/fonts/bootstrap/glyphicons-halflings-regular.svg#glyphicons_halflingsregular") format("svg")}.glyphicon{position:relative;top:1px;display:inline-block;font-family:"Glyphicons Halflings";font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.glyphicon-asterisk:before{content:"\002a"}.glyphicon-plus:before{content:"\002b"}.glyphicon-euro:before,.glyphicon-eur:before{content:"\20ac"}.glyphicon-minus:before{content:"\2212"}.glyphicon-cloud:before{content:"\2601"}.glyphicon-envelope:before{content:"\2709"}.glyphicon-pencil:before{content:"\270f"}.glyphicon-glass:before{content:"\e001"}.glyphicon-music:before{content:"\e002"}.glyphicon-search:before{content:"\e003"}.glyphicon-heart:before{content:"\e005"}.glyphicon-star:before{content:"\e006"}.glyphicon-star-empty:before{content:"\e007"}.glyphicon-user:before{content:"\e008"}.glyphicon-film:before{content:"\e009"}.glyphicon-th-large:before{content:"\e010"}.glyphicon-th:before{content:"\e011"}.glyphicon-th-list:before{content:"\e012"}.glyphicon-ok:before{content:"\e013"}.glyphicon-remove:before{content:"\e014"}.glyphicon-zoom-in:before{content:"\e015"}.glyphicon-zoom-out:before{content:"\e016"}.glyphicon-off:before{content:"\e017"}.glyphicon-signal:before{content:"\e018"}.glyphicon-cog:before{content:"\e019"}.glyphicon-trash:before{content:"\e020"}.glyphicon-home:before{content:"\e021"}.glyphicon-file:before{content:"\e022"}.glyphicon-time:before{content:"\e023"}.glyphicon-road:before{content:"\e024"}.glyphicon-download-alt:before{content:"\e025"}.glyphicon-download:before{content:"\e026"}.glyphicon-upload:before{content:"\e027"}.glyphicon-inbox:before{content:"\e028"}.glyphicon-play-circle:before{content:"\e029"}.glyphicon-repeat:before{content:"\e030"}.glyphicon-refresh:before{content:"\e031"}.glyphicon-list-alt:before{content:"\e032"}.glyphicon-lock:before{content:"\e033"}.glyphicon-flag:before{content:"\e034"}.glyphicon-headphones:before{content:"\e035"}.glyphicon-volume-off:before{content:"\e036"}.glyphicon-volume-down:before{content:"\e037"}.glyphicon-volume-up:before{content:"\e038"}.glyphicon-qrcode:before{content:"\e039"}.glyphicon-barcode:before{content:"\e040"}.glyphicon-tag:before{content:"\e041"}.glyphicon-tags:before{content:"\e042"}.glyphicon-book:before{content:"\e043"}.glyphicon-bookmark:before{content:"\e044"}.glyphicon-print:before{content:"\e045"}.glyphicon-camera:before{content:"\e046"}.glyphicon-font:before{content:"\e047"}.glyphicon-bold:before{content:"\e048"}.glyphicon-italic:before{content:"\e049"}.glyphicon-text-height:before{content:"\e050"}.glyphicon-text-width:before{content:"\e051"}.glyphicon-align-left:before{content:"\e052"}.glyphicon-align-center:before{content:"\e053"}.glyphicon-align-right:before{content:"\e054"}.glyphicon-align-justify:before{content:"\e055"}.glyphicon-list:before{content:"\e056"}.glyphicon-indent-left:before{content:"\e057"}.glyphicon-indent-right:before{content:"\e058"}.glyphicon-facetime-video:before{content:"\e059"}.glyphicon-picture:before{content:"\e060"}.glyphicon-map-marker:before{content:"\e062"}.glyphicon-adjust:before{content:"\e063"}.glyphicon-tint:before{content:"\e064"}.glyphicon-edit:before{content:"\e065"}.glyphicon-share:before{content:"\e066"}.glyphicon-check:before{content:"\e067"}.glyphicon-move:before{content:"\e068"}.glyphicon-step-backward:before{content:"\e069"}.glyphicon-fast-backward:before{content:"\e070"}.glyphicon-backward:before{content:"\e071"}.glyphicon-play:before{content:"\e072"}.glyphicon-pause:before{content:"\e073"}.glyphicon-stop:before{content:"\e074"}.glyphicon-forward:before{content:"\e075"}.glyphicon-fast-forward:before{content:"\e076"}.glyphicon-step-forward:before{content:"\e077"}.glyphicon-eject:before{content:"\e078"}.glyphicon-chevron-left:before{content:"\e079"}.glyphicon-chevron-right:before{content:"\e080"}.glyphicon-plus-sign:before{content:"\e081"}.glyphicon-minus-sign:before{content:"\e082"}.glyphicon-remove-sign:before{content:"\e083"}.glyphicon-ok-sign:before{content:"\e084"}.glyphicon-question-sign:before{content:"\e085"}.glyphicon-info-sign:before{content:"\e086"}.glyphicon-screenshot:before{content:"\e087"}.glyphicon-remove-circle:before{content:"\e088"}.glyphicon-ok-circle:before{content:"\e089"}.glyphicon-ban-circle:before{content:"\e090"}.glyphicon-arrow-left:before{content:"\e091"}.glyphicon-arrow-right:before{content:"\e092"}.glyphicon-arrow-up:before{content:"\e093"}.glyphicon-arrow-down:before{content:"\e094"}.glyphicon-share-alt:before{content:"\e095"}.glyphicon-resize-full:before{content:"\e096"}.glyphicon-resize-small:before{content:"\e097"}.glyphicon-exclamation-sign:before{content:"\e101"}.glyphicon-gift:before{content:"\e102"}.glyphicon-leaf:before{content:"\e103"}.glyphicon-fire:before{content:"\e104"}.glyphicon-eye-open:before{content:"\e105"}.glyphicon-eye-close:before{content:"\e106"}.glyphicon-warning-sign:before{content:"\e107"}.glyphicon-plane:before{content:"\e108"}.glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}.glyphicon-cd:before{content:"\e201"}.glyphicon-save-file:before{content:"\e202"}.glyphicon-open-file:before{content:"\e203"}.glyphicon-level-up:before{content:"\e204"}.glyphicon-copy:before{content:"\e205"}.glyphicon-paste:before{content:"\e206"}.glyphicon-alert:before{content:"\e209"}.glyphicon-equalizer:before{content:"\e210"}.glyphicon-king:before{content:"\e211"}.glyphicon-queen:before{content:"\e212"}.glyphicon-pawn:before{content:"\e213"}.glyphicon-bishop:before{content:"\e214"}.glyphicon-knight:before{content:"\e215"}.glyphicon-baby-formula:before{content:"\e216"}.glyphicon-tent:before{content:"\26fa"}.glyphicon-blackboard:before{content:"\e218"}.glyphicon-bed:before{content:"\e219"}.glyphicon-apple:before{content:"\f8ff"}.glyphicon-erase:before{content:"\e221"}.glyphicon-hourglass:before{content:"\231b"}.glyphicon-lamp:before{content:"\e223"}.glyphicon-duplicate:before{content:"\e224"}.glyphicon-piggy-bank:before{content:"\e225"}.glyphicon-scissors:before{content:"\e226"}.glyphicon-bitcoin:before{content:"\e227"}.glyphicon-btc:before{content:"\e227"}.glyphicon-xbt:before{content:"\e227"}.glyphicon-yen:before{content:"\00a5"}.glyphicon-jpy:before{content:"\00a5"}.glyphicon-ruble:before{content:"\20bd"}.glyphicon-rub:before{content:"\20bd"}.glyphicon-scale:before{content:"\e230"}.glyphicon-ice-lolly:before{content:"\e231"}.glyphicon-ice-lolly-tasted:before{content:"\e232"}.glyphicon-education:before{content:"\e233"}.glyphicon-option-horizontal:before{content:"\e234"}.glyphicon-option-vertical:before{content:"\e235"}.glyphicon-menu-hamburger:before{content:"\e236"}.glyphicon-modal-window:before{content:"\e237"}.glyphicon-oil:before{content:"\e238"}.glyphicon-grain:before{content:"\e239"}.glyphicon-sunglasses:before{content:"\e240"}.glyphicon-text-size:before{content:"\e241"}.glyphicon-text-color:before{content:"\e242"}.glyphicon-text-background:before{content:"\e243"}.glyphicon-object-align-top:before{content:"\e244"}.glyphicon-object-align-bottom:before{content:"\e245"}.glyphicon-object-align-horizontal:before{content:"\e246"}.glyphicon-object-align-left:before{content:"\e247"}.glyphicon-object-align-vertical:before{content:"\e248"}.glyphicon-object-align-right:before{content:"\e249"}.glyphicon-triangle-right:before{content:"\e250"}.glyphicon-triangle-left:before{content:"\e251"}.glyphicon-triangle-bottom:before{content:"\e252"}.glyphicon-triangle-top:before{content:"\e253"}.glyphicon-console:before{content:"\e254"}.glyphicon-superscript:before{content:"\e255"}.glyphicon-subscript:before{content:"\e256"}.glyphicon-menu-left:before{content:"\e257"}.glyphicon-menu-right:before{content:"\e258"}.glyphicon-menu-down:before{content:"\e259"}.glyphicon-menu-up:before{content:"\e260"}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:hover,a:focus{color:#23527c;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.img-responsive,.thumbnail>img,.thumbnail a>img,.carousel-inner>.item>img,.carousel-inner>.item>a>img{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out;display:inline-block;max-width:100%;height:auto}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}[role="button"]{cursor:pointer}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1 small,h2 small,h3 small,h4 small,h5 small,h6 small,.h1 small,.h2 small,.h3 small,.h4 small,.h5 small,.h6 small,h1 .small,h2 .small,h3 .small,h4 .small,h5 .small,h6 .small,.h1 .small,.h2 .small,.h3 .small,.h4 .small,.h5 .small,.h6 .small{font-weight:400;line-height:1;color:#777}h1,.h1,h2,.h2,h3,.h3{margin-top:20px;margin-bottom:10px}h1 small,.h1 small,h2 small,.h2 small,h3 small,.h3 small,h1 .small,.h1 .small,h2 .small,.h2 .small,h3 .small,.h3 .small{font-size:65%}h4,.h4,h5,.h5,h6,.h6{margin-top:10px;margin-bottom:10px}h4 small,.h4 small,h5 small,.h5 small,h6 small,.h6 small,h4 .small,.h4 .small,h5 .small,.h5 .small,h6 .small,.h6 .small{font-size:75%}h1,.h1{font-size:36px}h2,.h2{font-size:30px}h3,.h3{font-size:24px}h4,.h4{font-size:18px}h5,.h5{font-size:14px}h6,.h6{font-size:12px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}@media(min-width:768px){.lead{font-size:21px}}small,.small{font-size:85%}mark,.mark{padding:.2em;background-color:#fcf8e3}.text-left{text-align:left}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}.text-nowrap{white-space:nowrap}.text-lowercase{text-transform:lowercase}.text-uppercase{text-transform:uppercase}.text-capitalize{text-transform:capitalize}.text-muted{color:#777}.text-primary{color:#337ab7}a.text-primary:hover,a.text-primary:focus{color:#286090}.text-success{color:#3c763d}a.text-success:hover,a.text-success:focus{color:#2b542c}.text-info{color:#31708f}a.text-info:hover,a.text-info:focus{color:#245269}.text-warning{color:#8a6d3b}a.text-warning:hover,a.text-warning:focus{color:#66512c}.text-danger{color:#a94442}a.text-danger:hover,a.text-danger:focus{color:#843534}.bg-primary{color:#fff;background-color:#337ab7}a.bg-primary:hover,a.bg-primary:focus{background-color:#286090}.bg-success{background-color:#dff0d8}a.bg-success:hover,a.bg-success:focus{background-color:#c1e2b3}.bg-info{background-color:#d9edf7}a.bg-info:hover,a.bg-info:focus{background-color:#afd9ee}.bg-warning{background-color:#fcf8e3}a.bg-warning:hover,a.bg-warning:focus{background-color:#f7ecb5}.bg-danger{background-color:#f2dede}a.bg-danger:hover,a.bg-danger:focus{background-color:#e4b9b9}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}ul,ol{margin-top:0;margin-bottom:10px}ul ul,ol ul,ul ol,ol ol{margin-bottom:0}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none;margin-left:-5px}.list-inline>li{display:inline-block;padding-right:5px;padding-left:5px}dl{margin-top:0;margin-bottom:20px}dt,dd{line-height:1.42857143}dt{font-weight:700}dd{margin-left:0}@media(min-width:768px){.dl-horizontal dt{float:left;width:160px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.dl-horizontal dd{margin-left:180px}}abbr[title],abbr[data-original-title]{cursor:help}.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eee}blockquote p:last-child,blockquote ul:last-child,blockquote ol:last-child{margin-bottom:0}blockquote footer,blockquote small,blockquote .small{display:block;font-size:80%;line-height:1.42857143;color:#777}blockquote footer:before,blockquote small:before,blockquote .small:before{content:"\2014 \00A0"}.blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;text-align:right;border-right:5px solid #eee;border-left:0}.blockquote-reverse footer:before,blockquote.pull-right footer:before,.blockquote-reverse small:before,blockquote.pull-right small:before,.blockquote-reverse .small:before,blockquote.pull-right .small:before{content:""}.blockquote-reverse footer:after,blockquote.pull-right footer:after,.blockquote-reverse small:after,blockquote.pull-right small:after,.blockquote-reverse .small:after,blockquote.pull-right .small:after{content:"\00A0 \2014"}address{margin-bottom:20px;font-style:normal;line-height:1.42857143}code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Courier New",monospace}code{padding:2px 4px;font-size:90%;color:#c7254e;background-color:#f9f2f4;border-radius:4px}kbd{padding:2px 4px;font-size:90%;color:#fff;background-color:#333;border-radius:3px;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,0.25);box-shadow:inset 0 -1px 0 rgba(0,0,0,0.25)}kbd kbd{padding:0;font-size:100%;font-weight:700;-webkit-box-shadow:none;box-shadow:none}pre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.42857143;color:#333;word-break:break-all;word-wrap:break-word;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px}pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;background-color:transparent;border-radius:0}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media(min-width:768px){.container{width:750px}}@media(min-width:992px){.container{width:970px}}@media(min-width:1200px){.container{width:1170px}}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.row-no-gutters{margin-right:0;margin-left:0}.row-no-gutters [class*="col-"]{padding-right:0;padding-left:0}.col-xs-1,.col-sm-1,.col-md-1,.col-lg-1,.col-xs-2,.col-sm-2,.col-md-2,.col-lg-2,.col-xs-3,.col-sm-3,.col-md-3,.col-lg-3,.col-xs-4,.col-sm-4,.col-md-4,.col-lg-4,.col-xs-5,.col-sm-5,.col-md-5,.col-lg-5,.col-xs-6,.col-sm-6,.col-md-6,.col-lg-6,.col-xs-7,.col-sm-7,.col-md-7,.col-lg-7,.col-xs-8,.col-sm-8,.col-md-8,.col-lg-8,.col-xs-9,.col-sm-9,.col-md-9,.col-lg-9,.col-xs-10,.col-sm-10,.col-md-10,.col-lg-10,.col-xs-11,.col-sm-11,.col-md-11,.col-lg-11,.col-xs-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11,.col-xs-12{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media(min-width:768px){.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media(min-width:992px){.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media(min-width:1200px){.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}table{background-color:transparent}table col[class*="col-"]{position:static;display:table-column;float:none}table td[class*="col-"],table th[class*="col-"]{position:static;display:table-cell;float:none}caption{padding-top:8px;padding-bottom:8px;color:#777;text-align:left}th{text-align:left}.table{width:100%;max-width:100%;margin-bottom:20px}.table>thead>tr>th,.table>tbody>tr>th,.table>tfoot>tr>th,.table>thead>tr>td,.table>tbody>tr>td,.table>tfoot>tr>td{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #ddd}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>th,.table>caption+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>td,.table>thead:first-child>tr:first-child>td{border-top:0}.table>tbody+tbody{border-top:2px solid #ddd}.table .table{background-color:#fff}.table-condensed>thead>tr>th,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>tbody>tr>td,.table-condensed>tfoot>tr>td{padding:5px}.table-bordered{border:1px solid #ddd}.table-bordered>thead>tr>th,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>tbody>tr>td,.table-bordered>tfoot>tr>td{border:1px solid #ddd}.table-bordered>thead>tr>th,.table-bordered>thead>tr>td{border-bottom-width:2px}.table-striped>tbody>tr:nth-of-type(odd){background-color:#f9f9f9}.table-hover>tbody>tr:hover{background-color:#f5f5f5}.table>thead>tr>td.active,.table>tbody>tr>td.active,.table>tfoot>tr>td.active,.table>thead>tr>th.active,.table>tbody>tr>th.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>tbody>tr.active>td,.table>tfoot>tr.active>td,.table>thead>tr.active>th,.table>tbody>tr.active>th,.table>tfoot>tr.active>th{background-color:#f5f5f5}.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover,.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr.active:hover>th{background-color:#e8e8e8}.table>thead>tr>td.success,.table>tbody>tr>td.success,.table>tfoot>tr>td.success,.table>thead>tr>th.success,.table>tbody>tr>th.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>tbody>tr.success>td,.table>tfoot>tr.success>td,.table>thead>tr.success>th,.table>tbody>tr.success>th,.table>tfoot>tr.success>th{background-color:#dff0d8}.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover,.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr.success:hover>th{background-color:#d0e9c6}.table>thead>tr>td.info,.table>tbody>tr>td.info,.table>tfoot>tr>td.info,.table>thead>tr>th.info,.table>tbody>tr>th.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>tbody>tr.info>td,.table>tfoot>tr.info>td,.table>thead>tr.info>th,.table>tbody>tr.info>th,.table>tfoot>tr.info>th{background-color:#d9edf7}.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover,.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr.info:hover>th{background-color:#c4e3f3}.table>thead>tr>td.warning,.table>tbody>tr>td.warning,.table>tfoot>tr>td.warning,.table>thead>tr>th.warning,.table>tbody>tr>th.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>tbody>tr.warning>td,.table>tfoot>tr.warning>td,.table>thead>tr.warning>th,.table>tbody>tr.warning>th,.table>tfoot>tr.warning>th{background-color:#fcf8e3}.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover,.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr.warning:hover>th{background-color:#faf2cc}.table>thead>tr>td.danger,.table>tbody>tr>td.danger,.table>tfoot>tr>td.danger,.table>thead>tr>th.danger,.table>tbody>tr>th.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>tbody>tr.danger>td,.table>tfoot>tr.danger>td,.table>thead>tr.danger>th,.table>tbody>tr.danger>th,.table>tfoot>tr.danger>th{background-color:#f2dede}.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover,.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr.danger:hover>th{background-color:#ebcccc}.table-responsive{min-height:.01%;overflow-x:auto}@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>thead>tr>th,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tfoot>tr>td{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>thead>tr>th:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.table-responsive>.table-bordered>thead>tr>th:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>th,.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>td{border-bottom:0}}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border:0;border-bottom:1px solid #e5e5e5}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}input[type="search"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-appearance:none;appearance:none}input[type="radio"],input[type="checkbox"]{margin:4px 0 0;margin-top:1px \9;line-height:normal}input[type="radio"][disabled],input[type="checkbox"][disabled],input[type="radio"].disabled,input[type="checkbox"].disabled,fieldset[disabled] input[type="radio"],fieldset[disabled] input[type="checkbox"]{cursor:not-allowed}input[type="file"]{display:block}input[type="range"]{display:block;width:100%}select[multiple],select[size]{height:auto}input[type="file"]:focus,input[type="radio"]:focus,input[type="checkbox"]:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}output{display:block;padding-top:7px;font-size:14px;line-height:1.42857143;color:#555}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,0.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,0.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control::-ms-expand{background-color:transparent;border:0}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{background-color:#eee;opacity:1}.form-control[disabled],fieldset[disabled] .form-control{cursor:not-allowed}textarea.form-control{height:auto}@media screen and (-webkit-min-device-pixel-ratio:0){input[type="date"].form-control,input[type="time"].form-control,input[type="datetime-local"].form-control,input[type="month"].form-control{line-height:34px}input[type="date"].input-sm,input[type="time"].input-sm,input[type="datetime-local"].input-sm,input[type="month"].input-sm,.input-group-sm input[type="date"],.input-group-sm input[type="time"],.input-group-sm input[type="datetime-local"],.input-group-sm input[type="month"]{line-height:30px}input[type="date"].input-lg,input[type="time"].input-lg,input[type="datetime-local"].input-lg,input[type="month"].input-lg,.input-group-lg input[type="date"],.input-group-lg input[type="time"],.input-group-lg input[type="datetime-local"],.input-group-lg input[type="month"]{line-height:46px}}.form-group{margin-bottom:15px}.radio,.checkbox{position:relative;display:block;margin-top:10px;margin-bottom:10px}.radio.disabled label,.checkbox.disabled label,fieldset[disabled] .radio label,fieldset[disabled] .checkbox label{cursor:not-allowed}.radio label,.checkbox label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}.radio input[type="radio"],.radio-inline input[type="radio"],.checkbox input[type="checkbox"],.checkbox-inline input[type="checkbox"]{position:absolute;margin-top:4px \9;margin-left:-20px}.radio+.radio,.checkbox+.checkbox{margin-top:-5px}.radio-inline,.checkbox-inline{position:relative;display:inline-block;padding-left:20px;margin-bottom:0;font-weight:400;vertical-align:middle;cursor:pointer}.radio-inline.disabled,.checkbox-inline.disabled,fieldset[disabled] .radio-inline,fieldset[disabled] .checkbox-inline{cursor:not-allowed}.radio-inline+.radio-inline,.checkbox-inline+.checkbox-inline{margin-top:0;margin-left:10px}.form-control-static{min-height:34px;padding-top:7px;padding-bottom:7px;margin-bottom:0}.form-control-static.input-lg,.form-control-static.input-sm{padding-right:0;padding-left:0}.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm{height:30px;line-height:30px}textarea.input-sm,select[multiple].input-sm{height:auto}.form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.form-group-sm select.form-control{height:30px;line-height:30px}.form-group-sm textarea.form-control,.form-group-sm select[multiple].form-control{height:auto}.form-group-sm .form-control-static{height:30px;min-height:32px;padding:6px 10px;font-size:12px;line-height:1.5}.input-lg{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-lg{height:46px;line-height:46px}textarea.input-lg,select[multiple].input-lg{height:auto}.form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.form-group-lg select.form-control{height:46px;line-height:46px}.form-group-lg textarea.form-control,.form-group-lg select[multiple].form-control{height:auto}.form-group-lg .form-control-static{height:46px;min-height:38px;padding:11px 16px;font-size:18px;line-height:1.3333333}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.input-lg+.form-control-feedback,.input-group-lg+.form-control-feedback,.form-group-lg .form-control+.form-control-feedback{width:46px;height:46px;line-height:46px}.input-sm+.form-control-feedback,.input-group-sm+.form-control-feedback,.form-group-sm .form-control+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .help-block,.has-success .control-label,.has-success .radio,.has-success .checkbox,.has-success .radio-inline,.has-success .checkbox-inline,.has-success.radio label,.has-success.checkbox label,.has-success.radio-inline label,.has-success.checkbox-inline label{color:#3c763d}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;background-color:#dff0d8;border-color:#3c763d}.has-success .form-control-feedback{color:#3c763d}.has-warning .help-block,.has-warning .control-label,.has-warning .radio,.has-warning .checkbox,.has-warning .radio-inline,.has-warning .checkbox-inline,.has-warning.radio label,.has-warning.checkbox label,.has-warning.radio-inline label,.has-warning.checkbox-inline label{color:#8a6d3b}.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #c0a16b}.has-warning .input-group-addon{color:#8a6d3b;background-color:#fcf8e3;border-color:#8a6d3b}.has-warning .form-control-feedback{color:#8a6d3b}.has-error .help-block,.has-error .control-label,.has-error .radio,.has-error .checkbox,.has-error .radio-inline,.has-error .checkbox-inline,.has-error.radio label,.has-error.checkbox label,.has-error.radio-inline label,.has-error.checkbox-inline label{color:#a94442}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;background-color:#f2dede;border-color:#a94442}.has-error .form-control-feedback{color:#a94442}.has-feedback label~.form-control-feedback{top:25px}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media(min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-static{display:inline-block}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn,.form-inline .input-group .form-control{width:auto}.form-inline .input-group>.form-control{width:100%}.form-inline .control-label{margin-bottom:0;vertical-align:middle}.form-inline .radio,.form-inline .checkbox{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .radio label,.form-inline .checkbox label{padding-left:0}.form-inline .radio input[type="radio"],.form-inline .checkbox input[type="checkbox"]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback{top:0}}.form-horizontal .radio,.form-horizontal .checkbox,.form-horizontal .radio-inline,.form-horizontal .checkbox-inline{padding-top:7px;margin-top:0;margin-bottom:0}.form-horizontal .radio,.form-horizontal .checkbox{min-height:27px}.form-horizontal .form-group{margin-right:-15px;margin-left:-15px}@media(min-width:768px){.form-horizontal .control-label{padding-top:7px;margin-bottom:0;text-align:right}}.form-horizontal .has-feedback .form-control-feedback{right:15px}@media(min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:11px;font-size:18px}}@media(min-width:768px){.form-horizontal .form-group-sm .control-label{padding-top:6px;font-size:12px}}.btn{display:inline-block;margin-bottom:0;font-weight:normal;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;padding:6px 12px;font-size:14px;line-height:1.42857143;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.btn:focus,.btn:active:focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn.active.focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn:hover,.btn:focus,.btn.focus{color:#333;text-decoration:none}.btn:active,.btn.active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}.btn.disabled,.btn[disabled],fieldset[disabled] .btn{cursor:not-allowed;filter:alpha(opacity=65);opacity:.65;-webkit-box-shadow:none;box-shadow:none}a.btn.disabled,fieldset[disabled] a.btn{pointer-events:none}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default:focus,.btn-default.focus{color:#333;background-color:#e6e6e6;border-color:#8c8c8c}.btn-default:hover{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default:active,.btn-default.active,.open>.dropdown-toggle.btn-default{color:#333;background-color:#e6e6e6;background-image:none;border-color:#adadad}.btn-default:active:hover,.btn-default.active:hover,.open>.dropdown-toggle.btn-default:hover,.btn-default:active:focus,.btn-default.active:focus,.open>.dropdown-toggle.btn-default:focus,.btn-default:active.focus,.btn-default.active.focus,.open>.dropdown-toggle.btn-default.focus{color:#333;background-color:#d4d4d4;border-color:#8c8c8c}.btn-default.disabled:hover,.btn-default[disabled]:hover,fieldset[disabled] .btn-default:hover,.btn-default.disabled:focus,.btn-default[disabled]:focus,fieldset[disabled] .btn-default:focus,.btn-default.disabled.focus,.btn-default[disabled].focus,fieldset[disabled] .btn-default.focus{background-color:#fff;border-color:#ccc}.btn-default .badge{color:#fff;background-color:#333}.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}.btn-primary:focus,.btn-primary.focus{color:#fff;background-color:#286090;border-color:#122b40}.btn-primary:hover{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary:active,.btn-primary.active,.open>.dropdown-toggle.btn-primary{color:#fff;background-color:#286090;background-image:none;border-color:#204d74}.btn-primary:active:hover,.btn-primary.active:hover,.open>.dropdown-toggle.btn-primary:hover,.btn-primary:active:focus,.btn-primary.active:focus,.open>.dropdown-toggle.btn-primary:focus,.btn-primary:active.focus,.btn-primary.active.focus,.open>.dropdown-toggle.btn-primary.focus{color:#fff;background-color:#204d74;border-color:#122b40}.btn-primary.disabled:hover,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary:hover,.btn-primary.disabled:focus,.btn-primary[disabled]:focus,fieldset[disabled] .btn-primary:focus,.btn-primary.disabled.focus,.btn-primary[disabled].focus,fieldset[disabled] .btn-primary.focus{background-color:#337ab7;border-color:#2e6da4}.btn-primary .badge{color:#337ab7;background-color:#fff}.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}.btn-success:focus,.btn-success.focus{color:#fff;background-color:#449d44;border-color:#255625}.btn-success:hover{color:#fff;background-color:#449d44;border-color:#398439}.btn-success:active,.btn-success.active,.open>.dropdown-toggle.btn-success{color:#fff;background-color:#449d44;background-image:none;border-color:#398439}.btn-success:active:hover,.btn-success.active:hover,.open>.dropdown-toggle.btn-success:hover,.btn-success:active:focus,.btn-success.active:focus,.open>.dropdown-toggle.btn-success:focus,.btn-success:active.focus,.btn-success.active.focus,.open>.dropdown-toggle.btn-success.focus{color:#fff;background-color:#398439;border-color:#255625}.btn-success.disabled:hover,.btn-success[disabled]:hover,fieldset[disabled] .btn-success:hover,.btn-success.disabled:focus,.btn-success[disabled]:focus,fieldset[disabled] .btn-success:focus,.btn-success.disabled.focus,.btn-success[disabled].focus,fieldset[disabled] .btn-success.focus{background-color:#5cb85c;border-color:#4cae4c}.btn-success .badge{color:#5cb85c;background-color:#fff}.btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}.btn-info:focus,.btn-info.focus{color:#fff;background-color:#31b0d5;border-color:#1b6d85}.btn-info:hover{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info:active,.btn-info.active,.open>.dropdown-toggle.btn-info{color:#fff;background-color:#31b0d5;background-image:none;border-color:#269abc}.btn-info:active:hover,.btn-info.active:hover,.open>.dropdown-toggle.btn-info:hover,.btn-info:active:focus,.btn-info.active:focus,.open>.dropdown-toggle.btn-info:focus,.btn-info:active.focus,.btn-info.active.focus,.open>.dropdown-toggle.btn-info.focus{color:#fff;background-color:#269abc;border-color:#1b6d85}.btn-info.disabled:hover,.btn-info[disabled]:hover,fieldset[disabled] .btn-info:hover,.btn-info.disabled:focus,.btn-info[disabled]:focus,fieldset[disabled] .btn-info:focus,.btn-info.disabled.focus,.btn-info[disabled].focus,fieldset[disabled] .btn-info.focus{background-color:#5bc0de;border-color:#46b8da}.btn-info .badge{color:#5bc0de;background-color:#fff}.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}.btn-warning:focus,.btn-warning.focus{color:#fff;background-color:#ec971f;border-color:#985f0d}.btn-warning:hover{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning:active,.btn-warning.active,.open>.dropdown-toggle.btn-warning{color:#fff;background-color:#ec971f;background-image:none;border-color:#d58512}.btn-warning:active:hover,.btn-warning.active:hover,.open>.dropdown-toggle.btn-warning:hover,.btn-warning:active:focus,.btn-warning.active:focus,.open>.dropdown-toggle.btn-warning:focus,.btn-warning:active.focus,.btn-warning.active.focus,.open>.dropdown-toggle.btn-warning.focus{color:#fff;background-color:#d58512;border-color:#985f0d}.btn-warning.disabled:hover,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning:hover,.btn-warning.disabled:focus,.btn-warning[disabled]:focus,fieldset[disabled] .btn-warning:focus,.btn-warning.disabled.focus,.btn-warning[disabled].focus,fieldset[disabled] .btn-warning.focus{background-color:#f0ad4e;border-color:#eea236}.btn-warning .badge{color:#f0ad4e;background-color:#fff}.btn-danger{color:#fff;background-color:#d9534f;border-color:#d43f3a}.btn-danger:focus,.btn-danger.focus{color:#fff;background-color:#c9302c;border-color:#761c19}.btn-danger:hover{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger:active,.btn-danger.active,.open>.dropdown-toggle.btn-danger{color:#fff;background-color:#c9302c;background-image:none;border-color:#ac2925}.btn-danger:active:hover,.btn-danger.active:hover,.open>.dropdown-toggle.btn-danger:hover,.btn-danger:active:focus,.btn-danger.active:focus,.open>.dropdown-toggle.btn-danger:focus,.btn-danger:active.focus,.btn-danger.active.focus,.open>.dropdown-toggle.btn-danger.focus{color:#fff;background-color:#ac2925;border-color:#761c19}.btn-danger.disabled:hover,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger:hover,.btn-danger.disabled:focus,.btn-danger[disabled]:focus,fieldset[disabled] .btn-danger:focus,.btn-danger.disabled.focus,.btn-danger[disabled].focus,fieldset[disabled] .btn-danger.focus{background-color:#d9534f;border-color:#d43f3a}.btn-danger .badge{color:#d9534f;background-color:#fff}.btn-link{font-weight:400;color:#337ab7;border-radius:0}.btn-link,.btn-link:active,.btn-link.active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:hover,.btn-link:focus,.btn-link:active{border-color:transparent}.btn-link:hover,.btn-link:focus{color:#23527c;text-decoration:underline;background-color:transparent}.btn-link[disabled]:hover,fieldset[disabled] .btn-link:hover,.btn-link[disabled]:focus,fieldset[disabled] .btn-link:focus{color:#777;text-decoration:none}.btn-lg,.btn-group-lg>.btn{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.btn-sm,.btn-group-sm>.btn{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.btn-xs,.btn-group-xs>.btn{padding:1px 5px;font-size:12px;line-height:1.5;border-radius:3px}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:5px}input[type="submit"].btn-block,input[type="reset"].btn-block,input[type="button"].btn-block{width:100%}.fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapse{display:none}.collapse.in{display:block}tr.collapse.in{display:table-row}tbody.collapse.in{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition-property:height,visibility;-o-transition-property:height,visibility;transition-property:height,visibility;-webkit-transition-duration:.35s;-o-transition-duration:.35s;transition-duration:.35s;-webkit-transition-timing-function:ease;-o-transition-timing-function:ease;transition-timing-function:ease}.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px dashed;border-top:4px solid \9;border-right:4px solid transparent;border-left:4px solid transparent}.dropup,.dropdown{position:relative}.dropdown-toggle:focus{outline:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:14px;text-align:left;list-style:none;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,0.175);box-shadow:0 6px 12px rgba(0,0,0,0.175)}.dropdown-menu.pull-right{right:0;left:auto}.dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.dropdown-menu>li>a{display:block;padding:3px 20px;clear:both;font-weight:400;line-height:1.42857143;color:#333;white-space:nowrap}.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus{color:#262626;text-decoration:none;background-color:#f5f5f5}.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus{color:#fff;text-decoration:none;background-color:#337ab7;outline:0}.dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:hover,.dropdown-menu>.disabled>a:focus{color:#777}.dropdown-menu>.disabled>a:hover,.dropdown-menu>.disabled>a:focus{text-decoration:none;cursor:not-allowed;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false)}.open>.dropdown-menu{display:block}.open>a{outline:0}.dropdown-menu-right{right:0;left:auto}.dropdown-menu-left{right:auto;left:0}.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.42857143;color:#777;white-space:nowrap}.dropdown-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:990}.pull-right>.dropdown-menu{right:0;left:auto}.dropup .caret,.navbar-fixed-bottom .dropdown .caret{content:"";border-top:0;border-bottom:4px dashed;border-bottom:4px solid \9}.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:2px}@media(min-width:768px){.navbar-right .dropdown-menu{right:0;left:auto}.navbar-right .dropdown-menu-left{right:auto;left:0}}.btn-group,.btn-group-vertical{position:relative;display:inline-block;vertical-align:middle}.btn-group>.btn,.btn-group-vertical>.btn{position:relative;float:left}.btn-group>.btn:hover,.btn-group-vertical>.btn:hover,.btn-group>.btn:focus,.btn-group-vertical>.btn:focus,.btn-group>.btn:active,.btn-group-vertical>.btn:active,.btn-group>.btn.active,.btn-group-vertical>.btn.active{z-index:2}.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group{margin-left:-1px}.btn-toolbar{margin-left:-5px}.btn-toolbar .btn,.btn-toolbar .btn-group,.btn-toolbar .input-group{float:left}.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group{margin-left:5px}.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}.btn-group>.btn:first-child{margin-left:0}.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.btn-group>.btn-group{float:left}.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-bottom-left-radius:0}.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{outline:0}.btn-group>.btn+.dropdown-toggle{padding-right:8px;padding-left:8px}.btn-group>.btn-lg+.dropdown-toggle{padding-right:12px;padding-left:12px}.btn-group.open .dropdown-toggle{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}.btn-group.open .dropdown-toggle.btn-link{-webkit-box-shadow:none;box-shadow:none}.btn .caret{margin-left:0}.btn-lg .caret{border-width:5px 5px 0;border-bottom-width:0}.dropup .btn-lg .caret{border-width:0 5px 5px}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn{display:block;float:none;width:100%;max-width:100%}.btn-group-vertical>.btn-group>.btn{float:none}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn:not(:first-child):not(:last-child){border-radius:0}.btn-group-vertical>.btn:first-child:not(:last-child){border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn:last-child:not(:first-child){border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-top-right-radius:0}.btn-group-justified{display:table;width:100%;table-layout:fixed;border-collapse:separate}.btn-group-justified>.btn,.btn-group-justified>.btn-group{display:table-cell;float:none;width:1%}.btn-group-justified>.btn-group .btn{width:100%}.btn-group-justified>.btn-group .dropdown-menu{left:auto}[data-toggle="buttons"]>.btn input[type="radio"],[data-toggle="buttons"]>.btn-group>.btn input[type="radio"],[data-toggle="buttons"]>.btn input[type="checkbox"],[data-toggle="buttons"]>.btn-group>.btn input[type="checkbox"]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative;display:table;border-collapse:separate}.input-group[class*="col-"]{float:none;padding-right:0;padding-left:0}.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group .form-control:focus{z-index:3}.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{height:46px;line-height:46px}textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn,select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn{height:auto}.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:30px;line-height:30px}textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn,select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn{height:auto}.input-group-addon,.input-group-btn,.input-group .form-control{display:table-cell}.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child),.input-group .form-control:not(:first-child):not(:last-child){border-radius:0}.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group-addon{padding:6px 12px;font-size:14px;font-weight:400;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}.input-group-addon.input-sm{padding:5px 10px;font-size:12px;border-radius:3px}.input-group-addon.input-lg{padding:10px 16px;font-size:18px;border-radius:6px}.input-group-addon input[type="radio"],.input-group-addon input[type="checkbox"]{margin-top:0}.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group-btn:last-child>.btn-group:not(:last-child)>.btn{border-top-right-radius:0;border-bottom-right-radius:0}.input-group-addon:first-child{border-right:0}.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:first-child>.btn-group:not(:first-child)>.btn{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-addon:last-child{border-left:0}.input-group-btn{position:relative;font-size:0;white-space:nowrap}.input-group-btn>.btn{position:relative}.input-group-btn>.btn+.btn{margin-left:-1px}.input-group-btn>.btn:hover,.input-group-btn>.btn:focus,.input-group-btn>.btn:active{z-index:2}.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{margin-right:-1px}.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group{z-index:2;margin-left:-1px}.nav{padding-left:0;margin-bottom:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.nav>li>a:hover,.nav>li>a:focus{text-decoration:none;background-color:#eee}.nav>li.disabled>a{color:#777}.nav>li.disabled>a:hover,.nav>li.disabled>a:focus{color:#777;text-decoration:none;cursor:not-allowed;background-color:transparent}.nav .open>a,.nav .open>a:hover,.nav .open>a:focus{background-color:#eee;border-color:#337ab7}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:hover,.nav-tabs>li.active>a:focus{color:#555;cursor:default;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media(min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a:focus{border:1px solid #ddd}@media(min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a:focus{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:hover,.nav-pills>li.active>a:focus{color:#fff;background-color:#337ab7}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media(min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:hover,.nav-tabs-justified>.active>a:focus{border:1px solid #ddd}@media(min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:hover,.nav-tabs-justified>.active>a:focus{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media(min-width:768px){.navbar{border-radius:4px}}@media(min-width:768px){.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.1);box-shadow:inset 0 1px 0 rgba(255,255,255,0.1);-webkit-overflow-scrolling:touch}.navbar-collapse.in{overflow-y:auto}@media(min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block !important;height:auto !important;padding-bottom:0;overflow:visible !important}.navbar-collapse.in{overflow-y:visible}.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{padding-right:0;padding-left:0}}.navbar-fixed-top,.navbar-fixed-bottom{position:fixed;right:0;left:0;z-index:1030}.navbar-fixed-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{max-height:340px}@media(max-device-width:480px) and (orientation:landscape){.navbar-fixed-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{max-height:200px}}@media(min-width:768px){.navbar-fixed-top,.navbar-fixed-bottom{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.container>.navbar-header,.container-fluid>.navbar-header,.container>.navbar-collapse,.container-fluid>.navbar-collapse{margin-right:-15px;margin-left:-15px}@media(min-width:768px){.container>.navbar-header,.container-fluid>.navbar-header,.container>.navbar-collapse,.container-fluid>.navbar-collapse{margin-right:0;margin-left:0}}.navbar-static-top{z-index:1000;border-width:0 0 1px}@media(min-width:768px){.navbar-static-top{border-radius:0}}.navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px}.navbar-brand:hover,.navbar-brand:focus{text-decoration:none}.navbar-brand>img{display:block}@media(min-width:768px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-right:15px;margin-top:8px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media(min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media(max-width:767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-nav .open .dropdown-menu>li>a,.navbar-nav .open .dropdown-menu .dropdown-header{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:hover,.navbar-nav .open .dropdown-menu>li>a:focus{background-image:none}}@media(min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}.navbar-form{padding:10px 15px;margin-right:-15px;margin-left:-15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(255,255,255,0.1);box-shadow:inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(255,255,255,0.1);margin-top:8px;margin-bottom:8px}@media(min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.navbar-form .form-control-static{display:inline-block}.navbar-form .input-group{display:inline-table;vertical-align:middle}.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn,.navbar-form .input-group .form-control{width:auto}.navbar-form .input-group>.form-control{width:100%}.navbar-form .control-label{margin-bottom:0;vertical-align:middle}.navbar-form .radio,.navbar-form .checkbox{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.navbar-form .radio label,.navbar-form .checkbox label{padding-left:0}.navbar-form .radio input[type="radio"],.navbar-form .checkbox input[type="checkbox"]{position:relative;margin-left:0}.navbar-form .has-feedback .form-control-feedback{top:0}}@media(max-width:767px){.navbar-form .form-group{margin-bottom:5px}.navbar-form .form-group:last-child{margin-bottom:0}}@media(min-width:768px){.navbar-form{width:auto;padding-top:0;padding-bottom:0;margin-right:0;margin-left:0;border:0;-webkit-box-shadow:none;box-shadow:none}}.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-left-radius:0;border-top-right-radius:0}.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{margin-bottom:0;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-btn.btn-sm{margin-top:10px;margin-bottom:10px}.navbar-btn.btn-xs{margin-top:14px;margin-bottom:14px}.navbar-text{margin-top:15px;margin-bottom:15px}@media(min-width:768px){.navbar-text{float:left;margin-right:15px;margin-left:15px}}@media(min-width:768px){.navbar-left{float:left !important}.navbar-right{float:right !important;margin-right:-15px}.navbar-right~.navbar-right{margin-right:0}}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-brand:hover,.navbar-default .navbar-brand:focus{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-text{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-nav>li>a:hover,.navbar-default .navbar-nav>li>a:focus{color:#333;background-color:transparent}.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:hover,.navbar-default .navbar-nav>.active>a:focus{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:hover,.navbar-default .navbar-nav>.disabled>a:focus{color:#ccc;background-color:transparent}.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:hover,.navbar-default .navbar-nav>.open>a:focus{color:#555;background-color:#e7e7e7}@media(max-width:767px){.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#777}.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus{color:#333;background-color:transparent}.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus{color:#ccc;background-color:transparent}}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:hover,.navbar-default .navbar-toggle:focus{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#e7e7e7}.navbar-default .navbar-link{color:#777}.navbar-default .navbar-link:hover{color:#333}.navbar-default .btn-link{color:#777}.navbar-default .btn-link:hover,.navbar-default .btn-link:focus{color:#333}.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:hover,.navbar-default .btn-link[disabled]:focus,fieldset[disabled] .navbar-default .btn-link:focus{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand{color:#9d9d9d}.navbar-inverse .navbar-brand:hover,.navbar-inverse .navbar-brand:focus{color:#fff;background-color:transparent}.navbar-inverse .navbar-text{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a:hover,.navbar-inverse .navbar-nav>li>a:focus{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:hover,.navbar-inverse .navbar-nav>.active>a:focus{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:hover,.navbar-inverse .navbar-nav>.disabled>a:focus{color:#444;background-color:transparent}.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:hover,.navbar-inverse .navbar-nav>.open>a:focus{color:#fff;background-color:#080808}@media(max-width:767px){.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu .divider{background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus{color:#444;background-color:transparent}}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:hover,.navbar-inverse .navbar-toggle:focus{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#101010}.navbar-inverse .navbar-link{color:#9d9d9d}.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link{color:#9d9d9d}.navbar-inverse .btn-link:hover,.navbar-inverse .btn-link:focus{color:#fff}.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:hover,.navbar-inverse .btn-link[disabled]:focus,fieldset[disabled] .navbar-inverse .btn-link:focus{color:#444}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.breadcrumb>li{display:inline-block}.breadcrumb>li+li:before{padding:0 5px;color:#ccc;content:"/\00a0"}.breadcrumb>.active{color:#777}.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#337ab7;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li>a:hover,.pagination>li>span:hover,.pagination>li>a:focus,.pagination>li>span:focus{z-index:2;color:#23527c;background-color:#eee;border-color:#ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>.active>a,.pagination>.active>span,.pagination>.active>a:hover,.pagination>.active>span:hover,.pagination>.active>a:focus,.pagination>.active>span:focus{z-index:3;color:#fff;cursor:default;background-color:#337ab7;border-color:#337ab7}.pagination>.disabled>span,.pagination>.disabled>span:hover,.pagination>.disabled>span:focus,.pagination>.disabled>a,.pagination>.disabled>a:hover,.pagination>.disabled>a:focus{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}.pager{padding-left:0;margin:20px 0;text-align:center;list-style:none}.pager li{display:inline}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}.pager li>a:hover,.pager li>a:focus{text-decoration:none;background-color:#eee}.pager .next>a,.pager .next>span{float:right}.pager .previous>a,.pager .previous>span{float:left}.pager .disabled>a,.pager .disabled>a:hover,.pager .disabled>a:focus,.pager .disabled>span{color:#777;cursor:not-allowed;background-color:#fff}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.label:hover,a.label:focus{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:hover,.label-default[href]:focus{background-color:#5e5e5e}.label-primary{background-color:#337ab7}.label-primary[href]:hover,.label-primary[href]:focus{background-color:#286090}.label-success{background-color:#5cb85c}.label-success[href]:hover,.label-success[href]:focus{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:hover,.label-info[href]:focus{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:hover,.label-warning[href]:focus{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:hover,.label-danger[href]:focus{background-color:#c9302c}.badge{display:inline-block;min-width:10px;padding:3px 7px;font-size:12px;font-weight:bold;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:middle;background-color:#777;border-radius:10px}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.btn-xs .badge,.btn-group-xs>.btn .badge{top:0;padding:1px 5px}a.badge:hover,a.badge:focus{color:#fff;text-decoration:none;cursor:pointer}.list-group-item.active>.badge,.nav-pills>.active>a>.badge{color:#337ab7;background-color:#fff}.list-group-item>.badge{float:right}.list-group-item>.badge+.badge{margin-right:5px}.nav-pills>li>a>.badge{margin-left:3px}.jumbotron{padding-top:30px;padding-bottom:30px;margin-bottom:30px;color:inherit;background-color:#eee}.jumbotron h1,.jumbotron .h1{color:inherit}.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}.jumbotron>hr{border-top-color:#d5d5d5}.container .jumbotron,.container-fluid .jumbotron{padding-right:15px;padding-left:15px;border-radius:6px}.jumbotron .container{max-width:100%}@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}.container .jumbotron,.container-fluid .jumbotron{padding-right:60px;padding-left:60px}.jumbotron h1,.jumbotron .h1{font-size:63px}}.thumbnail{display:block;padding:4px;margin-bottom:20px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:border .2s ease-in-out;-o-transition:border .2s ease-in-out;transition:border .2s ease-in-out}.thumbnail>img,.thumbnail a>img{margin-right:auto;margin-left:auto}a.thumbnail:hover,a.thumbnail:focus,a.thumbnail.active{border-color:#337ab7}.thumbnail .caption{padding:9px;color:#333}.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}.alert h4{margin-top:0;color:inherit}.alert .alert-link{font-weight:bold}.alert>p,.alert>ul{margin-bottom:0}.alert>p+p{margin-top:5px}.alert-dismissable,.alert-dismissible{padding-right:35px}.alert-dismissable .close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}.alert-success{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.alert-success hr{border-top-color:#c9e2b3}.alert-success .alert-link{color:#2b542c}.alert-info{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.alert-info hr{border-top-color:#a6e1ec}.alert-info .alert-link{color:#245269}.alert-warning{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.alert-warning hr{border-top-color:#f7e1b5}.alert-warning .alert-link{color:#66512c}.alert-danger{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.alert-danger hr{border-top-color:#e4b9c0}.alert-danger .alert-link{color:#843534}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.progress{height:20px;margin-bottom:20px;overflow:hidden;background-color:#f5f5f5;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);box-shadow:inset 0 1px 2px rgba(0,0,0,0.1)}.progress-bar{float:left;width:0;height:100%;font-size:12px;line-height:20px;color:#fff;text-align:center;background-color:#337ab7;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);-webkit-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease}.progress-striped .progress-bar,.progress-bar-striped{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);-webkit-background-size:40px 40px;background-size:40px 40px}.progress.active .progress-bar,.progress-bar.active{-webkit-animation:progress-bar-stripes 2s linear infinite;-o-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}.progress-bar-success{background-color:#5cb85c}.progress-striped .progress-bar-success{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.progress-bar-info{background-color:#5bc0de}.progress-striped .progress-bar-info{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.progress-bar-warning{background-color:#f0ad4e}.progress-striped .progress-bar-warning{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.progress-bar-danger{background-color:#d9534f}.progress-striped .progress-bar-danger{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.media{margin-top:15px}.media:first-child{margin-top:0}.media,.media-body{overflow:hidden;zoom:1}.media-body{width:10000px}.media-object{display:block}.media-object.img-thumbnail{max-width:none}.media-right,.media>.pull-right{padding-left:10px}.media-left,.media>.pull-left{padding-right:10px}.media-left,.media-right,.media-body{display:table-cell;vertical-align:top}.media-middle{vertical-align:middle}.media-bottom{vertical-align:bottom}.media-heading{margin-top:0;margin-bottom:5px}.media-list{padding-left:0;list-style:none}.list-group{padding-left:0;margin-bottom:20px}.list-group-item{position:relative;display:block;padding:10px 15px;margin-bottom:-1px;background-color:#fff;border:1px solid #ddd}.list-group-item:first-child{border-top-left-radius:4px;border-top-right-radius:4px}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}.list-group-item.disabled,.list-group-item.disabled:hover,.list-group-item.disabled:focus{color:#777;cursor:not-allowed;background-color:#eee}.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading{color:inherit}.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text{color:#777}.list-group-item.active,.list-group-item.active:hover,.list-group-item.active:focus{z-index:2;color:#fff;background-color:#337ab7;border-color:#337ab7}.list-group-item.active .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>.small{color:inherit}.list-group-item.active .list-group-item-text,.list-group-item.active:hover .list-group-item-text,.list-group-item.active:focus .list-group-item-text{color:#c7ddef}a.list-group-item,button.list-group-item{color:#555}a.list-group-item .list-group-item-heading,button.list-group-item .list-group-item-heading{color:#333}a.list-group-item:hover,button.list-group-item:hover,a.list-group-item:focus,button.list-group-item:focus{color:#555;text-decoration:none;background-color:#f5f5f5}button.list-group-item{width:100%;text-align:left}.list-group-item-success{color:#3c763d;background-color:#dff0d8}a.list-group-item-success,button.list-group-item-success{color:#3c763d}a.list-group-item-success .list-group-item-heading,button.list-group-item-success .list-group-item-heading{color:inherit}a.list-group-item-success:hover,button.list-group-item-success:hover,a.list-group-item-success:focus,button.list-group-item-success:focus{color:#3c763d;background-color:#d0e9c6}a.list-group-item-success.active,button.list-group-item-success.active,a.list-group-item-success.active:hover,button.list-group-item-success.active:hover,a.list-group-item-success.active:focus,button.list-group-item-success.active:focus{color:#fff;background-color:#3c763d;border-color:#3c763d}.list-group-item-info{color:#31708f;background-color:#d9edf7}a.list-group-item-info,button.list-group-item-info{color:#31708f}a.list-group-item-info .list-group-item-heading,button.list-group-item-info .list-group-item-heading{color:inherit}a.list-group-item-info:hover,button.list-group-item-info:hover,a.list-group-item-info:focus,button.list-group-item-info:focus{color:#31708f;background-color:#c4e3f3}a.list-group-item-info.active,button.list-group-item-info.active,a.list-group-item-info.active:hover,button.list-group-item-info.active:hover,a.list-group-item-info.active:focus,button.list-group-item-info.active:focus{color:#fff;background-color:#31708f;border-color:#31708f}.list-group-item-warning{color:#8a6d3b;background-color:#fcf8e3}a.list-group-item-warning,button.list-group-item-warning{color:#8a6d3b}a.list-group-item-warning .list-group-item-heading,button.list-group-item-warning .list-group-item-heading{color:inherit}a.list-group-item-warning:hover,button.list-group-item-warning:hover,a.list-group-item-warning:focus,button.list-group-item-warning:focus{color:#8a6d3b;background-color:#faf2cc}a.list-group-item-warning.active,button.list-group-item-warning.active,a.list-group-item-warning.active:hover,button.list-group-item-warning.active:hover,a.list-group-item-warning.active:focus,button.list-group-item-warning.active:focus{color:#fff;background-color:#8a6d3b;border-color:#8a6d3b}.list-group-item-danger{color:#a94442;background-color:#f2dede}a.list-group-item-danger,button.list-group-item-danger{color:#a94442}a.list-group-item-danger .list-group-item-heading,button.list-group-item-danger .list-group-item-heading{color:inherit}a.list-group-item-danger:hover,button.list-group-item-danger:hover,a.list-group-item-danger:focus,button.list-group-item-danger:focus{color:#a94442;background-color:#ebcccc}a.list-group-item-danger.active,button.list-group-item-danger.active,a.list-group-item-danger.active:hover,button.list-group-item-danger.active:hover,a.list-group-item-danger.active:focus,button.list-group-item-danger.active:focus{color:#fff;background-color:#a94442;border-color:#a94442}.list-group-item-heading{margin-top:0;margin-bottom:5px}.list-group-item-text{margin-bottom:0;line-height:1.3}.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.05);box-shadow:0 1px 1px rgba(0,0,0,0.05)}.panel-body{padding:15px}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px}.panel-heading>.dropdown .dropdown-toggle{color:inherit}.panel-title{margin-top:0;margin-bottom:0;font-size:16px;color:inherit}.panel-title>a,.panel-title>small,.panel-title>.small,.panel-title>small>a,.panel-title>.small>a{color:inherit}.panel-footer{padding:10px 15px;background-color:#f5f5f5;border-top:1px solid #ddd;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.list-group,.panel>.panel-collapse>.list-group{margin-bottom:0}.panel>.list-group .list-group-item,.panel>.panel-collapse>.list-group .list-group-item{border-width:1px 0;border-radius:0}.panel>.list-group:first-child .list-group-item:first-child,.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child{border-top:0;border-top-left-radius:3px;border-top-right-radius:3px}.panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child{border-bottom:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child{border-top-left-radius:0;border-top-right-radius:0}.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}.list-group+.panel-footer{border-top-width:0}.panel>.table,.panel>.table-responsive>.table,.panel>.panel-collapse>.table{margin-bottom:0}.panel>.table caption,.panel>.table-responsive>.table caption,.panel>.panel-collapse>.table caption{padding-right:15px;padding-left:15px}.panel>.table:first-child,.panel>.table-responsive:first-child>.table:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table:first-child>thead:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child{border-top-left-radius:3px}.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child{border-top-right-radius:3px}.panel>.table:last-child,.panel>.table-responsive:last-child>.table:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child{border-bottom-left-radius:3px}.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child{border-bottom-right-radius:3px}.panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body{border-top:1px solid #ddd}.panel>.table>tbody:first-child>tr:first-child th,.panel>.table>tbody:first-child>tr:first-child td{border-top:0}.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th{border-bottom:0}.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}.panel>.table-responsive{margin-bottom:0;border:0}.panel-group{margin-bottom:20px}.panel-group .panel{margin-bottom:0;border-radius:4px}.panel-group .panel+.panel{margin-top:5px}.panel-group .panel-heading{border-bottom:0}.panel-group .panel-heading+.panel-collapse>.panel-body,.panel-group .panel-heading+.panel-collapse>.list-group{border-top:1px solid #ddd}.panel-group .panel-footer{border-top:0}.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}.panel-default{border-color:#ddd}.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}.panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ddd}.panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333}.panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ddd}.panel-primary{border-color:#337ab7}.panel-primary>.panel-heading{color:#fff;background-color:#337ab7;border-color:#337ab7}.panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:#337ab7}.panel-primary>.panel-heading .badge{color:#337ab7;background-color:#fff}.panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#337ab7}.panel-success{border-color:#d6e9c6}.panel-success>.panel-heading{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:#d6e9c6}.panel-success>.panel-heading .badge{color:#dff0d8;background-color:#3c763d}.panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#d6e9c6}.panel-info{border-color:#bce8f1}.panel-info>.panel-heading{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:#bce8f1}.panel-info>.panel-heading .badge{color:#d9edf7;background-color:#31708f}.panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#bce8f1}.panel-warning{border-color:#faebcc}.panel-warning>.panel-heading{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:#faebcc}.panel-warning>.panel-heading .badge{color:#fcf8e3;background-color:#8a6d3b}.panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#faebcc}.panel-danger{border-color:#ebccd1}.panel-danger>.panel-heading{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ebccd1}.panel-danger>.panel-heading .badge{color:#f2dede;background-color:#a94442}.panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ebccd1}.embed-responsive{position:relative;display:block;height:0;padding:0;overflow:hidden}.embed-responsive .embed-responsive-item,.embed-responsive iframe,.embed-responsive embed,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-16by9{padding-bottom:56.25%}.embed-responsive-4by3{padding-bottom:75%}.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px 1px rgba(0,0,0,0.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,0.15)}.well-lg{padding:24px;border-radius:6px}.well-sm{padding:9px;border-radius:3px}.close{float:right;font-size:21px;font-weight:bold;line-height:1;color:#000;text-shadow:0 1px 0 #fff;filter:alpha(opacity=20);opacity:.2}.close:hover,.close:focus{color:#000;text-decoration:none;cursor:pointer;filter:alpha(opacity=50);opacity:.5}button.close{padding:0;cursor:pointer;background:transparent;border:0;-webkit-appearance:none;appearance:none}.modal-open{overflow:hidden}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;overflow:hidden;-webkit-overflow-scrolling:touch;outline:0}.modal.fade .modal-dialog{-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);-o-transform:translate(0,-25%);transform:translate(0,-25%);-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out}.modal.in .modal-dialog{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);-o-transform:translate(0,0);transform:translate(0,0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:10px}.modal-content{position:relative;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #999;border:1px solid rgba(0,0,0,0.2);border-radius:6px;-webkit-box-shadow:0 3px 9px rgba(0,0,0,0.5);box-shadow:0 3px 9px rgba(0,0,0,0.5);outline:0}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}.modal-backdrop.fade{filter:alpha(opacity=0);opacity:0}.modal-backdrop.in{filter:alpha(opacity=50);opacity:.5}.modal-header{padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}.modal-body{position:relative;padding:15px}.modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media(min-width:768px){.modal-dialog{width:600px;margin:30px auto}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,0.5);box-shadow:0 5px 15px rgba(0,0,0,0.5)}.modal-sm{width:300px}}@media(min-width:992px){.modal-lg{width:900px}}.tooltip{position:absolute;z-index:1070;display:block;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-style:normal;font-weight:400;line-height:1.42857143;line-break:auto;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;word-wrap:normal;white-space:normal;font-size:12px;filter:alpha(opacity=0);opacity:0}.tooltip.in{filter:alpha(opacity=90);opacity:.9}.tooltip.top{padding:5px 0;margin-top:-3px}.tooltip.right{padding:0 5px;margin-left:3px}.tooltip.bottom{padding:5px 0;margin-top:3px}.tooltip.left{padding:0 5px;margin-left:-3px}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-left .tooltip-arrow{right:5px;bottom:0;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-right .tooltip-arrow{bottom:0;left:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-left .tooltip-arrow{top:0;right:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-right .tooltip-arrow{top:0;left:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.popover{position:absolute;top:0;left:0;z-index:1060;display:none;max-width:276px;padding:1px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-style:normal;font-weight:400;line-height:1.42857143;line-break:auto;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;word-wrap:normal;white-space:normal;font-size:14px;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,0.2);box-shadow:0 5px 10px rgba(0,0,0,0.2)}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover>.arrow{border-width:11px}.popover>.arrow,.popover>.arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}.popover>.arrow:after{content:"";border-width:10px}.popover.top>.arrow{bottom:-11px;left:50%;margin-left:-11px;border-top-color:#999;border-top-color:rgba(0,0,0,0.25);border-bottom-width:0}.popover.top>.arrow:after{bottom:1px;margin-left:-10px;content:" ";border-top-color:#fff;border-bottom-width:0}.popover.right>.arrow{top:50%;left:-11px;margin-top:-11px;border-right-color:#999;border-right-color:rgba(0,0,0,0.25);border-left-width:0}.popover.right>.arrow:after{bottom:-10px;left:1px;content:" ";border-right-color:#fff;border-left-width:0}.popover.bottom>.arrow{top:-11px;left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,0.25)}.popover.bottom>.arrow:after{top:1px;margin-left:-10px;content:" ";border-top-width:0;border-bottom-color:#fff}.popover.left>.arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:#999;border-left-color:rgba(0,0,0,0.25)}.popover.left>.arrow:after{right:1px;bottom:-10px;content:" ";border-right-width:0;border-left-color:#fff}.popover-title{padding:8px 14px;margin:0;font-size:14px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}.popover-content{padding:9px 14px}.carousel{position:relative}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner>.item{position:relative;display:none;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel-inner>.item>img,.carousel-inner>.item>a>img{line-height:1}@media all and (transform-3d),(-webkit-transform-3d){.carousel-inner>.item{-webkit-transition:-webkit-transform .6s ease-in-out;-o-transition:-o-transform .6s ease-in-out;transition:transform .6s ease-in-out;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}.carousel-inner>.item.next,.carousel-inner>.item.active.right{-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0);left:0}.carousel-inner>.item.prev,.carousel-inner>.item.active.left{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0);left:0}.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right,.carousel-inner>.item.active{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);left:0}}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;bottom:0;left:0;width:15%;font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,0.6);background-color:rgba(0,0,0,0);filter:alpha(opacity=50);opacity:.5}.carousel-control.left{background-image:-webkit-linear-gradient(left,rgba(0,0,0,0.5) 0,rgba(0,0,0,0.0001) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,0.5) 0,rgba(0,0,0,0.0001) 100%);background-image:-webkit-gradient(linear,left top,right top,color-stop(0,rgba(0,0,0,0.5)),to(rgba(0,0,0,0.0001)));background-image:linear-gradient(to right,rgba(0,0,0,0.5) 0,rgba(0,0,0,0.0001) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000',endColorstr='#00000000',GradientType=1);background-repeat:repeat-x}.carousel-control.right{right:0;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,0.0001) 0,rgba(0,0,0,0.5) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,0.0001) 0,rgba(0,0,0,0.5) 100%);background-image:-webkit-gradient(linear,left top,right top,color-stop(0,rgba(0,0,0,0.0001)),to(rgba(0,0,0,0.5)));background-image:linear-gradient(to right,rgba(0,0,0,0.0001) 0,rgba(0,0,0,0.5) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#80000000',GradientType=1);background-repeat:repeat-x}.carousel-control:hover,.carousel-control:focus{color:#fff;text-decoration:none;outline:0;filter:alpha(opacity=90);opacity:.9}.carousel-control .icon-prev,.carousel-control .icon-next,.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right{position:absolute;top:50%;z-index:5;display:inline-block;margin-top:-10px}.carousel-control .icon-prev,.carousel-control .glyphicon-chevron-left{left:50%;margin-left:-10px}.carousel-control .icon-next,.carousel-control .glyphicon-chevron-right{right:50%;margin-right:-10px}.carousel-control .icon-prev,.carousel-control .icon-next{width:20px;height:20px;font-family:serif;line-height:1}.carousel-control .icon-prev:before{content:"\2039"}.carousel-control .icon-next:before{content:"\203a"}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;padding-left:0;margin-left:-30%;text-align:center;list-style:none}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;cursor:pointer;background-color:#000 \9;background-color:rgba(0,0,0,0);border:1px solid #fff;border-radius:10px}.carousel-indicators .active{width:12px;height:12px;margin:0;background-color:#fff}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,0.6)}.carousel-caption .btn{text-shadow:none}@media screen and (min-width:768px){.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-prev,.carousel-control .icon-next{width:30px;height:30px;margin-top:-10px;font-size:30px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-10px}.carousel-caption{right:20%;left:20%;padding-bottom:30px}.carousel-indicators{bottom:20px}}.clearfix:before,.clearfix:after,.dl-horizontal dd:before,.dl-horizontal dd:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after,.form-horizontal .form-group:before,.form-horizontal .form-group:after,.btn-toolbar:before,.btn-toolbar:after,.btn-group-vertical>.btn-group:before,.btn-group-vertical>.btn-group:after,.nav:before,.nav:after,.navbar:before,.navbar:after,.navbar-header:before,.navbar-header:after,.navbar-collapse:before,.navbar-collapse:after,.pager:before,.pager:after,.panel-body:before,.panel-body:after,.modal-header:before,.modal-header:after,.modal-footer:before,.modal-footer:after{display:table;content:" "}.clearfix:after,.dl-horizontal dd:after,.container:after,.container-fluid:after,.row:after,.form-horizontal .form-group:after,.btn-toolbar:after,.btn-group-vertical>.btn-group:after,.nav:after,.navbar:after,.navbar-header:after,.navbar-collapse:after,.pager:after,.panel-body:after,.modal-header:after,.modal-footer:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}.pull-right{float:right !important}.pull-left{float:left !important}.hide{display:none !important}.show{display:block !important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none !important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-xs,.visible-sm,.visible-md,.visible-lg{display:none !important}.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block{display:none !important}@media(max-width:767px){.visible-xs{display:block !important}table.visible-xs{display:table !important}tr.visible-xs{display:table-row !important}th.visible-xs,td.visible-xs{display:table-cell !important}}@media(max-width:767px){.visible-xs-block{display:block !important}}@media(max-width:767px){.visible-xs-inline{display:inline !important}}@media(max-width:767px){.visible-xs-inline-block{display:inline-block !important}}@media(min-width:768px) and (max-width:991px){.visible-sm{display:block !important}table.visible-sm{display:table !important}tr.visible-sm{display:table-row !important}th.visible-sm,td.visible-sm{display:table-cell !important}}@media(min-width:768px) and (max-width:991px){.visible-sm-block{display:block !important}}@media(min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline !important}}@media(min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block !important}}@media(min-width:992px) and (max-width:1199px){.visible-md{display:block !important}table.visible-md{display:table !important}tr.visible-md{display:table-row !important}th.visible-md,td.visible-md{display:table-cell !important}}@media(min-width:992px) and (max-width:1199px){.visible-md-block{display:block !important}}@media(min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline !important}}@media(min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block !important}}@media(min-width:1200px){.visible-lg{display:block !important}table.visible-lg{display:table !important}tr.visible-lg{display:table-row !important}th.visible-lg,td.visible-lg{display:table-cell !important}}@media(min-width:1200px){.visible-lg-block{display:block !important}}@media(min-width:1200px){.visible-lg-inline{display:inline !important}}@media(min-width:1200px){.visible-lg-inline-block{display:inline-block !important}}@media(max-width:767px){.hidden-xs{display:none !important}}@media(min-width:768px) and (max-width:991px){.hidden-sm{display:none !important}}@media(min-width:992px) and (max-width:1199px){.hidden-md{display:none !important}}@media(min-width:1200px){.hidden-lg{display:none !important}}.visible-print{display:none !important}@media print{.visible-print{display:block !important}table.visible-print{display:table !important}tr.visible-print{display:table-row !important}th.visible-print,td.visible-print{display:table-cell !important}}.visible-print-block{display:none !important}@media print{.visible-print-block{display:block !important}}.visible-print-inline{display:none !important}@media print{.visible-print-inline{display:inline !important}}.visible-print-inline-block{display:none !important}@media print{.visible-print-inline-block{display:inline-block !important}}@media print{.hidden-print{display:none !important}}@-webkit-keyframes goUp{0{-webkit-transform:none;transform:none}100%{-webkit-transform:translate3d(0,-100px,0);transform:translate3d(0,-100px,0)}}@keyframes goUp{0{-webkit-transform:none;transform:none}100%{-webkit-transform:translate3d(0,-100px,0);transform:translate3d(0,-100px,0)}}@-webkit-keyframes goDown{0{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{-webkit-transform:none;transform:none}}@keyframes goDown{0{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{-webkit-transform:none;transform:none}}.affix-top{top:10%;position:fixed;z-index:999}.sticky-bar{display:none;position:fixed;top:0;width:100%;background-color:#111;z-index:999;-moz-box-shadow:0 0 3px 0 #000;-webkit-box-shadow:0 0 3px 0 #000;box-shadow:0 0 3px 0 #000}.sticky-bar.active{display:block;-webkit-animation-duration:.8s;animation-duration:.8s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-name:goDown;animation-name:goDown}.sticky-bar .content{position:relative;display:table;max-width:1000px;height:85px;margin:0 auto;padding:0;color:#fff;font-size:16px}.sticky-bar .content>div{display:table-cell;vertical-align:middle}.sticky-bar .content .btn{font-size:20px}html[lang="ar"] .sticky-bar .content .btn,html[lang="ja"] .sticky-bar .content .btn,html[lang="tw"] .sticky-bar .content .btn{font-size:18px}html[lang="bn"] .sticky-bar .content .btn{font-size:17px}html[lang="ur"] .sticky-bar .content .btn{font-size:16px}html[lang="fa"] .sticky-bar .content .btn{font-size:11px}html[lang="el"] .sticky-bar .content .btn,html[lang="vn"] .sticky-bar .content .btn{font-size:16px !important;letter-spacing:0 !important}.rtl-lang .sticky-bar .content .btn,html[lang="fa"] .sticky-bar .content .btn{margin-left:50px;margin-right:0}.sticky-bar .content .btn .fa{display:inline-block;margin-left:10px;margin-right:0;font-size:20px;vertical-align:middle;text-align:right}.rtl-lang .sticky-bar .content .btn .fa{margin-left:0;margin-right:10px}.sticky-bar .content .text{width:68%;padding-right:35px}html[lang="bn"] .sticky-bar .content .text{width:67%}html[lang="ms"] .sticky-bar .content .text{width:initial}.sticky-bar .content p{text-align:center;padding:0;margin:0}.sticky-bar .content .fa-times{position:relative;font-size:25px;margin-left:35px;vertical-align:middle;text-align:right;color:#d4d4d4;padding:0 10px;border-left:1px solid #d4d4d4;border-right:1px solid #d4d4d4;cursor:pointer}.rtl-lang .sticky-bar .content .fa-times,html[lang="fa"] .sticky-bar .content .fa-times{left:-15%;right:initial}.sticky-bar .content .fa-times:hover{color:#444}.sticky-bar.deactive{display:block;-webkit-animation-duration:.8s;animation-duration:.8s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-name:goUp;animation-name:goUp}a.scroll-top{display:none;position:fixed;bottom:35px;right:20px;color:#ccc;border:1px solid #ccc;width:55px;height:50px;z-index:999;transition:none}.rtl-lang a.scroll-top,html[lang="fa"] a.scroll-top{right:initial;left:20px}a.scroll-top i.fa{display:block;font-size:48px;text-align:center;line-height:51px}a.scroll-top:hover{color:#d51820;border:1px solid #d51820}#risk-block{position:fixed;width:100%;z-index:601;display:block;bottom:0}#cookies-block{display:none;padding:5px 0;background:rgba(37,37,37,0.9);border-top:1px solid #111;z-index:-1;position:fixed;width:100%;bottom:0}#risk-block{background:#efefef;border-top:1px solid #ccc;color:#333;padding:10px;text-align:center;font-size:13px}.rtl-lang #risk-block,html[lang="fa"] #risk-block{direction:rtl}#risk-block>.wrap{position:relative;margin:0 auto;max-width:1200px;min-height:23px}#risk-block .link{font-weight:bold;color:#333;text-decoration:underline !important;display:inline-block}#risk-block p{margin-bottom:0}#risk-block .text-wrap strong,#risk-block .text-wrap .fa{color:#d51820}#notify-recording-block>.wrap{position:relative;margin:0 auto;text-align:center}#notify-recording-block .text-wrap,#notify-recording-block .btn-wrap{display:inline-block;vertical-align:middle;margin:0 15px}#notify-recording-block .btn-wrap{position:absolute;top:0;right:15px;bottom:0;margin:auto 0;height:28px}#cookies-block .text-wrap a,#notify-recording-block .link{font-weight:bold;color:#fff;text-decoration:underline !important}#cookies-block .text-wrap a:hover,#notify-recording-block .link:hover{color:#d51820}#notify-recording-block p{display:inline-block;margin:0;padding:0;vertical-align:middle}#notify-recording-block p{color:#cbcbcb}#notify-recording-block .btn{font-size:12px !important;text-transform:capitalize}#cookies-block .wrap{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;-webkit-box-align:center !important;-ms-flex-align:center !important;align-items:center !important}#cookies-block .text-wrap,#cookies-block .btn-wrap{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;text-align:center}#cookies-block .text-wrap{color:#fff}#cookies-block .text-wrap p{margin-bottom:0}.risk-block-pt.fixed{font-size:11px;border:1px solid #d5d5d5}.risk-block-pt.fixed{position:fixed;display:block;left:0;top:50%;width:170px;margin:-200px 0 0 0;width:192px;z-index:9999}.risk-block-pt.fixed>ul>li{padding:10px}.risk-block-pt.fixed>ul>li+li{border-top:2px solid #d5d5d5}.risk-block-pt.fixed>ul>li{display:block;width:100%}#js-riskCloseButton{position:absolute;color:#333;font-size:15px;top:-42px;right:15px;background:#efefef;padding:5px 10px;border:1px solid #ccc;border-bottom:0}#js-riskCloseButton.minimise>i::before{content:"\f078"}#js-riskCloseButton.minimise.up>i::before{content:"\f077"}.rtl-lang #js-riskCloseButton,html[lang="fa"] #js-riskCloseButton{left:15px;right:auto}#js-cookieBarHeight{background-color:#000}#xmas-holidays{background-color:#252525;color:white;font-size:11px;text-align:center}.xmas-holidays-wrapper{padding:12px 40px;margin:0 auto;position:relative;display:inline-block}.xmas-holidays-wrapper p{margin-bottom:0}.xmas-holidays-wrapper p a{display:inline-block;font-weight:600}.xmas-holidays-wrapper button{font-size:14px;position:absolute;top:0;bottom:0;right:10px;margin:auto 0}.rtl-lang .xmas-holidays-wrapper button,html[lang="fa"] .xmas-holidays-wrapper button{right:auto;left:10px}#sb-live-education{background-color:#252525;color:white;font-size:12px;text-align:center;font-weight:600}.sb-live-education-wrapper{padding:12px 40px;margin:0 auto;position:relative;display:inline-block}.sb-live-education-wrapper p{margin-bottom:0}.sb-live-education-wrapper p a{display:inline-block;font-weight:600}.sb-live-education-wrapper button{font-size:14px;position:absolute;top:0;bottom:0;right:0;margin:auto 0}.sb-live-education-wrapper span.badge--live{background:#d51820;color:#fff;font-size:12px;font-weight:600;margin-left:15px;border-radius:3px;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;width:58px;height:24px;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.sb-live-education-wrapper span.badge--live .fa-play{padding-right:5px;font-size:10px}.rtl-lang .sb-live-education-wrapper span.badge--live{margin-right:15px}.rtl-lang .sb-live-education-wrapper span.badge--live .fa-play{padding-left:5px}.rtl-lang .sb-live-education-wrapper button,html[lang="fa"] .sb-live-education-wrapper button{right:auto;left:10px}.plp-aff-promo-sticky{background:#414141;color:#fff;padding:15px 0;display:flex;justify-content:center;align-content:center;align-items:center}.plp-aff-promo-sticky a{color:#fff;text-decoration:underline !important}.plp-aff-promo-sticky p{font-weight:700;font-size:14px;padding:0 15px}html[lang="si"] .plp-aff-promo-sticky p{line-height:1.7}#sb-usa{background-color:#252525;color:white;font-size:12px;text-align:center;font-weight:600}#sb-usa .sb-usa-wrapper{padding:12px 40px}@media(min-width:425px){.xmas-holidays-wrapper{padding:12px 70px}}@media(min-width:768px){#cookies-block .text-wrap{-webkit-box-flex:0;-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}#cookies-block .btn-wrap{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}html[lang="si"] .plp-aff-promo-sticky p{line-height:1.5}}@media(min-width:992px){a.scroll-top{bottom:55px}#risk-block{padding:10px 100px;font-size:14px}#risk-block.risk-block__de{font-size:16px}#js-riskCloseButton{top:0;right:-25px;background:0;padding:0;border:0}.rtl-lang #js-riskCloseButton,html[lang="fa"] #js-riskCloseButton{left:-25px;right:auto}}@media(max-width:1567px){.risk-block-pt.fixed{display:none}}@media(max-width:991px){.sticky-bar .content .btn{padding:6px 5px 6px 20px;font-size:20px;margin-left:10px}.sticky-bar .content .fa-times{right:0}}@font-face{font-family:"BebasExt";src:url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_bold-webfont.eot");src:url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_bold-webfont.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_bold-webfont.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_bold-webfont.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_bold-webfont.svg") format("svg");font-weight:700;font-style:normal}@font-face{font-family:"BebasExt";src:url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_regular-webfont.eot");src:url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_regular-webfont.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_regular-webfont.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_regular-webfont.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_regular-webfont.svg") format("svg");font-weight:400;font-style:normal}@font-face{font-family:"BebasExt";src:url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_book-webfont.eot") format("embedded-opentype");src:url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_book-webfont.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_book-webfont.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_book-webfont.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue_ext/bebasneue_book-webfont.svg") format("svg");font-weight:300;font-style:normal}@font-face{font-family:"Bebas";src:url("https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_bold-webfont.eot");src:url("https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_bold-webfont.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_bold-webfont.woff") format("woff"),url("	https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_bold-webfont.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_bold-webfont.svg") format("svg");font-weight:700;font-style:normal}@font-face{font-family:"Bebas";src:url("https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_regular-webfont.eot");src:url("https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_regular-webfont.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_regular-webfont.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_regular-webfont.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_regular-webfont.svg") format("svg");font-weight:400;font-style:normal}@font-face{font-family:"Bebas";src:url("https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_book-webfont.eot");src:url("https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_book-webfont.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_book-webfont.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_book-webfont.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/bebasneue/bebasneue_book-webfont.svg") format("svg");font-weight:300;font-style:normal}@font-face{font-family:"RobCond";src:url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Light.eot");src:url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Light.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Light.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Light.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Light.svg#RobCond") format("svg");font-weight:300;font-style:normal;font-variant:normal}@font-face{font-family:"RobCond";src:url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Regular.eot");src:url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Regular.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Regular.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Regular.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Regular.svg#RobCond") format("svg");font-weight:400;font-style:normal;font-variant:normal}@font-face{font-family:"RobCond";src:url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Bold.eot");src:url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Bold.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Bold.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Bold.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/robotoCond/RobotoCondensed-Bold.svg#RobCond") format("svg");font-weight:700;font-style:normal;font-variant:normal}@font-face{font-family:"Roboto";src:url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Thin-webfont.eot");src:url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Thin-webfont.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Thin-webfont.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Thin-webfont.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Thin-webfont.svg#RobCond#RobCond") format("svg");font-weight:100;font-style:normal}@font-face{font-family:"Roboto";src:url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Light-webfont.eot");src:url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Light-webfont.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Light-webfont.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Light-webfont.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Light-webfont.svg#RobCond#RobCond") format("svg");font-weight:300;font-style:normal}@font-face{font-family:"Roboto";src:url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Regular-webfont.eot");src:url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Regular-webfont.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Regular-webfont.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Regular-webfont.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Regular-webfont.svg#RobCond#RobCond") format("svg");font-weight:400;font-style:normal}@font-face{font-family:"Roboto";src:url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Medium-webfont.eot");src:url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Medium-webfont.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Medium-webfont.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Medium-webfont.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Medium-webfont.svg#RobCond") format("svg");font-weight:500;font-style:normal}@font-face{font-family:"Roboto";src:url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Bold-webfont.eot");src:url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Bold-webfont.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Bold-webfont.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Bold-webfont.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Bold-webfont.svg#RobCond") format("svg");font-weight:700;font-style:normal}@font-face{font-family:"Roboto";src:url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Black-webfont.eot");src:url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Black-webfont.eot?#iefix") format("embedded-opentype"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Black-webfont.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Black-webfont.ttf") format("truetype"),url("https://cloud.xm-cdn.com/static/fonts/roboto/Roboto-Black-webfont.svg#RobCond") format("svg");font-weight:900;font-style:normal}@font-face{font-family:"HindSiliguri";src:url("https://cloud.xm-cdn.com/static/fonts/hind_siliguri/hindsiliguri-light-webfont.woff") format("woff2"),url("https://cloud.xm-cdn.com/static/fonts/hind_siliguri/hindsiliguri-light-webfont.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/hind_siliguri/hindsiliguri-light.ttf") format("ttf");font-weight:300;font-style:normal}@font-face{font-family:"HindSiliguri";src:url("https://cloud.xm-cdn.com/static/fonts/hind_siliguri/hindsiliguri-regular-webfont.woff") format("woff2"),url("https://cloud.xm-cdn.com/static/fonts/hind_siliguri/hindsiliguri-regular-webfont.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/hind_siliguri/hindsiliguri-regular.ttf") format("ttf");font-weight:400;font-style:normal}@font-face{font-family:"HindSiliguri";src:url("https://cloud.xm-cdn.com/static/fonts/hind_siliguri/hindsiliguri-bold-webfont.woff") format("woff2"),url("https://cloud.xm-cdn.com/static/fonts/hind_siliguri/hindsiliguri-bold-webfont.woff") format("woff"),url("https://cloud.xm-cdn.com/static/fonts/hind_siliguri/hindsiliguri-bold.ttf") format("ttf");font-weight:700;font-style:normal}body{color:#333;font-size:14px;line-height:1.5 !important}html[lang="zh_CN"] body,html[lang="tw"] body{font-size:15px}.mArea h1{font-size:30px;margin-top:0;margin-bottom:30px;color:#000}h3.border{padding:12px;font-size:16px;border:2px solid #cbcbcb;color:#888;text-align:center;margin-top:0;margin-bottom:30px;text-transform:uppercase}h3.border.reset{margin-bottom:0}h4{font-size:14px;font-weight:700;color:#d51820;margin:0}h2{margin-top:0;margin-bottom:30px}#careers h2,.main-site.hp-v17 h2{font-size:30px}.main-site.hp-v17 h2{font-weight:bold}h3{font-size:18px;margin:0;padding:0}html[lang="si"] h3{line-height:1.3}h3.light{font-weight:300}.education h3{font-size:22px}h2.big{font-size:35px;font-weight:bold}p.big{font-size:20px;font-weight:300}ul li.cat-item a{color:#000}small,.small{font-size:90%}body,#notify-recording-block .btn,.btn small,.fontsize-control .btn,#forex-calculator .btn-group .btn.btn-default,.table-country-filter .btn,.popover,.buttons-nav .btn.telegram{font-family:"Roboto",sans-serif}html[lang="bn"] body,html[lang="bn"] #notify-recording-block .btn,html[lang="bn"] .btn small,html[lang="bn"] .fontsize-control .btn,html[lang="bn"] #forex-calculator .btn-group .btn.btn-default,html[lang="bn"] .table-country-filter .btn,html[lang="bn"] .popover,html[lang="bn"] .buttons-nav .btn.telegram,html[lang="bn"] #custom-livechat .btn,html[lang="bn"] #custom-livechat .nav-tabs>li>a{font-family:"Roboto","HindSiliguri",sans-serif}html[lang="ja"] body,html[lang="ja"] #notify-recording-block .btn,html[lang="ja"] .btn small,html[lang="ja"] .fontsize-control .btn,html[lang="ja"] #forex-calculator .btn-group .btn.btn-default,html[lang="ja"] .table-country-filter .btn,html[lang="ja"] .popover,html[lang="ja"] .buttons-nav .btn.telegram,html[lang="ja"] #custom-livechat .btn,html[lang="ja"] #custom-livechat .nav-tabs>li>a{font-family:"Roboto",Hiragino Kaku Gothic Pro,"Meiryo",sans-serif}html[lang="zh_CN"] body,html[lang="tw"] body,html[lang="zh_CN"] #notify-recording-block .btn,html[lang="tw"] #notify-recording-block .btn,html[lang="zh_CN"] .btn small,html[lang="tw"] .btn small,html[lang="zh_CN"] .fontsize-control .btn,html[lang="tw"] .fontsize-control .btn,html[lang="zh_CN"] #forex-calculator .btn-group .btn.btn-default,html[lang="tw"] #forex-calculator .btn-group .btn.btn-default,html[lang="zh_CN"] .table-country-filter .btn,html[lang="tw"] .table-country-filter .btn,html[lang="zh_CN"] .popover,html[lang="tw"] .popover,html[lang="zh_CN"] .buttons-nav .btn.telegram,html[lang="tw"] .buttons-nav .btn.telegram,html[lang="zh_CN"] #custom-livechat .btn,html[lang="tw"] #custom-livechat .btn,html[lang="zh_CN"] #custom-livechat .nav-tabs>li>a,html[lang="tw"] #custom-livechat .nav-tabs>li>a{font-family:"Roboto",Arial,Helvetica,"Microsoft YaHei New","Microsoft Yahei","微软雅黑",宋体,SimSun,STXihei,"华文细黑",sans-serif}body.rtl-lang,html[lang="fa"] body,html[lang="th"] body,.rtl-lang #notify-recording-block .btn,html[lang="fa"] #notify-recording-block .btn,html[lang="th"] #notify-recording-block .btn,.rtl-lang .btn small,html[lang="fa"] .btn small,html[lang="th"] .btn small,.rtl-lang .fontsize-control .btn,html[lang="fa"] .fontsize-control .btn,html[lang="th"] .fontsize-control .btn,.rtl-lang #forex-calculator .btn-group .btn.btn-default,html[lang="fa"] #forex-calculator .btn-group .btn.btn-default,html[lang="th"] #forex-calculator .btn-group .btn.btn-default,.rtl-lang .table-country-filter .btn,html[lang="fa"] .table-country-filter .btn,html[lang="th"] .table-country-filter .btn,.rtl-lang .popover,html[lang="fa"] .popover,html[lang="th"] .popover,.rtl-lang .buttons-nav .btn.telegram,html[lang="fa"] .buttons-nav .btn.telegram,html[lang="th"] .buttons-nav .btn.telegram,.rtl-lang #custom-livechat .btn,html[lang="fa"] #custom-livechat .btn,html[lang="th"] #custom-livechat .btn,.rtl-lang #custom-livechat .nav-tabs>li>a,html[lang="fa"] #custom-livechat .nav-tabs>li>a,html[lang="th"] #custom-livechat .nav-tabs>li>a{font-family:"Roboto",Tahoma,sans-serif}.emphasized-font,.btn,#main-nav.nav-logo>li>a,#main-nav.partnersNavMenu>li>a,.main-nav .block>span,.main-nav .box>span,.main-nav .block>span,.toggleLeftNav span,.toggleRightNav span,.parent .top-bar h1,#mobileAppBar .text-wrap h3,.title-block-wrap,.tabbable .nav-tabs>li>a,h3.border,h3#duration,.platforms-center h3,.promotion .prom1 .box h3,.promotion .prom2 .box h3,.prom-package .title,.prom-package .addition,.promotion h2,.reasons-list,.links-slider .slide a,.xmtd .stripe span,.partners #hero-content .stripe em,.webinars h4,.alert .account-status,#myModalIndex button,#processingpartners .wpwl-button,.sidebar.mArea .alert,.home_videos a h3,.promo__bonus .header-wrap h2,.prom-package .txt,.promotion span.or,.seminars .panel-default>.panel-heading .date,#complaint .disputed .amount,#galaPromo .bracket h3,#galaPromo .mainTitle,#galaPromo .subtitle,#galaPromo .prizes .duration,#galaPromo .main-msg.main-text,#galaPromo.motogp .highlight-text,#galaPromo.motogp .track-points .p7,#galaPromo .main-msg.main-text,#galaPromo.partner .main-header>.wrap h3,#galaPromo.partner .place-labels .cash,#galaPromo .main-msg.main-text,.gold-silver,#ib-competition h2.main,#ib-competition header h2.sub,.maintenance h1,.seminars .panel-default>.panel-heading .date,#world-championship .header .mainTitle,#world-championship .header h2,#world-championship .round-wrap .date span,.upload-documents .modalDocuments .modal-header button,.mArea .balance-bar span.amount,.xmp-package h3,#custom-livechat .btn,#custom-livechat .nav-tabs>li>a,.monthly-timeline__info .uppercase,.main-banner h2,.shapes-circle__text h2,.shapes-circle__text h3,.shapes-circle__text h5,.shapes-circle-container h6,.main-photo .block h2,.main-slider .block h2{font-family:"Bebas","BebasExt",sans-serif;text-transform:uppercase}html[lang="vn"] .main-photo .block h2,html[lang="el"] .emphasized-font,html[lang="vn"] .emphasized-font,html[lang="el"] .btn,html[lang="vn"] .btn,html[lang="el"] #main-nav.nav-logo>li>a,html[lang="el"] #main-nav.partnersNavMenu>li>a,html[lang="vn"] #main-nav.nav-logo>li>a,html[lang="vn"] #main-nav.partnersNavMenu>li>a,html[lang="el"] .main-nav .block>span,html[lang="vn"] .main-nav .block>span,html[lang="el"] .main-nav .box>span,html[lang="vn"] .main-nav .box>span,html[lang="el"] .main-nav .block>span,html[lang="vn"] .main-nav .block>span,html[lang="el"] .toggleLeftNav span,html[lang="vn"] .toggleLeftNav span,html[lang="el"] .toggleRightNav span,html[lang="vn"] .toggleRightNav span,html[lang="el"] .parent .top-bar h1,html[lang="vn"] .parent .top-bar h1,html[lang="el"] #mobileAppBar .text-wrap h3,html[lang="vn"] #mobileAppBar .text-wrap h3,html[lang="el"] .title-block-wrap,html[lang="vn"] .title-block-wrap,html[lang="el"] .tabbable .nav-tabs>li>a,html[lang="vn"] .tabbable .nav-tabs>li>a,html[lang="el"] h3.border,html[lang="vn"] h3.border,html[lang="el"] h3#duration,html[lang="vn"] h3#duration,html[lang="el"] .platforms-center h3,html[lang="vn"] .platforms-center h3,html[lang="el"] .promotion .prom1 .box h3,html[lang="vn"] .promotion .prom1 .box h3,html[lang="el"] .promotion .prom2 .box h3,html[lang="vn"] .promotion .prom2 .box h3,html[lang="el"] .prom-package .title,html[lang="vn"] .prom-package .title,html[lang="el"] .prom-package .addition,html[lang="vn"] .prom-package .addition,html[lang="el"] .promotion h2,html[lang="vn"] .promotion h2,html[lang="el"] .reasons-list,html[lang="vn"] .reasons-list,html[lang="el"] .links-slider .slide a,html[lang="vn"] .links-slider .slide a,html[lang="el"] .xmtd .stripe span,html[lang="vn"] .xmtd .stripe span,html[lang="el"] .partners #hero-content .stripe em,html[lang="vn"] .partners #hero-content .stripe em,html[lang="el"] .webinars h4,html[lang="vn"] .webinars h4,html[lang="el"] .alert .account-status,html[lang="vn"] .alert .account-status,html[lang="el"] #myModalIndex button,html[lang="vn"] #myModalIndex button,html[lang="el"] #processingpartners .wpwl-button,html[lang="vn"] #processingpartners .wpwl-button,html[lang="el"] .sidebar.mArea .alert,html[lang="vn"] .sidebar.mArea .alert,html[lang="el"] .home_videos a h3,html[lang="vn"] .home_videos a h3,html[lang="el"] .promo__bonus .header-wrap h2,html[lang="vn"] .promo__bonus .header-wrap h2,html[lang="el"] .prom-package .txt,html[lang="vn"] .prom-package .txt,html[lang="el"] .promotion span.or,html[lang="vn"] .promotion span.or,html[lang="el"] .seminars .panel-default>.panel-heading .date,html[lang="vn"] .seminars .panel-default>.panel-heading .date,html[lang="el"] #complaint .disputed .amount,html[lang="vn"] #complaint .disputed .amount,html[lang="el"] #galaPromo .bracket h3,html[lang="vn"] #galaPromo .bracket h3,html[lang="el"] #galaPromo .mainTitle,html[lang="vn"] #galaPromo .mainTitle,html[lang="el"] #galaPromo .subtitle,html[lang="vn"] #galaPromo .subtitle,html[lang="el"] #galaPromo .prizes .duration,html[lang="vn"] #galaPromo .prizes .duration,html[lang="el"] #galaPromo .main-msg.main-text,html[lang="vn"] #galaPromo .main-msg.main-text,html[lang="el"] #galaPromo.motogp .highlight-text,html[lang="vn"] #galaPromo.motogp .highlight-text,html[lang="el"] #galaPromo.motogp .track-points .p7,html[lang="vn"] #galaPromo.motogp .track-points .p7,html[lang="el"] #galaPromo .main-msg.main-text,html[lang="vn"] #galaPromo .main-msg.main-text,html[lang="el"] #galaPromo.partner .main-header>.wrap h3,html[lang="vn"] #galaPromo.partner .main-header>.wrap h3,html[lang="el"] #galaPromo.partner .place-labels .cash,html[lang="vn"] #galaPromo.partner .place-labels .cash,html[lang="el"] #galaPromo .main-msg.main-text,html[lang="vn"] #galaPromo .main-msg.main-text,html[lang="el"] .gold-silver,html[lang="vn"] .gold-silver,html[lang="el"] #ib-competition h2.main,html[lang="vn"] #ib-competition h2.main,html[lang="el"] #ib-competition header h2.sub,html[lang="vn"] #ib-competition header h2.sub,html[lang="el"] .maintenance h1,html[lang="vn"] .maintenance h1,html[lang="el"] .seminars .panel-default>.panel-heading .date,html[lang="vn"] .seminars .panel-default>.panel-heading .date,html[lang="el"] #world-championship .header .mainTitle,html[lang="vn"] #world-championship .header .mainTitle,html[lang="el"] #world-championship .header h2,html[lang="vn"] #world-championship .header h2,html[lang="el"] #world-championship .round-wrap .date span,html[lang="vn"] #world-championship .round-wrap .date span,html[lang="el"] .upload-documents .modalDocuments .modal-header button,html[lang="vn"] .upload-documents .modalDocuments .modal-header button,html[lang="el"] .mArea .balance-bar span.amount,html[lang="vn"] .mArea .balance-bar span.amount,html[lang="el"] .xmp-package h3,html[lang="vn"] .xmp-package h3,html[lang="el"] .dotted-container__text .uppercase,html[lang="vn"] .dotted-container__text .uppercase,html[lang="el"] .main-banner h2,html[lang="vn"] .main-banner h2,html[lang="el"] .shapes-circle__text h2,html[lang="vn"] .shapes-circle__text h2,html[lang="el"] .shapes-circle__text h3,html[lang="vn"] .shapes-circle__text h3,html[lang="el"] .shapes-circle__text h5,html[lang="vn"] .shapes-circle__text h5,html[lang="el"] .shapes-circle-container h6,html[lang="vn"] .shapes-circle-container h6{font-family:"RobCond","Bebas","BebasExt",sans-serif}html[lang="bn"] .emphasized-font,html[lang="bn"] .btn,html[lang="bn"] #main-nav.nav-logo>li>a,html[lang="bn"] #main-nav.partnersNavMenu>li>a,html[lang="bn"] .main-nav .block>span,html[lang="bn"] .main-nav .box>span,html[lang="bn"] .main-nav .block>span,html[lang="bn"] .toggleLeftNav span,html[lang="bn"] .toggleRightNav span,html[lang="bn"] .parent .top-bar h1,html[lang="bn"] #mobileAppBar .text-wrap h3,html[lang="bn"] .title-block-wrap,html[lang="bn"] .tabbable .nav-tabs>li>a,html[lang="bn"] h3.border,html[lang="bn"] h3#duration,html[lang="bn"] .platforms-center h3,html[lang="bn"] .promotion .prom1 .box h3,html[lang="bn"] .promotion .prom2 .box h3,html[lang="bn"] .prom-package .title,html[lang="bn"] .prom-package .addition,html[lang="bn"] .promotion h2,html[lang="bn"] .reasons-list,html[lang="bn"] .links-slider .slide a,html[lang="bn"] .xmtd .stripe span,html[lang="bn"] .partners #hero-content .stripe em,html[lang="bn"] .webinars h4,html[lang="bn"] .alert .account-status,html[lang="bn"] #myModalIndex button,html[lang="bn"] #processingpartners .wpwl-button,html[lang="bn"] .sidebar.mArea .alert,html[lang="bn"] .home_videos a h3,html[lang="bn"] .promo__bonus .header-wrap h2,html[lang="bn"] .prom-package .txt,html[lang="bn"] .promotion span.or,html[lang="bn"] .seminars .panel-default>.panel-heading .date,html[lang="bn"] #complaint .disputed .amount,html[lang="bn"] #galaPromo .bracket h3,html[lang="bn"] #galaPromo .mainTitle,html[lang="bn"] #galaPromo .subtitle,html[lang="bn"] #galaPromo .prizes .duration,html[lang="bn"] #galaPromo .main-msg.main-text,html[lang="bn"] #galaPromo.motogp .highlight-text,html[lang="bn"] #galaPromo.motogp .track-points .p7,html[lang="bn"] #galaPromo .main-msg.main-text,html[lang="bn"] #galaPromo.partner .main-header>.wrap h3,html[lang="bn"] #galaPromo.partner .place-labels .cash,html[lang="bn"] #galaPromo .main-msg.main-text,html[lang="bn"] .gold-silver,html[lang="bn"] #ib-competition h2.main,html[lang="bn"] #ib-competition header h2.sub,html[lang="bn"] .maintenance h1,html[lang="bn"] .seminars .panel-default>.panel-heading .date,html[lang="bn"] #world-championship .header .mainTitle,html[lang="bn"] #world-championship .header h2,html[lang="bn"] #world-championship .round-wrap .date span,html[lang="bn"] .upload-documents .modalDocuments .modal-header button,html[lang="bn"] .mArea .balance-bar span.amount,html[lang="bn"] .xmp-package h3{font-family:"Bebas","HindSiliguri",sans-serif}html[lang="ja"] .emphasized-font,html[lang="ja"] .btn,html[lang="ja"] #main-nav.nav-logo>li>a,html[lang="ja"] #main-nav.partnersNavMenu>li>a,html[lang="ja"] .main-nav .block>span,html[lang="ja"] .main-nav .box>span,html[lang="ja"] .main-nav .block>span,html[lang="ja"] .toggleLeftNav span,html[lang="ja"] .toggleRightNav span,html[lang="ja"] .parent .top-bar h1,html[lang="ja"] #mobileAppBar .text-wrap h3,html[lang="ja"] .title-block-wrap,html[lang="ja"] .tabbable .nav-tabs>li>a,html[lang="ja"] h3.border,html[lang="ja"] h3#duration,html[lang="ja"] .platforms-center h3,html[lang="ja"] .promotion .prom1 .box h3,html[lang="ja"] .promotion .prom2 .box h3,html[lang="ja"] .prom-package .title,html[lang="ja"] .prom-package .addition,html[lang="ja"] .promotion h2,html[lang="ja"] .reasons-list,html[lang="ja"] .links-slider .slide a,html[lang="ja"] .xmtd .stripe span,html[lang="ja"] .partners #hero-content .stripe em,html[lang="ja"] .webinars h4,html[lang="ja"] .alert .account-status,html[lang="ja"] #myModalIndex button,html[lang="ja"] #processingpartners .wpwl-button,html[lang="ja"] .sidebar.mArea .alert,html[lang="ja"] .home_videos a h3,html[lang="ja"] .promo__bonus .header-wrap h2,html[lang="ja"] .prom-package .txt,html[lang="ja"] .promotion span.or,html[lang="ja"] .seminars .panel-default>.panel-heading .date,html[lang="ja"] #complaint .disputed .amount,html[lang="ja"] #galaPromo .bracket h3,html[lang="ja"] #galaPromo .mainTitle,html[lang="ja"] #galaPromo .subtitle,html[lang="ja"] #galaPromo .prizes .duration,html[lang="ja"] #galaPromo .main-msg.main-text,html[lang="ja"] #galaPromo.motogp .highlight-text,html[lang="ja"] #galaPromo.motogp .track-points .p7,html[lang="ja"] #galaPromo .main-msg.main-text,html[lang="ja"] #galaPromo.partner .main-header>.wrap h3,html[lang="ja"] #galaPromo.partner .place-labels .cash,html[lang="ja"] #galaPromo .main-msg.main-text,html[lang="ja"] .gold-silver,html[lang="ja"] #ib-competition h2.main,html[lang="ja"] #ib-competition header h2.sub,html[lang="ja"] .maintenance h1,html[lang="ja"] .seminars .panel-default>.panel-heading .date,html[lang="ja"] #world-championship .header .mainTitle,html[lang="ja"] #world-championship .header h2,html[lang="ja"] #world-championship .round-wrap .date span,html[lang="ja"] .upload-documents .modalDocuments .modal-header button,html[lang="ja"] .mArea .balance-bar span.amount,html[lang="ja"] .xmp-package h3{font-family:"Bebas",Hiragino Kaku Gothic Pro,"Meiryo",sans-serif}html[lang="zh_CN"] .emphasized-font,html[lang="tw"] .emphasized-font,html[lang="zh_CN"] .btn,html[lang="tw"] .btn,html[lang="zh_CN"] #main-nav.nav-logo>li>a,html[lang="zh_CN"] #main-nav.partnersNavMenu>li>a,html[lang="tw"] #main-nav.nav-logo>li>a,html[lang="tw"] #main-nav.partnersNavMenu>li>a,html[lang="zh_CN"] .main-nav .block>span,html[lang="tw"] .main-nav .block>span,html[lang="zh_CN"] .main-nav .box>span,html[lang="tw"] .main-nav .box>span,html[lang="zh_CN"] .main-nav .block>span,html[lang="tw"] .main-nav .block>span,html[lang="zh_CN"] .toggleLeftNav span,html[lang="tw"] .toggleLeftNav span,html[lang="zh_CN"] .toggleRightNav span,html[lang="tw"] .toggleRightNav span,html[lang="zh_CN"] .parent .top-bar h1,html[lang="tw"] .parent .top-bar h1,html[lang="zh_CN"] #mobileAppBar .text-wrap h3,html[lang="tw"] #mobileAppBar .text-wrap h3,html[lang="zh_CN"] .title-block-wrap,html[lang="tw"] .title-block-wrap,html[lang="zh_CN"] .tabbable .nav-tabs>li>a,html[lang="tw"] .tabbable .nav-tabs>li>a,html[lang="zh_CN"] h3.border,html[lang="tw"] h3.border,html[lang="zh_CN"] h3#duration,html[lang="tw"] h3#duration,html[lang="zh_CN"] .platforms-center h3,html[lang="tw"] .platforms-center h3,html[lang="zh_CN"] .promotion .prom1 .box h3,html[lang="tw"] .promotion .prom1 .box h3,html[lang="zh_CN"] .promotion .prom2 .box h3,html[lang="tw"] .promotion .prom2 .box h3,html[lang="zh_CN"] .prom-package .title,html[lang="tw"] .prom-package .title,html[lang="zh_CN"] .prom-package .addition,html[lang="tw"] .prom-package .addition,html[lang="zh_CN"] .promotion h2,html[lang="tw"] .promotion h2,html[lang="zh_CN"] .reasons-list,html[lang="tw"] .reasons-list,html[lang="zh_CN"] .links-slider .slide a,html[lang="tw"] .links-slider .slide a,html[lang="zh_CN"] .xmtd .stripe span,html[lang="tw"] .xmtd .stripe span,html[lang="zh_CN"] .partners #hero-content .stripe em,html[lang="tw"] .partners #hero-content .stripe em,html[lang="zh_CN"] .webinars h4,html[lang="tw"] .webinars h4,html[lang="zh_CN"] .alert .account-status,html[lang="tw"] .alert .account-status,html[lang="zh_CN"] #myModalIndex button,html[lang="tw"] #myModalIndex button,html[lang="zh_CN"] #processingpartners .wpwl-button,html[lang="tw"] #processingpartners .wpwl-button,html[lang="zh_CN"] .sidebar.mArea .alert,html[lang="tw"] .sidebar.mArea .alert,html[lang="zh_CN"] .home_videos a h3,html[lang="tw"] .home_videos a h3,html[lang="zh_CN"] .promo__bonus .header-wrap h2,html[lang="tw"] .promo__bonus .header-wrap h2,html[lang="zh_CN"] .prom-package .txt,html[lang="tw"] .prom-package .txt,html[lang="zh_CN"] .promotion span.or,html[lang="tw"] .promotion span.or,html[lang="zh_CN"] .seminars .panel-default>.panel-heading .date,html[lang="tw"] .seminars .panel-default>.panel-heading .date,html[lang="zh_CN"] #complaint .disputed .amount,html[lang="tw"] #complaint .disputed .amount,html[lang="zh_CN"] #galaPromo .bracket h3,html[lang="tw"] #galaPromo .bracket h3,html[lang="zh_CN"] #galaPromo .mainTitle,html[lang="tw"] #galaPromo .mainTitle,html[lang="zh_CN"] #galaPromo .subtitle,html[lang="tw"] #galaPromo .subtitle,html[lang="zh_CN"] #galaPromo .prizes .duration,html[lang="tw"] #galaPromo .prizes .duration,html[lang="zh_CN"] #galaPromo .main-msg.main-text,html[lang="tw"] #galaPromo .main-msg.main-text,html[lang="zh_CN"] #galaPromo.motogp .highlight-text,html[lang="tw"] #galaPromo.motogp .highlight-text,html[lang="zh_CN"] #galaPromo.motogp .track-points .p7,html[lang="tw"] #galaPromo.motogp .track-points .p7,html[lang="zh_CN"] #galaPromo .main-msg.main-text,html[lang="tw"] #galaPromo .main-msg.main-text,html[lang="zh_CN"] #galaPromo.partner .main-header>.wrap h3,html[lang="tw"] #galaPromo.partner .main-header>.wrap h3,html[lang="zh_CN"] #galaPromo.partner .place-labels .cash,html[lang="tw"] #galaPromo.partner .place-labels .cash,html[lang="zh_CN"] #galaPromo .main-msg.main-text,html[lang="tw"] #galaPromo .main-msg.main-text,html[lang="zh_CN"] .gold-silver,html[lang="tw"] .gold-silver,html[lang="zh_CN"] #ib-competition h2.main,html[lang="tw"] #ib-competition h2.main,html[lang="zh_CN"] #ib-competition header h2.sub,html[lang="tw"] #ib-competition header h2.sub,html[lang="zh_CN"] .maintenance h1,html[lang="tw"] .maintenance h1,html[lang="zh_CN"] .seminars .panel-default>.panel-heading .date,html[lang="tw"] .seminars .panel-default>.panel-heading .date,html[lang="zh_CN"] #world-championship .header .mainTitle,html[lang="tw"] #world-championship .header .mainTitle,html[lang="zh_CN"] #world-championship .header h2,html[lang="tw"] #world-championship .header h2,html[lang="zh_CN"] #world-championship .round-wrap .date span,html[lang="tw"] #world-championship .round-wrap .date span,html[lang="zh_CN"] .upload-documents .modalDocuments .modal-header button,html[lang="tw"] .upload-documents .modalDocuments .modal-header button,html[lang="zh_CN"] .mArea .balance-bar span.amount,html[lang="tw"] .mArea .balance-bar span.amount,html[lang="zh_CN"] .xmp-package h3,html[lang="tw"] .xmp-package h3{font-family:"Bebas",Arial,Helvetica,"Microsoft YaHei New","Microsoft Yahei","微软雅黑",宋体,SimSun,STXihei,"华文细黑",sans-serif}.rtl-lang .emphasized-font,html[lang="fa"] .emphasized-font,html[lang="th"] .emphasized-font,.rtl-lang .btn,html[lang="fa"] .btn,html[lang="th"] .btn,.rtl-lang #main-nav.nav-logo>li>a,html[lang="fa"] #main-nav.nav-logo>li>a,html[lang="th"] #main-nav.nav-logo>li>a,.rtl-lang #main-nav.partnersNavMenu>li>a,html[lang="fa"] #main-nav.partnersNavMenu>li>a,html[lang="th"] #main-nav.partnersNavMenu>li>a,.rtl-lang .main-nav .block>span,html[lang="fa"] .main-nav .block>span,html[lang="th"] .main-nav .block>span,.rtl-lang .main-nav .box>span,html[lang="fa"] .main-nav .box>span,html[lang="th"] .main-nav .box>span,.rtl-lang .main-nav .block>span,html[lang="fa"] .main-nav .block>span,html[lang="th"] .main-nav .block>span,.rtl-lang .toggleLeftNav span,html[lang="fa"] .toggleLeftNav span,html[lang="th"] .toggleLeftNav span,.rtl-lang .toggleRightNav span,html[lang="fa"] .toggleRightNav span,html[lang="th"] .toggleRightNav span,.rtl-lang .parent .top-bar h1,html[lang="fa"] .parent .top-bar h1,html[lang="th"] .parent .top-bar h1,.rtl-lang #mobileAppBar .text-wrap h3,html[lang="fa"] #mobileAppBar .text-wrap h3,html[lang="th"] #mobileAppBar .text-wrap h3,.rtl-lang .title-block-wrap,html[lang="fa"] .title-block-wrap,html[lang="th"] .title-block-wrap,.rtl-lang .tabbable .nav-tabs>li>a,html[lang="fa"] .tabbable .nav-tabs>li>a,html[lang="th"] .tabbable .nav-tabs>li>a,.rtl-lang h3.border,html[lang="fa"] h3.border,html[lang="th"] h3.border,.rtl-lang h3#duration,html[lang="fa"] h3#duration,html[lang="th"] h3#duration,.rtl-lang .platforms-center h3,html[lang="fa"] .platforms-center h3,html[lang="th"] .platforms-center h3,.rtl-lang .promotion .prom1 .box h3,html[lang="fa"] .promotion .prom1 .box h3,html[lang="th"] .promotion .prom1 .box h3,.rtl-lang .promotion .prom2 .box h3,html[lang="fa"] .promotion .prom2 .box h3,html[lang="th"] .promotion .prom2 .box h3,.rtl-lang .prom-package .title,html[lang="fa"] .prom-package .title,html[lang="th"] .prom-package .title,.rtl-lang .prom-package .addition,html[lang="fa"] .prom-package .addition,html[lang="th"] .prom-package .addition,.rtl-lang .promotion h2,html[lang="fa"] .promotion h2,html[lang="th"] .promotion h2,.rtl-lang .reasons-list,html[lang="fa"] .reasons-list,html[lang="th"] .reasons-list,.rtl-lang .links-slider .slide a,html[lang="fa"] .links-slider .slide a,html[lang="th"] .links-slider .slide a,.rtl-lang .xmtd .stripe span,html[lang="fa"] .xmtd .stripe span,html[lang="th"] .xmtd .stripe span,.rtl-lang .partners #hero-content .stripe em,html[lang="fa"] .partners #hero-content .stripe em,html[lang="th"] .partners #hero-content .stripe em,.rtl-lang .webinars h4,html[lang="fa"] .webinars h4,html[lang="th"] .webinars h4,.rtl-lang .alert .account-status,html[lang="fa"] .alert .account-status,html[lang="th"] .alert .account-status,.rtl-lang #myModalIndex button,html[lang="fa"] #myModalIndex button,html[lang="th"] #myModalIndex button,.rtl-lang #processingpartners .wpwl-button,html[lang="fa"] #processingpartners .wpwl-button,html[lang="th"] #processingpartners .wpwl-button,.rtl-lang .sidebar.mArea .alert,html[lang="fa"] .sidebar.mArea .alert,html[lang="th"] .sidebar.mArea .alert,.rtl-lang .home_videos a h3,html[lang="fa"] .home_videos a h3,html[lang="th"] .home_videos a h3,.rtl-lang .promo__bonus .header-wrap h2,html[lang="fa"] .promo__bonus .header-wrap h2,html[lang="th"] .promo__bonus .header-wrap h2,.rtl-lang .prom-package .txt,html[lang="fa"] .prom-package .txt,html[lang="th"] .prom-package .txt,.rtl-lang .promotion span.or,html[lang="fa"] .promotion span.or,html[lang="th"] .promotion span.or,.rtl-lang .seminars .panel-default>.panel-heading .date,html[lang="fa"] .seminars .panel-default>.panel-heading .date,html[lang="th"] .seminars .panel-default>.panel-heading .date,.rtl-lang #complaint .disputed .amount,html[lang="fa"] #complaint .disputed .amount,html[lang="th"] #complaint .disputed .amount,.rtl-lang #galaPromo .bracket h3,html[lang="fa"] #galaPromo .bracket h3,html[lang="th"] #galaPromo .bracket h3,.rtl-lang #galaPromo .mainTitle,html[lang="fa"] #galaPromo .mainTitle,html[lang="th"] #galaPromo .mainTitle,.rtl-lang #galaPromo .subtitle,html[lang="fa"] #galaPromo .subtitle,html[lang="th"] #galaPromo .subtitle,.rtl-lang #galaPromo .prizes .duration,html[lang="fa"] #galaPromo .prizes .duration,html[lang="th"] #galaPromo .prizes .duration,.rtl-lang #galaPromo .main-msg.main-text,html[lang="fa"] #galaPromo .main-msg.main-text,html[lang="th"] #galaPromo .main-msg.main-text,.rtl-lang #galaPromo.motogp .highlight-text,html[lang="fa"] #galaPromo.motogp .highlight-text,html[lang="th"] #galaPromo.motogp .highlight-text,.rtl-lang #galaPromo.motogp .track-points .p7,html[lang="fa"] #galaPromo.motogp .track-points .p7,html[lang="th"] #galaPromo.motogp .track-points .p7,.rtl-lang #galaPromo .main-msg.main-text,html[lang="fa"] #galaPromo .main-msg.main-text,html[lang="th"] #galaPromo .main-msg.main-text,.rtl-lang #galaPromo.partner .main-header>.wrap h3,html[lang="fa"] #galaPromo.partner .main-header>.wrap h3,html[lang="th"] #galaPromo.partner .main-header>.wrap h3,.rtl-lang #galaPromo.partner .place-labels .cash,html[lang="fa"] #galaPromo.partner .place-labels .cash,html[lang="th"] #galaPromo.partner .place-labels .cash,.rtl-lang #galaPromo .main-msg.main-text,html[lang="fa"] #galaPromo .main-msg.main-text,html[lang="th"] #galaPromo .main-msg.main-text,.rtl-lang .gold-silver,html[lang="fa"] .gold-silver,html[lang="th"] .gold-silver,.rtl-lang #ib-competition h2.main,html[lang="fa"] #ib-competition h2.main,html[lang="th"] #ib-competition h2.main,.rtl-lang #ib-competition header h2.sub,html[lang="fa"] #ib-competition header h2.sub,html[lang="th"] #ib-competition header h2.sub,.rtl-lang .maintenance h1,html[lang="fa"] .maintenance h1,html[lang="th"] .maintenance h1,.rtl-lang .seminars .panel-default>.panel-heading .date,html[lang="fa"] .seminars .panel-default>.panel-heading .date,html[lang="th"] .seminars .panel-default>.panel-heading .date,.rtl-lang #world-championship .header .mainTitle,html[lang="fa"] #world-championship .header .mainTitle,html[lang="th"] #world-championship .header .mainTitle,.rtl-lang #world-championship .header h2,html[lang="fa"] #world-championship .header h2,html[lang="th"] #world-championship .header h2,.rtl-lang #world-championship .round-wrap .date span,html[lang="fa"] #world-championship .round-wrap .date span,html[lang="th"] #world-championship .round-wrap .date span,.rtl-lang .upload-documents .modalDocuments .modal-header button,html[lang="fa"] .upload-documents .modalDocuments .modal-header button,html[lang="th"] .upload-documents .modalDocuments .modal-header button,.rtl-lang .mArea .balance-bar span.amount,html[lang="fa"] .mArea .balance-bar span.amount,html[lang="th"] .mArea .balance-bar span.amount,.rtl-lang .xmp-package h3,html[lang="fa"] .xmp-package h3,html[lang="th"] .xmp-package h3{font-family:"Bebas",Tahoma,sans-serif}.emphasized-symbol,.red-number,.stripe em,.benefit-account em,.prom-package .plus,.prom-package .num,span.promo-num h5,.promotion .small-half-box h5,.cirle,.page404 h1,.about-xm .box-border1 h4,.promotion .half-box h5,.promotion .small-half-box h5,.pagination,.zero-account .num,#dashboard-wrap>div,ol.reasons-list li a b,.promotion .prom1 .box-left span,.promotion .prom1 .box-right span,.promotion .prom2 .box-left span,.promotion .prom2 .box-right span,.about-xm .timeline .year,#alnassr-tickets .header,#alnassr-tickets h3.big,.hanami .duration,.hanami .duration span,#ib-competition header h2.sub:before,#ib-competition header h2.sub:after,#world-championship .round-circle .round,#world-championship .round-circle .price,#world-championship .round-wrap.rect .round-circle .round,#world-championship .round-wrap.rect .round-circle .participant,#world-championship .round-wrap.xs li .content .num,.promotion .half-box h5,.promotion .small-half-box h5{font-family:"Bebas","BebasExt",sans-serif}.testingRemoveThis{display:none}html[lang="hi"] h2{line-height:43px}html[lang="si"] h2,html[lang="si"] .h2,html[lang="si"] h3,html[lang="si"] .h3,html[lang="si"] h4,.html[lang="si"] .h4{line-height:1.3}html[lang="si"] .metatrader h2,html[lang="si"] .metatrader .h2{line-height:1.4}html{background-color:white}section{margin-bottom:40px}.main-site.hp-v17 section{margin:0 auto}.layout{position:relative;overflow:hidden;width:100%;background-color:#222}.site-canvas{width:100%;height:100%;position:relative;background-color:#fff}.partners.xmtd .site-canvas{height:unset !important}.row>*:before,.row>*:after{content:" ";display:table}.row>*:after{clear:both}a,.link-like{outline:none !important;text-decoration:none !important;-webkit-transition:all .3s ease;-o-transition:all .3s ease;transition:all .3s ease;color:#d51820;-webkit-transform:translateZ(0);cursor:pointer}.error-with-link{color:#337ab7;font-size:14px}a:focus,a:visited,.link-like:focus,.link-like:visited{color:#d51820}a:hover{text-decoration:underline;color:#d51820}.link-like:hover{color:#d51820;text-decoration:none}span.red,small.red,a.red,.red{color:#d51820 !important;text-decoration:none !important}a.black,.black{color:#444 !important;text-decoration:none !important}a.black:hover{color:#d51820}h4 a{color:#d51820 !important}h4 a:hover{color:#000 !important}a.white,.white{color:#fff !important;text-decoration:none !important}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #e2e2e2}hr.red{margin:0;padding:0;border-top:3px solid #d51820 !important}hr.sb{margin-left:-15px}hr.black{border-top:1px solid #000;margin:5px 0}hr.bonus{border-top:1px solid #000;margin:25px 0}sup{top:-0.25em}.mArea hr{margin:12px 0}.hr_line{width:13%;float:left;border-color:#b7b7b7}header .cursorNone{cursor:default;pointer-events:none}.hp-v17 article p{margin-top:20px}.clear{width:100%;clear:both;float:left}.red-list-style{color:#d51820;margin-bottom:0}.red-list-style span{color:#333}.box-borderline{display:block;border-left:4px solid #d51820;padding-left:25px;margin-bottom:25px}.rtl-lang .box-borderline,html[lang="fa"] .box-borderline{padding-left:0;padding-right:25px;border-left:0;border-right:4px solid #d51820}#research-wrap .line,.main-site.hp-v17 .line-link{position:relative;width:100%}.main-site.hp-v17 .line-link{font-size:13px}#research-wrap .line:before,.main-site.hp-v17 .line-link:before{position:absolute;top:11px;content:"";width:100%;height:1px;background-color:#ccc}#research-wrap .line>a,.main-site.hp-v17 .line-link>a{position:relative;background-color:#fff;padding-left:10px;z-index:1;float:right}.rtl-lang.main-site.hp-v17 .line-link>a,html[lang="fa"] .main-site.hp-v17 .line-link>a{float:left}#research-wrap .line>a>.fa,.main-site.hp-v17 .line-link>a>.fa{margin-right:5px}.rtl-lang.main-site.hp-v17 .line-link>a>.fa,html[lang="fa"] .main-site.hp-v17 .line-link>a>.fa{margin-left:15px;margin-right:5px}.research h2 img{margin-right:15px}#research-team figure .border-gray{border:3px solid #e4e4e4}#research-team #florentiades,#research-team #selena,#research-team #raffi,#research-team #magie,#research-team #jane{padding-top:100px;margin-top:-100px}.avatar{display:block;border:1px solid #000}.person{position:relative;display:block;width:31px;height:35px;margin:0 auto;text-align:center;background:url('https://cloud.xm-cdn.com/static/common/icons/person.png?v=dea78770693bdc58942bda2fc7858f23') no-repeat 0 0}.s-icon{float:left;margin-right:10px}.rtl-lang .s-icon,html[lang="fa"] .s-icon{float:right;margin-left:10px;margin-right:0}span.graytext{color:#6b6b6b}.center-box{float:none !important;margin:0 auto !important}.blocktest{display:block}.cancel{color:#d51820;cursor:pointer}.container-xs-height{display:table;padding-left:0;padding-right:0}.row-xs-height{display:table;width:100%}.col-xs-height{display:table-cell;float:none !important}.hp-v17 .border-title.reset{margin:0}.hp-v17 .border-title{font-weight:700;text-transform:uppercase;font-size:16px;border:2px solid #cbcbcb !important;color:#9d9d9d;padding:12px;text-align:center;height:45px;margin-bottom:30px}.subtext:not(.fa){font-size:13px;color:#999}.hp-v17 .subtext{color:#000}.confirmation h3{font-size:30px;color:#000;margin-bottom:5px}.confirmation h4{font-size:22px;color:#000;font-weight:bold;margin-bottom:20px}.confirmation h5{font-size:20px;color:#000;margin-bottom:10px}.confirmation .line{border-left:4px solid #d51820;padding-left:15px}.rtl-lang .confirmation .line,html[lang="fa"] .confirmation .line{border-left:0;padding-left:0;border-right:4px solid #d51820;padding-right:15px}.confirmation .vertical-line h5,.confirmation .vertical-line p{border-left:4px solid #d51820;padding-left:15px;margin-bottom:0;margin-top:0}.rtl-lang .confirmation .vertical-line h5,.rtl-lang .confirmation .vertical-line p{border-left:0;border-right:4px solid #d51820;padding-left:0;padding-right:15px}.confirmation .vertical-line p{padding-top:10px}.confirmation .vertical-line .col-md-12:first-child p{padding-top:0}.webinars .photos span{margin-left:10px}.webinars .team img{display:block;width:243px;height:245px;margin:15px auto 30px auto;background-color:#eaeaea}.not-applicable .block>*{opacity:.5}.title-block-wrap{border-width:1px;border-color:#cbcbcb;height:45px;font-size:16px;font-weight:700;line-height:45px;color:#888;text-align:center;margin:0;padding:0;margin-bottom:30px;text-transform:uppercase}.rtl-lang .title-block-wrap{font-size:14px}.border.title-block-wrap{border:1px solid #cdcdcd;padding:0}html[lang="el"] .main-site.hp-v17.partners .title-block-wrap{font-size:14px}.title-block-wrap>a{height:45px;line-height:normal !important}.up15{position:relative;top:-15px !important}.indices ul.arrows{float:left}.centered{text-align:center;margin-bottom:20px}.red_title{color:#d51820;margin-bottom:20px}.search-keyword{font-size:25px;font-weight:300;font-style:italic;color:#d51820}h2 .search-results,p .search-results{font-weight:bold}.search-showing{color:#333;font-size:19px;font-style:italic;font-weight:300;line-height:40px}.research h3{font-size:24px;line-height:26px}.research .video-overview h3{font-size:22px}.about-xm h2.big{font-size:43px;font-weight:bold;margin-bottom:10px}html[lang="ur"] .about-xm h2.big{font-size:38px}.platforms-center h2{margin:0;padding:0}.platforms-center h3{font-size:30px;font-weight:700;text-transform:uppercase}.platforms-center h4{font-size:20px;color:#000;font-weight:700 !important}.anchor{height:38px;margin-top:-38px}.anchor-tag{height:100px;margin-top:-100px}.main-site.hp-v17 .risk-wrap{display:block;font-size:12px;text-align:center;margin-top:8px}.risk-with-btn .risk-text{display:block;font-size:12px;text-align:center;margin-top:5px}.btn.btn--w450{max-width:450px !important;margin:0 auto !important}.btn.btn--w350{max-width:350px !important;margin:0 auto !important}.main-site.hp-v17 .platforms-content .main-title{display:block;font-size:30px;font-weight:500;line-height:normal;margin:0;text-align:center}.main-site.hp-v17 .platforms-content .subtext{font-size:14px;text-align:center}.main-site.hp-v17 .platforms-content .btn{font-size:24px;padding:15.5px 80px !important}html[lang="el"] .main-site.hp-v17 .platforms-content .btn{font-size:22px}.main-site.hp-v17 .hp-tabs-content .main-title{display:block;font-size:30px;font-weight:500;line-height:normal;margin:0;text-align:center}.section{padding:0;background-color:#fff;position:relative}img.size-thumbnail{border:1px solid #ccc;float:left;margin:0 8px 15px 0;padding:3px}.rtl-lang img.size-thumbnail,html[lang="fa"] img.size-thumbnail{float:right;margin:0 0 15px 8px}#economic-calendar{position:relative;overflow:hidden;overflow-y:auto;height:100%;height:930px}.red-number{font-size:70px;font-style:normal;font-weight:300;border:0;color:#d72027;margin:0;padding:4px 0 0 0;white-space:nowrap;line-height:97px}.other_tin_text{font-size:13px}.xmApi table.plain,.xmApi table.plain th,.xmApi table.plain td{border:1px solid #000 !important}.xmApi table.plain th{color:#333;font-size:16px;font-weight:bold;padding:5px 30px}.xmApi table.plain td{color:#333;font-size:16px;padding:3px}.partners .sharethis-inline-share-buttons{padding-left:15px;padding-right:15px}.rtl-lang .partners .sharethis-inline-share-buttons,html[lang="fa"] .partners .sharethis-inline-share-buttons{text-align:right !important}.kid-warning-img{position:relative;max-width:341px;border:2px solid #000;background-color:#3296ff;padding:7px;color:#fff}.kid-number-box ul{display:table;table-layout:fixed;width:100%;border-collapse:collapse}.kid-number-box ul li{display:table-cell;vertical-align:middle;text-align:center;border:3px solid #fff;font-size:28px;font-weight:700}.kid-number-box ul li.num-warning{background-color:#ff0;color:#000}.kid-warning-img span{font-size:12px}.kid-warning-parag{padding-left:60px;background-size:50px 50px;background-position:left;background-repeat:no-repeat}.rtl-lang .kid-warning-parag,html[lang="fa"] .kid-warning-parag{padding-left:0;padding-right:60px;background-position:right}.kid-warning-img p{font-size:10px;text-align:justify;margin-bottom:0;line-height:1.1}.line-arrow{position:relative;border-top:1px solid #ccc;width:100%;margin-bottom:15px;float:none}.line-arrow::before,.line-arrow::after{content:'';display:block;position:absolute;width:0;height:0;left:50%;margin:0 auto;border-style:solid;z-index:1;border-width:13px 22px 0 22px;margin-left:-22px}.line-arrow::before{border-color:#ccc transparent transparent transparent;top:0}.line-arrow::after{border-color:#fff transparent transparent transparent;top:-1px}.bracket-title{position:relative;padding:10px 20px}.bracket-title::before,.bracket-title::after{content:' ';border:4px solid #d51820;position:absolute;top:0;height:100%;width:18px}.bracket-title::before{left:0;border-right:0}.bracket-title::after{right:0;border-left:0}.tos-wrapper{direction:ltr}body.rtl-lang,html[lang="fa"] body{direction:rtl}.rtl-lang .col-sm-1,.rtl-lang .col-sm-10,.rtl-lang .col-sm-11,.rtl-lang .col-sm-12,.rtl-lang .col-sm-2,.rtl-lang .col-sm-3,.rtl-lang .col-sm-4,.rtl-lang .col-sm-5,.rtl-lang .col-sm-6,.rtl-lang .col-sm-7,.rtl-lang .col-sm-8,.rtl-lang .col-sm-9,html[lang="fa"] .col-sm-1,html[lang="fa"] .col-sm-10,html[lang="fa"] .col-sm-11,html[lang="fa"] .col-sm-12,html[lang="fa"] .col-sm-2,html[lang="fa"] .col-sm-3,html[lang="fa"] .col-sm-4,html[lang="fa"] .col-sm-5,html[lang="fa"] .col-sm-6,html[lang="fa"] .col-sm-7,html[lang="fa"] .col-sm-8,html[lang="fa"] .col-sm-9{float:none}.rtl-lang .col-xs-1,.rtl-lang .col-xs-10,.rtl-lang .col-xs-11,.rtl-lang .col-xs-12,.rtl-lang .col-xs-2,.rtl-lang .col-xs-3,.rtl-lang .col-xs-4,.rtl-lang .col-xs-5,.rtl-lang .col-xs-6,.rtl-lang .col-xs-7,.rtl-lang .col-xs-8,.rtl-lang .col-xs-9,html[lang="fa"] .col-xs-1,html[lang="fa"] .col-xs-10,html[lang="fa"] .col-xs-11,html[lang="fa"] .col-xs-12,html[lang="fa"] .col-xs-2,html[lang="fa"] .col-xs-3,html[lang="fa"] .col-xs-4,html[lang="fa"] .col-xs-5,html[lang="fa"] .col-xs-6,html[lang="fa"] .col-xs-7,html[lang="fa"] .col-xs-8,html[lang="fa"] .col-xs-9{float:right}.rtl-lang .col-xs-offset-2,html[lang="fa"] .col-xs-offset-2{margin-left:0;margin-right:16.66666667%}.rtl-lang .fa-long-arrow-right:before,html[lang="fa"] .fa-long-arrow-right:before{content:"\f177"}.rtl-lang .fa-caret-right:before,html[lang="fa"] .fa-caret-right:before{content:"\f0d9"}.rtl-lang .fa-arrow-right:before,html[lang="fa"] .fa-arrow-right:before{content:"\f060"}.rtl-lang .btn.nextprev .fa-arrow-right:before,html[lang="fa"] .btn.nextprev .fa-arrow-right:before{content:"\f061"}.rtl-lang .date-navigation .fa-chevron-left:before,html[lang="fa"] .date-navigation .fa-chevron-left:before{content:"\f054"}.rtl-lang .date-navigation .fa-chevron-right:before,html[lang="fa"] .date-navigation .fa-chevron-right:before{content:"\f053"}.rtl-lang dd,html[lang="fa"] dd{margin-right:0}html[lang="zh_CN"] em{font-style:normal}@media(min-width:768px){.bracket-title{padding:10px 30px}.rtl-lang .col-sm-1,.rtl-lang .col-sm-10,.rtl-lang .col-sm-11,.rtl-lang .col-sm-12,.rtl-lang .col-sm-2,.rtl-lang .col-sm-3,.rtl-lang .col-sm-4,.rtl-lang .col-sm-5,.rtl-lang .col-sm-6,.rtl-lang .col-sm-7,.rtl-lang .col-sm-8,.rtl-lang .col-sm-9,html[lang="fa"] .col-sm-1,html[lang="fa"] .col-sm-10,html[lang="fa"] .col-sm-11,html[lang="fa"] .col-sm-12,html[lang="fa"] .col-sm-2,html[lang="fa"] .col-sm-3,html[lang="fa"] .col-sm-4,html[lang="fa"] .col-sm-5,html[lang="fa"] .col-sm-6,html[lang="fa"] .col-sm-7,html[lang="fa"] .col-sm-8,html[lang="fa"] .col-sm-9{float:right}.rtl-lang .col-sm-offset-0,html[lang="fa"] .col-sm-offset-0{margin-left:0;margin-right:0}.rtl-lang .col-sm-offset-1,html[lang="fa"] .col-sm-offset-1{margin-left:0;margin-right:8.33333333%}.rtl-lang .col-sm-offset-3,html[lang="fa"] .col-sm-offset-3{margin-left:0;margin-right:25%}.rtl-lang .col-sm-offset-4,html[lang="fa"] .col-sm-offset-4{margin-left:0;margin-right:33.33333333%}.rtl-lang .col-sm-pull-6,html[lang="fa"] .col-sm-pull-6{left:50%;right:auto}.rtl-lang .col-sm-push-6,html[lang="fa"] .col-sm-push-6{right:50%;left:auto}}@media(min-width:992px){.platforms-center.wrap{padding:0 15px}.platforms-center [class*="col-md-4"]{padding:0 50px;border-right:1px solid #e2e2e2}.platforms-center [class*="col-md-4"]:last-child{border-right:0}.site-canvas .toggle-bar-line{display:none}.view-all{float:right}img.size-thumbnail{margin:0 15px 15px 0}.rtl-lang img.size-thumbnail,html[lang="fa"] img.size-thumbnail{margin:0 0 15px 15px}.rtl-lang .col-md-1,.rtl-lang .col-md-10,.rtl-lang .col-md-11,.rtl-lang .col-md-12,.rtl-lang .col-md-2,.rtl-lang .col-md-3,.rtl-lang .col-md-4,.rtl-lang .col-md-5,.rtl-lang .col-md-6,.rtl-lang .col-md-7,.rtl-lang .col-md-8,.rtl-lang .col-md-9,html[lang="fa"] .col-md-1,html[lang="fa"] .col-md-10,html[lang="fa"] .col-md-11,html[lang="fa"] .col-md-12,html[lang="fa"] .col-md-2,html[lang="fa"] .col-md-3,html[lang="fa"] .col-md-4,html[lang="fa"] .col-md-5,html[lang="fa"] .col-md-6,html[lang="fa"] .col-md-7,html[lang="fa"] .col-md-8,html[lang="fa"] .col-md-9{float:right}.rtl-lang .col-md-offset-1,html[lang="fa"] .col-md-offset-1{margin-left:0;margin-right:8.33333333%}.rtl-lang .col-md-offset-2,html[lang="fa"] .col-md-offset-2{margin-left:0;margin-right:16.66666667%}.rtl-lang .col-md-offset-3,html[lang="fa"] .col-md-offset-3{margin-left:0;margin-right:25%}.rtl-lang .col-md-pull-6,html[lang="fa"] .col-md-pull-6{left:50%;right:auto}.rtl-lang .col-md-push-6,html[lang="fa"] .col-md-push-6{right:50%;left:auto}.rtl-lang .col-md-pull-3,html[lang="fa"] .col-md-pull-3{left:25%;right:auto}.rtl-lang .col-md-push-3,html[lang="fa"] .col-md-push-3{right:25%;left:auto}}@media(min-width:1200px){.section{padding:70px 0 0 0;background-color:#f1f1f1}.section::before,.section.bottom::after{content:'';position:absolute;display:block;left:0;right:0;margin:0 auto;border-style:solid;border-width:35px 280px 0 280px;z-index:9;width:0;height:0}.section::before{top:0;border-color:#fff transparent transparent transparent}.section.bottom::after{bottom:-30px;border-color:#f1f1f1 transparent transparent transparent}.section .line-arrow::after{border-color:#f1f1f1 transparent transparent transparent}.rtl-lang .col-lg-offset-2,html[lang="fa"] .col-lg-offset-2{margin-right:16.66666667%}.btn.btn--m0{margin:0 !important}}@media(max-width:1290px){.layout>section{margin-bottom:30px}}@media(max-width:1200px){.hidden-l-sm{display:none}}@media(max-width:991px){.center-sm{max-width:450px;margin:0 auto !important}section.container{margin-top:30px}section{margin-bottom:0}.sm-txt-center{text-align:center}.partner-types h2,.partner-types h3,.partner-types p{text-align:center}.animating .site-canvas{transition:transform .25s ease-in-out;-webkit-transition:-webkit-transform .25s ease-in-out}}@media(max-width:767px){.center-xs{max-width:450px;margin:0 auto !important}article small{display:block;text-align:left;margin-top:15px}}.xmtrader-content{border-bottom:1px solid #cecece}.xmt-home-promo-left h2{font-size:24px !important;margin-bottom:10px}.xmt-home-promo-left p{font-size:13px}.xmtrader-content p.sub-text{font-size:15px;margin-right:0}.xmt-home-promo-left,.xmt-home-promo-right{float:none;display:table-cell;vertical-align:bottom}.xmtrader-content hr{width:15%;margin:15px 0 15px;min-height:1px;height:5px;background:#d51820}span.no-wrap{white-space:nowrap}.android_app img{width:120px;border:1px solid #bdbdbd}.android_app .fa-android{margin-right:8px}@media(min-width:1200px){.xmtrader-content{border-bottom:0}.android_app img{position:absolute;margin:0;top:-23px;transform:translateX(-50%);margin:0}}@media(min-width:998px){.xmtrader-content p.sub-text{font-size:22px}.xmt-home-promo-left h2{font-size:30px !important}.xmt-home-promo-right{padding:0 !important}.xmt-home-promo-left p{font-size:16px}.android_app--header img{top:0;transform:translateY(-65%);margin-left:20px}}.btn{text-shadow:none !important}button{outline:none !important;border:0;background:0}a.btn,button.btn{text-transform:uppercase;font-weight:700;text-align:center;color:#fff;white-space:normal;line-height:1;padding:8px 20px !important;display:inline-block;vertical-align:middle;*vertical-align:auto;*zoom:1;*display:inline;-moz-user-select:none;-webkit-user-select:none;-khtml-user-select:none;-o-user-select:none;-ms-user-select:none;user-select:none;-webkit-transition:all .3s ease;-o-transition:all .3s ease;transition:all .3s ease;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-moz-border-radius:0;-webkit-border-radius:0;border-radius:0;background:0;border:1px solid #fff;-webkit-transform:translateZ(0)}.rtl-lang a.btn,.rtl-lang button.btn,html[lang="fa"] a.btn,html[lang="fa"] button.btn{font-weight:400}a.btn.text-nowrap,button.btn.text-nowrap{white-space:nowrap}a.btn:hover,button.btn:hover{color:#fff}a.btn.btn-full,button.btn.btn-full{width:100%}a.btn.btn-big,button.btn.btn-big{font-size:26px;border-width:2px;padding:5px 20px;line-height:1;line-height:normal;letter-spacing:.025em}a.btn.btn-big:hover,button.btn.btn-big:hover{opacity:.5;filter:alpha(opacity=50)}a.btn.btn-red .fa,a.btn.btn--primary_green .fa,a.btn.btn-green .fa,a.btn.btn--secondary_red .fa,button.btn.btn-green .fa,button.btn.btn--secondary_red .fa,a.btn.btn-black .fa,button.btn.btn-red .fa,button.btn.btn--primary_green .fa{font-size:18px;vertical-align:middle;margin-right:15px}a.btn.btn-solid,button.btn.btn-solid{color:#fff;background-color:#888;border:0;text-transform:uppercase;font-size:20px;text-shadow:0 1px 0 rgba(0,0,0,0.75)}.btn.btn-block{max-width:450px}a.btn.btn-solid,button.btn.btn-red,.btn.btn-red,button.btn.btn--primary_green,.btn.btn--primary_green,.btn.btn-blck,button.btn.btn-grey{font-size:24px;letter-spacing:.5px !important}.btn-big i.fa{margin-left:20px}a.btn.btn-solid:hover,button.btn.btn-solid:hover{background-color:#666}a.btn.btn-solid.btn-gray,button.btn.btn-solid.btn-gray{background-color:#868686}a.btn.btn-solid.btn-gray:hover,button.btn.btn-solid.btn-gray:hover{background-color:#777}a.btn.btn-drop,button.btn.btn-drop{padding-right:25px;position:relative;font-size:14px;letter-spacing:.5px;color:#ccc;border-color:#ccc !important;padding:9px 20px 6px 20px !important}html[lang="pl"] .btn.btn-drop,html[lang="es"] .btn.btn-drop{padding:9px 20px 6px 20px !important}button.btn.btn-drop>i{position:relative;top:-1px}a.btn.btn-drop:after,button.btn.btn-drop:after{content:'';content:'';width:0;height:0;display:block;border-style:solid;position:absolute;border-width:5px 5px 0 5px;border-color:#ccc transparent transparent transparent;position:absolute;right:8px;top:50%;margin-top:-2px;-webkit-transition:all .3s ease;-o-transition:all .3s ease;transition:all .3s ease}.btn-red small,.btn--primary_green small,.btn-green small,.btn--secondary_red small,.btn-gray small{display:block;margin-top:2px;font-size:12px;font-weight:bold;text-shadow:none !important;text-transform:none}html[lang="hi"] .btn-red small,html[lang="hi"] .btn--primary_green small,html[lang="hi"] .btn-green small,html[lang="hi"] .btn--secondary_red small,html[lang="hi"] .btn-gray small{line-height:16px}.open a.btn.btn-drop,.open button.btn.btn-drop{color:#fff}.open a.btn.btn-drop:after,.open button.btn.btn-drop:after{-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);-o-transform:rotate(180deg);transform:rotate(180deg)}.btn.nextprev{min-width:100px;padding:8px 30px !important}a.btn.btn-red .fa,a.btn.btn--primary_green .fa,a.btn.btn-green .fa,a.btn.btn--secondary_red .fa,a.btn.btn-gray .fa,a.btn.btn-black .fa,button.btn.btn-red .fa,button.btn.btn--primary_green .fa,button.btn.btn-green .fa,button.btn.btn--secondary_red .fa,button.btn.btn-gray .fa,button.btn.btn- .fa{font-size:18px;vertical-align:middle;margin-right:15px}.btn.nextprev i.fa{margin:0}.btn-prev:before{content:"\f060";font-family:FontAwesome;margin-right:15px}.btn-next:after{content:"\f061";font-family:FontAwesome;margin-left:15px}a.btn.btn-red,button.btn.btn-red,a.btn.btn--primary_green,button.btn.btn--primary_green{border-color:#29a643 !important;color:#29a643 !important;background:none !important}a.btn.btn-red:hover,button.btn.btn-red:hover,a.btn.btn--primary_green:hover,button.btn.btn--primary_green:hover{border-color:#FFF !important;color:#FFF !important;background:#29a643 !important}a.btn.btn-green,button.btn.btn-green,a.btn.btn--secondary_red,button.btn.btn--secondary_red{border-color:#d51820 !important;color:#d51820 !important;background:none !important}a.btn.btn-green:hover,button.btn.btn-green:hover,a.btn.btn--secondary_red:hover,button.btn.btn--secondary_red:hover{border-color:#FFF !important;color:#FFF !important;background:#d51820 !important}a.btn.btn-solid.btn-red,button.btn.btn-solid.btn-red,a.btn.btn-solid.btn--primary_green,button.btn.btn-solid.btn--primary_green{background-color:#29a643 !important;color:#fff !important}a.btn.btn-solid.btn-red:hover,button.btn.btn-solid.btn-red:hover,a.btn.btn-solid.btn--primary_green:hover,button.btn.btn-solid.btn--primary_green:hover{background-color:#238c38 !important;color:#fff !important}a.btn.btn-solid.btn-green,button.btn.btn-solid.btn-green,a.btn.btn-solid.btn--secondary_red,button.btn.btn-solid.btn--secondary_red{background-color:#d51820 !important;color:#fff !important}a.btn.btn-solid.btn-green:hover,button.btn.btn-solid.btn-green:hover,a.btn.btn-solid.btn--secondary_red:hover,button.btn.btn-solid.btn--secondary_red:hover{background-color:#b30000 !important;color:#fff !important}a.btn.btn-solid.btn-blue,button.btn.btn-solid.btn-blue{background-color:#31708f !important;color:#fff !important}a.btn.btn-solid.btn-blue:hover,button.btn.btn-solid.btn-blue:hover{background-color:#275973 !important;color:#fff !important}.btn-gray-o{color:#6c6c6d !important;background:none !important;border:1px solid #6c6c6d !important}a.btn.btn-solid.btn-gray-o,button.btn.btn-solid.btn-gray-o{color:#6c6c6d !important;background:none !important;border:1px solid #6c6c6d !important}a.btn.btn-solid.btn-gray-o:hover,button.btn.btn-solid.btn-gray-o:hover{color:#fff !important;background-color:#6c6c6d !important;border:1px solid #6c6c6d !important}.btn-black-o{color:#000 !important;background:none !important;border:1px solid #000 !important}a.btn.btn-solid.btn-black-o,button.btn.btn-solid.btn-black-o{color:#000 !important;background:none !important;border:1px solid #000 !important}.btn-black-o .fa,a.btn.btn-solid.btn-black-o .fa,button.btn.btn-solid.btn-black-o .fa{margin-left:10px;font-size:23px}.rtl-lang .btn-black-o .fa,.rtl-lang a.btn.btn-solid.btn-black-o .fa,.rtl-lang button.btn.btn-solid.btn-black-o .fa{margin-left:0;margin-right:10px}a.btn.btn-solid.btn-black-o:hover,button.btn.btn-solid.btn-black-o:hover{color:#fff !important;background-color:#000 !important;border:1px solid #000 !important}.btn-dark{color:#fff !important;background:#454545 !important;border:1px solid #000 !important}a.btn.btn-solid.btn-dark,button.btn.btn-solid.btn-dark{color:#fff !important;background:#454545 !important;border:1px solid #000 !important}.btn-dark .fa,a.btn.btn-solid.btn-dark .fa,button.btn.btn-solid.btn-dark .fa{margin-left:10px;font-size:23px}.rtl-lang .btn-dark .fa,.rtl-lang a.btn.btn-solid.btn-dark .fa,.rtl-lang button.btn.btn-solid.btn-dark .fa{margin-left:0;margin-right:10px}a.btn.btn-solid.btn-dark:hover,button.btn.btn-solid.btn-dark:hover{color:#fff !important;background-color:#454545 !important;border:1px solid #000 !important}a.btn-orange,button.btn-orange{color:#fff !important;background-color:#fea812 !important;border-color:transparent !important}a.btn-orange:hover,a.btn-orange:focus,button.btn-orange:hover,button.btn-orange:focus{color:#fff !important;background-color:#ea9e26 !important}a.btn-orange-o,button.btn-orange-o{color:#fea812 !important;background-color:transparent !important;border-color:#fea812 !important}a.btn-orange-o:hover,a.btn-orange-o:focus,button.btn-orange-o:hover,button.btn-orange-o:focus{color:#fff !important;background-color:#fea812 !important}.btn-black{display:block;margin:0 auto;font-size:24px;text-shadow:none;color:#fff;background-color:#111 !important}.btn-black:hover{opacity:.8;background-color:#000 !important}.btn.btn-green:hover,.btn.btn--secondary_red:hover{background-color:#238c38 !important}.btn-gray{display:block;margin:0 auto;font-size:24px;text-shadow:none;color:#fff;background-color:#6c6c6c !important}.stment-btn{width:100%}.stment-btn .btn{float:left;padding:10px 12px !important}.stment-btn .btn+.btn{margin-left:5%}.stment-btn button:nth-child(1){width:15%}.stment-btn button:nth-child(2){width:60% !important}.stment-btn button:nth-child(3){width:15%}.stment-btn .btn:hover{background-color:#595959 !important}.btn-group .btn.btn-default{font-size:14px;font-weight:bold;text-transform:uppercase;height:28px;line-height:15px;border-radius:0;padding:6px}.btn-group .btn:nth-child(1).btn-default,.btn-group .btn.btn-default:not(.active){background:white;border-radius:0;box-shadow:1px 1px 5px rgba(0,0,0,0.2);background-image:-webkit-linear-gradient(top,white 40%,#f0f0f0);background-image:-moz-linear-gradient(top,white 40%,#f0f0f0);background-image:-o-linear-gradient(top,white 40%,#f0f0f0);background-image:linear-gradient(to bottom,white 40%,#f0f0f0)}.btn-group .btn:nth-child(1).btn-default.active{background:#26d53f;box-shadow:inset 0 1px 2px rgba(0,0,0,0.15),inset 0 0 3px rgba(0,0,0,0.2);color:#fff;text-shadow:0 1px rgba(0,0,0,0.2)}a.btn.btn-solid.btn-blue.info-lbgr{background-color:#1c8cc3 !important}a.btn.btn-solid.btn-blue.info-lbgr:hover{background-color:#3981a7 !important}.txt-with-btn{width:287px !important}.greenRed-btns .btn{display:block;max-width:500px;margin:0 auto}.greenRed-btns .btn.btn-red,.greenRed-btns .btn.btn--primary_green{font-size:30px;padding:15px 20px !important}.greenRed-btns .btn.btn-green,.greenRed-btns .btn.btn--secondary_red{font-size:24px;padding:10px 20px !important}.greenRed-btns .btn.btn-outline{font-size:24px}.btn-appstore,.btn-playstore{position:relative;display:block;margin:0 auto;text-align:center;max-width:116px}.btn.no-arrow{cursor:default}a.btn.btn-drop.no-arrow::after,button.btn.btn-drop.no-arrow::after{display:none}.main-site.hp-v17 .btn-red small,.main-site.hp-v17 .btn--primary_green small,.main-site.hp-v17 .btn-green small,.main-site.hp-v17 .btn--secondary_red small,.main-site.hp-v17 .btn-gray small{font-size:13px !important;font-weight:300}.main-site.hp-v17 .btn.btn-gray{border-color:#6c6c6c !important;color:#6c6c6c !important;background-color:transparent !important}.main-site.hp-v17 .btn.btn-gray:hover,.main-site.hp-v17 .btn.btn-gray:focus{color:#fff !important;background-color:#6c6c6c !important}.hp-v17.partners a.btn.btn-solid.btn-gray,.hp-v17.partners button.btn.btn-solid.btn-gray{color:#fff !important;background-color:#868686 !important}.btn.btn-applynow{padding:8px 80px !important}.main-site.hp-v17 a.btn.btn-solid,.main-site.hp-v17 button.btn.btn-red,.main-site.hp-v17 .btn.btn-red,.main-site.hp-v17 button.btn.btn--primary_green,.main-site.hp-v17 .btn.btn--primary_green,.main-site.hp-v17 .btn.btn-green,.main-site.hp-v17 .btn.btn--secondary_red,.main-site.hp-v17 .btn.btn-gray,.main-site.hp-v17 #awards-content .btn{font-size:24px}html[lang="si"] .main-site.hp-v17 #awards-content .btn{line-height:1.2}.btn.btn-yellow.center-block{font-size:28px}.btn-yellow{max-width:410px;font-size:30px;color:#000;padding:8px 20px;line-height:normal;background-color:#f6d72f;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0}.btn-yellow:hover,.btn-yellow:focus{color:#000;background-color:#e6d72f}.btn-disabled{pointer-events:none}.rtl-lang.main-site.hp-v17 .btn .fa{margin-right:0;margin-left:15px}.rtl-lang a.btn.btn-red .fa.fa-pencil-square-o,.rtl-lang a.btn.btn--primary_green .fa.fa-pencil-square-o,.rtl-lang a.btn.btn-green .fa.fa-download,.rtl-lang a.btn.btn--secondary_red .fa.fa-download,.rtl-lang a.btn.btn-red .fa.fa-arrow-right,.rtl-lang a.btn.btn--primary_green .fa.fa-arrow-right,.rtl-lang a.btn.btn-green .fa.fa-arrow-right,.rtl-lang a.btn.btn--secondary_red .fa.fa-arrow-right,.rtl-lang a.btn.btn-red .fa.fa-file-pdf-o,.rtl-lang a.btn.btn--primary_green .fa.fa-file-pdf-o{margin-left:15px;margin-right:0}.rtl-lang a.btn.btn-drop,.rtl-lang button.btn.btn-drop{padding:11px 20px 6px 20px !important}.rtl-lang a.btn.btn-red .fa,.rtl-lang a.btn.btn--primary_green .fa,.rtl-lang a.btn.btn-green .fa,.rtl-lang a.btn.btn--secondary_red .fa,.rtl-lang a.btn.btn-black .fa,.rtl-lang button.btn.btn-red .fa,.rtl-lang button.btn.btn--primary_green .fa{margin-right:0}.rtl-lang a.btn.btn-red i.fa.fa-plus-circle,.rtl-lang a.btn.btn--primary_green i.fa.fa-plus-circle{margin-left:15px}.rtl-lang button.btn.btn-solid.btn-gray{padding:6px 0 !important}.rtl-lang button.btn.btn-solid.btn-gray small{padding-top:0;margin-top:1px}.rtl-lang .btn-group>.btn{position:relative;float:right}html[lang="bn"] .btn-red small,html[lang="bn"] .btn--primary_green small,html[lang="bn"] .btn-green small,html[lang="bn"] .btn--secondary_red small,html[lang="bn"] .btn-gray small{display:block;margin-top:5px;font-size:12px;text-shadow:none !important;text-transform:none}html[lang="bn"] a.btn small{font-weight:300}html[lang="bn"] a.btn.btn-solid,html[lang="bn"] button.btn.btn-red,html[lang="bn"] .btn.btn-red,html[lang="bn"] button.btn.btn--primary_green,html[lang="bn"] .btn.btn--primary_green,html[lang="bn"] .btn.btn-blck,html[lang="bn"] button.btn.btn-grey{font-size:22px}html[lang="bn"] a.btn.btn-solid.btn-red,html[lang="bn"] button.btn.btn-solid.btn-red,html[lang="bn"] a.btn.btn-solid.btn--primary_green,html[lang="bn"] button.btn.btn-solid.btn--primary_green{padding:9px 11px !important}html[lang="bn"] a.btn,html[lang="bn"] button.btn{padding:8px 11px !important}html[lang="bn"] a.btn.btn-drop,html[lang="bn"] button.btn.btn-drop{padding:10px 20px 6px 20px !important}html[lang="zh_CN"] .main-site.hp-v17 .btn-red small,html[lang="zh_CN"] .main-site.hp-v17 .btn--primary_green small,html[lang="zh_CN"] .main-site.hp-v17 .btn-green small,html[lang="zh_CN"] .main-site.hp-v17 .btn-gray small{margin-top:5px}html[lang="el"] button.btn.btn-drop{height:35px;line-height:13px}html[lang="el"] a.btn.btn-solid,html[lang="si"] a.btn.btn-solid,html[lang="el"] button.btn.btn-red,html[lang="si"] button.btn.btn-red,html[lang="el"] .btn.btn-red,html[lang="si"] .btn.btn-red,html[lang="el"] button.btn.btn--primary_green,html[lang="si"] button.btn.btn--primary_green,html[lang="el"] .btn.btn--primary_green,html[lang="si"] .btn.btn--primary_green,html[lang="el"] .btn.btn-green,html[lang="si"] .btn.btn-green,html[lang="el"] .btn.btn--secondary_red,html[lang="si"] .btn.btn--secondary_red,html[lang="el"] .btn.btn-blck,html[lang="si"] .btn.btn-blck{font-size:17px;line-height:normal}html[lang="el"] .input-group-btn:last-child>.btn,html[lang="el"] .input-group-btn:last-child>.btn-group{line-height:38px}html[lang="es"] a.btn,html[lang="es"] button.btn{padding:8px 14px !important}html[lang="fa"] .btn-group>.btn{position:relative;float:right}html[lang="fa"] a.btn.btn-red .fa.fa-pencil-square-o,html[lang="fa"] a.btn.btn--primary_green .fa.fa-pencil-square-o,html[lang="fa"] a.btn.btn-green .fa.fa-download,html[lang="fa"] a.btn.btn--secondary_red .fa.fa-download,html[lang="fa"] a.btn.btn-red .fa.fa-arrow-right,html[lang="fa"] a.btn.btn--primary_green .fa.fa-arrow-right,html[lang="fa"] a.btn.btn-green .fa.fa-arrow-right,html[lang="fa"] a.btn.btn--secondary_red .fa.fa-arrow-right,html[lang="fa"] a.btn.btn-red .fa.fa-file-pdf-o,html[lang="fa"] a.btn.btn--primary_green .fa.fa-file-pdf-o{margin-left:15px;margin-right:0}html[lang="fa"] a.btn.btn-drop,html[lang="fa"] button.btn.btn-drop{padding:11px 20px 6px 20px !important}html[lang="fa"] a.btn.btn-red .fa,html[lang="fa"] a.btn.btn--primary_green .fa,html[lang="fa"] a.btn.btn-green .fa,html[lang="fa"] a.btn.btn--secondary_red .fa,html[lang="fa"] a.btn.btn-black .fa,html[lang="fa"] button.btn.btn-red .fa,html[lang="fa"] button.btn.btn-red .fa,html[lang="fa"] button.btn.btn-red .fa,html[lang="fa"] button.btn.btn--primary_green .fa{margin-right:0}html[lang="fa"] a.btn.btn-red i.fa.fa-plus-circle{margin-left:15px}html[lang="fa"] a.btn.btn-solid.btn-green,html[lang="fa"] button.btn.btn-solid.btn-green,html[lang="fa"] a.btn.btn-solid.btn--secondary_red,html[lang="fa"] button.btn.btn-solid.btn--secondary_red{font-size:20px}html[lang="fa"] a.btn.btn-solid,html[lang="fa"] button.btn.btn-red,html[lang="fa"] .btn.btn-red,html[lang="fa"] button.btn.btn--primary_green,html[lang="fa"] .btn.btn--primary_green,html[lang="fa"] .btn.btn-blck{font-size:21px}html[lang="fa"] button.btn.btn-solid.btn-gray{padding:6px 0 !important}html[lang="fa"] button.btn.btn-solid.btn-gray small{padding-top:0;margin-top:1px}html[lang="fa"] .main-site.hp-v17 .btn .fa{margin-right:0;margin-left:15px}html[lang="fr"] a.btn.btn-drop,html[lang="fr"] button.btn.btn-drop{padding:11px 20px 6px 20px !important}html[lang="ja"] a.btn.btn-solid,html[lang="ja"] button.btn.btn-red,html[lang="ja"] .btn.btn-red,html[lang="ja"] button.btn.btn--primary_green,html[lang="ja"] .btn.btn--primary_green,html[lang="ja"] .btn.btn-blck{font-size:22px}html[lang="ko"] a.btn,html[lang="ko"] button.btn{padding:8px 19px !important}html[lang="ko"] a.btn.btn-solid,html[lang="ko"] button.btn.btn-red,html[lang="ko"] .btn.btn-red,html[lang="ko"] button.btn.btn--primary_green,html[lang="ko"] .btn.btn--primary_green,html[lang="ko"] .btn.btn-blck{font-size:22px}html[lang="ms"] a.btn.btn-solid,html[lang="ms"] button.btn.btn-red,html[lang="ms"] .btn.btn-red,html[lang="ms"] button.btn.btn--primary_green,html[lang="ms"] .btn.btn--primary_green,html[lang="ms"] .btn.btn-blck .smaller-font-22{font-size:22px}html[lang="ph"] a.btn.btn-solid,html[lang="ph"] button.btn.btn-red,html[lang="ph"] .btn.btn-red,html[lang="ph"] button.btn.btn--primary_green,html[lang="ph"] .btn.btn--primary_green,html[lang="ph"] .btn.btn-blck{letter-spacing:0 !important}html[lang="ph"] a.btn,html[lang="ph"] button.btn{padding:8px 19px !important}html[lang="pl"] a.btn,html[lang="pl"] button.btn{padding:8px 11px !important}html[lang="ru"] a.btn.btn-solid,html[lang="ru"] button.btn.btn-red,html[lang="ru"] .btn.btn-red,html[lang="ru"] button.btn.btn--primary_green,html[lang="ru"] .btn.btn--primary_green,html[lang="ru"] .btn.btn-blck{font-size:22px;letter-spacing:0 !important}html[lang="ru"] a.btn.btn-drop,html[lang="ru"] button.btn.btn-drop{padding:11px 20px 6px 20px !important}html[lang="th"] a.btn.btn-drop,html[lang="th"] button.btn.btn-drop{padding:11px 20px 6px 20px !important}html[lang="th"] a.btn,html[lang="th"] button.btn{padding:8px 19px !important}html[lang="th"] a.btn.btn-solid,html[lang="th"] button.btn.btn-red,html[lang="th"] .btn.btn-red,html[lang="th"] button.btn.btn--primary_green,html[lang="th"] .btn.btn--primary_green,html[lang="th"] .btn.btn-blck{font-size:24px}html[lang="th"] a.btn.btn-solid,html[lang="th"] button.btn.btn-red,html[lang="th"] .btn.btn-red,html[lang="th"] button.btn.btn--primary_green,html[lang="th"] .btn.btn--primary_green,html[lang="th"] .btn.btn-blck .smaller-font-22{font-size:22px}html[lang="th"].main-site.hp-v17 .btn-red small,html[lang="th"].main-site.hp-v17 .btn--primary_green small,html[lang="th"].main-site.hp-v17 .btn-green small,html[lang="th"].main-site.hp-v17 .btn--secondary_red small,html[lang="th"].main-site.hp-v17 .btn-gray small{margin-top:8px}html[lang="vn"] a.btn.btn-solid,html[lang="vn"] button.btn.btn-red,html[lang="vn"] .btn.btn-red,html[lang="vn"] button.btn.btn--primary_green,html[lang="vn"] .btn.btn--primary_green,html[lang="vn"] button.btn.btn-green,html[lang="vn"] .btn.btn-green,html[lang="vn"] button.btn.btn--secondary_red,html[lang="vn"] .btn.btn--secondary_red,html[lang="vn"] .btn.btn-blck{font-size:19px}@media(min-width:768px){.btn-group span{width:100%;padding-left:117px;display:block}.rtl-lang .btn-group span{padding-left:0;padding-right:115px}html[lang="fa"] .btn-group span{padding-left:0;padding-right:115px}}@media(max-width:1290px){a.btn.btn-big,button.btn.btn-big{font-size:22px}}@media(max-width:991px){.webinars .btn{max-width:300px}}@media(max-width:510px){.btn.btn-block{max-width:350px}}header{background-color:#000;position:relative;z-index:600}header .logo,header .promo-logo,header .promo-logo-svg{padding:0 !important}header .navbar-brand{display:inline-block;float:none;margin-left:0 !important;height:auto !important}header .navbar-brand>img{height:39px}body.xmtd header .navbar-brand>img{height:48px}.xmtd .navbar-brand.promo-logo,.xmtd .navbar-brand.promo-logo-svg{left:unset;padding-left:0 !important;margin-left:0 !important}.header-top{position:relative;z-index:9999;border-bottom:1px solid #262626}.header-top ul{list-style:none;padding-left:0;float:left;margin:0}.header-top ul li{float:left}.header-top ul li+li{margin-left:19px}.header-top .user-nav{padding:22px 21px 19px 21px;border-left:1px solid #262626;border-right:1px solid #262626}.header-top .links-nav{padding:24px 15px;border-left:1px solid #262626;border-right:1px solid #262626;line-height:1}.header-top .links-nav li{font-size:12px;position:relative;color:#fff}.header-top .links-nav a{color:#fff}.header-top .links-nav .link-new:before{content:'';background:url('https://cloud.xm-cdn.com/static/common/icons/new.png?v=a50646425347aa21fcc5f130e1974ed1');background-image:url('https://cloud.xm-cdn.com/static/common/icons/new.svg?v=976cfba33e76a9c56f5fbf9558a5af9d'),none;width:23px;height:9px;display:block;position:absolute;top:100%;left:50%;margin-left:-12px;margin-top:5px}.header-top .buttons-nav{float:right;padding:15px 13px 15px 0;border-right:1px solid #262626}.header-top .buttons-nav li+li{margin-left:15px}.header-top .buttons-nav a{letter-spacing:.5px;filter:alpha(opacity=50);-webkit-transition:all .3s ease;-o-transition:all .3s ease;transition:all .3s ease}.header-top .buttons-nav .btn-white{color:#ccc;border:1px solid #ccc}.header-top .buttons-nav .btn-white.btn-red--outline{border:1px solid #d51820}.header-top .buttons-nav .btn-feature{border:2px solid #fff;color:#fff;padding:7px 20px !important}.header-top .buttons-nav a [class^="fa"]{margin-right:5px;font-size:inherit}.header-top .buttons-nav a:hover{opacity:.8;filter:alpha(opacity=80)}.header-top .buttons-nav a.btn-green,.header-top .buttons-nav a.btn--secondary_red,.header-top .buttons-nav a.btn-red,.header-top .buttons-nav a.btn--primary_green{font-size:initial !important;font-size:medium !important}.header-top{background-color:#000}.header-top a.btn,button.btn{padding:7px 20px}#main-nav.container-fluid{background-color:#000}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border:0}h1.pagetitle{font-size:0;width:1px;height:1px;display:inline-block;overflow:hidden;position:absolute !important;border:0 !important;padding:0 !important;margin:0 !important;clip:rect(1px,1px,1px,1px)}h1.navbar-brand{margin:0;padding:0}.navbar-header{padding:5px 0 12px 0}.header-top .links-nav,.header-top .buttons-nav,.main-nav ul li .dropdown .nav-bottom-bar{-webkit-transform:translateZ(0)}.header-top .buttons-nav{position:relative;z-index:9}ul#languages{display:none;list-style:none;margin:0;padding:0}ul#languages.noflags li{padding-left:20px}ul#languages li:first-child{border-bottom:1px solid #000;border-top:0}ul#languages li{width:100%;border-bottom:1px solid #000;border-top:1px solid #2d2d2d}ul#languages li a{display:block;width:100%;font-size:13px;color:#fff;padding:14px 0 12px 0}ul#languages li:hover a{color:#999}ul#languages li .flag-icon{position:relative;display:inline-block;top:-2px;width:37.5px;height:25px;margin-right:15px}input[type=checkbox]#languages{position:absolute;top:-9999px;left:-9999px}input[type=checkbox]#languages ~ ul#main-nav{display:block}input[type=checkbox]#languages:checked ~ ul#main-nav,input[type=checkbox]#languages:checked ~ ul.sidebar-btn{display:none !important}input[type=checkbox]#languages ~ ul#language{display:none !important}input[type=checkbox]#languages:checked ~ ul#language{display:block !important}.language-nav [class^="fa"]{color:#fff}.site-menu{width:300px;height:100%;position:absolute;top:0;left:-300px;background:#428bca;padding:15px}.toggleLeftNav,.toggleRightNav{display:inline-block;font-size:20px;color:#fff;float:left;vertical-align:middle;-webkit-animation-name:bounceIn;animation-name:bounceIn;-webkit-animation-duration:.75s;animation-duration:.75s}.toggleLeftNav:hover,.toggleRightNav:hover{color:#fff !important}.toggleLeftNav{position:relative;left:-15px;padding:15px 30px}.toggleRightNav{position:relative;right:-15px;padding:15px 30px}.toggleLeftNav span{margin-left:5px}.toggleRightNav span{margin-right:5px}.toggleLeftNav [class^="fa"].fa-times,.toggleRightNav [class^="fa"].fa-times{display:none}.toggleLeftNav span,.toggleRightNav span{position:relative;text-transform:uppercase;top:0;font-size:18px;vertical-align:baseline}.toggleRightNav{float:right}.navbar{background-color:transparent;border:0;-moz-border-radius:0;-webkit-border-radius:0;border-radius:0;margin:0}#main-nav.navbar-nav>li>a{position:relative !important;z-index:999;font-size:20px !important;padding-top:13px !important;padding-bottom:17px !important}.main-nav .default>li{position:inherit;display:inherit}.main-nav .default>li>a{position:inherit !important;display:inherit !important}.main-nav a{text-transform:uppercase;font-size:20px;color:#fff !important;padding:13px;line-height:1}.main-nav ul{list-style:none}.main-nav ul li{cursor:pointer}.main-nav ul li a{display:block;position:relative}.main-nav ul li .dropdown .wrap .block ul li i[class^="fa"],.main-nav ul li .dropdown .wrap .block ul li i.xmFont{margin-right:10px;width:18px}.form-logo .navbar-header{margin:27px 0 26px 0 !important;padding:0 !important}.main-nav .block>span{position:relative;display:block;top:0;left:0;text-transform:uppercase;font-size:20px;width:100%;line-height:normal;border:0;margin:0;padding:0;color:#fff;text-align:left;float:left;clear:both}.drop-nav{display:none}.buttons-sm{list-style:none;padding-left:0;padding:0 15px;display:none;margin-bottom:28px}.buttons-sm:before,.buttons-sm:after{content:" ";display:table}.buttons-sm:after{clear:both}.buttons-sm li{width:48%;float:left}.buttons-sm li+li{float:right}.buttons-sm li a{width:100%}.navbar-toggle{border:0;-moz-border-radius:0;-webkit-border-radius:0;border-radius:0;background-color:#fff;width:30px;height:20px;position:relative;padding:0;-webkit-transition:all .3s ease;-o-transition:all .3s ease;transition:all .3s ease;margin-top:10px}.navbar-toggle:before,.navbar-toggle:after{content:'';position:absolute;width:100%;height:4px;left:0;top:4px;display:block;background-color:#000}.navbar-toggle:after{top:12px}.user-nav a{float:left;font-size:11px;color:#999;-webkit-transition:all .3s ease;-o-transition:all .3s ease;transition:all .3s ease}.user-nav a:hover{opacity:.6;filter:alpha(opacity=60)}.languages{position:relative;display:block}.languages .dropdown-menu{border:1px solid #999;background-color:#000;-moz-border-radius:0;-webkit-border-radius:0;border-radius:0;margin-top:15px;left:auto;right:0;width:310px;padding:10px;padding-bottom:0}.languages .dropdown-menu.noflags{padding-left:20px}.languages .dropdown-menu:after{content:'';content:'';width:0;height:0;display:block;border-style:solid;position:absolute;border-width:0 6.5px 6.5px 6.5px;border-color:transparent transparent black transparent;position:absolute;bottom:100%;right:8.5px}.languages .dropdown-menu:before{content:'';width:0;height:0;display:block;border-style:solid;position:absolute;border-width:0 8px 8px 8px;border-color:transparent transparent #999 transparent;position:absolute;bottom:100%;right:7px}.languages .dropdown-menu li{width:33.33%;float:left;margin:0 0 10px 0 !important}.languages .dropdown-menu.noflags li{box-sizing:border-box;padding-left:13px}.languages .dropdown-menu a{padding:0;opacity:1;filter:alpha(opacity=100);color:#fff;font-size:11px;float:left;line-height:1;line-height:15px}.languages .dropdown-menu a:hover{background-color:transparent;color:#fff;text-decoration:underline !important}[lang="ja"] .languages.single-col .dropdown-menu{padding:0 8px 0 14px}ul#language li{margin-bottom:5px}ul#language li a{font-size:14px !important}ul#language li .flag-icon{width:22.5px;height:15px}.languages [class^="fa"]{font-size:33px;color:#fff;float:right;margin-top:10px;margin-right:15px;vertical-align:middle}.flags-sprite{display:block;float:left;margin-right:5px;background-image:url("https://cloud.xm-cdn.com/static/xm/common/flags/flags-icons-sprite-alt.png?v=06da1542355f3bbdb2ef44c1b7fe1b95");background-repeat:no-repeat;width:22.5px;height:15px;background-size:838px 15px}.flags-sprite[class*="lg-"]{width:37.5px;height:25px;background-size:1397.5px 25px}.flags-sprite.sm-en{background-position:0 0}.flags-sprite.lg-en{background-position:0 0}.flags-sprite.sm-jp{background-position:-24px 0}.flags-sprite.lg-jp{background-position:-40px 0}.flags-sprite.sm-my{background-position:-48px 0}.flags-sprite.lg-my{background-position:-80px 0}.flags-sprite.sm-cn,.flags-sprite.sm-tw{background-position:-72px 0}.flags-sprite.lg-cn,.flags-sprite.lg-tw{background-position:-120px 0}.flags-sprite.sm-el{background-position:-96px 0}.flags-sprite.lg-el{background-position:-160px 0}.flags-sprite.sm-hu{background-position:-120px 0}.flags-sprite.lg-hu{background-position:-200px 0}.flags-sprite.sm-ru{background-position:-144px 0}.flags-sprite.lg-ru{background-position:-240px 0}.flags-sprite.sm-id{background-position:-168px 0}.flags-sprite.lg-id{background-position:-280px 0}.flags-sprite.sm-fr{background-position:-192px 0}.flags-sprite.lg-fr{background-position:-320px 0}.flags-sprite.sm-it{background-position:-216px 0}.flags-sprite.lg-it{background-position:-360px 0}.flags-sprite.sm-se{background-position:-240px 0}.flags-sprite.lg-se{background-position:-400px 0}.flags-sprite.sm-de{background-position:-264px 0}.flags-sprite.lg-de{background-position:-440px 0}.flags-sprite.sm-pl{background-position:-288px 0}.flags-sprite.lg-pl{background-position:-480px 0}.flags-sprite.sm-ar{background-position:-312px 0}.flags-sprite.lg-ar{background-position:-520px 0}.flags-sprite.sm-es{background-position:-336px 0}.flags-sprite.lg-es{background-position:-560px 0}.flags-sprite.sm-kr{background-position:-360px 0}.flags-sprite.lg-kr{background-position:-600px 0}.flags-sprite.sm-pt{background-position:-384px 0}.flags-sprite.lg-pt{background-position:-640px 0}.flags-sprite.sm-tr{background-position:-408px 0}.flags-sprite.lg-tr{background-position:-680px 0}.flags-sprite.sm-vn{background-position:-432px 0}.flags-sprite.lg-vn{background-position:-720px 0}.flags-sprite.sm-th{background-position:-456px 0}.flags-sprite.lg-th{background-position:-760px 0}.flags-sprite.sm-ph{background-position:-480px 0}.flags-sprite.lg-ph{background-position:-800px 0}.flags-sprite.sm-nl{background-position:-504px 0}.flags-sprite.lg-nl{background-position:-840px 0}.flags-sprite.sm-cz{background-position:-528px 0}.flags-sprite.lg-cz{background-position:-880px 0}.flags-sprite.sm-ir{background-position:-552px 0}.flags-sprite.lg-ir{background-position:-920px 0}.flags-sprite.sm-bn{background-position:-576px 0}.flags-sprite.lg-bn{background-position:-960px 0}.flags-sprite.sm-au{background-position:-600px 0}.flags-sprite.lg-au{background-position:-1000px 0}.flags-sprite.sm-mn{background-position:-624px 0}.flags-sprite.lg-mn{background-position:-1040px 0}.flags-sprite.sm-hr{background-position:-648px 0}.flags-sprite.lg-hr{background-position:-1080px 0}.flags-sprite.sm-sr{background-position:-672px 0}.flags-sprite.lg-sr{background-position:-1120px 0}.flags-sprite.sm-lt{background-position:-696px 0}.flags-sprite.lg-lt{background-position:-1160px 0}.flags-sprite.sm-ro{background-position:-720px 0}.flags-sprite.lg-ro{background-position:-1200px 0}.flags-sprite.sm-ur{background-position:-744px 0}.flags-sprite.lg-ur{background-position:-1240px 0}.flags-sprite.sm-in{background-position:-768px 0}.flags-sprite.lg-in{background-position:-1280px 0}.flags-sprite.sm-si{background-position:-792px 0}.flags-sprite.lg-si{background-position:-1320px 0}.flags-sprite.sm-uz{background-position:-816px 0}.flags-sprite.lg-uz{background-position:-1359px 0}.languages.single-col .dropdown-menu{width:auto;min-width:98px;padding:0 8px 0 20px}.languages.single-col .dropdown-menu li{padding:8px;margin:0 !important;width:100%}.single-col a.btn.btn-drop,.single-col button.btn.btn-drop{padding:9px 20px 6px 20px !important}header .xm-trading-logo{position:relative;display:block;text-indent:-9999px;width:140px;height:48px;margin-left:0;background:url('https://cloud.xm-cdn.com/static/common/logo/xmtrading.svg?v=ccd5caa7e7c0f45bbcb3cdf4d2e65700');background-repeat:no-repeat;background-size:100%;z-index:9}header .xm-trading-xmas-logo{position:relative;display:block;text-indent:-9999px;width:140px;height:48px;margin-left:0;background:url('https://cloud.xm-cdn.com/static/common/logo/xmas_xmtrading.png?v=b35c2b1b1ba63e0dcab3c6fac5d0eddb');background-repeat:no-repeat;background-size:100%;z-index:9}header .xmas-logo{position:relative;display:block;text-indent:-9999px;width:140px;height:48px;margin-left:0;background:url('https://cloud.xm-cdn.com/static/common/logo/xmas_xm.png?v=a3147dd653c0a0d510e66e1fd86eba60');background-repeat:no-repeat;z-index:9}#main-nav span.new{top:-2px}span.new{text-transform:uppercase;font-size:10px;padding:1px 8px 2px 8px;margin-left:10px;font-weight:bold;position:relative;background:red;border-radius:0;color:white;top:-1px}span.new:after{right:99%;top:50%;border:solid transparent;content:" ";height:0;width:0;position:absolute;pointer-events:none;border-color:rgba(213,24,32,0);border-right-color:#F00;border-width:5px;margin-top:-5px}.badge-arrow{display:inline-block;font-weight:700;color:#fff;line-height:1.2;padding:3px 4px;position:relative;margin-right:.5em;background-color:#d51820;position:relative;vertical-align:middle;font-size:10px;text-transform:uppercase;white-space:nowrap}.rtl-lang .badge-arrow,html[lang="fa"] .badge-arrow{margin-right:0;margin-left:.5em}.badge-arrow--small{font-size:9px;line-height:1}.badge-arrow::after{content:" ";display:block;position:absolute;top:0;bottom:0;left:100%;margin:auto 0;width:0;height:0;border-top:.4em solid transparent;border-bottom:.4em solid transparent;border-left:.5em solid #d51820}.rtl-lang .badge-arrow::after,html[lang="fa"] .badge-arrow::after{left:auto;right:100%;border-left:0;border-right:.5em solid #d51820}.badge-arrow__wrapper{position:relative}.badge-arrow__wrapper .badge-arrow{position:absolute;top:0;right:100%;margin-right:1em}.rtl-lang .badge-arrow__wrapper .badge-arrow,html[lang="fa"] .badge-arrow__wrapper .badge-arrow{right:auto;left:100%;margin-right:0;margin-left:1em}.badge-arrow__wrapper .badge-arrow--small{top:1px}.xm-operated{float:left;font-size:11px;color:#fff;padding:25px 15px;border-left:1px solid #262626;border-right:1px solid #262626;height:62px;line-height:1.3;max-width:500px}.xm-operated>p{margin:0;padding:0}.rtl-lang .xm-operated,[lang="fa"] .xm-operated{float:right}.rtl-lang .xm-operated{max-width:375px}[lang="fr"] .xm-operated,[lang="de"] .xm-operated,[lang="th"] .xm-operated,[lang="ph"] .xm-operated,[lang="fa"] .xm-operated{max-width:400px}[lang="el"] .xm-operated,[lang="vn"] .xm-operated{max-width:370px;padding:10px}[lang="bn"] .xm-operated{max-width:385px;line-height:1.4}.rtl-lang .nav{padding-right:0}.rtl-lang .navbar-nav>li{float:right}.rtl-lang .main-nav ul li .dropdown .box p{line-height:16px}.rtl-lang .header-top .buttons-nav{float:left;padding:15px 0 15px 13px;border-right:0;border-left:1px solid #262626}.rtl-lang .header-top a.btn{padding:9px 8px !important}.rtl-lang .header-top .buttons-nav .btn-white,.rtl-lang a.btn.btn-drop,.rtl-lang button.btn.btn-drop{font-size:14px}.rtl-lang .header-top .buttons-nav .btn-feature{padding:8px 20px !important}.rtl-lang .header-top ul li{float:right;direction:ltr}.rtl-lang .header-top .buttons-nav li+li{margin-left:0;margin-right:15px}.rtl-lang .header-top .buttons-nav [class^="fa"]{float:right;margin-left:5px}.rtl-lang .header-top .links-nav{padding:24px 15px;border-left:1px solid #262626;border-right:1px solid #262626;line-height:1;float:right}.rtl-lang .partners .header-top .links-nav li{font-size:11px}.rtl-lang .header-top .links-nav li{font-size:11px}.rtl-lang .members_area #main-nav.navbar-nav>li>a{padding:10px 13px}.rtl-lang .flags-sprite{float:right;margin-left:5px}.rtl-lang #main-nav.partnersNavMenu>li>a{padding:10px 12px}.rtl-lang #main-nav.navbar-nav>li>a{font-size:17px !important}.rtl-lang .main-nav ul li .dropdown .wrap .block h3{text-align:right;float:left}.rtl-lang .main-nav ul li .dropdown .wrap .block h3{text-align:right}.rtl-lang .main-nav ul li .dropdown .wrap .block ul li i[class^="fa"],.rtl-lang .main-nav ul li .dropdown .wrap .block ul li i.xmFont{margin-left:10px;margin-right:0;float:right}.rtl-lang .main-nav .block span>.xm-font{margin-right:0;margin-left:15px}.rtl-lang .main-nav .block>span{text-align:right;white-space:nowrap;display:flex;align-items:center}.rtl-lang .main-nav .main_nav_platforms .block{max-width:207px}.rtl-lang .languages .dropdown-menu a{width:100%;text-align:right}.rtl-lang .languages .dropdown-menu{left:0;right:auto}.rtl-lang .languages .dropdown-menu:after{right:initial;left:8.5px}.rtl-lang .languages .dropdown-menu:before{right:initial;left:7px}.rtl-lang ul#languages li .flag-icon{margin-left:15px}.rtl-lang .toggleLeftNav span{margin-left:0;margin-right:5px}.rtl-lang .toggleRightNav span{margin-left:5px;margin-right:0}html[lang="bn"] .header-top .buttons-nav .btn-feature{padding:7px 15px !important}html[lang="bn"] .header-top ul li+li{margin-left:15px}html[lang="bn"] #main-nav.navbar-nav>li>a{font-size:17px !important}html[lang="si"] #main-nav.navbar-nav>li>a{padding-right:7px !important;padding-left:7px !important;font-size:1.15em !important}html[lang="bn"] .partners #main-nav.navbar-nav>li>a{font-size:16px !important}html[lang="bn"] .members_area #main-nav.navbar-nav>li>a{font-size:14px !important;padding-left:0;padding-right:13px}html[lang="bn"] ul.buttons-nav li a.btn{white-space:nowrap}html[lang="zh_CN"] .header-top .links-nav li{font-size:13px}html[lang="zh_CN"] #main-nav.navbar-nav>li>a{font-weight:bold}html[lang="zh_CN"] .header-top .buttons-nav li a.qq.btn.btn-white{background-color:#a8e2fd;background-image:url("https://cloud.xm-cdn.com/static/common/icons/qq_penguin.png?v=41ac70303887e090bfacb2675b7d55fd");background-size:20%;background-position:13px 4px;background-repeat:no-repeat;border-color:#a8e2fd;color:#000;padding-left:42px !important}html[lang="zh_CN"] .main-nav ul li .dropdown .wrap .block h3{font-weight:normal}html[lang="cs"] .header-top .buttons-nav a.btn{padding:8px 13px !important}html[lang="de"] .members_area #main-nav.navbar-nav>li>a{padding:10px 14px}html[lang="de"] .header-top .links-nav li{font-size:11px}html[lang="de"] .header-top ul li+li{margin-left:17px}html[lang="de"] #main-nav.partnersNavMenu>li>a{padding:15px 8px !important;font-size:18px !important}html[lang="de"] .members_area #main-nav.navbar-nav>li>a{padding:10px 7px;font-size:18px !important}html[lang="el"] .header-top .buttons-nav a.btn-red,html[lang="el"] .header-top .buttons-nav a.btn--primary_green{padding:11.5px 9px !important}html[lang="el"] .header-top button.btn.btn-drop{padding:10px 20px 8px 20px !important}html[lang="el"] #main-nav.navbar-nav>li>a{font-size:15px !important;padding-left:7px;padding-right:7px}html[lang="el"] #main-nav.navbar-nav.partnersNavMenu>li>a{padding-left:6px;padding-right:6px}html[lang="el"] .partners .header-top .buttons-nav a.btn-red,html[lang="el"] .partners .header-top .buttons-nav a.btn--primary_green{font-size:11px !important}html[lang="el"] .header-top a.btn{padding:10px 9px !important}html[lang="el"] .header-top ul li+li{margin-left:10px}html[lang="el"] .header-top .buttons-nav li+li{margin-left:10px}html[lang="el"] .header-top a.btn.btn-white,html[lang="el"] .header-top a.btn.btn-solid.btn-red,html[lang="el"] .header-top a.btn.btn-solid.btn--primary_green{height:35px;line-height:13px}html[lang="el"] .main-nav ul li .dropdown .wrap .block h3{font-size:18px;text-transform:uppercase}html[lang="el"] .main-nav a,html[lang="el"] .main-nav ul li .dropdown .wrap .block h3,html[lang="el"] .main-nav ul li .dropdown .box h2{font-weight:bold}html[lang="el"] .main-nav ul li .dropdown .box h2{font-weight:400}html[lang="el"] .main-nav ul li .dropdown .wrap .block h3{font-size:18px;font-weight:normal}html[lang="el"] .main-nav .block>span{font-size:18px;text-transform:uppercase}html[lang="en"] #main-nav.partnersNavMenu>li>a{padding:10px 12px}html[lang="es"] #main-nav.partnersNavMenu>li>a{padding:15px 8px !important}html[lang="es"] .members_area #main-nav.navbar-nav>li>a{padding:10px 9px}html[lang="es"] .partners #main-nav.navbar-nav>li>a{font-size:19px !important}html[lang="es"] .partners .navbar.navbar-default ul.buttons-nav li a{font-size:13px !important;padding-right:14px !important}html[lang="fa"] .nav{padding-right:0}html[lang="fa"] .main-nav ul li .dropdown .box p{line-height:16px}html[lang="fa"] .main-nav ul li .dropdown .wrap .block h3{text-align:right;float:left}html[lang="fa"] .main-nav ul li .dropdown .wrap .block h3{text-align:right}html[lang="fa"] .main-nav ul li .dropdown .wrap .block ul li i[class^="fa"],html[lang="fa"] .main-nav ul li .dropdown .wrap .block ul li i.xm-font{margin-left:10px;margin-right:0;float:right}html[lang="fa"] #main-nav.navbar-nav>li>a{font-size:16px !important}html[lang="fa"] .members_area #main-nav.navbar-nav>li>a{font-size:16px !important}html[lang="fa"] .members_area #main-nav.navbar-nav>li>a{padding:10px 10px}html[lang="fa"] .main-nav .block span>.xm-font{margin-right:0;margin-left:5px}html[lang="fa"] .main-nav .block>span{text-align:right}html[lang="fa"] .header-top a.btn{padding:9px !important}html[lang="fa"] .header-top ul li+li{margin-right:13px;margin-left:0}html[lang="fa"] .header-top ul li{float:right;direction:ltr}html[lang="fa"] .header-top .buttons-nav li+li{margin-left:0;margin-right:15px}html[lang="fa"] .header-top .links-nav{padding:24px 15px;border-left:1px solid #262626;border-right:1px solid #262626;line-height:1;float:right}html[lang="fa"] .header-top .buttons-nav a [class^="fa"]{float:left;padding:15px 0 15px 13px;border-right:0}html[lang="fa"] .header-top .buttons-nav a [class^="fa"]{margin-left:5px}html[lang="fa"] .header-top .buttons-nav a.btn-white,html[lang="fa"] .header-top .buttons-nav a.btn-drop,html[lang="fa"] .header-top .buttons-nav a.btn-red,html[lang="fa"] .header-top .buttons-nav a.btn--primary_green{font-size:13px !important}html[lang="fa"] .header-top .buttons-nav li a.telegram.btn.btn-white{background-color:#0097e8;border-color:#0097e8;color:#fff;margin-left:0;padding:6px !important;line-height:20px;text-transform:none}html[lang="fa"] .header-top .buttons-nav li a.telegram.btn.btn-white [class^="fa"]{margin-right:0;margin-left:5px;font-size:16px}html[lang="fa"] .header-top .buttons-nav [class^="fa"]{float:right}html[lang="fa"] .navbar-nav>li{float:right}html[lang="fa"] .toggleLeftNav span{margin-left:0;margin-right:5px}html[lang="fa"] .toggleRightNav span{margin-left:5px;margin-right:0}html[lang="fa"] .flags-sprite{float:right;margin-left:5px}html[lang="fa"] .languages .dropdown-menu a{width:100%;text-align:right}html[lang="fa"] .languages .dropdown-menu{left:0;right:auto}html[lang="fa"] .languages .dropdown-menu:after{right:initial;left:8.5px}html[lang="fa"] .languages .dropdown-menu:before{right:initial;left:7px}html[lang="fa"] ul#languages li .flag-icon{margin-left:15px}html[lang="fr"] #main-nav.navbar-nav>li>a{padding-left:7px;padding-right:7px}html[lang="fr"] .members_area #main-nav.navbar-nav>li>a{font-size:19px !important}html[lang="fr"] .header-top a.btn{padding:9px 17px !important}html[lang="fr"] .partners .navbar.navbar-default ul.buttons-nav li a{font-size:13px !important}html[lang="hu"] .members_area #main-nav.navbar-nav>li>a{font-size:19px !important}html[lang="hu"] .members_area .nav>li>a{padding:10px 10px}html[lang="hu"] #main-nav.partnersNavMenu>li>a{padding:15px 14px !important}html[lang="hu"] .partners #main-nav.navbar-nav>li>a{font-size:18px !important}html[lang="id"] .members_area #main-nav.navbar-nav>li>a{padding-left:10px;padding-right:10px}html[lang="it"] .members_area .navbar-nav>li>a{padding:10px 9px}html[lang="ja"] #main-nav.navbar-nav>li>a{font-size:17px !important;font-weight:bold;padding:10px 13px}html[lang="ja"] ul#main-nav{margin-top:5px}html[lang="ja"] .members_area #main-nav.navbar-nav>li>a{padding:10px 9px;font-size:16px !important}html[lang="ja"] .header-top .links-nav a{font-size:11px;font-weight:bold}html[lang="ja"] .header-top .buttons-nav a.btn-red,html[lang="ja"] .header-top .buttons-nav a.btn--primary_green{padding:11.5px 9px !important}html[lang="ja"] .header-top button.btn.btn-drop{padding:10px 20px 8px 20px !important}html[lang="ja"] .header-top a.btn{padding:10.5px 9px !important}html[lang="ja"] .header-top .buttons-nav .btn-white,html[lang="ja"] .header-top .buttons-nav a.btn-green,html[lang="ja"] .header-top .buttons-nav a.btn--secondary_red,html[lang="ja"] .header-top .buttons-nav a.btn-red,html[lang="ja"] .header-top .buttons-nav a.btn--primary_green,html[lang="ja"] a.btn.btn-drop,html[lang="ja"] button.btn.btn-drop{font-size:11px !important}html[lang="ja"] .header-top .buttons-nav .btn-feature{padding:9px 20px !important}html[lang="ko"] .main-nav ul li .dropdown .wrap .block h3{font-weight:normal}html[lang="ko"] .header-top a.btn.btn-solid.btn-red,html[lang="ko"] .header-top a.btn.btn-solid.btn--primary_green{padding:9px 15px !important}html[lang="ko"] .header-top a.btn.btn-white{padding:9px 15px !important}html[lang="ko"] .header-top button.btn.btn-drop{padding:9px 20px 8px 20px !important}html[lang="ko"] .header-top ul li+li{margin-left:10px}html[lang="ko"] .header-top .buttons-nav li+li{margin-left:10px}html[lang="ko"] .toggleLeftNav span,html[lang="ko"] .toggleRightNav span{font-weight:bold}html[lang="ms"] #main-nav.navbar-nav>li>a{padding:10px 10px}html[lang="ms"] .main-site #main-nav.navbar-nav .main-nav ul{position:relative;top:7px}html[lang="nl"] .members_area #main-nav.navbar-nav>li>a{padding:10px 12px}html[lang="nl"] .partners #main-nav.navbar-nav>li>a{font-size:19px !important}html[lang="ph"] .header-top ul li+li{margin-left:10px}html[lang="pl"] .partners header .nav>li>a,.members_area header .nav>li>a{padding:10px 12px}html[lang="pl"] .partners #main-nav.navbar-nav>li>a{font-size:19px !important}html[lang="pl"] .header-top .links-nav li{font-size:11px;position:relative;color:#fff}html[lang="pt"] #main-nav.partnersNavMenu>li>a{padding:15px 8px !important}html[lang="pt"] .members_area #main-nav.navbar-nav>li>a{padding:10px 8px}html[lang="ru"] .partners #main-nav.navbar-nav>li>a{font-size:18px !important}html[lang="ru"] .partners .header-top .links-nav li{font-size:11px !important}html[lang="ru"] .header-top a.btn{padding:9px !important}html[lang="sv"] .header-top ul li+li{margin-left:12px}html[lang="sv"] .header-top a.btn.btn-solid.btn-red,html[lang="sv"] .header-top a.btn.btn-solid.btn--primary_green{padding:8px 13px !important}html[lang="sv"] .header-top a.btn.btn-white{padding:8px 13px !important}html[lang="th"] .main-nav .block ul li a{font-size:15px !important}html[lang="th"] .main-nav ul li .dropdown .wrap .block h3{font-weight:normal}html[lang="th"] #main-nav.navbar-nav>li>a{font-size:19px !important;padding-left:6px;padding-right:6px}html[lang="th"] #main-nav.partnersNavMenu>li>a{padding:15px 4px !important}html[lang="th"] .header-top a.btn.btn-solid.btn-red,html[lang="th"] .header-top a.btn.btn-solid.btn--primary_green{padding:9px 15px !important}html[lang="th"] .header-top a.btn.btn-white{padding:9px 15px !important}html[lang="th"] .header-top ul li+li{margin-left:10px}html[lang="th"] .header-top .buttons-nav li+li{margin-left:10px}html[lang="tr"] #main-nav.partnersNavMenu>li>a{padding:15px 8px !important}html[lang="tw"] #main-nav.navbar-nav>li>a{font-weight:bold}html[lang="tw"] .main-nav ul li .dropdown .wrap .block h3{font-weight:normal}html[lang="tw"] .header-top .links-nav li{font-size:13px}html[lang="tw"] .header-top .buttons-nav li a.qq.btn.btn-white{background-color:#a8e2fd;background-image:url("https://cloud.xm-cdn.com/static/common/icons/qq_penguin.png?v=41ac70303887e090bfacb2675b7d55fd");background-size:20%;background-position:13px 4px;background-repeat:no-repeat;border-color:#a8e2fd;color:#000;padding-left:42px !important}html[lang="vn"] .main-nav a,html[lang="vn"] .main-nav ul li .dropdown .wrap .block h3,html[lang="vn"] .main-nav ul li .dropdown .box h2{font-weight:bold}html[lang="vn"] .main-nav ul li .dropdown .box h2{font-weight:400}html[lang="vn"] .main-nav ul li .dropdown .wrap .block h3{font-size:18px;font-weight:normal}html[lang="vn"] #main-nav.navbar-nav>li>a{font-size:15px !important;padding-left:7px;padding-right:7px}html[lang="vn"] .main-nav ul li .dropdown .wrap .block h3{font-size:18px;text-transform:uppercase}html[lang="vn"] .header-top a.btn.btn-solid.btn-red,html[lang="vn"] .header-top a.btn.btn-solid.btn--primary_green{padding:10px 15px !important}html[lang="vn"] .header-top a.btn.btn-white{padding:9px 15px !important}html[lang="vn"] .header-top ul li+li{margin-left:10px}html[lang="vn"] .header-top .buttons-nav li+li{margin-left:10px}html[lang="vn"] .header-top .buttons-nav a.btn-white,html[lang="vn"] .header-top .buttons-nav a.btn-drop,html[lang="vn"] .header-top .buttons-nav a.btn-red,html[lang="vn"] .header-top .buttons-nav a.btn--primary_green{font-size:13px !important}html[lang="vn"] .toggleLeftNav span,html[lang="vn"] .toggleRightNav span{text-transform:uppercase}html[lang="si"] .partners .header-top ul li+li{margin-left:10px}html[lang="si"] .partners .header-top .links-nav a{font-size:11px}html[lang="si"] .partners .header-top .buttons-nav a.btn-red,html[lang="si"] .partners .header-top .buttons-nav a.btn--primary_green{font-size:11px !important}#st_gdpr_iframe{left:0 !important;right:-5000px}@media(min-width:992px) and (max-width:1299px){html[lang="en"] .members_area #main-nav.navbar-nav>li>a{font-size:17px !important}html[lang="es"] .members_area #main-nav.navbar-nav>li>a{font-size:17px !important}html[lang="it"] .members_area #main-nav.navbar-nav>li>a{font-size:17px !important}html[lang="ja"] .members_area #main-nav.navbar-nav>li>a{font-size:15px !important}html[lang="ph"] .members_area #main-nav.navbar-nav>li>a{font-size:17px !important}html[lang="pt"] .members_area #main-nav.navbar-nav>li>a{font-size:17px !important}html[lang="ru"] .members_area #main-nav.navbar-nav>li>a{font-size:16px !important}}@media(max-width:1290px) and (min-width:991px){html[lang="de"] #main-nav.navbar-nav>li>a{font-size:18px !important}html[lang="ph"] #main-nav.navbar-nav>li>a{font-size:18px !important}html[lang="ru"] #main-nav.navbar-nav>li>a{font-size:17px !important}html[lang="th"] #main-nav.navbar-nav>li>a{font-size:18px !important}}@media(max-width:1199px) and (min-width:992px){html[lang="de"] .members_area #main-nav.navbar-nav>li>a{font-size:18px !important}html[lang="ms"] .members_area #main-nav.navbar-nav>li>a{font-size:17px !important}html[lang="ph"] .members_area #main-nav.navbar-nav>li>a{font-size:16px !important}html[lang="ru"] .members_area #main-nav.navbar-nav>li>a{font-size:15px !important}html[lang="ru"] header .navbar-brand>img{height:36px}html[lang="ru"] .navbar-header .promo-logo-svg{left:191px}}@media(max-width:1249px) and (min-width:992px){html[lang="fr"] .members_area #main-nav.navbar-nav>li>a{font-size:17px !important}}@media(max-width:991px) and (min-width:768px){.showNavLeft #main-nav #navigation-collapse{left:-320px !important}}@media(min-width:768px){.rtl-lang .navbar-header{float:right}.rtl-lang .navbar-right{float:left !important}.rtl-lang .navbar-nav>li{float:right}html[lang="fa"] .navbar-header{float:right}html[lang="fa"] .navbar-right{float:left !important}html[lang="fa"] .navbar-nav>li{float:right}}@media(min-width:992px){header .center-logo{display:none}#main-nav.container-fluid{padding:0 !important}.main-nav{position:relative;margin-top:21px}.main-nav ul li.selected{background-color:#d51820 !important;height:45px;z-index:9}.main-nav ul li .dropdown{position:absolute;display:none;width:100%;min-height:465px;float:left;left:0;right:0;margin:17px 0 0 0;background-color:#000;border-top:1px solid #262626;border-bottom:1px solid #444;cursor:auto;z-index:9}.main-site.xmtd .main-nav ul li .dropdown{min-height:420px}.main-nav ul li .dropdown .nav-bottom-bar{position:absolute;width:100%;height:74px;float:left;left:0;right:0;bottom:-75px;clear:both;background-color:#252525}.main-nav .nav-bottom-bar .container,.main-nav .nav-bottom-bar .container>.row>div{height:75px}.main-nav .nav-bottom-bar p{position:relative;top:50%;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%);font:18px Arial,sans-serif;color:#fff;padding:0;margin:0}.main-nav li.selected>a:after{position:absolute;display:block;content:"";width:10px;height:10px;top:66px;left:0;right:0;margin:0 auto;border-left:12px solid transparent;border-right:12px solid transparent;border-top:12px solid #000;cursor:none;z-index:999}.main-nav li.selected>a:before{position:absolute;display:block;content:"";width:10px;height:10px;top:68px;left:0;right:0;margin:0 auto;border-left:12px solid transparent;border-right:12px solid transparent;border-top:12px solid #262626;cursor:none;z-index:999}.main-nav .nav-bottom-bar a{position:relative;top:50%;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%);font-weight:700;text-transform:uppercase;font-size:20px;padding:7px;margin:0}.main-nav .wrap{position:relative;display:-webkit-box !important;display:-moz-box !important;display:-ms-flexbox !important;display:-webkit-flex !important;display:flex !important;flex-direction:row;-webkit-flex-direction:row;-ms-flex-pack:justify;flex-wrap:nowrap;margin:60px 0 0 0}.main-nav .block{display:block !important;flex-grow:1;-webkit-flex-grow:1;-webkit-box-flex:1;float:left}.main-nav .block:last-child{margin-right:0}.main-nav .block ul{width:207px;float:left;margin:10px 0;padding:0;list-style:none}.main-nav .block li:hover{background-color:#000 !important}.main-nav .block li a:hover{color:#d51820 !important}.main-nav .block span>.xmFont,.main-nav .block span>.fa-kit{vertical-align:middle;position:relative;font-size:50px;margin-right:15px;color:#fff}.rtl-lang .main-nav .block span>.xmFont,.rtl-lang .main-nav .block span>.fa-kit{margin-right:0;margin-left:15px;float:right}.main-nav .block ul{float:left;clear:both}.main-nav .block ul li{clear:both;padding:0 0 12px 0;margin:15px 0 0 0;border-bottom:1px solid #222}.main-nav .block ul li:last-child{border-bottom:0}.main-nav .block ul li a{font:normal 16px Arial,sans-serif;color:#fff !important;text-transform:none;margin:0;padding:0 !important}.main-nav .dropdown .box{max-width:212px;float:left;margin:60px 0 0 0}.main-nav .box>span{display:block;font-size:29px;line-height:normal;color:#a0a0a0;padding:0;margin:0 0 25px 0}.main-nav .dropdown .box p{font:12px Arial,sans-serif;color:#c2c2c2}.main-nav .dropdown .line{position:relative;width:1px;height:310px;margin:55px 40px 0 40px;float:left;background-color:#666}#main-nav.navbar-nav>li>a [class^="fa"]{display:none}#main-nav .canvas-text-bar{display:none}html[lang="si"] #main-nav.navbar-nav>li>a{padding-right:6px !important;padding-left:6px !important;font-size:1em !important}.rtl-lang .main-nav ul li .dropdown .wrap .block ul{float:right}.rtl-lang .main-nav ul li .dropdown .wrap .block h3 i.account,.rtl-lang .main-nav ul li .dropdown .wrap .block h3 i.stats,.rtl-lang .main-nav ul li .dropdown .wrap .block h3 i.trading,.rtl-lang .main-nav ul li .dropdown .wrap .block h3 i.desktop,.rtl-lang .main-nav ul li .dropdown .wrap .block h3 i.tablet,.rtl-lang .main-nav ul li .dropdown .wrap .block h3 i.mobile,.rtl-lang .main-nav ul li .dropdown .wrap .block h3 i.learn,.rtl-lang .main-nav ul li .dropdown .wrap .block h3 i.market,.rtl-lang .main-nav ul li .dropdown .wrap .block h3 i.tool,.rtl-lang .main-nav ul li .dropdown .wrap .block h3 i.about{margin-left:15px;float:right;margin-right:0}.rtl-lang .main-nav ul li .dropdown .box{float:right}.rtl-lang .main-nav ul li .dropdown .line{float:right}html[lang="el"] .main-nav ul li .dropdown .nav-bottom-bar p{font-size:17px}html[lang="el"] .main-nav ul li .dropdown .wrap .block ul li a{font-weight:300}html[lang="el"] .main-nav ul li .dropdown .box h2{font-size:27px}html[lang="fa"] .main-nav ul li .dropdown .wrap .block ul{float:right}html[lang="fa"] .main-nav ul li .dropdown .wrap .block h3 i.account,html[lang="fa"] .main-nav ul li .dropdown .wrap .block h3 i.stats,html[lang="fa"] .main-nav ul li .dropdown .wrap .block h3 i.trading,html[lang="fa"] .main-nav ul li .dropdown .wrap .block h3 i.desktop,html[lang="fa"] .main-nav ul li .dropdown .wrap .block h3 i.tablet,html[lang="fa"] .main-nav ul li .dropdown .wrap .block h3 i.mobile,html[lang="fa"] .main-nav ul li .dropdown .wrap .block h3 i.learn,html[lang="fa"] .main-nav ul li .dropdown .wrap .block h3 i.market,html[lang="fa"] .main-nav ul li .dropdown .wrap .block h3 i.tool,html[lang="fa"] .main-nav ul li .dropdown .wrap .block h3 i.about{margin-left:15px;float:right;margin-right:0}html[lang="fa"] .main-nav ul li .dropdown .box{float:right}html[lang="fa"] .main-nav ul li .dropdown .line{float:right}html[lang="vn"] .main-nav ul li .dropdown .nav-bottom-bar p{font-size:17px}html[lang="vn"] .main-nav ul li .dropdown{min-height:440px}html[lang="vn"] .main-nav ul li .dropdown .wrap .block ul li a{font-weight:300}html[lang="vn"] .main-nav ul li .dropdown .box h2{font-size:27px}a[nav-label="new"]:after{display:none !important}a[nav-label="new"]:before{content:'';width:5px;height:5px;margin-left:3px;background:#d51820;border-radius:50%;display:inline-block;transform:translateY(-180%)}html[lang="ru"] .header-top .links-nav,html[lang="bn"] .header-top .links-nav{padding:24px 13px}html[lang="bn"] .header-top .links-nav li{font-size:11px}html[lang="si"] .partners #main-nav.navbar-nav>li>a{font-size:12px !important;padding:13px 10px 17px 10px !important}}@media(min-width:1200px){.navbar-header{position:relative;padding:5px 0 10px 0}.navbar-header .promo-logo{position:absolute;padding:0 !important;left:218px}.navbar-header .promo-logo-svg{padding:0 !important}.main-nav .block ul{width:248px}.rtl-lang .navbar-header .promo-logo,.rtl-lang .navbar-header .promo-logo-svg{right:220px;left:0}html[lang="en"] .members_area #main-nav.navbar-nav>li>a{padding:10px}html[lang="ph"] .members_area #main-nav.navbar-nav>li>a{font-size:16px !important;padding-left:6px !important;padding-right:6px !important}html[lang="ru"] .members_area #main-nav.navbar-nav>li>a{font-size:15px !important;padding-left:7px !important;padding-right:7px !important}html[lang="sv"] .members_area #main-nav.navbar-nav>li>a{padding-left:13px !important;padding-right:13px !important}html[lang="si"] #main-nav.navbar-nav>li>a{padding-right:7px !important;padding-left:7px !important;font-size:1.15em !important}html[lang="fa"] .navbar-header .promo-logo{position:absolute;padding:0;right:140px;left:0}html[lang="fa"] .navbar-header .promo-logo-svg{position:absolute;padding:0;right:140px;left:0}html[lang="ru"] .header-top .links-nav,html[lang="bn"] .header-top .links-nav{padding:24px 13px}html[lang="bn"] .header-top .links-nav li{font-size:11px}html[lang="si"] .partners #main-nav.navbar-nav>li>a{font-size:15px !important}html[lang="it"] #main-nav.navbar-nav>li>a{font-size:18px !important;padding-right:10px;padding-left:10px}html[lang="de"] #main-nav.navbar-nav>li>a{font-size:18px !important}}@media(min-width:1249px){html[lang="el"] .members_area #main-nav.navbar-nav>li>a{padding-left:6px !important;padding-right:6px !important}}@media(min-width:1290px){html[lang="ph"] .main-nav a:not(.btn){padding:8px}html[lang="ru"] .main-nav a:not(.btn){padding:8px}html[lang="ru"] #main-nav.navbar-nav>li>a{font-size:19px !important}.navbar-header{padding:5px 0 20px 0}}@media(max-width:1290px){.main-nav{box-shadow:none}.main-nav a:not(.btn){padding:8px !important;padding-top:0 !important;font-size:16px !important}.main-nav .navbar-brand.logo,.main-nav .navbar-brand.promo-logo-svg{padding-left:0 !important;padding-right:0 !important}html[lang="el"] #main-nav.navbar-nav>li>a{padding-left:5px !important;padding-right:5px !important;font-size:14px !important}html[lang="el"] .partners .header-top .links-nav li{font-size:11px}html[lang="vn"] #main-nav.navbar-nav>li>a{padding-left:5px !important;padding-right:5px !important;font-size:14px !important}}@media(max-width:1199px){.navbar-header{position:relative}.rtl-lang .navbar-header .promo-logo{right:220px;left:0}.rtl-lang .navbar-header .promo-logo-svg{right:220px;left:0}.main-nav ul li .dropdown .box.platform,.main-nav ul li .dropdown .box.platform .line{display:none}.xm-operated{padding:15px;max-width:302px}.xmbz-operated{padding:15px !important}.xm-operated>p{line-height:normal}[lang="el"] .xm-operated{max-width:170px;padding:10px}[lang="vn"] .xm-operated{max-width:175px;padding:10px}[lang="hu"] .xm-operated,[lang="th"] .xm-operated{max-width:230px;padding:10px}[lang="fr"] .xm-operated,[lang="fa"] .xm-operated{max-width:218px;padding:10px}.rtl-lang .xm-operated,[lang="fa"] .xm-operated{max-width:195px}[lang="de"] .xm-operated,[lang="ph"] .xm-operated{max-width:224px;padding:10px}[lang="sv"] .xm-operated{max-width:250px;padding:15px}[lang="nl"] .xm-operated{max-width:265px;padding:15px}[lang="bn"] .xm-operated{max-width:185px;padding:15px;line-height:1.4}[lang="es"] .xm-operated{max-width:277px}[lang="pt"] .xm-operated{max-width:278px}[lang="cs"] .xm-operated{max-width:296px}[lang="id"] .xm-operated{max-width:315px}[lang="ko"] .xm-operated{max-width:250px}[lang="zh_CN"] .xm-operated,[lang="tw"] .xm-operated,[lang="pl"] .xm-operated{padding:15px;max-width:231px}[lang="pl"] .xm-operated{padding:15px;max-width:295px}.rtl-lang #main-nav.navbar-nav.nav-logo>li>a{font-size:15px !important}html[lang="bn"] .partners .header-top .buttons-nav a.btn{font-size:12px !important}html[lang="en"] #main-nav.navbar-nav.nav-logo>li>a{font-size:17px !important}html[lang="el"] #main-nav.navbar-nav.nav-logo>li>a{font-size:12px !important}html[lang="fa"] #main-nav.navbar-nav.nav-logo>li>a{font-size:15px !important}html[lang="fr"] #main-nav.navbar-nav.nav-logo>li>a{font-size:18px !important}html[lang="ja"] #main-nav.navbar-nav.nav-logo>li>a{font-size:14px !important}html[lang="ms"] #main-nav.navbar-nav.nav-logo>li>a{font-size:17px !important}html[lang="ms"] .members_area #main-nav.navbar-nav>li>a{font-size:18px !important}html[lang="ru"] #main-nav.navbar-nav.nav-logo>li>a{font-size:16px !important}html[lang="th"] #main-nav.navbar-nav.nav-logo>li>a{font-size:16px !important}html[lang="tr"] #main-nav.navbar-nav.nav-logo>li>a{font-size:19px !important}html[lang="vn"] #main-nav.navbar-nav.nav-logo>li>a{font-size:14px !important}html[lang="fa"] .partners.xmtd .header-top .buttons-nav a.btn{font-size:12px !important}html[lang="ru"] .partners.xmtd .header-top .buttons-nav a.btn{font-size:14px !important}html[lang="th"] .partners.xmtd .header-top .buttons-nav a.btn{font-size:13px !important}html[lang="vn"] .partners.xmtd .header-top .buttons-nav a.btn{font-size:11px !important}}@media(max-width:991px){.animating.showNavLeft.left-side .site-canvas{transform:translate3d(300px,0,0);-webkit-transform:translate3d(300px,0,0)}.animating.showNavLeft.right-side .site-canvas{transform:translate3d(-300px,0,0);-webkit-transform:translate3d(-300px,0,0)}.animating.showNavRight.left-side .site-canvas{transform:translate3d(-300px,0,0);-webkit-transform:translate3d(-300px,0,0)}.animating.showNavRight.right-side .site-canvas{transform:translate3d(300px,0,0);-webkit-transform:translate3d(300px,0,0)}.showNavLeft.menu-visible .site-canvas{left:320px}.showNavRight.menu-visible .site-canvas{right:300px}.animating.showNavLeft #main-nav .navbar-collapse.collapse,.menu-visible.showNavLeft #main-nav .navbar-collapse.collapse{display:block !important}.showNavLeft #main-nav #navigation-collapse{position:absolute;top:65px;left:-305px;width:320px;padding:0;overflow:auto !important;padding-bottom:5px}.showNavLeft #main-nav #navigation-collapse .container{width:auto}.showNavRight ul#languages{display:block !important;position:absolute;top:65px;right:-300px;width:300px;padding:0 15px;overflow:auto !important;padding-bottom:5px}.showNavLeft.menu-visible .toggleLeftNav,.showNavLeft.animating .toggleLeftNav{position:absolute;top:1px;left:-300px;padding:15px 0;width:300px;text-align:left;border-bottom:1px solid #333;-webkit-animation-name:none;animation-name:none;-webkit-animation-duration:0;animation-duration:0}.showNavRight.menu-visible .toggleRightNav,.showNavRight.animating .toggleRightNav{position:absolute;top:1px;right:-300px;padding:15px 30px;width:300px;text-align:right;border-bottom:1px solid #333;-webkit-animation-name:none;animation-name:none;-webkit-animation-duration:0;animation-duration:0}.showNavLeft.menu-visible #cookies-block,.showNavRight.menu-visible #cookies-block,.showNavLeft.menu-visible #risk-block,.showNavRight.menu-visible #risk-block{display:none !important}.showNavLeft.menu-visible .toggleLeftNav [class^="fa"].fa-times{position:absolute;transform:translate(-50%,-50%);top:50%;right:10px;display:block}.showNavRight.menu-visible .toggleRightNav [class^="fa"].fa-times{position:absolute;transform:translate(-50%,-50%);top:50%;left:20px;display:block}#main-nav.navbar-nav>li>a [class^="fa"],#main-nav.navbar-nav .navbar-nav__list>li>a [class^="fa"]{display:inline-block;width:12px;font-size:14px;margin-right:18px;vertical-align:middle;float:left;line-height:22px}.rtl-lang #main-nav.navbar-nav>li>a [class^="fa"],.rtl-lang #main-nav.navbar-nav .navbar-nav__list>li>a [class^="fa"]{margin-left:26px;margin-right:0;float:right}#main-nav.navbar-nav>li a{border-top:1px solid #2d2d2d;border-bottom:1px solid #000}#main-nav.navbar-nav>li:first-child a{border-top:0}#main-nav.navbar-nav>li:last-child a{border-bottom:0}#main-nav.navbar-nav .navbar-nav__list>li a{border-top:0;border-bottom:0}.navbar-header{padding:27px 0 26px 0 !important}.navbar-header{padding:0 0 20px 0}.main-nav ul li .dropdown .wrap .block ul li a{font-weight:300;font-size:18px !important;letter-spacing:.5px;padding-bottom:8px;padding-top:8px}.main-nav ul li .dropdown .wrap .block ul li a:hover{color:#ccc !important}#main-nav.navbar-nav>li>a,#main-nav.navbar-nav .navbar-nav__list>li>a{padding:14px 0 14px 0 !important;text-transform:none !important;font-size:13px !important;color:#fff !important;line-height:20px}#main-nav.navbar-nav .navbar-nav__list>li>a{padding:9px 0 !important;font-weight:300}#main-nav.navbar-nav>li>a:hover,#main-nav.navbar-nav .navbar-nav__list>li>a:hover{color:#999 !important}.navbar-header{float:none}.navbar-toggle{display:block}.navbar-collapse{border-top:1px solid transparent}.navbar-collapse.collapse{display:none !important}.navbar-nav{float:none !important;margin:0 6px}.navbar-nav>li{float:none}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px}.navbar-collapse.collapse.in{display:block !important}.collapsing{overflow:hidden !important}.flags-sprite{margin-right:15px}ul#languages li{display:block;float:left}ul#languages li a{display:block;float:left;line-height:25px}header .center-logo{display:block;text-align:center;margin:20px auto 15px}.rtl-lang header .center-logo{direction:ltr}header .navbar-brand{margin-left:0 !important}.site-canvas .toggle-bar-line{display:block;border-bottom:1px solid #444}.rtl-lang .flags-sprite,html[lang="fa"] .flags-sprite{margin-left:15px}#main-nav .canvas-text-bar{display:block;float:left;margin-top:44px;width:250px;clear:both;color:#888;font-size:12px}.main-nav ul li .dropdown .wrap .block{margin-left:60px}.rtl-lang #main-nav.navbar-nav>li{width:100%}.rtl-lang #main-nav.navbar-nav>li>a{width:100%;padding:14px 0 14px 14px !important}.rtl-lang #main-nav.navbar-nav>li>a [class^="fa"]{margin-left:18px}.rtl-lang #main-nav.navbar-nav>li>a .fa-long-arrow-right:before{content:"\f178"}html[lang="fa"] #main-nav.navbar-nav>li{width:100%}html[lang="fa"] #main-nav.navbar-nav>li>a{width:100%;padding:14px 0 14px 14px !important}html[lang="fa"] #main-nav.navbar-nav>li>a [class^="fa"]{margin-left:18px}html[lang="fa"] #main-nav.navbar-nav>li>a .fa-long-arrow-right:before{content:"\f178"}#main-nav.navbar-nav>li .navbar-nav__toggleArrow>.fa-chevron-down{font-size:14px;line-height:23px;float:right;margin-right:0}.rtl-lang #main-nav.navbar-nav>li .navbar-nav__toggleArrow>.fa-chevron-down{float:left;margin-left:0}#main-nav.navbar-nav>li .navbar-nav__toggleArrow[aria-expanded="true"]>.fa-chevron-down::before{content:"\f077"}#main-nav.navbar-nav .navbar-nav__list{color:#fff;padding:20px 0 20px 20px;font-size:13px;border-top:1px solid #2d2d2d;border-bottom:1px solid #000;background:#1d1d1d}.rtl-lang #main-nav.navbar-nav .navbar-nav__list{padding:10px 26px 10px 0}#main-nav.navbar-nav .navbar-nav__listTitle{padding:14px 0;font-weight:700;cursor:auto}#main-nav.navbar-nav .navbar-nav__listTitle:first-child{padding-top:0}.navbar-nav__buttons{margin-top:50px}.navbar-nav__buttons a{margin-bottom:10px}.navbar-nav__buttons a [class^="fa"]{margin-right:5px;font-size:18px}.navbar-nav__buttons .navbar-nav__buttons--primary,.navbar-nav__buttons .navbar-nav__buttons--secondary{font-family:"Roboto",sans-serif;text-transform:none;font-size:15px}.navbar-nav__buttons .navbar-nav__buttons--primary{color:#6c6c6d !important;background:none !important;border:1px solid #6c6c6d !important}.navbar-nav__buttons .navbar-nav__buttons--secondary{color:#29a643 !important;background:none !important;border-color:#29a643 !important}}@media(max-width:767px){.main-nav>ul a,.main-nav>ul button{font-size:16px !important}html[lang="vn"] .toggleLeftNav,html[lang="vn"] .toggleRightNav{padding:15px 20px}}@media(max-height:768px){.main-nav ul li .dropdown{margin:12px 0 0 0}.main-nav ul li.selected>a:before{top:63px}.main-nav ul li.selected>a:after{top:61px}.header-top .links-nav{padding:20px 15px}.header-top .buttons-nav{padding:10px 13px 10px 0}.navbar-header{padding:0 0 25px 0}}.mega-menu__badge.badge{position:relative;top:-2px;right:0;margin-top:auto;margin-bottom:auto;margin-left:3px;background-color:#d51820;text-transform:uppercase;font-size:10px;color:white;display:inline-block;padding:3px;padding-right:4px;line-height:.9;border-radius:unset;font-weight:700}html[lang="vn"] .mega-menu__badge.badge{margin-left:0;right:-20px}.rtl-lang .mega-menu__badge.badge{margin-left:0;margin-right:15px}html[lang="cs"] .mega-menu__badge.badge{margin-left:14px}.mega-menu__badge.badge--arrow::after{border-left-color:#d51820;border-right-color:#d51820}.badge--arrow::after{content:" ";display:inline-block;position:absolute;top:0;bottom:0;right:100%;margin:auto 0;width:0;height:0;border-top:.4em solid transparent;border-bottom:.4em solid transparent;border-right-width:.5em;border-right-style:solid}.rtl-lang .badge--arrow::after{left:100%;right:initial;border-left-width:.5em;border-left-style:solid;border-right-width:0}.main-nav .block ul li a{display:inline !important;position:relative}.main-nav ul li .nav-bottom-bar a{display:block;position:relative}a[nav-label="new"]:after{content:'';width:5px;height:5px;margin-left:3px;background:#d51820;border-radius:50%;display:inline-block;transform:translateY(-180%)}#mobileAppBar{position:relative;display:none;width:100%;background-color:#353535;height:95px;padding:0 25px;margin:0;float:left;z-index:999;border-bottom:1px solid #444}#mobileAppBar>a{display:block;padding-left:100px;padding-top:30px;height:95px}.rtl-lang #mobileAppBar>a,html[lang="fa"] #mobileAppBar>a{padding-left:35px;padding-right:80px}#mobileAppBar>.close-bar{display:none;position:absolute;left:25px;z-index:999;top:0;bottom:0;width:32px;height:32px;margin:auto 0;padding:5px}#mobileAppBar>.close-bar:before{content:"\f00d";font-family:FontAwesome;font-size:27px;color:#8e8e8e !important;line-height:normal}#mobileAppBar>a:after{position:absolute;display:block;top:0;bottom:0;right:0;content:"\f105";font-family:FontAwesome;font-size:40px;height:40px;color:#fff;margin:auto 0;vertical-align:middle;line-height:normal}#mobileAppBar .icon-wrap{position:absolute;top:13px;left:0;font-size:60px;width:80px;height:82px;border-radius:10px;border:7px solid #000;border-top:18px solid #000;border-bottom:0;border-bottom-left-radius:0;border-bottom-right-radius:0;background-color:#000}.rtl-lang #mobileAppBar .icon-wrap,html[lang="fa"] #mobileAppBar .icon-wrap{left:auto;right:0}#mobileAppBar .icon-wrap:after{content:"";position:absolute;top:-9px;border-radius:5px;width:17px;height:4px;background-color:#fff;left:0;right:0;margin:0 auto}#mobileAppBar .icon-wrap .fa{display:block}#mobileAppBar.android,#mobileAppBar.iphone{display:block}#mobileAppBar .icon-wrap:before{position:relative;display:block;content:"";font-family:FontAwesome;text-align:center;width:100%;height:100%;margin:0 auto;font-size:45px;color:#fff;line-height:60px;border-radius:5px;border:1px solid #444;background-color:#fff;border-bottom:0;border-bottom-left-radius:0;border-bottom-right-radius:0}#mobileAppBar.android .icon-wrap:before{content:"\f17b";color:#29a643}#mobileAppBar.iphone .icon-wrap:before{content:"\f179";color:#a6b1b7}#mobileAppBar.android>a:after{color:#29a643}#mobileAppBar.iphone>a:after{color:#a6b1b7}.rtl-lang #mobileAppBar.iphone>a:after,.rtl-lang #mobileAppBar.android>a:after,html[lang="fa"] #mobileAppBar.iphone>a:after,html[lang="fa"] #mobileAppBar.android>a:after{content:"\f104";left:0;right:auto}#mobileAppBar .text-wrap{color:#fff}.rtl-lang #mobileAppBar .text-wrap,html[lang="fa"] #mobileAppBar .text-wrap{margin-right:15px}#mobileAppBar .text-wrap h3{font-weight:700;text-transform:uppercase;font-size:25px;color:#fff;letter-spacing:normal;margin:0 0 5px 0}.rtl-lang #mobileAppBar .text-wrap h3,html[lang="fa"] #mobileAppBar .text-wrap h3{text-align:right}html[lang="ru"] #mobileAppBar .text-wrap h3{font-size:20px}.rtl-lang #mobileAppBar .text-wrap h3,html[lang="el"] #mobileAppBar .text-wrap h3{font-size:16px}html[lang="ja"] #mobileAppBar .text-wrap h3{font-size:15px}html[lang="fa"] #mobileAppBar .text-wrap h3{font-size:13px}html[lang="zh_CN"] #mobileAppBar .text-wrap h3,html[lang="tw"] #mobileAppBar .text-wrap h3,html[lang="ko"] #mobileAppBar .text-wrap h3{font-weight:bold}html[lang="el"] #mobileAppBar .text-wrap h3{font-weight:400}html[lang="ko"] #mobileAppBar .text-wrap h3{letter-spacing:0}html[lang="tr"] #mobileAppBar .text-wrap h3{text-transform:uppercase}#mobileAppBar .text-wrap p{font-size:14px;font-weight:normal;color:#fff;line-height:16px;padding-right:20px}.rtl-lang #mobileAppBar .text-wrap p,html[lang="fa"] #mobileAppBar .text-wrap p{padding-right:0;padding-left:20px;text-align:right}html[lang="ru"] #mobileAppBar .text-wrap p{font-size:13px}@media(min-width:361px){html[lang="th"] #mobileAppBar .text-wrap h3{font-size:16px;letter-spacing:0;padding-top:8px}html[lang="bn"] #mobileAppBar .text-wrap h3{font-size:17px;letter-spacing:0;padding-top:8px}html[lang="bn"] #mobileAppBar .text-wrap p{font-size:12px}}@media(max-width:360px){#mobileAppBar>a{padding-left:80px}#mobileAppBar .icon-wrap{width:70px}#mobileAppBar .text-wrap h3{font-size:15px}html[lang="bn"] #mobileAppBar .text-wrap h3{font-size:12px}#mobileAppBar .text-wrap p{font-size:12px}html[lang="ru"] #mobileAppBar .text-wrap h3{font-size:17px}html[lang="ja"] #mobileAppBar .text-wrap p{font-size:12px}}.ribbon{width:auto;height:50px;position:absolute;right:39px;text-align:left;overflow:visible}.ribbon::before{position:absolute;z-index:-1;content:'';display:block;border:4px solid #bf0001}.ribbon span{position:absolute;display:inline-table;width:auto;padding:4px 5px 5px 5px;background-color:#ff0001;box-shadow:0 3px 8px rgba(0,0,0,.1);color:#fff;font:700 10px/1 'Lato',sans-serif;text-shadow:0 1px 1px rgba(0,0,0,.2);text-transform:uppercase;text-align:left;z-index:1;left:0}.ribbon-top-left{top:3px;left:-13px}.ribbon-top-left::before{top:19px;left:0;transform:rotate(-90deg);border-top-color:transparent;border-left-color:transparent}.ribbon-top-left span{right:-20px;top:0}.top-bar .option-nav{position:relative;top:12px;display:block;float:right}.rtl-lang .top-bar .option-nav,html[lang="fa"] .top-bar .option-nav{float:left}.top-bar .option-nav a{margin-right:30px;height:40px;float:left;color:#444}.rtl-lang .top-bar .option-nav a,html[lang="fa"] .top-bar .option-nav a{margin-left:30px}.top-bar .option-nav a:first-child{margin-right:0}.top-bar .option-nav a span{position:relative;top:-12px}.top-bar .option-nav .dropdown-menu{margin-top:10px;background-color:#e8e8e8 !important;box-shadow:none;min-width:130px}.top-bar .option-nav .dropdown-menu li a i.fa-facebook-square,.top-bar .option-nav .dropdown-menu li a i.fa-twitter-square,.top-bar .option-nav .dropdown-menu li a i.fa-youtube-play{position:relative;top:3px;font-size:22px;margin-right:5px;color:#555}.top-bar .option-nav .dropdown-menu a:hover .fa-facebook-square{color:#00549e}.top-bar .option-nav .dropdown-menu a:hover .fa-twitter-square{color:#616060}.top-bar .option-nav .dropdown-menu a:hover .fa-youtube-play{color:#e11b2b}.top-bar .option-nav .dropdown-menu a{display:block;font-size:14px;height:30px;line-height:30px;text-transform:uppercase;float:none;margin:0;padding:0 10px 0 10px}.top-bar .option-nav .btn-group.open .dropdown-toggle{box-shadow:none}.top-bar .option-nav .search-box{position:relative;top:5px;width:0;display:none;float:left;border:1px solid #ccc;background-color:#ccc !important;color:#666}.top-bar .option-nav .search-box.block{display:block;float:left;left:30px}.top-bar .option-nav .search-box.hide{right:0}.top-bar .option-nav .search-box input[type="text"]{display:block;height:30px;margin:0;line-height:30px !important;padding:0 0 0 10px;border:0}.top-bar .option-nav .search-box .input-group button{border:1px solid #ccc;background-color:#ccc !important;color:#666}.top-bar .option-nav .search-box .input-group button .fa{display:block;position:relative;vertical-align:middle;top:-3px}.top-bar .option-nav .search-box .input-group .form-control:focus{border:1px solid #ccc !important}.breadcrumb{white-space:nowrap;overflow:hidden}.parent .top-bar{background-color:#e8e8e8;padding:20px 0 20px 0;margin:0}.parent .top-bar .breadcrumb,.parent .top-bar .breadcrumb a,.parent .top-bar .breadcrumb>li{font-size:12px;color:#7f7f7f;display:inline-block;margin:0;padding:0}.parent .top-bar .breadcrumb>li+li:before{font-family:FontAwesome;content:"\f105";font-size:13px;color:#7f7f7f;margin:0 5px 0 5px}.rtl-lang .parent .top-bar .breadcrumb>li+li:before,html[lang="fa"] .parent .top-bar .breadcrumb>li+li:before{content:"\f104"}.parent .top-bar .breadcrumb{padding:0;margin:0;background-color:transparent}html[lang="bn"] .parent .top-bar ol.breadcrumb{padding-top:5px}html[lang="hi"] .parent .top-bar ol.breadcrumb,html[lang="si"] .parent .top-bar ol.breadcrumb{margin-top:10px}.parent .top-bar h1{font-weight:400;text-transform:uppercase;font-size:48px;color:#000;line-height:45px;margin:0;padding:0;border:0}.rtl-lang .parent .top-bar h1,html[lang="fa"] .parent .top-bar h1{padding:0 0 10px 0}html[lang="zh_CN"] .parent .top-bar h1,html[lang="tw"] .parent .top-bar h1,html[lang="hi"] .parent .top-bar h1{padding-bottom:5px}html[lang="el"] .parent .top-bar h1,html[lang="vn"] .parent .top-bar h1,html[lang="si"] .parent .top-bar h1{font-size:39px !important;letter-spacing:-1.5px}html[lang="zh_CN"] .parent .top-bar h1,html[lang="ja"] .parent .top-bar h1,html[lang="tw"] .parent .top-bar h1{font-size:45px;letter-spacing:-1px}html[lang="ko"] .parent .top-bar h1{font-size:45px;font-weight:bold;letter-spacing:-2px}html[lang="tr"] .parent .top-bar h1{text-transform:uppercase}i.contact{position:relative;width:29px;height:40px;display:inline-block;margin-right:15px}.rtl-lang i.contact,html[lang="fa"] i.contact{margin-left:15px}i.contact{background:url('https://cloud.xm-cdn.com/static/common/icons/mail-open.png?v=26651b465fd79aa69ca199119436a8ca') no-repeat 0 0}@media(max-width:991px){.parent .top-bar h1{text-align:center}.parent .top-bar .breadcrumb{display:block;text-align:center}}@media(max-width:767px){.parent .top-bar{padding:12px 0 12px 0}.parent .top-bar h1{font-size:42px}}html[lang="si"] .partners .parent .top-bar h1{line-height:normal}.xm-app-candlesticks{position:absolute;z-index:0;left:50%;top:50%;transform:translate(-50%,-50%)}.grid__list--tickets .grid__item img{width:185px;height:66px;margin-bottom:14px}.grid{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.grid__item{margin:0 auto;max-width:250px}.grid__item i{font-size:62px;color:#d51820}.grid .grid__list{position:relative;width:100%;max-width:100%;flex:0 1 100%;padding-right:15px;padding-left:15px}.grid__list+.grid__list{margin-top:68px}.icons-start>.iconWrapper_container{justify-content:flex-start !important}.icons-center>.iconWrapper_container{justify-content:center !important}.metatrader-row--xmapp{flex-wrap:wrap}.metatrader-row--xmapp .feature-item--xmapp{flex-basis:16.6666667%;max-width:16.6666667%}@media(min-width:765px){.grid__list--tickets .grid__item::before{content:''}.grid__list.grid__list--tickets{flex:0 1 33%}.grid__list+.grid__list{margin-top:0}}@media(min-width:992px){.grid__list.grid__list--tickets::before{border-top:1px solid #bdb9ba;position:absolute;width:73px;-webkit-transform:rotate(110deg);-ms-transform:rotate(110deg);transform:rotate(110deg);bottom:50%;right:-50px}html[lang="ar"] .grid__list.grid__list--tickets::before,html[lang="ur"] .grid__list.grid__list--tickets::before{left:-50px !important;right:unset}.grid__list.grid__list--tickets:last-child::before{border:0}.grid>.grid__list--tickets:nth-of-type(1)>.grid__item{max-width:50%}.grid>.grid__list--tickets:nth-of-type(2)>.grid__item{max-width:70%}.grid>.grid__list--tickets:nth-of-type(3)>.grid__item{max-width:75%}}@media(max-width:992px){.sm-text-center{text-align:center}}.xmapp-interactive{background-size:cover;background-position:center;overflow:hidden}h2.xmapp-title{font-size:39px;font-weight:700;color:#000;margin:0 auto;max-width:800px;line-height:45px}html[lang='hi'] h2.xmapp-title{line-height:60px}.xmapp-interactive__stage{position:relative}.waypoint{position:absolute;display:flex;align-items:center}.waypoint.waypoint--manage{top:24%;left:0;transform:rotate(-45deg)}.waypoint.waypoint--deposit{top:53%;left:5%;transform:rotate(-45deg)}.waypoint.waypoint--tap{top:22.3%;right:7.8%;transform:rotate(-136deg)}.waypoint.waypoint--discover{top:36%;right:10%;transform:rotate(-132deg)}.waypoint--visible>.waypoint-circle:first-child{visibility:visible;transform:scale(1)}.waypoint-circle:last-child{border:1px solid #d51820;padding:10px;box-shadow:0 0 0 rgb(213 24 32 / 40%)}.waypoint-circle:last-child::before{background-color:#d51820;height:10px;width:10px}.waypoint--visible>.waypoint-circle:last-child{visibility:hidden;transform:scale(0)}.waypoint-circle{position:relative;cursor:pointer;border-radius:9999px;border:1px solid #29a643;padding:9px;box-shadow:0 0 0 rgb(41 166 67 / 40%);transition:.35s linear}.waypoint-circle:first-child{visibility:hidden;margin-right:5px;transform:scale(0)}.waypoint-circle::before{content:'';position:absolute;display:block;width:10px;height:10px;background:#29a643;top:50%;left:50%;transform:translate(-50%,-50%);border-radius:50%}.waypoint__line--dashed{width:20px;border-bottom:1px dashed #29a643}.waypoint__line{position:relative;width:235px;border-bottom:1px solid #bdbdbd;margin-left:5px}.waypoint__line,.waypoint__line--dashed{visibility:hidden;transform:scale(0);transition:.35s linear;transform-origin:right}.waypoint__line::after{content:'';position:absolute;background:#bdbdbd;width:3px;height:3px;border-radius:50%;right:-2px;top:50%;transform:translateY(-38%)}.waypoint--visible>.waypoint__line,.waypoint--visible>.waypoint__line--dashed{visibility:visible;transform:scale(1)}.waypoint--visible>.waypoint__line--dashed{transition-delay:.35s}.waypoint>.waypoint__line{transition-delay:.35s}.waypoint-circle{animation:pulse 1.5s infinite}.waypoint-circle:last-child{animation:pulse-indicator .8s infinite}.waypoint-circle.clicked{animation:pulse-big 1s}.waypoint__message{position:absolute;visibility:hidden;opacity:0;transition:.70s linear all;transform:translateZ(0) translateY(10px);max-width:250px;margin-top:20px}.waypoint__message--visible{visibility:visible;opacity:1;transform:translateY(0)}.waypoint__message.manage{top:38%}.waypoint__message.deposit{top:67%}.waypoint__message.tap{top:37%;right:0}.waypoint__message.discover{top:50.5%;right:0}html[lang="ar"] .xmapp-interactive__stage,html[lang="ur"] .xmapp-interactive__stage{direction:ltr}html[lang="ar"] .waypoint__message,html[lang="ur"] .waypoint__message{direction:rtl}html[lang="ar"] .waypoint__message.tap,html[lang="ur"] .waypoint__message.tap,html[lang="ar"] .waypoint__message.discover,html[lang="ur"] .waypoint__message.discover{right:0}@-webkit-keyframes pulse{0{-webkit-box-shadow:0 0 0 0 rgba(41,166,67,0.4)}70%{-webkit-box-shadow:0 0 0 10px rgba(41,166,67,0)}100%{-webkit-box-shadow:0 0 0 0 rgba(41,166,67,0)}}@keyframes pulse{0{-moz-box-shadow:0 0 0 0 rgba(41,166,67,0.4);box-shadow:0 0 0 0 rgba(41,166,67,0.4)}70%{-moz-box-shadow:0 0 0 10px rgba(41,166,67,0);box-shadow:0 0 0 10px rgba(41,166,67,0)}100%{-moz-box-shadow:0 0 0 0 rgba(41,166,67,0);box-shadow:0 0 0 0 rgba(41,166,67,0)}}@keyframes pulse-indicator{0{-moz-box-shadow:0 0 0 0 rgba(213,24,32,0.4);box-shadow:0 0 0 0 rgba(213,24,32,0.4)}70%{-moz-box-shadow:0 0 0 10px rgba(213,24,32,0);box-shadow:0 0 0 10px rgba(213,24,32,0)}100%{-moz-box-shadow:0 0 0 0 rgba(41,166,67,0);box-shadow:0 0 0 0 rgba(41,166,67,0)}}@-webkit-keyframes pulse-indicator{0{-webkit-box-shadow:0 0 0 0 rgba(213,24,32,0.4)}70%{-webkit-box-shadow:0 0 0 10px rgba(213,24,32,0)}100%{-webkit-box-shadow:0 0 0 0 rgba(41,166,67,0)}}@-webkit-keyframes pulse-big{0{-webkit-box-shadow:0 0 0 0 rgba(41,166,67,0.4)}70%{-webkit-box-shadow:0 0 0 10px rgba(41,166,67,0)}100%{-webkit-box-shadow:0 0 0 0 rgba(41,166,67,0)}}@keyframes pulse-big{0{-moz-box-shadow:0 0 0 0 rgba(41,166,67,0.4);box-shadow:0 0 0 0 rgba(41,166,67,0.4)}70%{-moz-box-shadow:0 0 0 1000px rgba(41,166,67,0);box-shadow:0 0 0 1000px rgba(41,166,67,0)}100%{-moz-box-shadow:0 0 0 0 rgba(41,166,67,0);box-shadow:0 0 0 0 rgba(41,166,67,0)}}.mobile-widget{background:#e4e4e4}.grid__list.grid__list--method-1{margin-top:0}.grid__list.grid__list--step{margin-top:0}.grid__list.grid__list--separator{margin-top:0}.hero{padding:25px 0 250px;text-align:center;overflow:hidden}.hero h2.primary-title{font-size:10px;line-height:39px;letter-spacing:1.5px;text-transform:uppercase;color:rgba(0,0,0,0.5)}.hero h3.secondary-title{font-size:18px;line-height:26px;font-weight:300}.hero h3.secondary-title strong{font-size:26px;line-height:30px;font-weight:900;text-transform:capitalize}html[lang="zh_CN"] .hero h3.secondary-title strong{font-size:25px;line-height:30px}.hero .hero__txt{font-size:14px;line-height:20px;max-width:463px;margin:0 auto}html[lang="zh_CN"] .hero .hero__txt{font-size:13px;line-height:20px}.hero .app-btn{border-radius:8.48837px;padding:11px 16px;max-width:180px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;margin:0 auto;cursor:pointer;flex-direction:column}.app-btn-wrapper.devices{max-width:180px;margin:0 auto}.hero .app-btn{background:#2a2a2a;max-width:205px}html[lang="vn"] .hero .app-btn,html[lang="hu"] .hero .app-btn,html[lang="sv"] .hero .app-btn{max-width:325px}html[lang="ar"] .hero .app-btn,html[lang="ur"] .hero .app-btn,html[lang="bn"] .hero .app-btn,html[lang="th"] .hero .app-btn,html[lang="de"] .hero .app-btn,html[lang="fr"] .hero .app-btn{max-width:340px}html[lang="ms"] .hero .app-btn,html[lang="pl"] .hero .app-btn,html[lang="nl"] .hero .app-btn,html[lang="cs"] .hero .app-btn{max-width:350px}html[lang="ru"] .hero .app-btn,html[lang="es"] .hero .app-btn,html[lang="id"] .hero .app-btn,html[lang="it"] .hero .app-btn,html[lang="ph"] .hero .app-btn{max-width:350px}html[lang="el"] .hero .app-btn{max-width:360px}.app-btn__img img{border-radius:8px;width:140px}.hero .app-btn__txt span:before{content:"";width:100%;display:block;background:#6a6a6a;margin:10px 0;height:1px}.hero .app-btn__txt{margin-top:10px;color:#bebebe;font-size:10px;text-align:center}html[lang="ar"] .hero .app-btn__txt,html[lang="ur"] .hero .app-btn__txt{text-align:right}.hero .app-btn__txt span{font-size:17px;color:#fff}.hero .mobile-image{position:absolute;top:55px;width:250px;margin:0 auto;z-index:1;left:50%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.intructions{position:relative;background:#f1f1f1;z-index:2}.intructions h2.primary-title{font-size:10px;line-height:22px;letter-spacing:.84px;font-weight:500;text-transform:uppercase;color:rgba(0,0,0,0.5)}.intructions h3.secondary-title{font-weight:bold;font-size:24px;line-height:26px}html[lang="th"] .intructions h3.secondary-title{font-size:23px;line-height:26px}.intructions .title__undeline{width:79px;border-bottom:3px solid #d51820;margin:0 auto}.intructions .sm-box{max-width:498px;margin:0 auto;background:#fff;padding:16px 20px 2px}html[lang="th"] .intructions .sm-box,html[lang="ur"] .intructions .sm-box,html[lang="nl"] .intructions .sm-box{max-width:540px}html[lang="bn"] .intructions .sm-box,html[lang="hu"] .intructions .sm-box,html[lang="id"] .intructions .sm-box,html[lang="it"] .intructions .sm-box,html[lang="ph"] .intructions .sm-box,html[lang="pt"] .intructions .sm-box,html[lang="sv"] .intructions .sm-box{max-width:600px}html[lang="cs"] .intructions .sm-box,html[lang="es"] .intructions .sm-box{max-width:620px}html[lang="de"] .intructions .sm-box,html[lang="el"] .intructions .sm-box,html[lang="fr"] .intructions .sm-box,html[lang="vn"] .intructions .sm-box{max-width:660px}html[lang="ru"] .intructions .sm-box,html[lang="pl"] .intructions .sm-box{max-width:720px}.intructions .sm-box p:first-child{font-weight:300;font-size:14px;line-height:19px}html[lang="zh_CN"] .intructions .sm-box p:first-child{font-size:17px;line-height:23px}.intructions .sm-box p:last-child{font-weight:300;font-style:italic;font-size:13.5px;line-height:18px;color:#494949}.intructions .nav-links{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;list-style:none;margin:0 auto;padding:0;max-width:952px}.intructions .nav-links li{-webkit-box-flex:0;-ms-flex:0 1 50%;flex:0 1 50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.intructions .nav-links a{color:#c9c9c9;font-weight:bold;font-size:12px;line-height:14px}.intructions .nav-links li{padding-bottom:20px;border-bottom:4px solid #c9c9c9}.intructions .nav-links li.active{padding-bottom:20px;border-bottom:4px solid #000}.intructions .nav-links .active a{color:#000;font-weight:bold}.intructions .grid.grid__method-1{-webkit-box-align:center;-ms-flex-align:center;align-items:center}.intructions .grid__method-1 .step__box .step__number{font-weight:bold;font-family:'Bebas','Roboto',sans-serif;color:#fff;width:32px;height:32px;font-size:22px;line-height:32px;border-radius:5px;position:absolute;background:#000;left:-10px;top:-20px}html[lang="ar"] .intructions .grid__method-1 .step__box .step__number,html[lang="ur"] .intructions .grid__method-1 .step__box .step__number{left:0;right:-10px}.intructions .grid__method-1 .step__box{background:#f1f1f1;position:absolute;width:32px;height:20px;top:-1px;left:-1px}html[lang="ar"] .intructions .grid__method-1 .step__box,html[lang="ur"] .intructions .grid__method-1 .step__box{left:0;right:-1px}.intructions .step__icon .fa{position:absolute;right:-15px;bottom:-15px;font-weight:bold;color:#000;width:32px;height:32px;font-size:21px;line-height:27px}html[lang="ar"] .intructions .step__icon .fa,html[lang="ur"] .intructions .step__icon .fa{right:auto;left:-15px}.intructions .step__icon{background:#f1f1f1;position:absolute;width:20px;height:20px;bottom:-1px;right:-1px}html[lang="ar"] .intructions .step__icon,html[lang="ur"] .intructions .step__icon{right:auto;left:-1px}.intructions .step__dot--top{position:absolute;bottom:20px;right:-3px;border-radius:50%;border:3px solid #d1d1d1}html[lang="ar"] .intructions .step__dot--top,html[lang="ur"] .intructions .step__dot--top{right:auto;left:-3px}.intructions .step__dot--bottom{position:absolute;bottom:-3px;right:20px;border-radius:50%;border:3px solid #d1d1d1}html[lang="ar"] .intructions .step__dot--bottom,html[lang="ur"] .intructions .step__dot--bottom{right:auto;left:20px}.intructions .btn-scroll{position:absolute;margin-top:-20px;z-index:1;left:50%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);cursor:pointer}.intructions .grid__list--method-1 .grid__item{width:100%;margin:0 auto;max-width:258px;padding:28px 10px;position:relative;text-align:center;border:.5px dashed #000;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;min-height:97px}.intructions .grid__list--method-1 .grid__list.grid__list--separator{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.intructions .grid__method-1 .grid__list--separator:before{border-style:solid;border-width:3px 3px 0 0;content:'';display:inline-block;height:18px;width:18px;left:0;position:relative;top:0;color:#d51820;left:0;-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}.intructions .grid__list--method-1 .border__separator{border-bottom:2px solid #d51820;width:35px;margin:0 auto}.intructions .grid__list.grid__list--method-1 p{font-size:16px;line-height:19px}html[lang="zh_CN"] .intructions .grid__list.grid__list--method-1 p{font-size:15px;line-height:19px}.intructions .grid__list.grid__list--step .grid__item{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;max-width:100%}.intructions .grid__list.grid__list--method-2{max-width:385px;margin:0 auto}.intructions .grid__list.grid__list--method-2 .grid__item{min-height:84px;margin:0;max-width:100%}.intructions .grid__list.grid__list--method-2 .version-txt{font-size:16px;line-height:20px}.intructions .grid__list--step .step__number{font-size:27px;font-family:'Bebas','Roboto',sans-serif;font-weight:bold;border:1px dashed #000;width:48px;height:46px;margin-right:20px;padding:1px 17px}html[lang="ar"] .intructions .grid__list--step .step__number,html[lang="ur"] .intructions .grid__list--step .step__number{margin-right:0;margin-left:20px;padding:1px 18px}.intructions .grid__list--method-2 .separator{border-bottom:1px dashed #000}.support__title{font-weight:bold;font-size:18px;line-height:25px}.brd-box{max-width:256px;margin:0 auto;border:.33px dashed #000;padding:29px 28px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;background:#fbfbfb;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.brd-box__icon{font-size:50px}.brd-box__txt{font-size:14px;line-height:18px;text-align:center}@media(min-width:768px){.hero{padding:70px 0;text-align:left}html[lang="ar"] .hero,html[lang="ur"] .hero{text-align:right}.hero h2.primary-title{font-size:10px;line-height:28px}.hero h3.secondary-title{font-size:30px;line-height:33px}html[lang="ar"] .hero h3.secondary-title,html[lang="ur"] .hero h3.secondary-title,html[lang="ru"] .hero h3.secondary-title,html[lang="ms"] .hero h3.secondary-title,html[lang="zh_CN"] .hero h3.secondary-title,html[lang="cs"] .hero h3.secondary-title,html[lang="de"] .hero h3.secondary-title,html[lang="es"] .hero h3.secondary-title,html[lang="fr"] .hero h3.secondary-title,html[lang="hu"] .hero h3.secondary-title,html[lang="id"] .hero h3.secondary-title,html[lang="it"] .hero h3.secondary-title,html[lang="hu"] .hero h3.secondary-title,html[lang="tw"] .hero h3.secondary-title,html[lang="vn"] .hero h3.secondary-title{font-size:23px;line-height:26px}.hero h3.secondary-title strong{font-size:36px;line-height:44px;font-weight:700}html[lang="ms"] .hero h3.secondary-title strong,html[lang="cs"] .hero h3.secondary-title strong,html[lang="id"] .hero h3.secondary-title strong{font-size:25px;line-height:27px}html[lang="ar"] .hero h3.secondary-title strong,html[lang="ur"] .hero h3.secondary-title strong,html[lang="ru"] .hero h3.secondary-title strong,html[lang="zh_CN"] .hero h3.secondary-title strong,html[lang="hu"] .hero h3.secondary-title strong,html[lang="it"] .hero h3.secondary-title strong,html[lang="vn"] .hero h3.secondary-title strong{font-size:27px;line-height:30px}html[lang="de"] .hero h3.secondary-title strong,html[lang="es"] .hero h3.secondary-title strong,html[lang="fr"] .hero h3.secondary-title strong,html[lang="ph"] .hero h3.secondary-title strong,html[lang="tw"] .hero h3.secondary-title strong{font-size:30px;line-height:37px}html[lang="nl"] .hero h3.secondary-title strong,html[lang="sv"] .hero h3.secondary-title strong{font-size:33px;line-height:37px}.hero .hero__txt{margin:0;font-size:14px;line-height:20px}html[lang="zh_CN"] .hero .hero__txt{font-size:14px;line-height:20px}.app-btn-wrapper.devices{max-width:200px;margin:0}.hero .app-btn{margin:0;padding:15px 16px}.hero .app-btn{background:#2a2a2a;margin:0;max-width:350px;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;cursor:default;flex-direction:row}.hero .app-btn__img img{margin-right:10px}.rtl-lang .hero .app-btn__img img{margin-right:0;margin-left:10px}.hero .app-btn__txt{margin-top:0;font-size:14px;line-height:22px;text-align:left}.hero .app-btn__txt span{font-size:21px}.hero .mobile-image{top:15px;width:322px}html[lang="pl"] .hero .mobile-image,html[lang="el"] .hero .mobile-image,html[lang="bn"] .hero .mobile-image{top:85px}html[lang="id"] .hero .mobile-image,html[lang="it"] .hero .mobile-image,html[lang="ms"] .hero .mobile-image{top:15px}html[lang="th"] .hero .mobile-image{top:60px}html[lang="zh_CN"] .hero .mobile-image,html[lang="ph"] .hero .mobile-image,html[lang="sv"] .hero .mobile-image,html[lang="tw"] .hero .mobile-image{top:30px}html[lang="ru"] .hero .mobile-image,html[lang="vn"] .hero .mobile-image{top:50px}.intructions h2.primary-title{font-size:12px;line-height:31px;letter-spacing:1.16398px}.intructions h3.secondary-title{font-size:30px;line-height:35px}html[lang="th"] .intructions h3.secondary-title{font-size:30px;line-height:35px}.intructions .sm-box p:first-child{font-size:16px;line-height:19px}html[lang="zh_CN"] .intructions .sm-box p:first-child{font-size:16px;line-height:19px}.intructions .sm-box p:last-child{font-size:14px;line-height:15px}.intructions .nav-links a{font-size:16px;line-height:18px}.intructions .grid__list.grid__list--method-1{-webkit-box-flex:0;-ms-flex:0 1 28%;flex:0 1 28%}.intructions .grid__method-1 .grid__list--separator{-webkit-box-flex:0;-ms-flex:0 1 20px;flex:0 1 20px}.intructions .grid__method-1 .grid__list--separator:before{left:-5px}html[lang="ar"] .intructions .grid__method-1 .grid__list--separator:before,html[lang="ur"] .intructions .grid__method-1 .grid__list--separator:before{left:5px}.intructions .grid__method-1 .grid__list--separator:before{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}html[lang="ar"] .intructions .grid__method-1 .grid__list--separator::before,html[lang="ur"] .intructions .grid__method-1 .grid__list--separator::before{-webkit-transform:rotate(-135deg);-ms-transform:rotate(-135deg);transform:rotate(-135deg)}.intructions .grid__list--method-1 .grid__item{max-width:100%;padding:22px 10px;min-height:85px}html[lang="zh_CN"] .intructions .grid__list--method-1 .grid__item{padding:15px 15px;min-height:75px}html[lang="el"] .intructions .grid__list--method-1 .grid__item,html[lang="hu"] .intructions .grid__list--method-1 .grid__item,html[lang="ms"] .intructions .grid__list--method-1 .grid__item{padding:15px 10px;min-height:84px}html[lang="ru"] .intructions .grid__list--method-1 .grid__item{padding:15px 10px;min-height:100px}.intructions .grid__list.grid__list--method-1 p{font-size:11px;line-height:13px}html[lang="zh_CN"] .intructions .grid__list.grid__list--method-1 p{font-size:11px;line-height:13px}.intructions .grid__list.grid__list--method-2{-webkit-box-flex:0;-ms-flex:0 1 42%;flex:0 1 42%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.intructions .grid__list.grid__list--method-2 .version-txt{font-size:17.5px;line-height:21px}html[lang="ru"] .intructions .grid__list.grid__list--method-2 .version-txt,html[lang="ms"] .intructions .grid__list.grid__list--method-2 .version-txt,html[lang="bn"] .intructions .grid__list.grid__list--method-2 .version-txt,html[lang="el"] .intructions .grid__list.grid__list--method-2 .version-txt,html[lang="hu"] .intructions .grid__list.grid__list--method-2 .version-txt,html[lang="id"] .intructions .grid__list.grid__list--method-2 .version-txt,html[lang="ms"] .intructions .grid__list.grid__list--method-2 .version-txt,html[lang="pl"] .intructions .grid__list.grid__list--method-2 .version-txt{min-height:48px}.intructions .grid__list.grid__list--method-2:nth-of-type(2){-webkit-box-flex:0;-ms-flex:0 1 118px;flex:0 1 118px;padding:0;margin:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.intructions .grid__list.grid__list--method-2:last-child{padding-left:60px}html[lang="ar"] .intructions .grid__list.grid__list--method-2:last-child,html[lang="ur"] .intructions .grid__list.grid__list--method-2:last-child{padding-left:0;padding-right:60px}.intructions .grid__list--step .step__number{width:45px;height:43px}.intructions .grid__list--method-2 .apk-img{position:relative;top:-30px}.intructions .apk-img:before,.intructions .apk-img:after{content:' ';border:1px dashed #000;position:absolute;right:50%;-webkit-transform:translateX(50%);-ms-transform:translateX(50%);transform:translateX(50%)}.intructions .apk-img:before{height:203px;top:-213px}html[lang="bn"] .intructions .apk-img:before,html[lang="id"] .intructions .apk-img:before,html[lang="pl"] .intructions .apk-img:before{height:217px;top:-228px}html[lang="hu"] .intructions .apk-img:before,html[lang="ru"] .intructions .apk-img:before{height:232px;top:-240px}html[lang="fr"] .intructions .apk-img:before,html[lang="ms"] .intructions .apk-img:before{height:218px;top:-226px}html[lang="el"] .intructions .apk-img:before{height:242px;top:-250px}.intructions .apk-img:after{height:190px;bottom:-200px}html[lang="bn"] .intructions .apk-img:after,html[lang="id"] .intructions .apk-img:after,html[lang="pl"] .intructions .apk-img:after{height:200px;bottom:-211px}html[lang="fr"] .intructions .apk-img:after,html[lang="ms"] .intructions .apk-img:after{height:204px;bottom:-213px}html[lang="hu"] .intructions .apk-img:after,html[lang="ru"] .intructions .apk-img:after{height:218px;bottom:-226px}html[lang="el"] .intructions .apk-img:after{height:230px;bottom:-237px}.intructions .grid__list--method-2 .dec-line{border-bottom:3px solid #000;width:28px;position:absolute;bottom:15px}.support__title{font-size:21px;line-height:25px}.brd-box{max-width:540px;margin:0 auto;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.brd-box__icon{font-size:38px;margin-right:15px}html[lang="ar"] .support .brd-box__icon,html[lang="ur"] .support .brd-box__icon{margin-right:0;margin-left:15px}.brd-box__txt{font-size:13px;line-height:18px;text-align:left}html[lang="ar"] .brd-box__txt,html[lang="ur"] .brd-box__txt{text-align:right}}@media(min-width:992px){.hero{padding:100px 0 60px}.hero h2.primary-title{font-size:14px;line-height:39px}.hero h3.secondary-title{font-size:41px;line-height:45px}html[lang="hu"] .hero h3.secondary-title,html[lang="id"] .hero h3.secondary-title,html[lang="it"] .hero h3.secondary-title,html[lang="vn"] .hero h3.secondary-title{font-size:30px;line-height:35px}html[lang="nl"] .hero h3.secondary-title,html[lang="sv"] .hero h3.secondary-title{font-size:30px;line-height:35px}html[lang="ar"] .hero h3.secondary-title,html[lang="ur"] .hero h3.secondary-title,html[lang="ru"] .hero h3.secondary-title,html[lang="ms"] .hero h3.secondary-title,html[lang="zh_CN"] .hero h3.secondary-title,html[lang="cs"] .hero h3.secondary-title,html[lang="de"] .hero h3.secondary-title,html[lang="es"] .hero h3.secondary-title,html[lang="fr"] .hero h3.secondary-title,html[lang="id"] .hero h3.secondary-title,html[lang="ph"] .hero h3.secondary-title,html[lang="tw"] .hero h3.secondary-title{font-size:32px;line-height:36px}.hero h3.secondary-title strong{font-size:47px;line-height:51px}html[lang="nl"] .hero h3.secondary-title strong,html[lang="sv"] .hero h3.secondary-title strong{font-size:43px;line-height:50px}html[lang="ms"] .hero h3.secondary-title strong,html[lang="cs"] .hero h3.secondary-title strong,html[lang="hu"] .hero h3.secondary-title strong,html[lang="id"] .hero h3.secondary-title strong,html[lang="it"] .hero h3.secondary-title strong,html[lang="vn"] .hero h3.secondary-title strong{font-size:33px;line-height:37px}html[lang="ar"] .hero h3.secondary-title strong,html[lang="ur"] .hero h3.secondary-title strong,html[lang="ru"] .hero h3.secondary-title strong,html[lang="zh_CN"] .hero h3.secondary-title strong,html[lang="es"] .hero h3.secondary-title strong{font-size:36px;line-height:38px}html[lang="fr"] .hero h3.secondary-title strong,html[lang="ph"] .hero h3.secondary-title strong{font-size:39px;line-height:50px}html[lang="de"] .hero h3.secondary-title strong,html[lang="tw"] .hero h3.secondary-title strong{font-size:41px;line-height:50px}.hero .app-btn__img img{margin-right:15px}.hero .app-btn{margin:0;max-width:365px;padding:15px 16px}html[lang="tw"] .hero .app-btn{max-width:305px}html[lang="zh_CN"] .hero .app-btn{max-width:350px}html[lang="pt"] .hero .app-btn,html[lang="vn"] .hero .app-btn,html[lang="pl"] .hero .app-btn{max-width:360px}html[lang="ar"] .hero .app-btn,html[lang="ur"] .hero .app-btn,html[lang="bn"] .hero .app-btn,html[lang="th"] .hero .app-btn,html[lang="de"] .hero .app-btn,html[lang="fr"] .hero .app-btn,html[lang="hu"] .hero .app-btn,html[lang="sv"] .hero .app-btn{max-width:380px}html[lang="ms"] .hero .app-btn,html[lang="cs"] .hero .app-btn,html[lang="es"] .hero .app-btn,html[lang="id"] .hero .app-btn,html[lang="it"] .hero .app-btn,html[lang="nl"] .hero .app-btn,html[lang="ph"] .hero .app-btn{max-width:330px}html[lang="ru"] .hero .app-btn,html[lang="el"] .hero .app-btn{max-width:390px}.hero .mobile-image{top:-35px;width:440px}html[lang="hu"] .hero .mobile-image,html[lang="pl"] .hero .mobile-image{top:15px}html[lang="bn"] .hero .mobile-image,html[lang="ru"] .hero .mobile-image,html[lang="sv"] .hero .mobile-image,html[lang="th"] .hero .mobile-image{top:-35px}html[lang="el"] .hero .mobile-image,html[lang="pt"] .hero .mobile-image,html[lang="tw"] .hero .mobile-image{top:-40px}html[lang="el"] .hero .mobile-image{top:-10px}html[lang="ar"] .hero .mobile-image,html[lang="zh_CN"] .hero .mobile-image,html[lang="vn"] .hero .mobile-image{top:-30px}html[lang="ru"] .hero .mobile-image{top:0}.hero .hero__txt{margin:0;font-size:18px;line-height:25px}.intructions h2.primary-title{font-weight:500;font-size:16px;line-height:39px;letter-spacing:1.5px}.intructions h3.secondary-title{font-size:40px;line-height:47px}html[lang="el"] .intructions h3.secondary-title{font-size:32px;line-height:35px}.intructions .sm-box p:first-child{font-size:21px;line-height:25px}.intructions .sm-box p:last-child{font-size:16px;line-height:19px}.intructions .nav-links a{font-size:19px;line-height:22px}.intructions .grid__list.grid__list--method-1{-webkit-box-flex:0;-ms-flex:0 1 28%;flex:0 1 28%}.intructions .grid__list--method-1 .grid__item{padding:15px 10px;min-height:97px}html[lang="el"] .intructions .grid__list--method-1 .grid__item,html[lang="hu"] .intructions .grid__list--method-1 .grid__item,html[lang="ms"] .intructions .grid__list--method-1 .grid__item{padding:15px 10px;min-height:110px}html[lang="ru"] .intructions .grid__list--method-1 .grid__item{padding:15px 10px;min-height:127px}.intructions .grid__list.grid__list--method-1 p{font-size:15px;line-height:18px}.intructions .grid__list.grid__list--method-2{-webkit-box-flex:0;-ms-flex:0 1 39%;flex:0 1 39%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.intructions .grid__list.grid__list--method-2 .version-txt{font-size:20px;line-height:23px}.intructions .grid__list.grid__list--method-2:nth-of-type(2){-webkit-box-flex:0;-ms-flex:0 1 21%;flex:0 1 21%}.intructions .grid__list--method-2 .apk-img{position:relative;top:75px}.intructions .grid__list--step .step__number{width:48px;height:46px}.intructions .grid__list--method-2 .apk-img{top:-45px}.intructions .apk-img:before{height:124px;top:-137px}html[lang="fr"] .intructions .apk-img:before{height:124px;top:-137px}html[lang="ru"] .intructions .apk-img:before,html[lang="ms"] .intructions .apk-img:before{height:138px;top:-150px}html[lang="bn"] .intructions .apk-img:before,html[lang="id"] .intructions .apk-img:before,html[lang="pl"] .intructions .apk-img:before{height:144px;top:-153px}html[lang="hu"] .intructions .apk-img:before{height:145px;top:-154px}html[lang="el"] .intructions .apk-img:before{height:157px;top:-165px}.intructions .apk-img:after{height:147px;bottom:-160px}html[lang="fr"] .intructions .apk-img:after{height:147px;bottom:-160px}html[lang="ru"] .intructions .apk-img:after,html[lang="ms"] .intructions .apk-img:after,html[lang="bn"] .intructions .apk-img:after,html[lang="id"] .intructions .apk-img:after,html[lang="pl"] .intructions .apk-img:after{height:158px;bottom:-172px}html[lang="hu"] .intructions .apk-img:after{height:163px;bottom:-174px}html[lang="el"] .intructions .apk-img:after{height:177px;bottom:-185px}.intructions .grid__list--method-2 .dec-line{bottom:10px}.support__title{font-size:32px;line-height:37px}.brd-box{max-width:810px;padding:36px 41px}.brd-box__icon{font-size:56px;margin-right:33px}html[lang="ar"] .support .brd-box__icon,html[lang="ur"] .support .brd-box__icon{margin-right:0;margin-left:33px}.brd-box__txt{font-size:19px;line-height:25px}}@media(min-width:1200px){.hero{padding:152px 0 134px;text-align:left}.hero .mobile-image{top:-85px;width:584px}html[lang="es"] .hero .mobile-image,html[lang="fr"] .hero .mobile-image,html[lang="hu"] .hero .mobile-image,html[lang="ph"] .hero .mobile-image,html[lang="pt"] .hero .mobile-image,html[lang="sv"] .hero .mobile-image,html[lang="th"] .hero .mobile-image,html[lang="tw"] .hero .mobile-image,html[lang="vn"] .hero .mobile-image{top:-50px}html[lang="ar"] .hero h3.secondary-title,html[lang="ur"] .hero h3.secondary-title,html[lang="ru"] .hero h3.secondary-title,html[lang="ms"] .hero h3.secondary-title,html[lang="zh_CN"] .hero h3.secondary-title,html[lang="cs"] .hero h3.secondary-title,html[lang="de"] .hero h3.secondary-title,html[lang="fr"] .hero h3.secondary-title,html[lang="hu"] .hero h3.secondary-title,html[lang="id"] .hero h3.secondary-title,html[lang="it"] .hero h3.secondary-title,html[lang="ph"] .hero h3.secondary-title,html[lang="tw"] .hero h3.secondary-title,html[lang="vn"] .hero h3.secondary-title{font-size:38px;line-height:43px}html[lang="el"] .hero h3.secondary-title{font-size:35px;line-height:45px}.hero h3.secondary-title strong{font-size:53px;line-height:62px}html[lang="el"] .hero h3.secondary-title strong{font-size:46px;line-height:49px}html[lang="ms"] .hero h3.secondary-title strong,html[lang="cs"] .hero h3.secondary-title strong,html[lang="id"] .hero h3.secondary-title strong{font-size:40px;line-height:55px}html[lang="nl"] .hero h3.secondary-title strong,html[lang="sv"] .hero h3.secondary-title strong{font-size:53px;line-height:62px}html[lang="ar"] .hero h3.secondary-title strong,html[lang="ur"] .hero h3.secondary-title strong,html[lang="ru"] .hero h3.secondary-title strong,html[lang="zh_CN"] .hero h3.secondary-title strong,html[lang="es"] .hero h3.secondary-title strong,html[lang="hu"] .hero h3.secondary-title strong,html[lang="it"] .hero h3.secondary-title strong,html[lang="vn"] .hero h3.secondary-title strong{font-size:44px;line-height:56px}html[lang="fr"] .hero h3.secondary-title strong,html[lang="ph"] .hero h3.secondary-title strong{font-size:48px;line-height:56px}html[lang="de"] .hero h3.secondary-title strong,html[lang="tw"] .hero h3.secondary-title strong{font-size:50px;line-height:60px}.hero .app-btn{max-width:386px;padding:21px 23px}html[lang="tw"] .hero .app-btn{max-width:335px}html[lang="zh_CN"] .hero .app-btn{max-width:370px}html[lang="vn"] .hero .app-btn{max-width:395px}html[lang="ar"] .hero .app-btn,html[lang="ur"] .hero .app-btn,html[lang="de"] .hero .app-btn,html[lang="el"] .hero .app-btn,html[lang="fr"] .hero .app-btn,html[lang="hu"] .hero .app-btn,html[lang="sv"] .hero .app-btn,html[lang="pt"] .hero .app-btn{max-width:400px}html[lang="bn"] .hero .app-btn{max-width:372px}html[lang="ms"] .hero .app-btn,html[lang="cs"] .hero .app-btn,html[lang="es"] .hero .app-btn,html[lang="id"] .hero .app-btn,html[lang="it"] .hero .app-btn,html[lang="th"] .hero .app-btn{max-width:405px}html[lang="ru"] .hero .app-btn,html[lang="nl"] .hero .app-btn,html[lang="ph"] .hero .app-btn{max-width:430px}html[lang="pl"] .hero .app-btn{max-width:437px}.hero .app-btn__img img{margin-right:20px;width:140px}html[lang="ar"] .hero .app-btn__img img,html[lang="ur"] .hero .app-btn__img img{margin-right:0;margin-left:30px}.hero .app-btn__txt{font-size:17px;line-height:22px}html[lang="hu"] .hero .app-btn__txt{font-size:17px}.hero .app-btn__txt span{font-size:22px}html[lang="ms"] .hero .app-btn__txt span,html[lang="ph"] .hero .app-btn__txt span{font-size:25px}html[lang="pl"] .hero .app-btn__txt span{font-size:22px}.intructions .grid__method-1 .grid__list--separator{-webkit-box-flex:0;-ms-flex:0 1 20px;flex:0 1 20px}.intructions .grid__list.grid__list--method-1 p{font-size:16px;line-height:19px}html[lang="el"] .intructions .grid__list.grid__list--method-1 p{font-size:15px;line-height:18px}.intructions .grid__list.grid__list--method-1{-webkit-box-flex:0;-ms-flex:0 1 24%;flex:0 1 24%}.intructions .grid__list.grid__list--method-2{-webkit-box-flex:0;-ms-flex:0 1 33%;flex:0 1 33%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.intructions .grid__list.grid__list--method-2:nth-of-type(2){-webkit-box-flex:0;-ms-flex:0 1 222px;flex:0 1 222px}.intructions .grid__list.grid__list--method-2{padding-left:70px}.intructions .grid__list.grid__list--method-2:last-child{padding-left:40px;padding-right:60px}html[lang="ar"] .intructions .grid__list.grid__list--method-2:last-child,html[lang="ur"] .intructions .grid__list.grid__list--method-2:last-child{padding-left:60px;padding-right:40px}html[lang="ru"] .intructions .grid__list.grid__list--method-2:first-child,html[lang="ru"] .intructions .grid__list.grid__list--method-2:last-child{padding-left:15px}html[lang="ar"] .intructions .grid__list.grid__list--method-2,html[lang="ur"] .intructions .grid__list.grid__list--method-2{padding-left:0;padding-right:50px}html[lang="ar"] .intructions .grid__list.grid__list--method-2:nth-of-type(2),html[lang="ur"] .intructions .grid__list.grid__list--method-2:nth-of-type(2){padding:0}.grid__list--step .step__number{margin-right:24px}.intructions .grid__list--method-2 .apk-img{top:-45px}.intructions .apk-img:before{height:114px;top:-125px}html[lang="fr"] .intructions .apk-img:before{height:114px;top:-125px}html[lang="ru"] .intructions .apk-img:before,html[lang="ms"] .intructions .apk-img:before{height:129px;top:-140px}html[lang="bn"] .intructions .apk-img:before,html[lang="id"] .intructions .apk-img:before,html[lang="pl"] .intructions .apk-img:before{height:130px;top:-140px}html[lang="hu"] .intructions .apk-img:before{height:143px;top:-152px}html[lang="el"] .intructions .apk-img:before{height:148px;top:-160px}.intructions .apk-img:after{height:137px;bottom:-149px}html[lang="fr"] .intructions .apk-img:after{height:131px;bottom:-144px}html[lang="ru"] .intructions .apk-img:after,html[lang="ms"] .intructions .apk-img:after{height:148px;bottom:-160px}html[lang="bn"] .intructions .apk-img:after,html[lang="id"] .intructions .apk-img:after,html[lang="pl"] .intructions .apk-img:after{height:147px;bottom:-160px}html[lang="hu"] .intructions .apk-img:after{height:160px;bottom:-170px}html[lang="el"] .intructions .apk-img:after{height:175px;bottom:-183px}.intructions .grid__list--method-2 .dec-line{bottom:10px}}</style>
		<!-- All in One SEO 4.5.6 - aioseo.com -->
		<title>Aplikasi Seluler XM Terbaru — Trading di Pasar Global</title>
		<meta name="description" content="Buat, kelola dan danai akun Anda dimana saja dan dapatkan akses ke berbagai pasar internasional. Rencanakan trading Anda selanjutnya menggunakan analisis ahli dan peralatan canggih." />
		<meta name="robots" content="max-image-preview:large" />
		<link rel="canonical" href="https://www.xmindonesiatrade.com/id/xm-app" />
		<meta name="generator" content="All in One SEO (AIOSEO) 4.5.6" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:site_name" content="XM ID – Trading dengan Broker Dunia tepercaya" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Aplikasi Seluler XM Terbaru — Trading di Pasar Global" />
		<meta property="og:description" content="Buat, kelola dan danai akun Anda dimana saja dan dapatkan akses ke berbagai pasar internasional. Rencanakan trading Anda selanjutnya menggunakan analisis ahli dan peralatan canggih." />
		<meta property="og:url" content="https://www.xmindonesiatrade.com/id/xm-app" />
		<meta property="article:published_time" content="2021-06-17T09:28:11+00:00" />
		<meta property="article:modified_time" content="2021-08-31T09:32:51+00:00" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:title" content="Aplikasi Seluler XM Terbaru — Trading di Pasar Global" />
		<meta name="twitter:description" content="Buat, kelola dan danai akun Anda dimana saja dan dapatkan akses ke berbagai pasar internasional. Rencanakan trading Anda selanjutnya menggunakan analisis ahli dan peralatan canggih." />
		<meta name="google" content="nositelinkssearchbox" />
		<script type="application/ld+json" class="aioseo-schema">
			{"@context":"https:\/\/schema.org","@graph":[{"@type":"BreadcrumbList","@id":"https:\/\/www.xmindonesiatrade.com\/id\/xm-app#breadcrumblist","itemListElement":[{"@type":"ListItem","@id":"https:\/\/www.xmindonesiatrade.com\/id\/#listItem","position":1,"name":"Home","item":"https:\/\/www.xmindonesiatrade.com\/id\/","nextItem":"https:\/\/www.xmindonesiatrade.com\/id\/xm-app#listItem"},{"@type":"ListItem","@id":"https:\/\/www.xmindonesiatrade.com\/id\/xm-app#listItem","position":2,"name":"XM App","previousItem":"https:\/\/www.xmindonesiatrade.com\/id\/#listItem"}]},{"@type":"Organization","@id":"https:\/\/www.xmindonesiatrade.com\/id\/#organization","name":"XM ID","url":"https:\/\/www.xmindonesiatrade.com\/id\/"},{"@type":"WebPage","@id":"https:\/\/www.xmindonesiatrade.com\/id\/xm-app#webpage","url":"https:\/\/www.xmindonesiatrade.com\/id\/xm-app","name":"Aplikasi Seluler XM Terbaru \u2014 Trading di Pasar Global","description":"Buat, kelola dan danai akun Anda dimana saja dan dapatkan akses ke berbagai pasar internasional. Rencanakan trading Anda selanjutnya menggunakan analisis ahli dan peralatan canggih.","inLanguage":"en-US","isPartOf":{"@id":"https:\/\/www.xmindonesiatrade.com\/id\/#website"},"breadcrumb":{"@id":"https:\/\/www.xmindonesiatrade.com\/id\/xm-app#breadcrumblist"},"datePublished":"2021-06-17T09:28:11+00:00","dateModified":"2021-08-31T09:32:51+00:00"},{"@type":"WebSite","@id":"https:\/\/www.xmindonesiatrade.com\/id\/#website","url":"https:\/\/www.xmindonesiatrade.com\/id\/","name":"XM ID","description":"Trading dengan Broker Dunia tepercaya","inLanguage":"en-US","publisher":{"@id":"https:\/\/www.xmindonesiatrade.com\/id\/#organization"}}]}
		</script>
		<!-- All in One SEO -->

<link rel="https://api.w.org/" href="https://www.xmindonesiatrade.com/id/wp-json/" /><link rel="alternate" type="application/json" href="https://www.xmindonesiatrade.com/id/wp-json/wp/v2/pages/94030" />
<link rel='shortlink' href='https://www.xmindonesiatrade.com/id/?p=94030' />
<link rel="alternate" type="application/json+oembed" href="https://www.xmindonesiatrade.com/id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.xmindonesiatrade.com%2Fid%2Fxm-app" />
<link rel="alternate" type="text/xml+oembed" href="https://www.xmindonesiatrade.com/id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.xmindonesiatrade.com%2Fid%2Fxm-app&#038;format=xml" />

    
    <script>
        var appConfig = {
            xmSecureHost: 'https://www.xmindonesiatrade.com',
            maSecureHost: 'https://my.xmindonesiatrade.com',
            homeLinkSuffix: 'id',
            langCode: 'id',
            country: 'ID',
            gatewayBaseUrl: 'https://apigw.tp-serv.com/',
            sessionExpirationTime: '2024-04-12T12:27:46+00:00',
            cssIcons: '{"xmFont":{"Spread-plus-1":"xmFont fa-kit fa-xm-spread-plus-1","Spread3":"xmFont fa-kit fa-xm-spread3","Spread-plus-3":"xmFont fa-kit fa-xm-spread-plus-3","Spread5":"xmFont fa-kit fa-xm-spread5","News":"xmFont fa-kit fa-xm-news","Zoom-news":"xmFont fa-kit fa-xm-zoom-news","Support-on":"xmFont fa-kit fa-xm-support-on","Support-off":"xmFont fa-kit fa-xm-support-off","Leverage-50":"xmFont fa-kit fa-xm-leverage-50","Envelope-remove":"xmFont fa-kit fa-xm-envelope-remove","Display-off":"xmFont fa-kit fa-xm-display-off","Playlist-solid":"xmFont fa-kit fa-xm-playlist-solid","Playlist-outline":"xmFont fa-kit fa-xm-playlist-outline","Live-video":"xmFont fa-kit fa-xm-live-video","Leverage-30":"xmFont fa-kit fa-xm-leverage-30","Percent":"xmFont fa-kit fa-xm-percent","Islam":"xmFont fa-kit fa-xm-islam","Depositor":"xmFont fa-kit fa-xm-depositor","Abacus":"xmFont fa-kit fa-xm-abacus","Acrobat":"xmFont fa-kit fa-xm-acrobat","Add-user":"xmFont fa-kit fa-xm-add-user","Add-users":"xmFont fa-kit fa-xm-add-users","Android":"xmFont fa-kit fa-xm-android","AndroidLogo-phone":"xmFont fa-kit fa-xm-androidlogo-phone","AndroidLogo-tablet":"xmFont fa-kit fa-xm-androidlogo-tablet","Android-phone":"xmFont fa-kit fa-xm-android-phone","Android-tablet":"xmFont fa-kit fa-xm-android-tablet","Apple":"xmFont fa-kit fa-xm-apple","Apple-ipad":"xmFont fa-kit fa-xm-apple-ipad","Apple-iphone":"xmFont fa-kit fa-xm-apple-iphone","Arrow-circle":"xmFont fa-kit fa-xm-arrow-circle","Arrows":"xmFont fa-kit fa-xm-arrows","Award":"xmFont fa-kit fa-xm-award","Bank":"xmFont fa-kit fa-xm-bank","Bar-chart":"xmFont fa-kit fa-xm-bar-chart","Birthday":"xmFont fa-kit fa-xm-birthday","Bitcoin":"xmFont fa-kit fa-xm-bitcoin","Bitcoin-wallet":"xmFont fa-kit fa-xm-bitcoin-wallet","Briefcase":"xmFont fa-kit fa-xm-briefcase","Building":"xmFont fa-kit fa-xm-building","Bull":"xmFont fa-kit fa-xm-bull","Bull-solid":"xmFont fa-kit fa-xm-bull-solid","Calculator":"xmFont fa-kit fa-xm-calculator","Calendar":"xmFont fa-kit fa-xm-calendar","Calendar-check":"xmFont fa-kit fa-xm-calendar-check","Camera":"xmFont fa-kit fa-xm-camera","Candlestick":"xmFont fa-kit fa-xm-candlestick","Certificate":"xmFont fa-kit fa-xm-certificate","Certified":"xmFont fa-kit fa-xm-certified","Chart":"xmFont fa-kit fa-xm-chart","Chart-24h":"xmFont fa-kit fa-xm-chart-24h","Chart-50":"xmFont fa-kit fa-xm-chart-50","Chart-55":"xmFont fa-kit fa-xm-chart-55","Chart-100":"xmFont fa-kit fa-xm-chart-100","Chart-300":"xmFont fa-kit fa-xm-chart-300","Chart-bars2":"xmFont fa-kit fa-xm-chart-bars2","Chart-bars-arrow":"xmFont fa-kit fa-xm-chart-bars-arrow","Chart-candlestick":"xmFont fa-kit fa-xm-chart-candlestick","Chart-high":"xmFont fa-kit fa-xm-chart-high","Chart-line":"xmFont fa-kit fa-xm-chart-line","Chart-line-low":"xmFont fa-kit fa-xm-chart-line-low","Chart-pie":"xmFont fa-kit fa-xm-chart-pie","Chart-search":"xmFont fa-kit fa-xm-chart-search","Chat":"xmFont fa-kit fa-xm-chat","Check-circle":"xmFont fa-kit fa-xm-check-circle","Checklist":"xmFont fa-kit fa-xm-checklist","Checklist-clock":"xmFont fa-kit fa-xm-checklist-clock","Check-round":"xmFont fa-kit fa-xm-check-round","Check-shield":"xmFont fa-kit fa-xm-check-shield","Cheers":"xmFont fa-kit fa-xm-cheers","Click":"xmFont fa-kit fa-xm-click","Clock":"xmFont fa-kit fa-xm-clock","Cloud":"xmFont fa-kit fa-xm-cloud","Cloud-download":"xmFont fa-kit fa-xm-cloud-download","Cloud-upload":"xmFont fa-kit fa-xm-cloud-upload","Coffee":"xmFont fa-kit fa-xm-coffee","Coins":"xmFont fa-kit fa-xm-coins","Corded-phone":"xmFont fa-kit fa-xm-corded-phone","Creditcard":"xmFont fa-kit fa-xm-creditcard","Database-dollar":"xmFont fa-kit fa-xm-database-dollar","Director":"xmFont fa-kit fa-xm-director","Display":"xmFont fa-kit fa-xm-display","Displays":"xmFont fa-kit fa-xm-displays","Document":"xmFont fa-kit fa-xm-document","Document-check":"xmFont fa-kit fa-xm-document-check","Documents":"xmFont fa-kit fa-xm-documents","Document-zoom":"xmFont fa-kit fa-xm-document-zoom","Dollar-bag":"xmFont fa-kit fa-xm-dollar-bag","Dollar-circle":"xmFont fa-kit fa-xm-dollar-circle","Dollar-drop":"xmFont fa-kit fa-xm-dollar-drop","Dollar-round":"xmFont fa-kit fa-xm-dollar-round","Dollar-settings":"xmFont fa-kit fa-xm-dollar-settings","Download":"xmFont fa-kit fa-xm-download","Drop":"xmFont fa-kit fa-xm-drop","Earth":"xmFont fa-kit fa-xm-earth","Envelope":"xmFont fa-kit fa-xm-envelope","Facebook":"xmFont fa-kit fa-xm-facebook","Fifty-plus":"xmFont fa-kit fa-xm-fifty-plus","Gears":"xmFont fa-kit fa-xm-gears","Gift":"xmFont fa-kit fa-xm-gift","Globe":"xmFont fa-kit fa-xm-globe","Gold":"xmFont fa-kit fa-xm-gold","Google-plus":"xmFont fa-kit fa-xm-google-plus","Hand-coins":"xmFont fa-kit fa-xm-hand-coins","Happy":"xmFont fa-kit fa-xm-happy","High-bars":"xmFont fa-kit fa-xm-high-bars","History":"xmFont fa-kit fa-xm-history","Imac":"xmFont fa-kit fa-xm-imac","Imac-apple":"xmFont fa-kit fa-xm-imac-apple","Infinity":"xmFont fa-kit fa-xm-infinity","Instagram":"xmFont fa-kit fa-xm-instagram","Install-pc":"xmFont fa-kit fa-xm-install-pc","Install-phone":"xmFont fa-kit fa-xm-install-phone","Install-tablet":"xmFont fa-kit fa-xm-install-tablet","Ipad":"xmFont fa-kit fa-xm-ipad","Iphone":"xmFont fa-kit fa-xm-iphone","Key":"xmFont fa-kit fa-xm-key","Laptop":"xmFont fa-kit fa-xm-laptop","Letter":"xmFont fa-kit fa-xm-letter","Leverage-100":"xmFont fa-kit fa-xm-leverage-100","Leverage-500":"xmFont fa-kit fa-xm-leverage-500","Leverage-888":"xmFont fa-kit fa-xm-leverage-888","Lifevest":"xmFont fa-kit fa-xm-lifevest","Like":"xmFont fa-kit fa-xm-like","Like-bubble":"xmFont fa-kit fa-xm-like-bubble","Link":"xmFont fa-kit fa-xm-link","Linked-in":"xmFont fa-kit fa-xm-linked-in","Linux":"xmFont fa-kit fa-xm-linux","Location":"xmFont fa-kit fa-xm-location","Location-map":"xmFont fa-kit fa-xm-location-map","Lock":"xmFont fa-kit fa-xm-lock","Lock-check":"xmFont fa-kit fa-xm-lock-check","Lock-open":"xmFont fa-kit fa-xm-lock-open","Low-price":"xmFont fa-kit fa-xm-low-price","Metatrader":"xmFont fa-kit fa-xm-metatrader","Mic":"xmFont fa-kit fa-xm-mic","Mobile-chart":"xmFont fa-kit fa-xm-mobile-chart","Mt4":"xmFont fa-kit fa-xm-mt4","Mt5":"xmFont fa-kit fa-xm-mt5","Multiple-prices":"xmFont fa-kit fa-xm-multiple-prices","Multiterminal":"xmFont fa-kit fa-xm-multiterminal","Music":"xmFont fa-kit fa-xm-music","No-credit-card":"xmFont fa-kit fa-xm-no-credit-card","No-dollar":"xmFont fa-kit fa-xm-no-dollar","No-image":"xmFont fa-kit fa-xm-no-image","Olympic":"xmFont fa-kit fa-xm-olympic","On-off":"xmFont fa-kit fa-xm-on-off","Paperclip":"xmFont fa-kit fa-xm-paperclip","Paper-history":"xmFont fa-kit fa-xm-paper-history","Paper-pen":"xmFont fa-kit fa-xm-paper-pen","Pc":"xmFont fa-kit fa-xm-pc","Pc-window":"xmFont fa-kit fa-xm-pc-window","Pdf-large":"xmFont fa-kit fa-xm-pdf-large","Pdf-small":"xmFont fa-kit fa-xm-pdf-small","Pdf-thin":"xmFont fa-kit fa-xm-pdf-thin","Pencil-form":"xmFont fa-kit fa-xm-pencil-form","Pencil-lock":"xmFont fa-kit fa-xm-pencil-lock","Pie-chart":"xmFont fa-kit fa-xm-pie-chart","Piggy-bank":"xmFont fa-kit fa-xm-piggy-bank","Play-outline":"xmFont fa-kit fa-xm-play-outline","Play-solid":"xmFont fa-kit fa-xm-play-solid","Post":"xmFont fa-kit fa-xm-post","Producer":"xmFont fa-kit fa-xm-producer","Promotions":"xmFont fa-kit fa-xm-promotions","Puzzle":"xmFont fa-kit fa-xm-puzzle","Qq":"xmFont fa-kit fa-xm-qq","Qq-line":"xmFont fa-kit fa-xm-qq-line","Qq-solid":"xmFont fa-kit fa-xm-qq-solid","Question":"xmFont fa-kit fa-xm-question","Quote":"xmFont fa-kit fa-xm-quote","Refresh-dollar":"xmFont fa-kit fa-xm-refresh-dollar","Responsive":"xmFont fa-kit fa-xm-responsive","Safe":"xmFont fa-kit fa-xm-safe","Scale":"xmFont fa-kit fa-xm-scale","Seminar":"xmFont fa-kit fa-xm-seminar","Shapes":"xmFont fa-kit fa-xm-shapes","Share":"xmFont fa-kit fa-xm-share","Shield-dollar":"xmFont fa-kit fa-xm-shield-dollar","Signal":"xmFont fa-kit fa-xm-signal","Signals":"xmFont fa-kit fa-xm-signals","Speed":"xmFont fa-kit fa-xm-speed","Spread25":"xmFont fa-kit fa-xm-spread25","Sprinter":"xmFont fa-kit fa-xm-sprinter","Stamp":"xmFont fa-kit fa-xm-stamp","Star":"xmFont fa-kit fa-xm-star","Stop-sign":"xmFont fa-kit fa-xm-stop-sign","Stopwatch":"xmFont fa-kit fa-xm-stopwatch","Strategy":"xmFont fa-kit fa-xm-strategy","Support":"xmFont fa-kit fa-xm-support","Support24-5":"xmFont fa-kit fa-xm-support24-5","Thunder":"xmFont fa-kit fa-xm-thunder","Time":"xmFont fa-kit fa-xm-time","Tools":"xmFont fa-kit fa-xm-tools","Trader":"xmFont fa-kit fa-xm-trader","Trash":"xmFont fa-kit fa-xm-trash","Twitter":"xmFont fa-kit fa-xm-twitter","Uninstall-pc":"xmFont fa-kit fa-xm-uninstall-pc","Upload-document":"xmFont fa-kit fa-xm-upload-document","Up-percent":"xmFont fa-kit fa-xm-up-percent","User":"xmFont fa-kit fa-xm-user","User-care":"xmFont fa-kit fa-xm-user-care","User-check":"xmFont fa-kit fa-xm-user-check","User-height":"xmFont fa-kit fa-xm-user-height","User-id":"xmFont fa-kit fa-xm-user-id","User-profile":"xmFont fa-kit fa-xm-user-profile","Users":"xmFont fa-kit fa-xm-users","User-upgrade":"xmFont fa-kit fa-xm-user-upgrade","Video-camera":"xmFont fa-kit fa-xm-video-camera","Video-chart":"xmFont fa-kit fa-xm-video-chart","Video-player":"xmFont fa-kit fa-xm-video-player","Wallet":"xmFont fa-kit fa-xm-wallet","Water-bill":"xmFont fa-kit fa-xm-water-bill","Web-development":"xmFont fa-kit fa-xm-web-development","Webinar":"xmFont fa-kit fa-xm-webinar","Website":"xmFont fa-kit fa-xm-website","Webtrader":"xmFont fa-kit fa-xm-webtrader","Wheat":"xmFont fa-kit fa-xm-wheat","Withdraw":"xmFont fa-kit fa-xm-withdraw","Withdraw-dollar":"xmFont fa-kit fa-xm-withdraw-dollar","World":"xmFont fa-kit fa-xm-world","Youku-outline":"xmFont fa-kit fa-xm-youku-outline","Youku-solid":"xmFont fa-kit fa-xm-youku-solid","Youtube-play":"xmFont fa-kit fa-xm-youtube-play","Zero-comma":"xmFont fa-kit fa-xm-zero-comma","Zero-dot":"xmFont fa-kit fa-xm-zero-dot","Zero-fees":"xmFont fa-kit fa-xm-zero-fees","Zero-one":"xmFont fa-kit fa-xm-zero-one","Zoom":"xmFont fa-kit fa-xm-zoom","Zoom-gear":"xmFont fa-kit fa-xm-zoom-gear","Zoom-in":"xmFont fa-kit fa-xm-zoom-in","Zoom-out":"xmFont fa-kit fa-xm-zoom-out","Excel":"xmFont fa-kit fa-xm-excel","Word":"xmFont fa-kit fa-xm-word","Transaction-history":"xmFont fa-kit fa-xm-transaction-history","Speaker":"xmFont fa-kit fa-xm-speaker","Document-search":"xmFont fa-kit fa-xm-document-search","Usd-25":"xmFont fa-kit fa-xm-usd-25","Usd-20":"xmFont fa-kit fa-xm-usd-20","Usd-15":"xmFont fa-kit fa-xm-usd-15","Usd-10":"xmFont fa-kit fa-xm-usd-10","25-Usd":"xmFont fa-kit fa-xm-25-usd","Percent-100":"xmFont fa-kit fa-xm-percent-100","Percent-10":"xmFont fa-kit fa-xm-percent-10","Mobile-devices":"xmFont fa-kit fa-xm-mobile-devices","Graduation":"xmFont fa-kit fa-xm-graduation","Email-new":"xmFont fa-kit fa-xm-email-new","Details":"xmFont fa-kit fa-xm-details","Notifications":"xmFont fa-kit fa-xm-notifications","Handshake":"xmFont fa-kit fa-xm-handshake","Wechat":"xmFont fa-kit fa-xm-wechat","User-circle":"xmFont fa-kit fa-xm-user-circle","XM-app":"xmFont fa-kit fa-xm-app","Download-circle":"xmFont fa-kit fa-xm-download-circle","Logo-no-bull":"xmFont fa-kit fa-xm-logo-no-bull","Document-time":"xmFont fa-kit fa-xm-document-time","Language":"xmFont fa-kit fa-xm-language","Circle-arrow":"xmFont fa-kit fa-xm-circle-arrow","Chart-dollar":"xmFont fa-kit fa-xm-chart-dollar","Search-no-result":"xmFont fa-kit fa-xm-search-no-result","Hand-gift":"xmFont fa-kit fa-xm-hand-gift","Non-withdraw-dollar":"xmFont fa-kit fa-xm-non-withdraw-dollar","Withdraw-dollar-check":"xmFont fa-kit fa-xm-withdraw-dollar-check","Hand_dollar_borders":"xmFont fa-kit fa-xm-hand-dollar-borders","Leverage-250":"xmFont fa-kit fa-xm-leverage-250","Bitcoin-circle":"xmFont fa-kit fa-xm-bitcoin-circle","Support24-7":"xmFont fa-kit fa-xm-support24-7","Leverage-1000":"xmFont fa-kit fa-xm-leverage-1000","Logo-xmtd":"xmFont fa-kit fa-xm-logo-xmtd","XMTD-app":"xmFont fa-kit fa-xm-xmtd-app","Leverage-1-1000":"xmFont fa-kit fa-xm-leverage-1-1000","Leverage-1-500":"xmFont fa-kit fa-xm-leverage-1-500","Leverage-1-250":"xmFont fa-kit fa-xm-leverage-1-250","xmWarning":"xmFont fa-kit fa-xm-warning","Wallet-plus":"xmFont fa-kit fa-xm-wallet-plus","Leverage-1-200":"xmFont fa-kit fa-xm-leverage-1-200","Turbo-stocks":"xmFont fa-kit fa-xm-turbo-stocks","Leverage-1-20":"xmFont fa-kit fa-xm-leverage-1-20","Chart-high2":"xmFont fa-kit fa-xm-chart-high2","Winner":"xmFont fa-kit fa-xm-winner","Traders":"xmFont fa-kit fa-xm-traders","Skills":"xmFont fa-kit fa-xm-skills","Strategy-1":"xmFont fa-kit fa-xm-strategy-1","Reputation":"xmFont fa-kit fa-xm-reputation","Stars-Bars":"xmFont fa-kit fa-xm-stars-bars","Dollar-Bag-1":"xmFont fa-kit fa-xm-dollar-bag-1","XM-Gift-2":"xmFont fa-kit fa-xm-gift2","Winner-star":"xmFont fa-kit fa-xm-winner-star","Copy-trading":"xmFont fa-kit fa-xm-copytrading","Register":"xmFont fa-kit fa-xm-register","Deposit":"xmFont fa-kit fa-xm-deposit","Tick":"xmFont fa-kit fa-xm-tick","Ultra-low":"xmFont fa-kit fa-xm-ultra-low","Copy-trading-candle":"xmFont fa-kit fa-xm-copytrading-candle","Hand-candle":"xmFont fa-kit fa-xm-hand-candle","Chart-shield":"xmFont fa-kit fa-xm-chart-shield","User-shield":"xmFont fa-kit fa-xm-user-shield","Check-stopwatch":"xmFont fa-kit fa-xm-check-stopwatch","Copy-strategies":"xmFont fa-kit fa-xm-copy-strategies","Community":"xmFont fa-kit fa-xm-community","Hand-arrows":"xmFont fa-kit fa-xm-hand-arrows","Leverage-3000":"xmFont fa-kit fa-xm-leverage-3000","Business":"xmFont fa-kit fa-xm-business","Person":"xmFont fa-kit fa-xm-person","Leverage-20-1":"xmFont fa-kit fa-xm-leverage-20-1","Exclusive-location":"xmFont fa-kit fa-xm-exclusive-location","Competitions-trophy":"xmFont fa-kit fa-xm-competitions-trophy","Leverage-200":"xmFont fa-kit fa-xm-leverage-200","Kakao":"xmFont fa-kit fa-xm-kakao","Naver":"xmFont fa-kit fa-xm-naver","Briefcase-expanded":"xmFont fa-kit fa-xm-briefcase-expanded","Touch":"xmFont fa-kit fa-xm-touch"}}',
            disclaimerRiskDocLink: 'https://cloud.xm-cdn.com/static/pdf/System-PDFs/XMGlobal-Risk-Disclosures-for-Financial-Instruments.pdf?v=6294d0191b6f1461fc70859d40df1a71',
            termsAndConditionsDocLink: 'https://cloud.xm-cdn.com/static/pdf/System-PDFs/XMGlobal-Client-Agreement-Terms-and-Conditions-of-Business.pdf?v=22647d4005144658126c7c14d0cc76f3',
            conflictsOfInterestDocLink: 'https://cloud.xm-cdn.com/static/pdf/System-PDFs/XMGlobal-Conflicts-of-Interest-Policy.pdf?v=09065e410b2c03a866d4827b02eabfdc',
            openRealUrl: 'https://www.xmindonesiatrade.com/goto/profile/id',
            publicPath: 'https://assets.xm-cdn.com/research-portal/',
            cdnHost: 'https://assets.xm-cdn.com',
            environment: 'production', // possible values: staging, development, production
            brandId: 'xmbz',
        };
    </script>
<script src="https://kit.fontawesome.com/0677960cd8.js" crossorigin="anonymous"></script>
    <script>
        (function() {
            'use strict';

            function sample(rate, daysValid) {
                var cookieName = '_fs_usr';
                try {
                    if (document.cookie.indexOf(cookieName + '=true') > -1 || document.cookie.indexOf(cookieName + '=false') > -1) {
                        return document.cookie.indexOf(cookieName + '=true') > -1;
                    } else {
                        var shouldSample = Math.random() < rate / 100;
                        var days = daysValid !== undefined && daysValid > 0 ? daysValid : 30;
                        var date = new Date();
                        date.setTime(date.getTime() + days * 60 * 1000);
                        document.cookie = cookieName + '=' + shouldSample + '; expires=' + date.toGMTString() + '; path=/';
                        return shouldSample;
                    }
                } catch (err) {
                    console.error('FullStory unavailable, unable to sample user');
                    return false;
                }
            }

            var fullstory_config = {
                rate: 15,
                daysValid: 1440,
                environment: "production",
                brand_id: "xmbz",
                country: "ID",
            }

            if (sample(fullstory_config.rate, fullstory_config.daysValid)) {
                if (fullstory_config.environment == 'development') {
                    console.log('FullStory is loaded | Brand ID is ' + fullstory_config.brand_id + ' Country is ' + fullstory_config.country + ' and fs_org_value is ' + '19B2HB');
                    window['_fs_ready'] = function() {
                        // This URL will take you to the current time within the session replay
                        var sessionUrlAtTime = FS.getCurrentSessionURL(true);
                    };
                }
                //FullStory Snippet!
                window['_fs_debug']=false;window['_fs_host']='fullstory.com';window['_fs_script']='edge.fullstory.com/s/fs.js';window['_fs_org']='19B2HB';window['_fs_namespace']='FS';(function(m,n,e,t,l,o,g,y){if(e in m){if(m.console&&m.console.log){m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].')}return}g=m[e]=function(a,b,s){g.q?g.q.push([a,b,s]):g._api(a,b,s)};g.q=[];o=n.createElement(t);o.async=1;o.crossOrigin='anonymous';o.src='https://'+_fs_script;y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);g.identify=function(i,v,s){g(l,{uid:i},s);if(v){g(l,v,s)}};g.setUserVars=function(v,s){g(l,v,s)};g.event=function(i,v,s){g('event',{n:i,p:v},s)};g.anonymize=function(){g.identify(!!0)};g.shutdown=function(){g("rec",!1)};g.restart=function(){g("rec",!0)};g.log=function(a,b){g("log",[a,b])};g.consent=function(a){g("consent",!arguments.length||a)};g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};g.clearUserCookie=function(){};g.setVars=function(n,p){g('setVars',[n,p])};g._w={};y='XMLHttpRequest';g._w[y]=m[y];y='fetch';g._w[y]=m[y];if(m[y]){m[y]=function(){return g._w[y].apply(this,arguments)}}g._v="1.3.0"})(window,document,window['_fs_namespace'],'script','user');
            } else {
                if (fullstory_config.environment == 'development') {
                    console.log('This user is not included in the segmentation rules of FullStory | Brand ID is ' + fullstory_config.brand_id + ' Country is ' + fullstory_config.country + ' and fs_org_value is ' + '19B2HB');
                }
            }
        }());
    </script>


<script>(window.BOOMR_mq=window.BOOMR_mq||[]).push(["addVar",{"rua.upush":"false","rua.cpush":"false","rua.upre":"false","rua.cpre":"true","rua.uprl":"false","rua.cprl":"false","rua.cprf":"false","rua.trans":"SJ-c15f97a5-19ba-4381-9647-264dfd61b14c","rua.cook":"true","rua.ims":"false","rua.ufprl":"false","rua.cfprl":"false","rua.isuxp":"false","rua.texp":"norulematch"}]);</script>
                              <script>!function(e){var n="https://s.go-mpulse.net/boomerang/";if("False"=="True")e.BOOMR_config=e.BOOMR_config||{},e.BOOMR_config.PageParams=e.BOOMR_config.PageParams||{},e.BOOMR_config.PageParams.pci=!0,n="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="FX72H-U393W-CNX6U-WRWHF-88HB7",function(){function e(){if(!o){var e=document.createElement("script");e.id="boomr-scr-as",e.src=window.BOOMR.url,e.async=!0,i.parentNode.appendChild(e),o=!0}}function t(e){o=!0;var n,t,a,r,d=document,O=window;if(window.BOOMR.snippetMethod=e?"if":"i",t=function(e,n){var t=d.createElement("script");t.id=n||"boomr-if-as",t.src=window.BOOMR.url,BOOMR_lstart=(new Date).getTime(),e=e||d.body,e.appendChild(t)},!window.addEventListener&&window.attachEvent&&navigator.userAgent.match(/MSIE [67]\./))return window.BOOMR.snippetMethod="s",void t(i.parentNode,"boomr-async");a=document.createElement("IFRAME"),a.src="about:blank",a.title="",a.role="presentation",a.loading="eager",r=(a.frameElement||a).style,r.width=0,r.height=0,r.border=0,r.display="none",i.parentNode.appendChild(a);try{O=a.contentWindow,d=O.document.open()}catch(_){n=document.domain,a.src="javascript:var d=document.open();d.domain='"+n+"';void(0);",O=a.contentWindow,d=O.document.open()}if(n)d._boomrl=function(){this.domain=n,t()},d.write("<bo"+"dy onload='document._boomrl();'>");else if(O._boomrl=function(){t()},O.addEventListener)O.addEventListener("load",O._boomrl,!1);else if(O.attachEvent)O.attachEvent("onload",O._boomrl);d.close()}function a(e){window.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!window.BOOMR||!window.BOOMR.version&&!window.BOOMR.snippetExecuted){window.BOOMR=window.BOOMR||{},window.BOOMR.snippetStart=(new Date).getTime(),window.BOOMR.snippetExecuted=!0,window.BOOMR.snippetVersion=12,window.BOOMR.url=n+"FX72H-U393W-CNX6U-WRWHF-88HB7";var i=document.currentScript||document.getElementsByTagName("script")[0],o=!1,r=document.createElement("link");if(r.relList&&"function"==typeof r.relList.supports&&r.relList.supports("preload")&&"as"in r)window.BOOMR.snippetMethod="p",r.href=window.BOOMR.url,r.rel="preload",r.as="script",r.addEventListener("load",e),r.addEventListener("error",function(){t(!0)}),setTimeout(function(){if(!o)t(!0)},3e3),BOOMR_lstart=(new Date).getTime(),i.parentNode.appendChild(r);else t(!1);if(window.addEventListener)window.addEventListener("load",a,!1);else if(window.attachEvent)window.attachEvent("onload",a)}}(),"".length>0)if(e&&"performance"in e&&e.performance&&"function"==typeof e.performance.setResourceTimingBufferSize)e.performance.setResourceTimingBufferSize();!function(){if(BOOMR=e.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var n="true"=="true"?1:0,t="cookiepresent",a="m4jcgkixeaowwzpqjjba-f-59e2e5985-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,o={"ak.v":"36","ak.cp":"1137547","ak.ai":parseInt("677135",10),"ak.ol":"0","ak.cr":29,"ak.ipv":4,"ak.proto":"h2","ak.rid":"d21a3233","ak.r":11483,"ak.a2":n,"ak.m":"a","ak.n":"essl","ak.bpcip":"103.18.35.0","ak.cport":62748,"ak.gh":"23.32.29.103","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1710246466","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==41Jm7YjxEX3q6aesSROZsucE7Tz/ITDklYuYJfbY2TdgN7CmSVbdcfcw90khXWC5KrrrRUYlfFcQRszWOt7nbyQsmv6jCgcJ0Vvx/7wDbpYionXInl2YkjjV8kiwQ2Omr940v1jPqjBq95zt0kAKHXfO8JYNO8kjCgdmmnS3DtVs41QPdeCQo0fW4YBBariSP2gJbC97l2iSsClLpjxekqUzIAdPJywXjqzowi0lF9ASmoGHKWfBHAY6UUVsFWIkOdw1oUm6ex8WrojlO5J4LcHo1VDxzto2COsAgTWW2ciAgyRg9bMgRNjtJNgYXnN8axdFWxY2TqsgXmCmsZcjyFOj81gvadlHx7Y2t21JE3o1/ZemPhcKah4kWpdcoSee5B0SJjVwYxFEW6Y2c8/yXBgGsMsibC0NuwgMLkgto3k=","ak.pv":"274","ak.dpoabenc":"","ak.tf":i};if(""!==t)o["ak.ruds"]=t;var r={i:!1,av:function(n){var t="http.initiator";if(n&&(!n[t]||"spa_hard"===n[t]))o["ak.feo"]=void 0!==e.aFeoApplied?1:0,BOOMR.addVar(o)},rv:function(){var e=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(e)}};BOOMR.plugins.AK={akVars:o,akDNSPreFetchDomain:a,init:function(){if(!r.i){var e=BOOMR.subscribe;e("before_beacon",r.av,null,null),e("onbeacon",r.rv,null,null),r.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script></head>

<body id="top" class="main-site xmbz loading ">

    <script>
    var cookieDomain = '.xmindonesiatrade.com';
    var countryCurrent = 'ID';
    var languagePref = 'id';
    var group = '6';
    var homeLink = 'https://www.xmindonesiatrade.com/id';
    var hostLink = 'https://www.xmindonesiatrade.com';
    var brandId = 'xmbz';
    var visitorDetailsDeviceInfo = '{"mobile":false,"phone":false,"tablet":false,"android":false,"ios":false}';
</script>
<script>
    function setGdprCookies() {
        var domainName = ".xmindonesiatrade.com";
        var cookieGroupsDefaultValues = {'functional': 1, 'analytical': 0, 'promotional': 0, 'preferences': 0};
        var today = new Date();
        var today_180 = today.setDate(today.getDate() + 180);
        for (var cookieType in cookieGroupsDefaultValues) {
            if ((new RegExp('xmck_' + cookieType, 'gi').exec(document.cookie)) == null) {
                document.cookie = 'xmck_' + cookieType + '=' + cookieGroupsDefaultValues[cookieType] + '; path=/; domain=' + domainName + '; expired=' + today_180.toString();
            }
        }
    }
    setGdprCookies();
</script>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KPSPFZ"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}

    
    gtag('consent', 'default', {
        'ad_storage': 'granted',
        'ad_user_data': 'granted',
        'ad_personalization': 'granted',
        'analytics_storage': 'granted'
    });

    if (!window.cookiesCallback) {
        window.cookiesCallback = function (promotional) {
            if (promotional) {
                gtag('consent', 'update', {
                    'ad_storage': 'granted',
                    'ad_user_data': 'granted',
                    'ad_personalization': 'granted'
                });
            } else {
                gtag('consent', 'update', {
                    'ad_storage': 'denied',
                    'ad_user_data': 'denied',
                    'ad_personalization': 'denied'
                });
            }
        };
    }
</script>
<!-- End Google Tag Manager -->

    
    <div class="sticky-bar" >
                    <div class="content">        
                                            <div class="text">
                                <p>
                                    Forex, CFD Kripto, Komoditas dan Saham — 10+ Platform Trading — 1.000+ Instrumen                                </p>
                            </div> 
                                                        <div>
                    <a href="https://www.xmindonesiatrade.com/goto/profile/id" class="btn btn-solid btn-red pull-left">Buka Akun disini <i class="fa fa-caret-right"></i></a>
                </div>
                <div>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            </div>
<style>
    #xm_app_stickyHeader {
        background: #1e1e1e;
    }
    #xm_app_stickyHeader .col-md-12 {
        padding-left: 7px;
        padding-right: 7px;
    }
    .xm_app_stickyHeader__container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-line-pack: center;
        align-content: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        max-width: 490px;
        margin: 0 auto;
    }
    .xm_app_stickyHeader__container p.no_margin {
        color: #fff;
        font-weight: bold;
        font-size: 12px;
        margin-left: 7px !important;
    }
    .xm_app_stickyHeader__container .iconWrapper_container {
        margin-left: 24px;
        margin-right: 10px;
    }
    html[lang="el"] .xm_app_stickyHeader__container .iconWrapper_container {
        margin-left: 12px;
    }
    .xm_app_stickyHeader__container .iconWrapper_container .appIcons,
    .xm_app_stickyHeader__container .iconWrapper_container a img {
        width: 90px;
    }
    .xm_app_stickyHeader__wrapper-icon-text, .xm_app_stickyHeader__wrapper-apps-dl {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-line-pack: center;
        align-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .xm_app_stickyHeader__wrapper-icon-text p {
        font-size: 14px;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }
    .xm_app_stickyHeader__wrapper-icon-text p:last-child {
        font-size: 10px;
        font-weight: normal;
    }
    .xm_app_stickyHeader__wrapper-apps-dl {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        cursor: pointer;
    }
    #btnXMappStickyHeader i {
        color: #696969;
    }
    #xm_app_stickyHeader .iconWrapper {
        display: none;
    }
    .xm_app_stickyHeader__download {
        background: #272727;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-line-pack: center;
        align-content: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 57px;
        width: 60px;
        margin-right: 2px;
    }
    .xm_app_stickyHeader__download i {
        color: #29A643;
        font-size: 34px;
    }
    .rtl-lang .xm_app_stickyHeader__container .iconWrapper_container {
        margin-right: 24px;
        margin-left: 10px;
    }
    .rtl-lang .xm_app_stickyHeader__container p.no_margin {
        margin-left: 0 !important;
        margin-right: 7px !important;
    }
</style>


    <div class="parent layout">

    
    
    
    <div class="site-canvas">

    <header>
<nav class="navbar navbar-default" role="navigation">
    <div class="header-top">
    <div class="container">
                    <ul class="links-nav hidden-xs hidden-sm">
                <li>
                    <a href="https://www.xmindonesiatrade.com/id/">
                        Halaman Utama XM                    </a>
                </li>
                                    <li>
                        <a href="https://www.xmindonesiatrade.com/goto/members/id" target="_blank">
                            Login Anggota                        </a>
                    </li>
                
                
                <li>
                    <a href="https://www.xmindonesiatrade.com/id/support">
                        Bantuan                    </a>
                </li>
                <li>
                                                <a href="https://www.xmindonesiatrade.com/id/account-types">
                                XM Ultra Low                            </a>
                                        </li>
            </ul>
        
        <ul class="buttons-nav hidden-xs hidden-sm">
        <li class="hidden-sm hidden-md">
                                    <a href="https://www.xmindonesiatrade.com/goto/members/id" class="btn btn-white" target="_blank">
                        <i class="fa fa-lock"></i>LOGIN ANGGOTA                    </a>
                            </li>

            
                            <li class="hidden-sm">
                    <a href="https://www.xmindonesiatrade.com/id/help-center/home" class="btn btn-white">
                        PUSAT BANTUAN                    </a>
                </li>
            
            <li class="hidden-sm">
                                                            <a href="https://www.xmindonesiatrade.com/goto/profile/id" class="btn btn-solid btn-red">
                            BUKA AKUN                        </a>
                                                </li>
            
        <li class="languages ">
                            <button class="dropdown-toggle btn btn-drop" type="button" id="dropdownMenu1" data-toggle="dropdown">
                    <i class="flags-sprite sm-id"></i><span>Indonesia</span>
                </button>
                <ul class="dropdown-menu flags-wrap" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-en"></i><span>English</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/my/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-my"></i><span>Malay</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/cn/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-cn"></i><span>简体中文</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/tw/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-tw"></i><span>繁體中文</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/el/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-el"></i><span>Ελληνικά</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/hu/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-hu"></i><span>Magyar</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/ru/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-ru"></i><span>Русский</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/fr/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-fr"></i><span>Français</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/it/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-it"></i><span>Italiano</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/se/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-se"></i><span>Svenska</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/de/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-de"></i><span>Deutsch</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/pl/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-pl"></i><span>Polski</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/ar/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-ar"></i><span>العربية</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/es/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-es"></i><span>Español</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/kr/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-kr"></i><span>한국어</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/pt/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-pt"></i><span>Português</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/vn/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-vn"></i><span>Tiếng Việt</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/th/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-th"></i><span>ภาษาไทย</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/ph/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-ph"></i><span>Filipino</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/nl/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-nl"></i><span>Dutch</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/cz/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-cz"></i><span>Česky</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/bn/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-bn"></i><span>বাংলা</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/ur/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-ur"></i><span>اردو</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/tr/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-tr"></i><span>Türkçe</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/hi/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-in"></i><span>हिंदी</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/si/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-si"></i><span>සිංහල</span>
                            </a>
                        </li>
                                            <li role="presentation">
                            <a href="https://www.xmindonesiatrade.com/uz/?prln=1" role="menuitem" tabindex="-1">
                                <i class="flags-sprite sm-uz"></i><span>O'zbekcha</span>
                            </a>
                        </li>
                                    </ul>
                    </li>

            </ul>

    </div>
</div>

<div id="main-nav" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="toggle-bar visible-xs visible-sm">
                <button class="toggleLeftNav">
                    <i class="fa fa-bars"></i><span>Menu</span>
                    <i class="fa fa-times"></i>
                </button>
                                    <button class="toggleRightNav">
                        <span>BAHASA</span><i class="fa fa-globe"></i>
                        <i class="fa fa-times"></i>
                    </button>
                            </div>
        </div>
    </div>
    <div class="row">
        <div class="toggle-bar-line"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="center-logo">
                
                
                <a class="navbar-brand logo"
                   href="https://www.xmindonesiatrade.com/id/">
                    <img src="https://cloud.xm-cdn.com/static/xm/common/logos/XMLogo-2021_homepage.svg" alt="XM Logo" >
                </a>

                                        <a class="navbar-brand  promo-logo-svg"
                           href="https://www.xmindonesiatrade.com/id/cryptocurrencies">
                            <img src="https://cloud.xm-cdn.com/static/newsletters/Cryptocurrencies/HP_Icons/cryptos-hp-icon-id.svg?v=92c6eb6e87c35dd45b3644a3633bbd90" alt="Crypto CFDs" >
                        </a>
                    
            </div>
        </div>
    </div>
            <ul id="languages"></ul>
        <div class="collapse navbar-collapse main-nav" id="navigation-collapse">
        <div class="container">
            <div class="navbar-header hidden-xs hidden-sm">
                <a class="navbar-brand logo"
                   href="https://www.xmindonesiatrade.com/id/">
                    <img src="https://cloud.xm-cdn.com/static/xm/common/logos/XMLogo-2021_homepage.svg" alt="XM Logo" >
                </a>
                                        <!-- Logo Icon for all other languages -->
                        <a class="navbar-brand  promo-logo-svg"
                           href="https://www.xmindonesiatrade.com/id/cryptocurrencies">
                            <img src="https://cloud.xm-cdn.com/static/newsletters/Cryptocurrencies/HP_Icons/cryptos-hp-icon-id.svg?v=92c6eb6e87c35dd45b3644a3633bbd90" alt="Crypto CFDs" >
                        </a>
                                                </div>
            <ul id="main-nav" class="nav navbar-nav navbar-right default nav-logo hidden-xs hidden-sm">
    <li class="main_nav_home">
        <a href="https://www.xmindonesiatrade.com/id/">
            Depan        </a>
    </li>
    <li class="main_nav_trading">
        <a href="#">
            Trading        </a>
        <div class="dropdown">
    <div class="container">
         <!-- Disabled for Social Competetions and Copy Trading Entry -->
                <div class="wrap capitalize_text">
            <div class="block">
                <span>
                   <i class="xmFont fa-kit fa-xm-user-id"></i>Akun Perdagangan                </span>
                <ul>
                                            <li class="menu-account-types">
                            <a href="https://www.xmindonesiatrade.com/id/account-types">
                                Tipe Akun Trading                            </a>
                        </li>
                                        <!--  -->
                    <!--<li class="menu-account-funding">
                        <a href="/account-funding">
                                                    </a>
                    </li>
                    <li class="menu-funds-withdrawal">
                        <a href="/funds-withdrawal">
                                                    </a>
                    </li>-->

                                            <li class="menu-ultra-low">
                            <a href="https://www.xmindonesiatrade.com/id/account-types/ultra-low">
                                Akun Ultra Low                            </a>
                        </li>
                    
                                            <li class="menu-islamic">
                            <a href="https://www.xmindonesiatrade.com/id/islamic">
                                Akun Islami                            </a>
                        </li>
                    
                </ul>
            </div>
            <div class="block">
                <span>
                    <i class="xmFont fa-kit fa-xm-candlestick"></i>Instrumen                </span>
                <ul>
                    <li class="menu-forex-trading">
                        <a href="https://www.xmindonesiatrade.com/id/forex-trading">
                            Trading Forex                        </a>
                    </li>
                                            <li class="menu-cryptocurrencies">
                            <a href="https://www.xmindonesiatrade.com/id/cryptocurrencies">
                                Mata uang Kripto                                                            </a>
                        </li>
                                                            <li class="menu-stocks">
                        <a href="https://www.xmindonesiatrade.com/id/stocks">
                            CFD Saham                        </a>
                    </li>
                                                                <li class="menu-turbo-stocks">
                            <a href="https://www.xmindonesiatrade.com/id/turbo-stocks">
                                Saham Turbo                                <div class="mega-menu__badge badge">BARU</div>
                            </a>
                        </li>
                                                            <li class="menu-commodities">
                        <a href="https://www.xmindonesiatrade.com/id/commodities">
                            Komoditas                        </a>
                    </li>
                    <li class="menu-equity-indices">
                        <a href="https://www.xmindonesiatrade.com/id/equity-indices">
                            Indeks Ekuitas                        </a>
                    </li>
                    <li class="menu-precious-metals">
                        <a href="https://www.xmindonesiatrade.com/id/precious-metals">
                            Logam Mulia                        </a>
                    </li>
                    <li class="menu-energies">
                        <a href="https://www.xmindonesiatrade.com/id/energies">
                            Energi                        </a>
                    </li>
                    
                                            <li class="menu-shares">
                            <a href="https://www.xmindonesiatrade.com/id/shares">
                                Saham                            </a>
                        </li>
                                    </ul>
            </div>
            <div class="block">
                <span>
                    <i class="xmFont fa-kit fa-xm-chart-bars-arrow"></i>Kondisi                </span>
                <ul>
                    <li class="menu-execution-policy">
                        <a href="https://www.xmindonesiatrade.com/id/execution-policy">
                            Kebijakan Eksekusi                        </a>
                    </li>
                    <li class="menu-spreads">
                        <a href="https://www.xmindonesiatrade.com/id/spreads">
                            Spread                        </a>
                    </li>
                                            <li class="menu-margin-and-leverage">
                            <a href="https://www.xmindonesiatrade.com/id/margin-and-leverage">
                                Margin dan Leverage                            </a>
                        </li>
                                        <li class="menu-overnight-positions">
                        <a href="https://www.xmindonesiatrade.com/id/overnight-positions">
                            Posisi menginap                        </a>
                    </li>
                    <li class="menu-trading-hours">
                        <a href="https://www.xmindonesiatrade.com/id/trading-hours">
                            Jam Perdagangan                        </a>
                    </li>
                </ul>
            </div>
            <!-- Social Competetions and Copy Trading Entry -->
                            <div class="block">
                    <span>
                        <i class="xmFont fa-kit fa-xm-copytrading"></i>SOSIAL                    </span>
                    <ul>
                                            <li class="menu-social-copy-trading">
                            <a href="https://www.xmindonesiatrade.com/id/social-copy-trading">
                                Copy Trading                                <div class="mega-menu__badge badge">BARU</div>
                            </a>
                        </li>
                                            <li class="menu-social-competition">
                            <a href="https://www.xmindonesiatrade.com/id/social-competitions">
                                Kompetisi                                <div class="mega-menu__badge badge">BARU</div>
                            </a>
                        </li>
                    </ul>
                </div>
                    </div>
        <div class="nav-bottom-bar hidden-xs hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            Trading Forex, CFD Kripto, Saham, Logam Mulia dan Energi pada platform trading kami                        </p>
                    </div>
                    <div class="col-md-4">
                        <a href="https://www.xmindonesiatrade.com/goto/profile/id" class="btn btn-solid btn-full btn-red">
                            Buka Akun Riil                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    </li>

    <li class="main_nav_platforms">
        <a href="#">
            PLATFORM        </a>
        <div class="dropdown">
    <div class="container">
        <div class="box platform hidden-xs hidden-sm">
                        <div class="block xm_app_mainNavPlatforms">
                    <span>
                        <i class="xmFont fa-kit fa-xm-app"></i>
                        APLIKASI XM                    </span>
                    <h3>Unduh Sekarang!</h3>
                    <small>Sesuai untuk MT4 & MT5</small>
                    <hr>
                    <p>Trading di mana saja dengan <strong>Aplikasi semua dalam satu XM. Tersedia untuk MT4 & MT5</strong>.</p>
                    <div class="iconWrapper_container">
            <img class="appIcons appstore-img img-responsive" content="XMapp-AppStore" content-type="id" placement="bottom-end" placement-rtl="bottom-start"src="https://cloud.xm-cdn.com/static/xm/pages/xmapp/xmapp_appstore_dark.svg" alt="XMApp App Store">
                    <img class="appIcons android-img img-responsive" content="XMapp-PlayStore" content-type="id" placement="bottom-start" placement-rtl="bottom-end"src="https://cloud.xm-cdn.com/static/xm/pages/xmapp/android-badge-white.svg?v=59c8cf84b682b868c98748f724b883d9" alt="XMApp Android">
            </div>
<div hidden>
    <div>
        <div class="xm_app_barcode_container" id="XMapp-AppStore">
            <div>
                <img width="160" data-logo="https://cloud.xm-cdn.com/static/xm/pages/xmapp/apple-logo-square.svg?v=6c3e01bbe2dd20d21c26ffe17b9b57eb" data-link="https://xm.onelink.me/CYt8/c7bfb246?is_retargeting=true&affId=1215429&affIdTs=1710243676&clickId=67f82a69-d0e7-4641-9015-7f8f684305b0&clickIdTs=1710243676&refererUrl=https://www.xmindonesiatrade.com/id/id/xm-app&af_dp=xm://register?type=real" class="qrcode center-block" alt="">
            </div>
            <div class="xm_app_barcode_text">
                <p class="no_margin">Scan untuk Mengunduh <strong>Aplikasi XM</strong> di App Store</p>
                <a href="https://www.xmindonesiatrade.com/id/xm-app">Baca Lebih Lanjut</a>
            </div>
        </div>
        <div class="xm_app_barcode_container" id="XMapp-PlayStore">
            <div>
                <img width="160" data-logo="https://cloud.xm-cdn.com/static/xm/pages/xmapp/android-icon.svg?v=e3eafa19936d7826255d47e94da4fb2a" data-link="https://xm.onelink.me/CYt8/e9e13f57?is_retargeting=true&affId=1215429&affIdTs=1710243676&clickId=67f82a69-d0e7-4641-9015-7f8f684305b0&clickIdTs=1710243676&refererUrl=https://www.xmindonesiatrade.com/id/id/xm-app&af_dp=xm://register?type=real" class="qrcode center-block" alt="">
            </div>
            <div class="xm_app_barcode_text">
                <p class="no_margin">Pindai untuk mengunduh aplikasi Android kami</p>
                <a href="https://www.xmindonesiatrade.com/id/apk-app-download">Baca Lebih Lanjut</a>
            </div>
        </div>
    </div>
</div>
                </div>
                    </div>
        <div class="line hidden-xs hidden-sm">
        </div>
        <div class="wrap capitalize_text">
                            <div class="block">
                <span>
                    <i class="xmFont fa-kit fa-xm-pc"></i>PC / Mac                </span>
                    <ul>
                        <li class="menu-mt4">
                            <a href="https://www.xmindonesiatrade.com/id/mt4">
                                <i class="fa fa-windows hidden-xs hidden-sm"></i>MT4 untuk PC                            </a>
                        </li>
                        <li class="menu-metatrader-mac">
                            <a href="https://www.xmindonesiatrade.com/id/metatrader-mac">
                                <i class="fa fa-apple hidden-xs hidden-sm"></i>MT4 untuk Mac                            </a>
                        </li>
                                                    <li class="menu-multiterminal">
                                <a href="https://www.xmindonesiatrade.com/id/multiterminal">
                                    <i class="fa fa-windows hidden-xs hidden-sm"></i>MT4 Multiterminal                                </a>
                            </li>
                                                <li class="menu-webtrader">
                            <a href="https://www.xmindonesiatrade.com/id/mt4-webtrader">
                                <i class="fa fa-desktop hidden-xs hidden-sm"></i>MT4 WebTrader                            </a>
                        </li>
                    </ul>
                </div>
                        <div class="block">
                                    <div class="hidden-xs hidden-sm dis50"></div>
                                <ul>
                    <li class="menu-mt4">
                        <a href="https://www.xmindonesiatrade.com/id/mt5">
                            <i class="fa fa-windows hidden-xs hidden-sm"></i>MT5 untuk PC                        </a>
                    </li>
                    <li class="menu-metatrader-mac">
                        <a href="https://www.xmindonesiatrade.com/id/mt5-mac">
                            <i class="fa fa-apple hidden-xs hidden-sm"></i>MT5 untuk Mac                        </a>
                    </li>

                    <li class="menu-webtrader">
                        <a href="https://www.xmindonesiatrade.com/id/mt5-webtrader">
                            <i class="fa fa-desktop hidden-xs hidden-sm"></i>MT5 WebTrader                        </a>
                    </li>
                    <!--<li class="menu-webtrader">
                        <a href="">
                            <i class=" hidden-xs hidden-sm"></i>                        </a>
                    </li>-->
                </ul>
            </div>
            <div class="block">
                <span>
                    <i class="xmFont fa-kit fa-xm-iphone"></i>Smartphone                </span>
                <ul>
                                            <li class="menu-iphone">
                            <a href="https://www.xmindonesiatrade.com/id/iphone">
                                <i class="fa fa-apple hidden-xs hidden-sm"></i>MT4 untuk iPhone                            </a>
                        </li>
                        <li class="menu-android-phone">
                            <a href="https://www.xmindonesiatrade.com/id/android">
                                <i class="fa fa-android hidden-xs hidden-sm"></i>MT4 untuk Android                            </a>
                        </li>
                                        <li class="menu-iphone">
                        <a href="https://www.xmindonesiatrade.com/id/mt5-iphone">
                            <i class="fa fa-apple hidden-xs hidden-sm"></i>MT5 untuk iPhone                        </a>
                    </li>
                    <li class="menu-android-phone">
                        <a href="https://www.xmindonesiatrade.com/id/mt5-android">
                            <i class="fa fa-android hidden-xs hidden-sm"></i>MT5 untuk Android                        </a>
                    </li>
                                            <li>
                            <a href="https://www.xmindonesiatrade.com/id/xm-app">
                                <i class="xmFont fa-kit fa-xm-logo-no-bull"></i>Aplikasi XM untuk iPhone                            </a>
                        </li>
                        <li>
                            <a href="https://www.xmindonesiatrade.com/id/apk-app-download">
                                <i class="xmFont fa-kit fa-xm-logo-no-bull"></i>Aplikasi XM untuk Android                            </a>
                        </li>
                                    </ul>
            </div>
            <div class="block">
                <span>
                    <i class="xmFont fa-kit fa-xm-ipad"></i>Tablet                </span>
                <ul>
                                            <li class="menu-ipad">
                            <a href="https://www.xmindonesiatrade.com/id/ipad">
                                <i class="fa fa-apple hidden-xs hidden-sm"></i>MT4 untuk iPad                            </a>
                        </li>
                        <li class="menu-android">
                            <a href="https://www.xmindonesiatrade.com/id/android-tablet">
                                <i class="fa fa-android hidden-xs hidden-sm"></i>MT4 untuk Android                            </a>
                        </li>
                                        <li class="menu-ipad">
                        <a href="https://www.xmindonesiatrade.com/id/mt5-ipad">
                            <i class="fa fa-apple hidden-xs hidden-sm"></i>MT5 untuk iPad                        </a>
                    </li>
                    <li class="menu-android">
                        <a href="https://www.xmindonesiatrade.com/id/mt5-android-tablet">
                            <i class="fa fa-android hidden-xs hidden-sm"></i>MT5 untuk Android                        </a>
                    </li>

                                            <li>
                            <a href="https://www.xmindonesiatrade.com/id/xm-app">
                                <i class="xmFont fa-kit fa-xm-logo-no-bull"></i>Aplikasi XM untuk iPad                            </a>
                        </li>
                        <li>
                            <a href="https://www.xmindonesiatrade.com/id/apk-app-download">
                                <i class="xmFont fa-kit fa-xm-logo-no-bull"></i>Aplikasi XM untuk Android                            </a>
                        </li>
                                    </ul>
            </div>
        </div>
        <div class="nav-bottom-bar hidden-xs hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            Trading Forex, CFD Kripto, Saham, Logam Mulia dan Energi pada platform trading kami                        </p>
                    </div>
                    <div class="col-md-4">
                        <a href="https://www.xmindonesiatrade.com/goto/profile/id" class="btn btn-solid btn-full btn-red">
                            Buka Akun Riil                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    </li>

    <li class="main_nav_research">
        <a href="#">
            <i class="fa fa-graduation-cap"></i>RISET & EDUKASI        </a>
        <div class="dropdown">
    <div class="container">
        <div class="box hidden-xs hidden-sm">
                            <span>RISET & EDUKASI</span>
                <p>Pusat Riset dan Edukasi kami menawarkan berita harian pada sesi trading utama bersama dengan beberapa berita singkat harian pada semua peristiwa pasar penting yang juga membentuk pasar global.</p>
                <p>Diisi oleh 20 profesional multibahasa, kami menyajikan edukasi yang bervariasi untuk memberdayakan klien kami dengan keunggulan yang bersaing.</p>
                <div class="dis20"></div>
                <p>Peringatan Resiko : Trading pada produk margin melibatkan resiko yang tinggi.</p>
                    </div>
        <div class="line hidden-xs hidden-sm">
        </div>
        <div class="wrap capitalize_text">

            <div class="block">
    <span>
        <i class="xmFont fa-kit fa-xm-chart-search"></i>Riset    </span>
    <ul>
                    <li class="menu-research">
                <a href="https://www.xmindonesiatrade.com/id/research/overview">
                    Ringkasan Pasar                </a>
            </li>
                            <li class="menu-research">
                    <a href="https://www.xmindonesiatrade.com/id/research/discover/marketPulse">
                        Pandangan                    </a>
                    <div class="mega-menu__badge badge">BARU</div>
                </li>
                        <li class="menu-research">
                <a href="https://www.xmindonesiatrade.com/id/research/analysis">
                    Riset XM                </a>
            </li>
                            <li class="menu-research">
                    <a href="https://www.xmindonesiatrade.com/id/research/tradeIdeas">
                        Ide Trading                    </a>
                </li>
                <li class="menu-research">
                    <a href="https://www.xmindonesiatrade.com/id/research/technicalSummaries">
                        Ringkasan Teknis                    </a>
                </li>
                        <li class="menu-research">
                <a href="https://www.xmindonesiatrade.com/id/research/economicCalendar">
                    Kalender Ekonomi                </a>
            </li>
            <li class="menu-research">
                <a href="https://www.xmindonesiatrade.com/id/research/videos">
                    XM TV                </a>
            </li>
            <li class="menu-research">
                <a href="https://www.xmindonesiatrade.com/id/research/podcast">
                    Podcast                </a>
            </li>
            </ul>
</div>
<div class="block">
    <span>
        <i class="xmFont fa-kit fa-xm-chart"></i>Pusat Pembelajaran    </span>
    <ul>
                    <li class="menu-tutorials">
                <a href="https://www.xmindonesiatrade.com/id/live-player/xmlive">
                    XM Live                </a>
            </li>
                                    <li class="menu-tutorials">
            <a class="redirect-modal-trigger" href="https://www.xmindonesiatrade.com/id/live-player/id-local-advanced">
                    Ruang Lanjutan Indonesia                </a>
            </li>
                        <li class="menu-tutorials">
                <a href="https://www.xmindonesiatrade.com/id/education-rooms">
                    Edukasi Live                </a>
            </li>
            <li class="menu-tutorials">
                <a href="https://www.xmindonesiatrade.com/id/english-education-schedule">
                    Jadwal Edukasi Live                </a>
            </li>
        
                                                                <li class="menu-webinars">
                        <a href="https://www.xmindonesiatrade.com/id/webinars">
                                                            Webinar Forex & CFD                                                    </a>
                    </li>
                                                
                    <li class="menu-tutorials">
                                    <a class="redirect-modal-trigger" href="https://www.xmindonesiatrade.com/id/educational-videos">
                        Video Edukasi                    </a>
                            </li>
        
                                
            
            
                            <li class="menu-tutorials">
                    <a href="https://www.xmindonesiatrade.com/id/tutorials">
                        Tutorial Platform                    </a>
                </li>
            
            
            
            
                        
            
            
            
                        
            </ul>
</div>
<div class="block">
    <span>
        <i class="xmFont fa-kit fa-xm-tools"></i>Alat    </span>
    <ul>
                                    <li class="menu-forex-signals">
                    <a href="https://www.xmindonesiatrade.com/id/trading-tools">
                        Alat-alat Trading                    </a>
                </li>
                            
                                    <li class="menu-mql5">
                    <a href="https://www.xmindonesiatrade.com/id/mql5">
                        Trading Otomatis MQL5                    </a>
                </li>
                                    <li class="menu-forex-calculators">
            <a href="https://www.xmindonesiatrade.com/id/forex-calculators">
                Kalkulator Forex            </a>
        </li>
    </ul>
</div>
        </div>
        <div class="nav-bottom-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            Trading Forex, CFD Kripto, Saham, Logam Mulia dan Energi pada platform trading kami                        </p>
                    </div>
                    <div class="col-md-4">
                        <a href="https://www.xmindonesiatrade.com/goto/profile/id" class="btn btn-solid btn-full btn-red">
                            Buka Akun Riil                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    </li>

            <li class="main_nav_promotions">
            <a href="https://www.xmindonesiatrade.com/id/promotions">
                PROMOSI            </a>
        </li>
    
    <li class="main_nav_about">
        <a href="#">
            PERIHAL        </a>
        <div class="dropdown">
    <div class="container">
        <div class="box hidden-xs hidden-sm">
            <span>PERIHAL</span>
            <p>XM menetapkan standar yang tinggi untuk layanannya karena kualitas sangat penting bagi kami dan juga bagi klien. Kami percaya layanan finansial serbaguna memerlukan fleksibilitas dalam berpikir dan kebijakan bisnis yang terpadu.</p>
            <p>Misi kami adalah untuk mengimbangi permintaan pasar global dan menerima tujuan investasi klien kami dengan pikiran terbuka.</p>
            <div class="dis20"></div>
            <p>Peringatan Resiko : Trading pada produk margin melibatkan resiko yang tinggi.</p>
        </div>
        <div class="line hidden-xs hidden-sm">
        </div>
        <div class="wrap capitalize_text">
            <div class="block">
                <span>
                    <i class="xmFont fa-kit fa-xm-user-profile"></i>PERIHAL                </span>
                <ul>
                    <li class="menu-about">
                        <a href="https://www.xmindonesiatrade.com/id/about">
                            Siapa itu XM Group?                        </a>
                    </li>

                    <li class="menu-regulation">
                        <a href="https://www.xmindonesiatrade.com/id/regulation">
                            Peraturan                        </a>
                    </li>
                                        <li class="menu-legal-documents">
                        <a href="https://www.xmindonesiatrade.com/id/legal-documents">
                            Dokumen legal                        </a>
                    </li>
                                    </ul>
            </div>
            <div class="block">
                <div class="hidden-xs hidden-sm dis50"></div>
                <ul>
                    
                                            <li class="menu-company-news">
                            <a href="https://www.xmindonesiatrade.com/id/category/company-news">
                                Berita                            </a>
                        </li>
                    
                                            <li class="menu-foundation">
                            <a href="https://www.xmindonesiatrade.com/id/xm-csr">
                                Tanggung Jawab Sosial Perusahaan                            </a>
                        </li>
                                                                                    <li class="menu-support">
                            <a href="https://www.xmindonesiatrade.com/id/support">
                                Bantuan                            </a>
                        </li>
                                    </ul>
            </div>
            <div class="block">
                <div class="hidden-xs hidden-sm dis50"></div>
                <ul>
                    
                    
                                            <li>
                            <a href="https://www.xmindonesiatrade.com/id/xm-awards">
                                Penghargaan XM                            </a>
                        </li>
                    
                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/complaints">
                            Pengaduan                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="nav-bottom-bar hidden-xs hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            Trading Forex, CFD Kripto, Saham, Logam Mulia dan Energi pada platform trading kami                        </p>
                    </div>
                    <div class="col-md-4">
                        <a href="https://www.xmindonesiatrade.com/goto/profile/id" class="btn btn-solid btn-full btn-red">
                            Buka Akun Riil                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </li>

    <li class="main_nav_partners">
        <a href="https://partners.xmindonesiatrade.com/id">
            <i class="fa fa-users"></i>KEMITRAAN        </a>
    </li>
</ul>
<ul id="main-nav" class="nav navbar-nav navbar-right default visible-xs visible-sm capitalize_text">
    <li>
        <a href="https://www.xmindonesiatrade.com/id/">
            <i class="fa fa-home"></i><span>Depan</span>
        </a>
    </li>
    <li>
        <a href="https://www.xmindonesiatrade.com/goto/members/id" target="_blank">
            <i class="fa fa-lock"></i><span>Login Anggota</span>
        </a>
    </li>
    <li>
        <a href="https://my.xmindonesiatrade.com/id/payment/deposit" target="_blank">
            <i class="fa fa-credit-card"></i><span>Pendanaan</span>
        </a>
    </li>

            <li>
            <a href="https://www.xmindonesiatrade.com/id/promotions">
                <i class="fa fa-gift"></i><span>Promosi</span>
            </a>
        </li>
    
    
    <li>
        <a class="navbar-nav__toggleArrow" data-toggle="collapse" href="#tradingMenu" role="button" aria-expanded="false" aria-controls="tradingMenu">
            <i class="fa fa-area-chart" aria-hidden="true"></i><span>Trading</span> <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </a>
        <div id="tradingMenu" class="collapse">
            <ul class="navbar-nav__list">
                <li class="navbar-nav__listTitle"><span>Akun Perdagangan</span></li>
                                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/account-types">
                            <i class="fa fa-signal"></i>Tipe Akun Trading                        </a>
                    </li>
                                                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/account-types/ultra-low">
                            <i class="fa fa-signal"></i><span>Akun Ultra Low</span>
                        </a>
                    </li>
                                                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/islamic">
                            <i class="fa fa-signal"></i><span>Akun Islami</span>
                        </a>
                    </li>
                                <li class="navbar-nav__listTitle"><span>Instrumen</span></li>
                <li>
                    <a href="https://www.xmindonesiatrade.com/id/forex-trading">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                        <span>Trading Forex</span>
                    </a>
                </li>
                                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/cryptocurrencies">
                            <i class="fa fa-btc" aria-hidden="true"></i>
                            <span>Mata uang Kripto                            </span>
                        </a>
                    </li>
                                                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/stocks">
                            <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                            <span>
                                CFD Saham                            </span>
                        </a>
                    </li>
                                                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/turbo-stocks">
                            <i class="fa fa-cc-mastercard" aria-hidden="true"></i><span>Saham Turbo                            <div class="mega-menu__badge badge">BARU</div></span>
                        </a>
                    </li>
                                                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/commodities">
                            <i class="fa fa-envira" aria-hidden="true"></i><span>Komoditas</span>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/equity-indices">
                            <i class="fa fa-database" aria-hidden="true"></i><span>Indeks Ekuitas</span>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/precious-metals">
                            <i class="fa fa-cubes" aria-hidden="true"></i><span>Logam Mulia</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/energies">
                            <i class="fa fa-tint" aria-hidden="true"></i><span>Energi</span>
                        </a>
                    </li>
                
                                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/shares">
                            <i class="fa fa-google" aria-hidden="true"></i><span>Saham</span>
                        </a>
                    </li>
                                <li class="navbar-nav__listTitle"><span>Kondisi</span></li>
                <li>
                    <a href="https://www.xmindonesiatrade.com/id/execution-policy">
                        <i class="fa fa-signal" aria-hidden="true"></i><span>Kebijakan Eksekusi</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.xmindonesiatrade.com/id/spreads">
                        <i class="fa fa-signal" aria-hidden="true"></i><span>Spread</span>
                    </a>
                </li>
                                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/margin-and-leverage">
                            <i class="fa fa-signal" aria-hidden="true"></i><span>Margin dan Leverage</span>
                        </a>
                    </li>
                                <li>
                    <a href="https://www.xmindonesiatrade.com/id/overnight-positions">
                        <i class="fa fa-signal" aria-hidden="true"></i><span>Posisi menginap</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.xmindonesiatrade.com/id/trading-hours">
                        <i class="fa fa-signal" aria-hidden="true"></i><span>Jam Perdagangan</span>
                    </a>
                </li>
                                <li class="navbar-nav__listTitle"><span>SOSIAL</span></li>
                                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/social-copy-trading">
                            <i class="fa-kit fa-xm-winner-star" aria-hidden="true"></i><span>Copy Trading                            <div class="mega-menu__badge badge">BARU</div></span>
                        </a>
                    </li>
                                <li>
                    <a href="https://www.xmindonesiatrade.com/id/social-competitions">
                        <i class="fa-kit fa-xm-winner-star" aria-hidden="true"></i><span>Kompetisi                        <div class="mega-menu__badge badge">BARU</div></span>
                    </a>
                </li>
                            </ul>
        </div>
    </li>

    <li>
        <a href="https://www.xmindonesiatrade.com/id/platforms">
            <i class="fa fa-desktop"></i><span>Platform</span>
        </a>
    </li>

    <li>
        <a class="navbar-nav__toggleArrow" data-toggle="collapse" href="#researchMenu" role="button" aria-expanded="false" aria-controls="researchMenu">
            <i class="fa fa-pie-chart" aria-hidden="true"></i><span>Riset & Edukasi</span>
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </a>
        <div id="researchMenu" class="collapse">
            <ul class="navbar-nav__list">
    <li class="navbar-nav__listTitle">Riset</li>
    <li>
        <a href="https://www.xmindonesiatrade.com/id/research/overview" target="_blank">
            <i class="fa fa-area-chart"></i><span>Ringkasan Pasar</span>
        </a>
    </li>
            <li>
            <a href="https://www.xmindonesiatrade.com/id/research/discover/marketPulse">
                <i class="fa fa-newspaper-o"></i><span>Pandangan</span>
                <div class="mega-menu__badge badge">BARU</div>
            </a>
        </li>
    
    <li>
        <a href="https://www.xmindonesiatrade.com/id/research/analysis">
            <i class="fa fa-leanpub"></i><span>Riset XM</span>
        </a>
    </li>
            <li>
            <a href="https://www.xmindonesiatrade.com/id/research/tradeIdeas">
                <i class="fa fa-bar-chart"></i><span>Ide Trading</span>
            </a>
        </li>
        <li>
            <a href="https://www.xmindonesiatrade.com/id/research/technicalSummaries">
                <i class="fa fa-search"></i><span>Ringkasan Teknis</span>
            </a>
        </li>
        <li>
        <a href="https://www.xmindonesiatrade.com/id/research/economicCalendar">
            <i class="fa fa-calendar"></i><span>Kalender Ekonomi</span>
        </a>
    </li>
    <li>
        <a href="https://www.xmindonesiatrade.com/id/research/videos">
            <i class="fa fa-film"></i><span>XM TV</span>
        </a>
    </li>
    <li>
        <a href="https://www.xmindonesiatrade.com/id/research/podcast">
            <i class="fa fa-podcast"></i><span>Podcast</span>
        </a>
    </li>
<li class="navbar-nav__listTitle">Pusat Pembelajaran </li>

    <li>
        <a href="https://www.xmindonesiatrade.com/id/live-player/xmlive">
            <i class="fa fa-video-camera" aria-hidden="true"></i><span>XM Live</span>
        </a>
    </li>
                    <li class="menu-tutorials">
            <a class="redirect-modal-trigger" href="https://www.xmindonesiatrade.com/id/live-player/id-local-advanced">
            <i class="fa fa-briefcase" aria-hidden="true"></i><span>Ruang Lanjutan Indonesia</span>
            </a>
        </li>
        <li>
        <a href="https://www.xmindonesiatrade.com/id/education-rooms">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Edukasi Live</span>
        </a>
    </li>   
    <li>
        <a href="https://www.xmindonesiatrade.com/id/english-education-schedule">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Jadwal Edukasi Live</span>
        </a>
    </li>

                        <li>
                <a href="https://www.xmindonesiatrade.com/id/webinars">
                    <i class="fa fa-headphones"></i>
                                            Webinar Forex & CFD                                    </a>
            </li>
            
            <li>
                            <a class="redirect-modal-trigger" href="https://www.xmindonesiatrade.com/id/educational-videos">
                    <i class="fa fa-futbol-o" aria-hidden="true"></i>Video Edukasi                </a>
                    </li>
    
                
    
            <li>
            <a href="https://www.xmindonesiatrade.com/id/tutorials">
                <i class="fa fa-desktop"></i>Tutorial Platform            </a>
        </li>
    
    
    
        
    
    <!-- Temporary menu link removal, Covid-19 issue Malaysia (&& ($general['prefix'] !== 'my')) -->
        <!-- Temporary menu link removal, Covid-19 issue Philippines and Vietnam (($general['prefix'] !== 'ph'))-->
        <!-- Temporary menu link removal, Covid-19 issue ES ($general['prefix'] !== 'es')-->
    
<li class="navbar-nav__listTitle">Alat</li>

            <li>
            <a href="https://www.xmindonesiatrade.com/id/trading-tools">
                <i class="fa fa-cogs" aria-hidden="true"></i>Alat-alat Trading            </a>
        </li>
    
            <li>
            <a href="https://www.xmindonesiatrade.com/id/mql5">
                <i class="fa fa-bar-chart"></i>Trading Otomatis MQL5            </a>
        </li>
    <li>
    <a href="https://www.xmindonesiatrade.com/id/forex-calculators">
        <i class="fa fa-calculator"></i>Kalkulator Forex    </a>
</li></ul>
        </div>
    </li>

    <li>
        <a class="navbar-nav__toggleArrow" data-toggle="collapse" href="#aboutMenu" role="button" aria-expanded="false" aria-controls="aboutMenu">
            <i class="fa fa-briefcase" aria-hidden="true"></i><span>Perihal</span> <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </a>
        <div id="aboutMenu" class="collapse">
            <ul class="navbar-nav__list">
                <li class="navbar-nav__listTitle">Perihal XM</li>
                <li>
                    <a href="https://www.xmindonesiatrade.com/id/about">
                        <i class="fa fa-briefcase"></i><span>Siapa itu XM Group?</span>
                    </a>
                </li>

                                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/xm-csr">
                            <i class="fa fa-heart"></i><span>Tanggung Jawab Sosial Perusahaan</span>
                        </a>
                    </li>
                
                
                <li>
                    <a href="https://www.xmindonesiatrade.com/id/complaints">
                        <i class="fa fa-info-circle"></i><span>Pengaduan</span>
                    </a>
                </li>

                <li>
                    <a href="https://www.xmindonesiatrade.com/id/support">
                        <i class="fa fa-envelope"></i><span>Bantuan</span>
                    </a>
                </li>

                <li>
                    <a href="https://www.xmindonesiatrade.com/id/regulation">
                        <i class="fa fa-gavel"></i><span>Peraturan</span>
                    </a>
                </li>

                
                
                                <li>
                    <a href="https://www.xmindonesiatrade.com/id/legal-documents">
                        <i class="fa fa-file-text"></i><span>Dokumen legal</span>
                    </a>
                </li>
                
                                <li>
                    <a href="https://www.xmindonesiatrade.com/id/category/company-news">
                        <i class="fa fa-list-alt"></i><span>Berita</span>
                    </a>
                </li>
                
                                <li>
                    <a href="https://www.xmindonesiatrade.com/id/xm-awards">
                        <i class="fa fa-trophy"></i><span>Penghargaan XM</span>
                    </a>
                </li>
                            </ul>
        </div>
    </li>

    <li>
        <a href="https://www.xmindonesiatrade.com/id/help-center/home">
            <i class="fa fa-question-circle"></i><span>Pusat Bantuan</span>
        </a>
    </li>

    <li>
        <a href="https://partners.xmindonesiatrade.com/id">
            <i class="fa fa-refresh"></i><span>Kemitraan</span>
        </a>
    </li>

    
    
</ul>

<div class="navbar-nav__buttons visible-xs visible-sm">
    <a href="https://www.xmindonesiatrade.com/goto/members/id" class="btn btn-block navbar-nav__buttons--primary" target="_blank">
        <i class="fa fa-lock"></i><span>Login Anggota</span>
    </a>
</div>

<div class="navbar-nav__xmapp visible-xs visible-sm">
    <div class="navbar-nav__xmapp--wrapper">
        <div class="navbar-nav__xmapp--left">
            <div>
                <img class="xm_app_stickyHeader__icon" src="https://cloud.xm-cdn.com/static/www/pages/xmapp/xmapp-icon.webp?v=57092ddbbc339c6f050eed2271e679d3" alt="XM App Icon">
            </div>
            <div>
                                    <p>
                        Aplikasi MT4 & MT5 XM                    </p>
                    <small>
                        Aplikasi MT4 & MT5 XM semua dalam satu                    </small>
                            </div>
        </div>
        <div class="navbar-nav__xmapp--right">
            <a class="navbar-nav__xmapp--link" href="https://xm.onelink.me/CYt8/c7bfb246?is_retargeting=true&affId=1215429&affIdTs=1710243676&clickId=67f82a69-d0e7-4641-9015-7f8f684305b0&clickIdTs=1710243676&refererUrl=https://www.xmindonesiatrade.com/id/id/xm-app&af_dp=xm://register?type=real">
                <i class="xmFont fa-kit fa-xm-download-circle"></i>
            </a>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
</nav>
</header>
    <div id="new-live-chat-icon" class="widget-container">
    <div class="widget">
        <div class="widget__wrap">
            <div class="widget__text" style="display: none">Bantuan</div>
            <div class="widget__img"></div>
        </div>
    </div>

            <div id="livechatWidget" style="display: none">
            <div>
                <img src="https://cloud.xm-cdn.com/static/chat-widget/icons/live-chat-icon-lite.svg" alt="live-chat-icon">
            </div>
        </div>
    </div>

<div class="widget-options" id="widgetOptions" style="display: none">
    <div class="widget-options__head">
        <h4>Bagaimana kami bisa membantu Anda?</h4>
        <p>Pilih bagaimana Anda ingin menerima layanan bantuan.</p>
    </div>
    <div class="widget-options__body">

                    <!--    LiveChat    -->
            <div class="option option__livechat">
                <div class="option__wrap">
                    <img class="option__icon img-fluid" src="https://cloud.xm-cdn.com/static/chat-widget/icons/livechat_24x24.svg" alt="Live Chat">
                    <p class="option__text">Live Chat</p>
                </div>


                <div class="disclaimer">
                    <h4>Ketentuan Live Chat</h4>
                    <p>Dengan menggunakan Live Chat kami, Anda setuju bahwa semua data pribadi yang diberikan melalui Live Chat akan diproses oleh kami, sesuai dengan <a href="https://www.xmindonesiatrade.com/id/privacy-policy" target="_blank">Kebijakan Privasi</a> kami untuk menerima layanan bantuan dari tim Pengalaman Pelanggan kami.</p>
                    <a id="startLiveChat" class="btn btn-solid btn-red btn-block">
                        Mulai Chat                    </a>
                </div>

            </div>
        
                    <!--    WhatsApp    -->
            <div class="option option__whatsapp">
                <div class="option__wrap">
                    <img class="option__icon img-fluid" src="https://cloud.xm-cdn.com/static/chat-widget/icons/whatsapp_24x24.svg" alt="WhatsApp">
                    <p class="option__text">WhatsApp</p>
                </div>

                <div class="qr_code_container hidden-xs">
                    <h4>Cara Mengakses</h4>
                    <p>Pindai kode QR di bawah untuk menghubungi kami dari smartphone Anda atau <a class="red" href="https://api.whatsapp.com/send?phone=66622837424" target="_blank">buka WhatsApp di desktop Anda</a>.</p>
                    <div class="text-center">
                        <img src="https://cloud.xm-cdn.com/static/my/help-center/XMBZNewWhatsappNumber1.png?v=96c0b6b74ea43ed507e93ee8ff7b7a39" alt="Whatsapp qr">
                    </div>
                </div>

                <div class="disclaimer">
                    <h4>Ketentuan Chat WhatsApp</h4>
                    <p>Dengan menggunakan fitur WhatsApp Chat, Anda setuju bahwa semua data pribadi yang diberikan kepada XM Global Limited oleh Anda melalui WhatsApp akan diproses, sesuai dengan <a href="https://www.xmindonesiatrade.com/id/privacy-policy" target="_blank">Kebijakan Privasi</a> kami dan sesuai dengan <a href="https://livechat-whatsapp-business.99bits.xyz/privacy-policy.html" target="_blank">Kebijakan Privasi</a> aplikasi, untuk menerima layanan bantuan dari tim Pengalaman Pelanggan kami.</p>
                    <a id="start-whatsapp" href="https://api.whatsapp.com/send?phone=66622837424" target="_blank" class="btn btn-solid btn-red btn-block">
                        Mulai Chat                    </a>
                </div>
            </div>
        
                    <!--    Line    -->
            <div class="option option__linechat">
                <div class="option__wrap">
                    <img class="option__icon img-fluid" src="https://cloud.xm-cdn.com/static/chat-widget/icons/line_24x24.svg" alt="Live Chat">
                    <p class="option__text">Line</p>
                </div>

                <div class="qr_code_container hidden-xs">
                    <h4>Cara Mengakses</h4>
                    <p>Pindai kode QR di bawah ini dengan smartphone Anda</p>
                    <div class="text-center">
                        <img src="https://cloud.xm-cdn.com/static/www/pages/clientsupport/line-qr-code-bw.png?v=89b45f8352156c813dea97f7a6c016c0" alt="Line App qr">
                    </div>
                </div>

                <div class="disclaimer">
                    <h4>Ketentuan LINE Chat</h4>
                    <p>Dengan menggunakan fitur Line Chat, Anda setuju bahwa semua data pribadi yang diberikan kepada XM Global Limited oleh Anda melalui Line akan diproses, sesuai dengan <a href="https://www.xmindonesiatrade.com/id/privacy-policy" target="_blank">Kebijakan Privasi</a> kami dan sesuai dengan <a href="https://www.livechat-apps.com/line/privacy" target="_blank">Kebijakan Privasi</a> aplikasi, untuk menerima layanan bantuan dari tim Pengalaman Pelanggan kami.</p>
                    <div class="text-center">
                        <a id="start-line" href="https://line.me/R/oaMessage/@xmsupport/" target="_blank" class="btn btn-solid btn-red btn-block">
                            Mulai Chat                        </a>
                    </div>
                </div>

            </div>
        
        
        

        <a href="https://www.xmindonesiatrade.com/id/help-center/home" class="option help-center">
            <div class="option__wrap">
                <img class="option__icon img-fluid" src="https://cloud.xm-cdn.com/static/chat-widget/icons/helpcenter_24x24.svg" alt="Pusat Bantuan">
                <p class="option__text">Pusat Bantuan</p>
            </div>
        </a>
    </div>
</div>

<script type="text/javascript">
    window.addEventListener('load', function() {

        document.querySelector('.widget__text').removeAttribute("style");
        var is_mobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(window.navigator.userAgent);

        var liveChatDisclaimer = getCookie('livechatDisclaimer'),
            lineChatDisclaimer = getCookie('linechatDisclaimer'),
            whatsAppDisclaimer = getCookie('whatsAppDisclaimer'),
            viberChatDisclaimer = getCookie('viberchatDisclaimer'),
            telegramDisclaimer = getCookie('telegramDisclaimer');

        var liveChatActive = sessionStorage.getItem("xm-liveChat-visitorEngaged");
        if (liveChatActive === 'true') {
            document.querySelector('.widget').style.display = 'none';
        }


        function getCookie(name) {
            var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
            return v ? v[2] : null;
        }


        if (liveChatDisclaimer == 1 && document.querySelector('.option__livechat') != null) {
            document.querySelector('.option__livechat').setAttribute('no_disclaimer', "");
        }

        if (lineChatDisclaimer == 1 && document.querySelector('.option__linechat') != null) {
            document.querySelector('.option__linechat').setAttribute('no_disclaimer', "");
            document.querySelector('.option__linechat').querySelector('.disclaimer').style.display = 'none';
        }

        if (whatsAppDisclaimer == 1 && document.querySelector('.option__whatsapp') != null) {
            document.querySelector('.option__whatsapp').setAttribute('no_disclaimer', "");
            document.querySelector('.option__whatsapp').querySelector('.disclaimer').style.display = 'none';
        }

        if (viberChatDisclaimer == 1 && document.querySelector('.option__viberchat') != null) {
            document.querySelector('.option__viberchat').setAttribute('no_disclaimer', "");
            document.querySelector('.option__viberchat').querySelector('.disclaimer').style.display = 'none';
        }

        if (telegramDisclaimer == 1 && document.querySelector('.option__telegram') != null) {
            document.querySelector('.option__telegram').setAttribute('no_disclaimer', "");
            document.querySelector('.option__telegram').querySelector('.disclaimer').style.display = 'none';
        }

        if(is_mobile && document.querySelector('.option__linechat') != null) {
            document.querySelector('#start-line').style.display = 'block';
            document.querySelector('.option__linechat').querySelector('.qr_code_container').style.display = 'none';
        }

        if(is_mobile && document.querySelector('.option__whatsapp') != null) {
            document.querySelector('#start-whatsapp').style.display = 'block';
            document.querySelector('.option__whatsapp').querySelector('.qr_code_container').style.display = 'none';
        }

        if(is_mobile && document.querySelector('.option__viberchat') != null) {
            document.querySelector('#start-viber').style.display = 'block';
            document.querySelector('.option__viberchat').querySelector('.qr_code_container').style.display = 'none';
        }

        if(is_mobile && document.querySelector('.option__telegram') != null) {
            document.querySelector('#start-telegram').style.display = 'block';
            document.querySelector('.option__telegram').querySelector('.qr_code_container').style.display = 'none';
        }

        if(!is_mobile && document.querySelector('.option__linechat') != null) {
            document.querySelector('#start-line').style.display = 'none';
        }

        if(!is_mobile && document.querySelector('.option__whatsapp') != null) {
            document.querySelector('#start-whatsapp').style.display = 'none';
        }

        if(!is_mobile && document.querySelector('.option__viberchat') != null) {
            document.querySelector('#start-viber').style.display = 'none';
        }

        if(!is_mobile && document.querySelector('.option__telegram') != null) {
            document.querySelector('#start-telegram').style.display = 'none';
        }

        /**
         * Get value of a single key available in the QueryString
         */
        function getQueryStringValue(key) {
            return decodeURIComponent(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + encodeURIComponent(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));
        }

        var widgetOptions = document.querySelector('#widgetOptions'),
            livechatWidget = document.querySelector('#livechatWidget'),
            widget = document.querySelector('.widget'),
            options = document.querySelector('.widget-options__body'),
            liveChat = document.querySelector('#custom-livechat'),
            whatsappLink = document.querySelector('#start-whatsapp')?.href,
            lineappLink = document.querySelector('#start-line')?.href,
            viberappLink = document.querySelector('#start-viber')?.href,
            telegramAppLink = document.querySelector('#start-telegram')?.href;

        function hoverEffect(event) {
            if (this.classList.contains('widget--active')) return;
            if (event.type === "mouseenter") {
                this.classList.add('widget--hover');
            } else {
                this.classList.remove('widget--hover');
            }
        }

        function closeOptions() {
            widget.classList.remove('widget--active');
            widgetOptions.style.display = 'none';
            resetOptions();
        }

        function toggleOptions() {
            // Show Support Options
            widgetOptions.style.display = 'block';
            if (widget.classList.contains('widget--active')) {
                widgetOptions.style.display = 'none';
                resetOptions();
            }
            widget.classList.remove('widget--hover');
            widget.classList.toggle('widget--active');
        }

        function resetOptions() {
            var activeOption = document.querySelector('.option--active');
            var allOptions = document.querySelectorAll('.option');
            var getLineCookie = getCookie('linechatDisclaimer');
            var getWhatsappCookie = getCookie('whatsAppDisclaimer');
            var getViberCookie = getCookie('viberchatDisclaimer');
            var getTelegramCookie = getCookie('telegramDisclaimer');

            if (activeOption) {
                activeOption.classList.remove('option--active');
            }

            if (allOptions.length) {
                for (var i = 0; i < allOptions.length; i++) {
                    allOptions[i].style.display = 'block';
                }
            }

            if(getLineCookie == 1 && document.querySelector('.option__linechat') != null ) {
                document.querySelector('.option__linechat').querySelector('.disclaimer').style.display = 'none';
            }

            if( getWhatsappCookie == 1 && document.querySelector('.option__whatsapp') != null ) {
                document.querySelector('.option__whatsapp').querySelector('.disclaimer').style.display = 'none';
            }

            if(getViberCookie == 1 && document.querySelector('.option__viberchat') != null ) {
                document.querySelector('.option__viberchat').querySelector('.disclaimer').style.display = 'none';
            }

            if(getTelegramCookie == 1 && document.querySelector('.option__telegram') != null ) {
                document.querySelector('.option__telegram').querySelector('.disclaimer').style.display = 'none';
            }
        }

        function updateWidget(type) {
            widget.style.display = "none";
            widgetOptions.style.display = "none";
            livechatWidget.style.display = "block";
        }

        function resetWidget() {
            widget.style.display = "block";
            liveChat.style.display = "none";
            widgetOptions.style.display = "none";
            livechatWidget.style.display = "none";
        }


        if (getQueryStringValue('open') === 'livechat') {
            toggleOptions();
        }

        widget.addEventListener('mouseenter', hoverEffect);
        widget.addEventListener('mouseleave', hoverEffect);
        widget.addEventListener('click', toggleOptions);
        options.addEventListener('click', function(e) {

            // Hide other options and show active
            if (e.target.classList.contains('option') && !e.target.classList.contains('help-center')) {
                e.target.classList.add('option--active');
                var allOptions = document.querySelectorAll('.option:not(.option--active)');

                for (var i = 0; i < allOptions.length; i++) {
                    allOptions[i].style.display = 'none';
                }
            }
            // Livechat specific actions
            if (e.target.hasAttribute("no_disclaimer") && e.target.classList.contains('option__livechat')) {
                closeOptions();
                updateWidget();
                liveChat.style.display = "block";
            }
            // Whatsapp specific actions
            if (is_mobile && e.target.classList.contains('option__whatsapp') && e.target.hasAttribute("no_disclaimer")) {
                window.open(whatsappLink, "_blank");
                closeOptions();
            }
            // Linechat specific actions
            if (is_mobile && e.target.classList.contains('option__linechat') && e.target.hasAttribute("no_disclaimer")) {
                window.open(lineappLink, "_blank");
                closeOptions();
            }

            // Viber specific actions
            if (is_mobile && e.target.classList.contains('option__viberchat') && e.target.hasAttribute("no_disclaimer")) {
                window.open(viberappLink, "_blank");
                closeOptions();
            }

            // Telegram specific actions
            if (is_mobile && e.target.classList.contains('option__telegram') && e.target.hasAttribute("no_disclaimer")) {
                window.open(telegramAppLink, "_blank");
                closeOptions();
            }

            // Hide qrcode for mobile devices
            if (is_mobile && e.target.classList.contains('option__linechat')) {
                document.querySelector('.option__linechat').querySelector('.qr_code_container').style.display = 'none';
            }

            // Hide qrcode for mobile devices
            if (is_mobile && e.target.classList.contains('option__whatsapp')) {
                document.querySelector('.option__whatsapp').querySelector('.qr_code_container').style.display = 'none';
            }

            // Hide qrcode for mobile devices
            if (is_mobile && e.target.classList.contains('option__viberchat')) {
                document.querySelector('.option__viberchat').querySelector('.qr_code_container').style.display = 'none';
            }

            // Hide qrcode for mobile devices
            if (is_mobile && e.target.classList.contains('option__telegram')) {
                document.querySelector('.option__telegram').querySelector('.qr_code_container').style.display = 'none';
            }
        });

        document.querySelector('#startLiveChat')?.addEventListener('click', function(e) {
            e.preventDefault();
            closeOptions();
            updateWidget();
            liveChat.style.display = "block";
        });

        document.querySelector('#start-whatsapp')?.addEventListener('click', function(e) {
            closeOptions();
        });

        document.querySelector('#start-viber')?.addEventListener('click', function(e) {
            closeOptions();
        });

        document.querySelector('#start-telegram')?.addEventListener('click', function(e) {
            closeOptions();
        });

        document.querySelector('#widget-back-button')?.addEventListener('click', function(e) {
            e.preventDefault();
            resetWidget();
            resetOptions();
            toggleOptions();
        });

        // Show bubble widget
        document.querySelector('#new-live-chat-icon').style.display = 'block';
    })
</script>

    

<div class="container-fluid top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h1 class="ltr text-left">
                    XM App                </h1>
                <ol class="breadcrumb">
                    <li class="home"><a title="Menuju XM ID." href="https://www.xmindonesiatrade.com/id/" class="home">XM ID</a></li>
<li class="post post-page current-item">XM App</li>
                </ol>
            </div>

            <div class="col-xs-6 col-sm-3 hidden-xs hidden-sm hidden-l-sm">
                <div class="option-nav">
                                        <a href="https://www.xmindonesiatrade.com/id/support">
                        <i class="contact"></i><span>Hubungi Kami</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row top80">
        <div class="col-xs-12 col-lg-4 col-md-6 sm-text-center">
            <h2>Trading Dimana Saja, Kapan Saja</h2>
            <div class="quote-msg top30">
                <p>
                    <i class="quote-right "></i>
                    Dapatkan pengalaman trading seluler terbaik sekarang, dengan aplikasi MT4 & MT5 XM terbaru dan lebih baik.                </p>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-sm-6 col-md-12 visible-md visible-lg">
                    <ul class="checks top35">
                        <li>
                            Trading Forex, CFD pada Kripto, Komoditas, Saham dan lainnya                        </li>
                        <li>Eksekusi order secara instan dan tanpa requote</li>
                        <li>Opsi penyesuaian akun dalam aplikasi</li>
                        <li>Deposit dan penarikan melalui seluler</li>
                        <li>Grafik canggih dan terkini</li>
                        <li>Lebih dari 90 indikator trading</li>
                        <li>Berita terbaru, analisis dan riset pasar</li>
                        <li>Sesuai untuk MT4 & MT5</li>
                    </ul>
                    <div class="dis45"></div>
                    <a href="https://www.xmindonesiatrade.com/goto/profile/id" class="btn btn-solid btn-red btn-block">BUKA AKUN</a>
                    <div class="dis50"></div>
                                        <div class="icons-start iconWrapper pageXMapp-icons--light">
                        <div class="iconWrapper_container">
            <img class="appIcons appstore-img img-responsive" content="XMapp-AppStore" content-type="id" placement="bottom-end" placement-rtl="bottom-start"src="https://cloud.xm-cdn.com/static/xm/pages/xmapp/xmapp_appstore_dark.svg" alt="XMApp App Store">
                    <img class="appIcons android-img img-responsive" content="XMapp-PlayStore" content-type="id" placement="bottom-start" placement-rtl="bottom-end"src="https://cloud.xm-cdn.com/static/xm/pages/xmapp/android-badge-white.svg?v=59c8cf84b682b868c98748f724b883d9" alt="XMApp Android">
            </div>
<div hidden>
    <div>
        <div class="xm_app_barcode_container" id="XMapp-AppStore">
            <div>
                <img width="160" data-logo="https://cloud.xm-cdn.com/static/xm/pages/xmapp/apple-logo-square.svg?v=6c3e01bbe2dd20d21c26ffe17b9b57eb" data-link="https://xm.onelink.me/CYt8/c7bfb246?is_retargeting=true&affId=1215429&affIdTs=1710243676&clickId=67f82a69-d0e7-4641-9015-7f8f684305b0&clickIdTs=1710243676&refererUrl=https://www.xmindonesiatrade.com/id/id/xm-app&af_dp=xm://register?type=real" class="qrcode center-block" alt="">
            </div>
            <div class="xm_app_barcode_text">
                <p class="no_margin">Scan untuk Mengunduh <strong>Aplikasi XM</strong> di App Store</p>
                <a href="https://www.xmindonesiatrade.com/id/xm-app">Baca Lebih Lanjut</a>
            </div>
        </div>
        <div class="xm_app_barcode_container" id="XMapp-PlayStore">
            <div>
                <img width="160" data-logo="https://cloud.xm-cdn.com/static/xm/pages/xmapp/android-icon.svg?v=e3eafa19936d7826255d47e94da4fb2a" data-link="https://xm.onelink.me/CYt8/e9e13f57?is_retargeting=true&affId=1215429&affIdTs=1710243676&clickId=67f82a69-d0e7-4641-9015-7f8f684305b0&clickIdTs=1710243676&refererUrl=https://www.xmindonesiatrade.com/id/id/xm-app&af_dp=xm://register?type=real" class="qrcode center-block" alt="">
            </div>
            <div class="xm_app_barcode_text">
                <p class="no_margin">Pindai untuk mengunduh aplikasi Android kami</p>
                <a href="https://www.xmindonesiatrade.com/id/apk-app-download">Baca Lebih Lanjut</a>
            </div>
        </div>
    </div>
</div>
                        <div class="dis15"></div>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Buka akun dalam hitungan menit</p>
                    </div>
                                        <div class="dis60"></div>
                </div>
                <div class="col-sm-12 hidden-md hidden-lg text-center">
                    <div class="dis40"></div>
                    <img src="https://cloud.xm-cdn.com/static/xm/pages/xmapp/xmapp-mobile-half-crypto.png?v=a27d62d20d3b8f66e382143ae2ab0b16" class="img-responsive center-block mobile-mockup">
                    <div class="dis40"></div>
                    <a href="https://www.xmindonesiatrade.com/goto/profile/id" class="btn btn-solid btn-red btn-block">BUKA AKUN</a>
                    <!-- Phone app icons -->
                    <div class="dis25"></div>
                                        <div class="icons-center iconWrapper pageXMapp-icons--light">
                        <div class="iconWrapper_container">
            <img class="appIcons appstore-img img-responsive" content="XMapp-AppStore" content-type="id" placement="bottom-end" placement-rtl="bottom-start"src="https://cloud.xm-cdn.com/static/xm/pages/xmapp/xmapp_appstore_dark.svg" alt="XMApp App Store">
                    <img class="appIcons android-img img-responsive" content="XMapp-PlayStore" content-type="id" placement="bottom-start" placement-rtl="bottom-end"src="https://cloud.xm-cdn.com/static/xm/pages/xmapp/android-badge-white.svg?v=59c8cf84b682b868c98748f724b883d9" alt="XMApp Android">
            </div>
<div hidden>
    <div>
        <div class="xm_app_barcode_container" id="XMapp-AppStore">
            <div>
                <img width="160" data-logo="https://cloud.xm-cdn.com/static/xm/pages/xmapp/apple-logo-square.svg?v=6c3e01bbe2dd20d21c26ffe17b9b57eb" data-link="https://xm.onelink.me/CYt8/c7bfb246?is_retargeting=true&affId=1215429&affIdTs=1710243676&clickId=67f82a69-d0e7-4641-9015-7f8f684305b0&clickIdTs=1710243676&refererUrl=https://www.xmindonesiatrade.com/id/id/xm-app&af_dp=xm://register?type=real" class="qrcode center-block" alt="">
            </div>
            <div class="xm_app_barcode_text">
                <p class="no_margin">Scan untuk Mengunduh <strong>Aplikasi XM</strong> di App Store</p>
                <a href="https://www.xmindonesiatrade.com/id/xm-app">Baca Lebih Lanjut</a>
            </div>
        </div>
        <div class="xm_app_barcode_container" id="XMapp-PlayStore">
            <div>
                <img width="160" data-logo="https://cloud.xm-cdn.com/static/xm/pages/xmapp/android-icon.svg?v=e3eafa19936d7826255d47e94da4fb2a" data-link="https://xm.onelink.me/CYt8/e9e13f57?is_retargeting=true&affId=1215429&affIdTs=1710243676&clickId=67f82a69-d0e7-4641-9015-7f8f684305b0&clickIdTs=1710243676&refererUrl=https://www.xmindonesiatrade.com/id/id/xm-app&af_dp=xm://register?type=real" class="qrcode center-block" alt="">
            </div>
            <div class="xm_app_barcode_text">
                <p class="no_margin">Pindai untuk mengunduh aplikasi Android kami</p>
                <a href="https://www.xmindonesiatrade.com/id/apk-app-download">Baca Lebih Lanjut</a>
            </div>
        </div>
    </div>
</div>
                        <div class="dis15"></div>
                        <p class="text-center"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Buka akun dalam hitungan menit</p>
                    </div>
                                    </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 visible-md visible-lg pull-right">
            <img src="https://cloud.xm-cdn.com/static/xm/pages/xmapp/xmapp-mobile-cryptos.png?v=98f6081782a3538721f15c519f565689" class="img-responsive center-block mobile-mockup" style="position: relative; z-index: 1;">
            <img src="https://cloud.xm-cdn.com/static/www/pages/xmapp/xmapp-mobile-candlesticks.png?v=dfcd145e5cdb3a5d8d5d9493790263b7" class="img-responsive center-block xm-app-candlesticks">
        </div>
    </div>
</div>

<!-- Interactive App component -->
<div class="xmapp-interactive visible-lg" style="background: url('https://cloud.xm-cdn.com/static/www/pages/xmapp/xmapp-candlesticks.png?v=e337a432ac25094d78dac7357be62e6b') #f1f1f1;">
    <div class="container">
        <div class="dis90"></div>
        <h2 class="xmapp-title text-center">
            Lebih dari 1.000 instrumen, termasuk Forex, CFD Kripto, Saham, Indeks, Logam dan Energi        </h2>
        <div class="dis50"></div>
        <div class="xmapp-interactive__stage">

            <img class="img-responsive center-block xm-app-mockup" src="https://cloud.xm-cdn.com/static/www/pages/xmapp/interactive-app-promo.png?v=57a1fb27fd2451f85083f60d2e8e7026" alt="mockup">

            <div class="waypoint waypoint--manage waypoint--visible" data-message="manage">
                <div class="waypoint-circle"></div>
                <div class="waypoint__line--dashed"></div>
                <div class="waypoint__line"></div>
                <div class="waypoint-circle"></div>
            </div>

            <div class="waypoint__message manage">
                <h3><strong>Kelola</strong> Akun Anda</h3>
                <div class="dis5"></div>
                <p class="no_margin">Sesuaikan pengaturan Anda dan danai akun Anda, semua dalam aplikasi</p>
            </div>

            <div class="waypoint waypoint--deposit" data-message="deposit">
                <div class="waypoint-circle"></div>
                <div class="waypoint__line--dashed"></div>
                <div class="waypoint__line"></div>
                <div class="waypoint-circle"></div>
            </div>

            <div class="waypoint__message deposit">
                <h3><strong>Deposit</strong> dan <strong>Penarikan</strong></h3>
                <div class="dis5"></div>
                <p class="no_margin">Kelola dana Anda tanpa harus meninggalkan aplikasi</p>
            </div>

            <div class="waypoint waypoint--tap" data-message="tap">
                <div class="waypoint-circle"></div>
                <div class="waypoint__line--dashed"></div>
                <div class="waypoint__line"></div>
                <div class="waypoint-circle"></div>
            </div>

            <div class="waypoint__message tap">
                <h3>Trading <strong>Satu Klik</strong></h3>
                <div class="dis5"></div>
                <p class="no_margin">Tempatkan posisi trading Anda dengan satu kali klik dengan mengaktifkan order satu klik</p>
            </div>

            <div class="waypoint waypoint--discover" data-message="discover">
                <div class="waypoint-circle"></div>
                <div class="waypoint__line--dashed"></div>
                <div class="waypoint__line"></div>
                <div class="waypoint-circle"></div>
            </div>

            <div class="waypoint__message discover">
                <h3><strong>Temukan</strong> Trading Anda Selanjutnya</h3>
                <div class="dis5"></div>
                <p class="no_margin">Manfaatkan grafik lanjutan dan lebih dari 90 indikator trading</p>
            </div>

        </div>
    </div>
</div>
<!-- How to download XM APP -->
<div class="container text-center">
    <div class="dis85"></div>
    <div class="row">
        <div class="col-md-8 center-block">
            <h2 class="no_margin">Cara Mengunduh Aplikasi MT4 & MT5 XM</h2>
            <div class="dis25"></div>
            <p>Jika Anda mengunduh aplikasi kami untuk pertama kalinya, ikuti proses tiga langkah mudah untuk memulai. Jika Anda sudah menginstal versi aplikasi kami sebelumnya, silakan memperbarui ke versi terbaru.<br><strong>Mulai trading dimana saja sekarang!</strong></p>
        </div>
    </div>
    <div class="dis70"></div>

    <div class="row grid grid--sm-nowrap">
        <div class="grid__list grid__list--tickets">
            <div class="grid__item">
                <i class="xmFont fa-kit fa-xm-download-circle"></i>
                <div class="dis20"></div>
                <p><strong>Langkah 1</strong></p>
                <div class="dis10"></div>
                <p class="text-center">Cari aplikasi XM pada <strong>app store di handphone</strong> Anda, atau mengikuti <strong>link di bawah ini</strong></p>
            </div>
        </div>

        <div class="grid__list grid__list--tickets">
            <div class="grid__item">
                <i class="xmFont fa-kit fa-xm-install-phone"></i>
                <div class="dis20"></div>
                <p><strong>Langkah 2</strong></p>
                <div class="dis10"></div>
                <p class="text-center">Jika Anda adalah klien lama, <strong>masuk dengan keterangan login Anda</strong>. Jika Anda adalah klien baru di XM, <strong>daftar akun dari aplikasi</strong></p>
            </div>
        </div>

        <div class="grid__list grid__list--tickets">
            <div class="grid__item">
                <i class="xmFont fa-kit fa-xm-user-check"></i>
                <div class="dis20"></div>
                <p><strong>Langkah 3</strong></p>
                <div class="dis10"></div>
                <p class="text-center"><strong>Selesaikan proses</strong> untuk mengaktifkan dan menggunakan akun Anda. Setelah <strong>terverifikasi dan masuk</strong>, Anda siap untuk mulai trading!</p>
            </div>
        </div>
    </div>

</div>

<!-- Phone app icons -->
    <div class="dis65 visible-lg"></div>
    <div class="dis50 hidden-lg"></div>
    <div class="icons-center iconWrapper pageXMapp-icons--light">
        <div class="iconWrapper_container">
            <img class="appIcons appstore-img img-responsive" content="XMapp-AppStore" content-type="id" placement="bottom-end" placement-rtl="bottom-start"src="https://cloud.xm-cdn.com/static/xm/pages/xmapp/xmapp_appstore_dark.svg" alt="XMApp App Store">
                    <img class="appIcons android-img img-responsive" content="XMapp-PlayStore" content-type="id" placement="bottom-start" placement-rtl="bottom-end"src="https://cloud.xm-cdn.com/static/xm/pages/xmapp/android-badge-white.svg?v=59c8cf84b682b868c98748f724b883d9" alt="XMApp Android">
            </div>
<div hidden>
    <div>
        <div class="xm_app_barcode_container" id="XMapp-AppStore">
            <div>
                <img width="160" data-logo="https://cloud.xm-cdn.com/static/xm/pages/xmapp/apple-logo-square.svg?v=6c3e01bbe2dd20d21c26ffe17b9b57eb" data-link="https://xm.onelink.me/CYt8/c7bfb246?is_retargeting=true&affId=1215429&affIdTs=1710243676&clickId=67f82a69-d0e7-4641-9015-7f8f684305b0&clickIdTs=1710243676&refererUrl=https://www.xmindonesiatrade.com/id/id/xm-app&af_dp=xm://register?type=real" class="qrcode center-block" alt="">
            </div>
            <div class="xm_app_barcode_text">
                <p class="no_margin">Scan untuk Mengunduh <strong>Aplikasi XM</strong> di App Store</p>
                <a href="https://www.xmindonesiatrade.com/id/xm-app">Baca Lebih Lanjut</a>
            </div>
        </div>
        <div class="xm_app_barcode_container" id="XMapp-PlayStore">
            <div>
                <img width="160" data-logo="https://cloud.xm-cdn.com/static/xm/pages/xmapp/android-icon.svg?v=e3eafa19936d7826255d47e94da4fb2a" data-link="https://xm.onelink.me/CYt8/e9e13f57?is_retargeting=true&affId=1215429&affIdTs=1710243676&clickId=67f82a69-d0e7-4641-9015-7f8f684305b0&clickIdTs=1710243676&refererUrl=https://www.xmindonesiatrade.com/id/id/xm-app&af_dp=xm://register?type=real" class="qrcode center-block" alt="">
            </div>
            <div class="xm_app_barcode_text">
                <p class="no_margin">Pindai untuk mengunduh aplikasi Android kami</p>
                <a href="https://www.xmindonesiatrade.com/id/apk-app-download">Baca Lebih Lanjut</a>
            </div>
        </div>
    </div>
</div>
        <div class="dis15"></div>
        <p class="text-center"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Buka akun dalam hitungan menit</p>
    </div>

<!-- Faqs -->
<div class="container top80">
    <div class="row">
        <div class="col-md-6">
            <h2>FAQ</h2>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div id="accordionText" class="hidden">Memperluas semua|Tutup semua</div>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btnAccordion pull-right" data-parent="#accordion1">
                        Memperluas semua                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row top20">
        <div class="col-md-12">
            <div class="panel-group" id="accordion1">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Bagaimana saya dapat mengakses Aplikasi XM?</h4>
                        <i class="fa fa-angle-down pull-right"></i>
                    </div>
                    <div id="a1collapse1" class="panel-collapse collapse">
                        <div class="panel-body gray">
                                                            <p>Jika Anda memiliki perangkat iOS, Anda dapat mengunduh Aplikasi XM di <a href="https://xm.onelink.me/CYt8/c7bfb246?is_retargeting=true&affId=1215429&affIdTs=1710243676&clickId=67f82a69-d0e7-4641-9015-7f8f684305b0&clickIdTs=1710243676&refererUrl=https://www.xmindonesiatrade.com/id/id/xm-app&af_dp=xm://register?type=real">Apple App store</a>. Jika Anda memiliki perangkat Android, silakan <a href="https://www.xmindonesiatrade.com/id/apk-app-download">klik disini</a>, cek versi Android mana yang dijalankan perangkat Anda dan ikuti petunjuk yang relevan. Setelah mengunduh dan menginstal aplikasi, Anda dapat membuka akun, melakukan deposit dan segera memulai trading. Anda juga dapat membuka akun Demo jika Anda ingin berlatih.                                                    </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Dapatkah saya menggunakan Aplikasi XM untuk membuka akun MT4 atau MT5?</h4>
                        <i class="fa fa-angle-down pull-right"></i>
                    </div>
                    <div id="a1collapse1" class="panel-collapse collapse">
                        <div class="panel-body gray">
                            <p>Aplikasi XM bisa digunakan untuk akun MT4 dan MT5. Pengguna baru dapat membuka akun MT4 atau MT5 melalui Aplikasi XM, sedangkan klien lama dapat menggunakan aplikasi untuk membuka akun MT4 dan MT5 tambahan. Setiap akun yang dibuka melalui Aplikasi XM juga dapat digunakan di platform MT4 dan MT5.                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Dapatkah saya menggunakan nomor akun MT4 atau MT5 yang sudah ada dengan Aplikasi XM?</h4>
                        <i class="fa fa-angle-down pull-right"></i>
                    </div>
                    <div id="a1collapse1" class="panel-collapse collapse">
                        <div class="panel-body gray">
                            <p>Ya, Anda dapat masuk dengan akun MT4 atau MT5 yang sudah ada dan menggunakan Aplikasi XM untuk trading, serta mendanai dan mengelola akun.                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Bagaimana agar akun MT4 atau MT5 saya terverifikasi?</h4>
                        <i class="fa fa-angle-down pull-right"></i>
                    </div>
                    <div id="a1collapse1" class="panel-collapse collapse">
                        <div class="panel-body gray">
                            <p>Jika Anda adalah klien lama dengan akun MT4 atau MT5 yang sudah terverifikasi, Anda dapat membuka akun MT4 atau MT5 tambahan melalui Aplikasi XM tanpa harus mengirimkan kembali dokumen verifikasi Anda. Namun, jika Anda klien baru, Anda dapat memverifikasi akun MT4 atau MT5 Anda secara langsung melalui Aplikasi XM dengan memberikan dokumen verifikasi yang diperlukan kepada kami (misalnya, Bukti Identitas dan Bukti Alamat).                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Instrumen apa yang dapat saya tradingkan di Aplikasi XM?</h4>
                        <i class="fa fa-angle-down pull-right"></i>
                    </div>
                    <div id="a1collapse1" class="panel-collapse collapse">
                        <div class="panel-body gray">
                            <p>
                                Pada Aplikasi XM, Anda dapat trading semua instrumen yang tersedia di XM termasuk CFD Kripto, CFD Saham, CFD Indeks Saham, Forex, CFD pada Logam Mulia dan CFD pada Energi.                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Dapatkah saya menggunakan Aplikasi XM dengan platform MT4 atau MT5?</h4>
                        <i class="fa fa-angle-down pull-right"></i>
                    </div>
                    <div id="a1collapse1" class="panel-collapse collapse">
                        <div class="panel-body gray">
                            <p>Selama Anda memiliki akun MT4 atau MT5, Anda dapat menggunakan Aplikasi XM atau platform MT4/MT5. Semua trading yang dilakukan melalui Aplikasi XM akan tertera pada platform MT4 atau MT5 Anda dan sebaliknya.                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Dapatkah saya menggunakan Aplikasi XM untuk melakukan deposit?</h4>
                        <i class="fa fa-angle-down pull-right"></i>
                    </div>
                    <div id="a1collapse1" class="panel-collapse collapse">
                        <div class="panel-body gray">
                            <p>Anda dapat menggunakan Aplikasi XM untuk mengelola dana di akun Anda. Anda dapat melakukan deposit, penarikan dan mentransfer dana ke akun trading Anda melalui Aplikasi XM.                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Platform Icons try include it from mt5-footer-->
<div class="container metatrader top80 hidden-xs hidden-sm hidden-l-sm">
    <div class="row">
        <div class="col-md-12">
            <h2><i class="xmFont fa-kit fa-xm-mobile-devices sm red"></i> Juga tersedia untuk</h2>
        </div>
    </div>
    <div class="row metatrader-row metatrader-row--xmapp text-center">
        <div class="feature-item8 feature-item--xmapp noborder">
                            <a class="device " href="https://www.xmindonesiatrade.com/id/xm-app">
                    <i class="xmFont fa-kit fa-xm-app"></i>
                    <p class="text-center top20">
                        APLIKASI XM                    </p>
                </a>
                    </div>
                <div class="feature-item8 feature-item--xmapp noborder">
            <a class="device " href="https://www.xmindonesiatrade.com/id/mt4">
                <i class="xmFont fa-kit fa-xm-pc"></i>
                <p class="text-center top20">
                    MT4 untuk Windows                </p>
            </a>
        </div>
        <div class="feature-item8 feature-item--xmapp noborder">
            <a class="device " href="https://www.xmindonesiatrade.com/id/metatrader-mac">
                <i class="xmFont fa-kit fa-xm-imac"></i>
                <p class="text-center top20">
                    MT4 untuk Mac                </p>
            </a>
        </div>
        <div class="feature-item8 feature-item--xmapp noborder">
            <a class="device " href="https://www.xmindonesiatrade.com/id/multiterminal">
                <i class="xmFont fa-kit fa-xm-pc"></i>
                <p class="text-center top20">
                    MT4 Multiterminal                </p>
            </a>
        </div>
        <div class="feature-item8 feature-item--xmapp noborder">
            <a class="device " href="https://www.xmindonesiatrade.com/id/webtrader">
                <i class="xmFont fa-kit fa-xm-laptop"></i>
                <p class="text-center top20">
                    MT4 WebTrader                </p>
            </a>
        </div>
        <div class="feature-item8 feature-item--xmapp noborder">
            <a class="device " href="https://www.xmindonesiatrade.com/id/android">
                <i class="xmFont fa-kit fa-xm-android-phone"></i>
                <p class="text-center top20">
                    MT4 untuk Android                </p>
            </a>
        </div>
        <div class="feature-item8 feature-item--xmapp noborder">
            <a class="device " href="https://www.xmindonesiatrade.com/id/android-tablet">
                <i class="xmFont fa-kit fa-xm-android-tablet"></i>
                <p class="text-center top20">
                    MT4 untuk Android                </p>
            </a>
        </div>
                <div class="feature-item8 feature-item--xmapp noborder">
            <a class="device " href="https://www.xmindonesiatrade.com/id/mt5">
                <i class="xmFont fa-kit fa-xm-pc"></i>
                <p class="text-center top20">
                    MT5 untuk PC                </p>
            </a>
        </div>
        <div class="feature-item8 feature-item--xmapp noborder">
            <a class="device " href="https://www.xmindonesiatrade.com/id/mt5-mac">
                <i class="xmFont fa-kit fa-xm-imac"></i>
                <p class="text-center top20">
                    MT5 untuk Mac                </p>
            </a>
        </div>
        <div class="feature-item8 feature-item--xmapp noborder">
            <a class="device " href="https://www.xmindonesiatrade.com/id/mt5-webtrader">
                <i class="xmFont fa-kit fa-xm-laptop"></i>
                <p class="text-center top20">
                    MT5 WebTrader                </p>
            </a>
        </div>
        <div class="feature-item8 feature-item--xmapp noborder">
            <a class="device " href="https://www.xmindonesiatrade.com/id/mt5-android">
                <i class="xmFont fa-kit fa-xm-android-phone"></i>
                <p class="text-center top20">
                    MT5 untuk Android                </p>
            </a>
        </div>
        <div class="feature-item8 feature-item--xmapp noborder">
            <a class="device " href="https://www.xmindonesiatrade.com/id/mt5-android-tablet">
                <i class="xmFont fa-kit fa-xm-android-tablet"></i>
                <p class="text-center top20">
                    MT5 untuk Tablet Android                </p>
            </a>
        </div>
    </div>

    </div>


        <div class="dis70"></div>
    
			<footer>
                <nav class="hidden-xs hidden-sm">
    <div class="container capitalize_text">
    <div class="row">
        <div class="col-sm-2">
        <ul>
            <li>
                <strong>Akun Perdagangan</strong>
                <div class="dis5"></div>
            </li>
                            <li>
                    <a href="https://www.xmindonesiatrade.com/id/account-types">
                        Tipe Akun Trading                    </a>
                </li>
                                        <li class="menu-ultra-low">
                    <a href="https://www.xmindonesiatrade.com/id/account-types/ultra-low">
                        Akun Ultra Low                    </a>
                </li>
                                        <li class="menu-islamic">
                    <a href="https://www.xmindonesiatrade.com/id/islamic">
                        Akun Islami                    </a>
                </li>
                    </ul>
        </div>
        <div class="col-sm-2">
            <ul>
            <li>
                <strong>Instrumen Perdagangan</strong>
                <div class="dis5"></div>
            </li>
            <li>
                <a href="https://www.xmindonesiatrade.com/id/forex-trading">
                    Trading Forex                </a>
            </li>
                            <li>
                    <a href="https://www.xmindonesiatrade.com/id/cryptocurrencies">
                            Mata uang Kripto                    </a>
                </li>
                                        <li>
                    <a href="https://www.xmindonesiatrade.com/id/stocks">
                        CFD Saham                    </a>
                </li>
                                        <li class="menu-turbo-stocks">
                    <a href="https://www.xmindonesiatrade.com/id/turbo-stocks">
                        Saham Turbo                    </a>
                </li>
                                        <li>
                    <a href="https://www.xmindonesiatrade.com/id/commodities">
                        Komoditas                    </a>
                </li>
                <li>
                    <a href="https://www.xmindonesiatrade.com/id/equity-indices">
                        Indeks Ekuitas                    </a>
                </li>
                <li>
                    <a href="https://www.xmindonesiatrade.com/id/precious-metals">
                        Logam Mulia                    </a>
                </li>
                <li>
                        <a href="https://www.xmindonesiatrade.com/id/energies">
                            Energi                        </a>
                </li>
                    </ul>
        </div>
        <div class="col-sm-2">
            <ul>
            <li>
                <strong>Kondisi</strong>
                <div class="dis5"></div>                
            </li>
            <li>
                <a href="https://www.xmindonesiatrade.com/id/execution-policy">
                    Kebijakan Eksekusi                </a>
            </li>
            <li>
                <a href="https://www.xmindonesiatrade.com/id/spreads">
                    Spread                </a>
            </li>
                            <li>
                    <a href="https://www.xmindonesiatrade.com/id/margin-and-leverage">
                        Margin dan Leverage                    </a>
                </li>
                        <li>
                <a href="https://www.xmindonesiatrade.com/id/overnight-positions">
                    Posisi menginap                </a>
            </li>
            <li>
                <a href="https://www.xmindonesiatrade.com/id/trading-hours">
                    Jam Perdagangan                </a>
            </li>
        </ul>
        </div>
                    <div class="col-sm-2">
                <ul>
                    <li>
                        <strong>Platform MT4</strong>
                        <div class="dis5"></div>
                    </li>
                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/mt4">
                            MT4 untuk PC                        </a>
                    </li>
                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/metatrader-mac">
                            MT4 untuk Mac                        </a>
                    </li>

                                            <li>
                            <a href="https://www.xmindonesiatrade.com/id/multiterminal">
                                MT4 Multiterminal                            </a>
                        </li>
                    
                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/mt4-webtrader">
                            MT4 WebTrader                        </a>
                    </li>
                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/ipad">
                            MT4 untuk iPad                        </a>
                    </li>
                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/iphone">
                            MT4 untuk iPhone                        </a>
                    </li>
                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/android">
                            MT4 untuk Android                        </a>
                    </li>
                    <li>
                        <a href="https://www.xmindonesiatrade.com/id/android-tablet">
                            MT4 untuk Android Tablet                        </a>
                    </li>
                </ul>
            </div>
                <div class="col-sm-2">
            <ul>
            <li>
                <strong>Platform MT5</strong>
                <div class="dis5"></div>                
            </li>
            <li>
                <a href="https://www.xmindonesiatrade.com/id/mt5">
                    MT5 untuk PC                </a>
            </li>
            <li>
                <a href="https://www.xmindonesiatrade.com/id/mt5-mac">
                    MT5 untuk Mac                </a>
            </li>
            <li>
                <a href="https://www.xmindonesiatrade.com/id/mt5-webtrader">
                    MT5 WebTrader                </a>
            </li>
            <!--<li>
                <a href="https://www.xmindonesiatrade.com/id/xm-webtrader">
                    XM WebTrader                </a>
            </li>-->
            <li>
                <a href="https://www.xmindonesiatrade.com/id/mt5-ipad">
                    MT5 untuk iPad                </a>
            </li>
            <li>
                <a href="https://www.xmindonesiatrade.com/id/mt5-iphone">
                    MT5 untuk iPhone                </a>
            </li>
            <li>
                <a href="https://www.xmindonesiatrade.com/id/mt5-android">
                    MT5 untuk Android                </a>
            </li>
            <li>
                <a href="https://www.xmindonesiatrade.com/id/mt5-android-tablet">
                    MT5 untuk Tablet Android                </a>
            </li>
        </ul>
        </div>                                
        <div class="col-sm-2">
        <ul>
            <li>
                <strong>Perihal XM</strong>
                <div class="dis5"></div>                
            </li>

                            <li>
                    <a href="https://www.xmindonesiatrade.com/id/xm-awards">
                        Penghargaan XM                    </a>
                </li>
            
            <li>
                <a href="https://www.xmindonesiatrade.com/id/support">
                    Bantuan                </a>
            </li>

            <li>
                <a href="https://www.xmindonesiatrade.com/id/help-center/home">
                    Pusat Bantuan                </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="dis30"></div>
    </div>
</nav><!-- Footer -->
    <div class="xm_app_footer hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="xm_app_footer__container">
                        <img class="xm_app_footer__icon img-responsive" src="https://cloud.xm-cdn.com/static/xm/pages/xmapp/footer-mobile-app-comp.webp?v=1ca2ca1317f35907eb866b950c3e7ee3" alt="XM App Footer" width="187">
                        <div class="xm_app_footer__text-icon">
                            <div class="xm_app_footer__text">
                                <h2>Lakukan Trading Anda Dimana Saja</h2>
                                <p>Dapatkan Akses Instan ke Pasar Global dengan <strong>Aplikasi MT4 & MT5 XM</strong>.</p>
                            </div>
                            <div class="iconWrapper--light text-center">
                                <div class="iconWrapper_container">
            <img class="appIcons appstore-img img-responsive" content="XMapp-AppStore" content-type="id" placement="bottom-end" placement-rtl="bottom-start"src="https://cloud.xm-cdn.com/static/xm/pages/xmapp/xmapp_appstore_dark.svg" alt="XMApp App Store">
                    <img class="appIcons android-img img-responsive" content="XMapp-PlayStore" content-type="id" placement="bottom-start" placement-rtl="bottom-end"src="https://cloud.xm-cdn.com/static/xm/pages/xmapp/android-badge-white.svg?v=59c8cf84b682b868c98748f724b883d9" alt="XMApp Android">
            </div>
<div hidden>
    <div>
        <div class="xm_app_barcode_container" id="XMapp-AppStore">
            <div>
                <img width="160" data-logo="https://cloud.xm-cdn.com/static/xm/pages/xmapp/apple-logo-square.svg?v=6c3e01bbe2dd20d21c26ffe17b9b57eb" data-link="https://xm.onelink.me/CYt8/c7bfb246?is_retargeting=true&affId=1215429&affIdTs=1710243676&clickId=67f82a69-d0e7-4641-9015-7f8f684305b0&clickIdTs=1710243676&refererUrl=https://www.xmindonesiatrade.com/id/id/xm-app&af_dp=xm://register?type=real" class="qrcode center-block" alt="">
            </div>
            <div class="xm_app_barcode_text">
                <p class="no_margin">Scan untuk Mengunduh <strong>Aplikasi XM</strong> di App Store</p>
                <a href="https://www.xmindonesiatrade.com/id/xm-app">Baca Lebih Lanjut</a>
            </div>
        </div>
        <div class="xm_app_barcode_container" id="XMapp-PlayStore">
            <div>
                <img width="160" data-logo="https://cloud.xm-cdn.com/static/xm/pages/xmapp/android-icon.svg?v=e3eafa19936d7826255d47e94da4fb2a" data-link="https://xm.onelink.me/CYt8/e9e13f57?is_retargeting=true&affId=1215429&affIdTs=1710243676&clickId=67f82a69-d0e7-4641-9015-7f8f684305b0&clickIdTs=1710243676&refererUrl=https://www.xmindonesiatrade.com/id/id/xm-app&af_dp=xm://register?type=real" class="qrcode center-block" alt="">
            </div>
            <div class="xm_app_barcode_text">
                <p class="no_margin">Pindai untuk mengunduh aplikasi Android kami</p>
                <a href="https://www.xmindonesiatrade.com/id/apk-app-download">Baca Lebih Lanjut</a>
            </div>
        </div>
    </div>
</div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

<div class="container footer-partners">
    <div class="row">
        <div class="col-md-12">
            <div class="footer-partners__wrapper hidden-xs hidden-sm">
                
    <div class="footer-partners__logos">
        <div class="footer-partners__logo-item">
            <img src="https://cloud.xm-cdn.com/static/xm/common/logos/metaquotes.webp" width="136" height="26" alt="metaquotes">
        </div>

        <div class="footer-partners__logo-item">
            <img src="https://cloud.xm-cdn.com/static/xm/common/logos/verisign.webp" width="131" height="38" alt="verisign">
        </div>

        <div class="footer-partners__logo-item">
            <img src="https://cloud.xm-cdn.com/static/xm/common/logos/unicef-cfc.webp" width="110" height="40" alt="unicef">
        </div>

        
                <div class="footer-partners__logo-item">
            <img src="https://cloud.xm-cdn.com/static/xm/common/logos/iip-platinum.webp" width="225" height="39" alt="investors">
        </div>
        
                <div class="footer-partners__logo-item">
            <img src="https://cloud.xm-cdn.com/static/xm/pages/careers/gptw-cy-2023.webp" height="39" alt="Great Place to Work">
            <img src="https://cloud.xm-cdn.com/static/xm/pages/careers/gptw-gr-2023.webp" height="39" alt="Great Place to Work">
        </div>
        
    </div>


    <div class="footer-partners__social">
        <div class="social-icons__svg ID">
                                                    <span>Follow kami:</span>
                                        <a class="facebook__svg"  href="https://www.xmindonesiatrade.com/goto/facebook" rel="nofollow noopener noreferrer" target="_blank" >
                        <img src="https://cloud.xm-cdn.com/static/xm/common/social/facebook-f.svg" alt="Facebook Icon">
                    </a>
                                        <a class="twitter__svg" href="https://www.xmindonesiatrade.com/goto/twitter" rel="nofollow noopener noreferrer" target="_blank" >
                        <img src="https://cloud.xm-cdn.com/static/xm/common/social/x-twitter.svg" alt="Twitter Icon">
                    </a>
                                        <a class="youtube__svg" href="https://www.xmindonesiatrade.com/goto/youtube" rel="nofollow noopener noreferrer" target="_blank" >
                        <img src="https://cloud.xm-cdn.com/static/xm/common/social/youtube.svg" alt="Youtube Icon">
                    </a>

                    
                    <a class="instagram__svg" href="https://www.xmindonesiatrade.com/goto/instagram" rel="nofollow noopener noreferrer" target="_blank" >
                        <img src="https://cloud.xm-cdn.com/static/xm/common/social/instagram.svg" alt="Instagram Icon">
                    </a>

                    <a class="linkedin__svg" href="https://www.xmindonesiatrade.com/goto/linkedin" rel="nofollow noopener noreferrer" target="_blank" >
                        <img src="https://cloud.xm-cdn.com/static/xm/common/social/linkedin-in.svg" alt="Linkedin Icon">
                    </a>
                                
                
                
                
                                                    <a class="tiktok__svg" href= "https://www.xmindonesiatrade.com/goto/tiktok" rel="nofollow noopener noreferrer" target="_blank" >
                        <img src="https://cloud.xm-cdn.com/static/xm/common/social/tiktok.svg" alt="Tiktok Icon">
                    </a>
                       
                                    
                                                                        <a class="telegram__svg" href="https://www.xmindonesiatrade.com/goto/telegram" rel="nofollow noopener noreferrer" target="_blank" >
                                <img src="https://cloud.xm-cdn.com/static/xm/common/social/telegram.svg" alt="Telegram Icon">
                            </a>
                                                                
                                                                </div>
    </div>
  
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <div class="dis20"></div>
                    <p><span class="case-breaker"> </span> <a href="https://www.xmindonesiatrade.com/id/privacy-policy">Kebijakan Privasi</a> | <a href="https://www.xmindonesiatrade.com/id/cookie-policy">Kebijakan Cookie</a> | <a href="https://www.xmindonesiatrade.com/id/vulnerability-disclosure-policy">Kebijakan Kerentanan</a> | <a href="https://cloud.xm-cdn.com/static/pdf/System-PDFs/XMGlobal-Client-Agreement-Terms-and-Conditions-of-Business.pdf?v=22647d4005144658126c7c14d0cc76f3" target="_blank">Syarat dan Ketentuan</a></p>
                </div>
                <div class="hidden-xs hidden-sm">
                    <div class="col-sm-3 col-md-3">
    <img src="https://cloud.xm-cdn.com/static/xm/common/footer/tp-logo-hp-footer.webp" alt="trading-point" class="pull-right" width="182" height="60">
</div>                </div>
            </div>
        </div>
    </div>
    <hr class="hidden-xs hidden-sm">

    
    <div class="row">
        <div class="col-md-12 top20 bottom20">
                                <p><strong>Hukum:</strong> Situs web ini dioperasikan oleh XM Global Limited dengan alamat terdaftar di Suite 101, 63 Eve Street, Kota Belize, Belize.</p>
                                    <p>XM Global Limited terdaftar di Komisi Jasa Keuangan (FSC) berdasarkan Undang-Undang Industri Sekuritas 2021 (nomor lisensi 000261/397) dan Trading Point of Financial Instruments Limited yang diotorisasi dan diregulasi oleh Komisi Sekuritas dan Bursa Siprus (CySEC) (nomor lisensi 120/10) merupakan anggota dari Trading Point Group.</p>
                            <p id="risk-warning">
                <strong>Peringatan Risiko:</strong> Layanan kami melibatkan risiko signifikan dan dapat menyebabkan hilangnya seluruh modal yang Anda investasikan.Silakan baca <a href="https://cloud.xm-cdn.com/static/pdf/System-PDFs/XMGlobal-Risk-Disclosures-for-Financial-Instruments.pdf?v=6294d0191b6f1461fc70859d40df1a71" target="_blank">Pengungkapan Penuh kami</a>.            </p>

            
            <p><strong>Wilayah Terbatas:</strong> XM Global Limited tidak menyediakan layanan untuk warga negara di beberapa negara tertentu, seperti Amerika Serikat, Kanada, Israel dan Iran.</p>
             
                <p>XM tidak mengarahkan situs web dan layanannya kepada individu yang berada di negara dimana penggunaan situs web dan layanannya dilarang oleh hukum atau regulasi setempat. Ketika mengakses situs web ini dari negara dimana penggunaannya mungkin dilarang atau diperbolehkan, pengguna bertanggung jawab untuk memastikan bahwa setiap penggunaan situs web atau layanan mematuhi hukum atau regulasi setempat. XM tidak menegaskan bahwa informasi di situs web sesuai untuk semua yurisdiksi.</p>
                        
                    </div>
    </div>
</div>
			</footer>
        </div>
    </div>
    
    <div class="modal fade cookie-modal" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="cookieModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="cookie-modal__defaultBlock">
                <div class="modal-header">
                    <div class="dis35"></div>
                                            <img width="114" src="https://cloud.xm-cdn.com/static/xm/common/logos/XM_logo_black_2021.svg" alt="xm logo">
                                         <div class="dis20"></div>
                    <h4>Kami menghargai privasi Anda</h4>
                    <div class="dis25"></div>
                </div>
                <div class="modal-body">
                    Kami menggunakan cookie untuk memastikan pengalaman penjelajahan terbaik. Beberapa diperlukan untuk fitur penting seperti sesi login, sementara yang lain membantu kami menyediakan konten dan pemasaran yang lebih disesuaikan dengan kebutuhan Anda. Menerima semua cookie memungkinkan kami untuk meningkatkan pengalaman Anda lebih jauh. Mohon diperhatikan bahwa beberapa di antaranya mungkin cookie pihak ketiga. Anda dapat mengubah preferensi cookie Anda dengan mengklik tombol di bawah ini.                    Untuk informasi selanjutnya, silakan lihat <a href="https://www.xmindonesiatrade.com/id/cookie-policy">Kebijakan Cookie</a> kami.                </div>
                <div class="modal-footer">
                    <div class="dis30"></div>
                    <div class="row">
                        <div class="col-sm-5">
                            <button id="js-changeModalSettings" class="btn btn-block btn-gray-o btn-solid gtm-openCookieSettings">MODIFIKASI PREFERENSI</button>
                        </div>
                        <div class="dis10 visible-xs"></div>
                        <div class="col-sm-5">
                            <button class="btn btn-block btn-red btn-solid js-acceptDefaultCookie gtm-acceptDefaultCookieFirstVisit" data-dismiss="modal" aria-label="Close">TERIMA SEMUA</button>
                        </div>
                    </div>
                    <div class="dis40"></div>
                </div>
            </div>
            <div class="cookie-modal__settingBlock" style="display: none;">
                <div class="modal-header">
                    <i class="xmFont fa-kit fa-xm-check-shield red xmf-sm"></i>
                    <h4>Pengaturan cookies Anda</h4>
                </div>
                <div class="modal-body">
                        <div>
                          <!-- Nav tabs -->
                            <ul class="cookie-modalTabs" role="tablist">
                                                                    <li role="presentation" class="active"><a href="#whatAreCookies"
                                                                              aria-controls="whatAreCookies" role="tab"
                                                                              data-toggle="tab">Apakah itu Cookie ?</a>
                                    </li>
                                    <li role="presentation"><a href="#whyCookies" aria-controls="whyCookies" role="tab"
                                                               data-toggle="tab">Apa gunanya cookies ?</a>
                                    </li>
                                    <li role="presentation"><a href="#changeSettings" class="gtm-showCookieSettingsTab"
                                                               aria-controls="changeSettings" role="tab"
                                                               data-toggle="tab">Atur Perubahan</a>
                                    </li>
                                                            </ul>

                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="whatAreCookies">
                                <div class="dis25"></div>
                                <p><strong>Apakah itu Cookie ?</strong></p>
                                <p>Cookie adalah berkas data kecil. Ketika Anda mengunjungi situs web, situs web ini mengirimkan cookie ke komputer Anda. Komputer Anda menyimpannya dalam berkas yang terletak di dalam browser web Anda.</p>

                                <p>Cookie tidak mentransfer virus atau malware ke komputer Anda. Karena data dalam cookie tidak berubah ketika ia bolak-balik, juga tidak memiliki cara untuk memengaruhi cara komputer Anda berjalan, namun, mereka bertindak seperti log (yaitu merekam aktivitas pengguna dan mengingat informasi lengkap) dan mereka diperbarui setiap kali Anda mengunjungi situs web.</p>

                                <p>Kami akan mendapat informasi tentang Anda dengan mengakses cookies yang dikirimkan oleh situs kami. Beberap tipe cookies menulusuri beragam aktifitas. Sebagai contoh, session cookies digunakan ketika seseorang secara aktif menjelajah suatu situs. Seketika Anda meninggalkan situs, session cookie akan hilang.</p>

                                <div class="dis15"></div>
                                <div class="row text-center">
                                    <div class="col-md-6">
                                        <button class="btn btn-red btn-solid btn-block js-acceptDefaultCookie gtm-acceptDefaultCookiesCloseModal" data-dismiss="modal" aria-label="Close">AKTIFKAN SEMUA COOKIES DAN TUTUP</button>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="whyCookies">
                                <div class="dis25"></div>
                                <p><strong>Apa gunanya cookies ?</strong></p>
                                <p>Kami menggunakan cookie fungsional untuk menganalisis bagaimana pengunjung menggunakan situs web kami, serta melacak dan meningkatkan kinerja dan fungsi situs web kami. Ini memungkinkan kami untuk memberikan pengalaman pelanggan berkualitas tinggi yang dengan cepat mengidentifikasi dan memperbaiki masalah apa pun yang mungkin timbul. Misalnya, kami mungkin menggunakan cookie untuk melacak halaman situs web mana yang paling populer dan metode penautan mana di antara halaman situs web yang paling efektif. Ini juga membantu kami melacak, apakah Anda dirujuk ke kami oleh situs web lain dan meningkatkan kampanye iklan kami di masa mendatang.</p>

                                <p>Penggunaan lain dari cookie adalah untuk menyimpan sesi login Anda, yang berarti bahwa ketika Anda masuk ke Login Anggota untuk menyetor dana, "cookie sesi" diatur sedemikian, sehingga situs web dapat mengingat bahwa Anda sudah masuk. Jika situs web tidak mengatur cookie ini, Anda akan diminta untuk login dengan kata sandi di setiap halaman baru, saat Anda melakukan proses pendanaan.</p>

                                <p>Selain itu, cookie fungsional, misalnya, digunakan untuk memungkinkan kami mengingat preferensi Anda dan mengidentifikasi Anda sebagai pengguna, memastikan informasi Anda aman untuk beroperasi lebih andal dan efisien. Misalnya, cookie menghemat pengetikan nama pengguna Anda setiap kali Anda mengakses platform trading kami, juga mengingat preferensi Anda, seperti bahasa apa yang ingin Anda lihat ketika Anda masuk.</p>

                                <p><strong>Berikut adalah ikhtisar dari beberapa fungsi yang diberikan cookie kami:</strong></p>
                                <ul class="checks top15">
                                    <li>Memverifikasi identitas Anda dan mendeteksi negara Anda saat ini</li>
                                    <li>Memeriksa tipe browser dan piranti Anda</li>
                                    <li>Menelusuri dari situs mana pengguna berasal</li>
                                    <li>Memungkinkan pihak ketiga untuk merubah konten</li>
                                </ul>

                                <p>Situs web ini menggunakan Google Analytics, layanan analitik web yang disediakan oleh Google, Inc. ("Google"). Google Analytics menggunakan cookie analitis yang ditempatkan di komputer Anda, untuk membantu situs web menganalisis penggunaan situs web oleh pengguna. Informasi yang dihasilkan oleh cookie tentang penggunaan situs web Anda (termasuk alamat IP Anda) dapat dikirimkan dan disimpan oleh Google di server mereka. Google dapat menggunakan informasi ini untuk mengevaluasi penggunaan situs web Anda, untuk menyusun laporan tentang aktivitas situs web dan untuk menyediakan layanan lain yang terkait dengan aktivitas situs web dan penggunaan internet. Google juga dapat mentransfer informasi ini kepada pihak ketiga, jika diharuskan untuk melakukannya oleh hukum, atau di mana pihak ketiga tersebut memproses informasi atas nama Google. Google tidak akan mengaitkan alamat IP Anda dengan data lain yang dimiliki. Dengan menggunakan situs web ini, Anda memberikan persetujuan Anda kepada Google untuk memproses data tentang Anda dengan cara dan untuk tujuan yang ditetapkan di atas.</p>

                                <div class="dis15"></div>
                                <div class="row text-center">
                                    <div class="col-md-6">
                                        <button class="btn btn-red btn-solid btn-block js-acceptDefaultCookie gtm-acceptDefaultCookiesCloseModal" data-dismiss="modal" aria-label="Close">AKTIFKAN SEMUA COOKIES DAN TUTUP</button>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="changeSettings">
                                <div class="dis25"></div>
                                <p><strong>Atur Perubahan</strong></p>
                                <p>Silahkan pilih tipe cookies yang anda ingin simpan dalam perangkat anda.</p>
                                <div class="dis5"></div>
                                <form class="js-cookieCheckList" action="">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input id="functionalCookies" name="functionalCookies" data-cookies-parts="functional" type="checkbox" value="1" disabled checked>
                                            <label for="functionalCookies"> <strong>Cookies Fungsional</strong><br>Cookie ini sangat penting untuk situs web kami. Tanpa cookie, situs web kami tidak akan berfungsi dengan baik. Ia disimpan sementara sebagai informasi login dan akan kedaluwarsa setelah browser ditutup.</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input id="analyticalCookies" name="analyticalCookies" data-cookies-parts="analytical" type="checkbox" value="1">
                                            <label for="analyticalCookies"> <strong>Cookies Analitis</strong><br>Informasi yang disediakan oleh cookie analitis memungkinkan kami untuk menganalisis pola perilaku pengunjung, dan kami menggunakan informasi tersebut untuk meningkatkan keseluruhan pengalaman atau mengidentifikasi area situs web yang mungkin memerlukan pemeliharaan. Informasinya anonim (yaitu tidak dapat digunakan untuk mengidentifikasi Anda dan tidak mengandung informasi pribadi seperti nama dan alamat email Anda) dan hanya digunakan untuk tujuan statistik. Cookie perilaku mirip dengan cookie analitis, dan ingat bahwa Anda telah mengunjungi situs web dan menggunakan informasi untuk memberi Anda konten yang disesuaikan dengan minat Anda.</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input id="promotionalCookies" name="promotionalCookies" data-cookies-parts="promotional" type="checkbox" value="1">
                                            <label for="promotionalCookies"> <strong>Cookies Promo</strong><br>Cookie ini digunakan untuk melacak pengunjung di seluruh situs web. Tujuannya adalah untuk menampilkan iklan yang relevan dan menarik bagi pengguna individu, dan karenanya lebih berharga untuk penerbit dan pengiklan pihak ketiga.</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input id="preferencesCookies" name="preferencesCookies" data-cookies-parts="preferences" type="checkbox" value="1">
                                            <label for="preferencesCookies"> <strong>Cookies Preferensi</strong><br>Cookie preferensi mengaktifkan situs web untuk mengingat informasi yang mengubah cara perilaku atau penampilan situs web, seperti bahasa pilihan Anda atau wilayah tempat Anda berada.</label>
                                        </div>
                                    </div>
                                    <div class="dis15"></div>
                                    <div class="row text-center">
                                        <div class="col-md-6">
                                            <button class="btn btn-red btn-solid btn-block js-acceptDefaultCookie gtm-acceptDefaultCookiesCloseModal" data-dismiss="modal" aria-label="Close">AKTIFKAN SEMUA COOKIES DAN TUTUP</button>
                                        </div>
                                        <div class="dis10 visible-xs visible-sm"></div>
                                        <div class="col-md-6">
                                            <button class="btn btn-default btn-solid btn-block js-saveCookie gtm-saveCookiesCloseModal" data-dismiss="modal" aria-label="Close">SIMPAN PENGATURAN DAN TUTUP</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                          </div>
                        </div>
                    <div class="dis30"></div>
                </div>
                                    <div class="modal-footer">
                        <img class="pull-right" src="https://cloud.xm-cdn.com/assets/img/common/logo/xm-mt4.svg" alt="xm logo">
                    </div>
                            </div>
        </div>
    </div>
</div>

<!-- Shows the cookie bar IF not all cookies are enabled -->
<div class="clearfix"></div>
<div class=" " id="js-cookieBarHeight"></div>
<div id="cookies-block" class=" ">
    <div class="container">
        <div class="wrap">
            <div class="text-wrap">
                <p class="gtm-openCookieSettings">Kami menggunakan cookies untuk memberikan Anda pengalaman terbaik di website kami. Baca lebih lanjut atau ubah <a class="inline-block js-showModalCookieSettings" href="#">pengaturan cookie</a> Anda.</p>
                <div class="dis10 visible-xs"></div>
            </div>
            <div class="btn-wrap">
                <button id="js-cookieBarCloseButton" class="btn btn-red btn-solid btn-block js-acceptDefaultCookie gtm-acceptDefaultCookieFromFooterBar">TERIMA SEMUA COOKIES</button>
            </div>
        </div>
    </div>
</div>


    
<div class="clearfix"></div>
<div class="hidden-xs hidden-sm" id="js-riskMessageHeight"></div>
<div id="risk-block" class="" style="">
    <div class="wrap">
        <button id="js-riskCloseButton">
            <i class="fa fa-times" aria-hidden="true"></i>
        </button>
        <div class="text-wrap">
                            <p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    <strong>Peringatan Resiko:</strong> Modal Anda beresiko. Produk dengan leverage mungkin tidak cocok bagi semua orang. Silahkan pertimbangkan <a href="https://cloud.xm-cdn.com/static/pdf/System-PDFs/XMGlobal-Risk-Disclosures-for-Financial-Instruments.pdf?v=6294d0191b6f1461fc70859d40df1a71" class="link" target="_blank">Pengungkapan Resiko</a> kami.                </p>
                    </div>
    </div>

</div>

    <style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='responsive-lightbox-tosrus-css' href='https://www.xmindonesiatrade.com/id/wp-content/plugins/responsive-lightbox/assets/tosrus/jquery.tosrus.min.css?ver=2.3.2' type='text/css' media='all' />

<noscript id="deferred-styles">
    
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/jqueryUi.css?ver=728dd8a5fd2985ec0b87d728c01a8076">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/new_structure/libraries/popper_tippy.min.css?ver=cee0883c3737303f4995fcad52e4637a">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/helpers.css?ver=744c47d847932db022b65eab3f7aaa6b">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/accordion.css?ver=b8e0121ce11af51f76bd308ca2148443">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/alerts.css?ver=8832ff47e762b5d539dcc0f1e262a7b3">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/iconsFlags.css?ver=fe41c06cc6ab4858a39464350e8b295c">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/iconsGeneral.css?ver=52e3f3bf6381e05ced92dcdde47f0c19">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/listingBlocks.css?ver=652e8a84211c9fe5ff2183e9e1d89dcd">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/lists.css?ver=a4359536f9469c01445d9658a2a384ae">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/modals.css?ver=dac22b0034f1a978f61d0b5e028e5a0f">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/textblocks.css?ver=cd5e83774524eba14fd94e7b1d17bb38">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/titleBar.css?ver=a48e1fa909e33273c167a9433e0f60c5">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/tooltipPopover.css?ver=8207e6401f9d742787c3489c8058a78b">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/xmapp.css">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/footer.css?ver=6542f76b0129a2479c8876d5aee8b035">
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/bubble_widget.css?ver=b0719441249b2b617b448175d895561c"></noscript>

<script>
    var loadDeferredStyles = function() {
        var b = document.getElementById("deferred-styles");
        var a = document.createElement("div");
        a.innerHTML = b.textContent;
        document.body.appendChild(a);
        b.parentElement.removeChild(b)
    };
    var raf = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function(a) {
        window.setTimeout(a, 1000 / 60)
    };
    if (raf) {
        raf(function() {
            window.setTimeout(loadDeferredStyles, 0)
        })
    } else {
        window.addEventListener("load", loadDeferredStyles)
    }
</script>

<!--[if lte IE 10]>

<script defer="defer" src="https://cloud.xm-cdn.com/assets/js/minified/match_media.js?ver=71472cf8d7a1c736aa45542aff31af50"></script><![endif]-->
<!--[if lt IE 9]>

<script defer="defer" src="https://cloud.xm-cdn.com/assets/js/minified/shiv_respond.js?ver=502dbe8cd6c1c20b194864044db52711"></script><![endif]-->


<script src="https://cloud.xm-cdn.com/assets/js/libraries/jquery-1.11.1.min.js?ver=8101d596b2b8fa35fe3a634ea342d7c3"></script>
<script src="https://cloud.xm-cdn.com/assets/js/minified/jquery_cookie.js?ver=0d34c1f7feb9ea77ce3988585bc1f11b"></script>
<script src="https://cloud.xm-cdn.com/assets/js/libraries/popper_tippy.min.js?ver=df510a0f987a765d7b496cca56dbfa79"></script><script>
// General variables
var host = window.location.host,
    protocol = window.location.protocol,
    currentUrl = window.location.href,
    htmlLang = document.getElementsByTagName("html")[0].getAttribute("lang");
    domainsNoPrefix = ['en', 'id', 'ar'];

    domainName = ".xmindonesiatrade.com";
    hostName = "https://www.xmindonesiatrade.com";

switch(htmlLang) {
    case 'ja':      htmlLang = 'jp'; break;
    case 'ms':      htmlLang = 'my'; break;
    case 'zh_CN':   htmlLang = 'cn'; break;
    case 'sv':      htmlLang = 'se'; break;
    case 'ko':      htmlLang = 'kr'; break;
    case 'hi':      htmlLang = 'in'; break;
    case 'cs':      htmlLang = 'cz'; break;
}

allActiveLangs = [
    'en',
    'jp',
    'my',
    'cn',
    'el',
    'hu',
    'ru',
    'id',
    'fr',
    'it',
    'se',
    'de',
    'pl',
    'ar',
    'es',
    'kr',
    'pt',
    'tr',
    'vn',
    'th',
    'ph',
    'nl',
    'cz',
    'fa',
    'bn',
    'tw',
    'ur',
    'si',
    'hi',
    'uz'
];

removeLangsFromContactMap = [
    'se',
    'nl'
];

</script>
<script src="https://cloud.xm-cdn.com/assets/js/minified/xm_app_page.js?ver=e9ab27824cf0d69a3603a9dd2ce97939"></script>
<script src="https://cloud.xm-cdn.com/assets/js/minified/cookie_popup.js?ver=b33c69bdfd91617543479cfc616e0c07"></script>
<script src="https://cloud.xm-cdn.com/assets/js/minified/url_parameters_affid_gid.js?ver=111d6ef892a74713fb24e332d9653da9"></script>
<script src="https://cloud.xm-cdn.com/assets/js/libraries/qrcode-with-logos_1_0_3.min.js?ver=1710244800"></script>
<div id="custom-livechat" hidden>
    <div class="custom-livechat__header">
        <button id="widget-back-button"><i class="back-button fa fa-chevron-left"></i></button>
        <h3 class="inline-block">Live Chat XM</h3>
        <button id="close-prechat-form" class="text-gray pull-right"><i class="fa fa-times"></i></button>
    </div>
    <div class="custom-livechat__body">
        <div class="j-second-step" hidden>
            <p class="j-hide-if-logged-in">
                Mohon masukkan informasi kontak Anda. Jika Anda telah memiliki akun XM, silakan sebutkan ID akun Anda agar tim layanan bantuan kami dapat memberikan Anda layanan terbaik.            </p>
            <ul class="nav nav-tabs j-hide-if-logged-in">
                <li class="active"><a href="#existing-member" role="tab" data-toggle="tab">Klien Lama</a></li>
                <li class=""><a href="#visitor-user" role="tab" data-toggle="tab">Klien Baru</a></li>
            </ul>
            <div class="tab-content">
                <div id="existing-member" class="tab-pane active" role="tabpanel">
                    <form id="pre-chat-form-member" action="" method="post" novalidate="novalidate">
                        <div class="form-group" style="display: none;">
                            <input type="hidden" name="pre-chat-form-value" value="1">
                        </div>
                            <div class="form-group" style="display: none;">
                                <input type="hidden" class="j-user-id ignore-validation" id="user_id" name="user_id" value="0">
                            </div>
                            <div class="form-group has-feedback">
                                <label for="lc_first_name"><span class="red">*</span> Nama depan</label>
                                <input class="form-control j-first-name" id="lc_first_name" name="first_name" value="" data-cip-id="first_name" type="text">
                            </div>
                            <div class="form-group has-feedback">
                                <label for="lc_last_name"><span class="red">*</span> Nama belakang</label>
                                <input class="form-control j-last-name" id="lc_last_name" name="last_name" value="" data-cip-id="last_name" type="text">
                            </div>
                        <div class="form-group has-feedback j-div-email">
                            <label for="lc_email_member"><span class="red">*</span> E-mail</label>
                            <input class="form-control j-email" id="lc_email_member" name="email" value="" type="text">

                        </div>
                        <div class="form-group has-feedback j-div-language">
                            <label for="lc_preferred_language">
                                <span class="red">*</span> Bahasa                                <i class="fa fa-spinner fa-spin"></i>
                            </label>
                            <select id="lc_preferred_language" name="preferred_language" class="form-control j-preferred-language"></select>
                        </div>
                        <div class="dis10"></div>
                        <div class="text-center">
                            <button id="start-chat-member" class="btn btn-solid btn-red btn-block" data-type="ajax" data-text="Mulai Chat">
                                Mulai Chat                            </button>
                        </div>
                    </form>
                </div>
                <div id="visitor-user" class="tab-pane" role="tabpanel">
                    <form id="pre-chat-form">
                        <div class="form-group has-feedback j-hide-if-logged-in j-show-first-name">
                            <label for="lc_first_name"><span class="red">*</span> Nama depan</label>
                            <input class="form-control j-first-name" id="lc_first_name" name="first_name" value="" data-cip-id="first_name" type="text">
                        </div>
                        <div class="form-group has-feedback j-hide-if-logged-in j-show-last-name">
                            <label for="lc_last_name"><span class="red">*</span> Nama belakang</label>
                            <input class="form-control j-last-name" id="lc_last_name" name="last_name" value="" data-cip-id="last_name" type="text">
                        </div>
                        <div class="form-group has-feedback j-hide-if-logged-in">
                            <label for="email_visitor"><span class="red">*</span> E-mail </label>
                            <input class="form-control j-email" id="email_visitor" name="email" value="" type="text">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="lc_preferred_language_visitor">
                                <span class="red">*</span> Bahasa                                <i class="fa fa-spinner fa-spin"></i>
                            </label>
                            <select id="lc_preferred_language_visitor" name="preferred_language" class="form-control j-preferred-language"></select>
                        </div>
                        <div class="dis10"></div>
                        <div class="text-center">
                            <button id="start-chat" class="btn btn-solid btn-red btn-block" data-type="ajax" data-text="Mulai Chat">
                                Mulai Chat                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    (function ($) {
        var userIdSelector = $('.j-user-id'),
            emailSelector  = $('.j-email'),
            initialParameters = {
            apiUrl: 'https://www.xmindonesiatrade.com/files/scripts/validations/livechat/livechat.api.php',
            loggedIn: "",
            tradingAccount: "",
            brandId: 'XMBZ',
            authenticatedCountry: 'ID',
            languageCode: 'id',
            userDetails: {
                userFirstName: null,
                userLastName: null,
                userEmail: null
            },
            clientNameMissing: false,
            keyVisitorEngaged: 'xm-liveChat-visitorEngaged',
            keyCacheData: 'xm-liveChat-cacheData',
            visitorsPromotionGroup: '6',
            languagePrefix: languagePref,
            websiteHomeLink: homeLink,
        };

        /**
         * @param {string} action
         * @param {object} data
         * @return {jqXHR}
         * @private
         */
        function callApi(action, data) {
            return $.ajax({
                url: initialParameters.apiUrl,
                method: "POST",
                data: JSON.stringify({action: action, data: data}),
                dataType: 'json',
                contentType: "application/json; charset=utf-8",
                xhrFields: {
                    withCredentials: true
                },
                crossDomain: true
            });
        }

        /**
         * @param {number} chatGroup
         * @param {Array<{name: string, value: string}>} livechatCustomVariables
         * @param {Object<{ name: string, email: string }>} visitorInfo
         */
        function LivechatModelClass(chatGroup, livechatCustomVariables, visitorInfo) {
            // Protect from duplicated load the livechat library
            if (LivechatModelClass.prototype.hasInstance) {
                console.info('[LIVECHAT_FE]: Already has an instance');
                throw "Can not create LivechatAPI again";
            }
            LivechatModelClass.prototype.hasInstance = true;

            _init(chatGroup, livechatCustomVariables, visitorInfo);

            // PUBLIC METHODS
            this.chatWindowToggle = function () {
                try {
                    // Here we may have an exception: `[LiveChatWidget] You can't use getters before load`
                    var data = window.LiveChatWidget.get('state');
                    if (data.visibility === 'maximized') {
                        window.LiveChatWidget.call('minimize')
                    } else {
                        window.LiveChatWidget.call('maximize');
                    }
                } catch (e) {
                    // This request will be queued and automatically executed after LiveChat is loaded.
                    window.LiveChatWidget.call('maximize');
                }
            };

            // PRIVATE METHODS
            function _init(chatGroup, livechatCustomVariables, visitorInfo) {
                window.__lc = window.__lc || {};
                window.__lc.license = 5419421;
                window.__lc.group = chatGroup;
                window.__lc.params = livechatCustomVariables;
                window.__lc.visitor = visitorInfo;
                window.__lc.chat_between_groups = false;

                // load the livechat library
                console.info('[LIVECHAT_FE]: Start to load livechat script');
                initLivechatNative();

                window.LiveChatWidget.on('ready', function (e) {
                    console.info('[LIVECHAT_FE]: script loaded. Event called - ready. Will call maximize event');
                    $('#livechatWidget').show();
                    window.LiveChatWidget.call('maximize');
                });

                // Show chat when message received
                window.LiveChatWidget.on('new_event', function (e) {
                    if(e.type == 'message' && e.author.type === 'agent') {
                        $('#livechatWidget').addClass('notification')
                    }
                });

                // Hide livechat on minimize
                window.LiveChatWidget.on('visibility_changed', function (e) {
                    if(e.visibility == 'minimized') {
                        window.LiveChatWidget.call("hide");
                        $('#livechatWidget').removeClass('notification')
                    }
                });

                window.LiveChatWidget.on('customer_status_changed', function (data) {
                    switch (data.status) {
                        case 'queued': // customer is in queue
                        case 'chatting': // customer is currently chatting
                        case 'invited': // customer received an invitation but didn't start the chat
                            console.info('[LIVECHAT_FE]: customer is in queue or currently chatting received an invitation but did not start the chat', {status: data.status});
                            LivechatModelClass.prototype.setVisitorEngaged(true);
                            break;
                        case 'browsing': // customer is in idle state, not queued, not chatting, and didn't receive an invitation
                            console.info('[LIVECHAT_FE]: customer is in idle state, not queued, not chatting, and did not receive an invitation', {status: data.status});
                            LivechatModelClass.prototype.setVisitorEngaged(false);
                            break;
                    }
                });
            }
        }

        LivechatModelClass.prototype.hasInstance = false;

        /**
         * @param {boolean} engaged
         */
        LivechatModelClass.prototype.setVisitorEngaged = function (engaged) {
            sessionStorage.setItem(initialParameters.keyVisitorEngaged, JSON.stringify(engaged));
        };

        /**
         * @return {boolean}
         */
        LivechatModelClass.prototype.getVisitorEngaged = function () {
            return !!JSON.parse(sessionStorage.getItem(initialParameters.keyVisitorEngaged));
        };

        function LivechatControllerClass() {
            // PRIVATE PROPERTIES
            var _livechatModel = null;
            var _$customLivechat = $("#custom-livechat");
            var _isLanguagesBusy = false;

            if (LivechatModelClass.prototype.getVisitorEngaged()) {
                var cacheData = _getCacheData();
                _livechatModel = new LivechatModelClass(cacheData.preferredLanguage, cacheData.customParameters, cacheData.visitorInfo);
            }

            // PUBLIC METHODS
            this.openChat = function () {
                if (_livechatModel) {
                    _livechatModel.chatWindowToggle();
                } else {
                    _loadGroupLanguagesSettings();
                    _$customLivechat.show();
                }
            };

            this.closeCustomForm = function () {
                _$customLivechat.hide();
            };

            this.startNewChat = function (formData) {
                if (initialParameters.clientNameMissing === false
                    && (formData.user_id || initialParameters.loggedIn)
                ) {
                    formData.clientType = 'Existing Client';
                    _startNewChat(formData, initialParameters.userDetails);
                } else {
                    formData.clientType = 'New Client';
                    _startNewChat(formData, initialParameters.userDetails);
                }
            };

            // PRIVATE METHODS

            /**
             * @param {object} formData
             * @param {object} [userDetails]
             * @private
             */
            function _startNewChat(formData, userDetails) {
                console.info('[LIVECHAT_FE]: Starting new chat');
                var userFirstName = formData.first_name || (userDetails && userDetails.userFirstName) || '';
                var userLastName = formData.last_name || (userDetails && userDetails.userLastName) || '';
                var userEmail = formData.email || (userDetails && userDetails.userEmail) || '';
                var userRegisteredBrands = (userDetails && userDetails.registeredBrands) || '';

                userFirstName = userFirstName.substring(0,70);
                userLastName = userLastName.substring(0,90);

                var customParameters = [
                    {name: 'userRegisteredBrands', value: userRegisteredBrands},
                    {
                        name: 'Brand_id',
                        value: (userDetails && userDetails.brandName) || initialParameters.brandId || ''
                    },
                    {
                        name: 'Country',
                        value: (userDetails && userDetails.authenticatedAccountCountry) || initialParameters.authenticatedCountry || ''
                    },
                    {name: 'First Name', value: userFirstName},
                    {name: 'Last Name', value: userLastName},
                    {name: 'Email', value: userEmail},
                    {name: 'Language', value: formData.preferred_language || ''},
                    {
                        name: 'TradingAccount',
                        value: (userDetails && userDetails.userAccount) || initialParameters.tradingAccount || formData.user_id || ''
                    },
                    {name: 'browserInfo', value: navigator && navigator.userAgent || 'unknown'},
                    {name: 'visitorsPromotionGroup', value: initialParameters.visitorsPromotionGroup},
                    {name: 'languagePrefix', value: initialParameters.languagePrefix},
                    {name: 'websiteHomeLink', value: initialParameters.websiteHomeLink},
                    {name: 'Client Type', value: formData.clientType || 'unknown'},
                    {name: 'Opened Chat From', value: 'WWW'},
                    {name: 'Browser page', value: window.location.href},
                ];

                customParameters.forEach((element) => {
                    if (element.name === 'TradingAccount' && element.value === '0') {
                        element.value = '';
                    }
                });

                var visitorInfo = {name: userFirstName, email: userEmail};
                _setCacheData({
                    customParameters: customParameters,
                    visitorInfo: visitorInfo,
                    preferredLanguage: formData.preferred_language
                });
                _livechatModel = new LivechatModelClass(formData.preferred_language, customParameters, visitorInfo);
                _$customLivechat.hide();
            }

            function _setCacheData(data) {
                console.info('[LIVECHAT_FE]: Set items to cache');
                sessionStorage.setItem(initialParameters.keyCacheData, JSON.stringify(data));
            }

            function _getCacheData() {
                console.info('[LIVECHAT_FE]: Get items to cache');
                return JSON.parse(sessionStorage.getItem(initialParameters.keyCacheData));
            }

            function _loadGroupLanguagesSettings() {
                if (_isLanguagesBusy) {
                    return;
                }
                $('#custom-livechat .fa-spinner').show();
                _isLanguagesBusy = true;
                var data = {
                    languageCode: initialParameters.languageCode,
                    countryCode: initialParameters.authenticatedCountry,
                    brandId: initialParameters.brandId,
                };
                callApi('getLanguageGroupStatus', data)
                    .done(function (response) {
                        console.info('[LIVECHAT_FE]: method getLanguageGroupStatus completed');
                        var sessionData = response.result.sessionData;
                        if (sessionData.loggedIn) {
                            initialParameters.loggedIn = sessionData.loggedIn;
                            initialParameters.tradingAccount = sessionData.tradingAccount ? sessionData.tradingAccount : 0;
                            initialParameters.userDetails.userEmail = sessionData.userDetails.userEmail;
                            initialParameters.brandId = sessionData.userDetails.brandId || initialParameters.brandId;
                            saveSessionData(sessionData);
                        }

                        _renderLanguagesSelectBox(response.result.mGroupsDetails);
                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {
                        console.error('[LIVECHAT_FE]: method getLanguageGroupStatus failed', {
                            responseText: jqXHR.responseText,
                            responseStatus: jqXHR.status,
                            responseStatusText: jqXHR.statusText,
                            textStatus,
                            errorThrown
                        });
                    })
                    .always(function () {
                        console.info('[LIVECHAT_FE]: method getLanguageGroupStatus always action');
                        _isLanguagesBusy = false;
                        $('#custom-livechat .fa-spinner').hide();
                    });
            }

            /**
             * @param {Array<Object>} languages
             * @private
             */
            function _renderLanguagesSelectBox(languages) {
                console.info('[LIVECHAT_FE]: Rendering groups');
                if (!Array.isArray(languages)) {
                    console.warn('Languages has to be an array');
                    return;
                }
                var $options = $();
                languages.forEach(function (langObj) {
                    $options = $options.add(
                        '<option value="' + langObj['mGroupId'] + '">' +
                        langObj['mDisplayLanguage'] + ' (' + langObj['mStatus'] + ')' +
                        '</option>'
                    );
                });
                $('.j-preferred-language').html($options);
            }
        }

        function initLivechatNative() {
            (function (n, t, c) {
                function i(n) {
                    return e._h ? e._h.apply(null, n) : e._q.push(n)
                }

                var e = {
                    _q: [], _h: null, _v: "3.0", on: function () {
                        i(["on", c.call(arguments)])
                    },
                    once: function () {
                        i(["once", c.call(arguments)])
                    },
                    off: function () {
                        i(["off", c.call(arguments)])
                    },
                    get: function () {
                        if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                        return i(["get", c.call(arguments)])
                    },
                    call: function () {
                        i(["call", c.call(arguments)])
                    },
                    init: function () {
                        var n = t.createElement("script");
                        n.async = !0;
                        n.type = "text/javascript";
                        n.src = "https://cdn.livechatinc.com/tracking.js";
                        t.head.appendChild(n);
                    }
                };
                !n.__lc.asyncInit && e.init();
                n.LiveChatWidget = n.LiveChatWidget || e;
            }(window, document, [].slice))
        }

        /**
         * In case of existing client (like profile)
         */
        function requestClientName() {
            var formSelector = emailSelector.parents('form'),
                buttonSelector = formSelector.find('button'),
                buttonText = buttonSelector.attr('data-text');
            buttonSelector.text(buttonText).removeAttr('disabled');

            $('.j-first-name')
                .removeClass('ignore_validation')
                .parent()
                .show();

            $('.j-last-name')
                .removeClass('ignore_validation')
                .parent()
                .show();

            formSelector.removeClass('has-success');

            $('.j-div-email').hide();
            $('.j-div-language').hide();
        }

        /**
         * @param {object} sessionData
         * @return void
         */
        function saveSessionData(sessionData) {
            $('.custom-livechat__body .j-user-id')
                .val(initialParameters.tradingAccount)
                .prop('readonly', true);

            $('.custom-livechat__body .j-email')
                .val(initialParameters.userDetails.userEmail)
                .prop('readonly', true);

            $('#existing-member').removeClass('active');
            $('#visitor-user').addClass('active');
            $('.j-hide-if-logged-in').hide();

            if (!sessionData.userDetails.userFirstName || sessionData.userDetails.userFirstName === 'N/A') {
                $('.j-show-first-name').show();
            } else {
                initialParameters.userDetails.userFirstName = sessionData.userDetails.userFirstName;
                $('.custom-livechat__body .j-first-name')
                    .val(initialParameters.userDetails.userFirstName)
                    .prop('readonly', true);
            }
            if (!sessionData.userDetails.userLastName || sessionData.userDetails.userLastName === 'N/A') {
                $('.j-show-last-name').show();
            } else {
                initialParameters.userDetails.userLastName = sessionData.userDetails.userLastName;
                $('.custom-livechat__body .j-last-name')
                    .val(initialParameters.userDetails.userLastName)
                    .prop('readonly', true);
            }
        }

        
        /**
         * Adjust live chat position based on risk warning
         */
        function adjustLiveChat() {
            var $riskBlock, $riskBtn, isUK, $riskBtnHeight;
            $riskBlock = $('#risk-block');
            $riskBtn = $riskBlock.find('#js-riskCloseButton');
            isUK = $riskBlock.hasClass("isUK");
            $widgetOptions = $('#widgetOptions');
            $riskBtnHeight = window.matchMedia("(max-width: 992px)").matches ? $riskBtn.outerHeight() : 0;

            if ($riskBlock.length && $riskBtn.length) {
                $('#new-live-chat-icon, #custom-livechat').css('bottom', $riskBlock.outerHeight() + $riskBtnHeight);
                $widgetOptions.css('bottom', $riskBlock.outerHeight() + $riskBtnHeight);
            }else if ($riskBlock.length && !isUK) {
                $('#new-live-chat-icon, #custom-livechat').css('bottom', $riskBlock.outerHeight())
                $widgetOptions.css('bottom', $riskBlock.outerHeight());
            } else {
                $('#new-live-chat-icon, #custom-livechat').css('bottom', 0);
                $widgetOptions.css('bottom', 0);
            }

        }

        var livechatController = new LivechatControllerClass(),
            $document = $(document),
            $window = $(window),
            $newLiveChatIcon = $('#new-live-chat-icon');
        // Initiate Event Listeners
        $('#livechatWidget').on('click', function(e) {
            if($('#custom-livechat').is(':visible')) {
                livechatController.closeCustomForm();
            }else {
                livechatController.openChat();
            }
        });
        $document.on('click', '#startLiveChat', function (e) {
            e.preventDefault();
            $('.j-second-step').show();
            livechatController.openChat();
            $.cookie("livechatDisclaimer", 1, { expires: 90, path: '/' });
            $('.option__livechat').attr('no_disclaimer', '');
        });
        $document.on('click', '#start-whatsapp', function(e) {
            $.cookie("whatsAppDisclaimer", 1, { expires: 90, path: '/' });
            $('.option__whatsapp').attr('no_disclaimer', '');
        });
        $document.on('click', function(e) {
            var $target, line_cookie, is_mobile, whatsapp_cookie, viber_cookie, telegram_cookie;
            $target = $(e.target);
            line_cookie = $.cookie('linechatDisclaimer');
            whatsapp_cookie = $.cookie('whatsAppDisclaimer');
            viber_cookie = $.cookie('viberchatDisclaimer');
            telegram_cookie = $.cookie('telegramDisclaimer');
            is_mobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(window.navigator.userAgent);

            // Setcookie Mobile
            if( $target.is('#start-line') && line_cookie == null && is_mobile ) {
                $.cookie("linechatDisclaimer", 1, {expires: 90, path: '/'});
                $('.option__linechat').attr('no_disclaimer', '');
            }

            if( $target.is('#start-whatsapp') && whatsapp_cookie == null && is_mobile ) {
                $.cookie("whatsAppDisclaimer", 1, {expires: 90, path: '/'});
                $('.option__whatsapp').attr('no_disclaimer', '');
            }

            if( $target.is('#start-viber') && whatsapp_cookie == null && is_mobile ) {
                $.cookie("viberchatDisclaimer", 1, {expires: 90, path: '/'});
                $('.option__viberchat').attr('no_disclaimer', '');
            }

            if( $target.is('#start-telegram') && whatsapp_cookie == null && is_mobile ) {
                $.cookie("telegramDisclaimer", 1, {expires: 90, path: '/'});
                $('.option__telegram').attr('no_disclaimer', '');
            }

            // Setcookie Desktop
            if( $target.is('.option__linechat') && line_cookie == null && !is_mobile ) {
                $.cookie("linechatDisclaimer", 1, {expires: 90, path: '/'});
                $('.option__linechat').attr('no_disclaimer', '');
            }

            if( $target.is('.option__whatsapp') && whatsapp_cookie == null && !is_mobile ) {
                $.cookie("whatsAppDisclaimer", 1, {expires: 90, path: '/'});
                $('.option__whatsapp').attr('no_disclaimer', '');
            }

            if($target.is('.option__viberchat') && viber_cookie == null && !is_mobile) {
                $.cookie("viberchatDisclaimer", 1, {expires: 90, path: '/'});
                $('.option__viberchat').attr('no_disclaimer', '');
            }

            if($target.is('.option__telegram') && telegram_cookie == null && !is_mobile) {
                $.cookie("telegramDisclaimer", 1, {expires: 90, path: '/'});
                $('.option__telegram').attr('no_disclaimer', '');
            }

        });
        $document.on('click', ".option__livechat[no_disclaimer]", function (e) {
            e.preventDefault();
            $('.j-second-step').show();
            livechatController.openChat();
        });
        $document.on('click', '#close-prechat-form', function () {
            livechatController.closeCustomForm();
            $newLiveChatIcon.show();
        });
        $document.on('click', '#start-chat, #start-chat-member', function (e) {
            e.preventDefault();
            var formId = $(this).closest("form").attr('id'),
                $form = $('#' + formId);
            if ($form.valid()) {
                var formData = {};
                $form.serializeArray().forEach(function (item) {
                    formData[item.name] = item.value;
                });
                if (formData["user_id"] === undefined && initialParameters.loggedIn) {
                    formData["user_id"] = userIdSelector.val() ?? '0';
                }
                livechatController.startNewChat(formData);
            }
        });
        $document.on('click', '#js-riskCloseButton', adjustLiveChat);
        $window.on('resize', adjustLiveChat);
        $document.on('click', '#livechatWidget', function() {
            // Remove notification icon when user clicks on the livechat widget
            if($(this).hasClass('notification')) {
                $(this).removeClass('notification');
            }
        });
        adjustLiveChat();
    })(jQuery);
</script>
<script>
    var pleaseWait = "Silahkan Tunggu..";
    </script>
<script defer="defer" src="https://cloud.xm-cdn.com/assets/js/minified/forms.js?ver=ef7bbd59ab90eb7838c8d0e2c48a8461"></script>
<script>
$(window).on('load', function() {

//  REGISTRATION FORMS: additional scripts START

    

//  REGISTRATION FORMS: additional scripts END

    $.validator.setDefaults({ ignore: '' });

    
    $('form#pre-chat-form,#pre-chat-form-member').each(function () {

        $(this).validate({

            
            rules: {
                "first_name": { 
						required: true, 
						maxlength: 70, 
					 },
                    "last_name": { 
						required: true, 
						maxlength: 90, 
					 },
                    "email": { 
						required: true, 
						validEmail: true, 
					 },
                    "user_id": { 
						required: true, 
						regex: /^[0-9]+$/, 
					 },
                    "user_password": { 
						required: true, 
						regex: /^[a-zA-Z0-9\#\[\]\(\)\@$\&\*\!\?\|\,\.\^\/\\+_-]+$/, 
					 },
                    "preferred_language": { 
						required: true, 
					 },
                                },

            messages: {
                "first_name": { 
						required: "Kolom <strong>Nama depan</strong> dibutuhkan", 
						maxlength: "Kolom Nama Depan tidak boleh melebihi 70 karakter.", 
					 },
                    "last_name": { 
						required: "Kolom <strong>Nama belakang</strong> dibutuhkan", 
						maxlength: "Kolom Nama Belakang tidak boleh melebihi 90 karakter.", 
					 },
                    "email": { 
						required: "Kolom <strong>E-mail</strong> dibutuhkan", 
						validEmail: "Kolom <strong>E-mail</strong> harus berisi alamat email yang valid", 
					 },
                    "user_id": { 
					 },
                    "user_password": { 
						required: "Kolom <strong>Kata Sandi:</strong> dibutuhkan", 
						regex: "Kolom <strong>Kata Sandi:</strong> harus berisi alamat email yang valid", 
					 },
                    "preferred_language": { 
						required: "Kolom <strong>Pilihan Bahasa</strong> dibutuhkan", 
					 },
                                },

            ignore: '.ignore_validation',

            highlight: function (element, errorClass, validClass) {
                $(element)
                    .addClass(errorClass)
                    .removeClass(validClass);

                if ($(element).hasClass('select2-search__field')) {
                    return;
                }
                else if ($(element).attr('type') != 'checkbox' && $(element).attr('type') != 'radio') {
                    var selectClass = ($(element).prop('type') == 'select-one') ? ' select' : '',
                        icon = '<div class="glyphicon-wrapper"><span class="glyphicon glyphicon-remove form-control-feedback'+ selectClass +'" aria-hidden="true"></span></div>';
                    $(element)
                        .closest('.form-group')
                        .removeClass('has-success')
                        .addClass('has-error')
                        .end()
                        .siblings('.glyphicon-wrapper').remove()
                        .end()
                        .before(icon);
                }

                if ($.fn.bulletValidate) {
                    var bulletValidator = $(element).getBulletValidation();
                    if (bulletValidator) {
                        bulletValidator.validation();
                    }
                }
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element)
                    .removeClass(errorClass)
                    .addClass(validClass);

                if ($(element).hasClass('select2-search__field')) {
                    return;
                }
                else if ($(element).attr('type') != 'checkbox' && $(element).attr('type') != 'radio') {
                    var selectClass = ($(element).prop('type') == 'select-one') ? ' select' : '',
                        icon = '<div class="glyphicon-wrapper"><span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback'+ selectClass +'"></span></div>';
                    $(element)
                        .closest('.form-group')
                        .removeClass('has-error')
                        .addClass('has-success')
                        .end()
                        .siblings('.glyphicon-wrapper').remove()
                        .end()
                        .before(icon);

                    if ($(element).parents('.remove-valid').length) {

                        $(element)
                            .removeClass('valid')
                            .closest('.form-group')
                            .removeClass('has-success')
                            .end()
                            .siblings('.glyphicon-wrapper').remove();
                    }
                }
                if ($.fn.bulletValidate) {
                    var bulletValidator = $(element).getBulletValidation();
                    if (bulletValidator) {
                        bulletValidator.validation();
                    }
                }
            },

            errorPlacement: function (error, element) {
                
                if (element.siblings('.input-group-addon').length > 0) {
                    $(element)
                        .closest('.input-group')
                        .after(error);
                }

                else if (element.closest('.form-group').find('.search-select').length > 0) {
                    $(element)
                        .closest('.form-group').find('.select2-container')
                        .after(error);
                }

                else if (element.closest('.form-group').find('.btn-group').length > 0) {
                    $(element)
                        .closest('.form-group').find('.btn-group')
                        .after(error);
                }

                else if (element.attr('type') == 'file') {
                    $(element)
                        .closest('.input-group')
                        .after(error);
                }
                else if (element.attr('type') == 'checkbox') {
                    $(element)
                        .closest('.form-group')
                        .append(error);
                }
                else if (element.attr('type') == 'radio') {
                    $(element)
                        .closest('label')
                        .siblings('span')
                        .after(error);
                }
                else if (typeof element.attr('data-select2-dropdown') != 'undefined') {
                    $(element)
                        .closest('.form-group')
                        .append(error);
                }
                else {
                    error.insertAfter(element);
                }
            },

            invalidHandler: function (form, validator) {
                // Prevent scroll for livechat bubble
                if($(form.target).is('#pre-chat-form-member,#pre-chat-form')) return;
                scrollToObject($(validator.errorList[0].element));
                $(form.target).removeData('submitted').find('[type="submit"]').removeProp('disabled');
            },

            submitHandler: function (form) {
                                    if ($.fn.bulletValidate) {
                        var submit = true;
                        $(form).find('input').each(function () {
                            var bulletValidator =  $(this).getBulletValidation();
                                if (bulletValidator) {
                                    if (bulletValidator.validation() === false) {
                                        submit = false;
                                        bulletValidator.invalidSubmitHandler($(this));
                                        return false;
                                    }
                                }
                        });
                        if (submit === false) {
                            return false;
                        }
                    }

                    var ajaxButton = $(form).find('button[data-type="ajax"]');
                    if (ajaxButton.length > 0) {
                        ajaxButton.text(pleaseWait).attr('disabled', true);
                        return false;
                    }

                    $(form).find('button').text(pleaseWait);
                    $(form).find('button').attr('disabled', 'disabled');
                    form.submit();
                    return false;
                            }

        });

    });
    });
</script>
<link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/minified/sources/xmapp.css?ver=eac3332f1b71fd6ace4dc1ddccb4df2d">
<script src="https://cloud.xm-cdn.com/assets/js/minified/qr-code.js?ver=a9f138aa910facc0c600fa9c6cd765da"></script>
<script src="https://cloud.xm-cdn.com/assets/js/minified/xmapp.js?ver=bcc73c42d005d07c50eebd00849808be"></script>
    
    
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.eu01.nr-data.net","licenseKey":"NRBR-1d4ceb8e146a994d175","applicationID":"99021171,99021191","transactionName":"MhBSZQoZXhFQWkZdWgtac0QLDF8PHlBWG00IWFFBCA==","queueTime":0,"applicationTime":251,"atts":"HldRE0IDTR8=","errorBeacon":"bam.eu01.nr-data.net","agent":""}</script></body>
</html>
