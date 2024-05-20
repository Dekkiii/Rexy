<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bhenedictberbano23@gmail.com';
    $mail->Password = 'iupzgqewjxftmzzt';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('berbanobhenedict23@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];
    $mail->send();
    echo
    
    "
    <script>
    alert('Sent Successfully');
    document.location.href = '../app/Views/home_view.php';
    </script>
    ";
}
?>