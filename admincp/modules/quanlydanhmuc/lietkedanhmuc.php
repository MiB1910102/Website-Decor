<?php
$sql = "SELECT * FROM `tbl_category` ";
$query_lietke = mysqli_query($mysqli, $sql);
?>
<table style="width:100%;margin:10px;" >
    <tr>
        <th>
            <h2 style="font-weight: 600;" >Liệt kê danh mục sản phẩm</h2>
        </th>
    </tr>
    <tr>
        <th style="width:40%;">ID danh mục sản phẩm</th>
        <th style="width:30%;">Tên danh mục sản phẩm</th>
        <th style="width:30%;">Quản lý</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($query_lietke)) {
    ?>
        <tr>
            <td><p style="font-size:18px; " ><?php echo $row['id_category'] ?></p></td>
            <td><p style="font-size:18px; "><?php echo $row['name_category'] ?></p></td>
            <td>
                <a class="btn btn-danger" href="../../../Mecuti/admincp/modules/quanlydanhmuc/xulydanhmuc.php?action=quanlydanhmucsanpham&query=xoa&id=<?php echo $row['id_category'] ?>">Xóa</a>
                <a class="btn btn-warning" href="../../../Mecuti/admincp/modules/index.php?action=quanlydanhmucsanpham&query=sua&id=<?php echo $row['id_category'] ?>">Sửa</a>

            </td>
        </tr>
    <?php
    }
    ?>
</table>