!function(){"use strict";var e,t={658:function(){var e=window.wp.element,t=window.wp.blocks,n=window.wp.blockEditor,o=window.wp.i18n,a=window.wp.components;const l=["image"];var r=JSON.parse('{"u2":"layout-blocks/header-buttons"}');(0,t.registerBlockType)(r.u2,{edit:function(t){let{attributes:r,setAttributes:i}=t;return(0,e.createElement)("div",(0,n.useBlockProps)(),(0,e.createElement)(a.Panel,{header:"Header Buttons"},(0,e.createElement)(a.PanelBody,{title:"Image",initialOpen:!1},(0,e.createElement)(n.MediaUpload,{onSelect:e=>{console.log("selected "+e.length),console.table(e),i({media:e})},allowedTypes:l,render:t=>{let{open:n}=t;return(0,e.createElement)(a.PanelRow,{className:"media",initialOpen:!1},(0,e.createElement)(a.Button,{onClick:n},void 0===r.media.url||""==r.media.url?"Open Media Library":(0,e.createElement)("img",{src:r.media.url})))}})),(0,e.createElement)(a.PanelBody,{title:"Header Text",initialOpen:!1},(0,e.createElement)(n.RichText,{tagName:"h2",className:"",value:r.title,onChange:e=>{i({title:e})},placeholder:"The Text of the Title Goes Here"})),(0,e.createElement)(a.PanelBody,{title:"Buttons",initialOpen:!1},(0,e.createElement)(a.__experimentalGrid,{columns:2},(0,e.createElement)(a.__experimentalItem,null,(0,e.createElement)(n.RichText,{tagName:"a",className:"btn btn-shade-cyan shade-cyan",value:r.text_btn,onChange:e=>{i({text_btn:e})},placeholder:"The Text of the Button Goes Here"}),(0,e.createElement)(a.BaseControl,{__nextHasNoMarginBottom:!0,label:"Configure the link and the opening of the button",help:"Use this option to enable the opening of a popup, in the HREF you will have to put the ID of the element to open"},(0,e.createElement)(n.__experimentalLinkControl,{searchInputPlaceholder:"Search here...",value:r.post,settings:[{id:"opensInNewTab",title:"Open in new tab"}],onChange:e=>{console.log(`The selected item URL: ${e.url}.`),i({post:e})},withCreateSuggestion:!0,createSuggestion:e=>i({post:{...r.post,title:e,type:"custom-url",id:Date.now(),url:e}}),createSuggestionButtonText:e=>`${(0,o.__)("New:")} ${e}`}))),(0,e.createElement)(a.__experimentalItem,null,(0,e.createElement)(n.RichText,{tagName:"a",className:"btn btn-shade-cyan shade-cyan",value:r.text_btn_2,onChange:e=>{i({text_btn_2:e})},placeholder:"The Text of the Button Goes Here"}),(0,e.createElement)(a.BaseControl,{__nextHasNoMarginBottom:!0,label:"Configure the link and the opening of the button",help:"Use this option to enable the opening of a popup, in the HREF you will have to put the ID of the element to open"},(0,e.createElement)(n.__experimentalLinkControl,{searchInputPlaceholder:"Search here...",value:r.post_2,settings:[{id:"opensInNewTab",title:"Open in new tab"}],onChange:e=>{console.log(`The selected item URL: ${e.url}.`),i({post_2:e})},withCreateSuggestion:!0,createSuggestion:e=>i({post:{...r.post_2,title:e,type:"custom-url",id:Date.now(),url:e}}),createSuggestionButtonText:e=>`${(0,o.__)("New:")} ${e}`}))),(0,e.createElement)(a.__experimentalItem,null,(0,e.createElement)(n.RichText,{tagName:"a",className:"btn btn-shade-cyan shade-cyan",value:r.text_btn_3,onChange:e=>{i({text_btn_3:e})},placeholder:"The Text of the Button Goes Here"}),(0,e.createElement)(a.BaseControl,{__nextHasNoMarginBottom:!0,label:"Configure the link and the opening of the button",help:"Use this option to enable the opening of a popup, in the HREF you will have to put the ID of the element to open"},(0,e.createElement)(n.__experimentalLinkControl,{searchInputPlaceholder:"Search here...",value:r.post_3,settings:[{id:"opensInNewTab",title:"Open in new tab"}],onChange:e=>{console.log(`The selected item URL: ${e.url}.`),i({post_3:e})},withCreateSuggestion:!0,createSuggestion:e=>i({post:{...r.post_3,title:e,type:"custom-url",id:Date.now(),url:e}}),createSuggestionButtonText:e=>`${(0,o.__)("New:")} ${e}`})))))))},save:t=>(0,e.createElement)(n.InnerBlocks.Content,null)})}},n={};function o(e){var a=n[e];if(void 0!==a)return a.exports;var l=n[e]={exports:{}};return t[e](l,l.exports,o),l.exports}o.m=t,e=[],o.O=function(t,n,a,l){if(!n){var r=1/0;for(u=0;u<e.length;u++){n=e[u][0],a=e[u][1],l=e[u][2];for(var i=!0,s=0;s<n.length;s++)(!1&l||r>=l)&&Object.keys(o.O).every((function(e){return o.O[e](n[s])}))?n.splice(s--,1):(i=!1,l<r&&(r=l));if(i){e.splice(u--,1);var c=a();void 0!==c&&(t=c)}}return t}l=l||0;for(var u=e.length;u>0&&e[u-1][2]>l;u--)e[u]=e[u-1];e[u]=[n,a,l]},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){var e={1283:0,8493:0};o.O.j=function(t){return 0===e[t]};var t=function(t,n){var a,l,r=n[0],i=n[1],s=n[2],c=0;if(r.some((function(t){return 0!==e[t]}))){for(a in i)o.o(i,a)&&(o.m[a]=i[a]);if(s)var u=s(o)}for(t&&t(n);c<r.length;c++)l=r[c],o.o(e,l)&&e[l]&&e[l][0](),e[l]=0;return o.O(u)},n=self.webpackChunklayout_blocks=self.webpackChunklayout_blocks||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))}();var a=o.O(void 0,[8493],(function(){return o(658)}));a=o.O(a)}();