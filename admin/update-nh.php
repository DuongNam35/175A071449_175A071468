<?php  
          $idnh= $_POST['idnh'];
          $tennh= $_POST['tennh'];
            if(isset($_POST['updatenh']) && $_POST['idnh']!=' ' && $_POST['tennh']!=''){
              include("../mysqli_connect.php");
              $sqludate = "UPDATE nganhhoc SET tennganh ='$tennh' where idnganh='$idnh' ";
              if(mysqli_query($conn,$sqludate))
              {
                header('location:admin-nganhhoc.php');
              }
              
            }
          
?>
