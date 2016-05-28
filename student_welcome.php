<?php
include 'db_connect.php';
session_start();
if(!isset($_SESSION['login']))
{
	session_destroy();
	echo "<script>alert('You have been logged out. Login to continue.')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
//echo "welcome ".$_SESSION['username'];
//echo $_SESSION['verified'];
?>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

		<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		-->
<script type="text/javascript" src="js/filename.js"></script>

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

	<form name="" action="student_signout.php">

<input type="submit" value="LOGOUT" style="width:8%;height:5%;" >

</form>
</div>

 <?php
			$name=$_SESSION['username'];
      $query="select * from Student where Userid='$name'";
      $run=mysqli_query($conn,$query) or die(mysql_error());
      $row=mysqli_fetch_array($run);
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
        //echo $regnum." " .$fname." ".$lname;
        $_SESSION['fname']=$fname;
				$_SESSION['lname']=$lname;
				$_SESSION['regnum']=$regnum;
				$_SESSION['mnumber']=$mnumber;
				$_SESSION['dob']=$dob;
				$_SESSION['age']=$age;
				$_SESSION['gender']=$gender;
				$_SESSION['email']=$email;
				$_SESSION['prog']=$prog;
				$_SESSION['sem']=$sem;
				$_SESSION['roll']=$roll;
				$_SESSION['uname']=$uname;
				$_SESSION['dept']=$dept;
				$_SESSION['password']=$password;
				$_SESSION['hobbie']=$hobbies;
				      ?>
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
<?php echo  $_SESSION['fname'];?>
 </td>
</tr>
<tr><th align ="left"> <h3>Last Name:</h3>  </th>
<td  >
<?php echo  $_SESSION['lname'];?>
 </td>
</tr>
<tr><th align ="left"> <h3>Gender:</h3> </th>
<td  >
	<?php echo  $_SESSION['gender'];?>
	 </td>
</tr>

<tr><th align ="left"><h3> Contact No:</h3> </th>
<td >
<?php echo  $_SESSION['mnumber'];?>
	 </td>
</td>
<td> <th>
 <form action="student_edit.php" method="post">
			<input type="button" id="btn" value="EDIT" onclick="addTextbox(btn)">

		</form>

	 </th></td>
</tr>

<tr><th align ="left"> <h3> Date of Birth </h3> </th>
<td  >
<?php echo  $_SESSION['dob'];?>
</td>
</tr>

<tr><th align= "left"> <h3>Age </h3></th>
<td>
<?php echo  $_SESSION['age'];?>
</td>
</tr>
<tr><th align= "left"> <h3> Hobbies </h3></th>
<td  >
<?php echo  $_SESSION['hobbie'];?>
</td>
<td> <th>
 <form action="student_edit_hobby.php" method="post">
	 		<input type="button" id="btn" value="EDIT" onclick="addTextbox1(btn)">
		 </form>
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
<?php echo  $_SESSION['prog'];?>
</td>
</tr>
<tr><th align= "left"> <h3> Department:  </h3></th>
<td  >
<?php echo  $_SESSION['dept'];?>
</td>
</tr>
<tr><th align= "left"> <h3> Semester:  </h3></th>
<td  >
<?php echo  $_SESSION['sem'];?>
</td>
</tr>
<tr><th align= "left"> <h3> Registration:  </h3></th>
<td  >
<?php echo  $_SESSION['regnum'];?>
</td>
</tr>
<tr><th align= "left"> <h3> Roll No:  </h3></th>
<td  >
<?php echo  $_SESSION['roll'];?>
</td>
</tr>
<tr><th align= "left"> <h3> Email:  </h3></th>
<td  >
<?php echo  $_SESSION['email'];?>
</td>
</tr>
<tr><th align= "left"> <h3> Password:  </h3></th>
<td  >
<?php echo  $_SESSION['password'];?>
</td>
</tr>
</table>

</fieldset>


</div>

</body>
</html>
