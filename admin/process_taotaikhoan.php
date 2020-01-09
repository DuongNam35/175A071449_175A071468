<?php
    include('../mysqli_connect.php');
   if(isset($_POST['submit']) && $_POST["email"] !='' && $_POST["password"]!='' && $_POST["repassword"]!=''&& $_POST["username"]!=''&&  $_POST["user"]!='')
   {
       $mail = $_POST["email"];
       $username =  $_POST["username"];
       $password =  $_POST["password"];
       $repassword =  $_POST["repassword"];
       $level = $_POST["user"];
       if($password != $repassword){
           header("location:taotaikhoan.php");
       }
    
       $passwordHash = password_hash($password, PASSWORD_DEFAULT); 
    //    $old = mysqli_query($conn,"SELECT * from nguoidung Where gmail ='$mail'");
    $queryinsert = "INSERT INTO nguoidung(tennguoidung,mknguoidung,gmail,capbac) Values('$username','$passwordHash','$mail','$level')";
    mysqli_query($conn,$queryinsert);
    echo " Bạn đã đăng ký thành công ";
    
      
      
    //    if($old){
    //     header("location:taotaikhoan.php");
    //        echo " tài khoản đã tồn tại";
    //    }
    //    else{
       
    //    }
       
   }
   else{
       header("location:taotaikhoan.php");
   }

?>