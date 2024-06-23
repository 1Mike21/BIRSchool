const __vite__fileDeps=["assets/DialogModal-BktSLUxG.js","assets/Modal-BaIoVFP7.js","assets/app-BXMhQWYf.js","assets/app-DLe9g-_u.css"],__vite__mapDeps=i=>i.map(i=>__vite__fileDeps[i]);
import{h as w,c as m,a as s,u as o,d as e,w as a,F as u,f as b,o as _,Z as k,b as i,t as r,j as C,p as y,k as E,g as D,_ as I}from"./app-BXMhQWYf.js";import{_ as B}from"./AdminLayout-Q7Ba3tvs.js";import{_ as h}from"./AdminButton-Dj9fNSfF.js";import{_ as M}from"./AdminDangerButton-DbBTcQZp.js";import{_ as S}from"./SecondaryButton-BDkNYAN4.js";import{u as V,E as $}from"./confirmDeleteModal-D0qZ7V8H.js";import"./LogoutButton-BZv969PD.js";const d=c=>(y("data-v-acdc9c4d"),c=c(),E(),c),T={class:"mt-3 mb-5 sm:flex items-center justify-between"},j={class:"mb-1 w-full"},A={class:"sm:flex"},L=d(()=>e("div",{class:"sm:flex items-center sm:divide-x sm:divide-gray-100 mb-3 sm:mb-0"},[e("form",{class:"lg:pr-3",action:"#",method:"GET"},[e("label",{for:"groups-search",class:"sr-only"},"Search"),e("div",{class:"relative lg:w-64 xl:w-96"},[e("input",{type:"text",name:"email",id:"groups-search",class:"bg-white border-2 border-darkblue text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton w-full p-2.5",placeholder:"Поиск..."})])])],-1)),N={class:"flex items-center ml-auto"},F=d(()=>e("svg",{class:"-ml-1 mr-2 h-6 w-6",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[e("path",{"fill-rule":"evenodd",d:"M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z","clip-rule":"evenodd"})],-1)),G={class:"group-course mt-8"},O=["src","alt"],P={class:"text-red font-medium text-2xl"},z={class:"dark:text-white text-black text-lg underline underline-offset-8 decoration-red"},H={class:"dark:text-white text-black text-base"},R={class:"dark:text-white text-black text-base"},Z={class:"flex flex-col mx-auto gap-y-3"},q=d(()=>e("img",{src:"/img/icons/exclamation-mark.svg",alt:"delete",class:"h-36 w-36 mx-auto"},null,-1)),J=d(()=>e("h3",{class:"text-black text-xl font-normal mt-5 mb-6"},"Вы уверены, что хотите удалить группу?",-1)),K=Object.assign({layout:B},{__name:"Index",props:{groups:Array},setup(c){const f=D(()=>I(()=>import("./DialogModal-BktSLUxG.js"),__vite__mapDeps([0,1,2,3]))),{showConfirmDeleteModal:p,closeModal:n,showModal:x,parameter:v}=V(),g=l=>l?"Активна":"Не активна";return(l,Q)=>(_(),m(u,null,[s(o(k),{title:"Управление группами"}),e("div",T,[e("div",j,[e("div",A,[L,e("div",N,[s(h,{as:"link",hasIcon:"true",href:l.route("admin.groups.create")},{default:a(()=>[F,i(" Добавить группу ")]),_:1},8,["href"])])]),e("div",G,[(_(!0),m(u,null,b(c.groups,t=>(_(),m("div",{class:"group-course__item",key:t.id},[e("img",{class:"w-16 mx-auto",src:t.icon,alt:t.title},null,8,O),e("h4",P,r(t.title),1),e("h5",z,r(t.level),1),e("h6",H,r(t.description),1),e("h6",R,"Статус: "+r(g(t.is_active)),1),e("div",Z,[s(o(C),{class:"btn-more-detail",href:l.route("admin.groups.show",t.slug)},{default:a(()=>[i("Описание группы")]),_:2},1032,["href"]),s(h,{href:l.route("admin.groups.edit",t.slug),class:"bg-[#08B581] hover:bg-[#08DD9C]"},{default:a(()=>[s($),i(" Редактировать ")]),_:2},1032,["href"]),s(M,{onClick:U=>o(x)(t.slug)},{default:a(()=>[i(" Удалить ")]),_:2},1032,["onClick"])])]))),128))])])]),s(o(f),{show:o(p),"max-width":"md",onClose:o(n)},{title:a(()=>[]),content:a(()=>[q,J]),footer:a(()=>[s(h,{as:"link",method:"DELETE",href:l.route("admin.groups.destroy",o(v)),onClick:o(n),class:"mr-3"},{default:a(()=>[i("Да")]),_:1},8,["href","onClick"]),s(S,{onClick:o(n)},{default:a(()=>[i("Нет")]),_:1},8,["onClick"])]),_:1},8,["show","onClose"])],64))}}),ae=w(K,[["__scopeId","data-v-acdc9c4d"]]);export{ae as default};