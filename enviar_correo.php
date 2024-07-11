<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];

    // Configurar el correo
    $destinatario = "clinicaveterinariazadel@gmail.com";
    $asunto = "Mensaje de contacto desde tu sitio web";
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n\n";
    $cuerpoMensaje .= "Mensaje:\n$message\n";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar correo
    if (mail($destinatario, $asunto, $cuerpoMensaje, $headers)) {
        echo "¡Gracias! Tu mensaje ha sido enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje. Por favor, intenta nuevamente más tarde.";
    }
}
?>
