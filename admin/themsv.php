

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
      <button><a href="giangvien_qllop.php">Quay lại</a></button>
      <form action="pro_themsv.php" method="POST">
      <input  style="background-color: blue" type="submit" name="submit" value="Chọn lớp">
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
      Mã sinh viên: <input type="text" name="masv" placeholder="Nhập mã sv">
      <input type="submit" name="submit" value="Thêm ">
      </form>
      
  
     
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
        Form giảng viên>Quản lý lớp học>them sinh vien
      </div>
    </footer>
  </div> 
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>
</html>



