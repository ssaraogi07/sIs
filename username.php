<?php

include_once 'db_connect.php';

$q = ($_GET['q']);
$sql="SELECT * FROM Student WHERE Userid = '$q'";
$result = mysqli_query($conn,$sql);
if($result->num_rows > 0)
  echo "<script>alert('username available')</script>";
else
  echo "<script>alert('$q username not available .Please try a different one')</script>";

$conn->close();

?>
echo "<script>alert('Incorrect Username/Password. Please try again !')</script>";
