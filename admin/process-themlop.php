<?php
    include('../mysqli_connect.php');
    $malop = $_POST['malop'];
    $mamon = $_POST['mamon'];
    $idnganh = $_POST['idnganh'];
    $namhoc = $_POST['namhoc'];
    $hocky = $_POST['hocky'];
    $idgiangvien = $_POST['idgiangvien'];
    if(isset($_POST['submit']) && $_POST['malop'] !=' ' && $_POST['mamon']!='' && $_POST['idnganh']!='' &&  $_POST['namhoc']!='')
    {
      // echo "ma la ".$idnganh;
      $query= "INSERT INTO lop(malop,mamonhoc,idnganh,namhoc,hocki,idgiangvien) VALUES('$malop','$mamon','$idnganh','$namhoc','$hocky','$idgiangvien')";
      if(mysqli_query($conn,$query)){
        header("location:admin_lop.php");
      }
    }
    else{
      
    }


    ?>