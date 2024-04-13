<section class="mb-2">
    <div class="container pt-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                    <i class="fa-solid fa-circle-info"></i>     <a class="nav-link" href="/User/Infor"> Thông tin</a>
                    </li>
                    <li class="nav-item">
                    <i class="fa-solid fa-cart-shopping"></i>    <a class="nav-link active" href="#">Đơn hàng</a>
                    </li>
                    <li class="nav-item">
                    <i class="fa-solid fa-pen-nib"></i>     <a class="nav-link " href="/User/Change">Thay đổi thông tin</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h3 class="card-title"> <span class="text-warning">Thông tin đơn hàng</span> </h3>
                <hr>
                <div class="row container">
                    <div class="accordion col">
                         <?php 
                         foreach($data['orders'] as $order){
                            include '../app/views/partitions/order_items_detail.php';
                         }
                         ?>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>
</section>