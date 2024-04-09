<style>
    :root {
        --primary-color: #ff226f;
        --primary-color-dark: #fe6769;
        --text-dark: #333333;
        --white: #ffffff;
    }

    .header {
        padding-top: 100px;
        margin: 0;
        box-sizing: border-box;
        background-image: url("/img/feedback/back1.svg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
        display: flex;
    }

    .container__main {
        max-width: 1300px;
        margin: auto;
        padding: 1rem;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10rem;
    }

    .container__left h1 {
        margin-bottom: 2rem;
        font-size: 2.5rem;
        font-weight: 500;
        color: var(--primary-color);
    }

    .container__left button {
        padding: 0.25rem 1rem;
        margin-top: 1 rem;
        outline: none;
        border: none;
        border-radius: 5px;
        background: linear-gradient(to right,
                var(--primary-color),
                var(--primary-color-dark));
        color: var(--white);
        font-size: 1rem;
        cursor: pointer;
    }

    .container__right {
        display: grid;
        gap: 2rem;
    }

    .card {
        padding: 2rem;
        display: flex;
        align-items: flex-start;
        gap: 0.25rem;
        background-color: var(--white);
        border-radius: 1rem;
        box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    .card img {
        max-width: 75px;
        border-radius: 50%;
    }

    .cacrd__content {
        display: flex;
        gap: 1rem;
    }

    .card__content span i {
        font-size: 2rem;
        color: var(--primary-color);
    }

    .card__details p {
        font-style: italic;
        color: var(--text-dark);
        margin-bottom: 1rem;
    }

    .card__details h4 {
        text-align: right;
        color: var(--primary-color);
        font-weight: 500;
        font-size: 1rem;
    }

    @media (width < 1300px) {
        .container {
            gap: 3rem;
        }
    }

    @media (width < 900px) {
        .container {
            grid-template-columns: repeat(1, 1fr);
        }

        .container__right {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (width < 750px) {
        .container__right {
            grid-template-columns: repeat(1, 1fr);
        }
    }

    .vote {
        text-align: right;
        color: var(--primary-color);
    }
</style>
<div class="header">
    <div class="container container__main">
        <div class="container__left">
            <h1>
                Hãy cùng DyLa nhìn ngắm lại tình cảm của những vị khách yêu dành cho chúng mình nhé!!!
            </h1>
            <p>
                Những lời nhận xét của khách yêu sẽ là động lực to lớn để chúng mình cố gắng phát triển và mở rộng DyLa hơn nữa. Được mọi người yêu thương và tin tưởng là kho báu quý nhất của DyLa.
            </p>
            <p>
                Vì thế đừng ngần ngại mà hãy bộc bạch những lời nhận xét về dịch vụ, trang phục, nhân viên và tất tần tật về DyLa nhé
            </p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Feedback</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-8" id="exampleModalLabel">Feedback</h1>
                        </div>
                        <div class="modal-body">
                            <form>
                            <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-3 pt-0">Chế độ:</legend>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                                            <label class="form-check-label" for="gridRadios1">
                                                Ẩn danh
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" checked >
                                            <label class="form-check-label" for="gridRadios2">
                                               Công khai
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-3 col-form-label" >Tên:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" placeholder="Nếu bạn chọn ẩn danh có thể bỏ qua trường này">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="topic" class="col-sm-3 col-form-label" >Nhận xét về:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="topic" placeholder="Sản phẩm, dịch vụ, hỗ trợ,..." required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="content" class="col-sm-3 col-form-label">Nội dung:</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="content" placeholder="Hãy ghi nhận xét của bạn vào đây..." required></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                            <button type="button" class="btn btn-primary">Gửi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container__right">
            <!-- card1 -->
            <div class="card">
                <img src="/img/feedback/TPhap.svg" alt="user">
                <div class="vote">

                    <span>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>

                </div>

                <div class="card__content">
                    <span><i class="fa-solid fa-quote-left"></i></span>
                    <div class="card__details">
                        <p>

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In quam asperiores ad culpa ipsum consequuntur numquam ipsam sed officiis minus corporis necessitatibus impedit, magnam fuga consequatur! Alias odit nulla ducimus!
                            <!-- <i class="fa-solid fa-quote-right"></i> -->
                        </p>
                        <h4>-Trang Đức</h4>
                    </div>
                </div>
            </div>
            <!-- card2 -->
            <div class="card">
                <img src="/img/feedback/BB.svg" alt="user">
                <div class="vote">

                    <span>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>

                </div>

                <div class="card__content">
                    <span><i class="fa-solid fa-quote-left"></i></span>
                    <div class="card__details">
                        <p>

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In quam asperiores ad culpa ipsum consequuntur numquam ipsam sed officiis minus corporis necessitatibus impedit, magnam fuga consequatur! Alias odit nulla ducimus!
                            <!-- <i class="fa-solid fa-quote-right"></i> -->
                        </p>
                        <h4>-Bảo Bảo Trần</h4>
                    </div>
                </div>
            </div>
            <!-- ----NX3 -->
            <div class="card">
                <img src="/img/feedback/CLy.svg" alt="user">
                <div class="vote">

                    <span>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>

                </div>

                <div class="card__content">
                    <span><i class="fa-solid fa-quote-left"></i></span>
                    <div class="card__details">
                        <p>

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In quam asperiores ad culpa ipsum consequuntur numquam ipsam sed officiis minus corporis necessitatibus impedit, magnam fuga consequatur! Alias odit nulla ducimus!
                            <!-- <i class="fa-solid fa-quote-right"></i> -->
                        </p>
                        <h4>-Chị 4 </h4>
                    </div>
                </div>
            </div>
            <!-- card4 -->
            <div class="card">
                <img src="/img/feedback/QLe.svg" alt="user">
                <div class="vote">

                    <span>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>

                </div>

                <div class="card__content">
                    <span><i class="fa-solid fa-quote-left"></i></span>
                    <div class="card__details">
                        <p>

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In quam asperiores ad culpa ipsum consequuntur numquam ipsam sed officiis minus corporis necessitatibus impedit, magnam fuga consequatur! Alias odit nulla ducimus!
                            <!-- <i class="fa-solid fa-quote-right"></i> -->
                        </p>
                        <h4>-Quân Lê</h4>
                    </div>
                </div>
            </div>
            <!-- --NX3 -->
            <div class="card">
                <img src="/img/feedback/CPu.svg" alt="user">
                <div class="vote">

                    <span>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>

                </div>
                <div class="card__content">
                    <span><i class="fa-solid fa-quote-left"></i></span>
                    <div class="card__details">
                        <p>

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In quam asperiores ad culpa ipsum consequuntur numquam ipsam sed officiis minus corporis necessitatibus impedit, magnam fuga consequatur! Alias odit nulla ducimus!
                            <!-- <i class="fa-solid fa-quote-right"></i> -->
                        </p>
                        <h4>-Tỷ Tỷ đạp sóng rẽ gió</h4>
                    </div>
                </div>
            </div>
            <!-- card4 -->
            <div class="card">
                <img src="/img/feedback/NKH.svg" alt="user">
                <div class="vote">

                    <span>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>

                </div>

                <div class="card__content">
                    <span><i class="fa-solid fa-quote-left"></i></span>
                    <div class="card__details">
                        <p>

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In quam asperiores ad culpa ipsum consequuntur numquam ipsam sed officiis minus corporis necessitatibus impedit, magnam fuga consequatur! Alias odit nulla ducimus!
                            <!-- <i class="fa-solid fa-quote-right"></i> -->
                        </p>
                        <h4>-Anh Bắp</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>