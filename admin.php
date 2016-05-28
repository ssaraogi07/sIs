<?php
include 'db_connect.php';
session_start();
?>
<?php
if(isset($_POST['submit']))
{

  $username = $_POST['username'];
  $password = $_POST['password'];
  if($username!=''&&$password!='')
  {
      $query=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
      if($query->num_rows > 0)
      {
        $_SESSION['username'] = $username;
        $_SESSION['login']=1;
        header('location: admin_welcome.php');
      }
      else{
        echo "<script>alert('Incorrect Username/Password. Please try again !')</script>";
      }
  }
  else{
      echo "<script>alert('All fields required')</script>";
  }
  }
?>
<html>
<head>
<title>Admin login </title>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
		float: right;
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
</head>

<body id="register">
	<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="abt1.html" target="_blank">About Us</a></li>
				<li><a href="cont.html">Contact</a></li>
				</ul>

	 <h1 align="center" class="white" style="color:black">Administrator Login</h1>

		<form name="register" method="post" >
			<div class="container">
				<div align="center" style="padding-bottom:10px;">
					<input class="t2" type="text" name="username" style="width:30%;" placeholder="User Name" />
				</div>
				<div align="center" style="padding-bottom:10px;">
					<input class="t2" type="password" name="password" style="width:30%;" placeholder="Password"/>
				</div>
			<div align="center" >
				<input type="submit" name="submit" value="LOGIN"  style="width:20%;height:45px;" >
			</div>
		</div>
		</form>

 </body>
</html>
