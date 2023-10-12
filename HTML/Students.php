<?php
// Start PHP session at the very beginning of your script
session_start();

// Include required files
include('../PHP/connection.php');
require_once('../PHP/loginF.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
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
    <link rel="stylesheet" href="../CSS/Students.css">
    <title>Responsive Dashboard Design #1 | AsmrProg</title>
    <style>
        body{
	margin:0;
	padding:0;
	font-family: sans-serif;
}

*{
	box-sizing: border-box;
}
main{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.group {
    display: flex;
    line-height: 28px;
    align-items: center;
    position: relative;
    max-width: 500px;
    margin-bottom: 15px;
  }
  button {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    color: white;
    background-color: #171717;
    padding: 1em 2em;
    border: none;
    border-radius: .6rem;
    position: relative;
    cursor: pointer;
    overflow: hidden;
  }

    
  .input {
    height: 40px;
    line-height: 28px;
    padding: 0 1rem;
    width: 100%;
    padding-left: 2.5rem;
    border: 2px solid transparent;
    border-radius: 8px;
    outline: none;
    background-color: #D9E8D8;
    color: #0d0c22;
    box-shadow: 0 0 5px #C1D9BF, 0 0 0 10px #f5f5f5eb;
    transition: .3s ease;
    max-width: 250px;
  }
  
  .input::placeholder {
    color: #777;
  }
  
  .icon {
    position: absolute;
    left: 1rem;
    fill: #777;
    width: 1rem;
    height: 1rem;
  }
  

.table{
	width: 100%;
	border-collapse:collapse ;
    max-width: 800px;
}

.table td,.table th{
  padding:12px 15px;
  border:1px solid #ddd;
  text-align: center;
  font-size:16px;
}
.table .none{
    padding:12px 15px;
    border:1px solid #ddd;
    text-align: center;
    font-size:16px;
    display: none;
  }

.table th{
	background-color: darkblue;
	color:#ffffff;
}

.table tbody tr:nth-child(even){
	background-color: #f5f5f5;
}

main{
    display: flex;
    justify-content: center;
    align-items: center;
}
.buttonC{
    margin-top: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
}
/*responsive*/

@media(max-width: 500px){
	.table thead{
		display: none;
	}

	.table, .table tbody, .table tr, .table td{
		display: block;
		width: 100%;
	}
	.table tr{
		margin-bottom:15px;
	}
	.table td{
		text-align: right;
		padding-left: 50%;
		text-align: right;
		position: relative;
	}
    .table .none{
		text-align: right;
		padding-left: 50%;
		text-align: right;
		position: relative;
        display: none;
	}
	.table td::before{
		content: attr(data-label);
		position: absolute;
		left:0;
		width: 50%;
		padding-left:15px;
		font-size:15px;
		font-weight: bold;
		text-align: left;
	}
}
    </style>
</head>

<body dir="rtl">
    <nav class="navbar navbar-expand-lg sticky-top" id="nav">
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
   
        <!-- Sidebar Section -->
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <div class="group">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                </svg>
                <input placeholder="بحث" type="search" class="input">
                <button class="button">أرسال</button>
            </div>
            <table class="table">
                <thead>
                    <tr>

                        <th>أسم الطالب</th>
                        <th>الهوية</th>
                        <th>عدد ساعات التطوع التي تم انجازها</th>

                    </tr>
                </thead>
                <tbody> 
                    <tr>
                        <td data-label="S.No" class="none">1</td>
                        <td data-label="الأسم">عبدالله بن علي بن عبدالله الرسيني</td>
                        <td data-label="الهوية">1143475323</td>
                        <td data-label="ساعات التطوع">10</td>
                        <td data-label="Staus" class="none">Passed</td>
                    </tr>

                    <tr>

                    </tr>


                </tbody>
            </table>
            <div id="buttonContainer">
                <button class="button" id="editButton" onclick="replaceWithInput()">تعديل ساعات التطوع</button>
            </div>

            <!-- Analyses -->

            <!-- End of Analyses -->

            <!-- New Users Section -->

            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->

            <!-- End of Recent Orders -->

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->



       




        <!-- End of Nav -->





    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../JS/nav.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../JS/Students.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>