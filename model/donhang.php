<?php
function insert_donhang($idtk, $tennguoinhan, $emailnguoinhan, $sdtnguoinhan, $diachinguoinhan, $pttt, $tongtien,$ngaydathang, $ghichu)
{
    $sql = "INSERT INTO donhang(idtk, tennguoinhan, emailnguoinhan, sdtnguoinhan, diachinguoinhan, pttt, tongtien, ngaydat,  ghichu)
         VALUES ($idtk, '$tennguoinhan', '$emailnguoinhan', '$sdtnguoinhan', '$diachinguoinhan', '$pttt', $tongtien, '$ngaydathang',  '$ghichu')";
    return pdo_execute2($sql);
}
function insert_donhangchitiet($donhang_id, $sanpham_id, $soluong, $gia_ban, $img, $name_sp)
{
    $sql = "INSERT INTO chitietdonhang(donhang_id,sanpham_id,soluong, gia_ban,img, name_sp)
        VALUES ('$donhang_id','$sanpham_id',$soluong, $gia_ban,'$img', '$name_sp')";
    echo $sql;
    pdo_execute($sql);
}

function loadlast_donhang_id()
{
    $sql = "select * from donhang order by id desc limit 0,1";
    $donhang = pdo_query($sql);
    return $donhang;
}

function loadall_donhang()
{
    $sql = "select * from donhang WHERE ";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
