(window.blocksyJsonP=window.blocksyJsonP||[]).push([[7],{27:function(e,t,n){"use strict";n.r(t),n.d(t,"mount",(function(){return s}));const i=e=>{e&&(e.classList.contains("current-menu-active")?((e,t)=>{const n=e.querySelector("ul");requestAnimationFrame(()=>{const e=n.getBoundingClientRect().height;n.style.height=e+"px",n.classList.add("is-animating"),requestAnimationFrame(()=>{n.style.height="0px",r(n,()=>{n.classList.remove("is-animating"),n.removeAttribute("style"),t()})})})})(e,()=>{e.classList.toggle("current-menu-active"),[...e.querySelectorAll(".menu-item-has-children.current-menu-active, .page_item_has_children.current-menu-active")].map(e=>e.classList.remove("current-menu-active"))}):([...e.parentNode.children].map(e=>e.classList.contains("current-menu-active")&&i(e)),e.classList.toggle("current-menu-active"),(e=>{const t=e.querySelector("ul");requestAnimationFrame(()=>{const e=t.getBoundingClientRect().height;t.style.height="0px",t.classList.add("is-animating"),requestAnimationFrame(()=>{t.style.height=e+"px",r(t,()=>{t.classList.remove("is-animating"),t.removeAttribute("style")})})})})(e)))},s=e=>{if(e.hasListener)return;e.hasListener=!0;let t=e.parentNode.getAttribute("href");t&&"#"!==t||e.parentNode.addEventListener("click",t=>{t.preventDefault(),t.stopPropagation(),i(e.closest(".menu-item-has-children, .page_item_has_children"))}),e.addEventListener("click",t=>{t.preventDefault(),t.stopPropagation(),i(e.closest(".menu-item-has-children, .page_item_has_children"))})};function r(e,t){const n=i=>{i.target===e&&(e.removeEventListener("transitionend",n),t())};e.addEventListener("transitionend",n)}}}]);