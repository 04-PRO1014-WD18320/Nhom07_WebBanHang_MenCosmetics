<?php
// include "../header.php";
// include "../footer.php";
?>
<div class="form-container">
    <h2>Edit Category</h2>
    <form action="index.php?act=suadm" method="post">
        <label for="">ID:</label>
        <input type="text" name="maloai" placeholder="ID tự động tăng" disabled>

        <label for="">Name:</label>
        <input type="text" name="tenloai" placeholder="Nhập tên danh mục cần tạo..." required>

        <div class="btn">
            <input type="reset" value="RESET">
            <input type="submit" name="themmoi" value="THÊM MỚI DANH MỤC">
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </form>
</div>