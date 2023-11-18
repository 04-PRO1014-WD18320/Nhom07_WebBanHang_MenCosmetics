<?php
function insert_danhmuc($tendanhmuc){
    $sql = "INSERT INTO danhmuc (name) values ('$tendanhmuc')";
    pdo_execute($sql);
}