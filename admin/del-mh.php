<?php
 include("../mysqli_connect.php");
 $mamonhoc = $_GET['del'];

$sqldel="DELETE FROM monhoc WHERE mamonhoc ='$mamonhoc'";
if(mysqli_query($conn,$sqldel))
{
   header('location:admin_monhoc.php');
}

?>