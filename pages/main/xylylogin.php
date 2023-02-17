<?php
session_start();
include("../../admincp/config/connect.php");
if (isset($_GET['login'])) {
$email =  $_POST['email'];
$pass = md5($_POST['pass']);
$sql = "SELECT * FROM `tbl_customer` WHERE `tbl_customer`.`email_user`= '$email' AND `tbl_customer`.`pass_user` = '$pass' ";
$query = mysqli_query($mysqli, $sql);
$user = mysqli_fetch_array($query);
}
if($user != ""){
    $_SESSION['logina'] = array();
    array_push($_SESSION['logina'],$user['name_user']);
    array_push($_SESSION['logina'],$user['email_user']); 
    header('Location:../../index.php?quanly=trangchu');
}
    else{
    header('Location:../../index.php?quanly=dangnhap'); 
    }

if (isset($_GET['logout'])) {
unset($_SESSION['logina']);
header('Location:../../index.php?quanly=trangchu');
    }

