<?php
        include("../mysqli_connect.php");
        $ma = $_POST['msv'];
        $d1 = $_POST['diem1'];$ts1 = $_POST['trongso1'];
        $d2 = $_POST['diem2'];$ts2 = $_POST['trongso2'];
        $d3 = $_POST['diem3'];$ts3 = $_POST['trongso3'];
        $d4 = $_POST['diem4'];$ts4 = $_POST['trongso4'];
        $tong = $_POST['tongdiem'];
        if(isset($_POST['update'])){
            
            $sqlselect1 = "SELECT * FROM diemtp WHERE msv='$ma'";
            $result = mysqli_query($conn,$sqlselect1);
            if(mysqli_num_rows($result)>0){
                
                 $sqltp = "DELETE FROM diemtp Where msv='$ma'";
                 mysqli_query($conn,$sqltp);
                   
                
                  $sqlselect2 = "SELECT * FROM tongdiem WHERE msv='$ma'";
                 $result1 = mysqli_query($conn,$sqlselect2);
                 if(mysqli_num_rows($result1)>0){
                    $sqltong = "DELETE FROM tongdiem Where msv='$ma'";
                    mysqli_query($conn,$sqltong);
                if($d1 !=' ' && $ts1!=' '){
                $sql = "INSERT INTO diemtp(msv,diem,trongso) VALUES('$ma',$d1,$td1)";
                mysqli_query($conn,$sql);
                }
                if($d2 !=' ' && $ts2!=' '){
                    $sql = "INSERT INTO diemtp(msv,diem,trongso) VALUES('$ma',$d2,$ts2)";
                    mysqli_query($conn,$sql);
                }
                if($d3 !=' ' && $ts3!=' '){
                    $sql = "INSERT INTO diemtp(msv,diem,trongso) VALUES('$ma',$d3,$ts3)";
                    mysqli_query($conn,$sql);
                }
                if($d4 !=' ' && $ts4!=' '){
                    $sql = "INSERT INTO diemtp(msv,diem,trongso) VALUES('$ma',$d4,$ts4)";
                    mysqli_query($conn,$sql);
                }
                if($tong !=' '){
                    $sql = "INSERT INTO tongdiem(msv,tongdiem) VALUES('$ma',$tong)";
                    mysqli_query($conn,$sql);
                }
                header('location:giangvien_qldiem.php');
                 
                
                
            }
        }
        else
        {
            
            if($d1 !=' ' && $ts1 !=' '){
                $sql = "INSERT INTO diemtp(msv,diem,trongso) VALUES('$ma',$d1,$ts1)";
                mysqli_query($conn,$sql);
            }
            if($d2 !=' ' && $ts2 !=' '){
                $sql = "INSERT INTO diemtp(msv,diem,trongso) VALUES('$ma',$d2,$ts2)";
                mysqli_query($conn,$sql);
            }
            if($d3 !=' ' && $ts3 !=' '){
                $sql = "INSERT INTO diemtp(msv,diem,trongso) VALUES('$ma',$d3,$ts3)";
                mysqli_query($conn,$sql);
            }
            if($d4 !=' ' && $ts4 !=' '){
                $sql = "INSERT INTO diemtp(msv,diem,trongso) VALUES('$ma',$d4,$ts4)";
                mysqli_query($conn,$sql);
            }
            if($tong !=' '){
                $sql = "INSERT INTO tongdiem(msv,tongdiem) VALUES('$ma',$tong)";
                mysqli_query($conn,$sql);
            }
            header('location:giangvien_qldiem.php');
        }
      }
    
?>


