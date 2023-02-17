<div class="main">
    <?php
    $show = 'main/index.php';
    if (isset($_GET['quanly'])) {
        $temp = $_GET['quanly'];
    } else {
        $temp = '';
        include $show;
    }
    if ($temp == 'trangchu') {
        include("sidebar/sidebar.php");
        include $show;
    } else if ($temp == 'lienhe') {
        $show = 'main/lienhe.php';
        include $show;
    } else if ($temp == 'gioithieu') {
        $show = 'main/gioithieu.php';
        include $show;
    } else if ($temp == 'giohang') {
        include("sidebar/sidebar.php");
        $show = 'main/giohang.php';
        include $show;
    }
    else if ($temp == 'thanhtoan') {
        include("sidebar/sidebar.php");
        $show = 'main/thanhtoan.php';
        include $show;
    }else if ($temp == 'dangky') {
        include("sidebar/sidebar.php");
        $show = 'main/dangky.php';
        include $show;
    }
    else if ($temp == 'dangnhap') {
        include("sidebar/sidebar.php");
        $show = 'main/dangnhap.php';
        include $show;
    }
    else if ($temp == 'danhmucsanpham'){
        include("sidebar/sidebar.php");
        $show = 'main/danhmuc.php';
        include $show;
    }
    else if ($temp == 'sanpham'){
        include("sidebar/sidebar.php");
        $show = 'main/sanpham.php';
        include $show;
    }
    else if ($temp == 'timkiem'){
        include("sidebar/sidebar.php");
        $show = 'main/timkiem.php';
        include $show;
    }
    ?>
</div>