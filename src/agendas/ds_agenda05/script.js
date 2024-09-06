


function menu_Open(){
    document.querySelector("aside").style.width="200px"
    document.querySelector("aside ul").style.display="block";

    document.getElementById("menu--button").style.display="none";
    document.getElementById("close--button").style.display="block";

    document.querySelector("main").style.marginLeft="200px";
}

function menu_Close(){
    document.querySelector("aside").style.width="50px"
    document.querySelector("aside ul").style.display="none";

    document.getElementById("close--button").style.display="none";
    document.getElementById("menu--button").style.display="block";

    document.querySelector("main").style.marginLeft="50px";
}


function base(){
    document.getElementById("home").style.display="none";
    document.getElementById("OITAVOA").style.display="none";
    document.getElementById("OITAVOB").style.display="none";
    document.getElementById("OITAVOC").style.display="none";
}


function displayBlock(id){
    base();
    document.getElementById(id).style.display="block"
}