<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php require_once 'topbar.php'; ?>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php
//            include_once './config/session_info.php';

            require_once 'sidebar.php';
            ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to My Account Dashboard</li>
                                    </ol>                                             
                                </div>
                            </div>
                        </div>

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <?php require_once 'footer.php'; ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="<?php echo base_url() . 'assets/js/jquery.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/bootstrap.bundle.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/metisMenu.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.slimscroll.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/waves.min.js' ?>"></script>

        <script src="<?php echo base_url() . 'assets/plugins/jquery-sparkline/jquery.sparkline.min.js' ?>"></script>

        <!-- Peity JS -->
        <script src="<?php echo base_url() . 'assets/plugins/peity/jquery.peity.min.js' ?>"></script>

        <script src="<?php echo base_url() . 'plugins/morris/morris.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/plugins/raphael/raphael-min.js' ?>"></script>

        <script src="<?php echo base_url() . 'assets/pages/dashboard.js' ?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url() . 'assets/js/app.js' ?>"></script>

    </body>

</html>