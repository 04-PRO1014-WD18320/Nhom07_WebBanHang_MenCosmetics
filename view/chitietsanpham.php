<?php

?>
<main class="main-ctsp">
    <div class="container">
        <?php
        extract($onesp);
        $hinh = $img_path . $hinh;
        ?>

        <div class="pro">
            <img src="<?= $hinh ?>" alt="">
            <div class="detail">
                <div class="name">
                    <h5><?= $name ?></h5>
                    <div class="price"><?= $price ?> VNĐ</div>


                    <div class="action">

                        <form method="post" action="index.php?act=themvaogiohang&idsp=<?= $id ?>" class="form-giohang">
                            <div class="quality">
                                <p>Số lượng</p>
                                <input type="number" name="soluong" value="1" min="1">
                            </div>
                            <input type="hidden" name="idsp" value="<?= $id ?>">
                            <input type="submit" name="themgiohang" value="Thêm Giỏ Hàng">
                        </form>

                        <form action="index.php?act=muangay&idsp=<?=$id?>" method="post" class="form-muangay">
                        <input type="hidden" name="idsp" value="<?= $id ?>">

                         <input type="submit" name="thanhtoanmuangay" value="Mua Ngay">

                        </form>
                    </div>
                </div>
            </div>
        </div>




        <div class="description">
            <h2>Mô Tả</h2>
            <p><?php echo nl2br($mota); ?></p>
        </div>
        <h2>Bình luận</h2>

        <div class="comment">

            <table>
                <tr>
                    <th>Tài Khoản</th>
                    <th>Nội Dung</th>
                    <th>Ngày Bình Luận</th>
                </tr>

                <tr>
                    <td>huong</td>
                    <td>đây là bình luận</td>
                    <td>18/11/2023</td>
                </tr>

                <tr>
                    <td>trang</td>
                    <td>đây là bình luận</td>
                    <td>18/11/2023</td>
                </tr>
            </table>
        </div>
        <h2>Sản Phẩm Tương Tự</h2>
        <div class="samePro">

            <section class="products">
                <?php

                // // echo $sp_cungloai;
                // echo '<pre>';
                // print_r($sp_cungloai);
                // echo '</pre>';
                // die();
                foreach ($sp_cungloai as $spcl) {
                    extract($spcl);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $hinh = $img_path . $hinh;
                    echo ' 
                    <div class="product">
                    <div class="product-img-div"><a href="' . $linksp . '"><img src="' . $hinh . '" alt="Product 1"></a></div>
                    <div class="product-description-div"><a class="product-description" href="' . $linksp . '">' . $name . '</a></div> <br>
                    <div class="product-price-div"> <p class="product-price"><del>' . $price . 'đ </del>' . $newprice . 'đ</p> </div>
                    <div><button class="add-to-cart">Thêm vào giỏ hàng</button></div>
                </div>
                            
                        ';
                }
                ?>
            </section>
        </div>
    </div>
    </div>

</main>