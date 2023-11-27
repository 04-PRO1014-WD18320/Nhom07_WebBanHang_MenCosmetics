 <!-- begin main -->
 <div class="content-tt">
     <div class="tt-thanhtoan">
         <form action="index.php?act=thanhtoanmuangay" method="post">
             <h2>Thông tin khách hàng</h2>

             <div class="ip-tt">
                 <?php extract($tk) ?>
                 <input type="hidden" name="id" id="" value="<?= $id ?>">
                 <input type="text" name="user" id="" value="<?= $user ?>">
                 <input type="text" name="email" id="" value="<?= $email ?>">

                 <input type="text" name="diachi" id="" value="<?= $address ?>" placeholder="Nhập địa chỉ">
                 <input type="text" name="tel" id="" placeholder="nhập số điện thoại">
             </div>
             <label for="" class="lb-tt">Ghi chú đơn hàng</label>
             <textarea name="ghichu" id="" cols="82%" rows="10"></textarea>


     </div>

     <div class="tt-donhang">
         <h2>Đơn Hàng Của Bạn</h2>
         <?php
         
         $soluong = 1;
         $tonggia= 0;
        
                
                extract($sp);
                
                $tonggia = $soluong* $price;

         ?>

            <div class="box-sp-donhang">
                <img src="upload/<?=$hinh?>" alt="">
                <div class="tt-sp-donhang">
                    <p><strong><?= $name?></strong></p>
                    <p>Giá:<?= number_format($price) ?> VNĐ</p>
                    <p>Số lượng: <?=$soluong?></p>
                    <p>Tổng: <?= number_format($soluong*$price) ?> VNĐ</p>
                </div> 
            </div>

    <?php 
        
    
       ?>

         <?php
            $phivc = 20000;
            echo '
            <div class="tamtinh">
                Tạm tính: <strong>' . number_format($tonggia) . 'Đ</strong>
            </div>';
        ?>
         <hr>

         <div class="vanchuyen">
             <h4>Giao Hàng</h4> 
             <p>Phí vận chuyển: 20.000Đ</p>
             <div class="tong"><strong >Tổng: <?php echo number_format($phivc + $tonggia) ?>Đ</strong></div>
             <input type="hidden" name="tongtien" value="<?=$phivc + $tonggia?>">
         </div>
         <hr>
         <div class="ht-thanhtoan">
             <input type="radio" name="pttt" id="" checked> Thanh toán bằng tiền mặt <br>
             <input type="radio" name="pttt" id=""> Thanh toán chuyển khoản <br>
             <div class="btn-tt"><a href="index.php?act=dathangthanhcong"><input type="submit" name="dathangmuangay" id="" value="Thanh toán"></a></div>
         </div>
         </form>
     </div>
 </div>
 <!-- end main -->