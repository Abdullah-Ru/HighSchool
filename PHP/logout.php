<?php
session_start();
require_once('../PHP/connection.php');
require_once('../PHP/loginF.php');
is_log_in();
if(is_log_in()) {
    logout();
}
?>