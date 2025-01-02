 // Obtener la imagen del usuario y el menú
 const userImage = document.getElementById("userImage");
 const userMenu = document.getElementById("userMenu");

 // Agregar evento de clic en la imagen
 userImage.addEventListener("click", function() {
     // Mostrar un mensaje de alerta
     alert("¡Has hecho clic en la foto del usuario!");

     // Cambiar el estilo de display para ocultar el menú
     if (userMenu.style.display === "none") {
         userMenu.style.display = "block"; // Mostrar el menú si ya estaba oculto
     } else {
         userMenu.style.display = "none"; // Ocultar el menú
     }
 });