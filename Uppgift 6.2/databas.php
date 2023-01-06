<?php

$servername="localhost"; 
$user="usr_21567537"; 
$password="567537"; 
$dbname="db_21567537"; 
 
 date_default_timezone_set('Europe/Stockholm');
 $html = file_get_contents("index.html");

  //fungerar med phpadmin databas som jag skapade
 $connection = mysqli_connect("localhost","usr_21567537","567537","db_21567537"); 
 if(!$connection) {
     die("Database connection failed".mysqli_connect_error());
 } else{
     echo "it works!";
 }
 if(isset($_POST['submit'])) {
     $name = strip_tags($_POST['name']);
     $email = strip_tags($_POST['email']);
     $comment = strip_tags($_POST['comment']);
     $homepage = strip_tags($_POST['homepage']);
     $date = date("Y-m-d-H:i:s");
 
        
    $sql=("INSERT INTO guestbook(name, email, homepage, comment, date)VALUES ('$name','$email','$homepage',$comment')");
    $stmt = $db->query($sql);
    $connection->query($stmt->execute());
         
 }

 $sql = "SELECT * FROM guestbook ORDER BY id ASC";
 $result = mysqli_query($connection, $sql); 
 
 $html = file_get_contents("index.html");
 $html_pieces = explode("<!--===entries===-->", $html);
 echo $html;
 while ($row = mysqli_fetch_assoc($result)) 
 {
     $html = file_get_contents("index.html");
     $html = str_replace('---no---', $row['id'], $html);
     $html = str_replace('---time---', $row['date'], $html);
     $html = str_replace('---name---', $row['name'], $html);
     $html = str_replace('---email---', $row['email'], $html);
     $html = str_replace('---comment---', $row['comment'], $html);
     $html = str_replace('---homepage---', $row['homepage'], $html);
 
     $html_pieces = explode("<!--===entries===-->", $html);
     
     echo $html_pieces[1];
     
 }


?>

   















