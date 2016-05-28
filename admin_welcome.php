<?php
include_once 'db_connect.php';
session_start();
if(!isset($_SESSION['login']))
{
	session_destroy();
	echo "<script>alert('You have been logged out. Login to continue.')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}

 ?>
<html>
<head>
	<title>
	    STUDENT DETAILS
	</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
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
	background-size: 1400px 800px;
}
	</style>

</head>

<body>
<ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.php" target="_blank">About Us</a></li>
          <li><a href="contact.php">Contact</a></li>
          </ul>
      <br><br><br
<div align="right">
<form action="student_register.php">
    <input type="submit" value="ADD NEW STUDENT">
  </form>
</div>
  <div align="right">
  <form action="admin_signout.php">
		<input type="submit" value="SIGNOUT">
	</form>
  </div>

  <?php
      mysqli_select_db($conn,"mydb") or die( 'Error'. mysql_error() );
      $query="select * from Student where Verified='no';";
      $run=mysqli_query($conn,$query) or die(mysql_error());
      while($row=mysqli_fetch_array($run))
      {
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
        //echo $regnum." " .$fname." ".$lname;

				      ?>

		<div align="center">
		<fieldset>
		<legend><h2>STUDENT INFORMATION :</h2></legend>

		<table border="0" align="centre" style="border-radius: 0%; margin-left: 0px;" width="50%" cellpadding="10">
		<tr>
		<td><h3>Registration No:</h3> <th><?php echo  $regnum;?></th></td>



		<td><h3>First Name:</h3> <th><?php echo  $fname;?></th></td>

		<td><h3>Roll No:</h3> <th><?php echo  $roll;?></th></td>

		<td> <th>
		 <form action="admin_view.php" method="post">
			 			<input type="hidden" name="gtp" id="gtp" value="<?php echo $regnum; ?>">
          <input type="submit" value="GO TO PROFILE">

        </form>

		   </th></td>
		   <td> <th>
		 <form action="delete.php" method="post">
			 		<input type="hidden" name="dp" id="dp" value="<?php echo $regnum; ?>">
          <input type="submit" value="DELETE PROFILE">
        </form>

		   </th></td>


		</tr>


		</table>
		</fieldset>
		</div>

				</body>
				</html>
      <?php
      }
      ?>
			<?php
					mysqli_select_db($conn,"mydb") or die( 'Error'. mysql_error() );
					$query="select * from Student where Verified='yes';";
					$run=mysqli_query($conn,$query) or die(mysql_error());
					while($row=mysqli_fetch_array($run))
					{
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
						//echo $regnum." " .$fname." ".$lname;

									?>

				<div align="center">
				<fieldset>
				<legend><h2>STUDENT INFORMATION (VERIFIED):</h2></legend>

				<table border="0" align="centre" style="border-radius: 0%; margin-left: 0px;" width="50%" cellpadding="10">
				<tr>
				<td><h3>Registration No:</h3> <th><?php echo  $regnum;?></th></td>



				<td><h3>First Name:</h3> <th><?php echo  $fname;?></th></td>

				<td><h3>Roll No:</h3> <th><?php echo  $roll;?></th></td>

				<td> <th>
				 <form action="admin_view.php" method="post">
								<input type="hidden" name="gtp" id="gtp" value="<?php echo $regnum; ?>">
							<input type="submit" value="GO TO PROFILE">

						</form>

					 </th></td>
					 <td> <th>
				 <form action="delete.php" method="post">
							<input type="hidden" name="dp" id="dp" value="<?php echo $regnum; ?>">
							<input type="submit" value="DELETE PROFILE">
						</form>

					 </th></td>


				</tr>


				</table>
				</fieldset>
				</div>

						</body>
						</html>
					<?php
					}
					?>
