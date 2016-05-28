<?php
include 'db_connect.php';
session_start();
?>
<?php
$delete_id = $_POST['dp'];
echo $delete_id;
$query = "DELETE FROM Student WHERE Reg_number='$delete_id'";

if(mysqli_query($conn,$query))
{
	echo "<script>window.open('admin_welcome.php','_self')</script>";
}
else {
  echo "Coud not delete";
}
?>
