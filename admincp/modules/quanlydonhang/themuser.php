<?php
include("../../admincp/config/connect.php");
if (isset($_POST['themuser'])) {
    $user_array = "SELECT * FROM `tbl_customer` ";
    $user = mysqli_query($mysqli, $user_array);
    $flag = false;
    foreach ($user as $temp) {
        if ($temp['email_user'] == $_POST['email']) {
            $flag = true;
        }
    }
    if ($flag == false) {
        $sql = "INSERT INTO `tbl_customer` (`name_user`, `pass_user`,`email_user`, `phone_user`) VALUES ('$_POST[username]','$_POST[password]','$_POST[email]','$_POST[phone]' ) ";
        mysqli_query($mysqli, $sql);
        header('Location: http://localhost:8080/Mecuti/admincp/modules/index.php?action=quanlyuser&query=them');
    } else {
        echo '<script>alert("Email đã được sử dụng vui lòng nhập lại!")</script>';
    }}
?>
<!-- ../../../../Mecuti/admincp/modules/quanlyuser/xulyuser.php -->
<form action="" method="POST">
    <table style="width:60%;margin:10px;" >
        <tr>
            <th>
                <h2 style="font-weight: 600;">Thêm User</h2>
            </th>
        </tr>
        <tr>
            <th style="width:40%;">Username:</th>
            <td> <input type="text" class="form-control" id="validationTooltip01" value="" name="username" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </td>
        </tr>
        <tr>
            <th style="width:40%;">Password:</th>
            <td> <input type="text" class="form-control" id="validationTooltip01" value="" name="password" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </td>
        </tr>
        <tr>
        <tr>
            <th style="width:40%;">Email:</th>
            <td> <input type="text" class="form-control" id="validationTooltip01" value="" name="email" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </td>
        </tr>
        <tr>
            <th style="width:40%;">Phone:</th>
            <td> <input type="text" class="form-control" id="validationTooltip01" value="" name="phone" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </td>
        </tr>
        <tr>
            <td><input class="btn btn-secondary" type="submit" value="Thêm User" name="themuser" style="margin: 10px auto;"></td>
        </tr>
    </table>
</form>