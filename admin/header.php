<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <h1>Admin Panel</h1>
    </header>
    <nav>
      <div class="menu-item">
        <div class="item"><a href="#">Trang chủ Admin</a></div>
        <div
          class="item"
          onmouseover="toggleSubMenu(this)"
          onmouseout="toggleSubMenu(this)"
        >
          <a href="#">Sản phẩm </a>
          <div class="sub-menu">
            <a href="#" class="sub-iatem">Danh sách</a>
            <a href="#" class="sub-item">Thêm</a>
          </div>
        </div>

        <div
          class="item"
          onmouseover="toggleSubMenu(this)"
          onmouseout="toggleSubMenu(this)"
        >
          <a href="#">Danh mục</a>
          <div class="sub-menu">
            <a href="#" class="sub-item">Danh sách sản phẩm</a>
            <a href="#" class="sub-item">Thêm sản phẩm </a>
          </div>
        </div>

        <div class="item"><a href="#">Bình luận</a></div>
        <div class="item"><a href="#">Tài khoản</a></div>
        <div class="item"><a href="#">Đơn hàng</a></div>
        <div class="item"><a href="#">Thống kê</a></div>
      </div>
    </nav>

    <div class="divider"></div>