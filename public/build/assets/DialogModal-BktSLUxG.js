import{_ as i}from"./Modal-BaIoVFP7.js";import{o as r,e as c,w as d,d as e,s}from"./app-BXMhQWYf.js";const u={class:"py-4"},f={class:"border-b border-gray-300 font-medium"},h={class:"px-6 flex items-center justify-between pb-3"},m=e("svg",{class:"h-6 w-6",stroke:"currentColor",fill:"none",viewBox:"0 0 24 24"},[e("path",{class:"inline-flex","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M6 18L18 6M6 6l12 12"})],-1),x=[m],_={class:"mt-4 px-6"},p={class:"flex flex-row justify-end px-6 py-4 bg-gray-100 text-end"},w={__name:"DialogModal",props:{show:{type:Boolean,default:!1},maxWidth:{type:String,default:"2xl"},closeable:{type:Boolean,default:!0}},emits:["close"],setup(t,{emit:a}){const n=a,l=()=>{n("close")};return(o,y)=>(r(),c(i,{show:t.show,"max-width":t.maxWidth,closeable:t.closeable,onClose:l},{default:d(()=>[e("div",u,[e("div",f,[e("div",h,[s(o.$slots,"title"),e("button",{class:"inline-flex items-center ml-auto p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out",onClick:l},x)])]),e("div",_,[s(o.$slots,"content")])]),e("div",p,[s(o.$slots,"footer")])]),_:3},8,["show","max-width","closeable"]))}};export{w as default};
