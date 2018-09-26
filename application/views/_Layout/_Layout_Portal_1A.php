<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <title>Welcome to ZT Project</title>

    <!-- Fontfaces CSS-->
    <link href="<?=base_url()?>/assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>/assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>/assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?=base_url()?>/assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?=base_url()?>/assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"
        media="all">
    <link href="<?=base_url()?>/assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>/assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>/assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>/assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?=base_url()?>/assets/css/theme.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>/assets/lib/jquery.multi-select/css/multi-select.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>/assets/lib/DataTables/css/jquery.dataTables.min.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
  <!-- Jquery JS-->
  <script src="<?=base_url()?>/assets/lib/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>/assets/lib/jquery.multi-select/js/jquery.multi-select.js"></script>
  <script src="<?=base_url()?>/assets/js/coregen.js"></script>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?=base_url()?>/assets/images/logoapi.png" alt="Cool Admin" width="75" height="75"/>
                            Awesome CI
                        </a>
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
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo  align-items-center justify-content-center">
                <a href="#">
                    <img src="<?=base_url()?>/assets/images/logoapi.png" alt="Cool Admin" width="75" height="75" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li>
                            <a href="#"><i class="fas fa-clone"></i>Generate</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap ">
                        <div class="col-1 col-sm-6"></div>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?=base_url()?>/assets/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?=base_url()?>/assets/images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?=base_url()?>/assets/images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?=base_url()?>/assets/images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?=base_url()?>/assets/images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap ">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?=base_url()?>/assets/images/avatar/<?=$this->session->avatar?>"
                                                alt="<?=$this->session->username?>" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">
                                                <?=$this->session->username?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?=base_url()?>/assets/images/avatar/<?=$this->session->avatar?>"
                                                            alt="<?=$this->session->username?>" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">
                                                            <?=$this->session->username?></a>
                                                    </h5>
                                                    <span class="email">
                                                        <?=$this->session->email?></span>
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
                                                <a href="<?=base_url()?>/logout">
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
            <div style="padding-top:4em;display:none">
              <div class="alert alert-success alert-dismissible fade show" role="alert" id="pnlAlertSuccess">
                  <span></span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <link aria-hidden="true">&times;</link>
                  </button>
              </div>
              <div class="alert alert-info alert-dismissible fade show" role="alert" id="pnlAlertInfo">
                  <span></span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <link aria-hidden="true">&times;</link>
                  </button>
              </div>
              <div class="alert alert-warning alert-dismissible fade show" role="alert" id="pnlAlertWarning">
                  <span></span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <link aria-hidden="true">&times;</link>
                  </button>
              </div>
              <div class="alert alert-danger alert-dismissible fade show" role="alert" id="pnlAlertDanger">
                  <span></span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <link aria-hidden="true">&times;</link>
                  </button>
              </div>
            </div>
            <!-- END HEADER DESKTOP-->
            <?php $this->load->view($Content_View);?>

        </div>
    </div>
  <!-- Bootstrap JS-->
  <script src="<?=base_url()?>/assets/vendor/bootstrap-4.1/popper.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
  <!-- Vendor JS       -->
  <script src="<?=base_url()?>/assets/vendor/slick/slick.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/wow/wow.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/animsition/animsition.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/counter-up/jquery.waypoints.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/counter-up/jquery.counterup.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/circle-progress/circle-progress.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="<?=base_url()?>/assets/vendor/chartjs/Chart.bundle.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/select2/select2.min.js"></script>
  <!-- Lib JS       -->
  <script src="<?=base_url()?>/assets/lib/DataTables/js/jquery.dataTables.min.js"></script>
  <!-- Main JS-->
  <script src="<?=base_url()?>/assets/js/main.js"></script>
</body>

</html>
