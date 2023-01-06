<?php 

session_start();
$id =session_id();
echo("Session Id: ".$id);

$new_sessionid = session_id();
echo nl2br("\r\n");

if(isset($_GET["name"])){
    echo "Name: ";
    echo $_GET["name"];
    echo nl2br("\r\n");
}

if(isset($_GET["button"])){
    echo "Button: ";
    echo $_GET["button"];
    echo nl2br("\r\n");
}

?>