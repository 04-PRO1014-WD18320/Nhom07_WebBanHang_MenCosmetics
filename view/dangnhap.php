<!-- begin main -->
<main>
            <h1 class="h1">ĐĂNG NHẬP TÀI KHOẢN</h1>
            <div class="form-dn">
                <form action="/action_page.php" method="post">
                <div class="container">
                    <label for="uname"><b>TÊN ĐĂNG NHẬP</b></label>
                    <input type="text" placeholder="Nhập tên đăng nhập" name="uname" required class="ip-text">
                
                    <label for="psw"><b>MẬT KHẨU</b></label>
                    <input type="password" placeholder="Nhập mật khẩu" name="psw" required class="ip-text">
                    <div class="btn-dn"> 
                        <button type="submit">ĐĂNG NHẬP</button><br>
                        <label>
                        <input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu
                        </label>
                    </div> 
                </div>
                
                  <div class="container" style="background-color:#f1f1f1">
                    <button type="button" class="cancelbtn"><a href="#">Cancel</a></button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                  </div>
                </form>

            </div>



        </main>



    <!-- end main -->