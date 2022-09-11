<?php

use PHPMailer\PHPMailer\PHPMailer;

function send_mail ($address, $message) {
    require 'vendor/autoload.php';

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    
    $mail->SMTPDebug  = 0;  
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->Host       = 'smtp.office365.com';
    $mail->Username   = '@hotmail.com';
    $mail->Password   = '*****';
    
    $mail->SMTPSecure = false;
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    
    $mail->SetFrom('@hotmail.com', 'NiColor');
    $mail->AddAddress($address);
    $mail->Subject = "Boas-vindas a NiColor";
    $mail->Body = $message;
    
        if($mail -> send()){
            // echo "E-mail enviado com Sucesso!";
            return true;
        }else{
            // echo "Falha ao enviar e-mail!";
            return false;
        }
}
?>