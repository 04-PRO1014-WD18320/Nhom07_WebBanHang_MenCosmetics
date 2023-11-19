<?php
// include "../header.php";
// include "../footer.php";
?>
<div class="form-container">
    <h2>Add Category</h2>
    <form action="index.php?act=addsp" method="post">
        <label for="">ID:</label>
        <input type="text" name="maloai" placeholder="ID tự động tăng" disabled>

        <label for="">Tên Sản Phẩm:</label>
        <input type="text" name="tenloai" placeholder="Nhập tên danh mục cần tạo..." required>

        <label for="">Mô Tả:</label>
        <input type="text" name="mota" placeholder="Nhập mô tả sản phẩm..." required>

        <label for="">Giá:</label>
        <input type="text" name="price" placeholder="Nhập giá sản phẩm..." required>

        <label for="">Hình Ảnh:</label>
        <input type="file" name="img"  required>

        <div class="btn">
            <input type="reset" value="RESET">
            <input type="submit" name="themmoi" value="THÊM MỚI SẢN PHẨM">
            <button><a href="index.php?act=listsp">DANH SÁCH SẢN PHẨM</a></button>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </form>
</div>