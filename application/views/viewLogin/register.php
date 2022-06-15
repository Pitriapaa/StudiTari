<div class="page-wrapper">
  <div class="page-content">
    <div class="container">
      <div class="login-wrap">
        <div class="login-content">
          <div class="login-logo">
            <a href="#">
              <img class="img-fluid" width="250px" src="<?= base_url('assets/images/icon/icon.png'); ?>" alt="Studitari">
            </a>
          </div>
          <div class="login-form">
            <form action="" method="post">
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-6">
                    <label for="nama_depan" class="control-label mb-1">Nama Depan</label>
                    <div class="input-group">
                      <input id="nama_depan" name="nama_depan" type="text" class="form-control cc-cvc rounded" placeholder="Firstname">
                    </div>
                    <small class="text-danger"> <?= form_error('nama_depan'); ?></Small>
                  </div>
                  <div class="col-lg-6">
                    <label for="nama_belakang" class="control-label mb-1">Nama Belakang</label>
                    <div class="input-group">
                      <input id="nama_belakang" name="nama_belakang" type="text" class="form-control cc-cvc rounded" placeholder="Lastname">
                    </div>
                    <small class="text-danger"><?= form_error('nama_belakang'); ?></small>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" class="au-input au-input--full" type="email" name="email" placeholder="Email">
                <small class="text-danger"><?= form_error('email'); ?></small>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input id="password" class="au-input au-input--full" type="password" name="password" placeholder="Password">
                <small class="text-danger"><?= form_error('password'); ?></small>
              </div>
              <div class="form-group">
                <label for="konfirmasipassword">Konfirmasi Password</label>
                <input id="konfirmasipassword" class="au-input au-input--full" type="password" name="konfirpassword" placeholder="Confirmation Password">
                <small class="text-danger"><?= form_error('konfirpassword'); ?></small>
              </div>
              <button class="au-btn au-btn--block btn-info m-b-20" type="submit">register</button>
            </form>
            <div class="register-link">
              <p>
                Sudah punya akun ?
                <a href="<?= site_url('Login'); ?>">Login</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>