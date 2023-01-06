
<?php
   
   $value = 'session-id';
   setcookie("TestCookie", $value);
   setcookie("TestCookie", $value, time()+10800); //Expires in 3 hours


   $html = file_get_contents('index.html');
   $randomNumber = rand(0, 1000000);
  

   $html = str_replace('---session-id---',$randomNumber, $html);
   echo $html;

?>

 

