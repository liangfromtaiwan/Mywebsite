<?php

use PHPMailer/PHPMailer/PHPMailer;
use PHPMailer/PHPMailer/Exception;

require'phpmaile/src/Exceptionh.php'
require'phpmaile/src/PHPMailer.php'
require'phpmaile/src/SMTP.php'

if(isset()$_POST["send"])){
    $mail = new PHPMailer(true);

    $mail ->isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'sscomplexryan@gmail.com';
    $mail -> Password = 'bfycwlzqwbiidyso';
    $mail -> SMTPSecure = 'ssl';
    $mail -> Port = 465;
    $mail -> setFrom('sscomplexryan@gmail.com') ;
    $mail -> addAddress($_POST["email"]);
    $mail -> isHTML(ture);

    $mail -> Subjest = $_POST["subject"]
    $mail -> Body = $_POST["message"]
$mail -> send();

echo
"
<script>
alert('Sent Successfully');
document.location.href='index.php';
<script>
";

}

?>