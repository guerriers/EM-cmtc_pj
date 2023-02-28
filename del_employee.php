<meta charset="UTF-8">
<?php
include("inc/config.inc.php");
$emp_id=$_GET['emp_id'];
$sql = "DELETE FROM `6239010038_employee` WHERE emp_id=$emp_id";
if ($conn->query($sql) === TRUE) {
    echo ("<script> alert('Record deleted successfully'); window.location = 'list_employee2.php';</script>");
} else {
    echo ("<script> alert('Error deleting record:'); window.location = 'list_employee2.php';</script>");
}
$conn->close();
?>

<?php
include("inc/config.inc.php");
$emp_id=$_GET['emp_id'];
$sql = "DELETE FROM `6239010038_employee` WHERE emp_id=$emp_id";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>