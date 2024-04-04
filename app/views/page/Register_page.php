<style>
  .wrapper {
    background: #ececec;
    padding: 0 20px 0 20px;
  }

  .main {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .l-row {
    width: 900px;
    height: 550px;
    border-radius: 10px;
    background-color: #ffffff;
    box-shadow: 5px 5px 10px 1px rgba(0, 0, 0, 0.2);
  }

  .logo {
    width: 35px;
    position: absolute;
    top: 30px;
    left: 30px
  }

  .side-image {
    background-image: url("/img/Register/Register.svg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    border-radius: 0 10px 10px 0;
  }

  .texts {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .texts p {
    color: black;
    font-size: 20px;
    font-weight: 250;
  }

  .right {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }

  form {
    width: 330px;
    box-sizing: border-box;
  }

  h1 {
    font-weight: 700px;
    text-align: center;
    margin-bottom: 45px;
    font-size: 30px;
  }

  .input-field {
    display: flex;
    flex-direction: column;
    position: relative;
    padding: 0 10px 0 10px;
  }

  .input {
    height: 45px !important;
    width: 100% !important;
    background: transparent !important;
    border: none !important;
    border-bottom: 1px solid rgba(0, 0, 0, 0.2) !important;
    outline: none !important;
    margin-bottom: 10px !important;
    color: darkslategray !important;
  }

  .input-box .input-field label {
    position: absolute;
    top: -24px;
    left: 10px;
    pointer-events: none;
    transition: .5s;
    
  }

  .input-field .input:focus,
  .input-field .input:valid {
    border-bottom: 1px solid gray;
  }

  .submit {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 330px;
    border: none;
    outline: none;
    height: 45px;
    background: #ececec;
    border-radius: 5px;
    transition: .4s;
  }

  .submit:hover {
    background: #ff8aa4;
    color: #ffffff;
  }

  span a {
    text-decoration: none;
    font-weight: 700;
    color: black;
    transition: .5s;
  }

  span a:hover {
    text-decoration: underline;
    color: black;
  }

  @media only screen and (max-width:768px) {
    .side-image {
      border-radius: 10px 10px 0 0;
    }

    .logo {
      width: 35px;
      position: absolute;
      top: 20px;
      left: 47%
    }

    .texts {
      position: absolute;
      top: 70%;
      text-align: center;
    }
   
  }
  
</style>
<div class="wrapper">
  <div class="container main">
    <div class="row l-row center">
      <!-- hinh anh -->
     

      <div class="col-md-6 right">
        <form action="/Register" method="POST" class="input-box">
          <h1>Đăng ký</h1>
          <div class="mb-3 input-field">
            <label for="username">Tên đăng nhập</label>
            <input type="text" class="input" id="username" name="username" value="" required />
                    <span class="form-warning">
                        <?= (isset($data['errors']['username'])) ? $data['errors']['username'] : '' ?>
                    </span>
          </div>
          <div class="mb-3 input-field">
          <label for="fullname" class="">Họ Tên</label>
                    <input type="text" class="input" id="fullname" name="fullname" value="" required />
                    <span class="form-warning">
                        <?= (isset($data['errors']['fullname'])) ? $data['errors']['fullname'] : '' ?>
                    </span>
          </div>
          <div class=" mb-3 input-field">
                    <label for="phone" class="">Số điện thoại</label>
                    <input type="tel" class="input" id="phonen" name="phone" value="" required />
                    <span class="form-warning">
                        <?= (isset($data['errors']['phone'])) ? $data['errors']['phone'] : '' ?>
                    </span>
                </div>
          <div class="mb-3 input-field">
          <label for="password" class="">Mật khẩu</label>
                    <input type="password" class="input" id="password" name="password" value="" required />
                    <span class="form-warning">
                        <?= (isset($data['errors']['password'])) ? $data['errors']['password'] : '' ?>
                    </span>
          </div>
          <div class=" mb-3 input-field">
                    <label for="password_confirmation" class="">Nhập lại Mật khẩu</label>
                    <input type="password" class="input" id="password_confirmation" name="password_confirmation" value="" required />
                    <span class="form-warning">
                        <?= (isset($data['errors']['password_confirmation'])) ? $data['errors']['password_confirmation'] : '' ?>
                    </span>
                </div>
          <div class="mb-3 input-field">
            <span>Bạn đã có tài khoản? <a href="/Login">Đăng nhập ngay</a></span>
          </div>
          <button type="submit" class="submit">Đăng ký</button>
          <span>
            <?= (isset($data['authenticate']) && $data['authenticate'] === false) ? '<p id="warning">Tên đăng nhập hoặc mật khẩu không chính xác</p>' : '' ?>
          </span>
      </div>
      </form>
      <div class="col-md-6 side-image">
        <div class="texts">
          <p>
            <i>"Come with us"</i>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>