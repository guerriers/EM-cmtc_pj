<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/add.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Update</title>
</head>

<body>

<?php
    include("header2.php");
    include("inc/config.inc.php");
    $emp_id=$_GET['emp_id']; //รับค่าGET
    $sql = "SELECT * FROM `6239010038_employee` WHERE emp_id='$emp_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

?>  
    <div class="container">
    <div class="box">
                <center>  
                <label for=""><h1>แก้ไขข้อมูลพนักงาน </h1></label>    
                </center><br>

         <form name="form1" action="update_employee.php" method="POST">       
        <div class="row">
        <!-- <div class="col-md-2"></div> -->
            <div class="col-md-6">
                <label for="">Firstname</label><br>
                <input type="hidden" class="form-control" name="txt_emp_id" id="txt_emp_id" placeholder="emp_id" value="<?php echo $row['emp_id'];?>">
                <input type="text" class="form-control" name="Fname" id="Fname" placeholder="Firstname" value="<?php echo $row['emp_name'];?>" require >
            </div>
            <div class="col-md-6">
            <label for="">Lastname</label><br>
                <input type="text" class="form-control" name="Lname" id="Lname" placeholder="Lastname" value="<?php echo $row['emp_lname'];?>" require>
            </div>
        </div>
            
        <div class="row">
        <!-- <div class="col-md-2"></div> -->
            <div class="col-md-6">
            <label for="">Sex</label><br>

            <?php
                if($row['emp_sex']=='Male'){
            ?>
                <div class="">
                <input type="radio" name="sex" id="sex" value="Male" checked> Male 
                <input type="radio" name="sex" id="sex" value="Female"> Female 
                </div>

            <?php
                }else{
            ?>
                <div class="">
                <input type="radio" name="sex" id="sex" value="Male" > Male 
                <input type="radio" name="sex" id="sex" value="Female" checked> Female 
                </div>
            <?php
                }
            ?>
            </div>
            <div class="col-md-6">
            <label for="">Birthday</label><br>
                <input type="date" class="form-control" name="Date" id="Date" value="<?php echo $row['emp_birthday'];?>" require>
            </div>
        </div>

        <div class="row">
        <!-- <div class="col-md-2"></div> -->
            <div class="col-md-6">
            <label for="">Position</label><br>
                <SELECT class="form-control" name="Position" id="Position" > 

    <?php    
        if($row['emp_position']=='Programmer') {
            echo "<OPTION value='1'>Programmer</OPTION>";
        }else if ($row['emp_position']=='Database system') {
            echo "<OPTION value='2'>Database system</OPTION>";
        }else if ($row['emp_position']=='Network system') {
            echo "<OPTION value='3'>Network system</OPTION>";
        }else if ($row['emp_position']=='IT Support') {
            echo "<OPTION value='4'>IT Support</OPTION>";
        }else if ($row['emp_position']=='Software engineer') {
            echo "<OPTION value='5'>Software engineer</OPTION>";
        }
    ?>
                    <OPTION value="">เลือกตำแหน่ง</OPTION>
                    <OPTION value="Programmer">Programmer</OPTION>
                    <OPTION value="Database system">Database system</OPTION>
                    <OPTION value="Network system">Network system</OPTION>
                    <OPTION value="IT Support">IT Support</OPTION>
                    <OPTION value="Software engineer">Software engineer</OPTION>
                </SELECT >
            </div>

            <div class="col-md-6">
            <label for="">Salary</label><br>
                <input type="number" class="form-control" name="Salary" id="Salary" placeholder="Salary" value="<?php echo $row['emp_salary'];?>" require>
                </div>
            </div>

        <div class="row">
            <!-- <div class="col-md-2"></div> -->
            <div class="col-md">
            <label for="">Email address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="<?php echo $row['emp_email'];?>">
              </div>
            
        </div> 

        <div class="row">
            <!-- <div class="col-md-2"></div> -->
        <div class="col-md-6">
                <label for="">Phone</label><br>
                <input type="text" class="form-control" name="Phone" id="Phone" placeholder="Phone" value="<?php echo $row['emp_phone'];?>" require>
            </div>
            <div class="col-md-6">
                <label for="">Mark</label><br>
                <input type="text" class="form-control" name="Mark" id="Mark" placeholder="Mark" value="<?php echo $row['emp_mark'];?>" require>
            </div>
          </div>

          <div class="row">
          <!-- <div class="col-md-2"></div> -->
          <div class="col-md">
    <label for="exampleFormControlFile1">Add Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div> </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 "><br><br>
                <center>
                    <input type="submit" class="btn btn-success" name="Save" id="Save" value="Save">
                    <input type="reset" class="btn btn-danger" name="Reset" id="Reset" value="Reset">
                </center>
            </div>
        </div>
    </form>
    </div></div>
<?php
include("footer.php");
?>

</body>
</html>