<style>
    #cartTable th,
    #cartTable td {
        padding: 10px;
    }

    #cartTable thead th {
        padding: 15px;
        background-color: antiquewhite;
        color: brown;
    }
</style>
<div class="container pt-3">
    <div class="h3 text-center">GIỎ CỦA BẠN</div>
    <div class="row w-90">
        <div class="col-lg-12 table-responsive justify-content-center">
            <table class="table  table-striped table-hover pt-3 m-2 " id="cartTable">
                <thead>
                    <tr>
                        <th scope="col" style="width: 55%;">Trang phục</th>
                        <th scope="col" style="width: 5%;">Màu</th>
                        <th scope="col" style="width: 5%;">Size</th>
                        <th scope="col" style="width: 10%;">Giá</th>
                        <th scope="col" style="width: 20%;">Số lượng</th>
                        <th scope="col" style="width: 5%;"></th>
                    </tr>
                </thead>
                <tbody id="cartTableBody" class="p-5">

                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="text-right">
                    <h5 class="">Tổng cộng:</h5>
                </div>
            </div>
            <div class="col-9">
                <h5 id="total text-end"></h5>
            </div>

            <div class="col-sm-12 col-lg-12">
                <form action="/Cart/Order" id="formOrder">
                    <div class="text-end"> <button type="" class="btn btn-danger p-1">Đặt hàng</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function render() {
        $('#cartTableBody').text('');
        let cart = JSON.parse(localStorage.getItem('isCart'));
        cart.array.forEach(element => {
            let pattern = `<tr>
            
        
            
            </tr>`;
            $('#cartTableBody').append(pattern);
        });
        total();
    }
    $(document).ready(() => {
        render()
    })
    window.onstorage = () => {
        render()
    }
</script>
<!-- Nháp để điền vào pattern  -->
<tr id="${element.id}">
    <td data-th="Product">
        <div class="row">
            <div class="col-md-5">
                <div class="d-none">${element.id}</div>
                <img src="${element.img}" width="300px" height="400px" alt="" style="object-fit: contain" class="img-fluid d-none d-md-block rounded mb-2 shadow">
            </div>
            <div class="col-7">
                <h4>${element.name}</h4>
            </div>
        </div>
    </td>
    <td data-th="Color">
        ${element.color}
    </td>
    <td data-th="Size">
        ${element.size}
    </td>
    <td data-th="Price">
        ${element.price}
    </td>
    <td data-th="Quantity">
        <button class="btn btn-light">-</button>
        <span>${element.quantity}</span>
        <button class="btn btn-light">+</button>
        ${element}
    </td>
</tr>