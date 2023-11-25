
<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "global.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/giohang.php";
include "view/header.php";


// if (isset($user['id'])) {
//     $id = $user['id'];
// }

$spnew = loadall_sanpham_home();
$spgoiy = loadall_sanpham_goiy();
$dsdm = loadall_danhmuc();
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'home':
            include "view/trangchu.php";
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
                include "view/trangchu.php";
            }
            break;

        case "sanpham":
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            // $tendm= load_tendm($iddm);
            include "view/sanpham.php";

            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = check_user($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    $thongbao = "Bạn đã đăng nhập thành công!";
                    header('Location: index.php?act=home');
                } else {
                    $thongbao = "Tài khoản không tồn tại! Vui lòng kiểm tra hoặc đăng kí tài khoản mới";
                }
            }
            include "view/dangnhap.php";
            break;



        case 'dangki':
            if (isset($_POST['dangki']) && ($_POST['dangki'])) {

                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                insert_taikhoan($user, $pass, $email);
                $thongbao = "Đăng kí thành công, vui lòng đăng nhập để thực hiện các chức năng";
            }
            include "view/dangki.php";

            break;

        case "doimk";
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = check_email($email);
                if (is_array($checkemail)) {
                    $thongbao_email = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao_email = "Email này không tồn tại!";
                }
            }
            include "view/doimk.php";
            break;

        case "thoat";
            session_unset();
            header('Location: index.php?act=home');
            break;

        case 'themvaogiohang':
            $idsp = isset($_GET['idsp']) ? $_GET['idsp'] : null;
            if (isset($_SESSION['user']['id'])) {
                $userid = $_SESSION['user']['id'];

                if (isset($_POST['themgiohang'])) {
                    $check = check_giohang($idsp, $userid);
                    $soluong = isset($_POST['soluong']) ? intval($_POST['soluong']) : 1;
                    if (!empty($check) && is_array($check)) {
                        $soluong = $soluong + $check['soluong'];
                        update_giohang($soluong, $check['id']);
                    } else {
                        insert_giohang($soluong, $userid, $idsp);
                    }
                    header("Location:index.php?act=sanphamct&idsp=$idsp");
                }
            } else {
                header('Location: index.php?act=dangnhap');
            }
            break;
        case 'giohang':
            if (isset($_SESSION['user']['id'])) {
                $userid = $_SESSION['user']['id'];
                $listgiohang = loadall_giohang($userid);
                include "view/giohang.php";
            } else {
                header('Location: index.php?act=dangnhap');
            }



            
                   

                case 'muangay':
                    if(isset($_POST['muangay'])&&($_POST['muangay'])){
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $img = $_POST['hinh'];
                        $price = $_POST['price'];
                        $soluong = 1;
                        $ttien= $soluong * (int)$price;
                        $sptt = [$id, $name, $img, $price, $soluong,$ttien];
                        // array_push($_SESSION['mycart'], $spadd);
                    }
                        include "view/thanhtoan.php";
                        break;
               
            case 'dathangthanhcong':
                include "view/dathangthanhcong.php";
                break;
            
        case 'qlnguoidung':
            include "view/qlnguoidung.php";
            break;

        case 'thanhtoan':
            include "view/thanhtoan.php";
            break;

      



        default:
            // include "view/trangchu.php";
            break;
    }
} else {
    include "view/trangchu.php";
}

// include "trangchu.php";


include "view/footer.php";
?>
