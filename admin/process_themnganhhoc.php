<?php
    include('../mysqli_connect.php');
    $idnganh = $_POST['idnganh'];
    $tennganh = $_POST['tennganh'];
    if(isset($_POST['submit']) && $_POST['idnganh'] !=' ' && $_POST['tennganh']!='')
    {
        
        $sqlinsert="INSERT INTO nganhhoc(idnganh,tennganh) VALUES('$idnganh','$tennganh')";
        mysqli_query($conn,$sqlinsert);
        echo "bạn đã thêm thành công"; 
        header("location:admin-nganhhoc.php");  
    }else{
        header("location:themnh.php");
        echo"kiểm tra lại ";
    }
?>