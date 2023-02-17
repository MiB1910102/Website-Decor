<?php

$sql = "SELECT * FROM `tbl_product`WHERE `tbl_product`.`id_product`= '$_GET[id]' ";
$query = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_array($query)) {
?>
    <div class="product_col_title">
        <div class="row_title_product">
            <div class="title_l_product">
                <img width="100px" src="./images/<?php echo $row['hinhanh_product'] ?>" class="" alt="...">
            </div>
            <form action="pages/main/themgiohang.php?id=<?php echo $row['id_product'] ?>" method="POST">
                <div class="title_r_product">
                    <h3>Tên sản phẩm: <?php echo $row['name_product'] ?></h3>
                    <p class="">Giá: <?php echo number_format($row['gia_product']) . 'VNĐ' ?></p>
                    <input type="submit" value="Thêm vào giỏ hàng" name="themvaogiohang" class="button">
                </div>
            </form>
        </div>
        <div class="row_content_product">
            <h2>Mô Tả</h2>
            <hr>
            <p><?php echo $row['noidung_product']?></p>
        </div>
    </div>
<?php
}
?>