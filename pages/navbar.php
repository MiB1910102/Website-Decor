<?php

// echo '<pre>';
// print_r( $_SESSION);
?>
<nav class="nav_bar">
    <ul class="nav_l">
        <li class="nav_item">
            <a style="font-size: 20px;" class="nav_content" href="index.php?quanly=trangchu">Trang chủ</a>
        </li>
        <li class="nav_item">
            <a style="font-size: 20px;" class="nav_content" href="index.php?quanly=gioithieu">Giới thiệu</a>
        </li>
        <li class="nav_item">
            <a style="font-size: 20px;" class="nav_content " href="index.php?quanly=lienhe">Liên hệ</a>
        </li>
        <li class="nav_item">
            <a style="font-size: 20px;" class="nav_content" href="index.php?quanly=giohang">Giỏ hàng</a>
        </li>
    </ul>
    <form class="nav_r" role="search" action="index.php?quanly=timkiem" method="POST">
        <input class="nav_r_l" type="search" placeholder="Search" aria-label="Search" name="tukhoa">
        <button class="nav_r_r" type="submit"><i class="fa fa-search"></i></button>
    </form>
    <?php
    if (!isset($_SESSION['logina'][0])) {
        echo ' <button style="width:8%;margin: 10px;border:1px solid #9f7045; border-radius: 10px;background-color: #e1d2c9;" class="dangky"><a style="text-decoration: none;font-size: 18px;font-weight: 600;color: #686868;" href="index.php?quanly=dangnhap">Đăng nhập</a></button>
        ';
    } else {
        echo '<label class="lable_name">Xin chào ' . $_SESSION['logina'][0] . '</label>';
        echo '    <button class="button-out"><a href="./../../Mecuti/pages/main/xylylogin.php?logout=dangxuat"><i class="fas fa-sign-out-alt"></i></a></button>';
    }
    ?>

</nav>