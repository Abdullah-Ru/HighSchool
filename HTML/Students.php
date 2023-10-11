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
    <link rel="stylesheet" href="../CSS/Admin.css">
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
  
  button span:not(:nth-child(6)) {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    height: 30px;
    width: 30px;
    background-color: #0c66ed;
    border-radius: 50%;
    transition: .6s ease;
  }
  
  button span:nth-child(6) {
    position: relative;
  }
  
  button span:nth-child(1) {
    transform: translate(-3.3em, -4em);
  }
  
  button span:nth-child(2) {
    transform: translate(-6em, 1.3em);
  }
  
  button span:nth-child(3) {
    transform: translate(-.2em, 1.8em);
  }
  
  button span:nth-child(4) {
    transform: translate(3.5em, 1.4em);
  }
  
  button span:nth-child(5) {
    transform: translate(3.5em, -3.8em);
  }
  
  button:hover span:not(:nth-child(6)) {
    transform: translate(-50%, -50%) scale(4);
    transition: 1.5s ease;
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

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/logo.png">
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="../HTML/Students.html">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>الطلاب</h3>
                </a>
                <a href="../HTML/add_c.html">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>أضافة فرص</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">
                        mail_outline
                    </span>
                    <h3>الفرص المقترحة</h3>
                    <!-- <span class="message-count">27</span> -->
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <div class="group">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                    <g>
                        <path
                            d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                        </path>
                    </g>
                </svg>
                <input placeholder="بحث" type="search" class="input">
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
                        <td data-label="Name">عبدالله بن علي بن عبدالله الرسيني</td>
                        <td data-label="Age">1143475323</td>
                        <td data-label="Marks%">10</td>
                        <td data-label="Staus" class="none">Passed</td>
                    </tr>

                    <tr>

                    </tr>


                </tbody>
            </table>
            <div id="editContainer" class="buttonC">
                <button id="editButton" onclick="replaceWithInput()">
                    <span class="circle1"></span>
                    <span class="circle2"></span>
                    <span class="circle3"></span>
                    <span class="circle4"></span>
                    <span class="circle5"></span>
                    <span class="text">Submit</span>
                </button>
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
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>أهلا, <b>أ.أحمد</b></p>
                        <small class="text-muted">مشرف التطوع</small>
                    </div>
                </div>

            </div>
            <!-- End of Nav -->



        </div>


    </div>
    <script src="../JS/Students.js"></script>
    <script src="../JS/Admin.js"></script>
</body>

</html>