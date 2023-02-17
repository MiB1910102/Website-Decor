<?php
include("../../config/connect.php");
// if (isset($_POST['themuser'])) {
//     $user_array = "SELECT * FROM `tbl_customer` ";
//     $user = mysqli_query($mysqli, $user_array);
//     $flag = false;
//     foreach ($user as $temp) {
//         if ($temp['email_user'] == $_POST['email']) {
//             $flag = true;
//         }
//     }
//     if ($flag == false) {
//         $sql = "INSERT INTO `tbl_customer` (`name_user`, `pass_user`,`email_user`, `phone_user`) VALUES ('$_POST[username]','$_POST[password]','$_POST[email]','$_POST[phone]' ) ";
//         mysqli_query($mysqli, $sql);
//         header('Location: http://localhost/Mecuti/admincp/modules/index.php?action=quanlyuser&query=them');
//     } else {
//         echo '<script>alert("Email đã được sử dụng vui lòng nhập lại!")</script>';
//     }

// }

// if (isset($_POST['suauser'])) {
//     $pass = md5($_POST['password']);
//     $sql = "UPDATE `tbl_customer` SET `name_user` = '$_POST[username]',`pass_user` = '$pass',`phone_user` = '$_POST[phone]' WHERE `tbl_customer`.`email_user` = '$_GET[email]' ";
//     mysqli_query($mysqli, $sql);
//     header('Location: http://localhost/Mecuti/admincp/modules/index.php?action=quanlyuser&query=them');
// }
if ($_GET['query'] == 'xoa') {
    $sql = "DELETE FROM `tbl_cart` WHERE `tbl_cart`.`id_cart` = '$_GET[id]' ";
    mysqli_query($mysqli, $sql);
    header('Location: http://localhost:8080/Mecuti/admincp/modules/index.php?action=quanlydonhang&query=lietke');
}
