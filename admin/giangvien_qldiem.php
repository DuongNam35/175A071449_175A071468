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
    <a href="#" class="logout">Logout</a>
  </header>
  <div class="app-body">
    <div class="sidebar">
      <!-- Sidebar content here -->
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="menu">
              MENU
          </li>
          <li class="nav-item">
            <a href="giangvien_qllop.php" class="nav-link">
              Quản lý lớp
            </a>
          </li>
          <li class="nav-item">
            <a href="giangvien_qldiem.php" class="nav-link">
              Quản lý điểm
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <main class="main">
    <form action="giangvien_qldiem.php" method="POST">
      
      <input  style="background-color: blue;color:white;" type="submit" name="xemdiemlop" value="xem điểm lớp">
      <?php
        echo "<select name='lop'>";
        echo"<option value =''>Chọn</option>";
        include("../mysqli_connect.php");
        $sql = "SELECT * FROM lop";
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result))
          {  
            echo "<option value =".$row['malop']."> ".$row['malop']."</option>";
          }
        }
        echo "</select>";
      ?>
      </form>
      <table class="table" border="2">
        <tr>
          <th>Mã sinh viên</th>
          <th>Họ tên</th>
          <th>Điểm 1</th>
          <th>Điểm 2</th>
          <th>Điểm 3</th>
          <th>Điểm 4</th>
          <th>Tổng điểm</th>
        </tr>
        
        <?php
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Thiết lập mảng lưu lỗi => Mặc định rỗng
            $error = array();
            if (empty($_POST['lop'])) {
                $error['lop'] = "Bạn cần chọn lớp";
            } else {
                $lop = $_POST['lop'];
            }
            // Kiểm tra có lỗi hay không
            if (empty($error)) {
              if(isset($_POST['xemdiemlop'])){
                include("../mysqli_connect.php");
              $sql = "SELECT sinhvien.msv, sinhvien.hoten from lophoc,sinhvien where (lophoc.msv=sinhvien.msv) and(lophoc.malop='$lop')";
             
              mysqli_set_charset($conn,"utf8");
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0){
                
                while($row = mysqli_fetch_assoc($result))
                {
                  $m = $row['msv'];
                  $sqldiemtp="SELECT * from diemtp where (msv='$m')";
                  $result1 = mysqli_query($conn,$sqldiemtp);
                  $sqldiemtong="SELECT * from tongdiem where (msv='$m')";
                  $result2 = mysqli_query($conn,$sqldiemtong);
                  ?>
                  <tr>
                  <td><?php echo $row['msv'] ?></td>
                  <td><?php echo $row['hoten'] ?></td>
                  <?php  
                       if(mysqli_num_rows($result1)==2){
                        while($row1 = mysqli_fetch_assoc($result1)){
                          ?>
                          <td><?php echo $row1['diem'] ?></td>
                          <?php
                        }
                        ?>
                        <td></td>
                        <td></td>
                        <?php
                       }else if(mysqli_num_rows($result1)==3){
                        while($row1 = mysqli_fetch_assoc($result1)){
                          ?>
                           <td><?php echo $row1['diem'] ?></td>
                          <?php
                        }
                        ?>
                        <td></td>
                        <?php
                       }else if(mysqli_num_rows($result1)==4){
                        while($row1 = mysqli_fetch_assoc($result1)){
                          ?>
                           <td><?php echo $row1['diem'] ?></td>
                          <?php
                        }
                       }
                  ?>
                  <?php
                  if(mysqli_num_rows($result2)>0){
                    while($row2 = mysqli_fetch_assoc($result2)){
                      ?>
                      <td><?php echo $row2['tongdiem'] ?></td>
                      <?php
                    }
                  }
                  ?>
                  <td>
                  <a href="">Sửa</a>
                  </td>
                  </tr>
                  <?php
                }   
              }
              }
              // Xử lý dữ liệu khi không gặp lỗi nhập liệu
          }
        }
         
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