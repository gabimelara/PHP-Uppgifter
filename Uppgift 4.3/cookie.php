<?php

session_start();
$id = session_id();
$old_sessionid = session_id();
session_regenerate_id();
$new_sessionid = session_id();

$html = file_get_contents('index.html');
$html = str_replace('---session-id---', session_id(), $html); 
echo $html; 

?>