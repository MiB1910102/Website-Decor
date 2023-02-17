<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Decor Mecuti</title>
</head>

<body id="body">
    <?php
    session_start();
    include("../../../Mecuti/admincp/config/connect.php");
    include("./header.php");
    ?>
    <div class="main">
        <?php
        include("./navbar.php");
        ?>
        <?php if (!isset($_SESSION['login'])) {
            header('Location: http://localhost:8080/Mecuti/admincp/modules/login.php');
        }  ?>
        <div class="control_r">
            <?php
            $temp = $_GET['action'];
            $query = $_GET['query'];
            if ($temp != "" && $query != "") {
            } else {
                $temp = '';
                $query = '';
                include("./dashboard.php");
            }
            if ($temp == 'quanlydanhmucsanpham' && $query == 'them') {
                include("../modules/quanlydanhmuc/themdanhmuc.php");
                include("../modules/quanlydanhmuc/lietkedanhmuc.php");
            } else if ($temp == 'quanlydanhmucsanpham' && $query == 'sua') {
                include("../modules/quanlydanhmuc/suadanhmuc.php");
            }
            else if ($temp == 'quanlyuser' && $query == 'them') {
                include("../modules/quanlyuser/themuser.php");
                include("../modules/quanlyuser/lietkeuser.php");
            } else if ($temp == 'quanlyuser' && $query == 'sua') {
                include("../modules/quanlyuser/suauser.php");
            }
            else if ($temp == 'quanlydonhang' && $query == 'lietke') {
                include("../modules/quanlydonhang/lietkedonhang.php");
            } 
            // else if ($temp == 'quanlydonhang' && $query == 'sua') {
            //     include("../modules/quanlydonhang/suadonhang.php");
            // }
            
            else if ($temp == 'quanlysanpham' && $query == 'them') {
                include("../modules/quanlysanpham/themsanpham.php");
                include("../modules/quanlysanpham/lietkesanpham.php");
            } else if ($temp == 'quanlysanpham' && $query == 'sua') {
                include("../modules/quanlysanpham/suasanpham.php");
            } else if ($temp == 'dangxuat') {
                unset($_SESSION['login']);
                header('Location: http://localhost:8080/Mecuti/admincp/modules/login.php');
            } else {
                include("./dashboard.php");
            }
            ?>
        </div>
    </div>

    <?php
    include("../../pages/footer.php");
    ?>
</body>

</html>