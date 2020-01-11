<?php  
          $idgvien= $_POST['idgvien'];
          $htgvien= $_POST['htgvien'];
          $tuoigvien= $_POST['tuoigvien'];
            if(isset($_POST['update']) && $_POST['idgvien']!=' ' && $_POST['htgvien']!=''&& $_POST['tuoigvien']!=''){
              include("../mysqli_connect.php");
              $sqludate = "UPDATE giangvien SET htgiangvien ='$htgvien',tuoi='$tuoigvien' where idgiangvien='$idgvien' ";
              if(mysqli_query($conn,$sqludate))
              {
                header('location:admin-giangvien.php');
              }
              
            }
          
?>
