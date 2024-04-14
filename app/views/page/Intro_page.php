<style>
    .wrap {
        overflow: hidden;
        width: 100%;
        /* height: 100vh; */
        min-height: 750px;

    }

    .dyla {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
    }

    /* #text {
        position: absolute;
        font-size: 5em;
        color: black;
        z-index: 10;
        top:370px
    } */
    .dyla img {
        position: absolute;
        top: 0px;
        left: 0;
        width: 100%;
        object-fit: contain;
        pointer-events: none;
    }

    #h1 {
        z-index: 1;
    }

    #h2 {
        z-index: 2;
    }

    #h3 {
        z-index: 100;
    }

    #text {
        z-index: 5;
    }

    #tr {
        z-index: 100;
    }

    #p {
        z-index: 100;
    }

    .part1 {
        background-color: #FF7C7C;
    }

    .ti {
        justify-content: center;
        align-items: center;
        color: aliceblue;
        text-align: center;
    }

    .hinhanh {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: top;

        /* background-color: #252d5d; */
    }

    .hinhanh img {
        height: 300px;
        width: 300px;
        border-radius: 50%;
        border: 5px solid #ececec;
        margin: 0 auto;
        display: block;
        vertical-align: top;
    }

    .hinhanh img:hover {
        border-color: #15F5BA;
        transform: scale(1.1);
    }

    .quotes {
        color: #ececec;
        font-size: 1rem;
        margin-left: 100px;
        margin-right: 100px;
    }
</style>
<div class="wrap">
    <section class="dyla">
        <!-- <h2 id="text">The DyLa Clothes</h2> -->
        <img src="/img/aboutus/text.svg" id=text alt="">
        <img src="/img/aboutus/h1.svg" id="h1" alt="">
        <img src="/img/aboutus/h2.svg" id="h2" alt="">
        <img src="/img/aboutus/h3.svg" id="h3" alt="">
        <img src="/img/aboutus/leaf.svg" id="leaf" alt="">
        <img src="/img/aboutus/tr.svg" id="tr" alt="">
        <img src="/img/aboutus/p.svg" id="p" alt="">
    </section>
</div>
<div class="part1">
    <h1 class="ti pt-4">WHO AM I?</h1>
    <h1 class="ti p-4">Let's meet DyLa Clothes's Co-Founder!!!</h1>
    <div class="hinhanh container-fluid row m-0">
        <div class="col-lg-6 p-0">
            <img src="/img/aboutus/PL.jpg" alt="">
            <h1 class="ti">
                Phú Lâm
            </h1>
            <div class="quotes justify-content-center ">
                <p>
                    <i>
                        <i class="fa-solid fa-quote-left"></i>
                        Khi còn là thời sinh viên, mình phải tham dự những sự kiện yêu cầu trang phục <b>chỉnh chu và sang trọng</b>. Với <b>túi tiền</b> thời sinh viên thì những <b>shop cho thuê quần áo luôn là lựa chọn hàng đầu của mình</b>. Thế nên mình chọn start-up bằng <b>DyLa Clothes</b>.
                        <i class="fa-solid fa-quote-right"></i>
                    </i>
                </p>
            </div>
        </div>
        <div class="col-lg-6 p-0">
            <img src="/img/aboutus/TD.jpg" alt="">
            <h1 class="ti">
                Thảo Duy
            </h1>
            <div class="quotes justify-content-center">
                <p>
                    <i>
                        <i class="fa-solid fa-quote-left"></i>
                        Mình thích <b>hoá trang và trải nghiệm đa dạng trang phục</b> nhưng <b>tủ đồ của mình không cho phép</b>, hơn nữa mình chỉ mặc chúng được vài lần. Mình cũng là <b>khách ruột</b> của nhừn shop cho thuê trang phục như Lâm. <b>Chí lớn gặp nhau</b>, kết quả là em DyLa Clothes này đây!
                        <i class="fa-solid fa-quote-right"></i>
                    </i>
                </p>
            </div>
        </div>
    </div>
    <h1 class="ti pt-4">----HÀNH TRÌNH KHỞI NGHIỆP----</h1>
    <img src="/img/aboutus/time.svg" alt="">
   
</div>


<script>
    let text = document.getElementById('text');
    let h1 = document.getElementById('h1');
    let h2 = document.getElementById('h2');
    let h3 = document.getElementById('h3');
    let leaf = document.getElementById('leaf');
    let tr = document.getElementById('tr');
    let p = document.getElementById('p');

    window.addEventListener('scroll', () => {
        let value = window.scrollY;
        text.style.marginTop = value * 2.5 + 'px';
        leaf.style.top = value * -1.5 + 'px';
        leaf.style.left = value * 1.5 + 'px';
        h1.style.top = value * 1 + 'px';
    })
</script>