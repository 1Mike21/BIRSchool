import{_}from"./AdminButton-Dj9fNSfF.js";import{_ as b,a as x,A as i}from"./ModalPage-BXkKkteZ.js";import{_ as d}from"./InputLabel-Dx5dXBjV.js";import{_ as V}from"./TextInput-BpUs-DRt.js";import{_ as y}from"./InputError-G7xtYhoB.js";import{m as g,T as $,r as p,c as k,a as e,w as a,F as w,o as v,u as o,n as u,b as A,d as B}from"./app-BXMhQWYf.js";import"./Modal-BaIoVFP7.js";const C=B("h3",{class:"text-xl font-semibold"}," Редактирование роли ",-1),T={__name:"Edit",props:{role:{type:Object,required:!0},permissions:{type:Array}},setup(m){const n=m;g(()=>{var l;s.permissions=(l=n.role)==null?void 0:l.permissions});const s=$({name:n.role.name,permissions:[]});return(l,t)=>{const c=p("Head"),f=p("MultiSelect");return v(),k(w,null,[e(c,{title:"Редактирование роли"}),e(b,{"max-width":"md"},{title:a(()=>[C]),content:a(()=>[e(x,{id:"update_role_form",onSubmitted:t[2]||(t[2]=r=>o(s).put(l.route("admin.roles.update",m.role.id)))},{default:a(()=>[e(i,{class:"!col-span-12"},{default:a(()=>[e(d,{class:"mb-2",for:"name",value:"Название роли"}),e(V,{modelValue:o(s).name,"onUpdate:modelValue":t[0]||(t[0]=r=>o(s).name=r),id:"name",class:u(["bg-gray-50 border text-black sm:text-sm block w-full p-2.5",{"border-red":o(s).errors.name}]),placeholder:"Введите название роли",type:"text",autofocus:""},null,8,["modelValue","class"]),e(y,{class:"mt-2",message:o(s).errors.name},null,8,["message"])]),_:1}),e(i,{class:"!col-span-12"},{default:a(()=>[e(d,{class:"mb-2",for:"permissions",value:"Разрешения"}),e(f,{modelValue:o(s).permissions,"onUpdate:modelValue":t[1]||(t[1]=r=>o(s).permissions=r),options:m.permissions,id:"permissions","show-labels":!1,label:"name",multiple:!0,"close-on-select":!1,"track-by":"id",placeholder:"Выберите разрешения"},null,8,["modelValue","options"])]),_:1})]),_:1})]),footer:a(()=>[e(_,{as:"button",class:u({"opacity-75":o(s).processing}),disabled:o(s).processing,form:"update_role_form",type:"submit"},{default:a(()=>[A(" Обновить ")]),_:1},8,["class","disabled"])]),_:1})],64)}}};export{T as default};