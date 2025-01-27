<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "joseluiscampostorres10@gmail.com";
    $subject = "Nuevo mensaje de " . $fullName;
    $body = "Nombre: $fullName\nCorreo: $email\nMensaje: $message";

    if (mail($to, $subject, $body)) {
        echo "Mensaje enviado exitosamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>