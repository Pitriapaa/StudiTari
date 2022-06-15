<div class="page-wrapper">
  <div class="page-content--bge5">
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
                <?php if ($this->session->flashdata('Message')) : ?>
                  <?= $this->session->flashdata('Message'); ?>
                  <?php $this->session->unset_userdata('Message'); ?>
                <?php endif; ?>
                <label for="email">Email Address</label>
                <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                <small class="text-danger"><?= form_error('email'); ?></small>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                <small class="text-danger"><?= form_error('password'); ?></small>
              </div>
              <button class="au-btn au-btn--block btn-info m-b-20 rounded" type="submit">Login</button>

            </form>
            <div class="register-link">
              <p>
                Belum punya akun?
                <a href="<?= site_url('Login/register'); ?>">Daftar Disini</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>