<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $destino = 'lucaema1@gmail.com';

    $nombre = $_POST('NomAp');
    $empresa = $_POST('Empresa');
    $email = $_POST('Mail');
    $nro_movil = $_POST('Movil');
    $mensaje = $_POST('Mensaje');
    $asunto = 'Te contactaron por la paguina';

    $cuerpo = "Te contacto $nombre de la empresa/marca $empresa. \n\nE-Mail: $email \nTelefono: $nro_movil\n\n $mensaje";

    $mailer = new PHPMailer();
    $mailer->setFrom($email, "$nombre");
    $mailer->addAddress("lucaema1@gmail.com");
    $mailer->Subject = $asunto;
    $mailer->msgHTML($cuerpo);
    $mailer->send();