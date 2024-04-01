
<div class="container">
    <h3 class="text-center pt-3">Trang đăng ký vào DYLA</h3>
   <div class="row">
   <div class="col-6"> Hình ảnh bên này</div>
    <div class="col-6">
        <div class="card">
            <form action="/Register" method="POST">
                <div class="">
                    <label for="" class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="username" name="username" value="" required />
                    <span class="form-warning">
                        <?= (isset($data['errors']['username'])) ? $data['errors']['username'] : '' ?>
                    </span>
                </div>
                <div class="">
                    <label for="" class="form-label">Họ Tên</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="" required />
                    <span class="form-warning">
                        <?= (isset($data['errors']['fullname'])) ? $data['errors']['fullname'] : '' ?>
                    </span>
                </div>
                <div class="">
                    <label for="phonenumber" class="form-label">Số điện thoại</label>
                    <input type="phone" class="form-control" id="phonenumber" name="phonenumber" value="" required />

                </div>
                <div class="">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="password" value="" required />
                    <span class="form-warning">
                        <?= (isset($data['errors']['password'])) ? $data['errors']['password'] : '' ?>
                    </span>
                </div>
                <div class="">
                    <label for="password_confirmation" class="form-label">Nhập lại Mật khẩu</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="" required />
                    <span class="form-warning">
                        <?= (isset($data['errors']['password_confirm'])) ? $data['errors']['password_confirmation'] : '' ?>
                    </span>
                </div>
               
                <div class="">
                    <button type="submit" class="btn btn-primary m-2">Đăng ký</button>
                </div>
            </form>
        </div>

    </div>
   </div>
    
</div>