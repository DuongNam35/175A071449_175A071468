<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tin tức</title>
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
            <a href="admin_taikhoan.php" class="nav-link">
              Quản lý Tài khoản
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
             Quản lý tin tức
            </a>
          </li>
          <li class="nav-item">
            <a href="admin-giangvien.php" class="nav-link">
              Quản lý Giảng viên
            </a>
          </li>
          <li class="nav-item">
            <a href="admin-nganhhoc.php" class="nav-link">
              Quản lý Ngành học
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_lop.php" class="nav-link">
              Quản lý Lớp học
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_monhoc.php" class="nav-link">
              Quản lý Môn Học
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <main class="main">
  
    <table border="2" class="table">
      <tr>
        <th>id</th>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Thể loại</th>
        <th>Chức năng </th>
      </tr>
      
        <?php
         include("../mysqli_connect.php");
         $sql = "SELECT * FROM bangtin";
         mysqli_set_charset($conn,"utf8");
         $result = mysqli_query($conn,$sql);
         if(mysqli_num_rows($result)>0){
           while($row = mysqli_fetch_assoc($result))
           {
             ?>
             <tr>
             <td><?php echo $row['id'] ?></td>
             <td><?php echo $row['tieude'] ?></td>
             <td><?php echo $row['noidung'] ?></td>
             <td><?php echo $row['theloai'] ?></td>
             <td>
             <a href="edit-tt.php?edit=<?php echo $row['id'] ?>">Sửa</a>
             <a href="del-tt.php?del=<?php echo $row['id']; ?>">Xoá</a> 
             </td>
             </tr>
             <?php
           }
          }
        ?>
        
      
      
    </table>
    <hr>
    <table class="table" border="2">
      <tr>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Thể loại</th>
      </tr>
      <tr>
         <form action="pro_themtt.php" method="POST">
        <td><textarea name="tieude" id="" cols="30" rows="10"></textarea></td>
        <td><textarea name="noidung" id="" cols="30" rows="10"></textarea></td>
        <td>
          <select name="theloai">
            <option value="Tin tức">Tin tức</option>
            <option value="Thông báo">thông báo</option>
          </select>
        </td>
        <td>
          <input type="submit" name="submittt" value="Thêm">
        </td>
        </form>
      </tr>
    </table>

    </main>
    <footer class="app-footer fixed-bottom">
      <!-- Footer content here -->
      <div>
        Quản trị viên> Tin tức
      </div>
    </footer>
  </div> 
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>
</html>