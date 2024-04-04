<style>
    .wrapper {
    padding: 0 20px 0 20px;
    position: relative;
   
}

.background-image {
    background-image: url("/img/login/login.svg");
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0.4;
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
    background-image: url("/img/login/login.svg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    border-radius: 10px 0 0 10px;
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
    top: -23px;
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

    .form-warning {
      text-align: center;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1rem;
      color: red;
    }
  }
</style>
<div class="wrapper">
  <div class="background-image"></div>
  <div class="container main">
    <div class="row l-row center">
      <!-- hinh anh -->
     
      <div class="col-md-6 side-image">
        <img src="/img/logo/small_logo.png" alt="" class="logo">
        <div class="texts">
          <p>
            <i>"Welcome to The DyLa"</i>
          </p>
        </div>
      </div>
      <div class="col-md-6 right">
        <form action="/Login" method="POST" class="input-box">
          <h1>Đăng nhập</h1>
          <div class="mb-3 input-field">
            <label for="username">Tên đăng nhập</label>
            <input type="text" class="input" id="" aria-describedby="" required name="username" id="username">
            <span class="form-warning">
              <?= isset($data['errors']['username']) ? $data['errors']['username'] : '' ?>
            </span>
          </div>

          <div class="mb-3 input-field">
            <label for="password">Mật khẩu</label>
            <input type="password" class="input" id="password" name="password" required>

            <span class="form-warning">
              <?= isset($data['errors']['password']) ? $data['errors']['password'] : '' ?>
            </span>
          </div>
          <div class="mb-3 input-field">
            <span>Bạn chưa có tài khoản? <a href="/Register">Đăng ký ngay</a></span>
          </div>
          <button type="submit" class="submit">Đăng nhập</button>
          <span>
            <?= (isset($data['authenticate']) && $data['authenticate'] === false) ? '<span class="form-warning">Tên đăng nhập hoặc mật khẩu không chính xác</span>' : '' ?>
          </span>
      </div>
      </form>
     
    </div>
  </div>
</div>
</div>