<?php
include 'db_connect.php';
session_start();

 ?>
<html>
<head>
<title>Student Login</title>
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
<script></script>


<body id="register">
	<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="abt1.html" target="_blank">About Us</a></li>
				<li><a href="cont.html">Contact</a></li>
				</ul>

	 <h1 align="center" class="white" style="color:black">Student Login</h1>

		<form name="register" method="post">
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

			<!-- <table>
				<tr>
					<td class="t1" >
						<input class="t2" type="text" name="uname" style="width:20%; margin-left:25%;" placeholder="User Name" /></td>
					</tr>
					<tr>
						<td class="t1">
							<input class="t2" type="password" name="pswd" style="width:20%; margin-left:25%;" placeholder="Password"/></td>
					</tr>
				</table> -->
        <?php

          if(isset($_POST['submit']))
          {
            $username=$_POST['username'];
            $password=$_POST['password'];
            if($username!=''&&$password!='')
            {
                $query=mysqli_query($conn,"SELECT * FROM Student WHERE Userid='$username' and Password='$password'") or die(mysql_error());;
                if($query->num_rows>0)
                {
                    while($res=mysqli_fetch_array($query))
                    {
                        $_SESSION['username']=$res['Userid'];
                        $verified=$res['Verified'];
                        $_SESSION['verified']=$verified;
                        if(strcmp($verified,"no")==0)
                        {
                          echo "<script>alert('Pending User Approval !')</script>";
                        }
                        else if(strcmp($verified,"yes")==0)
                        {
                          $_SESSION['login']=1;
                          header('location:student_welcome.php');
                        }

                    }
                }
                else
                {
                    echo "<script>alert('Incorrect username or password!!!!!!!')</script>";
                }

            }
            else
            {
              echo "<script>alert('Fill all the fields!!!!!!!')</script>";
            }
        }
        ?>


</body>
</html>
