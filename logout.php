<?php

session_start();
unset($_SESSION['ADMIN_LOGIN']);
unset($SESSION['ADMIN_USERNAME']);
header('location:login.php');
die();
?>