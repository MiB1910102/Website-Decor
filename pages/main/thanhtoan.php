<?php
include '../Mecuti/admincp/config/connect.php';
$id_cart = $_SESSION['logina'][1] . date('hisdmY');
$email_user_cart = $_SESSION['logina'][1];
$status = 1;
$list_product_cart_json = json_encode($_SESSION['logina']['cart']);
if ($_SESSION['logina']['cart'] != NULL) {
        $sql_cart = "INSERT INTO `tbl_cart` (`id_cart`, `email_user_cart`, `status_cart`, `list_product_cart`,`address_user_cart`) VALUES ('$id_cart','$email_user_cart','$status','$list_product_cart_json','$_POST[addres]') ";
        $query = mysqli_query($mysqli, $sql_cart);

    echo '<div class="xacnhan_thanhtoan">
    <p>Đặt Hàng Thành Công!</p>
    <button><a href="index.php?quanly=trangchu">Tiếp tục</a></button>
</div>';
} else {
    header('Location:index.php?quanly=giohang');
}
