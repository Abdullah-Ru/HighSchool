<?php
// Start PHP session at the very beginning of your script
session_start();

// Include required files
include('../PHP/connection.php');
require_once('../PHP/loginF.php');
include('../PHP/Chanse.php');
include('../PHP/AddChanse.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>الطلاب/أضافة الفرص/ الفرص المقترحة | المنصة التطوعية</title>
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

.input {
            max-width: 300px;
            padding: 12px;
            border: none;
            border-radius: 4px;
            box-shadow: 2px 2px 7px 0 rgb(0, 0, 0, 0.2);
            outline: none;
            color: dimgray;
        }
        .input2 {
            max-width: 300px;
            padding: 12px;
            border: none;
            border-radius: 4px;
            box-shadow: 2px 2px 7px 0 rgb(0, 0, 0, 0.2);
            outline: none;
            color: dimgray;
        }

        .input:invalid {
            animation: justshake 0.3s forwards;
            color: red;
        }

        @keyframes justshake {
            25% {
                transform: rotate(5deg);
            }

            50% {
                transform: rotate(-5deg);
            }

            75% {
                transform: rotate(5deg);
            }
        }

        #outline_btn:hover {
            opacity: 0.2;
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
  .button {
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

    
  .input3 {
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
  
  .input3::placeholder {
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
                            href="#account-general">الطلاب</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-change-password">أضافة فرصة</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">الفرص المقترحة</a>
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
                            <div class="group">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                </svg>
                <input placeholder="بحث" type="search" class="input3">
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
                            </form>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password" method='post'>
                            <div class="card-body pb-2">
                                <form class="form-group" method='post'>
                                    <div class="container2">
                                        <form method="post" class="form">
                                            <h2 style="font-size: 30px; position: relative; right: 85px; top: 20px; " >اضافة فرصة</h2>
                                            <input placeholder="اسم الفرصة" class="input" name="name_c" type="text"
                                                style="position: relative; right: 70px; top: 50px;">
                                            <br>
                                            <input placeholder="الساعات التطوعية للفرصة" class="input" name="hours_c" type="number"
                                                style="position: relative; right: 70px; top: 70px;">
                                            <br>
                                            <input placeholder="الساعات التطوعية للفرصة" class="input2" name="count_c" type="number"
                                                style="position: relative; right: 70px; top: 90px;">
                                            <button id="outline_btn" type="submit" name='add2' class="btn btn-outline btn-lg"
                                                style="font-weight: 400; font-size: 21px;  padding: 8px; position: relative; top: 90px; right:100px;">اضافة</button>
                                    
                                        <div style="position: relative; right: 600px; bottom: 200px;;">
                                                <button id="outline_btn" type="submit" name='Search2' class="btn btn-outline btn-lg"
                                                    style="font-weight: 400; font-size: 21px;  padding: 8px;">البحث</button>
                                            </form>
                                            <br><br>
                                            <div class="row" id="cq">
                                <?php
                                if (isset($_POST['Search2'])) {
                                    $sql7 = "SELECT `id_C`, `Name`, `Hours_C`, `Count`, `add_date` FROM `chanse`";
                                    $result7 = mysqli_query($conn, $sql7);
                            
                                    if (mysqli_num_rows($result7) > 0) {
                                        while ($row = mysqli_fetch_assoc($result7)) {
                                            $uniqueId = uniqid(); // Generate a unique ID for each card
                            
                                            echo '
                                            <div class="card h-100">
                                            <div class="card-body">
                                            <form method="post" class="form2" id="f_' . $uniqueId . '">
                                                <h5 class="card-title" id="name_p_' . $uniqueId . '">' . $row['Name'] . '</h5>
                                                <br>
                                                <p class="card-text" id="hours_p_' . $uniqueId . '">الساعات التطوعية : ' . $row['Hours_C'] . '</p>
                                                <p id="count_p_' . $uniqueId . '">العدد المطلوب : ' . $row['Count'] . '</p>
                                                <input name="card_id2" type="hidden" value="' . $row['id_C'] . '">
                            
                                                <button class="edit-btn" data-card-id="' . $uniqueId . '" type="button" class="btn btn-outline-warning btn-lg" style="font-weight: 400; font-size: 21px; padding: 3px; width: 80px; margin: auto; margin-bottom:10px; margin-left:10px; outline: 2px solid yellow; color: black; ">تعديل</button>
                                                <button data-card-id="' . $uniqueId . '" name ="delete" type="submit" class="btn btn-outline-danger btn-lg" style="font-weight: 400; font-size: 21px; padding: 3px; width: 60px; margin: auto; margin-bottom:10px; outline: 2px solid yellow; color: black; ">حذف</button>
                            
                                            </form>
                            
                                            </div>
                            
                                            <div class="card-footer">
                                                <small class="text-muted">وقت الاضافة : ' . $row['add_date'] . '</small>
                                            </div>
                                        </div>
                                        ';
                                        }
                                    } else {
                                        echo '<h1>لم يتم العثور على فرص</h1>';
                                    }
                                }
                                ?>
                            </div>
                        </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <form method='get' class="div-h3">

                            </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener("click", function (event) {
        if (event.target.classList.contains("edit-btn")) {
            var cardId = event.target.getAttribute("data-card-id");
            var nameP = document.getElementById('name_p_' + cardId);
            var hoursP = document.getElementById("hours_p_" + cardId);
            var countP = document.getElementById("count_p_" + cardId);

            var NameInput = document.createElement("input");
            var hoursInput = document.createElement("input");
            var countInput = document.createElement("input");

            NameInput.type = "text";
            NameInput.value = nameP.textContent;
            hoursInput.type = "number";
            hoursInput.value = hoursP.textContent.split(": ")[1];
            countInput.type = "number";
            countInput.value = countP.textContent.split(": ")[1];

            NameInput.setAttribute('name', 'new_name');
            hoursInput.setAttribute('name', 'new_hours');
            countInput.setAttribute('name', 'new_count');

            hoursP.parentNode.replaceChild(hoursInput, hoursP);
            countP.parentNode.replaceChild(countInput, countP);
            nameP.parentNode.replaceChild(NameInput, nameP);

            // Remove the "تعديل" button
            event.target.remove();

            // Create the "زر جديد" button for this card
            var newButton = document.createElement("button");
            newButton.classList.add("new-btn");
            newButton.setAttribute("data-card-id", cardId);
            newButton.type = "submit";
            newButton.className = "btn btn-outline-primary btn-lg";
            newButton.style.cssText = "font-weight: 400; font-size: 21px; padding: 3px; width: 80px; margin: auto; margin-bottom:10px; outline: 2px solid blue; color: blue;";
            newButton.textContent = "زر جديد";
            newButton.setAttribute("name", "confirm");
            newButton.type = 'submit';
            newButton.setAttribute('class', 'new-btn')

            // Add a click event listener to the "زر جديد" button for handling further actions
            var formId = 'f_' + cardId;
            var f = document.getElementById(formId);
            f.appendChild(newButton);
        }
    });
</script>


<?php
if(isset($_POST['confirm'])){
    $newN = htmlentities(mysqli_escape_string($conn, $_POST['new_name']));
    $newH = htmlentities(mysqli_escape_string($conn, $_POST['new_hours']));
    $newC = htmlentities(mysqli_escape_string($conn, $_POST['new_count']));
    $card_id2 = htmlentities(mysqli_escape_string($conn, $_POST['card_id2']));
    $sql10 = "UPDATE `chanse` SET `Name`='$newN',`Hours_C`='$newH',`Count`='$newC' WHERE `id_C`='$card_id2'";
    if (mysqli_query($conn, $sql10)) {
        echo 'تم الارسال بنجاح.';
    } else {
        echo 'حدث خطأ أثناء الإرسال: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
if (isset($_POST['delete'])) {
    $card_id2 = htmlentities(mysqli_escape_string($conn, $_POST['card_id2']));

    $sql11 = "DELETE FROM `chanse` WHERE `id_C`='$card_id2'";
    if (mysqli_query($conn, $sql11)) {
        echo 'تم الحذف بنجاح.';
    } else {
        echo 'حدث خطأ أثناء الحذف: '. mysqli_error($conn);
    }

}
?>
                </div>
            </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../JS/nav.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js
    "></script>
    <script src="../JS/Students.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>