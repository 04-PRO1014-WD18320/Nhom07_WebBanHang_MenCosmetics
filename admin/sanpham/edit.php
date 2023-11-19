<?php
// include "../header.php";
// include "../footer.php";
?>
<div class="form-container">
    <h2>Update Category</h2>
    <form action="index.php?act=editsp" method="post">
        <label for="">ID:</label>
        <input type="text" name="maloai" placeholder="ID" disabled>

        <label for="">Tên Sản Phẩm:</label>
        <input type="text" name="tenloai" placeholder="Nhập tên danh mục cần sửa..." required>

        <label for="">Mô Tả:</label>
        <input type="text" name="mota" placeholder="Nhập mô tả sản phẩm cần sửa..." required>

        <label for="">Giá:</label>
        <input type="text" name="price" placeholder="Nhập giá sản phẩm cần sửa..." required>

        <label for="">Hình Ảnh:</label>
        <input type="file" name="img"  required>

        <div class="btn">
            <input type="reset" value="RESET">
            <input type="submit" name="themmoi" value="SỬA SẢN PHẨM">
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </form>
</div>