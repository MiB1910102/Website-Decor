<form action="../../../../Mecuti/admincp/modules/quanlysanpham/xulysanpham.php" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <th>
                <h2>Thêm sản phẩm</h2>
            </th>
        </tr>
        <tr>
            <th>ID sản phẩm:</th>
            <td> <input type="text" class="form-control" id="validationTooltip01" value="" name="idsanpham" required></td>
        </tr>
        <tr>
            <th>Tên sản phẩm:</th>
            <td> <input type="text" class="form-control" id="validationTooltip01" value="" name="tensanpham" required></td>
        </tr>
        <tr>
            <th>Giá sản phẩm:</th>
            <td> <input type="text" class="form-control" id="validationTooltip01" value="" name="giasanpham" required></td>
        </tr>
        <tr>
            <th>Số lượng sản phẩm:</th>
            <td> <input type="text" class="form-control" id="validationTooltip01" value="" name="slsanpham" required></td>
        </tr>
        <tr>
            <th>Hình ảnh sản phẩm:</th>
            <td> <input type="file" class="form-control" id="validationTooltip01" value="" name="hinhanhsanpham" required></td>
        </tr>
        <tr>
            <th>Nội dung sản phẩm:</th>
            <td><textarea name="noidungsanpham" rows="5" cols="50"></textarea></td>
        </tr>
        <tr>
            <th>Danh mục sản phẩm:</th>
            <td>
                <select name="danhmucsanpham">
                    <?php
                    $sql_danhmuc = "SELECT * FROM `tbl_category` ";
                    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                    <option value="<?php echo $row_danhmuc['id_category']?>"><?php echo $row_danhmuc['name_category']?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <th>Tình trạng sản phẩm:</th>
            <td>
                <select name="tinhtrangsanpham">
                    <option value="1">Hiển thị</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input style="margin: 10px auto;" class="btn btn-secondary" type="submit" value="Thêm sản phẩm" name="themsanpham"></td>
        </tr>
    </table>
</form>