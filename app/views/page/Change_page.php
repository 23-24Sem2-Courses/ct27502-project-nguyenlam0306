<section>
    <div class="container pt-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Thay đổi thông tin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/User/ChangePassword">Đổi mật khẩu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/User/Order">Đơn hàng</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h3 class="card-title"> <span class="text-danger"><?= $data['username'] ?></span> </h3>
                <hr>
                <div class="row container">
                    <div class="">
                        <form action="/User/Change" method="POST" >
                           <div class="form-group mb-2">
                           <label for="fullname"><i class="fa-solid fa-user"></i> Tên của bạn: </label>
                            <input type="text" class="form-control" name="fullname" required value="<?= $data['fullname']?>">
                            <span class="text-danger"><?= isset($data['errors']['fullname']) ? $data['errors']['fullname'] : '' ?></span>
                           </div>
                           <div class="form-group"><i class="fa-solid fa-phone"></i>  <label for="phone">Số điện thoại:</label>
                            <input type="text" class="form-control" name="phone" value="<?= $data['phone']?>">
                            <span class="text-danger"><?= isset($data['errors']['phone']) ? $data['errors']['phone'] : '' ?></span></div>                          
                           <div class="form-group">
                           <button class="btn btn-success mt-3">Sửa</button>
                           </div>
                        </form>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>
</section>