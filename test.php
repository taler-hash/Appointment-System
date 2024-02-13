<?php
    require_once('PHPMailer/PHPMailer-master/src/PHPMailer.php');

    $mail = new PHPMailer();
    $mail ->isSMTP();
    $mail ->SMTPAuth();
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = 'smtp.gmail.com';
    $mail ->Port = '465';
    $mail ->isHTML();
    $mail ->Username = 'juriepedrogas@gmail.com';
    $mail ->Password = '09227606545';
    $mail ->SetFrom('no-reply@howcode.org');
    $mail ->Subject = 'Hello World';
    $mail ->Body = 'a Test Mail';

?> 