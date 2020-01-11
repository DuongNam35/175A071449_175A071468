<?php

include("../mysqli_connect.php");
$sql = "SELECT sinhvien.msv, sinhvien.hoten from lophoc,sinhvien where (lophoc.msv=sinhvien.msv) and(lophoc.malop='59TH2')";
mysqli_set_charset($conn,"utf8");
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  
  while($row = mysqli_fetch_assoc($result))
  {
    echo '<tr>';
    echo'<td>'.$row['msv'].'</td>';
    echo'<td>'.$row['hoten'].'</td>';
    echo'<td>';
    echo' <button style="background-color: sandybrown;" class="edit"><a href="edit-nh.html">Sửa</a></button>';
    echo'<button style="background-color: red;" class="edit"><a href="">xoá</a></button>';  
    echo'</td>';    
    echo '</tr>';
  }   
}else{
    echo"loi ";
}
?>