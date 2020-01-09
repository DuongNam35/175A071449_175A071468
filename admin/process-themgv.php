
<?php
    include('../mysqli_connect.php');
    $idgv = $_POST['idgiangvien'];
    $tengv = $_POST['tengiangvien'];
    $tuoi = $_POST['tuoi'];
    if(isset($_POST['submit']) && $_POST['idgiangvien'] !=' ' && $_POST['tengiangvien']!='' && $_POST['tuoi']!='')
    {
      $query= "INSERT INTO giangvien(idgiangvien,htgiangvien,tuoi) VALUES('$idgv','$tengv','$tuoi')";
     if( mysqli_query($conn,$query)){
      header('location:admin-giangvien.php');
     }
      
    }
    else{
      header('location:themgv.php');
    }


    ?>