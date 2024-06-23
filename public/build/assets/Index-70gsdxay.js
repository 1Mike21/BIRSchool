import{l as x,o as a,e as p,w as c,c as g,F as h,f as _,u as l,d as e,a as r,t,Z as f,b,j as v}from"./app-BXMhQWYf.js";import{_ as w}from"./UserLayout-OBuM6jVa.js";import{S as k,a as y}from"./vue-splide.esm-D-kGVyzC.js";import"./LogoutButton-BZv969PD.js";const $=["src"],j=e("h3",{class:"font-semibold text-black dark:text-white mt-3"},"HTML",-1),S=e("div",{class:"w-full bg-gray-200 rounded-full dark:bg-gray-700 mt-5"},[e("div",{class:"bg-green-600 text-xs font-semibold text-white text-center p-1 leading-none rounded-full",style:{width:"45%"}},"45%")],-1),u={__name:"SliderCourses",props:{options:{type:Object,default:()=>{}},slides:{type:Array,default:()=>[]}},setup(d){const o=x(!1);return(n,s)=>(a(),p(l(y),{class:"cursor-grab",options:d.options,"onSplide:dragging":s[0]||(s[0]=i=>o.value=!0)},{default:c(()=>[(a(!0),g(h,null,_(d.slides,(i,m)=>(a(),p(l(k),{key:m,class:"max-h-[200px] text-center"},{default:c(()=>[e("img",{class:"w-20 object-cover object-top inline-block",src:i,alt:""},null,8,$),j,S]),_:2},1024))),128))]),_:1},8,["options"]))}},B={class:"grid grid-cols-1 2xl:grid-cols-2 gap-4 my-4"},P={class:"bg-white dark:bg-opacity-5 shadow-xl rounded-lg 2xl:rounded-br-3xl p-4 sm:p-6 w-full h-full border dark:border-none"},M={class:"md:flex md:justify-around"},N={class:"text-center"},O=["src","alt"],V={class:"dark:text-white mt-4 mb-5"},C={class:"dark:text-white text-center space-y-3"},D={class:"sm:text-2xl"},F={class:"sm:text-lg truncate"},L={class:"sm:text-lg"},T=e("div",{class:"bg-white dark:bg-opacity-5 shadow-xl rounded-lg 2xl:rounded-bl-3xl mb-4 p-4 sm:p-6 w-full h-full border dark:border-none"},null,-1),A={class:"grid grid-cols-1 xl:grid-cols-2 gap-4 my-4"},E={class:"bg-white dark:bg-opacity-5 shadow-xl rounded-lg xl:rounded-tr-3xl mb-4 p-4 sm:px-16 sm:py-6 w-full h-full border dark:border-none"},H=e("h3",{class:"text-xl sm:text-2xl font-bold dark:text-white text-center mb-10"},"Текущие курсы",-1),I={class:"bg-white dark:bg-opacity-5 shadow-xl rounded-lg xl:rounded-tl-3xl mb-4 p-4 sm:px-16 sm:py-6 w-full h-full border dark:border-none"},Z=e("h3",{class:"text-xl sm:text-2xl font-bold dark:text-white text-center mb-10"},"Пройденные курсы",-1),K=Object.assign({layout:w},{__name:"Index",setup(d){const o=["/storage/icons/html5.svg","/storage/icons/css3.svg","/storage/icons/course-figma.svg","/storage/icons/course-git.svg","/storage/icons/javascript.svg","/storage/icons/react.svg","/storage/icons/docker.svg"],n={type:"loop",updateOnMove:!0,perPage:4,perMove:1,gap:"2.5rem",pagination:!1,breakpoints:{1700:{perPage:3},700:{perPage:2,arrows:!1},600:{perPage:1}}};return(s,i)=>(a(),g(h,null,[r(l(f),{title:"Личный кабинет"}),e("div",B,[e("div",P,[e("div",M,[e("div",N,[e("img",{class:"h-36 w-36 sm:h-48 sm:w-48 rounded-full mx-auto",src:s.$page.props.auth.user.profile_photo_url,alt:s.$page.props.auth.user.surname+""+s.$page.props.auth.user.name},null,8,O),e("p",V,"Дата регистрации: "+t(s.$page.props.auth.user.created_at),1)]),e("div",C,[e("h2",D,t(s.$page.props.auth.user.surname)+" "+t(s.$page.props.auth.user.name),1),e("p",F,t(s.$page.props.auth.user.email),1),e("p",L,t(s.$page.props.auth.user.phone_number),1)])]),r(l(v),{class:"dark:text-white hover:text-red dark:hover:text-red hover:underline hover:underline-offset-4 hover:decoration-red sm:text-lg flex justify-center text-center md:place-content-end mt-14",href:s.route("user.profile.show")},{default:c(()=>[b("Редактировать информацию")]),_:1},8,["href"])]),T]),e("div",A,[e("div",E,[H,r(u,{options:n,slides:o})]),e("div",I,[Z,r(u,{options:n,slides:o})])])],64))}});export{K as default};