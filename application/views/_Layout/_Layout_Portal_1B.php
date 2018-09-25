
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?=$title?></title>


        <link href="<?=base_url()?>assets/lib/bootstrap4/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css"> 
        <link href="<?=base_url()?>assets/lib/DataTables/css/jquery.dataTables.css" media="screen" rel="stylesheet" type="text/css"> 
        <link href="<?=base_url()?>assets/lib/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css" media="screen" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/site.css" />
        <link rel="stylesheet" href="<?=base_url()?>assets/css/template.css" />
        <link rel="stylesheet" href="<?=base_url()?>assets/css/frame.css" />
        
       
    </head>
    <body>
        <div class="header-color">
            <div class="container h-100 header-custom">
                <div class="row h-100 align-items-center">
                    <div class="col-md-1">
                        <a asp-area="" asp-controller="Home" asp-action="Index"><img width="170%" src="<?=base_url()?>assets/images/logo.png" alt=""></a>
                    </div>
                    <div class="col-md-7 align-self-center" style="padding-left: 3em;">
                        <h5 class="header-font-color">สถาบันเทคโนโลยีนิวเคลียร์แห่งชาติ (องค์การมหาชน)</h5>
                        <label style="    font-size: 15px;">Thailand Institute of Nuclear Technology (Public Organization)</label>
                    </div>
                    <?php $rowdata =  $this->session->userdata('Owner'); ?>

                    <div class="col-md-3 align-self-center text-right">
                        <label class="header-font-color"><?=$rowdata['name']?></label>
                        <label><?=$rowdata['email']?></label>
                        <label>Tel. <?=$rowdata['phone_number']?></label>
                    </div>
                    <div class="col-md-1 align-self-center ">
                        <div class="dropdown  dropdown-menu-right">
                            <img src="<?=base_url()?>assets/images/avatar.png" alt="avatar" width="75px" height="auto" class="rounded-circle">
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="#">แก้ไขข้อมูลส่วนตัว</a>
                                <a class="dropdown-item" href="#">รายการบริการ</a>
                                <a class="dropdown-item" href="#">ประวัติการใช้งาน</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url()?>auth/logout" style="color:red;">ออกจากระบบ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
                            <div class="container">
                                <a asp-area="" asp-controller="Home" asp-action="Index" class="navbar-brand Brand-custom">
                                    <img width="75px" src="<?=base_url()?>assets/images/logo.png" alt="">
                                </a>
                                <!-- links toggle -->
                                <button class="navbar-toggler order-first" type="button" data-toggle="collapse" data-target="#links" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fas fa-bars"></i>
                                </button>
                                <!-- account toggle -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#account" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fas fa-user"></i>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="account">
                                        <div class="dropdown-item text-center">
                                            <img src="<?=base_url()?>assets/images/avatar.png" alt="avatar" width="75px" height="auto" class="rounded-circle">
                                        </div>
                                        <div class="p-4">
                                            <p class=" header-font-color">อานนท์ จันทิมาธร</p>
                                            <p class="">บริษัท ท่องเที่ยวทั่วเมืองไทย</p>
                                            <p class="">รหัส 002322242</p>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">แก้ไขข้อมูลส่วนตัว</a>
                                        <a class="dropdown-item" href="#">รายการบริการ</a>
                                        <a class="dropdown-item" href="#">ประวัติการใช้งาน</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" style="color:red;" href="#">ออกจากระบบ</a>

                                    </div>
                                </button>

                                <div class="collapse navbar-collapse" id="links">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/portal/index">หน้าหลัก</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/portal/about">เกี่ยวกับเรา</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://www.tint.or.th/index.php/th/2013-07-30-15-09-53">ติดต่อเรา</a>
                                        </li>
                                    </ul>
                                    <ul class="navbar-nav ml-auto">
                                        <a class="nav-link" href="#">ตรวจสอบคำร้อง  ></a>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide carousel-custom" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="<?=base_url()?>assets/images/INFO/INFO_01.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="<?=base_url()?>assets/images/INFO/INFO_01.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="<?=base_url()?>assets/images/INFO/INFO_01.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <script src="<?=base_url()?>assets/lib/jquery/dist/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/lib/bootstrap4/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/js/site.js" ></script>
        <script src="<?=base_url()?>assets/lib/DataTables/js/jquery.dataTables.js"></script>
        <script src="<?=base_url()?>assets/js/coregen.js"></script>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a asp-area="" asp-controller="Home" asp-action="Index" class="navbar-brand">TodoWeb</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a asp-area="" asp-controller="Home" asp-action="Index">Home</a></li>
                        <li><a asp-area="" asp-controller="Home" asp-action="About">About</a></li>
                        <li><a asp-area="" asp-controller="Home" asp-action="Contact">Contact</a></li>
                    </ul>
                </div>

                <div id="pnlAlert">
                    <div id="pnlAlertSuccess" class="myAlert-top alert alert-success" style="display:none">
                        <a href="#" class="close" onclick="$('#pnlAlertSuccess').hide();" aria-label="close">&times;</a>
                        <strong>Success</strong> <span>Indicates a successful or positive action.</span>
                    </div>
                    <div id="pnlAlertInfo" class="myAlert-top alert alert-info">
                        <a href="#" class="close" onclick="$('#pnlAlertInfo').hide();" aria-label="close">&times;</a>
                        <strong>Info</strong> <span>This alert needs your attention, but it's not super important.</span>
                    </div>
                    <div id="pnlAlertWarning" class="myAlert-top alert alert-warning">
                        <a href="#" class="close" onclick="$('#pnlAlertWarning').hide();" aria-label="close">&times;</a>
                        <strong>Warning</strong> <span>Better Check yourself, you're not looking too good.</span>
                    </div>
                    <div id="pnlAlertDanger" class="myAlert-top alert alert-danger">
                        <a href="#" class="close" onclick="$('#pnlAlertDanger').hide();" aria-label="close">&times;</a>
                        <strong>Error</strong> <span>This alert box could indicate a dangerous or potentially negative action.</span>
                    </div>
                </div>
            </div>
        </nav>
        <div class="body-content">
            <div class="container">
                <div style="padding-top:2em;">
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
                <?php  $this->load->view($content);?>


            </div>
        </div>
        <iframe id="myframe" class="iframe-con" src=""></iframe>
    </body>
    <footer class="page-footer font-small  pt-4 mt-4">
        <div class="text-center row" style="margin: 2em;">
            <span class="col-xl-12">สถาบันเทคโนโลยีนิวเคลียร์แห่งชาติ (องค์การมหาชน) / Thailand Institute of Nuclear Technology (Public Organization)</span>
            <span class="col-xl-12">9/9 หมู่ที่ 7 ต.ทรายมูล อ.องครักษ์ จ.นตรนายก 26120 โทร. 02-401-9889 โทรสาร. 037-392-913</span>
            <span class="col-xl-12">Call Center: โทร. 02-401-9885 หรือ 02-401-9889 ต่อ 5995</span>
        </div>
        <div class="footer-copyright py-3 text-center">
            <label>  © 2018 Copyright. All Right Reserved.</label>
        </div>
    </footer>
    </html>
