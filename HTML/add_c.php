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
    <link rel="stylesheet" href="../CSS/Admin.css">
    <link rel="stylesheet" href="../CSS/Homepage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
        
    </style>
</head>

<body dir="rtl">

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="../IMG/logo.png">
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

                <a href="#Suggest">
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
            <form method="post">
                <h2 style="font-size: 30px; position: relative; right: 85px; top: 20px;">اضافة فرصة</h2>
                <input placeholder="اسم الفرصة" class="input" name="name_c" type="text"
                    style="position: relative; right: 70px; top: 50px;">
                <br>
                <input placeholder="الساعات التطوعية للفرصة" class="input" name="hours_c" type="number"
                    style="position: relative; right: 70px; top: 70px;">
                <br>
                <input placeholder="الساعات التطوعية للفرصة" class="input" name="count_c" type="number"
                    style="position: relative; right: 70px; top: 90px;">
                <hr style="background-color: black; height: 2px; position: relative; top: 170px; width: 900px;">
                <button id="outline_btn" type="submit" name='add2' class="btn btn-outline btn-lg"
                    style="font-weight: 400; font-size: 21px;  padding: 8px; position: relative; top: 80px; right:70px;">اضافة</button>
            </form>
            <div style="position: relative; top: 200px;">
                <form id="search" method='post'>
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
                <form method="post" id="f_' . $uniqueId . '">
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

                <div class="profile" id="profile">
    <div class="info">
        <p>أهلا, <b>أ.أحمد</b></p>
        <small class="text-muted">مشرف التطوع</small>
    </div>
</div>

            </div>
            <!-- End of Nav -->
        </div>
    </div>

    <!-- <script src="../JS/Admin.js"></script> -->
</body>

</html>
