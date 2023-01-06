
    <?php

//require_once("class.phpmailer.php");
//require_once("class.smtp.php");
require 'PHPMailerAutoload.php'; 
$mail = new PHPMailer(true);



try{

$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

$mail->SMTPDebug=10;
$mail->isSMTP();
$mail->Mailer="smtp";
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth=true;
$mail->Username="example@gmail.com"; //insert real email and password 
$mail->Password="******";  
$mail->SMTPSecure="ssl";
$mail->Port=465;

$mail->setFrom("example@gmail.com");  //insert real email
$mail->addAddress("example@gmail.com");


$mail->Subject =$_POST['subject'];
$mail->AddAttachment(basename($target_path . $_FILES['uploadedfile']['name']));
$mail->Body=$_POST['message']."\n\nObservera! Detta meddelande är sänt från ett formulär på Internet och avsändaren kan vara felaktig!";

$mail->send();
echo "Email successfully sent!";  


}
catch(Exception $e){
echo $e; 
}


?>