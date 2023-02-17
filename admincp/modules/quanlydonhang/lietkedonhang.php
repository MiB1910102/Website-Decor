<?php
$sql = "SELECT * FROM `tbl_cart` ";
$query_lietke = mysqli_query($mysqli, $sql);
// print_r($query_lietke);
?>
<table style="width:100%;margin:10px;">
    <tr>
        <th>
            <h2 style="font-weight: 600;">Liệt kê Đơn hàng</h2>
        </th>
    </tr>
    <tr>
        <th style="width:18%;">ID Cart</th>
        <th style="width:18%;">Email</th>
        <th style="width:5%;">Status</th>
        <th style="width:30%;">Danh sách sản phẩm</th>
        <th style="width:20%;">Địa chỉ</th>
        <th style="width:9%;">Quản lý</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($query_lietke)) {
        $list = json_decode($row['list_product_cart']);
        $array_cart = array();
        foreach ($list as $cart) {
            // echo '<pre>';
            $array = json_decode(json_encode($cart), true);
            array_push($array_cart, $array['idsp']);
        }
    ?>
        <tr>
            <td>
                <p style="font-size:18px; "><?php echo $row['id_cart'] ?></p>
            </td>
            <td>
                <p style="font-size:18px; "><?php echo $row['email_user_cart'] ?></p>
            </td>
            <td>
                <p style="font-size:18px; "><?php echo $row['status_cart'] ?></p>
            </td>
            <td>
                <p style="font-size:18px; "><?php foreach($array_cart as $id) echo '['.$id.']' ?></p>
            </td>
            <td>
                <p style="font-size:18px; "><?php echo $row['address_user_cart'] ?></p>
            </td>
            <td>
                <a class="btn btn-danger" href="../../../Mecuti/admincp/modules/quanlydonhang/xulydonhang.php?action=quanlydonhang&query=xoa&id=<?php echo $row['id_cart'] ?>">Xóa</a>
                <!-- <a class="btn btn-warning" href="../../../Mecuti/admincp/modules/index.php?action=quanlydonhang&query=sua&id=<?php echo $row['id_cart'] ?>">Sửa</a> -->
            </td>
        </tr>
    <?php
    }
    ?>
</table>