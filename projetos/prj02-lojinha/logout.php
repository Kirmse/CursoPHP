<?php
session_start();
$_SESSION['acesso-restrito'] = false;
echo "<script>window.location.replace('login.php');</script>";
?>