<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tài khoản</title>
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
            <a href="#" class="nav-link">
              Tài khoản
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_tintuc.html" class="nav-link">
             Tin tức
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_tintuc.html" class="nav-link">
              Quản lý Giảng viên
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_tintuc.html" class="nav-link">
              Quản lý Ngành học
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_tintuc.html" class="nav-link">
              Quản lý Lớp học
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <main class="main">
      <table class="table table-striped">
        <tr>
          <th style="border-radius: 10px 0 0 0;">Id ngành</th>
          <th>Tên ngành</th>
          <th style="border-radius: 0 10px 0 0;">Chức năng</th>
        </tr>
        <tr>
          <?php  
                $idnh = $_GET['edit'];
          
                include("../mysqli_connect.php");
                $sql = "SELECT * FROM nganhhoc where idnganh=$idnh";
                mysqli_set_charset($conn,"utf8");
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)==1){
                  $row = mysqli_fetch_assoc($result)
                  ?>
                  <form action="update-nh.php" method="POST">
                  <td><input type="text" name="idnh" value="<?php echo $row['idnganh'] ?>" class="input-content"></td>
                  <td><input type="text" name="tennh" value="<?php echo $row['tennganh'] ?>" class="input-content"></td>
                  <td><input type="submit" name="updatenh" value="Update" class="edit" style="background-color: sandybrown;"></td>
                  </form>
                  <?php
                }
          ?>
          
        </tr>
      </table>
      <hr>
     <!-- <p style="background-color: rgb(83, 109, 158); text-align: center;height: 30px; "><a href="taotaikhoan.html" style="color: black; text-decoration: none;">Thêm tài khoản</a></p>    -->
    </main>
    <footer class="app-footer fixed-bottom">
      <!-- Footer content here -->
      <div>
        Quản trị viên> Tài Khoản
      </div>
    </footer>
  </div> 
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>
</html>