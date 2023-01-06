<?php

require 'PHPMailerAutoload.php'; 
$mail = new PHPMailer(true);

try{

    $mail->SMTPDebug=10;
    $mail->isSMTP();
    $mail->Mailer="smtp";
    $mail->Host="smtp.gmail.com";
    $mail->SMTPAuth=true;
    $mail->Username="example@gmail.com";
    $mail->Password="******";    
    $mail->SMTPSecure="ssl";
    $mail->Port=465;
    
    $mail->setFrom("gabi17melara@gmail.com");
    $mail->addAddress("gabi17melara@gmail.com");

    
    $mail->Subject =$_POST['subject'];
    $mail->Body=$_POST['message']."\n\nObservera! Detta meddelande är sänt från ett formulär på Internet och avsändaren kan vara felaktig!";
  
    $mail->send();
    echo "Email successfully sent!";  


}
catch(Exception $e){
    echo $e; 
}

?>