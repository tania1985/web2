document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("contact-form");
    const submitButton = document.getElementById("submit");
    
    // Añadimos un evento 'input' para verificar el estado de todos los campos
    form.addEventListener("input", function() {
        // Verificamos si todos los campos son válidos
        const isValid = Array.from(form.elements).every(element => element.value !== "" && element.checkValidity());
        
        // Habilitar el botón solo si todos los campos son válidos
        if (isValid) {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    });
});
