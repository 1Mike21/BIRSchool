const __vite__fileDeps=["assets/DialogModal-BktSLUxG.js","assets/Modal-BaIoVFP7.js","assets/app-BXMhQWYf.js","assets/app-DLe9g-_u.css"],__vite__mapDeps=i=>i.map(i=>__vite__fileDeps[i]);
import{c as d,a as s,u as a,d as t,w as e,e as _,F as f,o,Z as g,b as l,f as k,t as C,g as y,_ as E}from"./app-BXMhQWYf.js";import{_ as B}from"./AdminLayout-Q7Ba3tvs.js";import{_ as c}from"./AdminButton-Dj9fNSfF.js";import{_ as D}from"./AdminDangerButton-DbBTcQZp.js";import{_ as T,T as u,a as h,b as p}from"./TableHeader-Bmc2m2t8.js";import{u as M,E as $}from"./confirmDeleteModal-D0qZ7V8H.js";import{_ as V}from"./SecondaryButton-BDkNYAN4.js";import"./LogoutButton-BZv969PD.js";const j={class:"mt-3 mb-5 sm:flex items-center justify-between"},I={class:"mb-1 w-full"},L={class:"sm:flex"},N=t("div",{class:"sm:flex items-center sm:divide-x sm:divide-gray-100 mb-3 sm:mb-0"},[t("form",{class:"lg:pr-3",action:"#",method:"GET"},[t("label",{for:"permissions-search",class:"sr-only"},"Search"),t("div",{class:"relative lg:w-64 xl:w-96"},[t("input",{type:"text",name:"email",id:"permissions-search",class:"bg-white border-2 border-darkblue text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton w-full p-2.5",placeholder:"Поиск..."})])])],-1),O={class:"flex items-center ml-auto"},A=t("svg",{class:"-ml-1 mr-2 h-6 w-6",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[t("path",{"fill-rule":"evenodd",d:"M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z","clip-rule":"evenodd"})],-1),F={key:1,class:"text-center font-bold text-xl dark:text-white"},H=t("img",{src:"/img/icons/exclamation-mark.svg",alt:"delete",class:"h-36 w-36 mx-auto"},null,-1),P=t("h3",{class:"text-black text-xl font-normal mt-5 mb-6"},"Вы уверены, что хотите удалить выбранное разрешение? ",-1),W=Object.assign({layout:B},{__name:"Index",props:{permissions:{type:Object,require:!0}},setup(m){const v=y(()=>E(()=>import("./DialogModal-BktSLUxG.js"),__vite__mapDeps([0,1,2,3]))),{showConfirmDeleteModal:b,closeModal:i,showModal:x,parameter:w}=M();return(n,R)=>(o(),d(f,null,[s(a(g),{title:"Разрешения"}),t("div",j,[t("div",I,[t("div",L,[N,t("div",O,[s(c,{as:"link",hasIcon:"true",href:n.route("admin.permissions.create")},{default:e(()=>[A,l(" Новое разрешение ")]),_:1},8,["href"])])])])]),m.permissions.length>0?(o(),_(T,{key:0},{header:e(()=>[s(h,null,{default:e(()=>[s(u,null,{default:e(()=>[l("Разрешение")]),_:1}),s(u)]),_:1})]),default:e(()=>[(o(!0),d(f,null,k(m.permissions,r=>(o(),_(h,{key:r.id},{default:e(()=>[s(p,null,{default:e(()=>[l(C(r.name),1)]),_:2},1024),s(p,{class:"space-x-3"},{default:e(()=>[s(c,{href:n.route("admin.permissions.edit",r.id),class:"bg-[#08B581] hover:bg-[#08DD9C]"},{default:e(()=>[s($)]),_:2},1032,["href"]),s(D,{onClick:S=>a(x)(r.id)},null,8,["onClick"])]),_:2},1024)]),_:2},1024))),128))]),_:1})):(o(),d("div",F," Разрешений пока нет ")),s(a(v),{show:a(b),"max-width":"md",onClose:a(i)},{title:e(()=>[]),content:e(()=>[H,P]),footer:e(()=>[s(c,{as:"link",method:"DELETE",href:n.route("admin.permissions.destroy",a(w)),onClick:a(i),class:"mr-3"},{default:e(()=>[l("Да")]),_:1},8,["href","onClick"]),s(V,{onClick:a(i)},{default:e(()=>[l("Нет")]),_:1},8,["onClick"])]),_:1},8,["show","onClose"])],64))}});export{W as default};
