<?php
 include("../mysqli_connect.php");
 $idnhdel = $_GET['del'];

$sqldel="DELETE FROM giangvien WHERE idgiangvien ='$idnhdel'";
if(mysqli_query($conn,$sqldel))
{
   header('location:admin-giangvien.php');
}

?>
