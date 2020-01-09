<?php  
          $idtt= $_POST['idtt'];
          $tieude= $_POST['tieude'];
          $ndung= $_POST['ndung'];
          $tloai= $_POST['tloai'];
            if(isset($_POST['updatett']) && $_POST['idtt']!=' ' && $_POST['tieude']!=''&& $_POST['ndung']!='' && $_POST['tloai']!=''){
              include("../mysqli_connect.php");
              $sqludate = "UPDATE bangtin SET tieude ='$tieude',noidung='$ndung',theloai ='$tloai' where id='$idtt' ";
              if(mysqli_query($conn,$sqludate))
              {
                header('location:admin_tintuc.php');
              }
              
            }
          
?>