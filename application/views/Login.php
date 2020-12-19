<!DOCTYPE html>
<html>
    <title>Login</title>
    <head>
        <link href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() . 'assets/css/metismenu.min.css' ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() . 'assets/css/icons.css' ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() . 'assets/css/style.css' ?>" rel="stylesheet" type="text/css">
    </head>
    <body>
    <body>

        <!-- Background -->
        <div class="account-pages"></div>
        <!-- Begin page -->
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="<?php echo base_url('index') ?>" class="logo logo-admin">My Account</a>
                    </h3>

                    <div class="p-3">
                        <!--                        <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>-->
                        <p class="text-muted text-center">Sign in to continue to My Account</p>

                        <form class="form-horizontal m-t-30" action="<?php echo base_url('Index/verifyUser') ?>" method="post">

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                            </div>

                            <div class="form-group">                               
                                <div class="">
                                    <button class="btn btn-primary btn-block w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>
                            <?php if ($this->session->flashdata('msg')): ?>
                                <div class='alert alert-danger'>
                                    <center><p><?php echo $this->session->flashdata('msg'); ?></p></center>
                                </div>
                            <?php endif; ?>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- END wrapper -->
        <!-- jQuery  -->
        <script src="<?php echo base_url() . 'assets/js/jquery.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/bootstrap.bundle.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/metisMenu.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.slimscroll.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/waves.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/plugins/jquery-sparkline/jquery.sparkline.min.js' ?>"></script>
        <!-- App js -->
        <script src="<?php echo base_url() . 'assets/js/app.js' ?>"></script>

    </body>
    <!-- jQuery  -->
    <script src="<?php echo base_url() . 'assets/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/bootstrap.bundle.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/metisMenu.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/jquery.slimscroll.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/waves.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'assets/plugins/jquery-sparkline/jquery.sparkline.min.js' ?>"></script>

    <!-- App js -->
    <script src="<?php echo base_url() . 'assets/js/app.js' ?>"></script>
</body>
</html>