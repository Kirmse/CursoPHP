<?php 
session_start();
if(!$_SESSION['acesso-restrito']){
    echo "<script>window.location.replace('login.php');</script>";
}
?>