import{T as _,c as b,a as e,u as l,w as o,F as g,o as v,Z as x,n as a,b as V,d as k}from"./app-BXMhQWYf.js";import{_ as w}from"./AdminButton-Dj9fNSfF.js";import{_ as $,a as y,A as i}from"./ModalPage-BXkKkteZ.js";import{_ as m}from"./InputLabel-Dx5dXBjV.js";import{_ as p}from"./TextInput-BpUs-DRt.js";import{T}from"./TextArea-BJtUfSd1.js";import{_ as d}from"./InputError-G7xtYhoB.js";import{D as U}from"./Dropzone-gIGMYzLA.js";import{_ as F}from"./Checkbox-EDb0zloz.js";import"./Modal-BaIoVFP7.js";const h=k("h3",{class:"text-xl font-semibold"}," Редактирование группы ",-1),L={__name:"Edit",props:{group:Object,icon:Object},setup(u){const n=u,f=(c,t)=>{s.icon=t.value[0]},s=_({_method:"PUT",title:n.group.title,icon:null,description:n.group.description,is_active:n.group.is_active,level:n.group.level});return(c,t)=>(v(),b(g,null,[e(l(x),{title:"Редактирование группы"}),e($,{"max-width":"md"},{title:o(()=>[h]),content:o(()=>[e(y,{id:"update_group_form",onSubmitted:t[4]||(t[4]=r=>l(s).post(c.route("admin.groups.update",u.group.slug)))},{default:o(()=>[e(i,null,{default:o(()=>[e(m,{class:"mb-2",for:"title",value:"Название группы"}),e(p,{modelValue:l(s).title,"onUpdate:modelValue":t[0]||(t[0]=r=>l(s).title=r),id:"title",class:a(["bg-gray-50 border text-black sm:text-sm block w-full p-2.5",{"border-red":l(s).errors.title}]),placeholder:"Введите название группы",type:"text",autofocus:""},null,8,["modelValue","class"]),e(d,{class:"mt-2",message:l(s).errors.title},null,8,["message"])]),_:1}),e(i,null,{default:o(()=>[e(m,{class:"mb-2",for:"icon",value:"Иконка"}),e(U,{onLoad:f,preview:u.icon,class:a({"!border-red":l(s).errors.icon})},null,8,["preview","class"]),e(d,{class:"mt-2",message:l(s).errors.icon},null,8,["message"])]),_:1}),e(i,null,{default:o(()=>[e(m,{class:"mb-2",for:"description",value:"Описание группы"}),e(T,{modelValue:l(s).description,"onUpdate:modelValue":t[1]||(t[1]=r=>l(s).description=r),placeholder:"Добавьте описание группы",id:"description",class:a(["bg-gray-50 border text-black sm:text-sm block w-full p-2.5",{"border-red":l(s).errors.description}]),rows:"3"},null,8,["modelValue","class"]),e(d,{class:"mt-2",message:l(s).errors.description},null,8,["message"])]),_:1}),e(i,null,{default:o(()=>[e(m,{class:"mb-2",for:"level",value:"Уровень сложности"}),e(p,{modelValue:l(s).level,"onUpdate:modelValue":t[2]||(t[2]=r=>l(s).level=r),id:"level",class:a(["bg-gray-50 border text-black sm:text-sm block w-full p-2.5",{"border-red":l(s).errors.level}]),placeholder:"Введите уровень сложности",type:"text"},null,8,["modelValue","class"]),e(d,{class:"mt-2",message:l(s).errors.level},null,8,["message"])]),_:1}),e(i,null,{default:o(()=>[e(m,{class:"mb-2",for:"is_active",value:"Видимость группы"}),e(F,{id:"is_active",class:a(["w-6 h-6",{"border-red":l(s).errors.is_active}]),checked:l(s).is_active,"onUpdate:checked":t[3]||(t[3]=r=>l(s).is_active=r)},null,8,["checked","class"]),e(d,{class:"mt-2",message:l(s).errors.is_active},null,8,["message"])]),_:1})]),_:1})]),footer:o(()=>[e(w,{as:"button",submitted:l(s).processing,disabled:l(s).processing,form:"update_group_form",type:"submit"},{default:o(()=>[V(" Обновить ")]),_:1},8,["submitted","disabled"])]),_:1})],64))}};export{L as default};
