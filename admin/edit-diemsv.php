<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Quản lý điểm</title>
  <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
  <link rel="stylesheet" href="css/admin_page.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  <header class="app-header navbar-dark header-fixed navbar bg-dark">
    <!-- Header content here -->

    <button class="navbar-toggler sidebar-toggler d-md-down-none" data-toggle="sidebar-lg-show" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="login.php" class="logout">Logout</a>
  </header>
  <div class="app-body">
    <div class="sidebar">
      <!-- Sidebar content here -->
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="menu">
              MENU
          </li>
          
        </ul>
      </nav>
    </div>
    <main class="main">
      <table class="table" border="2">
        <tr>
          <th>Mã sinh viên</th>
          <th>Họ tên</th>
          <th>Điểm 1</th>
          <th>Trọng số</th>
          <th>Điểm 2</th>
          <th>Trọng số</th>
          <th>Điểm 3</th>
          <th>Trọng số</th>
          <th>Điểm 4</th>
          <th>Trọng số</th>
          <th>Tổng điểm</th>
          <th>Chức Năng</th>
        </tr>
        
        <?php
        $msv=$_GET['edit'];
                include("../mysqli_connect.php");
              $sql = "SELECT sinhvien.msv, sinhvien.hoten from lophoc,sinhvien where (lophoc.msv=sinhvien.msv) and(lophoc.msv='$msv')";
             
              mysqli_set_charset($conn,"utf8");
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0){
                
                $row = mysqli_fetch_assoc($result);
                
                  $m = $row['msv'];
                  $sqldiemtp="SELECT * from diemtp where msv='$m'";
                  $result1 = mysqli_query($conn,$sqldiemtp);
                  $sqldiemtong="SELECT * from tongdiem where (msv='$m')";
                  $result2 = mysqli_query($conn,$sqldiemtong);
                  ?>
                  <tr>
                  <form action="pro_editdiem.php" method="POST">
                  <td><input type="text" name="msv" value="<?php echo $row['msv'] ?>"></td>
                  <td><?php echo $row['hoten'] ?></td>
                 
                  <td><input type="text" name='diem1' size="2"></td>
                  <td><input type="text" name='trongso1' size="2"></td>
                  <td><input type="text" name="diem2" size="2"></td>
                  <td><input type="text" name='trongso2' size="2"></td>
                  <td><input type="text" name='diem3' size="2"></td>
                  <td><input type="text" name='trongso3' size="2"></td>
                  <td><input type="text" name='diem4' size="2"></td>
                  <td><input type="text" name='trongso4' size="2"></td>
                  <td><input type="text" name='tongdiem' size="2"></td>
                  <td><input type="submit" value="update" name="update"></td>
                 
                  </form>
                 </tr>
                  <!-- <button> <a href="pro_editdiem.php?del=?php echo $row['msv']; ?>">Update</a></button> -->
                  <?php
                  
              }
              
              // Xử lý dữ liệu khi không gặp lỗi nhập liệu
          
        
         
        ?>
        
      </table>
      

    </main>
    <footer class="app-footer fixed-bottom">
      <!-- Footer content here -->
      <div>
        Form giảng viên>Quản lý điểm
      </div>
    </footer>
  </div> 
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>
</html>