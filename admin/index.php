<?php
 include "header.php";
 include "../model/pdo.php";
 include "../model/danhmuc.php";

 if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tendanhmuc = $_POST['tenloai'];
                insert_danhmuc($tendanhmuc);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;

        case 'addsp':
            include "sanpham/add.php";
            break;
        case 'home':
            include "home.php";
            break;

    }
 }
 include "footer.php";
 ?>
