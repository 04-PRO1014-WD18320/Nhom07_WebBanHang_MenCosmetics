<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DỰ ÁN 1</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">

    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/dmsp.css">
    <link rel="stylesheet" href="./css/Ctsp.css">
    <link rel="stylesheet" href="./css/giohang.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/thanhtoan.css">
    <link rel="stylesheet" href="./css/slideshow.css">
    <link rel="stylesheet" href="./css/qltk.css">
    <link rel="stylesheet" href="./css/dathangthanhcong.css">

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"> -->
</head>
<body>
    <!-- begin header -->
    <header>
        <div class="logo">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
        </div>
        
        <div class="search">
            <form action="index.php?act=sanpham" method="post">
            <input type="text" placeholder="Tìm kiếm sản phẩm..." required class="ip-search" name="kyw">
            <button class="button" type="submit" name="timkiem">SEARCH</button>
            </form>
        </div>
        <div class="login">
            <a href="index.php?act=qlnguoidung"><img src="img/user.png" alt="" class="btn-button"></a>
        </div>
        <div class="giohang">
            <a href="index.php?act=giohang"><img src="img/cart.png" alt="" class="btn-button"></a>
        </div>
        
        </nav>
    </header>
    
    
    <div class="placeholder"></div>
    <nav class="menu">
        <ul>

            <li><a href="index.php?act=home">TRANG CHỦ</a></li>
            <li><a href="index.php?act=sanpham&iddm=4">TÓC</a></li>
            <li><a href="index.php?act=sanpham&iddm=5">DA MẶT</a></li>
            <li><a href="index.php?act=sanpham&iddm=6">CƠ THỂ</a></li>
            

            
        </ul>
    </nav>
    <!-- end header -->