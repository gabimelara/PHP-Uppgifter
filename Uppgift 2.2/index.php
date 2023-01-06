<?php
    if (isset($_POST["username"])) {
        echo "Username: ";
        echo $_POST["username"];
        echo nl2br("\r\n");
    }
    
    if (isset($_POST["username"])) {
        echo "Password: ";
        echo $_POST["password"];
        echo nl2br("\r\n");
    }
    
    if (isset($_POST["text_area"])) {
        echo $_POST["text_area"];
        echo nl2br("\r\n");
    }
    
    if (isset($_POST["check_box"])) {
        echo "Check box: "; 
        echo $_POST["check_box"];
        echo nl2br("\r\n");
    }

    if (isset($_POST["radio_button"])) {
        echo "Radio button option: "; 
        echo $_POST["radio_button"];
        echo nl2br("\r\n");
    }
    

    if (isset($_POST["button"])) {
        echo "Button: "; 
        echo $_POST["button"];
        echo nl2br("\r\n");
    }

    if (isset($_GET["e-mail"])) {
        echo "Your e-mail is: "; 
        echo $_GET["e-mail"];
        echo nl2br("\r\n");
    }
    ?>

