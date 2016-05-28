<?php
include 'db_connect.php';
session_start();
?>
<?php
$update_id = $_POST['vf'];
echo $update_id;
$query = "UPDATE Student SET Verified='yes' WHERE Reg_number='$update_id'";

if(mysqli_query($conn,$query))
{
	echo "<script>window.open('admin_welcome.php','_self')</script>";
}
else {
  echo "Could not update";
}
?>
