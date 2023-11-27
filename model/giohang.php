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
    $sql = "SELECT giohang.id, giohang.soluong, sanpham.name,  sanpham.price, sanpham.hinh
    FROM giohang
    JOIN sanpham ON giohang.idsp = sanpham.id
    WHERE giohang.iduser = $id";
    $giohang = pdo_query($sql);
    return $giohang; 
}
function delete_giohang($id){
    $sql = "DELETE from giohang where id=".$id;
    pdo_execute($sql);
    
}


