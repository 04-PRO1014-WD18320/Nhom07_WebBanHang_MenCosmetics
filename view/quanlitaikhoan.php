<div class="qltk">
    <h1>Thông tin tài khoản</h1>
    <?php extract($tk) ?>
    <label for="uname"><b>TÊN ĐĂNG NHẬP</b></label>
    <input type="text" placeholder="" name="user" value="<?= $user?>" disabled class="ip-text">

    <label for="psw"><b>MẬT KHẨU</b></label>
    <input type="password" placeholder="" name="pass" value="<?= $pass?>" disabled class="ip-text">

    <label for="psw"><b>Email</b></label>
    <input type="email" placeholder="" name="email" value="<?= $email ?>" disabled class="ip-text">
    <div class="btn-dx-dmk">
        <button>ĐỔi MẬT KHẨU</button>
        <a href="index.php?act=thoat"><button>ĐĂNG XUẤT </button></a>
    </div>
</div>