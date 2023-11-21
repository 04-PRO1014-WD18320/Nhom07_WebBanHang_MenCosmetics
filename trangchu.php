<!-- begin main -->


<div class="slideshow-container">

    <div class="mySlides fade">
        <img src="./img/Banner1.webp" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="./img/banner2.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="./img/banner 3.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="./img/banner 4.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

<section class="products">
    <?php
    foreach ($spnew as $sp) {
        extract($sp);
        $hinh = $img_path . $hinh;
        echo '<div class="product">
                <div class="product-img-div"><a href="#"><img src="' . $hinh . '" alt="Product 1"></a></div>
                <div class="product-description-div"><a class="product-description" href="#">' . $name . '</a></div>
                <div class="product-price-div"> <p class="product-price"><del>' . $price . 'đ </del>'.$newprice.'đ</p> </div>
                <div><button class="add-to-cart">Thêm vào giỏ hàng</button></div>
            </div>';
    }

    ?>

    <!-- <div class="product">
            <img src="img/sap1.jpg" alt="Product 1">
            <p class="product-description">Product Description</p>
            <p class="product-price">$99.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="img/sap1.jpg" alt="Product 1">
            <p class="product-description">Product Description</p>
            <p class="product-price">$99.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="img/sap1.jpg" alt="Product 1">
            <p class="product-description">Product Description</p>
            <p class="product-price">$99.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="img/sap1.jpg" alt="Product 1">
            <p class="product-description">Product Description</p>
            <p class="product-price">$99.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="img/sap1.jpg" alt="Product 1">
            <p class="product-description">Product Description</p>
            <p class="product-price">$99.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="img/sap1.jpg" alt="Product 1">
            <p class="product-description">Product Description</p>
            <p class="product-price">$99.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="img/sap1.jpg" alt="Product 1">
            <p class="product-description">Product Description</p>
            <p class="product-price">$99.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div> -->

    <!-- Add more product elements here -->
</section>

<div class="h2">
    <h2>DANH MỤC SẢN PHẨM</h2>
</div>
<div class="danhmuc">
<?php 
$img=['img/dm/daugoi.jpg', 'img/dm/suaruamat.jpg','img/dm/sap.jpg'];
$i = 0;
foreach ($dsdm as $dm){
    extract($dm);
    
    
    
    // foreach ($img as $hinh){
        
    echo'
        <div class="product-boxdanhmuc">
            <a href="#"><img src="'.$img[$i].'" alt="Product 1"></a>
            <p class="product-description">'.$name.'</p>
        </div>
    ';
$i++;
    // print_r($img);
// }
}
    ?>
    <!-- <div class="product-boxdanhmuc">
        <img src="img/sap1.jpg" alt="Product 1">
        <p class="product-description">'.$name.'</p>
    </div>

    <div class="product-boxdanhmuc">
        <img src="img/sap1.jpg" alt="Product 1">
        <p class="product-description">'.$name.'</p>
    </div> -->
</div>

<!-- end main -->