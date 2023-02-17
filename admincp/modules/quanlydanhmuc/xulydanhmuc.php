<?php
include("../../config/connect.php");
if (isset($_POST['themdanhmuc'])) {
    $sql = "INSERT INTO `tbl_category` (`id_category`, `name_category`) VALUES ('$_POST[id]','$_POST[tendanhmuc]' ) ";
    mysqli_query($mysqli, $sql);
    header('Location: http://localhost:8080/Mecuti/admincp/modules/index.php?action=quanlydanhmucsanpham&query=them');
}
if (isset($_POST['suadanhmuc'])) {
    $sql = "UPDATE `tbl_category` SET `name_category` = '$_POST[tendanhmuc]',`id_category` = '$_POST[id]' WHERE `tbl_category`.`id_category` = '$_GET[iddanhmuc]' ";
    mysqli_query($mysqli, $sql);
    header('Location: http://localhost:8080/Mecuti/admincp/modules/index.php?action=quanlydanhmucsanpham&query=them');
}
if ($_GET['query'] == 'xoa') {
    $sql = "DELETE FROM `tbl_category` WHERE `tbl_category`.`id_category` = '$_GET[id]' ";
    mysqli_query($mysqli, $sql);
    header('Location: http://localhost:8080/Mecuti/admincp/modules/index.php?action=quanlydanhmucsanpham&query=them');
}
