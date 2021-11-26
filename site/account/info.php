<main class="main">
      <nav class="collection__nav">
        <div class="collection__nav-text center-center">
          <h1>Thông tin tài khoản</h1>
        </div>
      </nav>

      <div class="account__container">
        <div class="account__container-box">

          <div class="account__box-img">
              <img src="./assets/image/users/Avt_User.png" alt="" width="100%">
          </div>

          <div class="account__box-detail">
            <form action="" class="login__form-control account__detail-form">
              <div class="login__control-input account__form-input">
                <p>Họ và Tên</p>
                <input
                  type="text"
                  class="input__control"
                  value="<?= $item['first_name'] . " " . $item['last_name'] ?>"
                  name="ten"
                  disabled
                />
              </div>
              <div class="login__control-input account__form-input">
                <p>Tài khoản</p>
                <input
                  type="text"
                  class="input__control"
                  value="<?= $item['account'] ?>"
                  name="ten"
                  disabled
                />
              </div>
              <div class="login__control-input">
                <p>Email</p>
                <input
                  type="email"
                  class="input__control"
                  value="<?= $item['email'] ?>"
                  name="email"
                  disabled
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>