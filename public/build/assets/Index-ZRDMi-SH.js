import{_ as x}from"./AdminLayout-Q7Ba3tvs.js";import{_ as u}from"./SearchInput-CXrmPpv1.js";import{S as _}from"./SectionTitle-2gAREwWb.js";import{h as p,c as o,a,u as r,d as e,w as c,F as i,f as h,o as l,Z as f,b as n,t as d,j as b,p as w,k as g}from"./app-BXMhQWYf.js";import"./LogoutButton-BZv969PD.js";import"./TextInput-BpUs-DRt.js";const v=s=>(w("data-v-34d3b55c"),s=s(),g(),s),y={class:"flex mb-7 lg:mb-12 gap-4 flex-col sm:flex-row items-center justify-between max-sm:justify-center"},k=v(()=>e("div",{class:"flex max-[320px]:flex-col gap-y-5"},[e("button",{class:"bg-white min-w-32 px-5 min-h-10 rounded-28 text-sm md:text-base lg:text-lg text-black mr-3 max-[320px]:mr-0 xl:mr-5 border shadow-inner hover:shadow-xl focus:shadow-xl"},"По названию"),e("button",{class:"bg-white min-w-32 px-5 min-h-10 rounded-28 text-sm md:text-base lg:text-lg text-black border shadow-inner hover:shadow-xl focus:shadow-xl"},"По группе")],-1)),I={class:"all-courses"},S=["src"],j={class:"font-semibold"},B=Object.assign({layout:x},{__name:"Index",props:{courses:Array},setup(s){return(m,N)=>(l(),o(i,null,[a(r(f),{title:"Все курсы"}),e("section",null,[a(_,null,{default:c(()=>[n("Все курсы")]),_:1}),e("div",y,[a(u),k]),e("div",I,[(l(!0),o(i,null,h(s.courses,t=>(l(),o("div",{class:"all-courses__item",key:t.id},[e("img",{class:"w-16 mx-auto",src:t.icon,alt:"Иконка курса"},null,8,S),e("h3",j,d(t.title),1),e("p",null,d(t.price)+" ₽",1),a(r(b),{class:"btn-more-detail",href:m.route("courses.show",t.slug)},{default:c(()=>[n("Подробнее")]),_:2},1032,["href"])]))),128))])])],64))}}),D=p(B,[["__scopeId","data-v-34d3b55c"]]);export{D as default};
