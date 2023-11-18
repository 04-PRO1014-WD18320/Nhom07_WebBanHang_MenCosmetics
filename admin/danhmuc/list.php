<?php
// include "../header.php";
// include "../footer.php";
?>
<div class="form-container">
    <h2>Add Category</h2>
    <div class="contents">
        <div class="content">
            <table class="danhmuc">
                <tr>
                    
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th>Tùy chỉnh</th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    // $xoadm = "index.php?act=xoadm&id=" . $id;
                    echo ' <tr>
                            
                            
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td><a href ="' . $suadm . '"> <input type="button" value="Sửa">
                            </td>
                        </tr>';
                }
                // </a> <a href ="' . $xoadm . '"> <input type="button" value="Xóa"></a></td>
                ?>
            </table>
        </div>
        <input type="submit" class="submit" value="THÊM MỚI DANH MỤC">
    </div>
</div>