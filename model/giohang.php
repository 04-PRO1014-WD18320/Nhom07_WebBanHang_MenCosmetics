<?php
function insert_giohang($soluong, $iduser, $idsp) {
    $sql = "INSERT INTO giohang(soluong, iduser, idsp) VALUES (?, ?, ?)";
    pdo_execute($sql, $soluong, $iduser, $idsp);
}

function check_giohang($iduser, $idsp) {
    $sql = "SELECT * FROM giohang WHERE idsp = ? AND iduser = ?";
    return pdo_query_one($sql, $idsp, $iduser);
}

function update_giohang($soluong, $id) {
    $sql = "UPDATE giohang SET soluong = ? WHERE id = ?";
    var_dump($soluong, $id);
    pdo_execute($sql, $soluong, $id);
}
function loadall_giohang($id){
    $sql = "SELECT giohang.idsp, giohang.id, giohang.soluong, sanpham.name,  sanpham.price, sanpham.hinh
    FROM giohang
    JOIN sanpham ON sanpham.id = giohang.idsp
    WHERE giohang.iduser = $id";
    $giohang = pdo_query($sql);
    return $giohang; 
}
function mua1_giohang($idtk,$id_giohang){
    $sql = "select soluong, iduser, idsp, name, price, hinh,  from giohang 
    join sanpham on sanpham.id = giohang.idsp,
    join nguoidung on nguoidung.id = giohang.iduser
    where idtk=$idtk and giohang.id=$id_giohang";
    $giohang = pdo_query($sql);
    return $giohang; 
}




