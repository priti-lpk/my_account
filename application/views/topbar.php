<html>
    <head>
        <!--<link rel="shortcut icon" href="assets/images/favicon.ico">-->

        <!--        select2-->
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/favicon.ico' ?>">
        <link href="<?php echo base_url() . 'assets/plugins/select2/css/select2.min.css' ?>" rel="stylesheet" type="text/css" />
        <!-- DataTables -->
        <link href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap4.min.css' ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'assets/plugins/datatables/buttons.bootstrap4.min.css' ?>" rel="stylesheet" type="text/css" />           

        <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/morris/morris.css' ?>">
        <link href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() . 'assets/css/metismenu.min.css' ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() . 'assets/css/icons.css' ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() . '/assets/css/style.css' ?>" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="<?php echo base_url() . '/index' ?>" class="logo">
                    <span>
                        My Account
<!--                        <img src="<?php // echo base_url() . 'assets/images/logo.png'   ?>" alt="" height="24" style="height: 60px;">-->
                    </span>
                    <i style="line-height: 25px !important; font-size: 13px;">
                        My Account
                        <!--<img src="<?php // echo base_url() . 'assets/images/logo.png'   ?>" alt="" height="22" style="height: 30px; width:70px;">-->
                    </i>
                </a>
            </div>
            <nav class="navbar-custom">
                <ul class="navbar-right d-flex list-inline float-right mb-0">                      
                    <li class="dropdown notification-list">

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications (37)
                            </h6>
                            <div class="slimscroll notification-item-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-flag"></i></div>
                                    <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>        
                    </li>
                    <li class="dropdown notification-list">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo base_url() . 'assets/images/users/user-4.jpg' ?>" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->

                                <a class="dropdown-item" href="<?php echo base_url('/change_password') ?>"><i class="mdi mdi-account-circle m-r-5"></i> Change Password</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="<?php echo base_url('/logout/logoutt') ?>"><i class="mdi mdi-power text-danger"></i> Logout</a>
                            </div>                                                                    
                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>                                               
                </ul>
            </nav>
        </div>
    </body>
</html>