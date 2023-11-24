<?php

include "model/pdo.php";
include "model/sanpham.php";
include "global.php";
include "model/danhmuc.php";
include "view/header.php";

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
            // case 'home':
            //     include "view/trangchu.php";


            //     break;
        // case 'dangnhap':
        //     include "view/dangnhap.php";
        //     break;
        // case 'dangki':
        //     include "view/dangki.php";
        //     break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cungloai = load_sanpham_cungloai($id, $iddm);
                // $binhluan = loadall_binhluan($_GET['idsp']);
                include "view/chitietsanpham.php";
            } else {
                include "view/trangchu.php";
            }
            break;

        // case 'doimk':
        //     include "view/doimk.php";
        //     break;
        case 'giohang':
            include "view/giohang.php";
            break;
        // case 'qlnguoidung':
        //     include "view/qlnguoidung.php";
        //     break;
        // case 'xnemail':
        //     include "view/xnemail.php";
        //     break;
        // case 'thanhtoan':
        //     include "view/thanhtoan.php";
        //     break;
        default:
            include "view/trangchu.php";
            break;
    }
}else{
    include "view/trangchu.php";
}

// include "trangchu.php";


include "view/footer.php";
