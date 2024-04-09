<?php

use App\Models\Order_Items;
use App\Models\Order;

$allOrders = new Order();
$orders = $allOrders->getAllOrder();
$orderItems = new Order_Items();

?>

<section class="pt-5 pb-5" id='show-order'>
    <div class="container">
        <div class="row w-100">
            <div class="col-lg-12 col-md-12 col-12">
                <p class="mb-5 text-center">
                    Có <i class="text-info font-weight-bold">
                        <?php echo count($orders); ?>
                    </i> đơn hàng cần được xử lý
                </p>
                <table id="" class="table table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" style="width:15%">Mã đơn hàng</th>
                            <th scope="col" style="width:30%">Tên khách</th>
                            <th scope="col" style="width:25%">Tình trạng</th>
                            <th scope="col" style="width:30%">Xử lý</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($orders as $item) {
                            echo "<tr>";
                            echo '<td scope="col" style="width:15%">' . $item->getOrderId() . '</td>';
                            echo '<td scope="col" style="width:30%">' . $item->getCustomerName() . '</td>';
                            echo '<td scope="col" style="width:25%">' . $item->getStatusString() . '</td>';
                            echo '<td scope="col" style="width:30%">';
                            echo '<div class="d-flex align-items-center">
                            <form action="/Admin/changeOrderStatus/' . $item->getOrderId() . '/' . $item->getStatus() . '" method="GET">                                
                             
                             <select class="form-select" style="width: 100%" onchange="handleChange(this, \'' . $item->getOrderId() . '\')" selected> 
                             <option value="0">Đã xác nhận</option>
                             <option  value="1">Đang giao</option>
                             <option  value="2">Đã giao</option>
                             <option  value="3">Đã hủy</option>
                             </select></form>
                                <button class="btn btn-success m-2">Xem lại</button></div>                                
                               
                                </td>';
                            echo '</tr>';
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>
<script>
    function handleChange(selectElement, orderId) {
        var status = selectElement.value;
        window.location.href = "/Admin/changeOrderStatus/" + orderId + "/" + status;
    }
</script>