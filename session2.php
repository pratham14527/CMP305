<?php

?>
<html>
    <body>
        <?php
        session_start();
        echo "<br> br>current session is:".$_SESSION["user"];
        echo "<br><br> session id".session_id();

        if(!isset($_SESSION['c'])){
            $_SESSION['c'] =1;

        }else{
            $_SESSION['c']++;
        }
        echo ("<br><br> couter of session:".$_SESSION['c']);
        ?>