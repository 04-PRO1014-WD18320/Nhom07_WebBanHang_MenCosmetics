<?php
// include "../header.php";
// include "../footer.php";
?>
<div class="form-container">
    <h2>Update Category</h2>
    <form action="index.php?act=updatedm" method="post">
        <label for="">ID:</label>
        <input type="text" name="maloai" placeholder="ID không thể sửa" disabled>

        <label for="">Name:</label>
        <input type="text" name="tenloai" placeholder="Nhập tên danh mục cần sửa..." required>

        <div class="btn">
            <input type="reset" value="RESET">
            <input type="submit" name="themmoi" value="SỬA DANH MỤC">
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </form>
</div>