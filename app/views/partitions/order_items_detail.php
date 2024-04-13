<div class="accordion-item">
    <h2 class="accordion-header bg-light">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $order->getOrderInfor()['order_id'] ?>" aria-expanded="true" aria-controls="collapse<?= $order->getOrderInfor()['order_id'] ?>">
            <div class="row container">
                <div class="col-lg-6"> Đơn hàng <code>#<?= $order->getOrderInfor()['order_id'] ?></code> </div>
                <div class="col-lg-6">Trạng thái: <code><?= $order->getStatusString() ?></code> </div>
            </div>
        </button>
    </h2>
    <div id="collapse<?= $order->getOrderInfor()['order_id'] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <table>
                <table id="" class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th style="width:50%">Sản phẩm</th>
                            <th style="width:12%">Giá</th>
                            <th style="width:10%">Số lượng</th>
                            <th style="width:28%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($order->getItems() as $item) {
                            $product = new \App\Models\Products;
                            $product = $product->getProductById($item->getOrderItemsInfor()['product_id']);
                            include '../app/views/partitions/product_detail.php';
                        }
                        ?>
                    </tbody>
                </table>
                <h4 class="text-end">Tổng cộng: <strong> <?= $order->getTotal() ?></strong> VNĐ</h4>
            </table>
        </div>
    </div>
</div>