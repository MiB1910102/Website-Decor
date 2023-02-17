<?php
// session_start();
if (isset($_SESSION['logina']['1'])) {
    $email = $_SESSION['logina']['1'];
    $sql = "SELECT * FROM `tbl_customer` WHERE `tbl_customer`.`email_user` = '$email'";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
?>
    <div class="cart">
        <table class="cart_table" style="width: 100%;border: 1px solid rgb(200, 200, 200);margin-top: 10px;">

            <tr class="cart_title" style="text-align: center;font-size: 20px;color: #757575;">
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Quản lý</th>
            </tr>    
     <tr>
        <td colspan="7" style="height: 35px;"></td>
     </tr>
            <?php
            if (isset($_SESSION['logina']['cart'])) {
                $i = 0;
                $tongtien = 0;
                foreach ($_SESSION['logina']['cart'] as $cart) {
                    $i++;
                    $thanhtien = $cart['giasp'] * $cart['soluong'];
                    $tongtien += $thanhtien;
            ?><tr class="cart_product" style="text-align: center;">
                        <td>
                            <p style="font-size: 20px;font-weight: 600;color;color: #575757;" class="title_row"><?php echo $i ?></p>
                        </td>
                        <td>
                            <p style="font-size: 20px;font-weight: 600;color;color: #575757;" class="title_row"><?php echo $cart['namesp'] ?></p>
                        </td>
                        <td><img style="border-radius: 10px;margin: 10px 0 0 0;" width="100px" src="../../../Mecuti/admincp/modules/quanlysanpham/uploads/<?php echo $cart['hinhanhsp'] ?>" alt=""></td>
                        <td>
                            <p style="font-size: 20px;font-weight: 600;color;color: #575757;" class="title_row"><?php echo number_format($cart['giasp']) . 'VNĐ' ?></p>
                        </td>
                        <td>
                            <div class="update_sl" style="display: flex;flex-direction: row;justify-content: center;">
                                 <button style="width: 40px;border: 1px solid #a6a6a6;background-color: #9f7045;color: #d0d0d0;border-radius:7px 0px 0px 7px;"><a href="pages/main/themgiohang.php?tru=<?php echo $cart['idsp'] ?>" style="color: #fff;"><i class="fa fa-minus"></i></a></button>
                                <div class="title_row" style="width: 50px;border: 1px solid #a6a6a6;background-color: #d2d2d2;font-weight: 600;"><?php echo $cart['soluong'] ?></div>
                                <button style="width: 40px;border: 1px solid #a6a6a6;background-color: #9f7045;color: #d0d0d0;border-radius: 0px 7px 7px 0px;"><a href="pages/main/themgiohang.php?cong=<?php echo $cart['idsp'] ?>" style="color: #fff;"><i class="fa fa-plus"></i></a></button>
                              
                            </div>
                        </td>
                        <td>
                            <p style="font-size: 20px;font-weight: 600;color;color: #575757;" class="title_row"><?php echo number_format($thanhtien) . 'VNĐ' ?></p>
                        </td>
                        <td><button style="width: 40px;border: 1px solid #a6a6a6;background-color: #9f7045;color: #d0d0d0;border-radius:7px;" class="delete"> <a style="text-decoration: none;color: #fff;font-size: 18px;text-align: center;font-weight: 600;" href="pages/main/themgiohang.php?xoa=<?php echo $cart['idsp'] ?>">xóa</a></button></td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td colspan="7">
                        <div style="text-align: center;background-color: #bfbfbf;width: ;border-radius: 50px 0 0 0;padding-top: 10px;width: 30%;height: 50px;color: #a26228;font-size: 20px;font-weight: 600;float: right;">Tổng Tiền: <?php echo number_format($tongtien) . 'VNĐ' ?></div>
                    </td>

                </tr>
            <?php
            } else {
            ?>
                <tr>
                    <td colspan="7">Hiện tại chưa có sản phẩm</td>
                </tr>
            <?php
            }
            ?>

        </table>
        <div class="orther">
            <form action="index.php?quanly=thanhtoan" method="POST">
                <div class="orther_info">
                    <label class="name_lable">Tên khách hàng: <?php echo $row['name_user'] ?></label>
                    <label class="phone_lable">Số điện thoại: <?php echo $row['phone_user'] ?></label>
                    <label class="addres_lable">Địa chỉ: </label>
                    <textarea name="addres" class="textarea_orther"></textarea>
                    <?php
                    if (isset($_SESSION['logina']['cart']) != NULL) {

                        echo '<button type="submit">Đặt hàng</button>';
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
<?php
} ?>