<?php
/**
 * hủy biến session user
 * redirect về login
 */
session_start();
unset($_SESSION['user']);
header("location:login.php");
?>