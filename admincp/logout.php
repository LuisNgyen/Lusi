<?php
session_start();
unset($_SESSION['loginadmin']);
header('location:../index.php');
?>

