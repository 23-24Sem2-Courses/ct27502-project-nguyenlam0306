<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/small_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" media="all" href="<?= '/css/style.css' ?>">
    <title>
        <?= $data['page'] ?>
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <div id="header"></div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/Home"><img src="/images/long_logo.png" alt="Logo" width="150px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link <?= $data['page'] == 'Home' ? 'active' : '' ?>" aria-current="page"
                                    href="/Home">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $data['page'] == 'Intro' ? 'active' : '' ?>" href="/Intro">Giới
                                    thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $data['page'] == 'Products' ? 'active' : '' ?>" href="/Products">Sản phẩm</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link <?= $data['page'] == 'Contact' ? 'active' : '' ?>"
                                    href="/Contact">Liên hệ</a>
                            </li>
                        </ul>
                        <div>

                            <?php
                            if (isset($_SESSION['islogin'])) {
                                include '../app/views/partitions/islogin.php';
                            } else {
                                include '../app/views/partitions/islogout.php';
                            }
                            ?>
                            <a href="/Cart" class="btn mt-0 p-0 position-relative"><i
                                    style="color: #ffa6a6; font-size: 30px" class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <a href="#header" id="return-to-top" class="btn"><i class="fas fa-chevron-up" style="color: #0e4c2f;"></i></a>
    </header>
    <main>
        <?php if (file_exists('../app/views/page/' . $data['page'] . '_page.php')) {

            include '../app/views/page/' . $data['page'] . '_page.php';
        }
        ?>
    </main>
    <footer class="mt-3">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-4 ps-5">
                     

                    </div>
                    <div class="col-md-4">
                        <div><img src="/images/" alt="" width="50%"></div>
                        <div><i class="fab fa-facebook-f" style="color: #ffa6a6;"></i> <i class="fab fa-twitter"
                                style="color: #ffffff;"></i> <i class="fab fa-instagram" style="color: #ffffff;"></i>
                            <i class="fab fa-youtube" style="color: #ffffff;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bot-footer text-center">
          <i class="fa fa-copyright" aria-hidden="true"></i>  Copyright 2024 by Lâm & Duy
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
</body>

</html>