<?php
session_start();
if(!isset($_SESSION['login']))
{
	session_destroy();
	echo "<script>alert('You have been logged out. Login to continue.')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
include 'db_connect.php';
$update_id = $_SESSION['regnum'];
	$contact=$_POST['newvalue'];
	$query = "UPDATE Student SET Mobile_number='$contact' WHERE Reg_number='$update_id'";
if(mysqli_query($conn,$query))
{
	echo "<script>alert('Updated successfully')</script>";
	echo "<script>window.open('student_welcome.php','_self')</script>";

}
else {
  echo "Could Not Update";
}
?>
