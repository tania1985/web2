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

var papeleras=document.getElementsByClassName("fa-trash");
for (let index = 0; index < papeleras.length; index++) {
    const element = papeleras[index];
    element.onclick=function(){alert("borrando")};   
}