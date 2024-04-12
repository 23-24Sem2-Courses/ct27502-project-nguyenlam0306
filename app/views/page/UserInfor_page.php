<section>
    <div class="container pt-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                    <i class="fa-solid fa-circle-info"></i>     <a class="nav-link active" href="#"> Thông tin</a>
                    </li>
                    <li class="nav-item">
                    <i class="fa-solid fa-cart-shopping"></i>    <a class="nav-link" href="/User/Order">Đơn hàng</a>
                    </li>
                    <li class="nav-item">
                    <i class="fa-solid fa-pen-nib"></i>     <a class="nav-link " href="/User/Change">Thay đổi thông tin</a>
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