var user=document.getElementById("imgUser");
user.onclick=function(){
    var menuUser=document.getElementById("menuUser");
    if(menuUser.style.display=="block"){
        menuUser.style.display="none";
    }else{
        menuUser.style.display="block";
    }
};
var menuMovil=document.getElementById("menuMovil");
menuMovil.onclick=function(){
    var menu=document.getElementById("menu");
    if(menu.style.display=="block"){
        menu.style.display="none";
    }else{
        menu.style.display="block";
    }
};