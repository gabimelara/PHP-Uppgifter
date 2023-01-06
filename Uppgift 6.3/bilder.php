<?php
 $conn = mysqli_connect("localhost","usr_21567537","567537","db_21567537");


if(isset($_GET['id'])) {
    $sql = "SELECT bild FROM bilder WHERE id=" . $_GET['id'];
    $result = mysqli_query($conn, $sql) or die("Error" . mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    header("Content-type: " . $row["mime"]);
    echo $row["bild"];
}
mysqli_close($conn);


?>