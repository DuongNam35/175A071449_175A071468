<?php
include('../mysqli_connect.php');
if(isset($_POST['submit']) && $_POST["email"] !='' && $_POST["password"]!=''&&  $_POST["user"]!='')
{
    $mail = $_POST["email"];
    $pass = $_POST["password"];
    $level = $_POST["user"];
    
    $mail = strip_tags($mail);
    $mail = addslashes($mail);
    $pass = strip_tags($pass);
    $pass = addslashes($pass);
    if(!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
    $error[] = "Invalid email format";
    } 
    if(empty($error))
    {
        $sqltk = "SELECT * FROM nguoidung WHERE gmail='$mail'";
        $taikhoan = mysqli_query($conn,$sqltk);
        if(mysqli_num_rows($taikhoan)>0)
        {
            while($row = mysqli_fetch_assoc($taikhoan)) 
            {
                $validPassword = password_verify($pass, $row['mknguoidung']);
                if ($validPassword) 
                {
                    if(($row['capbac'])==1)
                    {
                        header("location: admin.php");
                    }
                    else{
                        header("location: giangvien.php");
                    }
                }
            }
             
        }
    }else
    {
        echo "không tồn tài khoản này";
    }
}
mysqli_close($conn);
?>