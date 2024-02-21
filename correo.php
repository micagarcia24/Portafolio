<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Configura el correo electrónico
    $para = "micagarcia99@gmail.com"; // Reemplaza con tu dirección de correo
    $asunto = "Nuevo mensaje de contacto de $nombre";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje";

    // Puedes personalizar las cabeceras según tus necesidades
    $cabeceras = "From: $email\r\n";

    // Envía el correo electrónico
    if (mail($para, $asunto, $contenido, $cabeceras)) {
        echo "Mensaje enviado con éxito";
    } else {
        echo "Error al enviar el mensaje";
    }
}
?>