<?php
$sql = "SELECT * FROM `tbl_customer` ";
$query_lietke = mysqli_query($mysqli, $sql);
?>
<table style="width:100%;margin:10px;" >
    <tr>
        <th>
            <h2 style="font-weight: 600;" >Liệt kê User</h2>
        </th>
    </tr>
    <tr>
        <th style="width:20%;">Username</th>
        <th style="width:30%;">Password</th>
        <th style="width:15%;">Email</th>
        <th style="width:15%;">Phone</th>
        <th style="width:10%;">Quản lý</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($query_lietke)) {
    ?>
        <tr>
            <td><p style="font-size:18px; " ><?php echo $row['name_user'] ?></p></td>
            <td><p style="font-size:18px; "><?php echo $row['pass_user'] ?></p></td>
            <td><p style="font-size:18px; " ><?php echo $row['email_user'] ?></p></td>
            <td><p style="font-size:18px; "><?php echo $row['phone_user'] ?></p></td>
            <td>
                <a class="btn btn-danger" href="../../../Mecuti/admincp/modules/quanlyuser/xulyuser.php?action=quanlyuser&query=xoa&email=<?php echo $row['email_user'] ?>">Xóa</a>
                <a class="btn btn-warning" href="../../../Mecuti/admincp/modules/index.php?action=quanlyuser&query=sua&email=<?php echo $row['email_user'] ?>">Sửa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>