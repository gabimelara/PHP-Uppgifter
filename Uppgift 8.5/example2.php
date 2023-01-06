<?php 

if (isset($_GET["name"])) {
      echo "Name: ";
      echo $_GET["name"];
      echo "Session Id : " . $_GET["session-id"];
      echo nl2br("\r\n");
      
  }
  
  if (isset($_GET["button"])) {
      echo "Button: ";
      echo $_GET["button"];
      echo nl2br("\r\n");
     

  }

  else {
      echo "Session Id : " . $_GET["session-id"];
     }
?>

