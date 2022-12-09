
document.getElementById("carouselExampleCaptions").addEventListener("click", scriptarrow,false);
document.getElementById("whtplay").addEventListener("mouseenter",whattoplay,false);
document.getElementById("whtplay").addEventListener("mouseleave",whattoplayleave,false);
document.getElementById("whtplay").addEventListener("mouseenter",dump,false);
document.getElementById("whtplay").addEventListener("mouseleave",dumpleave,false);
function scriptarrow (){
    const obj = document.getElementById("animtext");
    const obj1 = document.getElementById("cenB");
    obj.style.animation = 'none';
    obj.offsetHeight; /* trigger reflow */
    obj.style.animation = null;
    obj1.style.animation = 'none';
    obj1.offsetHeight; /* trigger reflow */
    obj1.style.animation = null;
}

function whattoplay(){
    const obj =  document.getElementById("whtplay");
    obj.style.paddingRight = '40px';
    const obj1 =  document.getElementsByClassName("tabeldata");
    obj1.style.opacity="1";

}
function whattoplayleave(){
    const obj =  document.getElementById("whtplay");
    obj.style.paddingRight = '0px';
    const obj1 =  document.getElementsByClassName("tabeldata");

}
function dump(){
    const obj =  document.getElementById("dumb");
    obj.style.marginLeft="10px";    obj.style.opacity = "1";
    entertabel();
}
function dumpleave(){
    const obj =  document.getElementById("dumb");
    obj.style.marginLeft="0px";
    obj.style.opacity = "0";
    exittabel();
}
function entertabel() {
    const obj2 =  document.getElementById("p2");
    const obj3 =  document.getElementById("p3");
    const obj4 =  document.getElementById("p4");
    const obj5 =  document.getElementById("p5");
    const obj6 =  document.getElementById("outer");
    obj6.style.borderTop = "rgb(251,91,33) 2px solid";
    obj2.style.opacity="1";
    obj2.style.borderRight= "1px rgb(251,91,33) solid";
    obj3.style.opacity="1";
    obj3.style.borderRight= "1px rgb(251,91,33) solid";
    obj4.style.opacity="1";
    obj4.style.borderRight= "1px rgb(251,91,33) solid";
    obj5.style.opacity="1";
    obj5.style.borderRight= "1px rgb(251,91,33) solid";
}
function exittabel() {
    const obj2 =  document.getElementById("p2");
    const obj3 =  document.getElementById("p3");
    const obj4 =  document.getElementById("p4");
    const obj5 =  document.getElementById("p5");
    const obj6 =  document.getElementById("outer");
    obj6.style.borderTop = "transparent 2px solid";
    obj2.style.opacity="0";
    obj2.style.borderRight="1px transparent solid"
    obj3.style.opacity="0";
    obj3.style.borderRight="1px transparent solid"
    obj4.style.opacity="0";
    obj4.style.borderRight="1px transparent solid"
    obj5.style.opacity="0";
    obj5.style.borderRight="1px transparent solid"
}
