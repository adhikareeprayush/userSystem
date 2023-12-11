<?php
    //database connection
    $hname = "localhost";
    $uname = "root";
    $password = "";

    $db_name = "php_projects";

    $conn = mysqli_connect($hname, $uname, $password, $db_name);

    if(!$conn){
        echo "Connection Failed";
    }


?>