<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/small_logo.png" type="image/x-icon">
    <!-- Thư viện  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" media="all" href="<?= '/css/style.css' ?>">
    <title>
        Trang <?= $data['page'] ?>
    </title>

</head>

<body>
    <div id="top"></div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top navigation">
            <div class="container">
                <a class="navbar-brand" href="/Home"><img src="/img/logo/long_logo.png" alt="Logo" width="150px"></a>
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
                                <a class="nav-link <?= $data['page'] == 'Home' ? 'active' : '' ?>" aria-current="page" href="/Home">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $data['page'] == 'Intro' ? 'active' : '' ?>" href="/Intro">Về chúng tôi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $data['page'] == 'Products' ? 'active' : '' ?>" href="/Products">Trang phục</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?= $data['page'] == 'Feedback' ? 'active' : '' ?>" href="/Feedback">Feedback</a>
                            </li>
                        </ul>
                        <div class="">
                            <a href="/Cart" class="btn mt-0 p-0 position-relative"><i style="color: #ff226f; font-size: 30px" class="fa-brands fa-opencart"></i>
                            </a>
                            <?php
                            if (isset($_SESSION['islogin'])) {
                                include '../app/views/partitions/islogin.php';                                 
                               
                            }  else {
                                include '../app/views/partitions/islogout.php';
                            }
                            if (isset($_SESSION['isadmin']) && $_SESSION['isadmin']) {
                                // Bao gồm nội dung của file isadmin.php
                                include '../app/views/partitions/isadmin.php';
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
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
                        <p><b> Địa chỉ:</b> Khu vực 7, An Bình, Ninh Kiều Cần Thơ</p>
                        <p><b> Điện thoại:</b> 0938 107 918 - 0704 887 7367</p>
                        <p><b> Email:</b> shoplamduy@gmail.com</p>
                    </div>
                    <div class="col-md-4 ps-5">
                        <div> <a href="/Home"><b>Chính sách của chúng tôi</b></a></div>

                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6"><img src="/img/web_check.png" alt="" width="50%"></div>
                            <div class="col-md-6"><img src="/img/logo/long_logo.png" alt="" width="70%"></div>
                        </div>
                        <div><a href="/Home"><i class="fab fa-facebook-f" style="color: #ffa6a6;"></i></a> <a href="/Home"><i class="fab fa-instagram" style="color: #ffa6a7;"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bot-footer text-center">
            <i class="fa fa-copyright" aria-hidden="true"></i> Copyright 2024 by Lâm & Duy
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    
    <script src="/js/script.js"></script>
</body>

</html>