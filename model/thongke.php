<?php

function doanhthutheothang()
{
    $sql = "SELECT 
        MONTH(ngaydat) AS thang, 
        YEAR(ngaydat) AS nam, 
        SUM(tongtien) AS tongDoanhThu
    FROM donhang
    GROUP BY thang, nam
    ORDER BY nam DESC, thang DESC";
    return pdo_query($sql);
}
function top5_sanpham_banchay_theothang()
{
    $sql = "SELECT 
        MONTH(dh.ngaydat) AS thang,
        YEAR(dh.ngaydat) AS nam,
        sp.id AS maSanPham,
        sp.name AS tenSanPham,
        sp.hinh AS hinhAnh,
        SUM(ct.soluong) AS luotMua
    FROM donhang dh
    JOIN chitietdonhang ct ON dh.id = ct.donhang_id
    JOIN sanpham sp ON ct.sanpham_id = sp.id
    WHERE MONTH(dh.ngaydat) = MONTH(CURRENT_DATE()) AND YEAR(dh.ngaydat) = YEAR(CURRENT_DATE())
    GROUP BY maSanPham
    ORDER BY luotMua DESC
    LIMIT 5";
    return pdo_query($sql);
}

function top5_sanpham_doanhthu_caonhat_thang()
{
    $sql = "SELECT 
        MONTH(dh.ngaydat) AS thang,
        YEAR(dh.ngaydat) AS nam,
        sp.id AS maSanPham,
        sp.name AS tenSanPham,
        sp.hinh AS hinhAnh,
        SUM(ct.gia_ban * ct.soluong) AS doanhThu
    FROM donhang dh
    JOIN chitietdonhang ct ON dh.id = ct.donhang_id
    JOIN sanpham sp ON ct.sanpham_id = sp.id
    WHERE MONTH(dh.ngaydat) = MONTH(CURRENT_DATE()) AND YEAR(dh.ngaydat) = YEAR(CURRENT_DATE())
    GROUP BY thang, nam, maSanPham, tenSanPham
    ORDER BY thang DESC, nam DESC, doanhThu DESC
    LIMIT 5";
    return pdo_query($sql);
}
