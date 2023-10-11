<?php
require_once('../PHP/connection.php');
require_once('../PHP/myaccount.php');
if(isset($_POST['add2'])){
    $logname = htmlentities(mysqli_escape_string($conn, $_POST['name_c']));
    $logH = htmlentities(mysqli_escape_string($conn, $_POST['hours_c']));
    $logC = htmlentities(mysqli_escape_string($conn, $_POST['count_c']));
    $sql10 = "INSERT INTO chanse (Name, Hours_C, Count) VALUES ('$logname', '$logH', '$logC')";
    if (mysqli_query($conn, $sql10)) {
        echo 'تم الارسال بنجاح.';
    } else {
        echo 'حدث خطأ أثناء الإرسال: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>