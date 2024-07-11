<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Cargar PHPMailer

// Instanciar PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.example.com'; // Servidor SMTP
    $mail->SMTPAuth   = true;               // Autenticación SMTP
    $mail->Username   = 'clinicaveterinariazadel@gmail.com'; // Correo electrónico SMTP
    $mail->Password   = 'zadel2003';   // Contraseña SMTP
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Tipo de cifrado TLS
    $mail->Port       = 587;                // Puerto SMTP

    // Destinatario y remitente
    $mail->setFrom('tu_correo@example.com', 'Tu Nombre');
    $mail->addAddress('clinicaveterinariazadel@gmail.com', 'Clinica veterinaria'); // A quien enviar

    // Contenido del correo
    $mail->isHTML(true);  // Establecer el formato de correo electrónico a HTML
    $mail->Subject = 'Asunto del correo';
    $mail->Body    = 'Este es el cuerpo del mensaje HTML';

    // Enviar correo
    $mail->send();
    echo 'Correo enviado correctamente.';
} catch (Exception $e) {
    echo "Error al enviar el correo: {$mail->ErrorInfo}";
}
?>
