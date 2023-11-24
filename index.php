<?php 
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "global.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
    include "view/header.php";


    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        
        switch($act){
            case 'home':


                include "view/trangchu.php";
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = check_user($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        $thongbao = "Bạn đã đăng nhập thành công!";
                        header('Location: index.php?act=home');
                        
                    }else{
                        $thongbao ="Tài khoản không tồn tại! Vui lòng kiểm tra hoặc đăng kí tài khoản mới";
                    }
                }
                include "view/dangnhap.php";
                break;
           
            case 'sanphamct':
                if (isset($_GET['idsp']) && ($_GET > 0)) {
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sp_cungloai = load_sanpham_cungloai($id, $iddm);
                    // $binhluan = loadall_binhluan($_GET['idsp']);
                    include "view/chitietsanpham.php";
                } else {
                    // include "view/home.php";
                }
                break;
            
            case 'dangki':
                if(isset($_POST['dangki'])&&($_POST['dangki'])){
                    
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    insert_taikhoan( $user,$pass,$email);
                    $thongbao = "Đăng kí thành công, vui lòng đăng nhập để thực hiện các chức năng";
    
                }
                include "view/dangki.php";
                break;

            case "doimk";
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])){                      
                    $email = $_POST['email'];
                    $checkemail = check_email($email);
                    if(is_array($checkemail)){
                        $thongbao_email="Mật khẩu của bạn là: ".$checkemail['pass'];
                    }else{
                        $thongbao_email = "Email này không tồn tại!";
                    }
                }
                    include "view/doimk.php";
                    break;

            case "thoat";
                session_unset();
                header('Location: index.php?act=home'); 
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
            // case 'doimk':
            //     include "view/doimk.php"; 
            //     break;
            case 'thanhtoan':
                include "view/thanhtoan.php";
                break;
            
        }
    }
    
    // include "trangchu.php";


    include "view/footer.php";

?>