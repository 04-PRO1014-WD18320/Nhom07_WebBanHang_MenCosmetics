 <!-- begin main -->
 <div class="content-tt">
        <div class="tt-thanhtoan">
            <h2>Thông tin khách hàng</h2>
            <label for="" class="lb-tt">Địa chỉ mặc định</label>
            <div class="ip-tt">
                <input type="text" name="" id="" placeholder="Tên">
                <input type="text" name="" id="" placeholder="số điện thoại">
                <input type="text" name="" id="" placeholder="email">
                <input type="text" name="" id="" placeholder="Tỉnh/thành phố">
                <input type="text" name="" id="" placeholder="Quận/huyện">
                <input type="text" name="" id="" placeholder="Xã/phường">
                <input type="text" name="" id="" placeholder="Địa chỉ(số nhà/tên đường)">
        </div>
            <label for="" class="lb-tt">Ghi chú đơn hàng</label> 
            <textarea name="" id="" cols="82%" rows="10"></textarea>


        </div>

        <div class="tt-donhang">
            <h2>Đơn Hàng Của Bạn</h2>
            <?php 
                extract($sptt);
                // $hinh = $img_path.$hinh;

            echo '
            <div class="box-sp-donhang">
                <img src="'.$img.'" alt="">
                <div class="tt-sp-donhang">
                    <p><strong>'.$name.'</strong></p>
                    <p>Giá: '.$price.'VNĐ</p>
                    <p>Số lượng: '.$soluong.'</p>
                </div>
            </div>'
            ?>

           
<?php
        $phivc = 20000;

            echo'
            <div class="tamtinh">
                Tạm tính: <strong>'.$ttien.'Đ</strong>
            </div>';
            ?>
            <hr>

            <div class="vanchuyen">
                <h4>Giao Hàng</h4>
                <p>Phí vận chuyển: 20.000Đ</p>
                <div class="tong"><strong>Tổng: <?php echo $phivc + $ttien; ?>Đ</strong></div>
            </div>
            <hr>
            <div class="ht-thanhtoan">
                <input type="radio" name="pttt" id="" checked> Thanh toán bằng tiền mặt <br>
                <input type="radio" name="pttt" id=""> Thanh toán chuyển khoản <br>
                <div class="btn-tt"><a href="index.php?act=dathangthanhcong"><input type="submit" name="dongydathang" id="" value="Thanh toán"></a></div>
            </div>
            
        </div>
</div>
    <!-- end main -->