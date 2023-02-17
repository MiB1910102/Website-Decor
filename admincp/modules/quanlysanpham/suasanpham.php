<?php
$sql = "SELECT * FROM `tbl_product` WHERE id_product='$_GET[id]' LIMIT 1";
$query_sua = mysqli_query($mysqli, $sql);
?>
<form action="../../../../Mecuti/admincp/modules/quanlysanpham/xulysanpham.php?idsp=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <th>
                <h2>Sửa sản phẩm</h2>
            </th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($query_sua)) { ?>
            <tr>
                <th>ID sản phẩm:</th>
                <td> <input type="text" class="form-control" id="validationTooltip01" value="<?php echo $row['id_product'] ?>" name="idsanpham" required></td>
            </tr>
            <tr>
                <th>Danh mục sản phẩm:</th>
                <td>
                    <select name="danhmucsanpham">
                        <?php
                        $sql_danhmuc = "SELECT * FROM `tbl_category` ";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            if ($row_danhmuc['id_category'] == $row['id_category']) {
                        ?>
                                <option selected value="<?php echo $row_danhmuc['id_category'] ?>"><?php echo $row_danhmuc['name_category'] ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row_danhmuc['id_category'] ?>"><?php echo $row_danhmuc['name_category'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Tên sản phẩm:</th>
                <td> <input type="text" class="form-control" id="validationTooltip01" value="<?php echo $row['name_product'] ?>" name="tensanpham" required></td>
            </tr>
            <tr>
                <th>Giá sản phẩm:</th>
                <td> <input type="text" class="form-control" id="validationTooltip01" value="<?php echo $row['gia_product'] ?>" name="giasanpham" required></td>
            </tr>
            <tr>
                <th>Số lượng sản phẩm:</th>
                <td> <input type="text" class="form-control" id="validationTooltip01" value="<?php echo $row['sl_product'] ?>" name="slsanpham" required></td>
            </tr>
            <tr>
                <th>Hình ảnh sản phẩm:</th>
                <td> <input type="file" class="form-control" id="validationTooltip01" value="" name="hinhanhsanpham">
                    <img src="quanlysanpham/uploads/<?php echo $row['hinhanh_product'] ?>" width="30%">
                </td>
            </tr>
            <tr>
                <th>Nội dung sản phẩm:</th>
                <td><textarea name="noidungsanpham" rows="5" cols="50"><?php echo $row['noidung_product'] ?></textarea></td>
            </tr>
            <tr>
                <th>Tình trạng sản phẩm:</th>
                <td>
                    <select name="tinhtrangsanpham">
                        <?php
                        if ($row['tinhtrang_product'] == 1) {
                        ?>
                            <option value="1" selected>Hiển thị</option>
                            <option value="0">Ẩn</option>
                        <?php
                        } else {
                        ?>
                            <option value="1">Hiển thị</option>
                            <option value="0" selected>Ẩn</option>
                        <?php
                        } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input class="btn btn-secondary" type="submit" value="Sửa sản phẩm" name="suasanpham"></td>
            </tr>
        <?php
        } ?>
    </table>
</form>