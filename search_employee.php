<html>
<head>
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
    <title>Login</title>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
include("header2.php");
include("inc/config.inc.php");

ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
    ?>

  <div class="wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="page-header clearfix">
            <h2 class="text-info pull-left">Employee Information</h2>
            <!-- <a href="addemployee.php" class="btn btn-info pull-right">Add New Employee</a> -->
          </div>
          </div>
<div class="ml-md-auto">
    <div class="page-header clearfix">
        <form class="form-inline my-2 my-lg-auto float-left" name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
        <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>" class="form-control mr-sm-2" placeholder="Search" >
        <input type="submit" value="Search" class="btn btn-info"></th>
        </form>
    </div>
</div>   
 
    
    <?php
    $sql = "SELECT * FROM `6239010038_employee` WHERE emp_name LIKE '%".$strKeyword."%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table class='table table-bordered table-striped'>";
        echo "<thead>";
          echo "<tr>";
            echo "<th> ID </th>";
            echo "<th> Firstname </th>";
            echo "<th> Lastname </th>";
            echo "<th> Sex </th>";
            echo "<th> Birthday </th>";
            echo "<th> Position </th>";
            echo "<th> Salary </th>";
            echo "<th> Phone </th>";
            echo "<th> Email </th>";
            echo "<th> Mark </th>";

          echo "</tr>";
        echo "</thead>";

        echo "<tbody>";
    while($row = $result->fetch_assoc()) {
          echo "<tr>";
            echo "<td>".$row['emp_id']."</td>";
            echo "<td>".$row['emp_name']."</td>";
            echo "<td>".$row['emp_lname']."</td>";
            echo "<td>".$row['emp_sex']."</td>";
            echo "<td>".$row['emp_birthday']."</td>";
            echo "<td>".$row['emp_position']."</td>";
            echo "<td>".$row['emp_salary']."</td>";
            echo "<td>".$row['emp_phone']."</td>";
            echo "<td>".$row['emp_email']."</td>";
            echo "<td>".$row['emp_mark']."</td>";
          echo "</tr>";
    }
    // href="addemployee.php">
    } else {
      echo "ไม่พบข้อมูล";
    }
        echo "</tbody>";
    $conn->close();
    ?>
      </table>
      </div>
    </div>
  </div>

<?php
include("footer.php");
?>
</body>
</html>