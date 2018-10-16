<?php

function l($varijabla){
    echo "<pre>";
    print_r($varijabla);
    echo "</pre>";
}


function saljiEmail( $imeiprezime, $vasemail, $vasaporuka){
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
    $mail->setFrom('$_POST=["vasemail"]', 'Korisnik',0);
    $mail->addAddress('ivan.knez94@gmail.com', 'Moja');
    $mail->isHTML(true);
    $mail->Subject  = 'Poruka korisnika s Gazzera';
    $mail->Body = <<<EOT
    Email: {$_POST['vasemail']}
    Name: {$_POST['imeiprezime']}
    Message: {$_POST['vasaporuka']}EOT;
    if (!$mail->send()) {
        return"Mailer Error: " . $mail->ErrorInfo;
    } else {
        return "OK";
    }
} ?>