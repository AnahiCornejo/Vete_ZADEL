<?php
// Recoge los datos del formulario
$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['message'];

// Dirección de correo a donde se enviará el mensaje
$destinatario = "anahicornejo40@gmail.com";

// Asunto del correo
$asunto = "Mensaje de contacto desde tu sitio web";

// Cuerpo del mensaje
$cuerpoMensaje = "Nombre: $nombre\n";
$cuerpoMensaje .= "Email: $email\n\n";
$cuerpoMensaje .= "Mensaje:\n$message\n";

// Cabeceras del correo
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Envío del correo
mail($destinatario, $asunto, $cuerpoMensaje, $headers);

// Redirecciona o muestra un mensaje de confirmación
echo "¡Gracias! Tu mensaje ha sido enviado.";

// Puedes redirigir a una página de confirmación
// header("Location: gracias.html");
?>
