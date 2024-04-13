<tr id="<?= $item->getOrderItemsInfor()['product_id'] ?>">
    <td>
        <div class="d-none">
            <?= $item->getOrderItemsInfor()['product_id'] ?>
        </div>
        <div class="col-md-3 text-left">
                <img src="<?= $product->getProductInfor()['image_path'] ?>" width="100px" height="150px"
                    style="object-fit: contain" alt="" class="img-fluid d-none d-md-block rounded shadow ">
            </div>
            <div class="col-md-9 text-left mt-sm-2">
                <h4 style="text-transform: capitalize;">
                    <?= $product->getProductInfor()['name'] ?>
                </h4>
            </div>
    </td>
    <td data-th="Price">
        <?= $product->getProductInfor()['price'] ?>
    </td>
    <td data-th="Quantity">
        <span id="quantity${element.id}" class="mx-2">
            <?= $item->getOrderItemsInfor()['quantity'] ?>
        </span>
    </td>
</tr>