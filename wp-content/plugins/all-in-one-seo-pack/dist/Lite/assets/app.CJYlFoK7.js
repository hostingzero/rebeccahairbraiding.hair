import{c as a,b as i,o as c,V as l}from"./js/runtime-dom.esm-bundler.tPRhSV4q.js";import{_ as u}from"./js/_plugin-vue_export-helper.BN1snXvA.js";const p={data(){return{display:!1,interval:null}},methods:{addMenuHighlight(){const t=document.querySelector("#toplevel_page_aioseo");if(!t)return;t.querySelectorAll(".wp-submenu li").forEach(e=>{const o=e.querySelector("a");if(!o)return;const n=o.querySelector(".aioseo-menu-highlight");if(n){e.classList.add("aioseo-submenu-highlight"),n.classList.contains("red")&&e.classList.add("red");const s=e.querySelector("a");s&&n.classList.contains("lite")&&s.setAttribute("target","_blank")}})}},created(){this.addMenuHighlight()}},d={key:0};function _(t,r,e,o,n,s){return n.display?(c(),a("div",d)):i("",!0)}const m=u(p,[["render",_]]);document.getElementById("aioseo-admin")&&l({...m,name:"Standalone/App"}).mount("#aioseo-admin");