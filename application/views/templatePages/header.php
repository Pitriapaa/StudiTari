<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">
  <title><?= $Title; ?><?= $subTitle; ?></title>

  <link href="<?= base_url('assets/css/font-face.css'); ?>" rel="stylesheet" media="all">
  <link href="<?= base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css'); ?>" rel="stylesheet" media="all">
  <link href="<?= base_url('assets/vendor/font-awesome-5/css/fontawesome-all.min.css'); ?>" rel="stylesheet" media="all">
  <link href="<?= base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css'); ?>" rel="stylesheet" media="all">
  <link href="<?= base_url('assets/vendor/bootstrap-4.1/bootstrap.min.css'); ?>" rel="stylesheet" media="all">
  <link href="<?= base_url('assets/vendor/animsition/animsition.min.css'); ?>" rel="stylesheet" media="all">
  <link href="<?= base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css'); ?>" rel="stylesheet" media="all">
  <link href="<?= base_url('assets/vendor/wow/animate.css'); ?>" rel="stylesheet" media="all">
  <link href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>" rel="stylesheet" media="all">
  <link href="<?= base_url('assets/vendor/slick/slick.css'); ?>" rel="stylesheet" media="all">
  <link href="<?= base_url('assets/vendor/select2/select2.min.css'); ?>" rel="stylesheet" media="all">
  <link href="<?= base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.css'); ?>" rel="stylesheet" media="all">
  <link href="<?= base_url('assets/css/theme.css'); ?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
  <div class="page-wrapper">
    <header class="header-mobile d-block d-lg-none">
      <div class="header-mobile__bar">
        <div class="container-fluid">
          <div class="header-mobile-inner">
            <button class="hamburger hamburger--slider" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <nav class="navbar-mobile">
        <div class="container-fluid">
          <ul class="navbar-mobile__list list-unstyled">
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="<?= site_url('Dashboard'); ?>">Home </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="<?= site_url('Tari'); ?>">
                <i class="fas fa-chart-bar"></i>Data Tari</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="menu-sidebar d-none d-lg-block">
      <div class="logo  justify-content-start">
        <img src="<?= base_url('assets/images/icon/icon.png'); ?>" width="70px" class="img-fluid" alt="Studitari">
        <h2 class="label-info text-dark">Studi Tari</h2>
      </div>
      <div class=" menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
          <ul class="list-unstyled navbar__list">
            <li class=" has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
              <ul class="list-unstyled navbar__sub-list js-sub-list">
                <li>
                  <a href="<?= site_url('Dashboard'); ?>">Home</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="<?= site_url('Tari'); ?>">
                <i class="fas fa-fw fa-bars"></i>Data Tari</a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>


    <div class="page-container">
      <header class="header-desktop">
        <div class="section__content ">
          <div class="container-fluid ">
            <div class="header-wrap float-right">
              <div class="header-button">
                <div class="account-wrap">
                  <div class="account-item clearfix js-item-menu">
                    <div class="image">
                      <img src="<?= base_url('assets/images/icon/') . $user->profile; ?>" alt="<?= $user->nama_depan; ?> <?= $user->nama_belakang; ?>" />
                    </div>
                    <div class="content">
                      <a class="js-acc-btn text-capitalize" href="#"><?= $user->nama_depan; ?> <?= $user->nama_belakang; ?></a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                      <div class="info clearfix">
                        <div class="image">
                          <a href="#">
                            <img src="<?= base_url('assets/images/icon/') . $user->profile; ?>" alt="<?= $user->nama_depan; ?> <?= $user->nama_belakang; ?>" />
                          </a>
                        </div>
                        <div class="content">
                          <h5 class="name text-capitalize">
                            <a href="#"><?= $user->nama_depan; ?> <?= $user->nama_belakang; ?></a></a>
                          </h5>
                          <span class="email"><?= $user->email; ?></span>
                        </div>
                      </div>
                      <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-account"></i>Account</a>
                        </div>
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-settings"></i>Setting</a>
                        </div>
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                        </div>
                      </div>
                      <div class="account-dropdown__footer">
                        <a href="<?= site_url('Login/Logout'); ?>">
                          <i class="zmdi zmdi-power"></i>Logout</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>