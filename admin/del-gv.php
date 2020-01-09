<?php
 include("../mysqli_connect.php");
 $idnhdel = $_GET['del'];

$sqldel="DELETE FROM nganhhoc WHERE idnganh ='$idnhdel'";
if(mysqli_query($conn,$sqldel))
{
   header('location:admin-nganhhoc.php');
}

?>
