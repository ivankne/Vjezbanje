<?php

//function l($varijabla){
//    echo "<pre>";
//    print_r($varijabla);
//    echo "</pre>";
//}


function saljiEmail($mail,$primatelji,$naslov,$poruka){
    require 'PHPmailer/PHPMailerAutoload.php';
    date_default_timezone_set('Etc/UTC');
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host = 'tls://smtp.gmail.com:587';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'ivan.knez94@gmail.com';
    $mail->Password = 'X';
    $posiljatelj = mb_encode_mimeheader("Gazzer","UTF-8");
    $mail->setFrom('ivan.knez94@gmail.com', $posiljatelj);
    foreach ($primatelji as $primatelj) {
        $mail->addAddress($primatelj->email, mb_encode_mimeheader($primatelj->ime . " " . $primatelj->prezime));
    }
    $mail->Subject = $naslov;
    $mail->msgHTML($poruka);
    $mail->AltBody = $poruka;
    if (!$mail->send()) {
        return"Mailer Error: " . $mail->ErrorInfo;
    } else {
        return "OK";
    }
} ?>