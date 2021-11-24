"use strict";

function modify(e){
    alert(e.type +" on modify for "+ e.currentTarget.parentNode.id+" !");
}

function deleter(e){
    alert(e.type +" on remove for "+ e.currentTarget.parentNode.id+" !");
    e.parentNode.style.visibility = 'hidden';
}

document.getElementById("addNew").addEventListener("click", function(e){
    alert(e.type +" on add !");
})

let modifiers = document.getElementsByClassName("modify");
Array.from(modifiers).forEach(m => m.addEventListener("click",modify));

let remover = document.getElementsByClassName("remove");
Array.from(remover).forEach(m => m.addEventListener("click",deleter));