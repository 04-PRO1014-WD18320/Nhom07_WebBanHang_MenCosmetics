<?php
function insert_danhmuc($tendanhmuc){
    $sql = "INSERT INTO danhmuc (name) values ('$tendanhmuc')";
    pdo_execute($sql);
}
function loadall_danhmuc()
{
    $sql = "SELECT * FROM danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id)
{
    $sql = "SELECT *FROM danhmuc WHERE id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}