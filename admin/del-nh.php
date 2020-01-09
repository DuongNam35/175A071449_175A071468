<?php
 include("../mysqli_connect.php");
 $idgvdel = $_GET['del'];
 echo $idgvdel;
$sqldel="DELETE FROM nganhhoc WHERE idnganh ='$idgvdel'";
if(mysqli_query($conn,$sqldel))
{
   header('location:admin-nganhhoc.php');
}

?>