<?php
include("../../config/connect.php");
$idsp = $_POST['idsanpham'];
$tensp = $_POST['tensanpham'];
$giasp = $_POST['giasanpham'];
$slsp = $_POST['slsanpham'];
$noidungsp = $_POST['noidungsanpham'];
$tinhtrangsp = $_POST['tinhtrangsanpham'];
$danhmucsp = $_POST['danhmucsanpham'];
$hinhanhsp = $_FILES['hinhanhsanpham']['name'];
$hinhanhsp_tmp = $_FILES['hinhanhsanpham']['tmp_name'];
if (isset($_POST['themsanpham'])) {
    $sql = "INSERT INTO `tbl_product` (`id_product`,`name_product`,`gia_product`,`sl_product`,`hinhanh_product`,`noidung_product`,`tinhtrang_product`,`id_category`) VALUES ('$idsp','$tensp','$giasp','$slsp','$hinhanhsp','$noidungsp','$tinhtrangsp','$danhmucsp')";
    mysqli_query($mysqli, $sql);
    move_uploaded_file($hinhanhsp_tmp, 'uploads/' . $hinhanhsp);
    header('Location: http://localhost:8080/Mecuti/admincp/modules/index.php?action=quanlysanpham&query=them');
} else if (isset($_POST['suasanpham'])) {
    if ($hinhanhsp != "") {
        $sql = "UPDATE `tbl_product` SET `id_product` = '$idsp', `name_product` = '$tensp', `gia_product` = '$giasp', `sl_product` = '$slsp',`hinhanh_product` = '$hinhanhsp', `noidung_product` = '$noidungsp', `tinhtrang_product` = '$tinhtrangsp',`id_category` = '$danhmucsp' WHERE `tbl_product`.`id_product` = '$_GET[idsp]' ";
    } else {
        $sql = "UPDATE `tbl_product` SET `id_product` = '$idsp', `name_product` = '$tensp', `gia_product` = '$giasp', `sl_product` = '$slsp',`noidung_product` = '$noidungsp', `tinhtrang_product` = '$tinhtrangsp',`id_category` = '$danhmucsp' WHERE `tbl_product`.`id_product` = '$_GET[idsp]' ";
    }
    mysqli_query($mysqli, $sql);
    header('Location: http://localhost:8080/Mecuti/admincp/modules/index.php?action=quanlysanpham&query=them');
} else if ($_GET['query'] == 'xoa') {
    $sql_img = "SELECT * FROM `tbl_product` WHERE `tbl_product`.`id_product` = '$_GET[id]' LIMIT 1";
    $query =     mysqli_query($mysqli, $sql_img);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['hinhanh_product']);
    }
    $sql = "DELETE FROM `tbl_product` WHERE `tbl_product`.`id_product` = '$_GET[id]' ";
    mysqli_query($mysqli, $sql);
    header('Location: http://localhost:8080/Mecuti/admincp/modules/index.php?action=quanlysanpham&query=them');
}
