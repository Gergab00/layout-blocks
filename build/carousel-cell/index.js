!function(){"use strict";var e,t={119:function(){var e=window.wp.element,t=window.wp.blocks,n=window.wp.blockEditor,r=(window.wp.i18n,window.wp.components);const o=["core/image","core/heading"],l=[["core/heading",{placeholder:"Title",level:3}],["core/image",{url:"https://picsum.photos/200/300",height:300,width:200}],["core/heading",{placeholder:"Subtitle",level:4}]];var i=JSON.parse('{"u2":"portafolio-theme/carousel-cell"}');(0,t.registerBlockType)(i.u2,{edit:function(t){let{attributes:i,setAttributes:c}=t;return(0,e.createElement)("div",(0,n.useBlockProps)(),(0,e.createElement)(r.Panel,{header:"Carousel Cell"},(0,e.createElement)(r.PanelBody,{title:"My Block Settings",opened:!0},(0,e.createElement)(r.PanelRow,null,(0,e.createElement)(n.InnerBlocks,{allowedBlocks:o,template:l,templateLock:"insert"})))))},save:t=>(0,e.createElement)(n.InnerBlocks.Content,null)})}},n={};function r(e){var o=n[e];if(void 0!==o)return o.exports;var l=n[e]={exports:{}};return t[e](l,l.exports,r),l.exports}r.m=t,e=[],r.O=function(t,n,o,l){if(!n){var i=1/0;for(s=0;s<e.length;s++){n=e[s][0],o=e[s][1],l=e[s][2];for(var c=!0,a=0;a<n.length;a++)(!1&l||i>=l)&&Object.keys(r.O).every((function(e){return r.O[e](n[a])}))?n.splice(a--,1):(c=!1,l<i&&(i=l));if(c){e.splice(s--,1);var u=o();void 0!==u&&(t=u)}}return t}l=l||0;for(var s=e.length;s>0&&e[s-1][2]>l;s--)e[s]=e[s-1];e[s]=[n,o,l]},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){var e={2778:0,2122:0};r.O.j=function(t){return 0===e[t]};var t=function(t,n){var o,l,i=n[0],c=n[1],a=n[2],u=0;if(i.some((function(t){return 0!==e[t]}))){for(o in c)r.o(c,o)&&(r.m[o]=c[o]);if(a)var s=a(r)}for(t&&t(n);u<i.length;u++)l=i[u],r.o(e,l)&&e[l]&&e[l][0](),e[l]=0;return r.O(s)},n=self.webpackChunklayout_blocks=self.webpackChunklayout_blocks||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))}();var o=r.O(void 0,[2122],(function(){return r(119)}));o=r.O(o)}();