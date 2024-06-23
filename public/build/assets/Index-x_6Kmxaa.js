const __vite__fileDeps=["assets/DialogModal-BktSLUxG.js","assets/Modal-BaIoVFP7.js","assets/app-BXMhQWYf.js","assets/app-DLe9g-_u.css"],__vite__mapDeps=i=>i.map(i=>__vite__fileDeps[i]);
import{c as f,a as e,u as o,d as s,w as t,e as h,F as p,o as n,Z as k,b as a,f as C,t as c,g as y,_ as E}from"./app-BXMhQWYf.js";import{_ as B}from"./AdminLayout-Q7Ba3tvs.js";import{_ as m}from"./AdminButton-Dj9fNSfF.js";import{_ as D}from"./AdminDangerButton-DbBTcQZp.js";import{_ as T}from"./SecondaryButton-BDkNYAN4.js";import{_ as $,T as r,a as x,b as i}from"./TableHeader-Bmc2m2t8.js";import{_ as M,S as V}from"./Show-CS6x7WyX.js";import{u as A,E as F}from"./confirmDeleteModal-D0qZ7V8H.js";import"./LogoutButton-BZv969PD.js";const S={class:"mt-3 mb-5 sm:flex items-center justify-between"},I={class:"mb-1 w-full"},L={class:"sm:flex"},N=s("div",{class:"sm:flex items-center sm:divide-x sm:divide-gray-100 mb-3 sm:mb-0"},[s("form",{class:"lg:pr-3",action:"#",method:"GET"},[s("label",{for:"courses-search",class:"sr-only"},"Search"),s("div",{class:"relative lg:w-64 xl:w-96"},[s("input",{type:"text",name:"email",id:"courses-search",class:"bg-white border-2 border-darkblue text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton w-full p-2.5",placeholder:"Поиск..."})])])],-1),j={class:"flex items-center ml-auto"},H=s("svg",{class:"-ml-1 mr-2 h-6 w-6",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[s("path",{"fill-rule":"evenodd",d:"M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z","clip-rule":"evenodd"})],-1),O=["src","alt"],P={class:"max-w-20 text-wrap"},R={key:1,class:"text-center font-bold text-xl dark:text-white"},z=s("img",{src:"/img/icons/exclamation-mark.svg",alt:"delete",class:"h-36 w-36 mx-auto"},null,-1),G=s("h3",{class:"text-black text-xl font-normal mt-5 mb-6"},"Вы уверены, что хотите удалить выбранный курс?",-1),se=Object.assign({layout:B},{__name:"Index",props:{courses:{type:Array}},setup(u){const w=y(()=>E(()=>import("./DialogModal-BktSLUxG.js"),__vite__mapDeps([0,1,2,3]))),{showConfirmDeleteModal:g,closeModal:_,showModal:v,parameter:b}=A();return(d,Z)=>(n(),f(p,null,[e(o(k),{title:"Управление курсами"}),s("div",S,[s("div",I,[s("div",L,[N,s("div",j,[e(m,{as:"link",hasIcon:"true",href:d.route("admin.courses.create")},{default:t(()=>[H,a(" Добавить курс ")]),_:1},8,["href"])])])])]),u.courses.meta.total>0?(n(),h($,{key:0},{header:t(()=>[e(x,null,{default:t(()=>[e(r,null,{default:t(()=>[a("Курс")]),_:1}),e(r,null,{default:t(()=>[a("Описание")]),_:1}),e(r,null,{default:t(()=>[a("Цена")]),_:1}),e(r,null,{default:t(()=>[a("Группа")]),_:1}),e(r,null,{default:t(()=>[a("Видимость")]),_:1}),e(r)]),_:1})]),pagination:t(()=>[e(M,{meta:u.courses.meta},null,8,["meta"])]),default:t(()=>[(n(!0),f(p,null,C(u.courses.data,l=>(n(),h(x,{key:l.id},{default:t(()=>[e(i,{class:"flex items-center gap-x-3"},{default:t(()=>[s("img",{class:"h-10 w-10",src:l.icon,alt:l.title},null,8,O),s("span",P,c(l.title),1)]),_:2},1024),e(i,{class:"max-h-5 text-wrap truncate"},{default:t(()=>[a(c(l.description),1)]),_:2},1024),e(i,null,{default:t(()=>[a(c(l.price),1)]),_:2},1024),e(i,null,{default:t(()=>[a(c(l.group.title),1)]),_:2},1024),e(i),e(i,{class:"space-x-3 text-right"},{default:t(()=>[e(m,{href:d.route("admin.courses.show",l.id),class:"bg-[#00ADEB] hover:bg-[#24C4FF]"},{default:t(()=>[e(V)]),_:2},1032,["href"]),e(m,{href:d.route("admin.courses.edit",l.id),class:"bg-[#08B581] hover:bg-[#08DD9C]"},{default:t(()=>[e(F)]),_:2},1032,["href"]),e(D,{onClick:q=>o(v)(l.id)},null,8,["onClick"])]),_:2},1024)]),_:2},1024))),128))]),_:1})):(n(),f("div",R," Курсов пока нет ")),e(o(w),{show:o(g),"max-width":"md",onClose:o(_)},{title:t(()=>[]),content:t(()=>[z,G]),footer:t(()=>[e(m,{as:"link",method:"DELETE",href:d.route("admin.courses.destroy",o(b)),onClick:o(_),class:"mr-3"},{default:t(()=>[a("Да")]),_:1},8,["href","onClick"]),e(T,{onClick:o(_)},{default:t(()=>[a("Нет")]),_:1},8,["onClick"])]),_:1},8,["show","onClose"])],64))}});export{se as default};