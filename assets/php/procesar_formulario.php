<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    
    // Reemplaza 'tu_correo@example.com' con tu dirección de correo electrónico real
    $destinatario = 'yulivcrvs05@gmail.com';

    // Asigna un encabezado de correo electrónico
    $headers = "From: $nombre <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Formatea el mensaje de correo electrónico
    $mensaje_correo = "Asunto: $asunto<br>";
    $mensaje_correo .= "Mensaje:<br>$mensaje";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $mensaje_correo, $headers);

    // Redirige a una página de confirmación o muestra un mensaje de éxito
    header("Location: confirmacion.html");
    exit();
} else {
    // Si se accede a este archivo PHP directamente sin enviar el formulario, redirige a una página de error o vuelve atrás
    header("Location: error.html");
    exit();
}
?>
