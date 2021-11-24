"use strict";

document.body.style.backgroundColor = "red";

var obj = document.getElementsByClassName("descr");

for (var i = 0; i < obj.length; i++) {
    obj[i].style.backgroundColor =  "lightblue";
}

var monCaroussel = document.getElementById("caroussel");
var plist = monCaroussel.getElementsByTagName("p");
plist[0].style.backgroundColor =  "white";



