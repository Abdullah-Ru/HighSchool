<?php
session_start();
require_once('../PHP/connection.php');
require_once('../PHP/loginF.php');
login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Homepage.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../IMG/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/f775d5945e.js" crossorigin="anonymous"></script>

    <title>الصفحة الرئيسية | المنصة التطوعية</title>
</head>
<body dir="rtl">
<nav class="navbar navbar-expand-lg sticky-top nav" id="nav">
    <div class="container">
        <a class="navbar-brand"  href="#">
            <img src="../IMG/logo.png" alt="شعار ثانوية الشيخ عبدالعزيز بن باز" width="140" height="70">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" id="active">الرئيسية</a>
                </li>
                <li class="nav-item border-left">
                    <a class="nav-link" href="../HTML/Chanses.php" id="nav2">الفرص التطوعية</a>
                </li>
                <li class="nav-item border-left">
                    <a class="nav-link" href="../HTML/Suggest.php" id="nav2">اقتراح فرصة</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user" dir='ltr'></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                        <?php
                            if (is_log_in() != "") {
                        ?>
                        <a class="dropdown-item" href="../php/logout.php" style='text-align:center;'>تسجيل خروج</a>
                        <a class="dropdown-item" href="../HTML/myaccount.php" style='text-align:center;'>حسابي</a>
                        <?php
                            } else {
                        ?>
                        <a class="dropdown-item" href="../HTML/login.php" style='text-align:center;'>تسجيل الدخول</a>
                        <?php
                            }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div id="main" class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="../IMG/Schoolsimg.jpeg" class="d-block mx-lg-auto img-fluid" alt="صورة للمدرسة" width="700" height="500" loading="lazy" style="border-radius: 20px;" data-aos="fade-right">
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <h1 class="display-5 fw-bold lh-1 mb-3" style="color: #3A3A3A;">المنصة التطوعية لثانوية الشيخ عبدالعزيز بن باز</h1>
          <p class="lead">(فَمَن تَطَوَّعَ خَيْرًا 
              فَهُوَ خَيْرٌ لّهُ)
              </p>
              <p class="lead" style="position: relative; bottom: 15px; font-size:10px ; right: 3px;">سورة البقرة (184)</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start" data-aos="fade-left">
            <button id="outline_btn" type="button" class="btn btn-outline btn-lg" style="font-weight: 400; font-size: 21px; margin: auto; margin-left: 120px; position: relative; top: 5px;" onclick="window.location.href = '../HTML/Chanses.php'">استكشف الفرص التطوعية</button>
          </div>
        </div>
      </div>
    </div>

                <script src="../JS/Admin.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../JS/nav.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js
    "></script>
    <script>
        AOS.init();
    </script>
</body>
</html>