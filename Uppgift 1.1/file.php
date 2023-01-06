<?php
header('Content-type: text/plain');


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


echo "$visits people has visit this website!";

?>