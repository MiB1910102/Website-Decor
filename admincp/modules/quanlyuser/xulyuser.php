<?php
include("../../config/connect.php");
if (isset($_POST['suauser'])) {
    $pass = md5($_POST['password']);
    $sql = "UPDATE `tbl_customer` SET `name_user` = '$_POST[username]',`pass_user` = '$pass',`phone_user` = '$_POST[phone]' WHERE `tbl_customer`.`email_user` = '$_GET[email]' ";
    mysqli_query($mysqli, $sql);
    header('Location: http://localhost:8080/Mecuti/admincp/modules/index.php?action=quanlyuser&query=them');
}
if ($_GET['query'] == 'xoa') {
    $sql = "DELETE FROM `tbl_customer` WHERE `tbl_customer`.`email_user` = '$_GET[email]' ";
    mysqli_query($mysqli, $sql);
    header('Location: http://localhost:8080/Mecuti/admincp/modules/index.php?action=quanlyuser&query=them');
}
