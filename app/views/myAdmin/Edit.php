<div class="container">
    <form action="/Admin/editFromForm/<?php echo $data['id'] ?>" method="POST" class="form" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label " for="name">Tên sản phẩm</label>
            <input class="text-input form-control" id="name" name="name" required type="text" placeholder='Áo dài tứ thân' value="<?php echo $data['name']?>">
            <label class="form-label" for="type">Loại</label>
            <select class="form-select" aria-label="Default select example" name="type" value="<?php echo $data['type']?>">
                <option value="Áo dài">Áo dài</option>
                <option value="Cosplay">Đồ cosplay</option>
                <option value="Dress">Dress</option>
                <option value="Trousers">Trousers</option>
                <option value="Vest">Vest</option>
                <option value="Others">Khác</option>
            </select>
            <label for="description" class="mt-2">Mô tả</label>
            <div class="">
                <textarea class="textarea form-control" cols="149" id="description" name="description" rows="5" ><?php if(isset($data['description'])) {echo $data['description'];}?></textarea>
            </div>
            <label for="size">Size</label>
            <input type="text" class="form-control" name="size" id="size" value="<?php echo $data['size']?>">
            <label for="color">Màu</label>
            <input type="text" class="form-control" name="color" id="color" value="<?php echo $data['color']?>">
            <label for="price">Giá</label>
            <input type="text" class="form-control" name="price" id="price" value="<?php echo $data['price']?>">
            <label for="image">Hình ảnh</label>
            <div class="">
                <input type="file" class="" name="image" id="image">
                <br>
                <img id="previewImage" width="130px" src="#" alt="image" class="mt-2">

            </div>
            <button class="btn btn-success text-center mt-4" type="submit">Sửa</button>
        </div>

    </form>

</div>
<script>
    $(document).ready(function() {
        $('#image').on('change', function() {
            // Lấy tệp 
            var file = $(this)[0].files[0];
            // Tạo đường dẫn
            var imageURL = URL.createObjectURL(file);
            // Hiển thị ảnh
            $('#previewImage').attr('src', imageURL).show();
        });
    });
</script>