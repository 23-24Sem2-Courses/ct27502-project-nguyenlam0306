<section>
    <div class="container pt-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Thông tin cá nhân</a>
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
                <h3 class="card-title"> <span class="text-danger"><?= $data['fullname'] ?></span> </h3>
                <hr>
                <div class="row container">
                    <div class="col">
                        <p class="card-text  "><b>Tên đăng nhập:</b>  <span><?= $data['username'] ?></span></p>
                       
                        <p class="card-text  "><b>Số điện thoại:</b> <?= $data['phone'] ?></p>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>
</section>