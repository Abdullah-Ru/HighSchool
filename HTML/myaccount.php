<?php
session_start();
require_once('../PHP/connection.php');
require_once('../PHP/loginF.php');
include('../PHP/myaccount.php');
include('../PHP/passupdate.php');
login();
if(is_log_in() == '') {
    header('Location:../HTML/Homepage.php');
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>حسابي | المنصة التطوعية</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css
    ">
    <script src="https://kit.fontawesome.com/f775d5945e.js" crossorigin="anonymous"></script>

</head>

<body dir="rtl">
<nav class="navbar navbar-expand-lg sticky-top nav" id="nav">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="../IMG/logo.png" alt="شعار ثانوية الشيخ عبدالعزيز بن باز" width="140" height="70">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../HTML/Homepage.php" id="active">الرئيسية</a>
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
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            أعدادات الحساب
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0" >
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">عام</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-change-password">تغيير كلمة المرور</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">عدد الساعات التطوع</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                            <form method="get" class="form-group">
                                <label class="form-label">أسم الطالب</label>
                                <input type="text" class="form-control mb-1" disabled value="<?php echo htmlspecialchars($row5["username"]); ?>">
    
                                <label class="form-label">الهوية الوطنية</label>
                                <input type="text" class="form-control" disabled value="<?php echo htmlspecialchars($row5["ID_sa"]); ?>">
    
                                <label class="form-label">الميلاد</label>
                                <input type="text" class="form-control" disabled value="<?php echo htmlspecialchars($row5['date']);?>">
                            </form>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password" method='post'>
                            <div class="card-body pb-2">
                                <form class="form-group" method='post'>
                                <?php
              if (isset($_GET['error'])) {
                ?>
                <p style='color:red; margin:auto;'>! تأكد من كلمة المرور القديمة او من تطابق كلمة المرور الجديدة</p>
                <?php
              }
              if (isset($_GET['success'])) {
                ?>
                <p style='color:green; margin:auto;'>! تم تحديث كلمة مرورك </p>
                <?php
              }
              ?>
                                    <label class="form-label">كلمة المرور الحالية</label>
                                    <input type="password" class="form-control" name='op'>
                                    <label class="form-label">كلمة المرور الجديدة</label>
                                    <input type="password" class="form-control" name='np'>
                                    <label class="form-label">أعد كتابة كلمة المرور الجديدة</label>
                                    <input type="password" class="form-control" name='c_np'>
                                    <button id="outline_btn0" type="submit" class="btn btn-outline btn-lg" name='save' style="font-weight: 300; font-size: 17px; margin: auto; margin-left: 6px; margin-right: 12px; margin-bottom: 10px; position: relative; top: 5px; " onclick="window.location.href = '../HTML/myaccount.php'">حفظ المتغيرات</button>
            <button id="outline_btn3" type="button" class="btn btn-outline btn-lg" style="font-weight: 300; font-size: 20px; margin: auto; margin-left: 12px; margin-right: 12px; margin-bottom: 10px; position: relative; top: 5px;" onclick="window.location.href = '../HTML/Homepage.php'">الغاء</button>

                        </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <form method='get' class="div-h3">
                                <h5>عدد ساعات التطوع التي تم انجازها: <?php echo htmlspecialchars($row5['hours'])?></h5>
                                <h5 id="h5">عدد ساعات التطوع الباقية: <?php $hour = htmlspecialchars($row5['hours']);
                                echo 40 - $hour;
                                ?></h5>
                            </form>
                </div>
            </div>
        </div>
    </div>
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