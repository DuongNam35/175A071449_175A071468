<?php
 include("../mysqli_connect.php");
 $idnddel = $_GET['del'];
$sqldel="DELETE FROM lophoc WHERE msv ='$idnddel'";
if(mysqli_query($conn,$sqldel))
{
   header('location:giangvien_qllop.php');
}

?>