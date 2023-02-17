<?php
session_start();
include('../../../Mecuti/admincp/config/connect.php');
echo '<pre>';
if (isset($_POST['themvaogiohang'])) {
    if (isset($_SESSION['logina'][0])) {
        $id = $_GET['id'];
        $soluong = 1;
        $sql = "SELECT * FROM `tbl_product`WHERE `tbl_product`.`id_product`= '$_GET[id]' ";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        // print_r($row);
        $flag = false;
        if ($row) {
 

            $new_product = array('namesp' => $row['name_product'], 'idsp' => $id, 'soluong' => $soluong, 'giasp' => $row['gia_product'], 'hinhanhsp' => $row['hinhanh_product'],);
            if (isset($_SESSION['logina']['cart']) && $_SESSION['logina']['cart'] != NULL) {
                foreach ($_SESSION['logina']['cart'] as $key => $cart_item) {
                    if ($cart_item['idsp'] == $id) {
                        $_SESSION['logina']['cart'][$key]['soluong'] += 1;
                        $flag = true;
                    }
                }
                if ($flag == false) {
                    array_push($_SESSION['logina']['cart'], $new_product);
                }
            } else {
                $temp = array();
                array_push($temp, $new_product);
                $_SESSION['logina']['cart'] = $temp;
            }

            header('Location:../../index.php?quanly=giohang');
        }
    } else {
        header('Location:../../index.php?quanly=dangnhap');
    }
}

if (isset($_SESSION['logina']['cart']) && isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    $temp = array();
    foreach ($_SESSION['logina']['cart'] as $key => $cart_item) {
        if ($cart_item['idsp'] != $id) {
            array_push($temp, $cart_item);
        }
    }
    $_SESSION['logina']['cart'] = $temp;
    header('Location:../../index.php?quanly=giohang');
}
if (isset($_GET['cong'])) {
    $id = $_GET['cong'];
    foreach ($_SESSION['logina']['cart'] as $key => $cart_item) {
        if ($cart_item['idsp'] == $id) {
            $cart_item['soluong'] += 1;
            $_SESSION['logina']['cart'][$key] = $cart_item;
        }
    }

    header('Location:../../index.php?quanly=giohang');
}
if (isset($_GET['tru'])) {
    $id = $_GET['tru'];
    foreach ($_SESSION['logina']['cart'] as $key => $cart_item) {
        if ($cart_item['idsp'] == $id) {
            if ($cart_item['soluong'] > 1) {
                $cart_item['soluong'] -= 1;
                $_SESSION['logina']['cart'][$key] = $cart_item;
            } else {
                $temp = array();
                foreach ($_SESSION['logina']['cart'] as $key => $cart_item) {
                    if ($cart_item['idsp'] != $id) {
                        array_push($temp, $cart_item);
                    }
                }
                $_SESSION['logina']['cart'] = $temp;
                header('Location:../../index.php?quanly=giohang');
            }
        }
    }
    header('Location:../../index.php?quanly=giohang');
}
