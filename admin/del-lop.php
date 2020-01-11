<?php
 include("../mysqli_connect.php");
 $malop = $_GET['del'];

$sqldel="DELETE FROM lop WHERE malop ='$malop'";
if(mysqli_query($conn,$sqldel))
{
   header('location:admin_lop.php');
}

?>
