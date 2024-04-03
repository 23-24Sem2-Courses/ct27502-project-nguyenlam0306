<div class="container">
    <div class="row d-flex justify-content-center">
<?php
foreach($data['products'] as $product) {
include ('../app/views/partitions/item_card.php');
}
?>

    </div>
</div>