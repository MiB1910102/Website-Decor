<?php
include("../Mecuti/admincp/config/connect.php");
$tukhoa = $_POST['tukhoa'];
if($tukhoa!=""){
$sql_i = "SELECT * FROM `tbl_product` WHERE `tbl_product`.`name_product` LIKE  '%$tukhoa%'";
$query = mysqli_query($mysqli, $sql_i);
}else{
    header('Location:http://localhost:8080/Mecuti/index.php?quanly=trangchu'); 
}
?>
<div class="maincontent">
    <h3>Từ khóa tìm kiếm: <?php echo $tukhoa?></h3>
    <div class="product_row">
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <div class="product_col">
                <img src="./images/<?php echo $row['hinhanh_product'] ?>" class="card-img-top" alt="...">
                <div class="product_content text-center">
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_product']?>" class="title" style="text-decoration: none; color:black; font-weight: 600; font-size: 20px;" href="index.php?quanly=sanpham&id=<?php echo $row['id_product'] ?>" class=""><?php echo $row['name_product'] ?></a>
                    <p style="font-size: 15px; font-weight: 500;" class="card-text">Giá: <?php echo number_format($row['gia_product']) . 'VNĐ' ?></p>
                   <input type="submit" name="themvaogiohang" value="Thêm vào giỏ hàng" class="button">
                </div>
            </div>

        <?php
        }
        ?>
    </div>
</div>