<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Panel</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="../css/table.css">
  <link rel="stylesheet" href="../css/formadd.css" />
  <link rel="stylesheet" href="../css/listdm.css" />
</head>

<body>
  <header>
    <h1>Admin Panel</h1>
  </header>
  <nav>
    <div class="menu-item">
      <div class="item"><a href="index.php?act=home">Trang chủ Admin</a></div>
      <div class="item" onmouseover="toggleSubMenu(this)" onmouseout="toggleSubMenu(this)">
        <a href="#">Sản phẩm </a>
        <div class="sub-menu">

          <a href="#" class="sub-item">Danh sách</a>
          <a href="#" class="sub-item">Thêm</a>

        </div>
      </div>

      <div class="item" onmouseover="toggleSubMenu(this)" onmouseout="toggleSubMenu(this)">
        <a href="#">Danh mục</a>
        <div class="sub-menu">
          <a href="index.php?act=listdm" class="sub-item">Danh mục sách danh mục</a>
          <a href="index.php?act=adddm" class="sub-item">Thêm danh mục </a>
        </div>
      </div>

      <div class="item"><a href="">Bình luận</a></div>
      <div class="item"><a href="">Tài khoản</a></div>
      <div class="item"><a href="">Đơn hàng</a></div>
      <div class="item"><a href="">Thống kê</a></div>
    </div>
  </nav>

  <div class="divider"></div>