!function(){"use strict";var e,t={995:function(){var e=window.wp.element,t=window.wp.blocks,n=window.wp.blockEditor,r=(window.wp.i18n,window.wp.components);const o=["image"];var l=JSON.parse('{"u2":"rpmdelivery/form-image"}');(0,t.registerBlockType)(l.u2,{edit:function(t){let{attributes:l,setAttributes:i}=t;return(0,e.createElement)("div",(0,n.useBlockProps)(),(0,e.createElement)(r.Panel,{header:"Form Image"},(0,e.createElement)(r.PanelBody,{title:"Title",initialOpen:!1},(0,e.createElement)(n.RichText,{tagName:"h2",className:"",value:l.title,onChange:e=>{i({title:e})},placeholder:"The Text of the Title Goes Here"})),(0,e.createElement)(r.PanelBody,{title:"Image",initialOpen:!1},(0,e.createElement)(n.MediaUpload,{onSelect:e=>{console.log("selected "+e.length),console.table(e),i({media:e})},allowedTypes:o,render:t=>{let{open:n}=t;return(0,e.createElement)(r.PanelRow,{className:"media",initialOpen:!1},(0,e.createElement)(r.Button,{onClick:n},void 0===l.media.url||""==l.media.url?"Open Media Library":(0,e.createElement)("img",{src:l.media.url})))}}))))},save:t=>(0,e.createElement)(n.InnerBlocks.Content,null)})}},n={};function r(e){var o=n[e];if(void 0!==o)return o.exports;var l=n[e]={exports:{}};return t[e](l,l.exports,r),l.exports}r.m=t,e=[],r.O=function(t,n,o,l){if(!n){var i=1/0;for(s=0;s<e.length;s++){n=e[s][0],o=e[s][1],l=e[s][2];for(var a=!0,c=0;c<n.length;c++)(!1&l||i>=l)&&Object.keys(r.O).every((function(e){return r.O[e](n[c])}))?n.splice(c--,1):(a=!1,l<i&&(i=l));if(a){e.splice(s--,1);var u=o();void 0!==u&&(t=u)}}return t}l=l||0;for(var s=e.length;s>0&&e[s-1][2]>l;s--)e[s]=e[s-1];e[s]=[n,o,l]},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){var e={5930:0,8251:0};r.O.j=function(t){return 0===e[t]};var t=function(t,n){var o,l,i=n[0],a=n[1],c=n[2],u=0;if(i.some((function(t){return 0!==e[t]}))){for(o in a)r.o(a,o)&&(r.m[o]=a[o]);if(c)var s=c(r)}for(t&&t(n);u<i.length;u++)l=i[u],r.o(e,l)&&e[l]&&e[l][0](),e[l]=0;return r.O(s)},n=self.webpackChunklayout_blocks=self.webpackChunklayout_blocks||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))}();var o=r.O(void 0,[8251],(function(){return r(995)}));o=r.O(o)}();