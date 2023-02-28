<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
<?php
session_start();
include("inc/config.inc.php");

$username=$_POST['username'];
$password=$_POST['password'];


$sql = "SELECT * FROM `6239010038_login` WHERE User_n='".$username."' AND pass_w ='".$password."'";
$result = mysqli_query($conn, $sql);

if($result){
    $row = mysqli_fetch_array($result);
    $_SESSION["UserID"] = $row["UserID"];
    $_SESSION["Status"] = $row["Status"];
    $_SESSION["Name"] = $row["Name"];

    if($row["Status"] == "ADMIN"){
        // header("location:index2.php");
        echo ("<script> alert('เข้าสู่ระบบสำเร็จ User : $username '); window.location = 'index2.php';</script>");
} 
    if($row["Status"] == "USER"){
    // header("location:index2.php");
    echo ("<script> alert('เข้าสู่ระบบสำเร็จ User : $username '); window.location = 'index2.php';</script>");
} 
else {
    echo ("<script> alert('Username หรือ Password ไม่ถูกต้อง'); window.location = 'formlogin.php';</script>");
}

    //     echo "Username and Password Incorrect!";
// }else{
//     session_write_close();
// if($row["Status"] == "ADMIN"){
//     header("location:index2.php");
// }else{
//     header("location:formlogin.php");
// }
}
// mysqli_close();
?>
</body>
</html>