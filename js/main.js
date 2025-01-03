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

document.getElementById("fecha").value=new Date().toISOString().substring(0,10)

document.getElementById('formIncidencias').onsubmit = function(e) {
    e.preventDefault(); // Evitar el envío del formulario

    // Obtener los valores de los campos
    var incidencia = document.getElementById('descripcion').value;
    var fechaInput = document.getElementById('fecha').value;

    // Formatear la fecha al formato dd/mm/yyyy
    var fechas = new Date(fechaInput);
    var fechaFormateada = `${String(fechas.getDate()).padStart(2, '0')}/${String(fechas.getMonth() + 1).padStart(2, '0')}/${fechas.getFullYear()}`;

    // Crear y añadir la nueva fila a la tabla
    var tr = document.createElement('tr');
    tr.innerHTML = `
        <td>${document.getElementById('tablaIncidencias').rows.length}</td>
        <td>${fechaFormateada}</td>
        <td>${incidencia}</td>
        <td><i class="fa-solid fa-trash" onclick="this.closest('tr').remove()"></i></td>
    `;
    document.getElementById('tablaIncidencias').appendChild(tr);

    // Limpiar el formulario
    this.reset();
};
