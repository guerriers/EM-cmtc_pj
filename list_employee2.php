<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>

<?php
  include("header2.php");
?>

  <!-- <div class="container-fluid">
  <table class="table table-active"> -->
  
  <div class="wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header clearfix">
            <h2 class="text-info pull-left">Employee Information</h2>
            <a href="addemployee.php" class="btn btn-info pull-right">Add New Employee</a>
          </div>
    
    <?php
    $sql = "SELECT * FROM `6239010038_employee`";
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
            echo "<th> Update </th>";
            echo "<th> Delete </th>"; 
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
            echo "<td><a href='frm_edit_employee.php?emp_id=". $row['emp_id']."' class='btn btn-warning'><i class='fas fa-user-edit'></i></a></td>";
            echo "<td><a href='del_employee.php?emp_id=". $row['emp_id']."' class='btn btn-danger'><i class='fas fa-trash'></i></a></td>";
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
  </div>

  <!-- ?php
    while($row = $result->fetch_assoc()) {
      echo "ID : " . $row["emp_id"]
        . "</br>Firstname : " . $row["emp_name"]
        . "</br>Lastname : " . $row["emp_lname"]

    }
    } else {
      echo "ไม่พบข้อมูล";
    }
    $conn->close();
  ?>  -->

  <!-- <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Firstname</th>
    </tr>
</thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Watchara</td>
    </tr>
  </tbody> -->

<?php
include("footer.php");
?>

</body>

</html>