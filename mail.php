<?php
    $destino = 'lucaema1@gmail.com'

    $nombre = $_POST('NomAp');
    $empresa = $_POST('Empresa');
    $email = $_POST('Mail');
    $nro_movil = $_POST('Movil');
    $mensaje = $_POST('Mensaje');
    $asunto = 'Te contactaron por ñas paguina';

    $headers = "MIME-Version: 1.0 \r\n";
    $headers. = "Content-type: text/html; charset=utf-8 \r\n";
    $headers. = "From: $nombre <$email> \r\n"
    $headers = "To: lucaema1@gmail.com"
    //$header = "Enviado desde la paguina de Takuara":
    $cuerpo = "Te contacto " + $nombre + " de la empresa/marca " + $empresa + ". \n\nE-Mail: " +  $email + "\nTelefono: " +  $nro_movil + "\n\n" +  $mensaje;

    mail($destino, $asunto, $cuerpo, $header);
    echo "<script>alert('Correo enviado Exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\", 1000)</script>";


?>