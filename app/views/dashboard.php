<?php
@include '../app/views/myAdmin/checkAdmin.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Trang ADMIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="/img/logo/small_logo.png" type="image/x-icon">
    <!-- Thư viện  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/dashboard.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
        <div class="container-fluid">

            <ul class="nav nav-pills nav-fill pt-2 bg-light">
                <a href="/Home">
                    <img src="/img/logo/long_logo.png" alt="Logo" width="150px" >
                </a>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" id="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="order">Đơn hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="add-product">Sản phẩm</a>
                </li>
                <li class="nav-item" id="customer">
                    <a class="nav-link" href="#">Khách hàng</a>
                </li>
                <li class="nav-item" id="logout">
                    <a class="nav-link" href="/Logout">Đăng xuất</a>
                </li>
            </ul>

        </div>
    </header>
    <main>
    <?php if (file_exists('../app/views/myAdmin/' . $data['page'] . '.php')) {
                    include '../app/views/myAdmin/' . $data['page'] . '.php';
                }
                ?>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script type='text/javascript'>
        let baseURL = location.host + '/Admin';
        jQuery(document).ready(function ($) {
            $("#home").click(function (event) {
                location.href = '/Admin/Manage/Home';
            });
            $("#add-product").click(function (event) {
                location.href = '/Admin/Manage/Product';
            });
            $("#order").click(function (event) {    
                location.href = '/Admin/Manage/Order';
            });
            $("#customer").click(function (event) {
                location.href = '/Admin/Manage/Customer';
            });
        });
    </script>
</body>

</html>