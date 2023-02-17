<?php

$sql_i = "SELECT * FROM `tbl_product`";
$query = mysqli_query($mysqli, $sql_i);
?>
<div class="maincontent">
    <h3>Sản phẩm mới nhất</h3>
    <div class="product_row">
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <div class="product_col">
                <img src="./images/<?php echo $row['hinhanh_product'] ?>" class="card-img-top" alt="...">
                <form action="pages/main/themgiohang.php?id=<?php echo $row['id_product'] ?>" method="POST">
                <div class="product_content text-center">
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_product']?>" class="title" style="text-decoration: none; color:black; font-weight: 600; font-size: 20px;" href="index.php?quanly=sanpham&id=<?php echo $row['id_product'] ?>" class=""><?php echo $row['name_product'] ?></a>
                    <p style="font-size: 15px; font-weight: 500;" class="card-text">Giá: <?php echo number_format($row['gia_product']) . 'VNĐ' ?></p>
                   <input type="submit" name="themvaogiohang" value="Thêm vào giỏ hàng" class="button">
                </div>
                </form>
            </div>

        <?php
        }
        ?>
    </div>
</div>