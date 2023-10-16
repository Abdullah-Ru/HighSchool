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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <link rel="stylesheet" href="../CSS/Homepage.css">
    <title>Responsive Dashboard Design #1 | AsmrProg</title>
    <style>
        .input {
            max-width: 190px;
            padding: 12px;
            border: none;
            border-radius: 4px;
            box-shadow: 2px 2px 7px 0 rgb(0, 0, 0, 0.2);
            outline: none;
            color: dimgray;
        }
        .input2 {
            max-width: 190px;
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
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;500;600;700&display=swap');

body {
    font-family: "IBM Plex Sans Arabic";
    animation: fadeInUp 0.5s;
}

/* Navigation Styles */
@media only screen and (max-width: 768px) {
    .navbar-nav {
        margin-left: 0;
        display: flex;
        justify-content: flex-start; /* تحديد محاذاة العناصر إلى اليمين */
        align-items: center; /* توسيط العناصر عمودياً */
    }

    .navbar-nav .nav-item {
        border-right: none;
        padding-left: 10px; /* ترك مساحة مناسبة بين العناصر */
        padding-right: 0; /* إزالة التموج الأيمن للعناصر */
    }

    .nav.scrolled {
        background-color: white;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }
}

#btn_primary {
    padding: 3% 15%;
    /* Adjust button padding */
}

#btn_primary:hover {
    background-color: red;
    color: whitesmoke;
}

#outline_btn {
    padding: 3% 10%;
    /* Adjust button padding */
    outline: 2px solid #2DC653;
    color: #2DC653;
}

#outline_btn:hover {
    background-color: #2DC653;
    color: whitesmoke;
}

.lead {
    font-weight: 500;
    font-size: 23px;
    color: #787878;
}

main{
    width: 100%;
}
.nav {
    transition: .25s ease-in-out;
}

.nav-link {
    color: #1e1e1e;
    font-size: 21px;
    font-weight: 500;
    transition: 0.20s ease-in-out;
}

#active:hover {
    color: #2DC653;
}
.navbar-nav {
    margin-right: 10%;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;

}
.navbar-nav .nav-item {
    text-align: center;
        border-right: 1px solid #ccc;
    padding-left: 20px;
}
.navbar-toggler:focus {
    outline: none;
    border: none;
}

.nav.scrolled {
    background-color: white;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}
.container2 {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column; /* Ensure content is centered vertically */
}

main {
  text-align: center; /* Center the text within the main element */
}

.form {
  width: 100%; /* Ensure the form takes the full width */
  max-width: 400px; /* Adjust the max width as needed */
  padding: 20px;
  margin: top 50% ;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#f_ {
  width: 100%; /* Ensure the form takes the full width */
  max-width: 400px; /* Adjust the max width as needed */
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Remove individual positioning for form elements */
input, button, hr {
  margin: 10px 0;
  width: 100%;
}


button#outline_btn {
  width: 100%; /* Make the button full width */
  margin: 10px 0;
}
.navbar-toggler{
    max-width: 60px;
}


h2{
    margin-right:10px;
}
input{
    margin-right:10px;
}
.input2{
    margin-bottom:70px;
    
}
    </style>
</head>

<body dir="rtl">

    <!-- Sidebar Section -->
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
                    <a class="nav-link" href="../HTML/Students.php" id="active">الطلاب</a>
                </li>
                <li class="nav-item border-left">
                    <a class="nav-link" href="../HTML/add_c.php" id="nav2">أضافة فرصة</a>
                </li>
                <li class="nav-item border-left">
                    <a class="nav-link" href="#" id="nav2">الفرص المقترحة</a>
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
        <!-- End of Sidebar Section -->
        
        <!-- Main Content -->
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
                    style="font-weight: 400; font-size: 21px;  padding: 8px; position: relative; top: 90px; right:10px;">اضافة</button>
            </form>
            <div style="position: relative; top: 200px;">
                <form id="search" method='post' class="form2">
                    <button id="outline_btn" type="submit" name='Search2' class="btn btn-outline btn-lg"
                        style="font-weight: 400; font-size: 21px;  padding: 8px;">البحث</button>
                </form>
                <br><br>
                <div class="row row-cols-1 row-cols-md-3 g-4" id="cq">
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

                    <button class="edit-btn" data-card-id="' . $uniqueId . '" type="button" class="btn btn-outline-warning btn-lg" style="font-weight: 400; font-size: 21px; padding: 3px; width: 60px; margin: auto; margin-bottom:10px; outline: 2px solid yellow; color: black; ">تعديل</button>
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
        </main>
        <!-- Right Section -->


             

            </div>
            <!-- End of Nav -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../JS/nav.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- <script src="../JS/Admin.js"></script> -->
</body>

</html>
