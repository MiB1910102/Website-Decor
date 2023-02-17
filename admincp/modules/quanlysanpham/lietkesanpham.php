<?php
$sql = "SELECT * FROM `tbl_product`,`tbl_category` WHERE `tbl_product`.`id_category`=`tbl_category`.`id_category`";
$query_lietke_sp = mysqli_query($mysqli, $sql);
?> <h2 s>Liệt kê sản phẩm</h2>
<table class="lk">

    <tr>
        <th>STT</th>
        <th>ID sản phẩm</th>
        <th>ID danh mục</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Số lượng</th>
        <th>Hình ảnh</th>
        <th>Nội dung</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_sp)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['id_product'] ?></td>
            <td><?php echo $row['name_category'] ?></td>
            <td><?php echo $row['name_product'] ?></td>
            <td><?php echo $row['gia_product'] ?></td>
            <td><?php echo $row['sl_product'] ?></td>
            <td><img src="quanlysanpham/uploads/<?php echo $row['hinhanh_product'] ?>" height="100px" width="100px" style="border-radius:10px;"></td>
            <td><?php echo substr($row['noidung_product'],0,78).'....' ?></td>
            <td><?php if ($row['tinhtrang_product'] == 1) {
                    echo 'Hiện';
                } else {
                    echo 'Ẩn';
                } ?></td>
            <td>
                <div class="ql">
                <a class="btn btn-danger" href="../../../Mecuti/admincp/modules/quanlysanpham/xulysanpham.php?action=quanlysanpham&query=xoa&id=<?php echo $row['id_product'] ?>">Xóa</a>
                <a class="btn btn-warning" href="../../../Mecuti/admincp/modules/index.php?action=quanlysanpham&query=sua&id=<?php echo $row['id_product'] ?>">Sửa</a>
</div>
            </td>
        </tr>
    <?php
    }
    ?>
</table>