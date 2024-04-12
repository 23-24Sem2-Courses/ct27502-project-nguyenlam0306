<section>
    <div class="container pt-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="/User/Change">Sửa thông tin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Đổi mật khẩu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/User/Order">Đơn hàng</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h3 class="card-title"> <span class="text-danger">Đổi mật khẩu</span> </h3>
                <hr>
                <div class="row container">
                    <div class="">
                        <form action="/User/ChangePassword" method="POST" >
                           <div class="form-group mb-2">
                           <label for="presentPassword"><i class="fa-solid fa-lock"></i> Nhập mật khẩu hiện tại: </label>
                            <input type="password" class="form-control" name="presentPassword" required>
                            <span class="text-danger"><?= isset($data['errors']['presentPassword']) ? $data['errors']['presentPassword'] : '' ?></span>
                           </div>
                           <div class="form-group mb-2"><i class="fa-solid fa-key"></i>  <label for="newPassword">Mật khẩu mới:</label>
                            <input  type="password" class="form-control" name="newPassword" required>
                            <span class="text-danger"><?= isset($data['errors']['newPassword']) ? $data['errors']['newPassword'] : '' ?></span></div>
                            <div class="form-group mb-2"><i class="fa-solid fa-key"></i>  <label for="newPassword"> Nhập lại mật khẩu mới:</label>
                            <input  type="password" class="form-control" name="newPassword_confirm" required>
                            <span class="text-danger"><?= isset($data['errors']['newPassword_confirm']) ? $data['errors']['newPassword_confirm'] : '' ?></span></div>                                                                                  
                           <div class="form-group">
                           <button class="btn btn-danger mt-3">Thay đổi</button>
                           </div>
                        </form>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>
</section>