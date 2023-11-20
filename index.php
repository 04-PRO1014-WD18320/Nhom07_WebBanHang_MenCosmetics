<?php 
    include "header.php";

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch($act){
            case 'home':
                include "trangchu.php";
                break;
            case 'dangnhap':
                include "view/dangnhap.php";
                break;
            case 'dangki':
                include "view/dangki.php";
                break;
            case 'chitietsanpham':
                include "view/chitietsanpham.php";
                break;
                
            case 'doimk':
                include "view/doimk.php";
                break;
            case 'giohang':
                include "view/giohang.php";
                break;
            case 'qlnguoidung':
                include "view/qlnguoidung.php";
                break;
            case 'xnemail':
                include "view/xnemail.php";
                break;
            case 'thanhtoan':
                include "view/thanhtoan.php";
                break;
            
        }
    }
    
    // include "trangchu.php";


    include "footer.php";

?>