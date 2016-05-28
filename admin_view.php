<?php
session_start();
if(!isset($_SESSION['login']))
{
	session_destroy();
	echo "<script>alert('You have been logged out. Login to continue.')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
 ?>
 <?php

 include 'db_connect.php';
 $update_id=$_POST['gtp'];
 $query=mysqli_query($conn,"SELECT * FROM Student WHERE Reg_number='$update_id'") or die(mysql_error());;
 if($query->num_rows>0)
 {
   $row=mysqli_fetch_array($query);

	 $regnum=$row['Reg_number'];
	 $fname= $row['First name'];
	 $lname=$row['Last name'];
	$mnumber=$row['Mobile_number'];
	$dob=$row['Birthday'];
	$age=$row['Age'];
	$gender=$row['Gender'];
	$email=$row['Email'];
	$prog=$row['Programme'];
	$dept=$row['Department'];
	$sem=$row['Semester'];
	$roll=$row['Roll'];
	$uname=$row['Userid'];
	$password=$row['Password'];
	$hobbies=$row['Hobby'];
	$image_name=$row['image_name'];
	$img_nm="uploads/".$image_name;
 }
 ?>

<html>

<head>

		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

		<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		-->
<script></script>

		<style>

			ul
			{
    list-style-type: none;
    margin: 0;
    padding: 0;

  				overflow: hidden;
		float: right;
    position: fixed;

 				 top: 0;
    width: 100%

			}


			li
			{

				 float: left;

			}


			li

 			{

    display:block;
    color: #000;
    text-align: center;

 				padding: 14px 16px;
    text-decoration: none;
}

			li .active {

      				 background-color: #4CAF50;
          color: white;
          float: center;
}


li :hover:not(.active)
				{
    background-color: #555;
    color:white;
}


h3 {
    color: maroon;
    margin-left: 40px;
}
body{
	background-image: url(img/it.jpg);
	background-size: 1400px 1200px;
}

	</style>
	</head>

<body >
  <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.php" target="_blank">About Us</a></li>
          <li><a href="contact.php">Contact</a></li>
          </ul>



	<br><br><br>


	<div align="right">

	<form name="" action="admin_signout.php">

<input type="submit" value="LOGOUT" style="width:8%;height:5%;" >

</form>
</div>




<div align="center">

<fieldset>


			<legend>
			<h2>Personal Information:</h2>
			</legend>
			<div align="right" >&nbsp&nbsp&nbsp&nbsp&nbsp
			<img src="<?php echo "$img_nm";?>" width="150" height="150">
		</div>

		<table border="0" cellpadding="0" cellspacing="2">
		<tr><th align ="left"> <h3>First Name:</h3>  </th>
<td  >
<?php echo  $fname;?>

 </td>
</tr>
<tr><th align ="left"> <h3>Last Name:</h3>  </th>
<td  >
<?php echo  $lname;?>
 </td>
</tr>
<tr><th align ="left"> <h3>Gender:</h3> </th>
<td  >
	<?php echo  $gender;?>
	 </td>
</tr>

<tr><th align ="left"><h3> Contact No:</h3> </th>
<td >
<?php echo  $mnumber;?>
	 </td>
</td>
</tr>

<tr><th align ="left"> <h3> Date of Birth </h3> </th>
<td  >
<?php echo  $dob;?>
</td>
</tr>

<tr><th align= "left"> <h3>Age </h3></th>
<td  >
<?php echo  $age;?>
</td>
</tr>
<tr><th align= "left"> <h3> Hobbies </h3></th>
<td  >
<?php echo  $hobbies;?>
</td>
</tr>

</table>

</div>
</fieldset>
<div align="center">
<fieldset>


			<legend>
			<h2>Registration Information:</h2>
			</legend>
<table border="0" cellpadding="0" cellspacing="2">

<tr><th align= "left"> <h3> Programme:  </h3></th>
<td >
<?php echo  $prog;?>
</td>
</tr>
<tr><th align= "left"> <h3> Department:  </h3></th>
<td  >
<?php echo  $dept;?>
</td>
</tr>
<tr><th align= "left"> <h3> Semester:  </h3></th>
<td  >
<?php echo  $sem;?>
</td>
</tr>
<tr><th align= "left"> <h3> Registration:  </h3></th>
<td  >
<?php echo  $regnum;?>
</td>
</tr>
<tr><th align= "left"> <h3> Roll No:  </h3></th>
<td  >
<?php echo  $roll;?>
</td>
</tr>
<tr><th align= "left"> <h3> Email:  </h3></th>
<td  >
<?php echo  $email;?>
</td>
</tr>
<tr><th align= "left"> <h3> Password:  </h3></th>
<td  >
<?php echo  $password;?>
</td>
</tr>
</table>

</fieldset>

	</div>

 <div class="t1" align="center">
 <form action="verify.php" method="post">
	  <input type="hidden" name="vf" id="vf" value="<?php echo $regnum; ?>">
    <input type="submit" name="submit" value="VERIFY" style="width:10%;height:100%;">

	 </form>

 </div>
</body>

</html>
