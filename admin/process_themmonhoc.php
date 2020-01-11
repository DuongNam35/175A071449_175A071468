<?php
    include('../mysqli_connect.php');
    $idnganh = $_POST['mamon'];
    $tennganh = $_POST['tenmon'];
    $idgiangvien = $_POST['idgiangvien'];
    if(isset($_POST['submit']) && $_POST['mamon'] !='' && $_POST['tenmon']!=''&& $_POST['idgiangvien']!='')
    {
        
        $sqlinsert="INSERT INTO monhoc(mamonhoc,tenmonhoc,idgiangvien) VALUES('$idnganh','$tennganh','$idgiangvien')";
        if(mysqli_query($conn,$sqlinsert)){
            header("location:admin_monhoc.php");
        }
 
          
    }else{
        header("location:themlophoc.php");
        echo"kiểm tra lại ";
    }
?>