<?php
// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mostrar un mensaje de éxito
    echo "Formulario enviado correctamente. ¡Funciona!";
} else {
    // Si alguien accede al archivo sin enviar el formulario
    echo "Acceso no válido.";
}
?>