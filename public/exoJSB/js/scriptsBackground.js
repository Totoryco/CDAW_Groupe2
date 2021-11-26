"use strict";
<<<<<<< HEAD
// document.body.style.backgroundColor = "red";
let listeDescr = document.getElementsByClassName('descr');
Array.from(listeDescr).forEach(element => element.style.backgroundColor = 'lightblue');

document.getElementById('caroussel').style.backgroundColor = 'green';
=======

document.body.style.backgroundColor = "red";

var obj = document.getElementsByClassName("descr");

for (var i = 0; i < obj.length; i++) {
    obj[i].style.backgroundColor =  "lightblue";
}

var monCaroussel = document.getElementById("caroussel");
var plist = monCaroussel.getElementsByTagName("p");
plist[0].style.backgroundColor =  "white";



>>>>>>> f8a45858605a32f0b622d5b80e19594ab69d15f4
