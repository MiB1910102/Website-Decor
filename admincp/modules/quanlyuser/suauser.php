<?php
$sql = "SELECT * FROM `tbl_customer` WHERE email_user ='$_GET[email]' LIMIT 1";
$query_sua = mysqli_query($mysqli, $sql);
?>
<form action="../../../../Mecuti/admincp/modules/quanlyuser/xulyuser.php?email=<?php echo $_GET['email'] ?>" method="POST">
    <table>
        <tr>
            <th>
                <h2>Sửa Usser</h2>
            </th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($query_sua)) { ?>
            <tr>
                <th>Username mới:</th>
                <td> <input type="text" class="form-control" id="validationTooltip01" value="<?php echo $row['name_user'] ?>" name="username" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </td>
            </tr>
            <tr>
                <th>Password mới:</th>
                <td> <input type="text" class="form-control" id="validationTooltip01" value="**********" name="password" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </td>
            </tr>
            <tr>
                <th>Phone mới:</th>
                <td> <input type="text" class="form-control" id="validationTooltip01" value="<?php echo $row['phone_user'] ?>" name="phone" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </td>
            </tr>
            <tr>
                <td><input class="btn btn-secondary" type="submit" value="Sửa Usser" name="suauser"></td>
            </tr>
        <?php
        }
        ?>
    </table>
</form>