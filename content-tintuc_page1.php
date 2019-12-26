<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sinh Viên đại học thủy lợi</title>
  <link rel="stylesheet" href="css/bootstrap.min.css.map">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="css/STYLE.CSS">
  <link rel="stylesheet" href="css/sinhvien.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap&subset=vietnamese" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>

<body>
  <!--header-->
  <header>
    <div class="container">
      <div class="logo-search">
        <div class="row">
          <div class="col-lg-8">
            <a href="Mail.html"><img src="img/logo.png" alt="logo trường"></a>
          </div>
          <div class="col-lg-4">
            <div class="search-lang">
              <div class="lang">
                <ul>
                  <li><a href="">(+)</a></li>
                  <li><a href="">Login</a></li>
                  <!-- <li><a href="">Register</a></li> -->
                  <li><a href="">
                      <img src="img/vi.jpg" alt="">
                      <img src="img/en.jpg" alt="">
                    </a></li>
                </ul>
              </div>
              <div class="search">
                <form>
                  <input type="text" placeholder="Nhập từ khóa">
                  <button>Tìm Kiếm</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="title-menu panner">
    <div class="container">
      <!--tiêu đề menu-->
      <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
          <div class="title">
            <div class="menu">
              <ul class="menu1">
                <li><a href="Main.html"><img style="width: 25px; height: 25px;" src="./img/home (1).png" alt=""></a>
                </li>
                <li>
                  <a href="thongbao_tintuc.html">TIN TỨC & THÔNG BÁO</a>
                </li>
                <li class="l1">
                  <a href="tuyensinh.html">TUYỂN SINH</a>
                </li>
                <li class="l1"><a href="">LIÊN HỆ</a></li>
                <li class="l1">
                  <a href="">GIỚI THIỆU</a>
                </li>
                <li class="l1">
                  <a href="">ĐÀO TẠO</a>
                </li>
                <li class="l1">
                  <a href="khoahoc-congnghe.html">KHOA HỌC CÔNG NGHỆ</a>
                </li>
                <li class="l1">
                  <a href="#">SINH VIÊN</a>
                </li>
                <li class="l1">
                  <a href="doingoai.html">ĐỐI NGOẠI</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--Phần main-->
  <main>
    <div class="container">

      <?php
        include("mysqli_connect.php");
        $sql = "SELECT title,postcontet FROM bangtin where style='tin tức'";
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result))
          {
            echo'<h1>'.$row['title'].'</h1>';
            echo'<p>'.$row['postcontet'].'</p>';
          }
           
        }
      ?>
    </div>

    <div id="pagination" class="text-right" style="float: right;" >
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>

        <li class="page-item"><a class="page-link" href="#">Trang sau</a></li>
      </ul>
    </div>

  </main>
  <footer>
    <div class="infor" style="background-color: #96bceb;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="maps">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6318949112747!2d105.82253501484145!3d21.00738779388369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac8109765ba5%3A0xd84740ece05680ee!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBUaOG7p3kgTOG7o2k!5e0!3m2!1svi!2s!4v1576428139179!5m2!1svi!2s"
                width="300" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12">
            <p>
              TRƯỜNG ĐẠI HỌC THỦY LỢI <br>
              Địa chỉ :175 Tây Sơn, Đống Đa, Hà Nội <br>
              Điện thoại:(024)38522201 -Fax: (024)35633351 <br>
              Email:phonghcth@tlu.edu.vn
            </p>
            <p>
              TRƯỜNG ĐẠI HỌC THỦY LỢI - CƠ SỞ 2 <br>
              Phường An Thạnh - TX Thuận An - Tỉnh Bình Dương <br>
              Điện thoại: (84).650.3748 620 <br>
              Fax:(84).650.3833 489 <br>
            </p>

          </div>
          <div class="col-lg-4 col-md-12 col-sm-12">
            <p>
              TRƯỜNG ĐẠI HỌC THỦY LỢI - CƠ SỞ 2
              Địa chỉ : Số 2 - Đường Trường Sa - P.17 - Q.Bình Thạnh - Tp.Hồ Chí Minh
              Điện thoại: (84)028.38 400 532 - Fax: (84)028.38 400542
              Email: cs2@tlu.edu.vn
            </p>
            <p>
              VIỆN ĐÀO TẠO VÀ KHOA HỌC ỨNG DỤNG MIỀN TRUNG
              Địa chỉ: Số 115 Trần Phú, Thành phố Phan Rang, Tỉnh Ninh Thuận
              Điện thoại: 02593.823 027, 02593.823 028
              Email: trungtamdh2@tlu.edu.vn
            </p>

          </div>

        </div>
        <div class="mess">

          <a href=""><img style="height: 50px; width: 50px;" src="img/icons8-facebook-messenger-96.png" alt=""></a>
        </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>
</html>