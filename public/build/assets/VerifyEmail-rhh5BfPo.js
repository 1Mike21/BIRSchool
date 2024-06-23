import{T as g,G as h,c as a,a as e,u as t,w as s,F as p,o as u,Z as y,q as _,d as o,n as v,b as n,j as l,i as x}from"./app-BXMhQWYf.js";import{A as b}from"./AuthenticationCard-Dvx2pCRp.js";import{_ as w}from"./PrimaryButton-DzSzy4Z5.js";const k=o("div",{class:"mb-4 text-sm text-gray-600"}," Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another. ",-1),V={key:0,class:"mb-4 font-medium text-sm text-green-600"},E={class:"mt-4 flex items-center justify-between"},A={__name:"VerifyEmail",props:{status:String},setup(c){const d=c,i=g({}),f=()=>{i.post(route("verification.send"))},m=h(()=>d.status==="verification-link-sent");return(r,B)=>(u(),a(p,null,[e(t(y),{title:"Email Verification"}),e(b,null,{default:s(()=>[k,m.value?(u(),a("div",V," A new verification link has been sent to the email address you provided in your profile settings. ")):_("",!0),o("form",{onSubmit:x(f,["prevent"])},[o("div",E,[e(w,{class:v({"opacity-25":t(i).processing}),disabled:t(i).processing},{default:s(()=>[n(" Resend Verification Email ")]),_:1},8,["class","disabled"]),o("div",null,[e(t(l),{href:r.route("user.profile.show"),class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:s(()=>[n(" Edit Profile")]),_:1},8,["href"]),e(t(l),{href:r.route("logout"),method:"post",as:"button",class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ms-2"},{default:s(()=>[n(" Log Out ")]),_:1},8,["href"])])])],32)]),_:1})],64))}};export{A as default};
