<?php

    $hostname="localhost";
    $username="root";
    $password="";
    $dbname="db_employee";
    //สร้างการเชื่อมต่อ
    $conn = mysqli_connect ($hostname, $username, $password, $dbname);

    //ตรวจสอบการเชื่อมต่อ
    if($conn->connect_error){
        die("ไม่สามารถเชื่อมต่อฐานช้อมูลได้ ! " . $conn->connect_error);
    }
    // echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
?>