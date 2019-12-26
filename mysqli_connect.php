<?php
$conn = mysqli_connect('localhost','root','','pro_uni_sys');
if(!$conn)
{
    die('kết nối đến cơ sở bị lỗi'.mysqli_connect_error());
}
?>