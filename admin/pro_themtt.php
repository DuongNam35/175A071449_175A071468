<?php
include("../mysqli_connect.php");
  $tde = $_POST['tieude'];
  $noidung = $_POST['noidung'];
  $theloai = $_POST['theloai'];
  if(isset($_POST['submittt']) && $_POST['tieude']!=' ' && $_POST['noidung']!=''&& $_POST['theloai']!='')
  {
    $sql ="INSERT into bangtin(tieude,noidung,theloai) Values('$tde','$noidung','$theloai')";
    if(mysqli_query($conn,$sql)){
        header('location:admin_tintuc.php');
    }else{
        // header('location:admin_tintuc.php');
        echo "lỗi";
    }
  }

?>