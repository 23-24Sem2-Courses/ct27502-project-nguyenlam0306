<style>
    .part2 {
        background-color: #FF737E;
        /* display:flex; */
        /* justify-content: center; */
        align-items: center;
        color: white;
        margin-bottom: 0;
    }

    .part3 {
        margin-top: 0 !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .part3 img {
        width: 300px;
        height: auto;
    }

    @keyframes moveLeftToRight {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100%);
        }
    }

    .moving-image {
        animation: moveLeftToRight 10s linear infinite;
    }

    @keyframes shake {
        0% {
            transform: rotate(0deg);
        }

        25% {
            transform: rotate(-5deg);
        }

        50% {
            transform: rotate(0deg);
        }

        75% {
            transform: rotate(5deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    .mov-image {
        animation: shake 1s ease infinite;
    }
</style>
<div class="m-0">
    <div id="carouselExampleIndicators" class="carousel slide my-1" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/banner-home/BANNER1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/banner-home/BANNER2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/banner-home/BANNER3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container-fluid part2 p-4 m-0">
    <div class="row text-center p-5">
        <h1 class="p-2">CHÚNG MÌNH CHUYÊN VỀ</h1>
    </div>
    <div class="moving-image">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-3 d-flex justify-content-center align-items-center ">
                <a href=""><img src="/img/logo/Aodai.svg" alt=""></a>
                <h2>Áo dài</h2>
            </div>
            <div class="col-md-3 d-flex justify-content-center align-items-center">
                <a href=""><img src="/img/logo/Dress.svg" alt=""></a>
                <h2>Đầm dạ hội</h2>
            </div>
            <div class="col-md-3 d-flex justify-content-center align-items-center">
                <a href=""><img src="/img/logo/Vest.svg" alt=""></a>
                <h2>Vest</h2>
            </div>
            <div class="col-md-3 d-flex justify-content-center align-items-center">
                <a href=""><img src="/img/logo/Cosplay.svg" alt=""></a>
                <h2>Cosplay</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid part3 m-0" style="background-color: #97E7E1;">
    <div class="row">
        <div class="col-md-4">
           <a href="/Products/Aodai"> <img src="/img/logo-in/Aodai-d.svg" alt="" class="mov-image"></a>
        </div>
        <div class="col-md-8 d-flex align-items-center justify-content-center" style="">
            <h3><i class="fa-solid fa-quote-left"></i> <b>Áo dài</b> - biểu tượng văn hóa và phong cách của người phụ nữ Việt Nam. Chúng tôi mang đến những bộ sưu tập đa dạng, phản ánh vẻ đẹp truyền thống và hiện đại, phục vụ mọi nhu cầu của bạn.<i class="fa-solid fa-quote-right"></i></h3>
        </div>
    </div>

</div>
<div class="container-fluid part3 m-0" style="background-color:#FFC470;">
    <div class="row">
        <div class="col-md-8 d-flex align-items-center justify-content-center">
            <h3><i class="fa-solid fa-quote-left"></i><b> Đồ cosplay</b> - khám phá thế giới của nhân vật ưa thích. Chúng tôi cung cấp những bộ trang phục cosplay chất lượng cao, từ anime đến phim truyền hình, đáp ứng mọi nhu cầu sáng tạo của bạn.<i class="fa-solid fa-quote-right"></i></h3>
        </div>
        <div class="col-md-4 ">
           <a href="/Products/Cosplay"><img src="/img/logo-in/Cosplay-d.svg" alt="" class="mov-image"></a>
        </div>

    </div>

</div>
<div class="container-fluid part3 m-0" style="background-color:#E893CF;color:aliceblue">
    <div class="row">

        <div class="col-md-4">
         <a href="/Products/Dress"><img src="/img/logo-in/Dress-d.svg" alt="" class="mov-image"></a>
        </div>
        <div class="col-md-8 d-flex align-items-center justify-content-center">
            <h3><i class="fa-solid fa-quote-left"></i><b> Đầm dạ hội</b> - lựa chọn hoàn hảo cho những dịp quan trọng. Chúng tôi mang đến những bộ sưu tập đầm dạ hội đa dạng, từ thanh lịch đến sang trọng, phục vụ cho mọi phong cách và xu hướng.<i class="fa-solid fa-quote-right"></i></h3>
        </div>

    </div>

</div>
<div class="container-fluid part3 m-0" style="background-color:#C6EBC5">
    <div class="row">
        <div class="col-md-8 d-flex align-items-center justify-content-center">
            <h3><i class="fa-solid fa-quote-left"></i><b>Vest</b>- biểu tượng của phong cách lịch lãm và chuyên nghiệp. Chúng tôi cung cấp những bộ vest đa dạng, từ cổ điển đến hiện đại, phục vụ cho mọi dịp từ công việc đến sự kiện.<i class="fa-solid fa-quote-right"></i></h3>
        </div>
        <div class="col-md-4">
            <a href="/Products/Vest"><img src="/img/logo-in/Vest-d.svg" alt="" class="mov-image"></a>
        </div>

    </div>

</div>
<div class="container-fluid part3 m-0" style="background-color:#F8FF95">
    <div class="row">
        <div class="col-md-4">
          <a href="/Products/Trousers">  <img src="/img/logo-in/Quan-d.svg" alt="" class="mov-image"></a>
        </div>
        <div class="col-md-8 d-flex align-items-center justify-content-center">
            <h3><i class="fa-solid fa-quote-left"></i> <b>Quần tây</b> - sự kết hợp hoàn hảo giữa phong cách và thoải mái. Chúng tôi mang đến những bộ quần tây đa dạng, từ cổ điển đến hiện đại, phục vụ cho mọi nhu cầu và phong cách của bạn.<i class="fa-solid fa-quote-right"></i></h3>
        </div>
    </div>

</div>