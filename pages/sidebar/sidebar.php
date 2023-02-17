<?php
$sql = "SELECT * FROM `tbl_category` ";
$query = mysqli_query($mysqli, $sql);
?>
<div class="sidebar">
    <ul class="sidebar_col">
        <?php
        while ($row_danhmuc = mysqli_fetch_array($query)) {
        ?>
            <li class="sidebar_row">
                <a class="sidebar_row_content" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_category']?>"><?php echo $row_danhmuc['name_category'] ?></a>
            </li>
        <?php
        }
        ?>
    </ul>
</div>