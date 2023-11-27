<!-- begin main -->
<?php
// session_start()
?>
<main>
  <!-- <h1 class="h1">GIỎ HÀNG CỦA BẠN</h1> -->
  <!-- <form action="#"> -->
    <table class="customers">
      <thead>
        <tr>
          <th></th>
          <th>Hình ảnh</th>
          <th>Tên sản phẩm</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <!-- <th>Thành tiền</th> -->
          <th>Thao tác</th>
        </tr>
      </thead>
      
      <tbody>
      <?php 
              foreach($listgiohang as $giohang):
                // var_dump($giohang);
                // $id_giohang = isset($giohang['id']) ? $giohang['id'] : null;
                // var_dump($id_giohang)  ;
                extract($giohang);
                // $thanhTien = $price * $soluong;
             ?>
        <tr>
          <td><input type="checkbox" name="" id=""></td>
          <td><img src="upload/<?=$hinh?>" alt=""></td>
          <td class="td-tt"><?=$name?> </td>
          <td class="td-tt"><?=$price?></td>
          <td class="td-tt"><input type="number" min="1"  step="1" value="<?=$soluong?>"  /></td>
          
          <td><a href="index.php?act=xoagiohang&id_giohang=<?=$id?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này chứ ?')">Xóa</a></td>
          
        </tr>
        <?php endforeach ?>
      </tbody>
      <!-- <tr>
        <td><input type="checkbox" name="" id=""></td>
        <td><img src="./img/sap1.jpg" alt=""></td>
        <td class="td-tt">Sáp Vuốt Tóc </td>
        <td class="td-tt">500.000Đ</td>
        <td class="td-tt">1</td>
        <td class="td-tt">500.000Đ</td>
        <td><a href="#">Xóa</a></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="" id=""></td>
        <td><img src="./img/sap1.jpg" alt=""></td>
        <td class="td-tt">Sáp Vuốt Tóc </td>
        <td class="td-tt">500.000Đ</td>
        <td class="td-tt">1</td>
        <td class="td-tt">500.000Đ</td>
        <td><a href="#">Xóa</a></td>
      </tr> -->
    </table>
    <div class="btn-giohang">
      <button>xóa tất cả</button> <button>Thanh toán</button>
    </div>
  </form>
</main>


<!-- end main -->