<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Project</title>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>


<?php
  include("header2.php");
?>

<?php
  include("inc/config.inc.php");
  $Fname = $_POST['Fname'];
  $Lname = $_POST['Lname'];
  $sex = $_POST['sex'];
  $Date = $_POST['Date'];
  $Position = $_POST['Position'];
  $Salary = $_POST['Salary'];
  $email = $_POST['email'];
  $Phone = $_POST['Phone'];
  $Mark = $_POST['Mark'];

    echo "ชื่อ : ",$Fname,"<br>";
    echo "นามสกุล : ",$Lname,"<br>";
    echo "เพศ : ",$sex,"<br>";
    echo "วันเกิด : ",$Date,"<br>";
    echo "ตำแหน่ง : ",$Position,"<br>";
    echo "เงินเดือน : ",$Salary,"<br>";
    echo "อีเมล : ",$email,"<br>";
    echo "เบอร์โทรศัพท์ : ",$Phone,"<br>";
    echo "รายละเอียด : ",$Mark,"<br>";

    $sql = "INSERT INTO `6239010038_employee` (emp_id, emp_name, emp_lname, emp_sex, emp_birthday, emp_position, emp_salary, emp_phone, emp_email, emp_mark) 
          value ('', '$Fname', '$Lname', '$sex', '$Date', '$Position', '$Salary', '$Phone', '$email', '$Mark')"; 
    

    if($conn ->query($sql)== TRUE)
    {
    //       echo ("<script> alert('ส่งข้อมูลไปเก็บยังฐานข้อมูลเรียบร้อย'); window.location = 'index.php';</script>");
    }else{
    //   echo ("<script> alert('ไม่สามารถส่งข้อมูลไปเก็บยังฐานข้อมูลได้'); window.location = 'addemployee.php';</script>");
    }
    $conn ->close(); 
    

?>

  <script>
  Swal.fire({
  text: "ต้องการส่งข้อมูลไปเก็บยังฐานข้อมูลหรือไม่",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'ใช่',
  cancelButtonText: 'ยกเลิก'
})
.then((result) => {
  if (result.value) {
    swal("ส่งข้อมูลไปเก็บยังฐานข้อมูลเรียบร้อย")
    setTimeout(() => {window.location ='list_employee2.php'}, 2000)
    
  }else if (
    result.dismiss === Swal.DismissReason.cancel)
    window.location = 'addemployee.php'
})
   </script>

<?php
include("footer.php");
?>

</body>
</html>