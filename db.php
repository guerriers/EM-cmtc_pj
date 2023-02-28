<?php

    $con = mysqli_connect("localhost", "root", "", "db_employee");

    //เช็คการเชื่อมต่อ
    if (mysqli_connect_error()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>