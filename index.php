<?php
    $name = $_POST['name'];
    $myfile = fopen("./users.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $name);
    fclose($myfile);
    header("location:./index.html");
?>