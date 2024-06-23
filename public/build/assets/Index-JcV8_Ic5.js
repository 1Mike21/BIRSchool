const __vite__fileDeps=["assets/DialogModal-BktSLUxG.js","assets/Modal-BaIoVFP7.js","assets/app-BXMhQWYf.js","assets/app-DLe9g-_u.css"],__vite__mapDeps=i=>i.map(i=>__vite__fileDeps[i]);
import{c as i,a as s,u as l,d as t,w as e,e as c,F as u,o as a,Z as B,b as o,f as v,t as b,j as D,q as w,g as T,_ as L}from"./app-BXMhQWYf.js";import{_ as M}from"./AdminLayout-Q7Ba3tvs.js";import{_ as f}from"./AdminButton-Dj9fNSfF.js";import{_ as V}from"./AdminDangerButton-DbBTcQZp.js";import{_ as $,T as _,a as g,b as h}from"./TableHeader-Bmc2m2t8.js";import{u as j,E as N}from"./confirmDeleteModal-D0qZ7V8H.js";import{_ as I}from"./SecondaryButton-BDkNYAN4.js";import"./LogoutButton-BZv969PD.js";const O={class:"mt-3 mb-5 sm:flex items-center justify-between"},q={class:"mb-1 w-full"},z={class:"sm:flex"},A=t("div",{class:"sm:flex items-center sm:divide-x sm:divide-gray-100 mb-3 sm:mb-0"},[t("form",{class:"lg:pr-3",action:"#",method:"GET"},[t("label",{for:"roles-search",class:"sr-only"},"Search"),t("div",{class:"relative lg:w-64 xl:w-96"},[t("input",{type:"text",name:"email",id:"roles-search",class:"bg-white border-2 border-darkblue text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton w-full p-2.5",placeholder:"Поиск..."})])])],-1),F={class:"flex items-center ml-auto"},H=t("svg",{class:"-ml-1 mr-2 h-6 w-6",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[t("path",{"fill-rule":"evenodd",d:"M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z","clip-rule":"evenodd"})],-1),P=t("svg",{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 16 16",fill:"currentColor",class:"size-4"},[t("path",{d:"M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94 5.28 4.22Z"})],-1),R={key:1,class:"text-center font-bold text-xl dark:text-white"},S=t("img",{src:"/img/icons/exclamation-mark.svg",alt:"delete",class:"h-36 w-36 mx-auto"},null,-1),Z=t("h3",{class:"text-black text-xl font-normal mt-5 mb-6"},"Вы уверены, что хотите удалить выбранную роль? ",-1),te=Object.assign({layout:M},{__name:"Index",props:{roles:{type:Object,require:!0}},setup(p){const k=T(()=>L(()=>import("./DialogModal-BktSLUxG.js"),__vite__mapDeps([0,1,2,3]))),{showConfirmDeleteModal:y,closeModal:m,showModal:C,parameter:E}=j();return(n,G)=>(a(),i(u,null,[s(l(B),{title:"Роли"}),t("div",O,[t("div",q,[t("div",z,[A,t("div",F,[s(f,{as:"link",hasIcon:"true",href:n.route("admin.roles.create")},{default:e(()=>[H,o(" Новая роль ")]),_:1},8,["href"])])])])]),p.roles.length>0?(a(),c($,{key:0},{header:e(()=>[s(g,null,{default:e(()=>[s(_,null,{default:e(()=>[o("Роль")]),_:1}),s(_,null,{default:e(()=>[o("Разрешения")]),_:1}),s(_)]),_:1})]),default:e(()=>[(a(!0),i(u,null,v(p.roles,(r,x)=>(a(),c(g,{key:r.id},{default:e(()=>[s(h,null,{default:e(()=>[o(b(r.name),1)]),_:2},1024),s(h,{class:"flex gap-x-3"},{default:e(()=>[(a(!0),i(u,null,v(r.permissions,d=>(a(),i("p",{class:"bg-red px-5 pr-3 py-1 flex items-center text-white text-sm font-semibold rounded-lg",key:d.id},[o(b(d.name)+" ",1),s(l(D),{href:n.route("admin.roles.permissions.destroy",[r.id,d.id]),method:"DELETE",class:"pl-3 cursor-pointer hover:text-black text-base"},{default:e(()=>[P]),_:2},1032,["href"])]))),128))]),_:2},1024),s(h,{class:"space-x-3 text-right"},{default:e(()=>[x>3?(a(),c(f,{key:0,href:n.route("admin.roles.edit",r.id),class:"bg-[#08B581] hover:bg-[#08DD9C]"},{default:e(()=>[s(N)]),_:2},1032,["href"])):w("",!0),x>3?(a(),c(V,{key:1,onClick:d=>l(C)(r.id)},null,8,["onClick"])):w("",!0)]),_:2},1024)]),_:2},1024))),128))]),_:1})):(a(),i("div",R," Ролей пока нет ")),s(l(k),{show:l(y),"max-width":"md",onClose:l(m)},{title:e(()=>[]),content:e(()=>[S,Z]),footer:e(()=>[s(f,{as:"link",method:"DELETE",href:n.route("admin.roles.destroy",l(E)),onClick:l(m),class:"mr-3"},{default:e(()=>[o("Да")]),_:1},8,["href","onClick"]),s(I,{onClick:l(m)},{default:e(()=>[o("Нет")]),_:1},8,["onClick"])]),_:1},8,["show","onClose"])],64))}});export{te as default};
