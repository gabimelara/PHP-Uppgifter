
<?php


   
   $value = 'session-id';
   ini_set('session.cookie_secure', 1);
   setcookie("TestCookie", $value, time()+10800, NULL, NULL, TRUE, NULL); //Expires in 3 hours

   session_start();
 
 
   $html = file_get_contents('index.html');
   $randomNumber = rand(0, 1000000);
  
   $html = str_replace('---session-id---',$randomNumber, $html);
   echo $html;

?>

 

