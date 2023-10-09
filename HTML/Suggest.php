<?php
session_start();
require_once('../PHP/connection.php');
require_once('../PHP/loginF.php');
login();
if(is_log_in() == '') {
  header('Location:../HTML/Homepage.php');
}

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css
    ">
    <script src="https://kit.fontawesome.com/f775d5945e.js" crossorigin="anonymous"></script>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;500;600;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body,
input,
textarea {
  font-family: "IBM Plex Sans Arabic";
}

.container {
  position: relative;
  width: 100%;
  padding: 2rem;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.form {
  width: 100%;
  max-width: 820px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  overflow: hidden;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.contact-form {
  background-color: #2DC653;
  position: relative;
}

.contact-form:before {
  content: "";
  position: absolute;
  width: 26px;
  height: 26px;
  background-color: #2DC653;
  transform: rotate(45deg);
  top: 50px;
  left: -13px;
}

form {
  padding: 2.3rem 2.2rem;
  z-index: 10;
  overflow: hidden;
  position: relative;
}

.title {
  color: #fff;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
  margin-bottom: 0.7rem;
  text-align: right;
}

.input-container {
  position: relative;
  margin: 1rem 0;
  text-align: right;
}

.input {
  width: 100%;
  outline: none;
  border: 2px solid #fafafa;
  background: none;
  padding: 0.6rem 1.2rem;
  color: #fff;
  font-weight: 500;
  font-size: 0.95rem;
  letter-spacing: 0.5px;
  border-radius: 25px;
  transition: 0.3s;
}

.input::placeholder {
  color: white;
  font-weight: 200;
}

textarea.input {
  padding: 0.8rem 1.2rem;
  min-height: 150px;
  border-radius: 22px;
  resize: none;
  overflow-y: auto;
}

.input-container label,
.input-container .lab {
  position: absolute;
  top: 50%;
  right: 15px;
  transform: translateY(-50%);
  padding: 0 0.4rem;
  color: #fafafa;
  font-size: 0.9rem;
  font-weight: 400;
  pointer-events: none;
  z-index: 1000;
  transition: 0.5s;
}

.input-container.textarea label {
  top: 1rem;
  transform: translateY(0);
}

#btn {
  padding: 0.6rem 1.3rem;
  background-color: #fff;
  border: 2px solid #fafafa;
  font-size: 0.95rem;
  color: #1abc9c;
  line-height: 1;
  border-radius: 25px;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
  margin: 0;
  margin-left: 13.5rem;
}

.btn:hover {
  background-color: transparent;
  color: #fff;
}

.input-container span {
  position: absolute;
  top: 0;
  left: 210px;
  transform: translateY(-50%);
  font-size: 0.8rem;
  padding: 0 0.4rem;
  color: transparent;
  pointer-events: none;
  z-index: 500;
}

.input-container span:before,
.input-container span:after {
  content: "";
  position: absolute;
  width: 10%;
  opacity: 0;
  transition: 0.3s;
  height: 5px;
  background-color: #1abc9c;
  top: 50%;
  transform: translateY(-50%);
}

.input-container span:before {
  left: 50%;
}

.input-container span:after {
  right: 50%;
}

.input-container.focus label {
  top: 0;
  transform: translateY(-50%);
  font-size: 0.8rem;
}

.input-container.focus:nth-child(2) label {
  right: 23px;
}

.input-container.focus:nth-child(3) label {
  font-size: 0.7rem;
}

.input-container.focus:nth-child(4) label {
  right: 32px;
}

.input-container.focus:nth-child(5) label {
  right: 45px;
}

.contact-info {
  padding: 2.3rem 2.2rem;
  position: relative;
  text-align: right;
  display: flex;
  flex-direction: column;
  align-items: end;
  margin-top: 50px;
}

.contact-info .title {
  color: #1abc9c;
}

.text {
  color: #333;
  margin: 1.5rem 0 2rem 0;
  text-align: right;
  right: 40px;
}

.information,
.information-inf,
.information-info {
  display: flex;
  color: #555;
  margin-top: 10px;
  align-items: center;
  font-size: 0.95rem;
  text-align: right;
  justify-content: right;
}

.icon {
  width: 28px;
  margin-right: 0.7rem;
}

.social-media {
  padding: 2rem 0 0 0;
  margin-left: 13rem;
}

.social-media p {
  color: #333;
}

.social-icons {
  display: flex;
  margin-top: 0.5rem;
}

.social-icons a {
  margin-top: 4rem;
  width: 35px;
  height: 35px;
  border-radius: 5px;
  background: linear-gradient(45deg, #1abc9c, #149279);
  color: #fff;
  text-align: center;
  line-height: 35px;
  margin-right: 0.5rem;
  transition: 0.3s;
}

.social-icons a:hover {
  transform: scale(1.05);
}

.contact-info:before {
  content: "";
  position: absolute;
  width: 110px;
  height: 100px;
  border-radius: 50%;
  bottom: -77px;
  right: 50px;
  opacity: 0.3;
}

.big-circle {
  position: absolute;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: linear-gradient(to bottom, #1cd4af, #159b80);
  bottom: 50%;
  right: 50%;
  transform: translate(-40%, 38%);
}

.big-circle:after {
  content: "";
  position: absolute;
  width: 360px;
  height: 360px;
  background-color: #fafafa;
  border-radius: 50%;
  top: calc(50% - 180px);
  left: calc(50% - 180px);
}

.square {
  position: absolute;
  height: 400px;
  top: 50%;
  left: 50%;
  transform: translate(181%, 11%);
  opacity: 0.2;
}

@media (max-width: 850px) {
  .form {
    grid-template-columns: 1fr;
  }

  .contact-info:before {
    bottom: initial;
    top: -75px;
    right: 65px;
    transform: scale(0.95);
  }

  .contact-form:before {
    top: -13px;
    left: initial;
    right: 70px;
  }

  .square {
    transform: translate(140%, 43%);
    height: 350px;
  }

  .big-circle {
    bottom: 75%;
    transform: scale(0.9) translate(-40%, 30%);
    right: 50%;
  }

  .text {
    margin: 1rem 0 1.5rem 0;
  }

  .social-media {
    padding: 1.5rem 0 0 0;
    margin-left: 0;
  }
}

@media (max-width: 480px) {
  .container {
    padding: 1.5rem;
  }

  .contact-info:before,
  .square,
  .big-circle {
    display: none;
  }

  form,
  .contact-info {
    padding: 1.7rem 1.6rem;
  }

  .text,
  .information,
  .social-media p {
    font-size: 0.8rem;
  }

  .title {
    font-size: 1.15rem;
  }

  .social-icons a {
    width: 30px;
    height: 30px;
    line-height: 30px;
  }

  .icon {
    width: 23px;
  }

  .input {
    padding: 0.45rem 1.2rem;
  }

  .btn {
    padding: 0.45rem 1.2rem;
    margin-left: 0;
  }
}
    </style>
    <title>اقتراح | المنصة التطوعية</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg sticky-top" id="nav" dir='rtl'>
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
</nav>
    <!-- <div class="container">
      <div class="form">
        <div class="contact-info">
          <h3 class="title">! خير الكلام ماقل ودل</h3>
          <p class="text">
           سيتم النظر في اقتراحكم والرد عليه بأسرع وقت        </p>
        </div>

        <div class="contact-form">

          <form action="index.html" autocomplete="off">
            <h3 class="title">نسعد باقتراحك</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" dir="rtl" placeholder="الاسم الثلاثي"/>
              <label for=""></label>
              <span> اسم المستخدم</span>
            </div>
            <div class="input-container">
              <input type="text" name="phone" class="input" dir="rtl" placeholder="رقم الهاتف" maxlength="10" />
              <label for=""></label>
              <span> رقم الجوال</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" dir="rtl" maxlength="200" placeholder="الفرصة المقترحة"></textarea>
              <label class="lab" for=""></label>
              <span> الرسالة</span>
            </div>
            <input type="submit" value="أرسال" id="btn" />
          </form>
        </div>
      </div>
    </div> -->
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="form">
        <div class="contact-info">
          <h3 class="title" style="font-size:1.5em;">! خير الكلام ماقل ودل</h3>
          <p class="text" style="font-size:1.0em;">
           سيتم النظر في اقتراحكم والرد عليه بأسرع وقت        </p>
        </div>

            <div class="contact-form">
              <form action="index.html" autocomplete="off">
                <h3 class="title">نسعد باقتراحك</h3>
                <div class="input-container">
                <input type="text" name="name" class="input" dir="rtl" placeholder="الاسم الثلاثي"/>
                </div>
                <div class="input-container">
                <input type="text" name="phone" class="input" dir="rtl" placeholder="رقم الهاتف" maxlength="10" />
                </div>
                <div class="input-container">
                <textarea name="message" class="input" dir="rtl" maxlength="200" placeholder="الفرصة المقترحة"></textarea>
                </div>
                <input type="submit" value="إرسال" id="btn" />
              </form>
            </div>
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