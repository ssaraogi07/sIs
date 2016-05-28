<?php

session_start();
session_destroy();
include_once 'db_connect.php';


if(isset($_POST['submit'])){

    $username = $_POST['uid'];
    $login = mysqli_query($conn,"Select * from student where username = '$username' ");
    if(mysqli_num_rows($login)>0)
    {
      echo "<script>alert('Username already exists')</script>";
    }
		echo "this is the username ".$username;
		echo "<script>alert('Control comes here 1 ')";
		mysqli_select_db($conn,"mydb") or die( 'Error'. mysql_error() );
		$query="select * from Student;";
		echo "<script>alert('Control comes here 2 ')";
		$run=mysqli_query($conn,$query) or die(mysql_error());
		while($row=mysqli_fetch_array($run))
		{
			$uname=$row['Userid'];
		echo "<script>alert('Control comes here 3 ')";
		if(strcmp($username,$uname)==0)
		{
			echo "<script>alert('Username already exists !')</script>";
			echo "<script>window.open('student_register.php','_self')</script>";
		}
		}
    redirect_to("student_register.php");

  }
