import{T as c,c as u,a as e,u as o,w as r,F as f,o as p,Z as b,n as l,b as h,d as g}from"./app-BXMhQWYf.js";import{_ as v}from"./AdminButton-Dj9fNSfF.js";import{_ as w,a as $,A as i}from"./ModalPage-BXkKkteZ.js";import{_ as n}from"./InputLabel-Dx5dXBjV.js";import{_ as d}from"./InputError-G7xtYhoB.js";import{D as x}from"./Dropzone-gIGMYzLA.js";import{_ as k}from"./Checkbox-EDb0zloz.js";import"./Modal-BaIoVFP7.js";const F=g("h3",{class:"text-xl font-semibold"}," Добавление отзыва ",-1),E={__name:"Create",setup(B){const _=(a,t)=>{s.comment=t.value[0]},s=c({comment:null,is_published:!1});return(a,t)=>(p(),u(f,null,[e(o(b),{title:"Добавление отзыва"}),e(w,{"max-width":"md"},{title:r(()=>[F]),content:r(()=>[e($,{id:"create_review_form",onSubmitted:t[1]||(t[1]=m=>o(s).post(a.route("admin.reviews.store")))},{default:r(()=>[e(i,null,{default:r(()=>[e(n,{class:"mb-2",for:"comment",value:"Отзыв"}),e(x,{onLoad:_,class:l({"!border-red":o(s).errors.comment})},null,8,["class"]),e(d,{class:"mt-2",message:o(s).errors.comment},null,8,["message"])]),_:1}),e(i,null,{default:r(()=>[e(n,{class:"mb-2 mr-3",for:"is_published",value:"Видимость отзыва"}),e(k,{id:"is_published",class:l(["w-6 h-6",{"border-red":o(s).errors.is_published}]),checked:o(s).is_published,"onUpdate:checked":t[0]||(t[0]=m=>o(s).is_published=m)},null,8,["checked","class"]),e(d,{class:"mt-2",message:o(s).errors.is_published},null,8,["message"])]),_:1})]),_:1})]),footer:r(()=>[e(v,{as:"button",submitted:o(s).processing,disabled:o(s).processing,form:"create_review_form",type:"submit"},{default:r(()=>[h(" Добавить ")]),_:1},8,["submitted","disabled"])]),_:1})],64))}};export{E as default};