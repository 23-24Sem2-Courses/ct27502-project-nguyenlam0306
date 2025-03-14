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

        <nav class="navbar navbar-expand-lg navbar-light navigation">
            <div class="container">
                <a class="navbar-brand" href="/Home"><img src="/img/logo/dark_long_logo.svg" alt="Logo" width="150px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/Admin/Manage/Home">Trang chủ</a></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/Admin/Manage/Order">Đơn hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/Admin/Manage/Product">Quản lý đồ</a>
                            </li>
                            <li class="nav-item" id="customer">
                                <a class="nav-link" href="/Admin/Manage/Customer">Khách hàng</a>
                            </li>
                        </ul>
                        <div class="">
                        <a class="nav-link text-end pt-2" href="/Logout">Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ---  -->        
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
    
</body>

</html>