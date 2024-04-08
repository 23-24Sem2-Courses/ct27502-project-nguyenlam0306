<?php

use App\Models\Products;

$product = new Products;
$products = $product->getAllProducts();

?>
<div class="container pt-2">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link " id="pills-addProduct-tab" data-bs-toggle="pill" data-bs-target="#pills-addProduct" type="button" role="tab" aria-controls="pills-addProduct" aria-selected="false">Thêm sản phẩm</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-editProduct-tab" data-bs-toggle="pill" data-bs-target="#pills-editProduct" type="button" role="tab" aria-controls="pills-editProduct" aria-selected="false">Sửa sản phẩm</button>
        </li>

    </ul>
    <!-- Trang thêm sản phẩm  -->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade" id="pills-addProduct" role="tabpanel" aria-labelledby="pills-addProduct-tab" tabindex="0">
            <div class="container">
                <form action="/Admin/fillFromForm" method="POST" class="form" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label " for="name">Tên sản phẩm</label>
                        <input class="text-input form-control" id="name" name="name" required type="text" placeholder='Áo dài tứ thân'>
                        <label class="form-label" for="type">Loại</label>
                        <select class="form-select" aria-label="Default select example" name="type">
                            <option value="Áo dài">Áo dài</option>
                            <option value="Cosplay">Đồ cosplay</option>
                            <option value="Dress">Dress</option>
                            <option value="Trousers">Trousers</option>
                            <option value="Vest">Vest</option>
                            <option value="Others">Khác</option>
                        </select>
                        <label for="description" class="mt-2">Mô tả</label>
                        <div class="">
                            <textarea class="textarea" cols="140" id="description" name="description" rows="5"></textarea>
                        </div>
                        <label for="size">Size</label>
                        <input type="text" class="form-control" name="size" id="size">
                        <label for="color">Màu</label>
                        <input type="text" class="form-control" name="color" id="color">
                        <label for="price">Giá</label>
                        <input type="text" class="form-control" name="price" id="price">
                        <label for="image">Hình ảnh</label>
                        <div class="">
                            <input type="file" class="" name="image" id="image" onchange="previewImage()">                            
                            <img id="previewImage" width="130px" src="#" alt="image">
                            
                        </div>
                        <button class="btn btn-success text-center mt-4" type="submit">Thêm</button>
                    </div>

                </form>

            </div>


        </div>
        <!-- trang sửa  -->
        <div class="tab-pane fade" id="pills-editProduct" role="tabpanel" aria-labelledby="pills-editProduct-tab" tabindex="1">
            <section class="pt-5 pb-5" id='edit-product'>
                <div class="container">
                    <div class="row w-100">
                        <div class="col-lg-12 col-md-12 col-12">
                            <p class="mb-5 text-center">
                                Có <i class="text-info font-weight-bold">
                                    <?php echo count($products); ?>
                                </i> sản phẩm trong cửa hàng của bạn
                            </p>
                            <table id="shoppingCart" class="table table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th style="width:60%">Sản phẩm</th>
                                        <th style="width:12%">Giá</th>
                                        <th style="width:10%">Số lượng</th>
                                        <th style="width:16%"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $sum = 0;
                                    foreach ($products as $item) {
                                        echo "<tr id=product" . $item->getId() . ">";
                                        echo '<td data-th="' . $item->getName() . '">';
                                        echo '<div class="row">';
                                        echo '<div class="col-md-3 text-left">';
                                        echo '<img src="' . $item->getImage_path() . '" alt=""';
                                        echo 'class="img-fluid d-none d-md-block rounded mb-2 shadow ">';
                                        echo '</div>';
                                        echo '<div class="col-md-9 text-left mt-sm-2">';
                                        echo '<h4>' . $item->getName() . '</h4>';
                                        echo '<p class="font-weight-light">' . $item->getSize() . ' ; ' . $item->getColor() . '</p>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</td>';
                                        echo '<td data-th="Price">' . $item->getPrice() . '</td>';
                                        echo '</td>';
                                        echo '<td class="actions" data-th="">';
                                        echo '<div class="text-right">';
                                        echo '<button class="btn btn-light bg-primary btn-md mb-2" onclick="edit(' . $item->getId() . ')">';
                                        echo ' <i class="fa-solid fa-pen"></i>';
                                        echo '</button>';
                                        echo '<button class="btn btn-light bg-danger mb-2" onclick="deleteProduct(' . $item->getId() . ')">';
                                        echo ' <i class="fas fa-trash"></i>';
                                        echo '</button>';
                                        echo '</div>';
                                        echo '</td>';
                                        echo '</tr>';
                                        $sum += $item->getPrice();
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>

</div>
<script>
    function edit(id) {
        location.href = "/Admin/ShowProductById/" + id;
    }

    function deleteProduct(id) {
        let base = "/Admin/Manage/Product";
        window.open("/Admin/DeleteProductById/" + id);
        redirect(base);
    }

    function previewImage() {
        var preview = document.querySelector('#previewImage');
        var file = document.querySelector('#image').files[0];
        var reader = new FileReader();
        
        reader.onloadend = function () {
            preview.src = reader.result;
        }
        
        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }
</script>