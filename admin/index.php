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
    }
 }
 include "footer.php";
 ?>
