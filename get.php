<?php

include 'db_connect.php';
$update_id = addslashes($_GET['id']);
$update_id=20130506;
$query=mysqli_query($conn,"SELECT * FROM Student WHERE Reg_number='$update_id'") or die(mysql_error());;
if($query->num_rows>0)
{
  $res=mysqli_fetch_array($query);

        $image=$res['image'];
        header("content-type: image/jpeg");
        echo "id received is ".$update_id;
        echo $image;
}
?>
