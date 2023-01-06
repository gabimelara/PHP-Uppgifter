
<?php
   
    $html = file_get_contents('index.html');
    $randomNumber = rand(0, 1000000);

    $html = str_replace('---session-id---',$randomNumber, $html);
    echo $html;

 ?>

  

