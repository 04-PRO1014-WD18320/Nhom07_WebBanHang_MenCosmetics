<div class="form-lsdh">
    <h2>Lịch sử đơn hàng</h2>
    <!-- <form action="index.php?act=listsp" class="form-locsp" method="POST">
        <input type="text" name="kyw" id="" placeholder="Tìm kiếm...">
        <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>
            <?php

            ?>
        </select>
        <input type="submit" name="listok" value="GO">
    </form> -->
    
    <div class="contents">
        <div class="content">
            <table class="table table-bordered " >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Khách hàng</th>                      
                        <th>Ngày tạo</th>
                        <th>Địa chỉ nhận</th>
                        <th>Số điện thoại</th>
                        <th>Ghi chú</th>
                        <th>Phương thức thanh toán</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($donhang as  $dh) :
                        extract($dh);
                       $dhct= "index.php?act=donhangchitiet&id_donhang=$id"

                    ?>
                        <tr>
                            
                            <td><?=$id?></td>
                            <td><?=$tennguoinhan?></td>
                            <td><?=$ngaydat?></td>
                            <td><?=$diachinguoinhan?></td>
                            <td><?=$sdtnguoinhan?></td>
                            <td><?=$ghichu?></td>
                            <td><?=$pttt?></td>
                            <td><?= number_format($tongtien)?>Đ</td>
                            <td><?=$trangthai?></td>
                            <td><a href="<?=$dhct?>">Xem chi tiết</a></td>
                        </tr>
                        
                    <?php  endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <!-- <input type="submit" class="submit" value="THÊM MỚI DANH MỤC"> -->
        <!-- <a href=""  ><input type="button" class="submit" value="THÊM MỚI SẢN PHẨM"></a> -->

    </div>
    
</div>