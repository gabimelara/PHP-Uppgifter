<?php

if (!file_exists("visitorCounter.txt")) {
    $file = fopen("visitorCounter.txt", "w");
 
    if (flock($file, LOCK_EX)) {
        fwrite($file, "0");
      
        flock($file, LOCK_UN);
    } else {
        echo "Error locking file!";
    }
    fclose($file);
}


$file = fopen("visitorCounter.txt", "r");


if (flock($file, LOCK_EX)) {
    $visits = fread($file, filesize("visitorCounter.txt"));
    $visits++;
    $file = fopen("visitorCounter.txt", "w");
    fwrite($file, $visits);
  
    flock($file, LOCK_UN);
} else {
    echo "Error locking file!";
}
fclose($file);

$html = file_get_contents('index.html');
$html = str_replace('---$hits---', $visits, $html);
echo $html;

?>