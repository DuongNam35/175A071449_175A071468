<?php
 include("../mysqli_connect.php");
$lop = $_POST['lop'];
$masv = $_POST['masv'];
if(isset($_POST['submit']) &&  $_POST['lop']!=' ' &&  $_POST['masv']){
  $sqlin = "INSERT INTO lophoc(malop,msv) VALUES('$lop','$masv')";
  if(mysqli_query($conn,$sqlin)){
   header("location:themsv.php");
  }
}

?>