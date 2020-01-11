<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Thêm sinh viên</title>
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
        </ul>
      </nav>
    </div>
    <main class="main">
      <form action="process_themmonhoc.php" method="POST">
        <div class="form-group">
          <label for="">Mã môn học:</label>
          <input type="text" name="mamon" class="form-control" placeholder="Enter mã môn học">
        </div>
        <div class="form-group">
          <label for="">Tên môn học:</label>
          <input type="text" name = "tenmon" class="form-control" placeholder="Enter tên môn học">
        </div>
        <div class="form-group">
          <label for="">Chọn Lớp:</label>
          <?php
           echo "<select name='idgiangvien'>";
           include("../mysqli_connect.php");
           $sql = "SELECT * FROM giangvien";
           mysqli_set_charset($conn,"utf8");
           $result = mysqli_query($conn,$sql);
           if(mysqli_num_rows($result)>0){
             while($row = mysqli_fetch_assoc($result))
             {
               
               echo "<option value =".$row['idgiangvien']."> ".$row['htgiangvien']."</option>";
               
             }
              
           }
           echo "</select>";
          ?>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
        <button type="button" name="thoat" class="btn btn-primary" onclick="location.href ='admin-monhoc.php'">Thoát</button>
      </form>
    </main>
    <footer class="app-footer fixed-bottom">
      <!-- Footer content here -->
      <div>
        Quản trị viên>Quản lý tài khoản>Tạo môn học
      </div>
    </footer>
  </div> 
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>
</html>