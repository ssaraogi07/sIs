<?php

session_start();
session_destroy();
include_once 'db_connect.php';

if(isset($_POST['submit'])){

	$target_dir = "/opt/lampp/htdocs/day1/uploads/";
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	//echo $target_file ;
	$z = $_FILES["photo"]["name"];
	//echo $z;
	move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
		$username = $_POST['uid'];
		$login = mysqli_query($conn,"SELECT * from Student where Userid = '$username' ");
		if($login->num_rows>0)
		{
      echo "<script>alert('Username already exists')</script>";
	  }
		else {
			$firstname=mysqli_real_escape_string($conn,$_POST['fname']);
    	$lastname=mysqli_real_escape_string($conn,$_POST['lname']);
			//$dob=mysqli_real_escape_string($conn,$_POST['dob']);
			$d=mysqli_real_escape_string($conn,$_POST['d']);
			$m=mysqli_real_escape_string($conn,$_POST['m']);
			$y=mysqli_real_escape_string($conn,$_POST['y']);
			$age=$y.' years '.$m.' months '.$d.' days ';
			$gender=mysqli_real_escape_string($conn,$_POST['radio']);
			//$hobbies='coding';
			$year=mysqli_real_escape_string($conn,$_POST['year']);
			$bcode=mysqli_real_escape_string($conn,$_POST['bcode']);
			$no=mysqli_real_escape_string($conn,$_POST['no']);
			$day=mysqli_real_escape_string($conn,$_POST['day']);
			$month=mysqli_real_escape_string($conn,$_POST['month']);
			$yr=mysqli_real_escape_string($conn,$_POST['dobyear']);
			$dob=$yr.'-'.$month.'-'.$day;
			$rollno=$year.'/'.$bcode.'/'.$no;
			$program=mysqli_real_escape_string($conn,$_POST['prog']);
			$regno=mysqli_real_escape_string($conn,$_POST['regn']);
			$semester=mysqli_real_escape_string($conn,$_POST['sem']);
			$dep=mysqli_real_escape_string($conn,$_POST['department']);
			//$rollno=mysqli_real_escape_string($conn,$_POST['roll']);
			$email=mysqli_real_escape_string($conn,$_POST['email']);
			$phone=mysqli_real_escape_string($conn,$_POST['mobile']);

			$password=mysqli_real_escape_string($conn,$_POST['pwd']);
    	$verified='no';

			$hobbies=implode(',', $_POST['hb']);
	 		if(isset($_POST['hb4']))
	 			$hobbies.=','.$_POST['others'];
			$sql="INSERT INTO Student VALUES
	('$firstname','$lastname','$regno','$phone','$dob','$age','$gender','$email','$hobbies','$program','$dep','$semester','$rollno','$username','$password','$verified','$z');";
	//$res=mysqli_query($conn,$sql);


			if ( $conn->query($sql) === TRUE ) {
				echo "Inserted successfully";

				redirect_to("index.php");
				exit();
				//$conn->query($sql);

			} else {
				echo "Error Reading table: " . $conn->error;
				//redirect_to("failure.php");
			}
		}
	$conn->close();
}
?>


<!DOCTYPE html>

	<head>
		<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
		<script type="text/javascript" src="js/filename.js"></script>
		<script src="jquery/external/jquery/jquery.js"></script>
		<script src="jquery/jquery-ui.min.js"></script>
		<script>function readURL(input) {
							 if (input.files && input.files[0]) {
									 var reader = new FileReader();

									 reader.onload = function (e) {
											 $('#blah').attr('src', e.target.result);
											 $('#blah').show();
									 }

									 reader.readAsDataURL(input.files[0]);
							 }
					 }
