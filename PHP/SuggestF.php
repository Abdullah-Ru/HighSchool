<?php
require_once('../PHP/connection.php');
require_once('../PHP/myaccount.php');
if(isset($_POST['subm'])){
    $lognamep = $row5['username'];
    $logname = htmlentities(mysqli_escape_string($conn, $_POST['name']));
    $logphone = htmlentities(mysqli_escape_string($conn, $_POST['phone']));
    $logm = htmlentities(mysqli_escape_string($conn, $_POST['message']));
    $sql = "INSERT INTO suggest (Name_3, Phone, Message) VALUES ('$lognamep', '$logphone', '$logm')";

    if (mysqli_query($conn, $sql)) {
        echo 'تم الارسال بنجاح.';
    } else {
        echo 'حدث خطأ أثناء الإرسال: ' . mysqli_error($conn);
    }

    mysqli_close($conn); // إغلاق اتصال قاعدة البيانات
}
?>