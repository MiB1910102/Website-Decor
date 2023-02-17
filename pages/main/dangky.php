<?php

if (isset($_POST['dangky'])) {
    $nameKH = $_POST['name'];
    $passKH = md5($_POST['pass']);
    $emailKH = $_POST['email'];
    $phoneKH = $_POST['phone'];
    $user_array = "SELECT * FROM `tbl_customer` ";
    $user = mysqli_query($mysqli, $user_array);
    $flag = false;
    foreach ($user as $temp) {
        if ($temp['email_user'] == $emailKH) {
            $flag = true;
        }
    }
    if ($flag == false) {
        $sql = "INSERT INTO `tbl_customer` (`name_user`, `pass_user`, `email_user`, `phone_user`) VALUES ('$nameKH', '$passKH', '$emailKH', '$phoneKH') ";
        $resigter = mysqli_query($mysqli, $sql);
        header('Location:index.php?quanly=dangnhap');
} else {
    echo '<script>alert("Email đã được sử dụng vui lòng nhập lại!")</script>';
}
}
?>

<div class="resigter">
    <?php
    ?>
    <div class="title_sign"> Đăng ký tài khoản </div>
    <form action="" method="post" autocomplete="">
        <div class="row_resigter">
            <div class="col_resigter">
                <label class="row_lable_resigter" for="">Họ và Tên:</label>
                <label class="row_lable_resigter" for="">Email:</label>
                <label class="row_lable_resigter" for="">Mật khẩu:</label>
                <label class="row_lable_resigter" for="">Số Điện Thoại:</label>
            </div>
            <div class="col_resigter">
                <input class="row_input_resigter" type="text" name="name">
                <input class="row_input_resigter" type="text" name="email">
                <input class="row_input_resigter" type="text" name="pass">
                <input class="row_input_resigter" type="text" name="phone">
            </div>
        </div>

        <div class="row_re">
            <input class="row_button_resigter" type="submit" name="dangky" value="Đăng ký">
        </div>
    </form>
</div>