</script>

	</head>
	<style>
	ul {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
			float: right;
	    position: fixed;
	    top: 0;
	    width: 100%
	}

	li{
	  float: left;
	}

	li a {

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

	li :hover:not(.active) {
	    background-color: #555;
	    color:white;
	}
	</style>
	<ul>
           <li><a class="active" href="index.php">Home</a></li>
           <li><a href="about.php" target="_blank">About Us</a></li>
           <li><a href="contact.php">Contact</a></li>
 </ul>
	<body id="register">
		<img src="img/nitd_logo.png" class="logo">
		<h1 align="center" class="white" style="color:black">Student Registration Form</h1>
	<hr>
		<form name="myForm" id="myForm" method="post"  action="student_register.php" enctype="multipart/form-data" onsubmit="return validateForm()">
			<div class="container">
				<div>
					<h2 align="center" class="white" style="color:black">Personal Details</h2>

					<table>
						<tr>
							<td class="t1" align="center">
								<label>Full Name</label>
								<br>
								<input class="t3" type="text" name="fname" id="fname" style="width:18%;" placeholder="First Name" onblur="allLetter1()"/>
								<input class="t3" type="text" name="lname" id="lname" placeholder="Last Name" style="width:18%;" onblur="allLetter()"/> </td>
						</tr>
						<tr>
						<td align="left">
													<td><input style="margin-left:-223px;" id="photo" name="photo" type="file" accept="image/*" onchange="loadFile(event)"></td>
<img id="name" / width="150" height="150" style="margin-left=60px; float:right;">
													<script>
														var loadFile = function(event) {
															var output = document.getElementById('name');
															output.src = URL.createObjectURL(event.target.files[0]);
														};
													</script>



												</td>
											</tr>
						<tr>
							<td class="t1" id="radio" name="radio" onblur="validsex()" align="center">
								<label>Gender</label>
								<br>
								<input type="radio" class="bigRadio pad" name="radio" id="gender" value="male">
								<span class="black">Male</span>
								<input type="radio" class="bigRadio" name="radio" id="gender" value="female">
								<span class="white padbot">Female</span>
						</tr>
						<tr>
							<td class="t1" align="center" style="padding-right:397px;">
								<label style="margin-left:272px">Mobile No</label>
								<br>
								<input class="t2" type="text" name="mobile" id="mobile" placeholder="Mobile Number" style="margin-left:377px; width:45%;" onblur="valmob(mobile)"/> </td>
						</tr>
						<tr>
							<td class="t1" align="center">
								<div class="t2" >
									<label class="placeholderColor">Date Of Birth</label>
									<div class="cal-div">
										<select class="day year-month-day-width" id="day" name="day">
											<option value="Default">Day</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
										<select class="month year-month-day-width" id="month" name="month">
											<option value="Default">Month</option>
											<option value="1">Jan</option>
											<option value="2">Feb</option>
											<option value="3">Mar</option>
											<option value="4">Apr</option>
											<option value="5">May</option>
											<option value="6">Jun</option>
											<option value="7">Jul</option>
											<option value="8">Aug</option>
											<option value="9">Sep</option>
											<option value="10">Oct</option>
											<option value="11">Nov</option>
											<option value="12">Dec</option>
										</select>
										<select class="year year-month-day-width" name="dobyear" id="dobyear" onblur="generateAge()">
											<option value="Default">Year</option>
											<option value="2001">2001</option>
											<option value="2000">2000</option>
											<option value="1999">1999</option>
											<option value="1998">1998</option>
											<option value="1997">1997</option>
											<option value="1996">1996</option>
											<option value="1995">1995</option>
											<option value="1994">1994</option>
											<option value="1993">1993</option>
											<option value="1992">1992</option>
											<option value="1991">1991</option>
											<option value="1990">1990</option>
											<option value="1989">1989</option>
											<option value="1988">1988</option>
											<option value="1987">1987</option>
											<option value="1986">1986</option>
											<option value="1985">1985</option>
											<option value="1984">1984</option>
											<option value="1983">1983</option>
											<option value="1982">1982</option>
											<option value="1981">1981</option>
										</select>
									</div>
								</div>
						</tr>
						<tr>
							<td class="t1" align="center">
								<label>Age:</label>
								<br><label>Day</label>
								<input class="t3" type="text" id="d" name="d" style="width:8%;" placeholder="Days" />
								<label>Months</label>
								<input class="t3" type="text" id="m" name="m" style="width:8%;" placeholder="Months" />
								<label>Years</label>
								<input class="t3" type="text" id="y" name="y" style="width:8%;" placeholder="Years" />
</td></tr>
						<tr>
							<td align="center">
							<fieldset style="width: 380px; background-color:#ffffff; border-radius:26px" align="center">
							<label>Hobbies</label>
													<br>
                					<input type="checkbox" id="hb1" name="hb[]" value="Swimming">Swimming
                					<input type="checkbox" id="hb2" name="hb[]" value="Reading">Reading
                					<input type="checkbox" id="hb3" name="hb[]" value="Coding">Coding
                					<input type="checkbox" id="hb4"  name="hb4" onclick="hobbieschk()">Others
                					<input class="t3" type="text" id="others" name="others" style="display:none;" placeholder="Enter Other Hobbies">
							</fieldset>
							</td>
						</tr>


					</table>
				</div>

	     	<div>
					<h2 align="center" class="white" style="color:black">Academic details</h2>
					<table>
						<tr>
							<td class="t1" align="center">
								<SELECT name="prog" id="prog" class="t2" onblur="progselect()">
									<OPTION value="Default">Select Programme</OPTION>
									<OPTION value="B.Tech">B.Tech</OPTION>
									<OPTION value="M.Tech">M.Tech</OPTION>
									<OPTION value="PhD">PhD</OPTION>
							</td>
						</tr>
						<tr>
							<td class="t1" align="center">
								<SELECT name="department" id="department" class="t2" onchange="branchcode()" onblur="branchselect()">
									<OPTION value="Default">Select Department</OPTION>
									<OPTION value="ME">ME</OPTION>
									<OPTION value="EE">EE</OPTION>
									<OPTION value="CE">CE</OPTION>
									<OPTION value="CHE">CHE</OPTION>
									<OPTION value="MME">MME</OPTION>
									<OPTION value="ECE">ECE</OPTION>
									<OPTION value="CSE">CSE</OPTION>
									<OPTION value="IT">IT</OPTION>
							</td>
						</tr>
						<tr>
							<td class="t1" align="center">
								<SELECT name="sem" id="sem" class="t2" onblur="semselect()">
									<OPTION value="Default">Select Semester</OPTION>
									<OPTION value="First Semester">First Semester</OPTION>
									<OPTION value="Second Semester">Second Semester</OPTION>
									<OPTION value="Third Semester">Third Semester</OPTION>
									<OPTION value="Fourth Semester">Fourth Semester</OPTION>
									<OPTION value="Fifth Semester">Fifth Semester</OPTION>
									<OPTION value="Sixth Semester">Sixth Semester</OPTION>
									<OPTION value="Seventh Semester">Seventh Semester</OPTION>
									<OPTION value="Eighth Semester">Eighth Semester</OPTION>
							</td>
						</tr>
						<tr>
							<td class="t1" align="center">
								<label>Registration Number</label>
								<br>
								<input class="t2" name="regn"  id="r_no" type="number" onchange="year1()" placeholder="Registration Number" onblur="regselect()"/> </td>
						</tr>

						<tr>
							<td class="t1" align="center">
								<label>Roll No:</label>
								<br>
								<input class="t3" type="text" id="year" name="year" style="width:8%;" placeholder="Enter" />/
								<input class="t3" type="text" id="bcode" name="bcode" style="width:8%;" placeholder="Roll" />/
								<input class="t3" type="text" name="no" style="width:8%;" placeholder="Number" />
</td></tr>

<script>
function branchcode(){
  	     var x = document.myForm.department;
             var y = document.getElementById("bcode");

            y.value=x.value;
}
function year1(){
             var p = document.getElementById("r_no");
             var q = document.getElementById("year");
             q.value = p.value.substring(2,4);
}
</script>




		    </table>
		    </div>
		<div align="center">
					<h2 align="center" class="white" style="color:black">Login details</h2>
					<table>
						<tr>
							<td class="t1" align="center">
								<label>User Name</label>
								<br>
								<input class="t2" type="text"name="uid" id="uid" placeholder="User Name" onblur="userid_validation(this.value)"/>
							</td>
						</tr>
						<script type="text/javascript">

						function userid_validation(str)
						 {
							var index;
							var userid=document.myForm.uid;
							var userid_len = userid.value.length;
							if (userid_len == 0 || userid_len >= 10 || userid_len < 6)
								{
									alert("User Id should not be empty / length be between 6 to 10");
									userid.focus();
									return false;
								}
							document.getElementById("info").innerHTML=str;
							var xmlhttp = new XMLHttpRequest();
	        	xmlhttp.onreadystatechange = function() {
	            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	                document.getElementById("info").innerHTML = xmlhttp.responseText;
	            }
	        };
	        xmlhttp.open("GET", "username.php?q=" + str, true);
	        xmlhttp.send();
							/*for	(index = 0; index < jsArray.length; index++) {
								var n = str1.localeCompare(str2);
								if(n==0)
								{
									alert("User ID is already used. Please enter another one");
									userid.focus();
									return false;
								}
							}*/
							return true;
						 }
						</script>
						<tr>
						<td class="t1" align="center">
							<label>E-mail Id</label>
							<br>
							<input class="t2" type="text"placeholder="Email Address" name="email" id="email" onblur="ValidateEmail()"/></td>
						</tr>
						<tr>
							<td class="t1" align="center">
								<label>Password</label>
								<br>
								<input class="t2" type="password" placeholder="Enter Password" name="pwd" id="pwd" onblur="passwd_validation()"/>
							</td>
						</tr>
						<tr>
							<td class="t1" align="center">
								<label>Confirm Password</label>
								<br>
								<input class="t2" type="password" name="pwd1" id="pwd1" placeholder="Confirm password" onblur="passwordcheck()"/>
							</td>
						</tr>
<script>
function passwd_validation()
 {
	var passwd=document.myForm.pwd;
	var passwd_len = passwd.value.length;
	if (passwd_len == 0 ||passwd_len >= 10 || passwd_len < 6)
		{
			alert("Password should not be empty / length be between 6 to 10");
			passwd.focus();
			return false;
		}
   return true;
 };
function passwordcheck(){
var a = document.getElementById("pwd");
var b = document.getElementById("pwd1");
if(a.value!=b.value)
alert("password do not match")
};

</script>
					</table>
		</div>




		</form>
		<input type="submit" name="submit" align="center" value="Submit" class="formButt">
		<br>
		<br>
		</div>
	</body>

</html>
