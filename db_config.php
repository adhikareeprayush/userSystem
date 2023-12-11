<?php
    // Database connection parameters
    $hname = "localhost"; // Hostname or IP address of the database server
    $uname = "root";      // Database username
    $password = "";       // Database password

    $db_name = "php_projects"; // Name of the database

    // Establishing a connection to the database
    $conn = mysqli_connect($hname, $uname, $password, $db_name);

    // Check if the connection was successful
    if(!$conn){
        echo "Connection Failed"; // Display an error message if the connection fails
    }
?>
