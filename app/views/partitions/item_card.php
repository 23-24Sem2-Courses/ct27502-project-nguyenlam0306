<div id="<?= $product['id'] ?? '' ?>" class="card mt-3" style="width:16rem; height: 20rem">
    <div class="d-flex justify-content-center mt-3">
        <img src="<?= $product['image_path'] ?? '' ?>" id="<?= $product['id'] ?? '' ?>" alt="" width="65%">
    </div>
    <div class="card-body">
        <div id="id<?= $product['id'] ?? '' ?>" class="d-none"><?= $product['id'] ?? '' ?></div>
        <h5 id="name<?= $product['id'] ?? '' ?>" class="card-title text-center"><?= $product['name'] ?? '' ?></h5>
        <h5 id="price<?= $product['id'] ?? '' ?>" class="text-center"><?= $product['price'] ?? '' ?>$</h5>
       <span> <h5 id="size<?= $product['id'] ?? '' ?>" class="d-none text-center"><?= $product['size'] ?? '' ?></h5>
       <h5 id="color<?= $product['id'] ?? '' ?>" class="d-none text-center"><?= $product['color'] ?? '' ?>
    </span>
        <div class="d-flex justify-content-center p-2">
            <button type="button" onclick="setValue(<?= $product['id'] ?? '' ?>)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Item_modals">
                Chi tiết
            </button>
        </div>
    </div>
</div>