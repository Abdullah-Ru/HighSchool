<?php
if (isset($_SESSION['login'])) {
    $user_id = $_SESSION['login'];
    $sql5 = "SELECT * FROM users WHERE id = '$user_id'";
    $result5 = mysqli_query($conn, $sql5); // استخدم mysqli_query
    
    if (mysqli_num_rows($result5) == 1) { // استخدم mysqli_num_rows
        $row5 = mysqli_fetch_array($result5); // استخدم $result5 بدلاً من $reult5
    } else {
        echo "لم يتم العثور على مستخدم بهذا الـ ID";
    }
    if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}
$op = validate($_POST['op']);
$np = validate($_POST['np']);
$c_np = validate($_POST['c_np']);
if(empty($op)){
  header("Location: ../HTML/myaccount.php#account-change-password?error");
  exit();
}else if(empty($np)){
  header("Location: ../HTML/myaccount.php#account-change-password?error");
  exit();
}else if($np !== $c_np){
  header("Location: ../HTML/myaccount.php#account-change-password?error=The confirmation password  does not match");
  exit();
}else {
    // hashing the password
    $op = $op;
    $np = $np;
    $id = $_SESSION['login'];

    $sql3 = "SELECT password
            FROM users WHERE 
            id='$id' AND password='$op'";
    $result3 = mysqli_query($conn, $sql3);
    if(mysqli_num_rows($result3) === 1){
        
        $sql_2 = "UPDATE users
                  SET password='$np'
                  WHERE id='$id'";
        mysqli_query($conn, $sql_2);
        header("Location: ../HTML/myaccount.php#account-change-password?success=Your password has been changed successfully");
        exit();

    }else {
        header("Location: ../HTML/myaccount.php#account-change-password?error=Incorrect password");
        exit();
    }

}
}
}

?>