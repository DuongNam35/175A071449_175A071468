<?php

function themdiem($masv,$D1,$TS1,$D2,$TS2,$D3,$TS3,$D4,$TS4,$tong){
    if($D1 !=' ' && $TS1 !=' '){
        $sql = "INSERT INTO diemtp(msv,diem,trongso) VALUES('$masv','$D1','$TS1')";
        mysqli_query($conn,$sql);
    }
    if($D2 !=' ' && $TS2 !=' '){
        $sql = "INSERT INTO diemtp(msv,diem,trongso) VALUES('$masv','$D2','$TS2')";
        mysqli_query($conn,$sql);
    }
    if($D3 !=' ' && $TS3 !=' '){
        $sql = "INSERT INTO diemtp(msv,diem,trongso) VALUES('$masv','$D3','$TS3')";
        mysqli_query($conn,$sql);
    }
    if($D4 !=' ' && $TS4 !=' '){
        $sql = "INSERT INTO diemtp(msv,diem,trongso) VALUES('$masv','$D4','$TS4')";
        mysqli_query($conn,$sql);
    }
    if($tong !=' '){
        $sql = "INSERT INTO tongdiem(msv,tongdiem) VALUES('$masv',$tong')";
        mysqli_query($conn,$sql);
    }
    header("location:giangvien_qldiem.php");
}





?>