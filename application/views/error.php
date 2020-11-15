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

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="<?= base_url('vendor/vertical/'); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('vendor/vertical/'); ?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('vendor/vertical/'); ?>assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>

    <div class="account-pages">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="card">
                        <div class="card-block">

                            <div class="ex-page-content text-center p-3">
                                <h4 class="m-t-30">Ooops, error!</h4><br>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
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

</body>

</html>