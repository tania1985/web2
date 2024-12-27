var formulario = document.getElementById("formulario");
formulario.onsubmit=function(e){
    e.preventDefault();
    var datos = new FormData(formulario);
    fetch('php/login.php',{
        method: 'POST',
        body: datos
    })
    .then(res => res.json())
    .then(data => {
        if(data === 'error'){
            alert('Usuario o contraseña incorrectos');
        }else{
            location.href = 'admin.php';
        }
    })
    
}