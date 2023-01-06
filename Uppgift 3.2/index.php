<?php


$html = file_get_contents("index.html");
$html_pieces = explode("<!--===xxx===-->", $html,3);

$indicesServer = array(
'PHP_SELF',
'argv',
'argc',
'GATEWAY_INTERFACE',
'SERVER_ADDR',
'SERVER_NAME',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL',
'REQUEST_METHOD',
'REQUEST_TIME',
'REQUEST_TIME_FLOAT',
'QUERY_STRING',
'DOCUMENT_ROOT',
'HTTP_ACCEPT',
'HTTP_ACCEPT_CHARSET',
'HTTP_ACCEPT_ENCODING',
'HTTP_ACCEPT_LANGUAGE',
'HTTP_CONNECTION',
'HTTP_HOST',
'HTTP_REFERER',
'HTTP_USER_AGENT',
'HTTPS',
'REMOTE_ADDR',
'REMOTE_HOST',
'REMOTE_PORT',
'REMOTE_USER',
'REQUEST_URI',
'REDIRECT_REMOTE_USER',
'SCRIPT_FILENAME',
'SERVER_ADMIN',
'SERVER_PORT',
'SERVER_SIGNATURE',
'PATH_TRANSLATED',
'SCRIPT_NAME',
'PHP_AUTH_DIGEST',
'PHP_AUTH_USER',
'PHP_AUTH_PW',
'AUTH_TYPE',
'PATH_INFO',
'ORIG_PATH_INFO') ;


echo $html_pieces[0];
foreach ($indicesServer as $arg) {
    if (isset($_SERVER[$arg])) {
     
        echo str_replace(
            array("---name---","---value---"),
            array("$arg", "$_SERVER[$arg]"),
            nl2br ("\n").$html_pieces[1].nl2br ("\n")
        );

    }else {
       
        echo $html_pieces[2];
        
    }
 
}























 

 



 
 

 
 
 




