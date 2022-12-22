!function(){"use strict";var e,t={498:function(){var e=window.wp.element,t=window.wp.blocks,n=window.wp.blockEditor,o=window.wp.i18n,a=window.wp.components;const l=["image"],r=["core/paragraph","core/list","core/heading"],i=[["core/heading",{level:3}],["core/paragraph",{}],["core/heading",{level:3}],["core/paragraph",{}],["core/heading",{level:3}],["core/paragraph",{}]];var c=JSON.parse('{"u2":"rpmdelivery/why-choose-home"}');(0,t.registerBlockType)(c.u2,{edit:function(t){let{attributes:c,setAttributes:s}=t;return(0,e.createElement)("div",(0,n.useBlockProps)(),(0,e.createElement)(a.Panel,{header:"Why Choose Home"},(0,e.createElement)(a.PanelBody,{title:"Image",initialOpen:!1},(0,e.createElement)(n.MediaUpload,{onSelect:e=>{console.log("selected "+e.length),console.table(e),s({media:e})},allowedTypes:l,render:t=>{let{open:n}=t;return(0,e.createElement)(a.PanelRow,{className:"media",initialOpen:!1},(0,e.createElement)(a.Button,{onClick:n},void 0===c.media.url||""==c.media.url?"Open Media Library":(0,e.createElement)("img",{src:c.media.url})))}})),(0,e.createElement)(a.PanelBody,{title:"Title and subtitle",initialOpen:!1},(0,e.createElement)(n.RichText,{tagName:"h2",className:"",value:c.title,onChange:e=>{s({title:e})},placeholder:"The Text of the Title Goes Here"}),(0,e.createElement)(n.RichText,{tagName:"h3",className:"",value:c.subtitle,onChange:e=>{s({subtitle:e})},placeholder:"The Text of the subtitle Goes Here"})),(0,e.createElement)(a.PanelBody,{title:"Button",initialOpen:!1},(0,e.createElement)(n.RichText,{tagName:"a",className:"btn btn-shade-cyan",value:c.text_btn,onChange:e=>{s({text_btn:e})},placeholder:"The Text of the Button Goes Here"}),(0,e.createElement)(a.BaseControl,{__nextHasNoMarginBottom:!0,label:"Configure the link and the opening of the button",help:"Use this option to enable the opening of a popup, in the HREF you will have to put the ID of the element to open"},(0,e.createElement)(n.__experimentalLinkControl,{searchInputPlaceholder:"Search here...",value:c.post,settings:[{id:"opensInNewTab",title:"Open in new tab"}],onChange:e=>{console.log(`The selected item URL: ${e.url}.`),s({post:e})},withCreateSuggestion:!0,createSuggestion:e=>s({post:{...c.post,title:e,type:"custom-url",id:Date.now(),url:e}}),createSuggestionButtonText:e=>`${(0,o.__)("New:")} ${e}`}))),(0,e.createElement)(a.PanelBody,{title:"Paragraph Text",initialOpen:!1},(0,e.createElement)(n.InnerBlocks,{allowedBlocks:r,template:i}))))},save:t=>(0,e.createElement)(n.InnerBlocks.Content,null)})}},n={};function o(e){var a=n[e];if(void 0!==a)return a.exports;var l=n[e]={exports:{}};return t[e](l,l.exports,o),l.exports}o.m=t,e=[],o.O=function(t,n,a,l){if(!n){var r=1/0;for(u=0;u<e.length;u++){n=e[u][0],a=e[u][1],l=e[u][2];for(var i=!0,c=0;c<n.length;c++)(!1&l||r>=l)&&Object.keys(o.O).every((function(e){return o.O[e](n[c])}))?n.splice(c--,1):(i=!1,l<r&&(r=l));if(i){e.splice(u--,1);var s=a();void 0!==s&&(t=s)}}return t}l=l||0;for(var u=e.length;u>0&&e[u-1][2]>l;u--)e[u]=e[u-1];e[u]=[n,a,l]},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){var e={8605:0,7638:0};o.O.j=function(t){return 0===e[t]};var t=function(t,n){var a,l,r=n[0],i=n[1],c=n[2],s=0;if(r.some((function(t){return 0!==e[t]}))){for(a in i)o.o(i,a)&&(o.m[a]=i[a]);if(c)var u=c(o)}for(t&&t(n);s<r.length;s++)l=r[s],o.o(e,l)&&e[l]&&e[l][0](),e[l]=0;return o.O(u)},n=self.webpackChunklayout_blocks=self.webpackChunklayout_blocks||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))}();var a=o.O(void 0,[7638],(function(){return o(498)}));a=o.O(a)}();