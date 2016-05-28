<?php
session_start();
session_destroy();
 ?>

<html>
<head>
<title> The First Page </title>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
<script></script>
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

</head>
<body id="register">
<br><br><br>
<img src="img/nitd_logo.png" class="logo">
  <div class="container" style="padding: 0px 0 0 0; margin: 0px; width: 100%">
  <div class="col-xs-12" style="text-align: centre; padding-right: 100px">
    <div class="col-xs-8">
        <h2 style="color: black; margin-left: 296px; font-weight: 600">NATIONAL INSTITUTE OF TECHNOLOGY DURGAPUR</h2>
    <h2 style="font-size:1.0em; color:black; margin-left: 366px">(An Institute of National Importance under  Government of India) </h2>
    <h2 style="font-size:1.0em; color:black; margin-left: 366px">Mahatma Gandhi Avenue, Durgapur 713209, West Bengal, INDIA </h2>
      </div>
    </div>
  </div>
<br><br>


    <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.php" target="_blank">About Us</a></li>
          <li><a href="contact.php">Contact</a></li>
          </ul>

   	<div class="container">

	<div class="box">

	 <h2 align="centre" style="color:black" class="white">Administrator Login</h2>

	 <a href="admin.php"><input type="submit" value="LOGIN" class="formButt" ></a>


	 </div>

	<div class="box">

            <h2 align="centre" style="color:black" class="white">Student Login</h2>
          <a href="student.php"><input type="submit" value="LOGIN" class="formButt"></a>
          <a href="student_register.php"><input type="submit" value="REGISTER" class="formButt"></a>
         </div>

       </div>

</body>

</html>
