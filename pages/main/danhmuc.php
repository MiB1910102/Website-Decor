<?php
$sql = "SELECT * FROM `tbl_product` WHERE `tbl_product`.`id_category`= '$_GET[id]' ";
$sql_title = "SELECT * FROM `tbl_category` WHERE `tbl_category`.`id_category`= '$_GET[id]' ";
$query = mysqli_query($mysqli, $sql);
$query_title = mysqli_query($mysqli, $sql_title);
$row_title = mysqli_fetch_array($query_title);
?>
<div class="maincontent">
<h3>Danh mục sản phẩm: <?php echo $row_title['name_category'] ?></h3>
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