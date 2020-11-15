<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= $title; ?></title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?= base_url('vendor/vertical/'); ?>assets/images/favicon.ico">
    <!-- Sweet Alert -->
    <link href="<?= base_url('vendor'); ?>/plugins/sweet-alert2/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('vendor/vertical/'); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('vendor/vertical/'); ?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('vendor/vertical/'); ?>assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="">
    <!-- Begin page -->
    <div class="account-pages">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="p-2">
                                <h4 class="text-muted float-right font-18 mt-4">Login</h4>
                                <div>
                                    <a href="#" class="logo logo-admin"><img src="<?= base_url('vendor/vertical/'); ?>assets/images/logo-dark.png" height="28" alt="logo"></a>
                                </div>
                            </div>


                            <div class="p-2">
                                <form class="form-horizontal m-t-20" method="post" action="<?= base_url('auth/login'); ?>">

                                    <div class=" form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" name="username" required="" placeholder="Username">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="password" name="password" required="" placeholder="Password">
                                        </div>
                                    </div>
                                    <?php echo $this->session->flashdata('message'); ?>

                                    <div class="form-group text-center row m-t-20">
                                        <div class="col-12">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Masuk</button>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                </>
                <!-- end row -->
            </div>
        </div>

        <!-- jQuery  -->
        <script src="<?= base_url('vendor/vertical/'); ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url('vendor/vertical/'); ?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('vendor/vertical/'); ?>assets/js/modernizr.min.js"></script>
        <script src="<?= base_url('vendor/vertical/'); ?>assets/js/detect.js"></script>
        <script src="<?= base_url('vendor/vertical/'); ?>assets/js/fastclick.js"></script>
        <script src="<?= base_url('vendor/vertical/'); ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url('vendor/vertical/'); ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?= base_url('vendor/vertical/'); ?>assets/js/waves.js"></script>
        <script src="<?= base_url('vendor/vertical/'); ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?= base_url('vendor/vertical/'); ?>assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url('vendor/vertical/'); ?>assets/js/app.js"></script>
        <!-- Sweet-Alert  -->
        <script src="<?= base_url('vendor'); ?>/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="<?= base_url('vendor/vertical/'); ?>assets/pages/myscript.js"></script>

</body>

</html>