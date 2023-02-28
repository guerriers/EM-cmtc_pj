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
    <title>Project</title>
</head>

<body>

<?php
include("header2.php");
?>  
    <div class="container">
    <div class="box">
                <center>  
                <label for=""><h1>เพิ่มข้อมูลพนักงาน </h1></label>    
                </center><br>

         <form name="form1" action="insert_employee.php" method="POST">       
        <div class="row">
        <!-- <div class="col-md-2"></div> -->
            <div class="col-md-6">
                <label for="">Firstname</label><br>
                <input type="text" class="form-control" name="Fname" id="Fname" placeholder="Firstname" require>
            </div>
            <div class="col-md-6">
            <label for="">Lastname</label><br>
                <input type="text" class="form-control" name="Lname" id="Lname" placeholder="Lastname" require>
            </div>
        </div>
            
        <div class="row">
        <!-- <div class="col-md-2"></div> -->
            <div class="col-md-6">
            <label for="">Sex</label><br>
                <input type="radio" name="sex" id="sex" value="Male"> Male 
                <input type="radio" name="sex" id="sex" value="Female"> Female 
            </div>
            <div class="col-md-6">
            <label for="">Birthday</label><br>
                <input type="date" class="form-control" name="Date" id="Date" require>
            </div>
        </div>

        <div class="row">
        <!-- <div class="col-md-2"></div> -->
            <div class="col-md-6">
            <label for="">Position</label><br>
                <SELECT class="form-control" name="Position" id="Position" > 
                    <OPTION SELECTED VALUE="">-</OPTION>
                    <OPTION VALUE="Programmer">Programmer</OPTION>
                    <OPTION VALUE="Database system">Database system</OPTION>
                    <OPTION VALUE="Network system">Network system</OPTION>
                    <OPTION VALUE="IT Support">IT Support</OPTION>
                    <OPTION VALUE="Software engineer ">Software engineer</OPTION>
                </SELECT >
            </div>
            <div class="col-md-6">
            <label for="">Salary</label><br>
                <input type="number" class="form-control" name="Salary" id="Salary" placeholder="Salary" require>
                </div>
            </div>

        <div class="row">
            <!-- <div class="col-md-2"></div> -->
            <div class="col-md">
            <label for="">Email address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
              </div>
            
        </div> 

        <div class="row">
            <!-- <div class="col-md-2"></div> -->
        <div class="col-md-6">
                <label for="">Phone</label><br>
                <input type="text" class="form-control" name="Phone" id="Phone" placeholder="Phone" require>
            </div>
            <div class="col-md-6">
                <label for="">Mark</label><br>
                <input type="text" class="form-control" name="Mark" id="Mark" placeholder="Mark" require>
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