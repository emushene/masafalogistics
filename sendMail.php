<?php
//html form 
use PHPMailer\PHPMailer\PHPMailer;
if(isset()$_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $subject = $_POST['subject'];
    $body = $_POST['body']
//mailer script
    require_once "phpmailer/src/PHPMailer.php";
    require_once "phpmailer/src/SMTP.php";
    require_once "phpmailer/src/Exception.php";

    //smtp setup
    $mail->isSMTP();
    $mail->Host ="smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->username = "e.mushene@gmail.com";
    $mail->Password = "*******";
    $mail-> = 465;
    $mail->SMTPSecure = "ssl";

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->("e.mushene@gmail.com");
    $mail->Subject = ("$email ($subject)");
    $mail->body = $body;

    if($mail->send()){
        $status = "success";
        $response = "Email is Sent";
    }
    else
    {
        $status = "failed";
        $response = "something is wrong: <br>" . $mail->ErrorInfo;
    }
    exit(json_encode(array("status" => $status, "response" => $response)));




}

?>
