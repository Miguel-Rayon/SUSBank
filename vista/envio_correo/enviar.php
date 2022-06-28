<?php
include 'Mailer/src/PHPMailer.php';
include 'Mailer/src/SMTP.php';
include 'Mailer/src/Exception.php';
class enviar {
public function enviar_correo($correo,$nombre,$mensaje,$pass){
    $fromemail  = "SUS011927@hotmail.com";
    $fromname   = "SUS Soporte";
    $host       = "smtp.office365.com";
    $port       = "587";
    $SMTPAuth   = "true";
    $SMTPSecure = "STARTTLS";
    $password   = "86942351Hr27$";
    $subject    = "Folio de sugerencia/quejas";
    $bodyEmail  = $nombre."<br>Su Mensaje se ha enviado: ".$mensaje."<br>su folio es: ".$pass. "<br>Para mas informacion comuniquese en nuestras redes";

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->SMTPDebug  = 0;
    $mail->Host       = $host;
    $mail->Port       = $port;
    $mail->SMTPAuth   = $SMTPAuth;
    $mail->SMTPSecure = $SMTPSecure;
    $mail->Username   = $fromemail;
    $mail->Password   = $password;
    $mail->CharSet = 'UTF-8';
    $mail->setfrom($fromemail, $fromname);
    $mail->addAddress($correo);

    //Asunto
    $mail->isHTML(true);
    $mail->Subject = $subject;
    //Cuerpo email
    $mail->Body = $bodyEmail;

    if (!$mail->send()) {
        echo "no se envio";
        die();
    }
}
}
?>