<?php
$sql = "SELECT * FROM `tbl_category` WHERE id_category='$_GET[id]' LIMIT 1";
$query_sua = mysqli_query($mysqli, $sql);
?>
<form action="../../../../Mecuti/admincp/modules/quanlydanhmuc/xulydanhmuc.php?iddanhmuc=<?php echo $_GET['id'] ?>" method="POST">
    <table>
        <tr>
            <th>
                <h2>Sửa danh mục sản phẩm</h2>
            </th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($query_sua)) { ?>
            <tr>
                <th>ID danh mục sản phẩm mới:</th>
                <td> <input type="text" class="form-control" id="validationTooltip01" value="<?php echo $row['id_category'] ?>" name="id" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </td>
            </tr>
            <tr>
                <th>Tên danh mục sản phẩm mới:</th>
                <td> <input type="text" class="form-control" id="validationTooltip01" value="<?php echo $row['name_category'] ?>" name="tendanhmuc" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </td>
            </tr>
            <tr>
                <td><input class="btn btn-secondary" type="submit" value="Sửa danh mục sản phẩm" name="suadanhmuc"></td>
            </tr>
        <?php
        }
        ?>
    </table>
</form>