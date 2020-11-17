<?php

    $con = mysqli_connect("localhost","root","!Gabi1234@#*","login");
    if($con->connect_errno){
        die('connect error : '.$con->connect_error);
      }
    session_start();
?>
