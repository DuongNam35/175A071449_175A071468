<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Quản lý lớp</title>
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
      <p>Chọn lớp giảng dạy :</p>
      <form action="giangvien_qllop.php" method="POST">
      <input  style="background-color: blue" type="submit" name="submit" value="xem danh sách lớp">
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
      
      <table border="1" class="table">
        <tr>
          <th style="border-radius: 10px 0 0 0;">Mã sinh viên</th>
          <th>Họ tên</th>
          <th style="border-radius: 0 10px 0 0;">Chức năng</th>
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
              if(isset($_POST['submit'])){
                include("../mysqli_connect.php");
              $sql = "SELECT sinhvien.msv, sinhvien.hoten from lophoc,sinhvien where (lophoc.msv=sinhvien.msv) and(lophoc.malop='$lop')";
              mysqli_set_charset($conn,"utf8");
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0){
                
                while($row = mysqli_fetch_assoc($result))
                {
                  ?>
                  <tr>
                  <td><?php echo $row['msv'] ?></td>
                  <td><?php echo $row['hoten'] ?></td>
                  <td>
                  <button style="background-color: sandybrown;" class="edit"><a href="edit-qllop.php?edit=<?php echo $row['msv'] ?>">Sửa</a></button>
                  <button style="background-color: red;" class="edit"><a href="del-qllop.php?del=<?php echo $row['msv']; ?>">Xoá</a> </button>
                  
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
      <a href="themsv.php"><input type="button" value="thêm sinh viên "></a>
      <!-- <hr>
      <p>Mã sinh viên :</p>
      <input type="text">
      <p>Họ tên :</p>
      <input type="text">
      <br>
      <input type="button" value="thêm sinh viên"> -->

    </main>
    <footer class="app-footer fixed-bottom">
      <!-- Footer content here -->
      <div>
        Form giảng viên>Quản lý lớp học
      </div>
    </footer>
  </div> 
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>
</html>



