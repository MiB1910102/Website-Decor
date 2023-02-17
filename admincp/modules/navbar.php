<div class="control_l">
    <ul class="nav flex-column">
        <li class="nav-item"><a style="width:100%; text-align: left;margin:5px" class=" btn btn-secondary" href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý Danh mục sản phẩm</a></li>
        <li class="nav-item"><a style="width:100%; text-align: left;margin:5px" class=" btn btn-secondary" href="index.php?action=quanlysanpham&query=them">Quản lý Sản phẩm</a></li>
        <li class="nav-item"><a style="width:100%; text-align: left;margin:5px" class=" btn btn-secondary" href="index.php?action=quanlydonhang&query=lietke">Quản lý Đơn hàng</a></li>
        <li class="nav-item"><a style="width:100%; text-align: left;margin:5px" class=" btn btn-secondary" href="index.php?action=quanlyuser&query=them">Quản lý User</a></li>
        <li class="nav-item"><a style="width:100%; text-align: left;margin:5px" class=" btn btn-secondary" href="index.php?action=dangxuat&query=''">Đăng xuất <?php if (isset($_SESSION['login'])) {
                                                                                                                                                                    echo $_SESSION['login'];
                                                                                                                                                                }  ?> </a></li>
    </ul>
</div>