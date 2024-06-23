import{_ as u}from"./AdminButton-Dj9fNSfF.js";import{_ as f,a as _,A as r}from"./ModalPage-BXkKkteZ.js";import{_ as m}from"./InputLabel-Dx5dXBjV.js";import{_ as b}from"./TextInput-BpUs-DRt.js";import{_ as x}from"./InputError-G7xtYhoB.js";import{T as V,r as n,c as g,a as e,w as a,F as $,o as y,u as o,n as k,b as w,d as v}from"./app-BXMhQWYf.js";import"./Modal-BaIoVFP7.js";const C=v("h3",{class:"text-xl font-semibold"}," Создание роли ",-1),M={__name:"Create",props:{permissions:{type:Array}},setup(i){const s=V({name:"",permissions:[]});return(d,t)=>{const p=n("Head"),c=n("MultiSelect");return y(),g($,null,[e(p,{title:"Добавление роли"}),e(f,{"max-width":"md"},{title:a(()=>[C]),content:a(()=>[e(_,{id:"create_role_form",onSubmitted:t[2]||(t[2]=l=>o(s).post(d.route("admin.roles.store")))},{default:a(()=>[e(r,{class:"!col-span-12"},{default:a(()=>[e(m,{class:"mb-2",for:"name",value:"Название роли"}),e(b,{modelValue:o(s).name,"onUpdate:modelValue":t[0]||(t[0]=l=>o(s).name=l),id:"name",class:k(["bg-gray-50 border text-black sm:text-sm block w-full p-2.5",{"border-red":o(s).errors.name}]),placeholder:"Введите название роли",type:"text",autofocus:""},null,8,["modelValue","class"]),e(x,{class:"mt-2",message:o(s).errors.name},null,8,["message"])]),_:1}),e(r,{class:"!col-span-12"},{default:a(()=>[e(m,{class:"mb-2",for:"permissions",value:"Разрешения"}),e(c,{modelValue:o(s).permissions,"onUpdate:modelValue":t[1]||(t[1]=l=>o(s).permissions=l),options:i.permissions,id:"permissions","show-labels":!1,label:"name",multiple:!0,"close-on-select":!1,"track-by":"id",placeholder:"Выберите разрешения"},null,8,["modelValue","options"])]),_:1})]),_:1})]),footer:a(()=>[e(u,{as:"button",submitted:o(s).processing,disabled:o(s).processing,form:"create_role_form",type:"submit"},{default:a(()=>[w(" Создать ")]),_:1},8,["submitted","disabled"])]),_:1})],64)}}};export{M as default};