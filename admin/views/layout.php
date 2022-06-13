<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>admin- quản trị tin tức</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="views/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="views/assets/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="views/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="views/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="views/assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />

        <link href="views/assets/libs/multiselect/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="views/assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />

        <link href="views/assets/css/app.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <link href="views/assets/css/SweetAlert2.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <!-- App Css-->
          <link href="views/assets/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                  
        
                    

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="views/assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                            <?=($_SESSION['suser'])? $_SESSION['suser'] : 'khongco';?> <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Chào mừng !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>Tài khoản</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Cài đặt</span>
                            </a>

                            

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="controllers/login.php?act=logout&logout=1" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Đăng xuất</span>
                            </a>

                        </div>
                    </li>

               

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo logo-dark text-center">
                        <span class="logo-lg">
                            <img src="views/assets/images/logo-dark.png" alt="" height="16">
                        </span>
                        <span class="logo-sm">
                            <img src="views/assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>
                    <a href="index.html" class="logo logo-light text-center">
                        <span class="logo-lg">
                            <img src="views/assets/images/logo-light.png" alt="" height="16">
                        </span>
                        <span class="logo-sm">
                            <img src="views/assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                    <li>
                        <button class="button-menu-mobile disable-btn waves-effect">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <h4 class="page-title-main">Thống kê</h4>
                    </li>
        
                </ul>

            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="views/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
                        <div class="dropdown">
                            <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"  aria-expanded="false"> <?=($_SESSION['suser'])? $_SESSION['suser'] : 'khongco';?> </a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>Tài khoản</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Settings</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock mr-1"></i>
                                    <span>Lock Screen</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out mr-1"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="text-muted">
                                    <i class="mdi mdi-cog"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="mdi mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">


                            <li>
                                <a href="index.html">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Trang Chủ </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-page-layout-sidebar-left"></i>
                                    <span> Tin Tức </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?ctrl=tintuc&act=addnew">Thêm Mới</a></li>
                                    <li><a href="?ctrl=tintuc&act=index">Danh Sách</a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-page-layout-sidebar-left"></i>
                                    <span> Danh Mục</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?ctrl=danhmuc&act=addnew">Thêm Mới</a></li>
                                    <li><a href="?ctrl=danhmuc&act=index">Danh Sách</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-page-layout-sidebar-left"></i>
                                    <span>Tag</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="?ctrl=tag&act=addnew">Thêm Mới</a></li>
                                    <li><a href="?ctrl=tag&act=index">Danh Sách</a></li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>

    <?php if(file_exists($page_file)==true) require_once "$page_file"?>



              <!-- Footer Start -->
              <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            2020 &copy;phát triển bởi <a href="">Quang Nhân</a>
                        </div>
                      
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close"></i>
            </a>
            <h4 class="font-16 m-0 text-white">WEBSITE of nhân</h4>
        </div>
        <div class="slimscroll-menu">

            <div class="p-3">
                <div class="alert alert-warning" role="alert">
                    <strong>Nhân, </strong>Được phát triển bởi Nhân.
                </div>
                <div class="mb-2">
                    <img src="views/assets/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                    <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="views/assets/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="views/assets/css/bootstrap-dark.min.css" data-appStyle="views/assets/css/app-dark.min.css" />
                    <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="views/assets/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="views/assets/css/app-rtl.min.css" />
                    <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                </div>

                <div class="mb-2">
                    <img src="views/assets/images/layouts/dark-rtl.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-5">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-rtl-mode-switch" data-bsStyle="views/assets/css/bootstrap-dark.min.css" data-appStyle="views/assets/css/app-dark-rtl.min.css" />
                    <label class="custom-control-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                </div>

                <a href="https://1.envato.market/k0YEM" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
            </div>
        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

  

    <!-- Vendor js -->
    <script src="views/assets/js/vendor.min.js"></script>

    <!-- knob plugin -->
    <script src="views/assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!--Morris Chart-->
    <script src="views/assets/libs/morris-js/morris.min.js"></script>
    <script src="views/assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init js-->
    <script src="views/assets/js/pages/dashboard.init.js"></script>

    

    <script src="views/assets/js/pages/datatables.init.js"></script>
    <script src="views/assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="views/assets/libs/datatables/dataTables.bootstrap4.js"></script>
    <script src="views/assets/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="views/assets/libs/datatables/responsive.bootstrap4.min.js"></script>
    <script src="views/assets/libs/datatables/dataTables.buttons.min.js"></script>
    <script src="views/assets/libs/datatables/buttons.bootstrap4.min.js"></script>
    <script src="views/assets/libs/datatables/buttons.html5.min.js"></script>
    <script src="views/assets/libs/datatables/buttons.flash.min.js"></script>
    <script src="views/assets/libs/datatables/buttons.print.min.js"></script>
    <script src="views/assets/libs/datatables/dataTables.keyTable.min.js"></script>
    <script src="views/assets/libs/datatables/dataTables.select.min.js"></script>
    <script src="views/assets/libs/pdfmake/pdfmake.min.js"></script>
    <script src="views/assets/libs/pdfmake/vfs_fonts.js"></script>
    <!-- text editor -->
        <!-- App js -->
    <script src="views/assets/js/app.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
      <!-- Plugins js -->
    <script src="views/assets/libs/katex/katex.min.js"></script>
    <script src="views/assets/libs/quill/quill.min.js"></script>

    <!-- init js -->
    <script src="views/assets/js/pages/form-editor.init.js"></script>
    <script src="views/assets/js/pages/form-advanced.init.js"></script>

    <!--end text editor -->
    <!-- sweet alert -->
    <script src="views/assets/js/SweetAlert2.js"></script>
    <!-- end sweet alert -->
    <script src="views/assets/js/home.js"></script>
    <script src="../lib/ckeditor/ckeditor.js"></script>
    <script src="views/assets/js/ckfinder.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"> </script>
    <script src="views/assets/js/validate.js"></script>
    <script src="views/assets/libs/multiselect/jquery.multi-select.js"></script>
    <script src="views/assets/libs/select2/select2.min.js"></script>
</body>

</html>