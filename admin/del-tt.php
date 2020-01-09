<?php
 include("../mysqli_connect.php");
 $idtt = $_GET['del'];
$sqldel="DELETE FROM bangtin WHERE id =$idtt";
if(mysqli_query($conn,$sqldel))
{
   header('location:admin_tintuc.php');
}

?>