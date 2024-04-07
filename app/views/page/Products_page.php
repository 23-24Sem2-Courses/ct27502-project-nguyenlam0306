<style>

</style>
<div class="container pt-2">
  <div class="row d-flex justify-content-center">
    <?php
    foreach ($data['products'] as $product) {
      include('../app/views/partitions/item_card.php');
    }
    ?>

  </div>
</div>

<!-- Phần modal ẩn khi nhấp vào  -->


<!-- Modal fade-->
<div class="modal fade" id="Item_modals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nameProductModal"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="" alt="" class="img-fluid d-md-block rounded mb-2 shadow" id="imgProductModal">
        <div>
          <div id="idProductModal" class="d-none"></div>
          <div class="description">
            <h6>Mô tả</h6>
            <p id="desProductModal"></p>
            <hr>
          </div>
          <div class=""> <span>Màu: </span> <span id="colorProductModal"></span></div>
          <div class=""><span>Size: </span><span id="sizeProductModal"></span></div>
          <div class=""><span>Giá: </span><span id="priceProductModal"></span></div>
          <span></span>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <h5>Đặt ngay:</h5>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-center">
            <div class="row">
              <div class="col-5"><button class="btn btn-light" onclick="down()">-</button></div>
              <div class="col-3">
                <h5 id="quantity" class="p-1">1</h5>
              </div>
              <div class="col-4"> <button class="btn btn-light" onclick="up()">+</button></div>
            </div>
          </div>

        </div>
        <hr>
        <div class="row">
          <div class="col-3">Tổng:</div>
          <div class="col-9 text-end">
            <h6 id="totalProduct"></h6>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy xem</button>
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal" onclick="addToCart()">Thêm vào giỏ</button>
      </div>
    </div>
  </div>
</div>
<script>
  function up() {
    const quantityInput = $('#quantity');
    let quantity = parseInt(quantityInput.text());
    quantityInput.text(quantity + 1);
    totalProduct();
  }

  function down() {
    const quantityInput = $('#quantity');
    let quantity = parseInt(quantityInput.text());
    if (quantity > 1) quantityInput.text(quantity - 1);
    totalProduct();
  }

  function setValue(id) {
    $('#imgProductModal').attr('src', $(`#img${id}`).attr('src'));
    $('#idProductModal').text($(`#id${id}`).text());
    $('#desProductModal').text($(`#des${id}`).text());
    $('#quantity').text(1);
    $('#nameProductModal').text($(`#name${id}`).text());
    $('#priceProductModal').text($(`#price${id}`).text())
    $('#colorProductModal').text($(`#color${id}`).text());
    $('#sizeProductModal').text($(`#size${id}`).text());
  }

  function totalProduct() {
    moneyNumber = parseFloat($('#priceProductModal').text()) * parseInt($('#quantity').text());
    $('#totalProduct').text(moneyNumber);
  }

  function addToCart() {

    let product = {
      img: $('#imgProductModal').attr('src'),
      id: $('#idProductModal').text(),
      name: $('#nameProductModal').text(),
      price: $('#priceProductModal').text(),
      color: $('#colorProductModal').text(),
      size: $('#sizeProductModal').text(),
      quantity: parseInt($('#quantity').text())
    };


    let isCart = localStorage.getItem('isCart') ? JSON.parse(localStorage.getItem('isCart')) : [];


    let isProductExist = isCart.find(item => item.id === product.id);


    if (isProductExist) {
      isProductExist.quantity += product.quantity;
    } else {
      isCart.push(product);
    }


    localStorage.setItem('isCart', JSON.stringify(isCart));
  }
</script>