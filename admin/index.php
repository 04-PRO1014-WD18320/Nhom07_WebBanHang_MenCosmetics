<?php
 include "header.php";
 include "home.php";

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
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
                $dm = loadone_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if(isset($_POST['capnhat']) &&($_POST['capnhat']) ){
                $tendanhmuc = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id,$tendanhmuc);
                $thongbao = "UPDATE thành công";
            }   
            $sql = "SELECT * FROM danhmuc order by id desc";
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
        case 'deletedm':
            if(isset($_GET['id']) && ($_GET['id'] >0)){
                delete_danhmuc($_GET['id']);

            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";   
    }
 }
 include "footer.php";