<?php

    $username="root";
    $password="";
    $server="localhost";
    $db="online_poll";

    $con = mysqli_connect($server,$username,$password,$db);
    if(!$con){
        die("your connection is not successfully done".mysqli_connect_error());
    }
    // echo "Successfull";


?>