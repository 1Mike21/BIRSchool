import{l as s,m as n,o as r,c as d}from"./app-BXMhQWYf.js";const i=["value"],p={__name:"TextInput",props:{modelValue:String},emits:["update:modelValue"],setup(t,{expose:u}){const e=s(null);return n(()=>{e.value.hasAttribute("autofocus")&&e.value.focus()}),u({focus:()=>e.value.focus()}),(a,o)=>(r(),d("input",{ref_key:"input",ref:e,class:"border-gray-300 focus:border-violetButton focus:ring-violetButton rounded-md shadow-sm",value:t.modelValue,onInput:o[0]||(o[0]=l=>a.$emit("update:modelValue",l.target.value))},null,40,i))}};export{p as _};
