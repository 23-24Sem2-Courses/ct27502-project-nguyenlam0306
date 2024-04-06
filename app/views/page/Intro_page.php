<style>
    .container{
        overflow: hidden;
        width: 100%;
        /* height: 100vh; */
        /* min-height: 100vh; */

    }
    .dyla{
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
        pointer-events: none;
    }

    #h1 {
        z-index: 1; /* Đặt hình ảnh này ở layer dưới cùng */
    }
    #h2 {
        z-index: 2; /* Đặt hình ảnh này ở layer trên hình ảnh dưới cùng */
    }
    #h3 {
        z-index: 3; /* Đặt hình ảnh này ở layer trên hình ảnh trên cùng */
 }
 #text{
    z-index: 100;
 }
</style>
<div class="">
   <section class="dyla">
    <!-- <h2 id="text">The DyLa Clothes</h2> -->
    <img src="/img/aboutus/text.svg" id=text alt="">
    <img src="/img/aboutus/h1.svg" id="h1"alt="">
    <img src="/img/aboutus/h2.svg" id="h2"alt="">
    <img src="/img/aboutus/h3.svg" id="h3"alt="">
    <img src="/img/aboutus/leaf.svg" id="leaf"alt="">
    <img src="/img/aboutus/tr.svg" id="tree"alt="">
    <img src="/img/aboutus/p.svg" id="p"alt="">
   </section>
</div>