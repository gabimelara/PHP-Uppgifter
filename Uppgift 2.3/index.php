<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Kollar om det verkligen är en bild eller inte
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    echo nl2br("\r\n");
    echo "Name: ";
    echo $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    echo nl2br("\r\n");
    echo "size: ";
    echo $mimetype = $_FILES["fileToUpload"]["size"]; 
    $uploadOk = 0;
  }
}

// Ser till att bilden/filen inte är så stor
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo nl2br("\r\n");
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
?>