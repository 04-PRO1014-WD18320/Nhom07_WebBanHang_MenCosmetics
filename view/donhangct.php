<div class="form-lsdh">
    <h2>Chi tiết đơn hàng</h2>

    <div class="contents">
        <div class="content">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Khách hàng</th>
                        
                        <th>Ngày tạo</th>
                        
                        <th>Hình ảnh</th>
                        <th>Sản phẩm</th>
                        <th>Giá Bán</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list_dhct as  $dhct) :
                        extract($dhct);
                    ?>
                        <tr>
                            <td><?=$donhang_id?></td>
                            <td><?=$tennguoinhan?></td>
                            
                            <td><?=$ngaydat?></td>
                            
                            <td><img style="width: 100px; height: 100px;"  src="./upload/<?= $img ?>" alt=""></td>
                            <td><?=$name_sp?></td>
                            <td><?= number_format($gia_ban) ?>Đ</td>
                            <td><?=$soluong?></td>
                            <td><?= number_format($gia_ban * $soluong) ?>Đ</td>
                        </tr>
                       
                        
                    <?php  endforeach; ?>
                    <tr>
                            <td colspan="7" align="center">Tổng tiền</td>
                            <td><?=number_format($tongtien)?>Đ</td>
                        </tr>
                </tbody>
            </table>
        </div>
        <!-- <input type="submit" class="submit" value="THÊM MỚI DANH MỤC"> -->
        <!-- <a href=""  ><input type="button" class="submit" value="THÊM MỚI SẢN PHẨM"></a> -->

    </div>
</div>