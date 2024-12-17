const $nav = document.querySelector(".nav");
const $Abrir=document.querySelector("#Abrir");
const $Cerrar=document.querySelector("#Cerrar");

$Abrir.addEventListener("click",()=>{
    $nav.classList.add("visible")
});

$Cerrar.addEventListener("click",()=>{
    $nav.classList.remove("visible")
});