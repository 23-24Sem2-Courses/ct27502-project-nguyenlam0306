
<style>
     .card {
        position: relative;
        width: 16rem;
        height: 23rem;
        overflow: hidden; 
    }

    .card img {
        width: 100%;
        height: 100%;
        object-fit: cover; 
    }
 .card {
        position: relative; 
    }

    .btn-click {
        position: absolute; 
        bottom: 4px; 
        left: 50%; 
        transform: translateX(-50%); 
        z-index: 1; 
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .card:hover .btn-click {
        opacity: 1; 
    }
</style>
<div id="<?= $product['id'] ?? '' ?>" class="card m-2 pb-2" style="width:16rem; height:20.5rem">
    <div class="d-flex justify-content-center mt-1">
        <img src="<?= $product['image_path'] ?? '' ?>" id="img<?= $product['id'] ?? '' ?>" alt="" class="img-fluid d-md-block rounded mb-2 shadow">
    </div>
    <div class="card-body">
        <div id="id<?= $product['id'] ?? '' ?>" class="d-none"><?= $product['id'] ?? '' ?></div>
        <h5 id="name<?= $product['id'] ?? '' ?>" class="d-none card-title text-center"><?= $product['name'] ?? '' ?></h5>
        <h5 id="price<?= $product['id'] ?? '' ?>" class=" d-none text-center"><?= $product['price'] ?? '' ?> VNĐ</h5>
        <h5 id="size<?= $product['id'] ?? '' ?>" class="d-none text-center"><?= $product['size'] ?? '' ?></h5>
        <h5 id="des<?= $product['id'] ?? '' ?>" class="d-none text-center"><?= $product['description'] ?? '' ?></h5>
        <h5 id="color<?= $product['id'] ?? '' ?>" class="d-none text-center"><?= $product['color'] ?? '' ?></h5>
        <div class="d-flex justify-content-center">
            <!-- trigger modal  -->
            <button type="button" onclick="setValue(<?= $product['id'] ?? '' ?>)" class="btn btn-click btn-warning" data-bs-toggle="modal" data-bs-target="#Item_modals">
                Chi tiết
            </button>

        </div>
    </div>


</div>