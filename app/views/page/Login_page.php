<div class="container pt-3 p-">

  <h3 class="text-center">TRANG ĐĂNG NHẬP DYLA</h3>

  <div class="row">
  <div class="col-md-6 col-sm card py-3">
    <form action="/Login" method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">Tên đăng nhập</label>
        <input type="text" class="form-control" id="" aria-describedby="" required name="username" id="username">
        <span class="form-warning">
          <?= (isset($data['errors']['username'])) ? $data['errors']['username'] : '' ?>
        </span>
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" id="password" name="password" required>
        <span class="form-warning">
          <?= (isset($data['errors']['password'])) ? $data['errors']['password'] : '' ?>
        </span>
      </div>
      <div class="mb-3">
        <span>Bạn chưa có tài khoản? <a href="/Register">Đăng ký ngay</a></span>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>
  <div class="col-md-6 col-sm">
    <p>Hình ảnh bên này</p>
  </div>
  </div>
</div>