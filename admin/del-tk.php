<?php
 include("../mysqli_connect.php");
 $idnddel = $_GET['del'];
$sqldel="DELETE FROM nguoidung WHERE id ='$idnddel'";
if(mysqli_query($conn,$sqldel))
{
   header('location:admin_taikhoan.php');
}

?>