var inputPass=document.getElementById("password");
var inputRePass=document.getElementById("confirm-password");
var btnCrear=document.getElementById("btnCrear");

inputPass.onchange=function(){
    var txtPass=inputPass.value;
    console.log(txtPass);
}