    // Referencias a los elementos del formulario
    const submitButton = document.getElementById("submitButton");
    const authorizationCheckbox = document.getElementById("authorization");

    // Función para habilitar el botón solo si se autoriza el uso de los datos
    authorizationCheckbox.addEventListener("change", function() {
        if (authorizationCheckbox.checked) {
            submitButton.classList.add("enabled");
            submitButton.disabled = false;
        } else {
            submitButton.classList.remove("enabled");
            submitButton.disabled = true;
        }
    });
