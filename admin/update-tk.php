<?php  
          $idtk= $_POST['idtk'];
          $tentk= $_POST['tentk'];
          $gamiltk= $_POST['gamiltk'];
          $captk= $_POST['captk'];
          $matctk= $_POST['matctk'];
         
            if(isset($_POST['updatetk']) && $_POST['idtk']!=' '&& $_POST['tentk']!=' '&& $_POST['gamiltk']!=' '){
              include("../mysqli_connect.php");
              $sqludate = "UPDATE nguoidung SET tennguoidung ='$tentk',gmail ='$gamiltk',capbac=$captk,matruycap='$matctk' where id=$idtk ";
              if(mysqli_query($conn,$sqludate))
              {
                header('location:admin_taikhoan.php');
              }
              
            }
          
?>
