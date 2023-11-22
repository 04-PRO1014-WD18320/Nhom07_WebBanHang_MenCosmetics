<main class="main-ctsp">
    <div class="container">
        <?php
        extract($onesp);
        $hinh = $img_path . $hinh;
        // $linksp = "index.php?act=muangay&idsp=".$id;
        echo '
        <form action="index.php?act=muangay" method="post" class="form-hidden">
            <div class="pro">
                <img src="' . $hinh . '" alt="">
                <div class="detail">
                    <div class="name">
                        <h5>' . $name . '</h5>
                        <div class="price">' . $price . ' VNĐ</div>
                        <div class="quality">
                            <p>Số lượng</p>
                            <input type="number" name="soluong" value="1" min="1"></div>
                            
                        
                            <div class="action">       
                                <input type="hidden" name="id" value="' . $id . '">
                                <input type="hidden" name="name" value="' . $name . '">
                                <input type="hidden" name="img" value="' . $hinh . '">
                                <input type="hidden" name="price" value="' . $price . '">
                                <input type="button" value="Thêm Giỏ Hàng">
                                <a href=""><input type="submit" value="Mua Ngay" name="muangay"></a>
                            
                            </div>
                    
                    </div>
                </div>
            </div>
        </form>';
        ?>


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
                    $hinh = $img_path . $hinh;
                    echo ' 
                            <div class="product">
                                <img src="' . $hinh . '" alt="Product 1">
                                <p class="product-description">' . $name . '</p>
                                <p class="product-price">' . $price . '</p>
                                <button class="add-to-cart">Add to Cart</button>
                            </div>
                            
                        ';
                }
                ?>
            </section>
        </div>
    </div>
    </div>

</main>