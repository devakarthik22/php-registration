<?php 
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname = "details_db";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
        echo"connection failed";
    else
        echo"connected successfully";
?>