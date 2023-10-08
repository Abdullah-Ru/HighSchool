<?php
function login(){
	global $conn,$logID,$logpass;
    if(isset($_POST['login'])){
		$logID = htmlentities(mysqli_escape_string($conn,$_POST['ID']));
        $logpass = htmlentities(mysqli_escape_string($conn,$_POST['pass']));
        if (isset($_POST['stay'])) {
            $stay = htmlentities(mysqli_escape_string($conn,$_POST['stay']));
            if ($stay == 1) {
                setcookie('ID',$logID,time()+8640000,'/');
                setcookie('pass', $logpass,time()+8640000,'/');
            }
        }
        $sql = "SELECT `id` ,`ID_sa`, `password` FROM `users` WHERE `ID_sa` = '$logID' AND `password` = '$logpass'";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_array($result);

		
			if($row['ID_sa']===$logID){
				if($row['password']===$logpass){
					$_SESSION['login']=$row['id'];
					}
				}
			if($row['ID_sa']!==$logID){
				if($row['password']!==$logpass){
					header('Location:login.php?error');
					}
				
				}
                return $row;

		}
	}
function is_log_in(){
	if(isset($_SESSION['login'])){
		return true;
		}	
	}
function logout(){
	session_destroy();
	$_SESSION['login'] = false;
	header('Location: ../HTML/Homepage.php');
	}
?>