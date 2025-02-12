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

/* var papeleras=document.getElementsByClassName("fa-trash");
for (let index = 0; index < papeleras.length; index++) {
    const element = papeleras[index];
    element.onclick=function(e){
        var row=this.closest("tr");
        row.remove();
        //e.target.parentElement.parentElement.remove();
        //alert("borrando "+e.target.parentElement.parentElement.firstElementChild.innerText)
    };   
}
// Establecer la fecha actual en el input de fecha
document.getElementById("fecha").value = new Date().toISOString().substring(0, 10);

// Función para obtener el siguiente ID disponible
function obtenerNuevoId() {
    const tabla = document.getElementById('tablaIncidencias');
    const filas = tabla.getElementsByTagName('tr');
    let ultimoId = 0;

    for (let i = 0; i < filas.length; i++) {
        const id = filas[i].cells[0]?.innerText;
        if (id && !isNaN(id)) {
            ultimoId = Math.max(ultimoId, parseInt(id));
        }
    }

    return ultimoId + 1;
}

// Función para actualizar los IDs después de eliminar una fila
function actualizarIds() {
    const tabla = document.getElementById('tablaIncidencias');
    const filas = tabla.getElementsByTagName('tr');
    let id = 1;

    for (let i = 0; i < filas.length; i++) {
        const fila = filas[i];
        // Saltar el encabezado de la tabla
        if (i === 0) continue;

        // Reasignar los ID
        fila.cells[0].innerText = id;
        id++;
    }
}

// Función para actualizar el campo de fecha con la fecha de hoy
function actualizarFechaHoy() {
    const fechaHoy = new Date().toISOString().substring(0, 10); // Formato yyyy-mm-dd
    document.getElementById("fecha").value = fechaHoy;
}

// Manejar el envío del formulario
document.getElementById('formIncidencias').onsubmit = function(e) {
    e.preventDefault(); // Prevenir el envío del formulario

    // Obtener los valores del formulario
    var incidencia = document.getElementById('descripcion').value;
    var fechaInput = document.getElementById('fecha').value;

    // Formatear la fecha al formato dd/mm/yyyy
    var fecha = new Date(fechaInput);
    var fechaFormateada = `${String(fecha.getDate()).padStart(2, '0')}/${String(fecha.getMonth() + 1).padStart(2, '0')}/${fecha.getFullYear()}`;

    // Obtener el siguiente ID
    var nuevoId = obtenerNuevoId();

    // Crear nueva fila en la tabla
    var tr = document.createElement('tr');
    tr.innerHTML = `
        <td>${nuevoId}</td>
        <td>${fechaFormateada}</td>
        <td>${incidencia}</td>
        <td><i class="fa-solid fa-trash" onclick="this.closest('tr').remove(); actualizarIds(); actualizarFechaHoy();"></i></td>
    `;
    document.getElementById('tablaIncidencias').appendChild(tr);

    // Limpiar solo la descripción
    document.getElementById('descripcion').value = "";
};
*/

