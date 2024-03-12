
<!DOCTYPE html>
<html lang="id">

<head><script type="text/javascript">(window.NREUM||(NREUM={})).init={privacy:{cookies_enabled:true},ajax:{deny_list:["bam.eu01.nr-data.net"]},distributed_tracing:{enabled:true,allowed_origins:[],cors_use_newrelic_header:false,cors_use_tracecontext_headers:false}};(window.NREUM||(NREUM={})).loader_config={agentID:"99021217",accountID:"2868847",trustKey:"2868847",xpid:"Vg4BWV5XDxAJXVFQBgAAVw==",licenseKey:"NRBR-1d4ceb8e146a994d175",applicationID:"99021171"};;/*! For license information please see nr-loader-spa-1.252.1.min.js.LICENSE.txt */
(()=>{var e,t,r={234:(e,t,r)=>{"use strict";r.d(t,{P_:()=>m,Mt:()=>b,C5:()=>s,DL:()=>w,OP:()=>D,lF:()=>O,Yu:()=>E,Dg:()=>v,CX:()=>c,GE:()=>x,sU:()=>N});var n=r(8632),i=r(9567);const o={beacon:n.ce.beacon,errorBeacon:n.ce.errorBeacon,licenseKey:void 0,applicationID:void 0,sa:void 0,queueTime:void 0,applicationTime:void 0,ttGuid:void 0,user:void 0,account:void 0,product:void 0,extra:void 0,jsAttributes:{},userAttributes:void 0,atts:void 0,transactionName:void 0,tNamePlain:void 0},a={};function s(e){if(!e)throw new Error("All info objects require an agent identifier!");if(!a[e])throw new Error("Info for ".concat(e," was never set"));return a[e]}function c(e,t){if(!e)throw new Error("All info objects require an agent identifier!");a[e]=(0,i.D)(t,o);const r=(0,n.ek)(e);r&&(r.info=a[e])}const u=e=>{if(!e||"string"!=typeof e)return!1;try{document.createDocumentFragment().querySelector(e)}catch{return!1}return!0};var d=r(7056),l=r(50);const f="[data-nr-mask]",h=()=>{const e={mask_selector:"*",block_selector:"[data-nr-block]",mask_input_options:{color:!1,date:!1,"datetime-local":!1,email:!1,month:!1,number:!1,range:!1,search:!1,tel:!1,text:!1,time:!1,url:!1,week:!1,textarea:!1,select:!1,password:!0}};return{feature_flags:[],proxy:{assets:void 0,beacon:void 0},privacy:{cookies_enabled:!0},ajax:{deny_list:void 0,block_internal:!0,enabled:!0,harvestTimeSeconds:10,autoStart:!0},distributed_tracing:{enabled:void 0,exclude_newrelic_header:void 0,cors_use_newrelic_header:void 0,cors_use_tracecontext_headers:void 0,allowed_origins:void 0},session:{domain:void 0,expiresMs:d.oD,inactiveMs:d.Hb},ssl:void 0,obfuscate:void 0,jserrors:{enabled:!0,harvestTimeSeconds:10,autoStart:!0},metrics:{enabled:!0,autoStart:!0},page_action:{enabled:!0,harvestTimeSeconds:30,autoStart:!0},page_view_event:{enabled:!0,autoStart:!0},page_view_timing:{enabled:!0,harvestTimeSeconds:30,long_task:!1,autoStart:!0},session_trace:{enabled:!0,harvestTimeSeconds:10,autoStart:!0},harvest:{tooManyRequestsDelay:60},session_replay:{autoStart:!0,enabled:!1,harvestTimeSeconds:60,sampling_rate:10,error_sampling_rate:100,collect_fonts:!1,inline_images:!1,inline_stylesheet:!0,mask_all_inputs:!0,get mask_text_selector(){return e.mask_selector},set mask_text_selector(t){u(t)?e.mask_selector="".concat(t,",").concat(f):""===t||null===t?e.mask_selector=f:(0,l.Z)("An invalid session_replay.mask_selector was provided. '*' will be used.",t)},get block_class(){return"nr-block"},get ignore_class(){return"nr-ignore"},get mask_text_class(){return"nr-mask"},get block_selector(){return e.block_selector},set block_selector(t){u(t)?e.block_selector+=",".concat(t):""!==t&&(0,l.Z)("An invalid session_replay.block_selector was provided and will not be used",t)},get mask_input_options(){return e.mask_input_options},set mask_input_options(t){t&&"object"==typeof t?e.mask_input_options={...t,password:!0}:(0,l.Z)("An invalid session_replay.mask_input_option was provided and will not be used",t)}},spa:{enabled:!0,harvestTimeSeconds:10,autoStart:!0}}},p={},g="All configuration objects require an agent identifier!";function m(e){if(!e)throw new Error(g);if(!p[e])throw new Error("Configuration for ".concat(e," was never set"));return p[e]}function v(e,t){if(!e)throw new Error(g);p[e]=(0,i.D)(t,h());const r=(0,n.ek)(e);r&&(r.init=p[e])}function b(e,t){if(!e)throw new Error(g);var r=m(e);if(r){for(var n=t.split("."),i=0;i<n.length-1;i++)if("object"!=typeof(r=r[n[i]]))return;r=r[n[n.length-1]]}return r}const y={accountID:void 0,trustKey:void 0,agentID:void 0,licenseKey:void 0,applicationID:void 0,xpid:void 0},A={};function w(e){if(!e)throw new Error("All loader-config objects require an agent identifier!");if(!A[e])throw new Error("LoaderConfig for ".concat(e," was never set"));return A[e]}function x(e,t){if(!e)throw new Error("All loader-config objects require an agent identifier!");A[e]=(0,i.D)(t,y);const r=(0,n.ek)(e);r&&(r.loader_config=A[e])}const E=(0,n.mF)().o;var _=r(385),T=r(6818);const S={buildEnv:T.Re,customTransaction:void 0,disabled:!1,distMethod:T.gF,isolatedBacklog:!1,loaderType:void 0,maxBytes:3e4,offset:Math.floor(_._A?.performance?.timeOrigin||_._A?.performance?.timing?.navigationStart||Date.now()),onerror:void 0,origin:""+_._A.location,ptid:void 0,releaseIds:{},session:void 0,xhrWrappable:"function"==typeof _._A.XMLHttpRequest?.prototype?.addEventListener,version:T.q4,denyList:void 0},R={};function D(e){if(!e)throw new Error("All runtime objects require an agent identifier!");if(!R[e])throw new Error("Runtime for ".concat(e," was never set"));return R[e]}function N(e,t){if(!e)throw new Error("All runtime objects require an agent identifier!");R[e]=(0,i.D)(t,S);const r=(0,n.ek)(e);r&&(r.runtime=R[e])}function O(e){return function(e){try{const t=s(e);return!!t.licenseKey&&!!t.errorBeacon&&!!t.applicationID}catch(e){return!1}}(e)}},9567:(e,t,r)=>{"use strict";r.d(t,{D:()=>i});var n=r(50);function i(e,t){try{if(!e||"object"!=typeof e)return(0,n.Z)("Setting a Configurable requires an object as input");if(!t||"object"!=typeof t)return(0,n.Z)("Setting a Configurable requires a model to set its initial properties");const r=Object.create(Object.getPrototypeOf(t),Object.getOwnPropertyDescriptors(t)),o=0===Object.keys(r).length?e:r;for(let a in o)if(void 0!==e[a])try{Array.isArray(e[a])&&Array.isArray(t[a])?r[a]=Array.from(new Set([...e[a],...t[a]])):"object"==typeof e[a]&&"object"==typeof t[a]?r[a]=i(e[a],t[a]):r[a]=e[a]}catch(e){(0,n.Z)("An error occurred while setting a property of a Configurable",e)}return r}catch(e){(0,n.Z)("An error occured while setting a Configurable",e)}}},6818:(e,t,r)=>{"use strict";r.d(t,{Re:()=>i,gF:()=>o,lF:()=>a,q4:()=>n});const n="1.252.1",i="PROD",o="CDN",a="2.0.0-alpha.11"},385:(e,t,r)=>{"use strict";r.d(t,{FN:()=>c,IF:()=>l,LW:()=>a,Nk:()=>h,Tt:()=>u,_A:()=>o,cv:()=>p,iS:()=>s,il:()=>n,ux:()=>d,v6:()=>i,w1:()=>f});const n="undefined"!=typeof window&&!!window.document,i="undefined"!=typeof WorkerGlobalScope&&("undefined"!=typeof self&&self instanceof WorkerGlobalScope&&self.navigator instanceof WorkerNavigator||"undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope&&globalThis.navigator instanceof WorkerNavigator),o=n?window:"undefined"!=typeof WorkerGlobalScope&&("undefined"!=typeof self&&self instanceof WorkerGlobalScope&&self||"undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope&&globalThis),a="complete"===o?.document?.readyState,s=Boolean("hidden"===o?.document?.visibilityState),c=""+o?.location,u=/iPad|iPhone|iPod/.test(o.navigator?.userAgent),d=u&&"undefined"==typeof SharedWorker,l=(()=>{const e=o.navigator?.userAgent?.match(/Firefox[/\s](\d+\.\d+)/);return Array.isArray(e)&&e.length>=2?+e[1]:0})(),f=Boolean(n&&window.document.documentMode),h=!!o.navigator?.sendBeacon,p=Math.floor(o?.performance?.timeOrigin||o?.performance?.timing?.navigationStart||Date.now())},1117:(e,t,r)=>{"use strict";r.d(t,{w:()=>o});var n=r(50);const i={agentIdentifier:"",ee:void 0};class o{constructor(e){try{if("object"!=typeof e)return(0,n.Z)("shared context requires an object as input");this.sharedContext={},Object.assign(this.sharedContext,i),Object.entries(e).forEach((e=>{let[t,r]=e;Object.keys(i).includes(t)&&(this.sharedContext[t]=r)}))}catch(e){(0,n.Z)("An error occured while setting SharedContext",e)}}}},8e3:(e,t,r)=>{"use strict";r.d(t,{L:()=>d,R:()=>c});var n=r(8325),i=r(1284),o=r(4322),a=r(3325);const s={};function c(e,t){const r={staged:!1,priority:a.p[t]||0};u(e),s[e].get(t)||s[e].set(t,r)}function u(e){e&&(s[e]||(s[e]=new Map))}function d(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"feature",r=arguments.length>2&&void 0!==arguments[2]&&arguments[2];if(u(e),!e||!s[e].get(t)||r)return c(t);s[e].get(t).staged=!0;const a=[...s[e]];function c(t){const r=e?n.ee.get(e):n.ee,a=o.X.handlers;if(r.backlog&&a){var s=r.backlog[t],c=a[t];if(c){for(var u=0;s&&u<s.length;++u)l(s[u],c);(0,i.D)(c,(function(e,t){(0,i.D)(t,(function(t,r){r[0].on(e,r[1])}))}))}delete a[t],r.backlog[t]=null,r.emit("drain-"+t,[])}}a.every((e=>{let[t,r]=e;return r.staged}))&&(a.sort(((e,t)=>e[1].priority-t[1].priority)),a.forEach((t=>{let[r]=t;s[e].delete(r),c(r)})))}function l(e,t){var r=e[1];(0,i.D)(t[r],(function(t,r){var n=e[0];if(r[0]===n){var i=r[1],o=e[3],a=e[2];i.apply(o,a)}}))}},8325:(e,t,r)=>{"use strict";r.d(t,{A:()=>c,ee:()=>u});var n=r(8632),i=r(2210),o=r(234);class a{constructor(e){this.contextId=e}}var s=r(3117);const c="nr@context:".concat(s.a),u=function e(t,r){var n={},s={},d={},f=!1;try{f=16===r.length&&(0,o.OP)(r).isolatedBacklog}catch(e){}var h={on:g,addEventListener:g,removeEventListener:function(e,t){var r=n[e];if(!r)return;for(var i=0;i<r.length;i++)r[i]===t&&r.splice(i,1)},emit:function(e,r,n,i,o){!1!==o&&(o=!0);if(u.aborted&&!i)return;t&&o&&t.emit(e,r,n);for(var a=p(n),c=m(e),d=c.length,l=0;l<d;l++)c[l].apply(a,r);var f=b()[s[e]];f&&f.push([h,e,r,a]);return a},get:v,listeners:m,context:p,buffer:function(e,t){const r=b();if(t=t||"feature",h.aborted)return;Object.entries(e||{}).forEach((e=>{let[n,i]=e;s[i]=t,t in r||(r[t]=[])}))},abort:l,aborted:!1,isBuffering:function(e){return!!b()[s[e]]},debugId:r,backlog:f?{}:t&&"object"==typeof t.backlog?t.backlog:{}};return h;function p(e){return e&&e instanceof a?e:e?(0,i.X)(e,c,(()=>new a(c))):new a(c)}function g(e,t){n[e]=m(e).concat(t)}function m(e){return n[e]||[]}function v(t){return d[t]=d[t]||e(h,t)}function b(){return h.backlog}}(void 0,"globalEE"),d=(0,n.fP)();function l(){u.aborted=!0,Object.keys(u.backlog).forEach((e=>{delete u.backlog[e]}))}d.ee||(d.ee=u)},5546:(e,t,r)=>{"use strict";r.d(t,{E:()=>n,p:()=>i});var n=r(8325).ee.get("handle");function i(e,t,r,i,o){o?(o.buffer([e],i),o.emit(e,t,r)):(n.buffer([e],i),n.emit(e,t,r))}},4322:(e,t,r)=>{"use strict";r.d(t,{X:()=>o});var n=r(5546);o.on=a;var i=o.handlers={};function o(e,t,r,o){a(o||n.E,i,e,t,r)}function a(e,t,r,i,o){o||(o="feature"),e||(e=n.E);var a=t[o]=t[o]||{};(a[r]=a[r]||[]).push([e,i])}},3239:(e,t,r)=>{"use strict";r.d(t,{bP:()=>s,iz:()=>c,m$:()=>a});var n=r(385);let i=!1,o=!1;try{const e={get passive(){return i=!0,!1},get signal(){return o=!0,!1}};n._A.addEventListener("test",null,e),n._A.removeEventListener("test",null,e)}catch(e){}function a(e,t){return i||o?{capture:!!e,passive:i,signal:t}:!!e}function s(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2],n=arguments.length>3?arguments[3]:void 0;window.addEventListener(e,t,a(r,n))}function c(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2],n=arguments.length>3?arguments[3]:void 0;document.addEventListener(e,t,a(r,n))}},3117:(e,t,r)=>{"use strict";r.d(t,{a:()=>n});const n=(0,r(4402).Rl)()},4402:(e,t,r)=>{"use strict";r.d(t,{Ht:()=>u,M:()=>c,Rl:()=>a,ky:()=>s});var n=r(385);const i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx";function o(e,t){return e?15&e[t]:16*Math.random()|0}function a(){const e=n._A?.crypto||n._A?.msCrypto;let t,r=0;return e&&e.getRandomValues&&(t=e.getRandomValues(new Uint8Array(30))),i.split("").map((e=>"x"===e?o(t,r++).toString(16):"y"===e?(3&o()|8).toString(16):e)).join("")}function s(e){const t=n._A?.crypto||n._A?.msCrypto;let r,i=0;t&&t.getRandomValues&&(r=t.getRandomValues(new Uint8Array(e)));const a=[];for(var s=0;s<e;s++)a.push(o(r,i++).toString(16));return a.join("")}function c(){return s(16)}function u(){return s(32)}},7056:(e,t,r)=>{"use strict";r.d(t,{Bq:()=>n,Hb:()=>o,IK:()=>c,oD:()=>i,uT:()=>s,wO:()=>a});const n="NRBA",i=144e5,o=18e5,a={PAUSE:"session-pause",RESET:"session-reset",RESUME:"session-resume",UPDATE:"session-update"},s={SAME_TAB:"same-tab",CROSS_TAB:"cross-tab"},c={OFF:0,FULL:1,ERROR:2}},7894:(e,t,r)=>{"use strict";function n(){return Math.round(performance.now())}r.d(t,{z:()=>n})},7243:(e,t,r)=>{"use strict";r.d(t,{e:()=>i});var n=r(385);function i(e){if(0===(e||"").indexOf("data:"))return{protocol:"data"};try{const t=new URL(e,location.href),r={port:t.port,hostname:t.hostname,pathname:t.pathname,search:t.search,protocol:t.protocol.slice(0,t.protocol.indexOf(":")),sameOrigin:t.protocol===n._A?.location?.protocol&&t.host===n._A?.location?.host};return r.port&&""!==r.port||("http:"===t.protocol&&(r.port="80"),"https:"===t.protocol&&(r.port="443")),r.pathname&&""!==r.pathname?r.pathname.startsWith("/")||(r.pathname="/".concat(r.pathname)):r.pathname="/",r}catch(e){return{}}}},50:(e,t,r)=>{"use strict";function n(e,t){"function"==typeof console.warn&&(console.warn("New Relic: ".concat(e)),t&&console.warn(t))}r.d(t,{Z:()=>n})},2825:(e,t,r)=>{"use strict";r.d(t,{N:()=>d,T:()=>l});var n=r(8325),i=r(5546),o=r(3325),a=r(385);const s="newrelic";const c={stn:[o.D.sessionTrace],err:[o.D.jserrors,o.D.metrics],ins:[o.D.pageAction],spa:[o.D.spa],sr:[o.D.sessionReplay,o.D.sessionTrace]},u=new Set;function d(e,t){const r=n.ee.get(t);e&&"object"==typeof e&&(u.has(t)||(Object.entries(e).forEach((e=>{let[t,n]=e;c[t]?c[t].forEach((e=>{n?(0,i.p)("feat-"+t,[],void 0,e,r):(0,i.p)("block-"+t,[],void 0,e,r),(0,i.p)("rumresp-"+t,[Boolean(n)],void 0,e,r)})):n&&(0,i.p)("feat-"+t,[],void 0,void 0,r),l[t]=Boolean(n)})),Object.keys(c).forEach((e=>{void 0===l[e]&&(c[e]?.forEach((t=>(0,i.p)("rumresp-"+e,[!1],void 0,t,r))),l[e]=!1)})),u.add(t),function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};try{a._A.dispatchEvent(new CustomEvent(s,{detail:e}))}catch(e){}}({loaded:!0})))}const l={}},2210:(e,t,r)=>{"use strict";r.d(t,{X:()=>i});var n=Object.prototype.hasOwnProperty;function i(e,t,r){if(n.call(e,t))return e[t];var i=r();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:i,writable:!0,enumerable:!1}),i}catch(e){}return e[t]=i,i}},1284:(e,t,r)=>{"use strict";r.d(t,{D:()=>n});const n=(e,t)=>Object.entries(e||{}).map((e=>{let[r,n]=e;return t(r,n)}))},4351:(e,t,r)=>{"use strict";r.d(t,{P:()=>o});var n=r(8325);const i=()=>{const e=new WeakSet;return(t,r)=>{if("object"==typeof r&&null!==r){if(e.has(r))return;e.add(r)}return r}};function o(e){try{return JSON.stringify(e,i())}catch(e){try{n.ee.emit("internal-error",[e])}catch(e){}}}},3960:(e,t,r)=>{"use strict";r.d(t,{KB:()=>a,b2:()=>o});var n=r(3239);function i(){return"undefined"==typeof document||"complete"===document.readyState}function o(e,t){if(i())return e();(0,n.bP)("load",e,t)}function a(e){if(i())return e();(0,n.iz)("DOMContentLoaded",e)}},8632:(e,t,r)=>{"use strict";r.d(t,{EZ:()=>d,ce:()=>o,ek:()=>u,fP:()=>a,gG:()=>l,h5:()=>c,mF:()=>s});var n=r(7894),i=r(385);const o={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net"};function a(){return i._A.NREUM||(i._A.NREUM={}),void 0===i._A.newrelic&&(i._A.newrelic=i._A.NREUM),i._A.NREUM}function s(){let e=a();return e.o||(e.o={ST:i._A.setTimeout,SI:i._A.setImmediate,CT:i._A.clearTimeout,XHR:i._A.XMLHttpRequest,REQ:i._A.Request,EV:i._A.Event,PR:i._A.Promise,MO:i._A.MutationObserver,FETCH:i._A.fetch}),e}function c(e,t){let r=a();r.initializedAgents??={},t.initializedAt={ms:(0,n.z)(),date:new Date},r.initializedAgents[e]=t}function u(e){let t=a();return t.initializedAgents?.[e]}function d(e,t){a()[e]=t}function l(){return function(){let e=a();const t=e.info||{};e.info={beacon:o.beacon,errorBeacon:o.errorBeacon,...t}}(),function(){let e=a();const t=e.init||{};e.init={...t}}(),s(),function(){let e=a();const t=e.loader_config||{};e.loader_config={...t}}(),a()}},7956:(e,t,r)=>{"use strict";r.d(t,{N:()=>i});var n=r(3239);function i(e){let t=arguments.length>1&&void 0!==arguments[1]&&arguments[1],r=arguments.length>2?arguments[2]:void 0,i=arguments.length>3?arguments[3]:void 0;(0,n.iz)("visibilitychange",(function(){if(t)return void("hidden"===document.visibilityState&&e());e(document.visibilityState)}),r,i)}},1214:(e,t,r)=>{"use strict";r.d(t,{em:()=>b,u5:()=>R,QU:()=>O,_L:()=>P,Gm:()=>M,Lg:()=>L,BV:()=>Z,Kf:()=>Y});var n=r(8325),i=r(3117);const o="nr@original:".concat(i.a);var a=Object.prototype.hasOwnProperty,s=!1;function c(e,t){return e||(e=n.ee),r.inPlace=function(e,t,n,i,o){n||(n="");const a="-"===n.charAt(0);for(let s=0;s<t.length;s++){const c=t[s],u=e[c];d(u)||(e[c]=r(u,a?c+n:n,i,c,o))}},r.flag=o,r;function r(t,r,n,s,c){return d(t)?t:(r||(r=""),nrWrapper[o]=t,function(e,t,r){if(Object.defineProperty&&Object.keys)try{return Object.keys(e).forEach((function(r){Object.defineProperty(t,r,{get:function(){return e[r]},set:function(t){return e[r]=t,t}})})),t}catch(e){u([e],r)}for(var n in e)a.call(e,n)&&(t[n]=e[n])}(t,nrWrapper,e),nrWrapper);function nrWrapper(){var o,a,d,l;try{a=this,o=[...arguments],d="function"==typeof n?n(o,a):n||{}}catch(t){u([t,"",[o,a,s],d],e)}i(r+"start",[o,a,s],d,c);try{return l=t.apply(a,o)}catch(e){throw i(r+"err",[o,a,e],d,c),e}finally{i(r+"end",[o,a,l],d,c)}}}function i(r,n,i,o){if(!s||t){var a=s;s=!0;try{e.emit(r,n,i,t,o)}catch(t){u([t,r,n,i],e)}s=a}}}function u(e,t){t||(t=n.ee);try{t.emit("internal-error",e)}catch(e){}}function d(e){return!(e&&"function"==typeof e&&e.apply&&!e[o])}var l=r(2210),f=r(385);const h={},p=f._A.XMLHttpRequest,g="addEventListener",m="removeEventListener",v="nr@wrapped:".concat(n.A);function b(e){var t=function(e){return(e||n.ee).get("events")}(e);if(h[t.debugId]++)return t;h[t.debugId]=1;var r=c(t,!0);function i(e){r.inPlace(e,[g,m],"-",o)}function o(e,t){return e[1]}return"getPrototypeOf"in Object&&(f.il&&y(document,i),y(f._A,i),y(p.prototype,i)),t.on(g+"-start",(function(e,t){var n=e[1];if(null!==n&&("function"==typeof n||"object"==typeof n)){var i=(0,l.X)(n,v,(function(){var e={object:function(){if("function"!=typeof n.handleEvent)return;return n.handleEvent.apply(n,arguments)},function:n}[typeof n];return e?r(e,"fn-",null,e.name||"anonymous"):n}));this.wrapped=e[1]=i}})),t.on(m+"-start",(function(e){e[1]=this.wrapped||e[1]})),t}function y(e,t){let r=e;for(;"object"==typeof r&&!Object.prototype.hasOwnProperty.call(r,g);)r=Object.getPrototypeOf(r);for(var n=arguments.length,i=new Array(n>2?n-2:0),o=2;o<n;o++)i[o-2]=arguments[o];r&&t(r,...i)}var A="fetch-",w=A+"body-",x=["arrayBuffer","blob","json","text","formData"],E=f._A.Request,_=f._A.Response,T="prototype";const S={};function R(e){const t=function(e){return(e||n.ee).get("fetch")}(e);if(!(E&&_&&f._A.fetch))return t;if(S[t.debugId]++)return t;function r(e,r,i){var o=e[r];"function"==typeof o&&(e[r]=function(){var e,r=[...arguments],a={};t.emit(i+"before-start",[r],a),a[n.A]&&a[n.A].dt&&(e=a[n.A].dt);var s=o.apply(this,r);return t.emit(i+"start",[r,e],s),s.then((function(e){return t.emit(i+"end",[null,e],s),e}),(function(e){throw t.emit(i+"end",[e],s),e}))})}return S[t.debugId]=1,x.forEach((e=>{r(E[T],e,w),r(_[T],e,w)})),r(f._A,"fetch",A),t.on(A+"end",(function(e,r){var n=this;if(r){var i=r.headers.get("content-length");null!==i&&(n.rxSize=i),t.emit(A+"done",[null,r],n)}else t.emit(A+"done",[e],n)})),t}const D={},N=["pushState","replaceState"];function O(e){const t=function(e){return(e||n.ee).get("history")}(e);return!f.il||D[t.debugId]++||(D[t.debugId]=1,c(t).inPlace(window.history,N,"-")),t}var I=r(3239);const j={},C=["appendChild","insertBefore","replaceChild"];function P(e){const t=function(e){return(e||n.ee).get("jsonp")}(e);if(!f.il||j[t.debugId])return t;j[t.debugId]=!0;var r=c(t),i=/[?&](?:callback|cb)=([^&#]+)/,o=/(.*)\.([^.]+)/,a=/^(\w+)(\.|$)(.*)$/;function s(e,t){if(!e)return t;const r=e.match(a),n=r[1];return s(r[3],t[n])}return r.inPlace(Node.prototype,C,"dom-"),t.on("dom-start",(function(e){!function(e){if(!e||"string"!=typeof e.nodeName||"script"!==e.nodeName.toLowerCase())return;if("function"!=typeof e.addEventListener)return;var n=(a=e.src,c=a.match(i),c?c[1]:null);var a,c;if(!n)return;var u=function(e){var t=e.match(o);if(t&&t.length>=3)return{key:t[2],parent:s(t[1],window)};return{key:e,parent:window}}(n);if("function"!=typeof u.parent[u.key])return;var d={};function l(){t.emit("jsonp-end",[],d),e.removeEventListener("load",l,(0,I.m$)(!1)),e.removeEventListener("error",f,(0,I.m$)(!1))}function f(){t.emit("jsonp-error",[],d),t.emit("jsonp-end",[],d),e.removeEventListener("load",l,(0,I.m$)(!1)),e.removeEventListener("error",f,(0,I.m$)(!1))}r.inPlace(u.parent,[u.key],"cb-",d),e.addEventListener("load",l,(0,I.m$)(!1)),e.addEventListener("error",f,(0,I.m$)(!1)),t.emit("new-jsonp",[e.src],d)}(e[0])})),t}const k={};function M(e){const t=function(e){return(e||n.ee).get("mutation")}(e);if(!f.il||k[t.debugId])return t;k[t.debugId]=!0;var r=c(t),i=f._A.MutationObserver;return i&&(window.MutationObserver=function(e){return this instanceof i?new i(r(e,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype),t}const H={};function L(e){const t=function(e){return(e||n.ee).get("promise")}(e);if(H[t.debugId])return t;H[t.debugId]=!0;var r=t.context,i=c(t),a=f._A.Promise;return a&&function(){function e(r){var n=t.context(),o=i(r,"executor-",n,null,!1);const s=Reflect.construct(a,[o],e);return t.context(s).getCtx=function(){return n},s}f._A.Promise=e,Object.defineProperty(e,"name",{value:"Promise"}),e.toString=function(){return a.toString()},Object.setPrototypeOf(e,a),["all","race"].forEach((function(r){const n=a[r];e[r]=function(e){let i=!1;[...e||[]].forEach((e=>{this.resolve(e).then(a("all"===r),a(!1))}));const o=n.apply(this,arguments);return o;function a(e){return function(){t.emit("propagate",[null,!i],o,!1,!1),i=i||!e}}}})),["resolve","reject"].forEach((function(r){const n=a[r];e[r]=function(e){const r=n.apply(this,arguments);return e!==r&&t.emit("propagate",[e,!0],r,!1,!1),r}})),e.prototype=a.prototype;const n=a.prototype.then;a.prototype.then=function(){var e=this,o=r(e);o.promise=e;for(var a=arguments.length,s=new Array(a),c=0;c<a;c++)s[c]=arguments[c];s[0]=i(s[0],"cb-",o,null,!1),s[1]=i(s[1],"cb-",o,null,!1);const u=n.apply(this,s);return o.nextPromise=u,t.emit("propagate",[e,!0],u,!1,!1),u},a.prototype.then[o]=n,t.on("executor-start",(function(e){e[0]=i(e[0],"resolve-",this,null,!1),e[1]=i(e[1],"resolve-",this,null,!1)})),t.on("executor-err",(function(e,t,r){e[1](r)})),t.on("cb-end",(function(e,r,n){t.emit("propagate",[n,!0],this.nextPromise,!1,!1)})),t.on("propagate",(function(e,r,n){this.getCtx&&!r||(this.getCtx=function(){if(e instanceof Promise)var r=t.context(e);return r&&r.getCtx?r.getCtx():this})}))}(),t}const z={},F="setTimeout",B="setInterval",U="clearTimeout",V="-start",q="-",G=[F,"setImmediate",B,U,"clearImmediate"];function Z(e){const t=function(e){return(e||n.ee).get("timer")}(e);if(z[t.debugId]++)return t;z[t.debugId]=1;var r=c(t);return r.inPlace(f._A,G.slice(0,2),F+q),r.inPlace(f._A,G.slice(2,3),B+q),r.inPlace(f._A,G.slice(3),U+q),t.on(B+V,(function(e,t,n){e[0]=r(e[0],"fn-",null,n)})),t.on(F+V,(function(e,t,n){this.method=n,this.timerDuration=isNaN(e[1])?0:+e[1],e[0]=r(e[0],"fn-",this,n)})),t}var W=r(50);const X={},K=["open","send"];function Y(e){var t=e||n.ee;const r=function(e){return(e||n.ee).get("xhr")}(t);if(X[r.debugId]++)return r;X[r.debugId]=1,b(t);var i=c(r),o=f._A.XMLHttpRequest,a=f._A.MutationObserver,s=f._A.Promise,u=f._A.setInterval,d="readystatechange",l=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],h=[],p=f._A.XMLHttpRequest=function(e){const t=new o(e),n=r.context(t);try{r.emit("new-xhr",[t],n),t.addEventListener(d,(a=n,function(){var e=this;e.readyState>3&&!a.resolved&&(a.resolved=!0,r.emit("xhr-resolved",[],e)),i.inPlace(e,l,"fn-",w)}),(0,I.m$)(!1))}catch(e){(0,W.Z)("An error occurred while intercepting XHR",e);try{r.emit("internal-error",[e])}catch(e){}}var a;return t};function g(e,t){i.inPlace(t,["onreadystatechange"],"fn-",w)}if(function(e,t){for(var r in e)t[r]=e[r]}(o,p),p.prototype=o.prototype,i.inPlace(p.prototype,K,"-xhr-",w),r.on("send-xhr-start",(function(e,t){g(e,t),function(e){h.push(e),a&&(m?m.then(A):u?u(A):(v=-v,y.data=v))}(t)})),r.on("open-xhr-start",g),a){var m=s&&s.resolve();if(!u&&!s){var v=1,y=document.createTextNode(v);new a(A).observe(y,{characterData:!0})}}else t.on("fn-end",(function(e){e[0]&&e[0].type===d||A()}));function A(){for(var e=0;e<h.length;e++)g(0,h[e]);h.length&&(h=[])}function w(e,t){return t}return r}},7825:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(3325).D.ajax},6660:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(3325).D.jserrors},3081:(e,t,r)=>{"use strict";r.d(t,{gF:()=>o,mY:()=>i,t9:()=>n,vz:()=>s,xS:()=>a});const n=r(3325).D.metrics,i="sm",o="cm",a="storeSupportabilityMetrics",s="storeEventMetrics"},4649:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(3325).D.pageAction},7633:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(3325).D.pageViewEvent},9251:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(3325).D.pageViewTiming},7144:(e,t,r)=>{"use strict";r.d(t,{J0:()=>l,Mi:()=>d,Vb:()=>o,Ye:()=>s,fm:()=>c,i9:()=>a,t9:()=>i,u0:()=>u});var n=r(7056);const i=r(3325).D.sessionReplay,o=.12,a={DomContentLoaded:0,Load:1,FullSnapshot:2,IncrementalSnapshot:3,Meta:4,Custom:5},s=1e6,c=64e3,u={[n.IK.ERROR]:15e3,[n.IK.FULL]:3e5,[n.IK.OFF]:0},d={RESET:{message:"Session was reset",sm:"Reset"},IMPORT:{message:"Recorder failed to import",sm:"Import"},TOO_MANY:{message:"429: Too Many Requests",sm:"Too-Many"},TOO_BIG:{message:"Payload was too large",sm:"Too-Big"},CROSS_TAB:{message:"Session Entity was set to OFF on another tab",sm:"Cross-Tab"},ENTITLEMENTS:{message:"Session Replay is not allowed and will not be started",sm:"Entitlement"}},l=5e3},3614:(e,t,r)=>{"use strict";r.d(t,{BST_RESOURCE:()=>i,END:()=>s,FEATURE_NAME:()=>n,FN_END:()=>u,FN_START:()=>c,PUSH_STATE:()=>d,RESOURCE:()=>o,START:()=>a});const n=r(3325).D.sessionTrace,i="bstResource",o="resource",a="-start",s="-end",c="fn"+a,u="fn"+s,d="pushState"},7836:(e,t,r)=>{"use strict";r.d(t,{BODY:()=>x,CB_END:()=>E,CB_START:()=>u,END:()=>w,FEATURE_NAME:()=>i,FETCH:()=>T,FETCH_BODY:()=>v,FETCH_DONE:()=>m,FETCH_START:()=>g,FN_END:()=>c,FN_START:()=>s,INTERACTION:()=>f,INTERACTION_API:()=>d,INTERACTION_EVENTS:()=>o,JSONP_END:()=>b,JSONP_NODE:()=>p,JS_TIME:()=>_,MAX_TIMER_BUDGET:()=>a,REMAINING:()=>l,SPA_NODE:()=>h,START:()=>A,originalSetTimeout:()=>y});var n=r(234);const i=r(3325).D.spa,o=["click","submit","keypress","keydown","keyup","change"],a=999,s="fn-start",c="fn-end",u="cb-start",d="api-ixn-",l="remaining",f="interaction",h="spaNode",p="jsonpNode",g="fetch-start",m="fetch-done",v="fetch-body-",b="jsonp-end",y=n.Yu.ST,A="-start",w="-end",x="-body",E="cb"+w,_="jsTime",T="fetch"},5938:(e,t,r)=>{"use strict";r.d(t,{W:()=>i});var n=r(8325);class i{constructor(e,t,r){this.agentIdentifier=e,this.aggregator=t,this.ee=n.ee.get(e),this.featureName=r,this.blocked=!1}}},8862:(e,t,r)=>{"use strict";r.d(t,{j:()=>A});var n=r(3325),i=r(234),o=r(5546),a=r(8325),s=r(7894),c=r(8e3),u=r(3960),d=r(385),l=r(50),f=r(3081),h=r(8632);const p=["setErrorHandler","finished","addToTrace","addRelease","addPageAction","setCurrentRouteName","setPageViewName","setCustomAttribute","interaction","noticeError","setUserId","setApplicationVersion","start","recordReplay","pauseReplay"],g=["setErrorHandler","finished","addToTrace","addRelease"];function m(){const e=(0,h.gG)();p.forEach((t=>{e[t]=function(){for(var r=arguments.length,n=new Array(r),i=0;i<r;i++)n[i]=arguments[i];return function(t){for(var r=arguments.length,n=new Array(r>1?r-1:0),i=1;i<r;i++)n[i-1]=arguments[i];let o=[];return Object.values(e.initializedAgents).forEach((e=>{e.exposed&&e.api[t]&&o.push(e.api[t](...n))})),o.length>1?o:o[0]}(t,...n)}}))}var v=r(2825);const b=e=>{const t=e.startsWith("http");e+="/",r.p=t?e:"https://"+e};let y=!1;function A(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},p=arguments.length>2?arguments[2]:void 0,A=arguments.length>3?arguments[3]:void 0,{init:w,info:x,loader_config:E,runtime:_={loaderType:p},exposed:T=!0}=t;const S=(0,h.gG)();x||(w=S.init,x=S.info,E=S.loader_config),(0,i.Dg)(e.agentIdentifier,w||{}),(0,i.GE)(e.agentIdentifier,E||{}),x.jsAttributes??={},d.v6&&(x.jsAttributes.isWorker=!0),(0,i.CX)(e.agentIdentifier,x);const R=(0,i.P_)(e.agentIdentifier),D=[x.beacon,x.errorBeacon];y||(R.proxy.assets&&(b(R.proxy.assets),D.push(R.proxy.assets)),R.proxy.beacon&&D.push(R.proxy.beacon),m(),(0,h.EZ)("activatedFeatures",v.T)),_.denyList=[...R.ajax.deny_list||[],...R.ajax.block_internal?D:[]],(0,i.sU)(e.agentIdentifier,_),void 0===e.api&&(e.api=function(e,t){t||(0,c.R)(e,"api");const h={};var p=a.ee.get(e),m=p.get("tracer"),v="api-",b=v+"ixn-";function y(t,r,n,o){const a=(0,i.C5)(e);return null===r?delete a.jsAttributes[t]:(0,i.CX)(e,{...a,jsAttributes:{...a.jsAttributes,[t]:r}}),x(v,n,!0,o||null===r?"session":void 0)(t,r)}function A(){}g.forEach((e=>{h[e]=x(v,e,!0,"api")})),h.addPageAction=x(v,"addPageAction",!0,n.D.pageAction),h.setCurrentRouteName=x(v,"routeName",!0,n.D.spa),h.setPageViewName=function(t,r){if("string"==typeof t)return"/"!==t.charAt(0)&&(t="/"+t),(0,i.OP)(e).customTransaction=(r||"http://custom.transaction")+t,x(v,"setPageViewName",!0)()},h.setCustomAttribute=function(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2];if("string"==typeof e){if(["string","number","boolean"].includes(typeof t)||null===t)return y(e,t,"setCustomAttribute",r);(0,l.Z)("Failed to execute setCustomAttribute.\nNon-null value must be a string, number or boolean type, but a type of <".concat(typeof t,"> was provided."))}else(0,l.Z)("Failed to execute setCustomAttribute.\nName must be a string type, but a type of <".concat(typeof e,"> was provided."))},h.setUserId=function(e){if("string"==typeof e||null===e)return y("enduser.id",e,"setUserId",!0);(0,l.Z)("Failed to execute setUserId.\nNon-null value must be a string type, but a type of <".concat(typeof e,"> was provided."))},h.setApplicationVersion=function(e){if("string"==typeof e||null===e)return y("application.version",e,"setApplicationVersion",!1);(0,l.Z)("Failed to execute setApplicationVersion. Expected <String | null>, but got <".concat(typeof e,">."))},h.start=e=>{try{const t=e?"defined":"undefined";(0,o.p)(f.xS,["API/start/".concat(t,"/called")],void 0,n.D.metrics,p);const r=Object.values(n.D);if(void 0===e)e=r;else{if((e=Array.isArray(e)&&e.length?e:[e]).some((e=>!r.includes(e))))return(0,l.Z)("Invalid feature name supplied. Acceptable feature names are: ".concat(r));e.includes(n.D.pageViewEvent)||e.push(n.D.pageViewEvent)}e.forEach((e=>{p.emit("".concat(e,"-opt-in"))}))}catch(e){(0,l.Z)("An unexpected issue occurred",e)}},h.recordReplay=function(){(0,o.p)(f.xS,["API/recordReplay/called"],void 0,n.D.metrics,p),(0,o.p)("recordReplay",[],void 0,n.D.sessionReplay,p)},h.pauseReplay=function(){(0,o.p)(f.xS,["API/pauseReplay/called"],void 0,n.D.metrics,p),(0,o.p)("pauseReplay",[],void 0,n.D.sessionReplay,p)},h.interaction=function(){return(new A).get()};var w=A.prototype={createTracer:function(e,t){var r={},i=this,a="function"==typeof t;return(0,o.p)(f.xS,["API/createTracer/called"],void 0,n.D.metrics,p),(0,o.p)(b+"tracer",[(0,s.z)(),e,r],i,n.D.spa,p),function(){if(m.emit((a?"":"no-")+"fn-start",[(0,s.z)(),i,a],r),a)try{return t.apply(this,arguments)}catch(e){throw m.emit("fn-err",[arguments,this,e],r),e}finally{m.emit("fn-end",[(0,s.z)()],r)}}}};function x(e,t,r,i){return function(){return(0,o.p)(f.xS,["API/"+t+"/called"],void 0,n.D.metrics,p),i&&(0,o.p)(e+t,[(0,s.z)(),...arguments],r?null:this,i,p),r?void 0:this}}function E(){r.e(111).then(r.bind(r,7438)).then((t=>{let{setAPI:r}=t;r(e),(0,c.L)(e,"api")})).catch((()=>{(0,l.Z)("Downloading runtime APIs failed..."),(0,c.L)(e,"api",!0)}))}return["actionText","setName","setAttribute","save","ignore","onEnd","getContext","end","get"].forEach((e=>{w[e]=x(b,e,void 0,n.D.spa)})),h.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),(0,o.p)(f.xS,["API/noticeError/called"],void 0,n.D.metrics,p),(0,o.p)("err",[e,(0,s.z)(),!1,t],void 0,n.D.jserrors,p)},d.il?(0,u.b2)((()=>E()),!0):E(),h}(e.agentIdentifier,A)),void 0===e.exposed&&(e.exposed=T),y=!0}},1926:(e,t,r)=>{r.nc=(()=>{try{return document?.currentScript?.nonce}catch(e){}return""})()},3325:(e,t,r)=>{"use strict";r.d(t,{D:()=>n,p:()=>i});const n={ajax:"ajax",jserrors:"jserrors",metrics:"metrics",pageAction:"page_action",pageViewEvent:"page_view_event",pageViewTiming:"page_view_timing",sessionReplay:"session_replay",sessionTrace:"session_trace",spa:"spa"},i={[n.pageViewEvent]:1,[n.pageViewTiming]:2,[n.metrics]:3,[n.jserrors]:4,[n.ajax]:5,[n.sessionTrace]:6,[n.pageAction]:7,[n.spa]:8,[n.sessionReplay]:9}}},n={};function i(e){var t=n[e];if(void 0!==t)return t.exports;var o=n[e]={exports:{}};return r[e](o,o.exports,i),o.exports}i.m=r,i.d=(e,t)=>{for(var r in t)i.o(t,r)&&!i.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},i.f={},i.e=e=>Promise.all(Object.keys(i.f).reduce(((t,r)=>(i.f[r](e,t),t)),[])),i.u=e=>({111:"nr-spa",164:"nr-spa-compressor",433:"nr-spa-recorder"}[e]+"-1.252.1.min.js"),i.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),e={},t="NRBA-1.252.1.PROD:",i.l=(r,n,o,a)=>{if(e[r])e[r].push(n);else{var s,c;if(void 0!==o)for(var u=document.getElementsByTagName("script"),d=0;d<u.length;d++){var l=u[d];if(l.getAttribute("src")==r||l.getAttribute("data-webpack")==t+o){s=l;break}}if(!s){c=!0;var f={111:"sha512-yqKktm3jjy7vH57ymJxJxF1Z6jKArrgcXebUMwF0elgpFkLMiY9/6juO9vuYcQ3VLbGCuFTO0QlvCZc8xgPFaA==",433:"sha512-xCugVfV9zLov1hjT2nBv+ZvSWVPV2dTRP6ZOb5BWXDkjLxZfeMBu5Yb1JACb/dMdGYlFRYh6/5+evlY/nf7URw==",164:"sha512-9mCt3EsEBu4UoI4ZDKBWyuf3gjOy9vMrbuPNIGxVj+hCDXuCy2yhAiQXr+3Xyg4vMnD349BCtUd0vc2Cys6CFQ=="};(s=document.createElement("script")).charset="utf-8",s.timeout=120,i.nc&&s.setAttribute("nonce",i.nc),s.setAttribute("data-webpack",t+o),s.src=r,0!==s.src.indexOf(window.location.origin+"/")&&(s.crossOrigin="anonymous"),f[a]&&(s.integrity=f[a])}e[r]=[n];var h=(t,n)=>{s.onerror=s.onload=null,clearTimeout(p);var i=e[r];if(delete e[r],s.parentNode&&s.parentNode.removeChild(s),i&&i.forEach((e=>e(n))),t)return t(n)},p=setTimeout(h.bind(null,void 0,{type:"timeout",target:s}),12e4);s.onerror=h.bind(null,s.onerror),s.onload=h.bind(null,s.onload),c&&document.head.appendChild(s)}},i.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.p="https://js-agent.newrelic.com/",(()=>{var e={801:0,92:0};i.f.j=(t,r)=>{var n=i.o(e,t)?e[t]:void 0;if(0!==n)if(n)r.push(n[2]);else{var o=new Promise(((r,i)=>n=e[t]=[r,i]));r.push(n[2]=o);var a=i.p+i.u(t),s=new Error;i.l(a,(r=>{if(i.o(e,t)&&(0!==(n=e[t])&&(e[t]=void 0),n)){var o=r&&("load"===r.type?"missing":r.type),a=r&&r.target&&r.target.src;s.message="Loading chunk "+t+" failed.\n("+o+": "+a+")",s.name="ChunkLoadError",s.type=o,s.request=a,n[1](s)}}),"chunk-"+t,t)}};var t=(t,r)=>{var n,o,[a,s,c]=r,u=0;if(a.some((t=>0!==e[t]))){for(n in s)i.o(s,n)&&(i.m[n]=s[n]);if(c)c(i)}for(t&&t(r);u<a.length;u++)o=a[u],i.o(e,o)&&e[o]&&e[o][0](),e[o]=0},r=self["webpackChunk:NRBA-1.252.1.PROD"]=self["webpackChunk:NRBA-1.252.1.PROD"]||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})(),(()=>{"use strict";i(1926);var e=i(50);class t{#e(t){for(var r=arguments.length,n=new Array(r>1?r-1:0),i=1;i<r;i++)n[i-1]=arguments[i];if("function"==typeof this.api?.[t])return this.api[t](...n);(0,e.Z)("Call to agent api ".concat(t," failed. The API is not currently initialized."))}addPageAction(e,t){return this.#e("addPageAction",e,t)}setPageViewName(e,t){return this.#e("setPageViewName",e,t)}setCustomAttribute(e,t,r){return this.#e("setCustomAttribute",e,t,r)}noticeError(e,t){return this.#e("noticeError",e,t)}setUserId(e){return this.#e("setUserId",e)}setApplicationVersion(e){return this.#e("setApplicationVersion",e)}setErrorHandler(e){return this.#e("setErrorHandler",e)}finished(e){return this.#e("finished",e)}addRelease(e,t){return this.#e("addRelease",e,t)}start(e){return this.#e("start",e)}recordReplay(){return this.#e("recordReplay")}pauseReplay(){return this.#e("pauseReplay")}addToTrace(e){return this.#e("addToTrace",e)}setCurrentRouteName(e){return this.#e("setCurrentRouteName",e)}interaction(){return this.#e("interaction")}}var r=i(3325),n=i(234);const o=Object.values(r.D);function a(e){const t={};return o.forEach((r=>{t[r]=function(e,t){return!1!==(0,n.Mt)(t,"".concat(e,".enabled"))}(r,e)})),t}var s=i(8862);var c=i(8e3),u=i(5938),d=i(3960),l=i(385);class f extends u.W{constructor(e,t,r){let i=!(arguments.length>3&&void 0!==arguments[3])||arguments[3];super(e,t,r),this.auto=i,this.abortHandler=void 0,this.featAggregate=void 0,this.onAggregateImported=void 0,!1===(0,n.Mt)(this.agentIdentifier,"".concat(this.featureName,".autoStart"))&&(this.auto=!1),this.auto&&(0,c.R)(e,r)}importAggregator(){let t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};if(this.featAggregate)return;if(!this.auto)return void this.ee.on("".concat(this.featureName,"-opt-in"),(()=>{(0,c.R)(this.agentIdentifier,this.featureName),this.auto=!0,this.importAggregator()}));const r=l.il&&!0===(0,n.Mt)(this.agentIdentifier,"privacy.cookies_enabled");let o;this.onAggregateImported=new Promise((e=>{o=e}));const a=async()=>{let n;try{if(r){const{setupAgentSession:e}=await i.e(111).then(i.bind(i,1656));n=e(this.agentIdentifier)}}catch(t){(0,e.Z)("A problem occurred when starting up session manager. This page will not start or extend any session.",t)}try{if(!this.shouldImportAgg(this.featureName,n))return(0,c.L)(this.agentIdentifier,this.featureName),void o(!1);const{lazyFeatureLoader:e}=await i.e(111).then(i.bind(i,8582)),{Aggregate:r}=await e(this.featureName,"aggregate");this.featAggregate=new r(this.agentIdentifier,this.aggregator,t),o(!0)}catch(t){(0,e.Z)("Downloading and initializing ".concat(this.featureName," failed..."),t),this.abortHandler?.(),(0,c.L)(this.agentIdentifier,this.featureName,!0),o(!1)}};l.il?(0,d.b2)((()=>a()),!0):a()}shouldImportAgg(e,t){return e!==r.D.sessionReplay||!!n.Yu.MO&&(!1!==(0,n.Mt)(this.agentIdentifier,"session_trace.enabled")&&(!!t?.isNew||!!t?.state.sessionReplayMode))}}var h=i(7633);class p extends f{static featureName=h.t;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,h.t,r),this.importAggregator()}}var g=i(1117),m=i(1284);class v extends g.w{constructor(e){super(e),this.aggregatedData={}}store(e,t,r,n,i){var o=this.getBucket(e,t,r,i);return o.metrics=function(e,t){t||(t={count:0});return t.count+=1,(0,m.D)(e,(function(e,r){t[e]=b(r,t[e])})),t}(n,o.metrics),o}merge(e,t,r,n,i){var o=this.getBucket(e,t,n,i);if(o.metrics){var a=o.metrics;a.count+=r.count,(0,m.D)(r,(function(e,t){if("count"!==e){var n=a[e],i=r[e];i&&!i.c?a[e]=b(i.t,n):a[e]=function(e,t){if(!t)return e;t.c||(t=y(t.t));return t.min=Math.min(e.min,t.min),t.max=Math.max(e.max,t.max),t.t+=e.t,t.sos+=e.sos,t.c+=e.c,t}(i,a[e])}}))}else o.metrics=r}storeMetric(e,t,r,n){var i=this.getBucket(e,t,r);return i.stats=b(n,i.stats),i}getBucket(e,t,r,n){this.aggregatedData[e]||(this.aggregatedData[e]={});var i=this.aggregatedData[e][t];return i||(i=this.aggregatedData[e][t]={params:r||{}},n&&(i.custom=n)),i}get(e,t){return t?this.aggregatedData[e]&&this.aggregatedData[e][t]:this.aggregatedData[e]}take(e){for(var t={},r="",n=!1,i=0;i<e.length;i++)t[r=e[i]]=A(this.aggregatedData[r]),t[r].length&&(n=!0),delete this.aggregatedData[r];return n?t:null}}function b(e,t){return null==e?function(e){e?e.c++:e={c:1};return e}(t):t?(t.c||(t=y(t.t)),t.c+=1,t.t+=e,t.sos+=e*e,e>t.max&&(t.max=e),e<t.min&&(t.min=e),t):{t:e}}function y(e){return{t:e,min:e,max:e,sos:e*e,c:1}}function A(e){return"object"!=typeof e?[]:(0,m.D)(e,w)}function w(e,t){return t}var x=i(8632),E=i(4402),_=i(4351);var T=i(5546),S=i(7956),R=i(3239),D=i(7894),N=i(9251);class O extends f{static featureName=N.t;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,N.t,r),l.il&&((0,S.N)((()=>(0,T.p)("docHidden",[(0,D.z)()],void 0,N.t,this.ee)),!0),(0,R.bP)("pagehide",(()=>(0,T.p)("winPagehide",[(0,D.z)()],void 0,N.t,this.ee))),this.importAggregator())}}var I=i(3081);class j extends f{static featureName=I.t9;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,I.t9,r),this.importAggregator()}}var C=i(6660);class P{constructor(e,t,r,n){this.name="UncaughtError",this.message=e,this.sourceURL=t,this.line=r,this.column=n}}class k extends f{static featureName=C.t;#t=new Set;constructor(e,t){let n=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,C.t,n);try{this.removeOnAbort=new AbortController}catch(e){}this.ee.on("fn-err",((e,t,n)=>{this.abortHandler&&!this.#t.has(n)&&(this.#t.add(n),(0,T.p)("err",[this.#r(n),(0,D.z)()],void 0,r.D.jserrors,this.ee))})),this.ee.on("internal-error",(e=>{this.abortHandler&&(0,T.p)("ierr",[this.#r(e),(0,D.z)(),!0],void 0,r.D.jserrors,this.ee)})),l._A.addEventListener("unhandledrejection",(e=>{this.abortHandler&&(0,T.p)("err",[this.#n(e),(0,D.z)(),!1,{unhandledPromiseRejection:1}],void 0,r.D.jserrors,this.ee)}),(0,R.m$)(!1,this.removeOnAbort?.signal)),l._A.addEventListener("error",(e=>{this.abortHandler&&(this.#t.has(e.error)?this.#t.delete(e.error):(0,T.p)("err",[this.#i(e),(0,D.z)()],void 0,r.D.jserrors,this.ee))}),(0,R.m$)(!1,this.removeOnAbort?.signal)),this.abortHandler=this.#o,this.importAggregator()}#o(){this.removeOnAbort?.abort(),this.#t.clear(),this.abortHandler=void 0}#r(e){return e instanceof Error?e:void 0!==e?.message?new P(e.message,e.filename||e.sourceURL,e.lineno||e.line,e.colno||e.col):new P("string"==typeof e?e:(0,_.P)(e))}#n(e){let t="Unhandled Promise Rejection: ";if(e?.reason instanceof Error)try{return e.reason.message=t+e.reason.message,e.reason}catch(t){return e.reason}if(void 0===e.reason)return new P(t);const r=this.#r(e.reason);return r.message=t+r.message,r}#i(e){if(e.error instanceof SyntaxError&&!/:\d+$/.test(e.error.stack?.trim())){const t=new P(e.message,e.filename,e.lineno,e.colno);return t.name=SyntaxError.name,t}return e.error instanceof Error?e.error:new P(e.message,e.filename,e.lineno,e.colno)}}var M=i(2210);let H=1;const L="nr@id";function z(e){const t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===l._A?0:(0,M.X)(e,L,(function(){return H++}))}function F(e){if("string"==typeof e&&e.length)return e.length;if("object"==typeof e){if("undefined"!=typeof ArrayBuffer&&e instanceof ArrayBuffer&&e.byteLength)return e.byteLength;if("undefined"!=typeof Blob&&e instanceof Blob&&e.size)return e.size;if(!("undefined"!=typeof FormData&&e instanceof FormData))try{return(0,_.P)(e).length}catch(e){return}}}var B=i(1214),U=i(7243);class V{constructor(e){this.agentIdentifier=e}generateTracePayload(e){if(!this.shouldGenerateTrace(e))return null;var t=(0,n.DL)(this.agentIdentifier);if(!t)return null;var r=(t.accountID||"").toString()||null,i=(t.agentID||"").toString()||null,o=(t.trustKey||"").toString()||null;if(!r||!i)return null;var a=(0,E.M)(),s=(0,E.Ht)(),c=Date.now(),u={spanId:a,traceId:s,timestamp:c};return(e.sameOrigin||this.isAllowedOrigin(e)&&this.useTraceContextHeadersForCors())&&(u.traceContextParentHeader=this.generateTraceContextParentHeader(a,s),u.traceContextStateHeader=this.generateTraceContextStateHeader(a,c,r,i,o)),(e.sameOrigin&&!this.excludeNewrelicHeader()||!e.sameOrigin&&this.isAllowedOrigin(e)&&this.useNewrelicHeaderForCors())&&(u.newrelicHeader=this.generateTraceHeader(a,s,c,r,i,o)),u}generateTraceContextParentHeader(e,t){return"00-"+t+"-"+e+"-01"}generateTraceContextStateHeader(e,t,r,n,i){return i+"@nr=0-1-"+r+"-"+n+"-"+e+"----"+t}generateTraceHeader(e,t,r,n,i,o){if(!("function"==typeof l._A?.btoa))return null;var a={v:[0,1],d:{ty:"Browser",ac:n,ap:i,id:e,tr:t,ti:r}};return o&&n!==o&&(a.d.tk=o),btoa((0,_.P)(a))}shouldGenerateTrace(e){return this.isDtEnabled()&&this.isAllowedOrigin(e)}isAllowedOrigin(e){var t=!1,r={};if((0,n.Mt)(this.agentIdentifier,"distributed_tracing")&&(r=(0,n.P_)(this.agentIdentifier).distributed_tracing),e.sameOrigin)t=!0;else if(r.allowed_origins instanceof Array)for(var i=0;i<r.allowed_origins.length;i++){var o=(0,U.e)(r.allowed_origins[i]);if(e.hostname===o.hostname&&e.protocol===o.protocol&&e.port===o.port){t=!0;break}}return t}isDtEnabled(){var e=(0,n.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.enabled}excludeNewrelicHeader(){var e=(0,n.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.exclude_newrelic_header}useNewrelicHeaderForCors(){var e=(0,n.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!1!==e.cors_use_newrelic_header}useTraceContextHeadersForCors(){var e=(0,n.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.cors_use_tracecontext_headers}}var q=i(7825),G=["load","error","abort","timeout"],Z=G.length,W=n.Yu.REQ,X=n.Yu.XHR;class K extends f{static featureName=q.t;constructor(e,t){let i=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];if(super(e,t,q.t,i),(0,n.OP)(e).xhrWrappable){this.dt=new V(e),this.handler=(e,t,r,n)=>(0,T.p)(e,t,r,n,this.ee);try{const e={xmlhttprequest:"xhr",fetch:"fetch",beacon:"beacon"};l._A?.performance?.getEntriesByType("resource").forEach((t=>{if(t.initiatorType in e&&0!==t.responseStatus){const n={status:t.responseStatus},i={rxSize:t.transferSize,duration:Math.floor(t.duration),cbTime:0};Y(n,t.name),this.handler("xhr",[n,i,t.startTime,t.responseEnd,e[t.initiatorType]],void 0,r.D.ajax)}}))}catch(e){}(0,B.u5)(this.ee),(0,B.Kf)(this.ee),function(e,t,i,o){function a(e){var t=this;t.totalCbs=0,t.called=0,t.cbTime=0,t.end=x,t.ended=!1,t.xhrGuids={},t.lastSize=null,t.loadCaptureCalled=!1,t.params=this.params||{},t.metrics=this.metrics||{},e.addEventListener("load",(function(r){E(t,e)}),(0,R.m$)(!1)),l.IF||e.addEventListener("progress",(function(e){t.lastSize=e.loaded}),(0,R.m$)(!1))}function s(e){this.params={method:e[0]},Y(this,e[1]),this.metrics={}}function c(t,r){var i=(0,n.DL)(e);i.xpid&&this.sameOrigin&&r.setRequestHeader("X-NewRelic-ID",i.xpid);var a=o.generateTracePayload(this.parsedOrigin);if(a){var s=!1;a.newrelicHeader&&(r.setRequestHeader("newrelic",a.newrelicHeader),s=!0),a.traceContextParentHeader&&(r.setRequestHeader("traceparent",a.traceContextParentHeader),a.traceContextStateHeader&&r.setRequestHeader("tracestate",a.traceContextStateHeader),s=!0),s&&(this.dt=a)}}function u(e,r){var n=this.metrics,i=e[0],o=this;if(n&&i){var a=F(i);a&&(n.txSize=a)}this.startTime=(0,D.z)(),this.body=i,this.listener=function(e){try{"abort"!==e.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==e.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof r.onload)&&"function"==typeof o.end)&&o.end(r)}catch(e){try{t.emit("internal-error",[e])}catch(e){}}};for(var s=0;s<Z;s++)r.addEventListener(G[s],this.listener,(0,R.m$)(!1))}function d(e,t,r){this.cbTime+=e,t?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof r.onload||"function"!=typeof this.end||this.end(r)}function f(e,t){var r=""+z(e)+!!t;this.xhrGuids&&!this.xhrGuids[r]&&(this.xhrGuids[r]=!0,this.totalCbs+=1)}function h(e,t){var r=""+z(e)+!!t;this.xhrGuids&&this.xhrGuids[r]&&(delete this.xhrGuids[r],this.totalCbs-=1)}function p(){this.endTime=(0,D.z)()}function g(e,r){r instanceof X&&"load"===e[0]&&t.emit("xhr-load-added",[e[1],e[2]],r)}function m(e,r){r instanceof X&&"load"===e[0]&&t.emit("xhr-load-removed",[e[1],e[2]],r)}function v(e,t,r){t instanceof X&&("onload"===r&&(this.onload=!0),("load"===(e[0]&&e[0].type)||this.onload)&&(this.xhrCbStart=(0,D.z)()))}function b(e,r){this.xhrCbStart&&t.emit("xhr-cb-time",[(0,D.z)()-this.xhrCbStart,this.onload,r],r)}function y(e){var t,r=e[1]||{};if("string"==typeof e[0]?0===(t=e[0]).length&&l.il&&(t=""+l._A.location.href):e[0]&&e[0].url?t=e[0].url:l._A?.URL&&e[0]&&e[0]instanceof URL?t=e[0].href:"function"==typeof e[0].toString&&(t=e[0].toString()),"string"==typeof t&&0!==t.length){t&&(this.parsedOrigin=(0,U.e)(t),this.sameOrigin=this.parsedOrigin.sameOrigin);var n=o.generateTracePayload(this.parsedOrigin);if(n&&(n.newrelicHeader||n.traceContextParentHeader))if(e[0]&&e[0].headers)s(e[0].headers,n)&&(this.dt=n);else{var i={};for(var a in r)i[a]=r[a];i.headers=new Headers(r.headers||{}),s(i.headers,n)&&(this.dt=n),e.length>1?e[1]=i:e.push(i)}}function s(e,t){var r=!1;return t.newrelicHeader&&(e.set("newrelic",t.newrelicHeader),r=!0),t.traceContextParentHeader&&(e.set("traceparent",t.traceContextParentHeader),t.traceContextStateHeader&&e.set("tracestate",t.traceContextStateHeader),r=!0),r}}function A(e,t){this.params={},this.metrics={},this.startTime=(0,D.z)(),this.dt=t,e.length>=1&&(this.target=e[0]),e.length>=2&&(this.opts=e[1]);var r,n=this.opts||{},i=this.target;"string"==typeof i?r=i:"object"==typeof i&&i instanceof W?r=i.url:l._A?.URL&&"object"==typeof i&&i instanceof URL&&(r=i.href),Y(this,r);var o=(""+(i&&i instanceof W&&i.method||n.method||"GET")).toUpperCase();this.params.method=o,this.body=n.body,this.txSize=F(n.body)||0}function w(e,t){var n;this.endTime=(0,D.z)(),this.params||(this.params={}),this.params.status=t?t.status:0,"string"==typeof this.rxSize&&this.rxSize.length>0&&(n=+this.rxSize);var o={txSize:this.txSize,rxSize:n,duration:(0,D.z)()-this.startTime};i("xhr",[this.params,o,this.startTime,this.endTime,"fetch"],this,r.D.ajax)}function x(e){var t=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var o=0;o<Z;o++)e.removeEventListener(G[o],this.listener,!1);t.aborted||(n.duration=(0,D.z)()-this.startTime,this.loadCaptureCalled||4!==e.readyState?null==t.status&&(t.status=0):E(this,e),n.cbTime=this.cbTime,i("xhr",[t,n,this.startTime,this.endTime,"xhr"],this,r.D.ajax))}}function E(e,n){e.params.status=n.status;var i=function(e,t){var r=e.responseType;return"json"===r&&null!==t?t:"arraybuffer"===r||"blob"===r||"json"===r?F(e.response):"text"===r||""===r||void 0===r?F(e.responseText):void 0}(n,e.lastSize);if(i&&(e.metrics.rxSize=i),e.sameOrigin){var o=n.getResponseHeader("X-NewRelic-App-Data");o&&((0,T.p)(I.mY,["Ajax/CrossApplicationTracing/Header/Seen"],void 0,r.D.metrics,t),e.params.cat=o.split(", ").pop())}e.loadCaptureCalled=!0}t.on("new-xhr",a),t.on("open-xhr-start",s),t.on("open-xhr-end",c),t.on("send-xhr-start",u),t.on("xhr-cb-time",d),t.on("xhr-load-added",f),t.on("xhr-load-removed",h),t.on("xhr-resolved",p),t.on("addEventListener-end",g),t.on("removeEventListener-end",m),t.on("fn-end",b),t.on("fetch-before-start",y),t.on("fetch-start",A),t.on("fn-start",v),t.on("fetch-done",w)}(e,this.ee,this.handler,this.dt),this.importAggregator()}}}function Y(e,t){var r=(0,U.e)(t),n=e.params||e;n.hostname=r.hostname,n.port=r.port,n.protocol=r.protocol,n.host=r.hostname+":"+r.port,n.pathname=r.pathname,e.parsedOrigin=r,e.sameOrigin=r.sameOrigin}var J=i(3614);const{BST_RESOURCE:Q,RESOURCE:ee,START:te,END:re,FEATURE_NAME:ne,FN_END:ie,FN_START:oe,PUSH_STATE:ae}=J;var se=i(7056),ce=i(7144);class ue extends f{static featureName=ce.t9;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,ce.t9,r);try{const e=JSON.parse(localStorage.getItem("NRBA_SESSION"));e.sessionReplayMode!==se.IK.OFF?this.#a(e.sessionReplayMode):this.importAggregator({})}catch(e){this.importAggregator({})}}async#a(e){const{Recorder:t}=await Promise.all([i.e(111),i.e(433)]).then(i.bind(i,4136));this.recorder=new t({mode:e,agentIdentifier:this.agentIdentifier}),this.recorder.startRecording(),this.importAggregator({recorder:this.recorder})}}var de=i(7836);const{FEATURE_NAME:le,START:fe,END:he,BODY:pe,CB_END:ge,JS_TIME:me,FETCH:ve,FN_START:be,CB_START:ye,FN_END:Ae}=de;var we=i(4649);class xe extends f{static featureName=we.t;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,we.t,r),this.importAggregator()}}new class extends t{constructor(t){let r=arguments.length>1&&void 0!==arguments[1]?arguments[1]:(0,E.ky)(16);super(),l._A?(this.agentIdentifier=r,this.sharedAggregator=new v({agentIdentifier:this.agentIdentifier}),this.features={},(0,x.h5)(r,this),this.desiredFeatures=new Set(t.features||[]),this.desiredFeatures.add(p),(0,s.j)(this,t,t.loaderType||"agent"),this.run()):(0,e.Z)("Failed to initial the agent. Could not determine the runtime environment.")}get config(){return{info:(0,n.C5)(this.agentIdentifier),init:(0,n.P_)(this.agentIdentifier),loader_config:(0,n.DL)(this.agentIdentifier),runtime:(0,n.OP)(this.agentIdentifier)}}run(){try{const t=a(this.agentIdentifier),n=[...this.desiredFeatures];n.sort(((e,t)=>r.p[e.featureName]-r.p[t.featureName])),n.forEach((n=>{if(t[n.featureName]||n.featureName===r.D.pageViewEvent){const i=function(e){switch(e){case r.D.ajax:return[r.D.jserrors];case r.D.sessionTrace:return[r.D.ajax,r.D.pageViewEvent];case r.D.sessionReplay:return[r.D.sessionTrace];case r.D.pageViewTiming:return[r.D.pageViewEvent];default:return[]}}(n.featureName);i.every((e=>t[e]))||(0,e.Z)("".concat(n.featureName," is enabled but one or more dependent features has been disabled (").concat((0,_.P)(i),"). This may cause unintended consequences or missing data...")),this.features[n.featureName]=new n(this.agentIdentifier,this.sharedAggregator)}}))}catch(t){(0,e.Z)("Failed to initialize all enabled instrument classes (agent aborted) -",t);for(const e in this.features)this.features[e].abortHandler?.();const r=(0,x.fP)();return delete r.initializedAgents[this.agentIdentifier]?.api,delete r.initializedAgents[this.agentIdentifier]?.features,delete this.sharedAggregator,r.ee?.abort(),delete r.ee?.get(this.agentIdentifier),!1}}}({features:[K,p,O,class extends f{static featureName=ne;constructor(e,t){if(super(e,t,ne,!(arguments.length>2&&void 0!==arguments[2])||arguments[2]),!l.il)return;const n=this.ee;let i;(0,B.QU)(n),this.eventsEE=(0,B.em)(n),this.eventsEE.on(oe,(function(e,t){this.bstStart=(0,D.z)()})),this.eventsEE.on(ie,(function(e,t){(0,T.p)("bst",[e[0],t,this.bstStart,(0,D.z)()],void 0,r.D.sessionTrace,n)})),n.on(ae+te,(function(e){this.time=(0,D.z)(),this.startPath=location.pathname+location.hash})),n.on(ae+re,(function(e){(0,T.p)("bstHist",[location.pathname+location.hash,this.startPath,this.time],void 0,r.D.sessionTrace,n)}));try{i=new PerformanceObserver((e=>{const t=e.getEntries();(0,T.p)(Q,[t],void 0,r.D.sessionTrace,n)})),i.observe({type:ee,buffered:!0})}catch(e){}this.importAggregator({resourceObserver:i})}},ue,j,xe,k,class extends f{static featureName=le;constructor(e,t){if(super(e,t,le,!(arguments.length>2&&void 0!==arguments[2])||arguments[2]),!l.il)return;if(!(0,n.OP)(e).xhrWrappable)return;try{this.removeOnAbort=new AbortController}catch(e){}let r,i=0;const o=this.ee.get("tracer"),a=(0,B._L)(this.ee),s=(0,B.Lg)(this.ee),c=(0,B.BV)(this.ee),u=(0,B.Kf)(this.ee),d=this.ee.get("events"),f=(0,B.u5)(this.ee),h=(0,B.QU)(this.ee),p=(0,B.Gm)(this.ee);function g(e,t){h.emit("newURL",[""+window.location,t])}function m(){i++,r=window.location.hash,this[be]=(0,D.z)()}function v(){i--,window.location.hash!==r&&g(0,!0);var e=(0,D.z)();this[me]=~~this[me]+e-this[be],this[Ae]=e}function b(e,t){e.on(t,(function(){this[t]=(0,D.z)()}))}this.ee.on(be,m),s.on(ye,m),a.on(ye,m),this.ee.on(Ae,v),s.on(ge,v),a.on(ge,v),this.ee.buffer([be,Ae,"xhr-resolved"],this.featureName),d.buffer([be],this.featureName),c.buffer(["setTimeout"+he,"clearTimeout"+fe,be],this.featureName),u.buffer([be,"new-xhr","send-xhr"+fe],this.featureName),f.buffer([ve+fe,ve+"-done",ve+pe+fe,ve+pe+he],this.featureName),h.buffer(["newURL"],this.featureName),p.buffer([be],this.featureName),s.buffer(["propagate",ye,ge,"executor-err","resolve"+fe],this.featureName),o.buffer([be,"no-"+be],this.featureName),a.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"],this.featureName),b(f,ve+fe),b(f,ve+"-done"),b(a,"new-jsonp"),b(a,"jsonp-end"),b(a,"cb-start"),h.on("pushState-end",g),h.on("replaceState-end",g),window.addEventListener("hashchange",g,(0,R.m$)(!0,this.removeOnAbort?.signal)),window.addEventListener("load",g,(0,R.m$)(!0,this.removeOnAbort?.signal)),window.addEventListener("popstate",(function(){g(0,i>1)}),(0,R.m$)(!0,this.removeOnAbort?.signal)),this.abortHandler=this.#o,this.importAggregator()}#o(){this.removeOnAbort?.abort(),this.abortHandler=void 0}}],loaderType:"spa"})})()})();</script>
    <title>XM Live | Edukasi Live XM</title>
    <meta name="description" content="Pelajari semua tentang penawaran XM. XM Live sebagai pengantar XM, dengan wawancara para ahli dan sesi Tanya Jawab dimana trader mendapatkan semua jawaban mereka secara langsung.">
    <meta name="keywords" content="edukasi forex live xm, edukasi cfd live xm, ruang edukasi forex live xm, edukasi forex harian online xm, ruang edukasi live xm, xm live">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KPSPFZ');</script>
<!-- End Google Tag Manager -->

    
<meta property="og:image" content="https://cloud.xm-cdn.com/static/xm/common/logos/XM-logo.jpg">
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

    <link rel="shortcut icon" type="image/x-icon" href="https://cloud.xm-cdn.com/assets/img/common/favicon.ico">
    <link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/new_structure/libraries/bootstrapFull_3_4_1.min.css">
    <link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/new_structure/libraries/popper_tippy.min.css?v324324">
    <link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/new_structure/sources/base/fonts.css">
    <link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/new_structure/sources/base/typography.css">
    <link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/new_structure/sources/base/layout-html.css">
    <link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/new_structure/sources/base/buttons.css">
    <link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/new_structure/sources/components/lists.css">
    <link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/new_structure/sources/base/helpers.css">
    <link rel="stylesheet" href="https://cloud.xm-cdn.com/assets/css/new_structure/sources/pages/cntv.css?v1710248316">
    <script src="https://kit.fontawesome.com/0677960cd8.js" crossorigin="anonymous"></script> 

<script>(window.BOOMR_mq=window.BOOMR_mq||[]).push(["addVar",{"rua.upush":"false","rua.cpush":"false","rua.upre":"false","rua.cpre":"true","rua.uprl":"false","rua.cprl":"false","rua.cprf":"false","rua.trans":"SJ-c15f97a5-19ba-4381-9647-264dfd61b14c","rua.cook":"true","rua.ims":"false","rua.ufprl":"false","rua.cfprl":"false","rua.isuxp":"false","rua.texp":"norulematch"}]);</script>
                              <script>!function(e){var n="https://s.go-mpulse.net/boomerang/";if("False"=="True")e.BOOMR_config=e.BOOMR_config||{},e.BOOMR_config.PageParams=e.BOOMR_config.PageParams||{},e.BOOMR_config.PageParams.pci=!0,n="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="FX72H-U393W-CNX6U-WRWHF-88HB7",function(){function e(){if(!o){var e=document.createElement("script");e.id="boomr-scr-as",e.src=window.BOOMR.url,e.async=!0,i.parentNode.appendChild(e),o=!0}}function t(e){o=!0;var n,t,a,r,d=document,O=window;if(window.BOOMR.snippetMethod=e?"if":"i",t=function(e,n){var t=d.createElement("script");t.id=n||"boomr-if-as",t.src=window.BOOMR.url,BOOMR_lstart=(new Date).getTime(),e=e||d.body,e.appendChild(t)},!window.addEventListener&&window.attachEvent&&navigator.userAgent.match(/MSIE [67]\./))return window.BOOMR.snippetMethod="s",void t(i.parentNode,"boomr-async");a=document.createElement("IFRAME"),a.src="about:blank",a.title="",a.role="presentation",a.loading="eager",r=(a.frameElement||a).style,r.width=0,r.height=0,r.border=0,r.display="none",i.parentNode.appendChild(a);try{O=a.contentWindow,d=O.document.open()}catch(_){n=document.domain,a.src="javascript:var d=document.open();d.domain='"+n+"';void(0);",O=a.contentWindow,d=O.document.open()}if(n)d._boomrl=function(){this.domain=n,t()},d.write("<bo"+"dy onload='document._boomrl();'>");else if(O._boomrl=function(){t()},O.addEventListener)O.addEventListener("load",O._boomrl,!1);else if(O.attachEvent)O.attachEvent("onload",O._boomrl);d.close()}function a(e){window.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!window.BOOMR||!window.BOOMR.version&&!window.BOOMR.snippetExecuted){window.BOOMR=window.BOOMR||{},window.BOOMR.snippetStart=(new Date).getTime(),window.BOOMR.snippetExecuted=!0,window.BOOMR.snippetVersion=12,window.BOOMR.url=n+"FX72H-U393W-CNX6U-WRWHF-88HB7";var i=document.currentScript||document.getElementsByTagName("script")[0],o=!1,r=document.createElement("link");if(r.relList&&"function"==typeof r.relList.supports&&r.relList.supports("preload")&&"as"in r)window.BOOMR.snippetMethod="p",r.href=window.BOOMR.url,r.rel="preload",r.as="script",r.addEventListener("load",e),r.addEventListener("error",function(){t(!0)}),setTimeout(function(){if(!o)t(!0)},3e3),BOOMR_lstart=(new Date).getTime(),i.parentNode.appendChild(r);else t(!1);if(window.addEventListener)window.addEventListener("load",a,!1);else if(window.attachEvent)window.attachEvent("onload",a)}}(),"".length>0)if(e&&"performance"in e&&e.performance&&"function"==typeof e.performance.setResourceTimingBufferSize)e.performance.setResourceTimingBufferSize();!function(){if(BOOMR=e.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var n="true"=="true"?1:0,t="cookiepresent",a="m4jcgkixeaowwzpqkf6a-f-d8f709f1f-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,o={"ak.v":"36","ak.cp":"1137547","ak.ai":parseInt("677135",10),"ak.ol":"0","ak.cr":23,"ak.ipv":4,"ak.proto":"h2","ak.rid":"d34593ee","ak.r":11483,"ak.a2":n,"ak.m":"a","ak.n":"essl","ak.bpcip":"103.18.35.0","ak.cport":62712,"ak.gh":"23.32.29.103","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1710248316","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==3WVoDsfITmwl+2qD4MWNtq2w6IFRrYe6xoURFYjNHpvWKKomGBLwQAk/9n0xKEyf5lGiOM92wK/SfjjPMbCq7Nh06JnkYUvojFR4/VVUkWC1xJqFxtNd8PKHf1a4dEe3VegF7gn7MPHoRjVQer1wqPBnz3Ijn6O6zq4/oAMOcBwZthhwpwKTl3ogjAm+42ICgdv1ztMDtmMmDzeT4bG8mFdhX/5yuJaHd8+ruZZMqPt86TVl8uv/J7oEqacqhKG6VovrYozxRDJIt2ocZIL3NarEkSRLzWovL2qoTuPy1/YCL0yro1lbKgRb802G0omOVrMmYxO+GamMTHhOtzSjNmCsSNIoxhIloa6yX96yBbZVTpVwg7TbrDVQqaJLXfVa2tAL4EGnQ/v0ZqFolDaU91eYBgZBr8Gm8K+mQWDZNuY=","ak.pv":"274","ak.dpoabenc":"","ak.tf":i};if(""!==t)o["ak.ruds"]=t;var r={i:!1,av:function(n){var t="http.initiator";if(n&&(!n[t]||"spa_hard"===n[t]))o["ak.feo"]=void 0!==e.aFeoApplied?1:0,BOOMR.addVar(o)},rv:function(){var e=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(e)}};BOOMR.plugins.AK={akVars:o,akDNSPreFetchDomain:a,init:function(){if(!r.i){var e=BOOMR.subscribe;e("before_beacon",r.av,null,null),e("onbeacon",r.rv,null,null),r.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script></head>

<body class="">
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
    <div class="pg-streaming">
        <div id="pg-streaming__overlay"></div>
        <div class="container-fluid">
            <div class="pg-streaming__header">
                <a href="https://www.xmindonesiatrade.com/id/">
                    <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/XMLogo-2021_live-education.svg?v=713d81c13afb15b7d81c54cd70dfff94" alt="XM Logo" width="148">
                </a>
            </div>
            <div class="pg-streaming__block">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="https://www.xmindonesiatrade.com/id/live-player/xmlive" class="emphasized-font text-center">XM LIVE</a>
                    </li>
                    <div class="dis15 visible-xs"></div>
                    <li class="">
                        <a href="https://www.xmindonesiatrade.com/id/live-player/basic" class="emphasized-font text-center">RUANG PEMULA INGGRIS</a>
                    </li>
                    <div class="dis15 visible-xs"></div>
                    <li class="">
                        <a href="https://www.xmindonesiatrade.com/id/live-player/advanced" class="emphasized-font text-center">RUANG LANJUTAN INGGRIS</a>
                    </li>
                    <div class="dis15 visible-xs"></div>
                                            <li class="">
                                                            <a href="https://www.xmindonesiatrade.com/id/live-player/id-local-advanced" class="emphasized-font text-center">RUANG LANJUTAN INDONESIA</a>
                                                    </li>
                                    </ul>
                <div class="dis20"></div>
                                <div class="row">
                    <div class="col-md-8">
                        <div class="video-block">
                            <iframe id="video-iframe" class="video-block__iframe" src="https://livestream.com/accounts/26429473/events/8260213/player?width=960&height=540&enableInfoAndActivity=true&defaultDrawer=feed&autoPlay=true&mute=false" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="dis15 visible-xs"></div>
                    <div class="dis30 visible-sm"></div>
                </div>
                            </div>
            <!-- About and Instructors Tab Section -->
            <div class="pg-streaming__bios">
                <div class="dis30"></div>
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <div class="scrollable-menu">
                            <nav class="scrollable-menu__scroll">
                                <ul class="nav nav-tabs">
                                    <li class="scrollable-menu__link active">
                                        <a data-toggle="tab" href="#about">Tentang</a></li>
                                    </li>
                                    <li class="scrollable-menu__link">
                                        <a data-toggle="tab" href="#instructors">Pembicara</a>
                                    </li>
                                                                        <li class="scrollable-menu__link">
                                        <a data-toggle="tab" href="#research">Tim Riset Pasar</a>
                                    </li>
                                                                    </ul>
                            </nav>
                        </div>
                        <div class="tab-content">
                            <div id="about" class="tab-pane fade in active">
                                                                    <h1>
                                        Senin - Jumat:                                         <span>
                                            07:00 - 16:00                                        </span>
                                        GMT                                        
                                                                            </h1>
                                                                <p>
                                Temui pembicara kami dan ketahui XM lebih lanjut. Saksikan acara harian khusus kami, interview live bersama para ahli dan ikuti terus jadwal kami hari ini. Pelajari mengenai pasar finansial dan mengetahui lebih lanjut mengenai produk dan layanan yang kami tawarkan untuk keuntungan trading Anda.                                </p>
                                <div class="dis5"></div>
                                <hr>
                                <div class="dis10"></div>
                                <small>Setiap konten pihak ketiga, serta konten yang disiapkan oleh XM yang terdapat di situs web ini disediakan atas dasar “sebagaimana adanya”, sebagai komentar pasar secara umum dan bukan merupakan saran investasi.</small>
                                <div class="dis30"></div>
                                <h2>Bagikan kelas ini:</h2>
                                <div class="dis10"></div>
                                <a data-network="facebook" class="st-custom-button right10">
                                    <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/facebook.svg" alt="Facebook">
							    </a>
                                <a data-network="twitter" class="st-custom-button right10">
                                    <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/twitter.svg" alt="Twitter">
							    </a>
                                <a data-network="linkedin" class="st-custom-button right10">
                                    <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/linkedin.svg" alt="LinkedIn">
							    </a>
                            </div>
                            <div id="instructors" class="tab-pane fade">
                                <div class="dis30"></div>
                                <div class="row">
                                                                            <div class="col-sm-3 col-xs-6">
                                            <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/Hosts/Susanne-Schwender.png" alt="Instructor">
                                            <div class="dis10"></div>
                                            <p>Susanne Schwender</p>
                                            <div class="dis10"></div>
                                        </div>
                                                                            <div class="col-sm-3 col-xs-6">
                                            <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/Hosts/Lila-Athanasiou.jpg" alt="Instructor">
                                            <div class="dis10"></div>
                                            <p>Lila Athanasiou</p>
                                            <div class="dis10"></div>
                                        </div>
                                                                            <div class="col-sm-3 col-xs-6">
                                            <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/Hosts/Anna-Keimenidou.jpg" alt="Instructor">
                                            <div class="dis10"></div>
                                            <p>Anna Kemenidou</p>
                                            <div class="dis10"></div>
                                        </div>
                                                                            <div class="col-sm-3 col-xs-6">
                                            <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/Hosts/Anna-Maria-Charalampi.jpg" alt="Instructor">
                                            <div class="dis10"></div>
                                            <p>Anna-Maria Charalampi</p>
                                            <div class="dis10"></div>
                                        </div>
                                                                            <div class="col-sm-3 col-xs-6">
                                            <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/Hosts/Stav-Kyriakidou.webp" alt="Instructor">
                                            <div class="dis10"></div>
                                            <p>Stav Kyriakidou</p>
                                            <div class="dis10"></div>
                                        </div>
                                      
                                </div>
                                <div class="dis25"></div>
                                <a href="https://www.xmindonesiatrade.com/id/live-education-hosts" class="btn btn-outline btn-green btn-block">LANJUT BACA</a>
                            </div>
                                                        <div id="research" class="tab-pane fade">
                                <div class="dis30"></div>
                                <div class="row">
                                                                            <div class="col-sm-3 col-xs-6">
                                            <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/Research/English/Michalis.png" alt="Research Team">
                                            <div class="dis10"></div>
                                            <p><strong>Michalis Florentiades</strong></p>
                                            <div class="dis10"></div>
                                        </div>
                                                                            <div class="col-sm-3 col-xs-6">
                                            <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/Research/English/raffi.jpg" alt="Research Team">
                                            <div class="dis10"></div>
                                            <p><strong>Raffi Boyadjian</strong></p>
                                            <div class="dis10"></div>
                                        </div>
                                                                            <div class="col-sm-3 col-xs-6">
                                            <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/Research/English/marios.jpg" alt="Research Team">
                                            <div class="dis10"></div>
                                            <p><strong>Marios Hadjikyriacos</strong></p>
                                            <div class="dis10"></div>
                                        </div>
                                                                            <div class="col-sm-3 col-xs-6">
                                            <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/Research/English/Christina.png" alt="Research Team">
                                            <div class="dis10"></div>
                                            <p><strong>Christina Parthenidou</strong></p>
                                            <div class="dis10"></div>
                                        </div>
                                                                            <div class="col-sm-3 col-xs-6">
                                            <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/Research/English/Melina-Deltas.jpg" alt="Research Team">
                                            <div class="dis10"></div>
                                            <p><strong>Melina Deltas</strong></p>
                                            <div class="dis10"></div>
                                        </div>
                                                                            <div class="col-sm-3 col-xs-6">
                                            <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/Research/English/stefanos.jpg" alt="Research Team">
                                            <div class="dis10"></div>
                                            <p><strong>Stefanos Oikonomidis</strong></p>
                                            <div class="dis10"></div>
                                        </div>
                                                                            <div class="col-sm-3 col-xs-6">
                                            <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/Research/English/charalampos.jpg" alt="Research Team">
                                            <div class="dis10"></div>
                                            <p>Charalampos Pissouros</p>
                                            <div class="dis10"></div>
                                        </div>
                                                                            <div class="col-sm-3 col-xs-6">
                                            <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/Research/English/Achilleas.png" alt="Research Team">
                                            <div class="dis10"></div>
                                            <p>Achilleas Georgolopoulos</p>
                                            <div class="dis10"></div>
                                        </div>
                                      
                                </div>
                                <div class="dis25"></div>
                                <a href="https://www.xmindonesiatrade.com/id/live-education-research-team" class="btn btn-outline btn-green btn-block">LANJUT BACA</a>
                            </div>
                                                                                </div>
                        <div class="dis40"></div>
                        <!-- If user doen't have Real Account -->
                        <div id="open-account-banner" class="pg-streaming__bios-block" hidden>
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1><strong>Buka akun riil</strong> dan nikmati akses tidak terbatas untuk ruang edukasi kami.</h1>
                                    <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/live-education-player-line.svg" alt="">
                                    <div class="dis5"></div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="checks">
                                                <li>Webinar Live</li>
                                                <li>Tanya Jawab dengan Ahli Pasar Kami</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="checks">
                                                <li>Dasar-dasar Trading</li>
                                                <li>Debat Live</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="dis5 hidden-xs"></div>
                                    <div class="dis25 visible-xs"></div>
                                    <div id="open-real-account">
                                        <a href="https://www.xmindonesiatrade.com/goto/profile/id" class="btn btn-solid btn-red btn-block">
                                            BUKA AKUN RIIL                                        </a>
                                    </div>
                                    <div class="dis25"></div>
                                    <p>Layanan kami melibatkan risiko signifikan dan dapat menyebabkan hilangnya modal yang Anda investasikan. S&K Berlaku.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End -->

                        <!-- If user have Real Account -->
                        <div id="research-banner" class="pg-streaming__bios-block" hidden>
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1>Sukses di pasar dengan analisis ahli kami</h1>
                                    <img src="https://cloud.xm-cdn.com/static/xm/pages/live-education/live-education-player-line.svg" alt="">
                                    <div class="dis5"></div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="checks">
                                                <li>Berita Pasar</li>
                                                <li>Analisis Teknis</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="checks">
                                                <li>Kalender Ekonomi</li>
                                                <li>Strategi Trading</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="dis5 hidden-xs"></div>
                                    <div class="dis25 visible-xs"></div>
                                    <div id="market-research">
                                        <a href="https://www.xmindonesiatrade.com/id/research/overview" class="btn btn-solid btn-red btn-block">
                                            DAPATKAN RISET PASAR TERBARU                                        </a>
                                    </div>
                                    <div class="dis25"></div>
                                    <p>*S&K berlaku. Trading Forex dan CFD memiliki risiko tinggi dan dapat menyebabkan kerugian pada semua modal yang Anda investasikan.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="join-room" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <button id="join-room-close-button" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="bold text-center reset">Ingin akses tidak terbatas untuk sesi Edukasi Live kami?</h2>
            <div class="dis10"></div>
            <p class="text-center join-room-header-paragraph">Masukkan keterangan Anda untuk tetap menyaksikan. Belajar dari instruktur ahli.</p>
            <p class="text-center">Mendiskusikan strategi, pergerakan dan berita pasar.</p>
            <div class="dis10"></div>
            <!-- Start of form -->
            <form class="form" id="room-form" role="form-inline" action="" method="post">
                <input class="form-control" id="room_type" name="room_type" type="hidden" value="1" />
                <input class="form-control" id="brand" name="brand" type="hidden" value="xmbz" />
                <input class="form-control" id="language" name="language" type="hidden" value="id" />
                <!-- Start of form fields -->
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group has-feedback">
                            <label for="first_name">
                                <span class="red">*</span>Nama Depan                            </label>
                            <input class="form-control" id="first_name" name="first_name" type="text" value="" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group has-feedback">
                            <label for="last_name">
                                <span class="red">*</span> Nama Belakang                            </label>
                            <input class="form-control" id="last_name" name="last_name" type="text" value="" />
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group has-feedback">
                            <label for="country">
                                <span class="red">*</span> Negara                            </label>
                            <select class="form-control" id="country" name="country">
                                <option value=""></option>
                                                                    <option value="DZ">
                                        Algeria                                    </option>
                                                                    <option value="AD">
                                        Andorra                                    </option>
                                                                    <option value="AO">
                                        Angola                                    </option>
                                                                    <option value="AQ">
                                        Antarctica                                    </option>
                                                                    <option value="AG">
                                        Antigua and Barbuda                                    </option>
                                                                    <option value="AM">
                                        Armenia                                    </option>
                                                                    <option value="AW">
                                        Aruba                                    </option>
                                                                    <option value="AU">
                                        Australia                                    </option>
                                                                    <option value="AT">
                                        Austria                                    </option>
                                                                    <option value="AZ">
                                        Azerbaijan                                    </option>
                                                                    <option value="BS">
                                        Bahamas                                    </option>
                                                                    <option value="BH">
                                        Bahrain                                    </option>
                                                                    <option value="BD">
                                        Bangladesh                                    </option>
                                                                    <option value="BY">
                                        Belarus                                    </option>
                                                                    <option value="BE">
                                        Belgium                                    </option>
                                                                    <option value="BJ">
                                        Benin                                    </option>
                                                                    <option value="BM">
                                        Bermuda                                    </option>
                                                                    <option value="BT">
                                        Bhutan                                    </option>
                                                                    <option value="BO">
                                        Bolivia                                    </option>
                                                                    <option value="BA">
                                        Bosnia and Herzegovina                                    </option>
                                                                    <option value="BW">
                                        Botswana                                    </option>
                                                                    <option value="BR">
                                        Brazil                                    </option>
                                                                    <option value="IO">
                                        British Indian Ocean                                    </option>
                                                                    <option value="VG">
                                        British Virgin Islands                                    </option>
                                                                    <option value="BN">
                                        Brunei                                    </option>
                                                                    <option value="BG">
                                        Bulgaria                                    </option>
                                                                    <option value="BF">
                                        Burkina Faso                                    </option>
                                                                    <option value="BI">
                                        Burundi                                    </option>
                                                                    <option value="CV">
                                        Cabo Verde                                    </option>
                                                                    <option value="KH">
                                        Cambodia                                    </option>
                                                                    <option value="CM">
                                        Cameroon                                    </option>
                                                                    <option value="KY">
                                        Cayman Islands                                    </option>
                                                                    <option value="CF">
                                        Central African Republic                                    </option>
                                                                    <option value="TD">
                                        Chad                                    </option>
                                                                    <option value="CL">
                                        Chile                                    </option>
                                                                    <option value="CN">
                                        China                                    </option>
                                                                    <option value="CX">
                                        Christmas Island                                    </option>
                                                                    <option value="CC">
                                        Cocos (Keeling) Islands                                    </option>
                                                                    <option value="CO">
                                        Colombia                                    </option>
                                                                    <option value="KM">
                                        Comoros                                    </option>
                                                                    <option value="CD">
                                        Congo, Democratic Republic of                                    </option>
                                                                    <option value="CG">
                                        Congo, Republic of the                                    </option>
                                                                    <option value="CK">
                                        Cook Islands                                    </option>
                                                                    <option value="CR">
                                        Costa Rica                                    </option>
                                                                    <option value="HR">
                                        Croatia                                    </option>
                                                                    <option value="CW">
                                        Curacao                                    </option>
                                                                    <option value="CY">
                                        Cyprus                                    </option>
                                                                    <option value="CZ">
                                        Czech Republic                                    </option>
                                                                    <option value="DK">
                                        Denmark                                    </option>
                                                                    <option value="DJ">
                                        Djibouti                                    </option>
                                                                    <option value="DM">
                                        Dominica                                    </option>
                                                                    <option value="DO">
                                        Dominican Republic                                    </option>
                                                                    <option value="TL">
                                        East Timor                                    </option>
                                                                    <option value="EC">
                                        Ecuador                                    </option>
                                                                    <option value="EG">
                                        Egypt                                    </option>
                                                                    <option value="SV">
                                        El Salvador                                    </option>
                                                                    <option value="GQ">
                                        Equatorial Guinea                                    </option>
                                                                    <option value="ER">
                                        Eritrea                                    </option>
                                                                    <option value="EE">
                                        Estonia                                    </option>
                                                                    <option value="ET">
                                        Ethiopia                                    </option>
                                                                    <option value="FK">
                                        Falkland Islands (Malvinas)                                    </option>
                                                                    <option value="FO">
                                        Faroe Islands                                    </option>
                                                                    <option value="FJ">
                                        Fiji                                    </option>
                                                                    <option value="FI">
                                        Finland                                    </option>
                                                                    <option value="FR">
                                        France                                    </option>
                                                                    <option value="GF">
                                        French Guiana                                    </option>
                                                                    <option value="PF">
                                        French Polynesia                                    </option>
                                                                    <option value="GA">
                                        Gabon                                    </option>
                                                                    <option value="GM">
                                        Gambia                                    </option>
                                                                    <option value="GE">
                                        Georgia                                    </option>
                                                                    <option value="DE">
                                        Germany                                    </option>
                                                                    <option value="GH">
                                        Ghana                                    </option>
                                                                    <option value="GI">
                                        Gibraltar                                    </option>
                                                                    <option value="GR">
                                        Greece                                    </option>
                                                                    <option value="GL">
                                        Greenland                                    </option>
                                                                    <option value="GD">
                                        Grenada                                    </option>
                                                                    <option value="GP">
                                        Guadeloupe                                    </option>
                                                                    <option value="GT">
                                        Guatemala                                    </option>
                                                                    <option value="GN">
                                        Guinea                                    </option>
                                                                    <option value="GW">
                                        Guinea-Bissau                                    </option>
                                                                    <option value="GY">
                                        Guyana                                    </option>
                                                                    <option value="HT">
                                        Haiti                                    </option>
                                                                    <option value="HN">
                                        Honduras                                    </option>
                                                                    <option value="HK">
                                        Hong Kong SAR                                    </option>
                                                                    <option value="HU">
                                        Hungary                                    </option>
                                                                    <option value="IS">
                                        Iceland                                    </option>
                                                                    <option value="IN">
                                        India                                    </option>
                                                                    <option value="ID">
                                        Indonesia                                    </option>
                                                                    <option value="IQ">
                                        Iraq                                    </option>
                                                                    <option value="IE">
                                        Ireland                                    </option>
                                                                    <option value="IT">
                                        Italy                                    </option>
                                                                    <option value="CI">
                                        Ivory Coast                                    </option>
                                                                    <option value="JM">
                                        Jamaica                                    </option>
                                                                    <option value="JO">
                                        Jordan                                    </option>
                                                                    <option value="KZ">
                                        Kazakhstan                                    </option>
                                                                    <option value="KE">
                                        Kenya                                    </option>
                                                                    <option value="KI">
                                        Kiribati                                    </option>
                                                                    <option value="KR">
                                        Korea, South                                    </option>
                                                                    <option value="KW">
                                        Kuwait                                    </option>
                                                                    <option value="KG">
                                        Kyrgyzstan                                    </option>
                                                                    <option value="LA">
                                        Laos                                    </option>
                                                                    <option value="LV">
                                        Latvia                                    </option>
                                                                    <option value="LB">
                                        Lebanon                                    </option>
                                                                    <option value="LS">
                                        Lesotho                                    </option>
                                                                    <option value="LY">
                                        Libya                                    </option>
                                                                    <option value="LI">
                                        Liechtenstein                                    </option>
                                                                    <option value="LT">
                                        Lithuania                                    </option>
                                                                    <option value="LU">
                                        Luxembourg                                    </option>
                                                                    <option value="MO">
                                        Macau China                                    </option>
                                                                    <option value="MG">
                                        Madagascar                                    </option>
                                                                    <option value="MW">
                                        Malawi                                    </option>
                                                                    <option value="MY">
                                        Malaysia                                    </option>
                                                                    <option value="MV">
                                        Maldives                                    </option>
                                                                    <option value="ML">
                                        Mali                                    </option>
                                                                    <option value="MT">
                                        Malta                                    </option>
                                                                    <option value="MH">
                                        Marshall Islands                                    </option>
                                                                    <option value="MQ">
                                        Martinique                                    </option>
                                                                    <option value="MR">
                                        Mauritania                                    </option>
                                                                    <option value="MU">
                                        Mauritius                                    </option>
                                                                    <option value="YT">
                                        Mayotte                                    </option>
                                                                    <option value="MX">
                                        Mexico                                    </option>
                                                                    <option value="FM">
                                        Micronesia                                    </option>
                                                                    <option value="MD">
                                        Moldova                                    </option>
                                                                    <option value="MC">
                                        Monaco                                    </option>
                                                                    <option value="MN">
                                        Mongolia                                    </option>
                                                                    <option value="ME">
                                        Montenegro                                    </option>
                                                                    <option value="MS">
                                        Montserrat                                    </option>
                                                                    <option value="MA">
                                        Morocco                                    </option>
                                                                    <option value="MZ">
                                        Mozambique                                    </option>
                                                                    <option value="NA">
                                        Namibia                                    </option>
                                                                    <option value="NR">
                                        Nauru                                    </option>
                                                                    <option value="NP">
                                        Nepal                                    </option>
                                                                    <option value="NL">
                                        Netherlands                                    </option>
                                                                    <option value="NC">
                                        New Caledonia                                    </option>
                                                                    <option value="NE">
                                        Niger                                    </option>
                                                                    <option value="NG">
                                        Nigeria                                    </option>
                                                                    <option value="NU">
                                        Niue                                    </option>
                                                                    <option value="NF">
                                        Norfolk Island                                    </option>
                                                                    <option value="NO">
                                        Norway                                    </option>
                                                                    <option value="OM">
                                        Oman                                    </option>
                                                                    <option value="PK">
                                        Pakistan                                    </option>
                                                                    <option value="PS">
                                        Palestine, State of                                    </option>
                                                                    <option value="PA">
                                        Panama                                    </option>
                                                                    <option value="PG">
                                        Papua New Guinea                                    </option>
                                                                    <option value="PY">
                                        Paraguay                                    </option>
                                                                    <option value="PE">
                                        Peru                                    </option>
                                                                    <option value="PH">
                                        Philippines                                    </option>
                                                                    <option value="PN">
                                        Pitcairn Islands                                    </option>
                                                                    <option value="PL">
                                        Poland                                    </option>
                                                                    <option value="PT">
                                        Portugal                                    </option>
                                                                    <option value="QA">
                                        Qatar                                    </option>
                                                                    <option value="MK">
                                        Republic of North Macedonia                                    </option>
                                                                    <option value="RE">
                                        Reunion                                    </option>
                                                                    <option value="RO">
                                        Romania                                    </option>
                                                                    <option value="RW">
                                        Rwanda                                    </option>
                                                                    <option value="SH">
                                        Saint Helena                                    </option>
                                                                    <option value="KN">
                                        Saint Kitts and Nevis                                    </option>
                                                                    <option value="LC">
                                        Saint Lucia                                    </option>
                                                                    <option value="PM">
                                        Saint Pierre and Miquelon                                    </option>
                                                                    <option value="SM">
                                        San Marino                                    </option>
                                                                    <option value="ST">
                                        Sao Tome and Principe                                    </option>
                                                                    <option value="SA">
                                        Saudi Arabia                                    </option>
                                                                    <option value="SN">
                                        Senegal                                    </option>
                                                                    <option value="RS">
                                        Serbia                                    </option>
                                                                    <option value="SC">
                                        Seychelles                                    </option>
                                                                    <option value="SL">
                                        Sierra Leone                                    </option>
                                                                    <option value="SG">
                                        Singapore                                    </option>
                                                                    <option value="SK">
                                        Slovakia                                    </option>
                                                                    <option value="SI">
                                        Slovenia                                    </option>
                                                                    <option value="SB">
                                        Solomon Islands                                    </option>
                                                                    <option value="SO">
                                        Somalia                                    </option>
                                                                    <option value="ZA">
                                        South Africa                                    </option>
                                                                    <option value="ES">
                                        Spain                                    </option>
                                                                    <option value="LK">
                                        Sri Lanka                                    </option>
                                                                    <option value="VC">
                                        St Vincent and the Grenadines                                    </option>
                                                                    <option value="GS">
                                        Sth Georgia & Sth Sandwich Isl                                    </option>
                                                                    <option value="SR">
                                        Suriname                                    </option>
                                                                    <option value="SJ">
                                        Svalbard and Jan Mayen                                    </option>
                                                                    <option value="SZ">
                                        Swaziland                                    </option>
                                                                    <option value="SE">
                                        Sweden                                    </option>
                                                                    <option value="CH">
                                        Switzerland                                    </option>
                                                                    <option value="TW">
                                        Taiwan Area                                    </option>
                                                                    <option value="TJ">
                                        Tajikistan                                    </option>
                                                                    <option value="TZ">
                                        Tanzania                                    </option>
                                                                    <option value="TH">
                                        Thailand                                    </option>
                                                                    <option value="TG">
                                        Togo                                    </option>
                                                                    <option value="TK">
                                        Tokelau                                    </option>
                                                                    <option value="TO">
                                        Tonga                                    </option>
                                                                    <option value="TT">
                                        Trinidad and Tobago                                    </option>
                                                                    <option value="TN">
                                        Tunisia                                    </option>
                                                                    <option value="TR">
                                        Turkey                                    </option>
                                                                    <option value="TM">
                                        Turkmenistan                                    </option>
                                                                    <option value="TC">
                                        Turks and Caicos Islands                                    </option>
                                                                    <option value="TV">
                                        Tuvalu                                    </option>
                                                                    <option value="UG">
                                        Uganda                                    </option>
                                                                    <option value="UA">
                                        Ukraine                                    </option>
                                                                    <option value="AE">
                                        United Arab Emirates                                    </option>
                                                                    <option value="GB">
                                        United Kingdom                                    </option>
                                                                    <option value="UY">
                                        Uruguay                                    </option>
                                                                    <option value="UZ">
                                        Uzbekistan                                    </option>
                                                                    <option value="VA">
                                        Vatican City                                    </option>
                                                                    <option value="VE">
                                        Venezuela                                    </option>
                                                                    <option value="VN">
                                        Vietnam                                    </option>
                                                                    <option value="WF">
                                        Wallis and Futuna                                    </option>
                                                                    <option value="ZM">
                                        Zambia                                    </option>
                                                                    <option value="ZW">
                                        Zimbabwe                                    </option>
                                                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group has-feedback">
                            <label for="phone_number">
                                <span class="red">*</span> Nomor Telepon                            </label>
                            <input class="form-control" id="phone_number" name="phone_number" type="text" value="" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group has-feedback">
                            <label for="email">
                                <span class="red">* </span>Email                            </label>
                            <input class="form-control" id="email" name="email" type="text" value="" />
                        </div>
                    </div>
                    <div class="dis10"></div>
                    <!-- Start of form confirmations -->
                    <div class="col-sm-12 form-confirmations">
                        <p><span class="form-text-size">Dengan ini saya memberikan persetujuan saya untuk pemrosesan data pribadi saya (contoh, alamat email dan nomor telepon) untuk tujuan berikut:</span></p>
                        <div class="form-group has-feedback reset checkbox-wrapper">
                            <div class="checkbox reset">
                                <label for="to_be_contacted">
                                    <input id="to_be_contacted" name="to_be_contacted" type="checkbox" value="">
                                    <span class="form-text-size">dihubungi oleh anggota perusahaan kami selama dan/atau setelah selesainya periode uji coba gratis ruang Edukasi Live (yaitu, 15 hari dari hari Anda berpartisipasi); dan</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group has-feedback checkbox-wrapper">
                            <div class="checkbox reset">
                                <label for="to_receive_newsletters">
                                    <input id="to_receive_newsletters" name="to_receive_newsletters" type="checkbox" value="">
                                    <span class="form-text-size">untuk menerima buletin Trading Point, berita perusahaan, dan pembaruan produk</br>Mohon diperhatikan bahwa jika Anda tidak memiliki akun riil dengan Trading Point, akses Anda ke ruang edukasi live akan dibatasi setelah periode uji coba 15 hari.</span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="dis15"></div>
                        <div class="col-sm-12 text-center">
                            <a id="education-submit" class="btn btn-solid btn-red btn-block">
                                DAPATKAN AKSES GRATIS                            </a>
                        </div>
                        <div class="col-sm-12 text-center space-between-paragraphs">
                            <p>
                                Sudah memiliki akun? Masuk <a href=https://my.xmindonesiatrade.com/id target=_blank>disini</a>                            </p>
                        </div>
                        <div class="col-xs-12 important-note-wrapper">
                            <small>Setelah masuk ke Login Anggota, refresh halaman ini untuk kembali menyaksikan sesi Edukasi Live</small>
                        </div>
                    </div>
                    <!-- End of form confirmations -->
                </div>
                <!-- End of form fields -->
            </form>
        </div>
    </div>
</div>    <div id="open-account-form" class="modal fade modal-flex-centered" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <h2 class="bold text-center reset">Buka akun untuk kembali menyaksikan sesi Edukasi Live.</h2>
            <div class="dis10"></div>
            <p class="text-center">Masa percobaan 15 hari Anda telah berakhir. Klik link di bawah ini untuk mendapatkan akses tidak terbatas untuk mempelajari wawasan ahli kami.</p>
            <div class="dis10"></div>
            <!-- Start of form -->
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a href="https://www.xmindonesiatrade.com/goto/profile/id" class="btn btn-solid btn-red btn-block">
                        BUKA AKUN                    </a>
                </div>
                <div class="col-xs-12 space-between-paragraphs">
                    <p>Mohon diperhatikan bahwa Anda harus memiliki <u>akun trading yang terverifikasi</u> untuk kembali menyaksikan sesi Edukasi Live.</p>
                </div>
                <div class="col-sm-12 text-center space-between-paragraphs">
                    <p>
                        Sudah memiliki akun yang terverifikasi? Masuk <a href=https://my.xmindonesiatrade.com/id target=_blank>disini</a>.                    </p>
                </div>
                <div class="col-xs-12 important-note-wrapper">
                    <small>Setelah masuk ke Login Anggota, Anda harus memuat ulang halaman ini untuk kembali menyaksikan sesi Edukasi Live.</small>
                </div>
            </div>
        </div>
    </div>
</div>    <div id="not-validated-account" class="modal fade modal-flex-centered" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="text-center">
                        Anda harus memiliki akun trading yang <strong>terverifikasi</strong> untuk kembali menyaksikan sesi Edukasi Live. Silakan memverifikasi akun trading Anda <a href=https://my.xmindonesiatrade.com/id/member/documents  target=_blank>disini</a>.                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

    <script type='text/javascript' src='https://cloud.xm-cdn.com/assets/js/libraries/jquery-1.11.1.min.js'></script>
    <script type='text/javascript' src="https://cloud.xm-cdn.com/assets/js/libraries/bootstrapFull_3_4_1.min.js?ver=1568355"></script>
    <script type='text/javascript' src="https://cloud.xm-cdn.com/assets/js/libraries/popper_tippy.min.js"></script>
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5c6d2f52338ffe0011031259&product=inline-share-buttons"></script>
    <script src="https://player.vimeo.com/api/player.js"></script>
    
<script src="https://cloud.xm-cdn.com/assets/js/libraries/jquery.cookie.js"></script>
<script src="https://cloud.xm-cdn.com/assets/js/libraries/jquery.validate.min.js"></script>
<script src="https://cloud.xm-cdn.com/assets/js/libraries/additional-methods.min.js"></script>
<script src="https://cloud.xm-cdn.com/assets/js/minified/countries.js"></script><script type="text/javascript">
    $(function() {
        $("#room-form").validate({
            errorClass: "error-message",
            rules: {
                first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },
                country: {
                    required: true
                },
                phone_number: {
                    required: true,
                    pattern: "^[+][0-9\-]+$",
                },
                email: {
                    required: true,
                    email: true
                },
                to_be_contacted: {
                    required: true
                }
            },
            messages: {
                first_name: {
                    required: 'Kolom <strong>Nama Depan</strong> dibutuhkan',
                },
                last_name: {
                    required: 'Kolom <strong>Nama Belakang</strong> dibutuhkan',
                },
                country: {
                    required: 'Kolom <strong>Negara tempat menetap</strong> dibutuhkan',
                },
                phone_number: {
                    required: 'Kolom <strong>Telepon</strong> dibutuhkan',
                    pattern: 'Kolom <strong>Telepon</strong> hanya dapat berisi angka dan karakter berikut  + -',
                },
                email: {
                    required: 'Kolom <strong>Email</strong> dibutuhkan',
                },
                to_be_contacted: {
                    required: 'Agar Anda bisa melanjutkan pengajuan permintaan Anda untuk mengikuti sesi trading live XM, pertama Anda harus mencentang kotak. Mohon diperhatikan bahwa dengan mencentang kotak, Anda juga menyetujui untuk salah satu Manajer Akun Personal kami untuk menghubungi Anda.',
                }
            }
        });
    });
</script>
<script type='text/javascript'>
    $(document).ready(function() {
        var selectedRoom = "live";
        var general_host = "https:\/\/www.xmindonesiatrade.com";
        const pathname_live = general_host + '/live-player/xmlive';
        const pathname_basic = general_host + '/live-player/basic';
        const pathname_advanced = general_host + '/live-player/advanced';
        const pathname_openreal = "https:\/\/www.xmindonesiatrade.com\/goto\/profile\/id";
        var preselectedCountryField = "ID";
        var countryField = $('[name="country"]');
        var phoneField = $('[name="phone_number"]');
        var userStatus = null;
        var educationRoom = null;
        var isEuCountry = null;
        var apiParams = { selectedRoom: selectedRoom };
        var $joinRoomBtnXButtonElem = $('#join-room-close-button');
        var $openAccountFormElem = $('#open-account-form');
        var $notValidatedAccountModal = $('#not-validated-account');
        var userLeadFormExpireIn15DaysCookieName = "userLeadFormExpireIn15DaysCookie";
        var userLeadFormExpireIn15DaysCookieValue = $.cookie(userLeadFormExpireIn15DaysCookieName);
        var userSubmittedLeadFormCookieName = "userSubmittedLeadFormCookie";
        var userSubmittedLeadFormCookieValue = $.cookie(userSubmittedLeadFormCookieName);
        var hasSubmittedForm = userSubmittedLeadFormCookieValue === '1';
        var userMustShowJoinRoomFormCookieName = "userMustShowJoinRoomFormCookie";
        var userMustShowJoinRoomFormCookieValue = $.cookie(userMustShowJoinRoomFormCookieName);
        var userFirstTimeHere = userMustShowJoinRoomFormCookieValue === null;
        var user15DaysOfTrialExpiredAfterSubmit = hasSubmittedForm && userLeadFormExpireIn15DaysCookieValue === null;
        var userMustShowAlwaysJoinRoomForm = userMustShowJoinRoomFormCookieValue === '1';
        var isRoomEligible = selectedRoom === 'basic' ||
            selectedRoom === 'advanced' ||
            selectedRoom === 'local-advanced-ar' ||
            selectedRoom === 'local-advanced-es' ||
            selectedRoom === 'local-advanced-id' ||
            selectedRoom === 'local-advanced-my' ||
            selectedRoom === 'local-advanced-th' ||
            selectedRoom === 'local-advanced-vn' ||
            selectedRoom === 'local-advanced-ph' ||
            selectedRoom === 'local-advanced-pt';

        $('.js-eu-not-registered-section').hide();
        $('.js-noneu-not-registered-section').hide();
        $('.js-eu-noneu-registered-section').hide();
        $('.js-spinner').show();

        $joinRoomBtnXButtonElem.on('click', function () {
            if (userFirstTimeHere) {
                showFormIn15Minutes()
            }
        });

        function showFormIn15Minutes() {
            var countDownDate = new Date().getTime() + 15 * 60 * 1000;

            var x = setInterval(function() {
                var now = new Date().getTime();
                var diff = countDownDate - now;
                if (diff < 0) {
                    clearInterval(x);
                    $('#join-room').modal({
                        show: true,
                        keyboard: false,
                        backdrop: 'static'
                    });
                    $joinRoomBtnXButtonElem.hide();
                    createCookie(userMustShowJoinRoomFormCookieName, '1', 30)
                }
            }, 1000);
        }

        function createCookie(name, value, expire) {
            var expireDays = expire;
            var date = new Date();
            date.setTime(date.getTime() + (expireDays * 24 * 60 * 60 * 1000));
            $.cookie(name, value, {expires: date, path: "/"});
        }

        function callApi(action, data) {
            return $.ajax({
                url: 'https://www.xmindonesiatrade.com/files/scripts/validations/live_education/live_education.api.php',
                method: "POST",
                data: JSON.stringify({action: action, data: data}),
                dataType: 'json',
                contentType: 'application/json; charset=utf-8',
                xhrFields: {
                    withCredentials: true
                },
                crossDomain: true
            });
        }

        callApi('fetchRooms', apiParams).done(function (response) {
            if (response.result) {
                $('.js-spinner').hide();
                educationRoom = response.result.educationRoom;
                userStatus = response.result.userStatus;
                isEuCountry = response.result.isEuCountry;
            }

            if (selectedRoom !== null && response.result.error !== 'error') {
                displayRoom(educationRoom);
            }

            enableBannerSection();

            if (!isRoomEligible) {
                return;
            }

            if (isClientLoggedIn(userStatus)) {
                if (userStatus.accountIsValidated) {
                    return;
                }
                $notValidatedAccountModal.modal({
                    show: true,
                    keyboard: false,
                    backdrop: 'static'
                });
                return;
            }

            if (hasSubmittedForm) {
                if (user15DaysOfTrialExpiredAfterSubmit) {
                    $openAccountFormElem.modal({
                        show: true,
                        keyboard: false,
                        backdrop: 'static'
                    });
                }
            } else {
                $('#join-room').modal({
                    show: true,
                    keyboard: false,
                    backdrop: 'static'
                });
                if (userMustShowAlwaysJoinRoomForm) {
                    $joinRoomBtnXButtonElem.hide();
                }
            }
        });

        function sideBarHeight() {
            $('.left-tv-bar').outerHeight('auto');
            var leftBarHeight = $('.left-tv-bar').outerHeight();
            var contentHeight = $('.main-tv-content').outerHeight();

            if (leftBarHeight < contentHeight) {
                $('.left-tv-bar').outerHeight(contentHeight);
            }
        }

        sideBarHeight();
        $(window).resize(function() {
            sideBarHeight();
        });

        addPreselectedCountry(preselectedCountryField);
        addCodeToPhoneField();

        countryField.on('change', function () {
            addCodeToPhoneField();
        });

        function addPreselectedCountry(preSelectedCountry) {
            if (countries[preSelectedCountry]) {
                countryField.val(preSelectedCountry);
            }
        }

        function addCodeToPhoneField() {
            phoneField.val('');
            var countryValue = countryField.val();
            var phoneValue = phoneField.val();

            if (phoneValue.length < 7) {
                if (countryValue == '') {
                    phoneField.val('');
                } else if (countries[countryValue]) {
                    phoneField.val('+' + countries[countryValue].cc);
                }
            }
        }

        $("#education-submit").click(function () {

            var pleaseWait = "Silahkan Tunggu..";
            var regFormData = getRegistrationFormData();

            if (regFormData != false) {

                $("#education-submit").attr("disabled", true);
                $("#education-submit").html(pleaseWait);

                callApi('register', regFormData)
                    .done(function (response) {
                        var eventValue = 'liveplayer-form-submitted';

                        if (typeof dataLayer != 'undefined' && eventValue !== null) {
                            dataLayer.push({
                                'event': 'FormSubmission',
                                'eventValue': eventValue
                            });
                        }
                        if (response.result.registered) {
                            createCookie(userSubmittedLeadFormCookieName, '1', 30);
                            createCookie(userLeadFormExpireIn15DaysCookieName, '1', 15);
                            $('#join-room').modal('hide');
                        } else {
                            forceRefresh(1000);
                        }
                    });
            }
        });

        $('.join-live-room').click(function () {
            window.location.href = pathname_live;
        });

        $(".join-basic-room").click(function () {
            window.location.href = pathname_basic;
        });

        $(".join-advanced-room").click(function () {
            window.location.href = pathname_advanced;
        });

        $("#start-with-bonus").click(function () {
            window.location.href = pathname_openreal;
        });

        $("#open-real-account").click(function () {
            window.location.href = pathname_openreal;
        });

        function getRegistrationFormData() {
            var form = $('#room-form');
            if (form.valid()) {
                var formData = {};
                form.serializeArray().forEach(function (item) {
                    formData[item.name] = item.value;
                });

                return formData;
            }

            return false;
        }

        function isClientLoggedIn(userStatus) {
            return userStatus.isLoggedIn || userStatus.fundedEligibility;
        }

        function channelIsOffline(educationRoom) {
            if (educationRoom.roomOnlineStatus) {
                return false;
            }
            return true;
        }

        function displayOfflineMessage(educationRoom) {
            if (educationRoom.intervalUntilBroadcastStarts !== 'error') {
                renderCountdownTimer(educationRoom.intervalUntilBroadcastStarts);
            }
        }

        function enableBannerSection() {
            if (isClientLoggedIn(userStatus)) {
                $('#open-account-banner').hide();
                $('#research-banner').show();
            } else {
                $('#research-banner').hide();
                $('#open-account-banner').show();
            }
        }

        function forceRefresh(refreshTimeOut) {
            setTimeout(function() {
                    window.location.reload();
                }, refreshTimeOut
            );
        }

        function renderCountdownTimer(datetimeUntilBroadcast) {
            let countDownBroadcastDateGMT2 = new Date(datetimeUntilBroadcast).getTime();

            let x = setInterval(function() {
                let currentDate = new Date().toLocaleString('en-US', {timeZone: 'Europe/Athens'});
                let currentDayGMT2 = new Date(currentDate).getTime();

                let timeLeft = countDownBroadcastDateGMT2 - currentDayGMT2;
                let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                let hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                $("#days").html(days + "<span>d :</span>");
                $("#hours").html(('0' + hours).slice(-2) + "<span>h :</span>");
                $("#minutes").html(('0' + minutes).slice(-2) + "<span>m :</span>");
                $("#seconds").html(('0' + seconds).slice(-2) + "<span>s</span>");

                if (timeLeft < 0) {
                    clearInterval(x);
                    window.location.reload();
                }
            }, 1000);
        }

        function displayRoom(educationRoom) {
            if (channelIsOffline(educationRoom)) {
                displayOfflineMessage(educationRoom);
            }
        }
    });
</script>
    <script>

    $(document).ready(function() {$(".show-btn")
        var chatHeight = $('#video-iframe').height();
        var chatBtn = $(".show-btn");
        var chatBlock = $(".chat-container");
        var chatIframe = $('#chat-iframe');
        chatIframe.css('height', chatHeight+'px');

        if ($(window).width() < 992) {
            showhide(chatBlock, chatBtn);
        }

        if ($(window).width() < 768) {
            chatIframe.css('height', '450px');

            // Nav Tab for Bios
            var menu_link = document.querySelectorAll('.scrollable-menu__link');
            if (menu_link.length > 0){
                menu_link.forEach(function(item){
                    item.addEventListener('click', function() {
                        this.scrollIntoView({
                            block: "center",
                        });
                    });
                });
            }
        }

        //Window Resize
        $(window).on('resize', function() {
            if ($(window).width() >= 992) {
                chatBlock.css("display","block"); 
                chatHeight = $('#video-iframe').height(); 
                chatIframe.css('height', chatHeight+'px');
            }
        });

        chatBtn.html("SEMBUNYIKAN OBROLAN");
        chatBtn.click(function(){
            var btn = $(this);
            chatBlock.slideToggle('slow', function() {
                showhide(this, btn);
            });
        });

        function showhide(chat, btn) {
            if ($(chat).is(':visible')) {
                btn.html("SEMBUNYIKAN OBROLAN");               
            } else {
                btn.html("TAMPILKAN OBROLAN");               
            }  
        }

    });

    </script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.eu01.nr-data.net","licenseKey":"NRBR-1d4ceb8e146a994d175","applicationID":"99021171,99021191","transactionName":"MhBSZQoZXhFQWkZdWgtac0QLDF8PHlBWG1kMA1UcCBRRG1RLHUxYCRxGVA==","queueTime":0,"applicationTime":213,"atts":"HldRE0IDTR8=","errorBeacon":"bam.eu01.nr-data.net","agent":""}</script></body>
</html>
