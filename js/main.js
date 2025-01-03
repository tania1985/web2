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

var papeleras = document.getElementsByClassName("fa-trash");
for (let index = 0; index < papeleras.length; index++) {
    const element = papeleras[index];
    element.onclick = function (e) {
        // Encuentra la fila más cercana al ícono de la papelera
        const row = e.target.closest('tr');
        
        // Muestra una alerta con el Id de la fila antes de eliminarla
        const id = row.firstElementChild.innerHTML;
        const confirmDelete = confirm("¿Estás seguro de que quieres borrar la incidencia con ID: " + id + "?");

        // Si el usuario confirma, elimina la fila
        if (confirmDelete) {
            row.remove();
        }
    };
}

// Establecer la fecha de hoy en el campo de fecha
window.onload = function() {
    var fechaHoy = new Date().toISOString().split('T')[0]; // Obtener la fecha en formato YYYY-MM-DD
    document.getElementById('fecha').value = fechaHoy; // Asignar la fecha al campo de fecha
};

var formulario = document.getElementById('formIncidencias');
formulario.onsubmit = function(e) {
    e.preventDefault(); // Evitar que el formulario se envíe
    var incidencia =document.getElementById('descripcion').value;
    var fecha =document.getElementById('fecha').value;
    var tabla =document.getElementById('tablaIncidencias');
    var tr = document.createElement('tr');
    var tr=document.createElement('tr');
    var td1=document.createElement('td');
    var td2=document.createElement('td');
    var td3=document.createElement('td');
    var td4=document.createElement('td');
    var i=document.createElement('i');
    i.classList.add('fa-solid');
    i.classList.add('fa-trash');
    i.onclick=function(e){
        var row=this.closest('tr');
        row.remove();
    };
    td1.innerHTML=99;
    td2.innerHTML=fecha;
    td3.innerHTML=incidencia;
    td4.appendChild(i);
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tr.appendChild(td4);
    tabla.appendChild(tr);
    formulario.reset();
};