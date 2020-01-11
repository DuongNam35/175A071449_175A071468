<?php  
          $msv= $_POST['msv'];
          $hoten= $_POST['hoten'];
         
            if(isset($_POST['updatesv']) && $_POST['msv']!=' '&& $_POST['hoten']!=' '){
              include("../mysqli_connect.php");
              $sqludate = "UPDATE sinhvien SET hoten ='$hoten' where msv='$msv' ";
              if(mysqli_query($conn,$sqludate))
              {
                header('location:giangvien_qllop.php');
              }
              
            }
          
?>
