<?php
	function redirect_to($url)
	{
		header('Location: '.$url);
	}
	//ini_set('display_errors', l );
	//ini_set('display_startup_errors', l);
	//error_reporting(E_ALL);
			$servername = "127.0.0.1";
			$username = "root";
			$password = "root";
			$dbname = "mydb";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Could not connect to the database");
			// Check connection
			if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
