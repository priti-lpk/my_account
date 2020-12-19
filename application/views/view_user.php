<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>View User</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include_once 'topbar.php'; ?>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once 'sidebar.php'; ?>
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
                                    <h4 class="page-title">User List</h4>
                                    <!--                                    <ol class="breadcrumb">
                                                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Party</a></li>
                                                                            <li class="breadcrumb-item active">View Party</li>
                                                                        </ol>                                             -->
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">                  

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">View User</h4>
                                            <p class="text-muted m-b-30">View all user and filter by typing in search box
                                            </p>
                                            <div  style="overflow-x:auto;">
                                                <table id="datatable-buttons" class="table table-striped table-bordered  nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>UserName</th>
                                                            <th>Email</th>
															<th>Mobile No</th>
                                                            <th>FCM Id</th>
                                                            <th>Image</th>
                                                            <th>User Type</th>
                                                        </tr>
                                                    </thead> 
                                                    <tbody>        
                                                        <?php
                                                      
                                                        $i = 1;
                                                        foreach ($user as $val) {
                                                            echo "<tr>";
                                                            echo "<td>" . $i . "</td>";
                                                            echo "<td>" . $val->username . "</td>";
                                                            echo "<td>" . $val->email . "</td>";
															echo "<td>" . $val->mobile_no . "</td>";
                                                            echo "<td>" . $val->fcm_id . "</td>";
															echo "<td> <img src=" . $val->profile_image . "  id='image-link' alt='image' class='img-responsive' height=50 width=50></td>";
															echo "<td>" . $val->user_type . "</td>";
                                                            echo "</tr>";
                                                            $i++;
                                                        }
                                                        ?>                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <?php include_once 'footer.php'; ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/plugins/bootstrap-md-datetimepicker/js/moment-with-locales.min.js"></script>
        <script src="assets/plugins/bootstrap-md-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

        <!-- Plugins js -->
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

        <script src="assets/plugins/select2/js/select2.min.js"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
        <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
        <!-- Required datatable js -->

        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <script src="assets/pages/datatables.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>


    </body>

</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         